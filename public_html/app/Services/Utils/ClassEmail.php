<?php

namespace App\Services\Utils;

use Illuminate\Support\Facades\Mail;

class ClassEmail {

    public static function sendMail($title, $view, $from, $tos, $data, $cc = [], $bcc = [], $files = []) {
        try {
            Mail::send($view, $data, function($msg) use ($title, $from, $tos, $cc, $bcc, $files) {
                //$msg->from('notify@j-job.com.vn', 'J-JOB');
                $msg->from('auto@linkvietnam-condotel.com.vn', 'linkvietnam-condotel.com.vn');
                $idx = 0;
                foreach ($tos as $to) {
                    if($idx == 0) 
                        $idx++;
                    $msg->to($to, '')->subject($title);
                }

                //send to list cc
                if (count($cc) > 0) {
                    foreach ($cc as $c) {
                        $msg->to($c, '')->subject($title);
                    }
                }
                
                //send to list bcc
                if (count($bcc) > 0) {
                    foreach ($bcc as $b) {
                        $msg->bcc($b, '')->subject($title);
                    }
                }

                //attach file
                if (count($files) > 0) {
                    foreach ($files as $file) {
                        $fileDetail = public_path() . '/' . $file;
                        if (file_exists($fileDetail)) {
                            $msg->attach($fileDetail);
                        }
                    }
                }
            });
            return \ReturnCode::RETURN_SUCCESS;
        } catch (\Exception $ex) {
            echo $ex->getMessage();
            return \ReturnCode::Exception_SEND_MAIL;
        }
    }

}
