<?php

namespace App\Http\Controllers\Web;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Validator;
use App\Mail\ContactUs;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function index(Request $request)
    {
        $data['contacts'] = DB::table('contactus')->first();
        return view('admin.pages.contact_us',$data);
    }

    public function contact(Request $request)
    {
        if ($request->ajax()) 
        {
            $validator = Validator::make($request->all(),[
                'first_name'=>'required|max:100',
                'last_name'=>'required|max:100',
                'email'=>'required|email|max:100',
                'message'=>'required|max:400',
                'g-recaptcha-response' => 'required|captcha',
                'custom' => [
                    'g-recaptcha-response' => [
                        'required' => 'Please verify that you are not a robot.',
                        'captcha' => 'Captcha error! try again later or contact site admin.',
                    ],
                ],
            ]);
            if ($validator->fails()) 
            {
                return response()->json(['status'=>'error','errors'=> $validator->errors()->toArray()]);
            } 
            else 
            {
                $date = date('Y-m-d H:i:s');
                $contactData = [
                    'firstname'=>$request->first_name,
                    'lastname'=>$request->last_name,
                    'email'=>$request->email,
                    'phonenumber'=>$request->phone,
                    'subject'=>$request->subject,
                    'message'=>$request->message,
                    'read'=>FALSE,
                    'created_at'=>$date,
                    'updated_at'=>$date,
                ];
                DB::table('contacts')->insert($contactData);
                $name = $request->first_name." ".$request->last_name ;
                $message = $request->message; 
                $data = ['name'=>$name,'message'=>$message,'email'=>$request->email,'phone'=>$request->phone];
                Mail::to("moeendastgir@gmail.com")->send(new ContactUs($data));
                return response()->json(['status'=>'success','message'=>'Your Message Has Been Sent Successfully...']);
            }
        }       
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $date = date('Y-m-d H:i:s');
                $contactData = [
                    'email'=>$request->email,
                    'email1'=>$request->email1,
                    'phone'=>$request->phone,
                    'phone1'=>$request->phone1,
                    'address'=>$request->address,
                    'created_at'=>$date,
                    'updated_at'=>$date,
                ];
                DB::table('contactus')->where('id', $id)->update($contactData);
        return redirect()->back()->with('success','Data Has been Updated Successfully...');
    }
}