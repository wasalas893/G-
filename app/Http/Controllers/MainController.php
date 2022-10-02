<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Mail\ApartmentMail;
use App\Mail\RetailMail;
use App\Mail\ReplyMail;
use App\Mail\ReplyMailretail;
use Mail;

class MainController extends Controller
{
    public function index(){
        
        return view('pages.main');
    }
    public function apartment_register(Request $request){

    
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            // 'g_recaptcha_response' => 'required',
        ]);
     
        if ($validator->passes()) {

            try {
                Mail::to('wasalas893@gmail.com')->send(new ApartmentMail($request));
                Mail::to($request->email )->send(new ReplyMail($request));
                return response()->json(['success'=>'Email has been sent!']);

            } catch (\Throwable $th) {
                return response()->json(['error'=>'Email has not been sent!']);
            }
        }
     
        return response()->json(['error'=>$validator->errors()]);

        

        
    }

    public function retail_register(Request $request){

     

        

        $validatorr = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            // 'g_recaptcha_response' => 'required'

        ]);   
     
        if ($validatorr->passes()) {

           try {
                Mail::to('wasalas893@gmail.com')->send(new RetailMail($request));
                Mail::to($request->email )->send(new ReplyMailretail($request)); 
                return response()->json(['success'=>'Email has been sent!']);
           } catch (\Throwable $th) {
            return response()->json(['error'=>'Email has not been sent!']);
           }
        }
     
        return response()->json(['error'=>$validatorr->errors()]);
    }

















    public function apartment_email(){
        return view('email.apartmentemail');
    }
    public function retaile_email(){
        return view('email.retailemail');
    }
    public function reply_email(){
        return view('email.replyemail');
    }
    public function replyemail_retail(){
        return view('email.replyemailretail');
    }
}
