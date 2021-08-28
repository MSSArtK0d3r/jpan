<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use App\Mail\SendVerificationAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class SendVerification extends Controller
{
    public function getCurrentUser(Request $request) {
       
        $user = NULL;
        if ( $request->session()->exists('identity') ) {
            $user = $request->session()->get('identity');
            $userUUID = DB::table('entries')->select('uuid')->where('email', $user)->first();
            return $userUUID->uuid;
        }
        return $user;
    }

    public function SendEmailVerify(Request $request){
        $uuid = $this->getCurrentUser($request);
        $data = [
            'verificationLink' => route('verify', $uuid),
        ];

        //$user = $request->session()->get('identity');
        $user = 'syadri@borneocode.com';
        Mail::to($user)->send(new SendVerificationAccount($data));
    }
}
