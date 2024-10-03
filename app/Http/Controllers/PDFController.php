<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\MailWithPDF;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;

class PDFController extends Controller
{
    public function generatePDF()
    {

        $data = [
            [
                'quantity' => 1,
                'description' => '1 Year Subscription',
                'price' => '129.00'
            ]
        ];

        $users = User::where('id', 1)->first();
     
        $uniqueid = time();

        $pdf = PDF::loadView('myPDF', compact('users'));
        $output = $pdf->output();
        file_put_contents(public_path().'/invoices/'.'Order#'.$uniqueid.'.pdf', $output);
        $array['view'] = 'mail.user';
        $array['subject'] = 'Order Placed - '.$uniqueid;
        $array['from'] = 'do-not-reply@thelokomoko.com';
        $array['content'] = 'Hi, Your order has been placed';
        $array['file'] = public_path().'/invoices/Order#'.$uniqueid.'.pdf';
        $array['file_name'] = 'Order#'.$uniqueid.'.pdf';
        $array['subjectsingle'] = 'Order Placed - '.$uniqueid;
        Mail::to($users->email)->queue(new MailWithPDF($array));
        // unlink($array['file']);

        dd($users);


        // $pdf = Pdf::loadView('myPDF', ['data' => $data]);
        // return $pdf->download('itsolutionstuff.pdf');
    }
}
