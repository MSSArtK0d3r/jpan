<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use App\Mail\SendRecoverPin;
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
        
        $hasVerified = DB::table('entries')->select('verified')->where('uuid', $uuid)->first();
            if ($hasVerified->verified == 'verified') {
                return redirect()->route('doneverify');
            }

        if (is_null($uuid) == true) {
            return redirect()->route('home');
        }
        $data = [
            'verificationLink' => route('verify', $uuid),
        ];

        $user = $request->session()->get('identity');
        
        Mail::to($user)->send(new SendVerificationAccount($data));

        return view('verification.mail-sent', compact('data'));
    }

    public function sendPasswordToEmail(Request $request){
        $user = $request->session()->get('identity');
        $userPin = DB::table('entries')->select('pin')->where('email', $user)->first();
        $data = [
            'pin' => $userPin
        ];
        Mail::to($request->email)->send(new SendRecoverPin($data));

        return view('mail.pinrecover',compact('data'));
    }
}
