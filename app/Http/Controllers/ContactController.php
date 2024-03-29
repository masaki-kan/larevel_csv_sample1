<?php

namespace App\Http\Controllers;

use Symfony\Component\HttpFoundation\StreamedResponse;
use Illuminate\Http\Request;
use App\Contacts;

class ContactController extends Controller
{
    //
    public function index(Request $request)
    {
        $contacts = Contacts::select('contacts.*', 'c.name AS condition_name', 'd.name AS design_name')
            ->where('contacts.status', 1)
            ->leftJoin('conditions AS c', 'contacts.conditions_id', '=', 'c.id')
            ->leftJoin('designs AS d', 'contacts.designs_id', '=', 'd.id')
            ->orderBy('contacts.created_at', 'DESC')
            ->get();

        return view('index', compact('contacts'));
    }

    public function csvExport(Request $request)
    {
        $post = $request->all();
        $response = new StreamedResponse(
            function () use ($request, $post) {

                $stream = fopen('php://output', 'w');
                $contacts = new Contacts();

                // 文字化け回避
                stream_filter_prepend($stream, 'convert.iconv.utf-8/cp932//TRANSLIT');

                // ヘッダー行を追加
                fputcsv($stream, $contacts->csvHeader());

                $results = $contacts->getCsvData($post['start_date'], $post['end_date']);

                if (empty($results[0])) {
                    fputcsv($stream, [
                        'データが存在しませんでした。',
                    ]);
                } else {
                    foreach ($results as $row) {
                        fputcsv($stream, $contacts->csvRow($row));
                    }
                }
                fclose($stream);
            }
        );
        $response->headers->set('Content-Type', 'application/octet-stream');
        $response->headers->set('content-disposition', 'attachment; filename=' . $post['start_date'] . '〜' . $post['end_date'] . 'お問い合わせ一覧.csv');

        return $response;
    }
}
