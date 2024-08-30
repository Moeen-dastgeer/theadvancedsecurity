<?php

namespace App\Http\Controllers;

use App\Models\join;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Mail\JoinUs;
use Illuminate\Support\Facades\Mail;

class JoinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->ajax()) 
        {
            $validator = Validator::make($request->all(),[
                'name'=>'required|max:100',
                'address'=>'required|max:100',
                'email'=>'required|email|max:100',
                'question'=>'required',
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
                $data = [
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'address'=>$request->address,
                    'question'=>$request->question,
                    'message'=>$request->message,
                    'created_at'=>$date,
                    'updated_at'=>$date,
                ];
                DB::table('joins')->insert($data);
                $name = $request->name;
                $message = $request->message; 
                $data = ['name'=>$name,'message'=>$message,'email'=>$request->email,'question'=>$request->question];
                Mail::to("moeendastgir@gmail.com")->send(new JoinUs($data));
                return response()->json(['status'=>'success','message'=>'Your Message Has Been Sent Successfully...']);
            }
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\join  $join
     * @return \Illuminate\Http\Response
     */
    public function show(join $join)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\join  $join
     * @return \Illuminate\Http\Response
     */
    public function edit(join $join)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\join  $join
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, join $join)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\join  $join
     * @return \Illuminate\Http\Response
     */
    public function destroy(join $join)
    {
        //
    }
}
