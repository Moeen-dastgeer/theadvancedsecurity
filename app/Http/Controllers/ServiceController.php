<?php

namespace App\Http\Controllers;

use App\Models\service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['services'] = DB::table('services')->paginate(5);
        return view('admin.services.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->ajax()) {
            $validator = Validator::make($request->all(),[
                'title' => 'required',
                'main_image' => 'required|max:1',
                'long_desc' => 'required',
            ],[]);

            if ($validator->fails()) {
                return response()->json(['status'=>'error','errors'=> $validator->errors()->toArray()]);
            } else {
                    $newImgName = "";  
                    if($request->hasFile('main_image'))
                    {
                        $files = $request->file('main_image');
                        $file = $files[0];
                        $orginalImageName = $file->getClientOriginalName();
                        $newImgName = Str::slug(date('YmdHis').'-'.$orginalImageName).'.'.$file->extension();
                        $file->storeAs('public/images/services', $newImgName);   
                    }
                    $date = date('Y-m-d H:i:s');
                    $productData = [
                        'title'=>$request->title,
                        'slug'=>Str::slug($request->title.'-'.date('YmdHis')),
                        'description'=>$request->long_desc,
                        'image' =>$newImgName,
                        'status'=>$request->status,
                        'created_at'=>$date,
                        'updated_at'=>$date,
                    ];
                    $id = DB::table('services')->insert($productData);
                    
                return response()->json(['status'=>'success','message'=>'Service Has Been Created Successfully...']);
            }
            
        } 

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['service'] = DB::table('services')->where('id',$id)->first();
        return view('admin.services.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, service $service)
    {
        $id = $request->id;
        if ($request->ajax()) {
            $validator = Validator::make($request->all(),[
                'title' => 'required',
                'main_image' => 'nullable|max:1',
                'long_desc' => 'required',
            ],[]);

            if ($validator->fails()) {
                return response()->json(['status'=>'error','errors'=> $validator->errors()->toArray()]);
            } else {
                    if($request->hasFile('main_image'))
                    {
                        $files = $request->file('main_image');
                        $file = $files[0];
                        $orginalImageName = $file->getClientOriginalName();
                        $newImgName = Str::slug(date('YmdHis').'-'.$orginalImageName).'.'.$file->extension();
                        $file->storeAs('public/images/services', $newImgName);   
                        DB::table('services')->where('id', $id)->update(['image' =>$newImgName]);
                    }
                    $date = date('Y-m-d H:i:s');
                    $productData = [
                        'title'=>$request->title,
                        'description'=>$request->long_desc,
                        'status'=>$request->status,
                        'updated_at'=>$date,
                    ];
                    DB::table('services')->where('id', $id)->update($productData);
                return response()->json(['status'=>'success','message'=>'Service Has Been Updated Successfully...']);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = DB::table('services')->where('id', $id)->first();
        if(File::exists("storage/images/services/".$image->image))
        {
            File::delete("storage/images/services/".$image->image);
        } 
        DB::table('services')->where('id', $id)->delete();
        return redirect()->back()->with('success','Service Has Been Deleted Successfully...');
    }
}
