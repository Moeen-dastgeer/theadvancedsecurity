<?php

namespace App\Http\Controllers;

use App\Models\servicebox;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ServiceboxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['services'] = DB::table('serviceboxes')->paginate(5); 
        return view('admin.servicebox.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['services'] = DB::table('services')->get();
        return view('admin.servicebox.create',$data);
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
                'back_image' => 'required|max:1',
                'description' => 'required|max:200',
                'link' => 'required',
            ],[]);

            if ($validator->fails()) {
                return response()->json(['status'=>'error','errors'=> $validator->errors()->toArray()]);
            } else {
                    $newImgName = "";  
                    $newImgName1 = "";  
                    if($request->hasFile('main_image'))
                    {
                        $files = $request->file('main_image');
                        $file = $files[0];
                        $orginalImageName = $file->getClientOriginalName();
                        $newImgName = Str::slug(date('YmdHis').'-'.$orginalImageName).'.'.$file->extension();
                        $file->storeAs('public/images/services/svg', $newImgName);   
                    }
                    if($request->hasFile('back_image'))
                    {
                        $files = $request->file('back_image');
                        $file = $files[0];
                        $orginalImageName = $file->getClientOriginalName();
                        $newImgName1 = Str::slug(date('YmdHis').'-'.$orginalImageName).'.'.$file->extension();
                        $file->storeAs('public/images/services', $newImgName1);   
                    }
                    $date = date('Y-m-d H:i:s');
                    $Data = [
                        'title'=>$request->title,
                        'description'=>$request->description,
                        'image' =>$newImgName,
                        'back_image' =>$newImgName1,
                        'link' =>$request->link,
                        'status'=>$request->status,
                        'created_at'=>$date,
                        'updated_at'=>$date,
                    ];
                    $id = DB::table('serviceboxes')->insert($Data);
                    
                return response()->json(['status'=>'success','message'=>'Service Has Been Created Successfully...']);
            }
            
        } 

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\servicebox  $servicebox
     * @return \Illuminate\Http\Response
     */
    public function show(servicebox $servicebox)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\servicebox  $servicebox
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['service'] = DB::table('serviceboxes')->where('id',$id)->first();
        $data['services'] = DB::table('services')->get();
        return view('admin.servicebox.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\servicebox  $servicebox
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        if ($request->ajax()) {
            $validator = Validator::make($request->all(),[
                'title' => 'required',
                'main_image' => 'nullable|max:1',
                'back_image' => 'nullable|max:1',
                'description' => 'required|max:200',
                'link' => 'required',
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
                        $file->storeAs('public/images/services/svg', $newImgName);   
                        DB::table('serviceboxes')->where('id', $id)->update(['image' =>$newImgName]);
                    }
                    if($request->hasFile('back_image'))
                    {
                        $files = $request->file('back_image');
                        $file = $files[0];
                        $orginalImageName = $file->getClientOriginalName();
                        $newImgName = Str::slug(date('YmdHis').'-'.$orginalImageName).'.'.$file->extension();
                        $file->storeAs('public/images/services', $newImgName);   
                        DB::table('serviceboxes')->where('id', $id)->update(['back_image' =>$newImgName]);
                    }
                    $date = date('Y-m-d H:i:s');
                    $Data = [
                        'title'=>$request->title,
                        'description'=>$request->description,
                        'status'=>$request->status,
                        'link'=>$request->link,
                        'updated_at'=>$date,
                    ];
                    DB::table('serviceboxes')->where('id', $id)->update($Data);
                return response()->json(['status'=>'success','message'=>'Service Has Been Updated Successfully...']);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\servicebox  $servicebox
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = DB::table('serviceboxes')->where('id', $id)->first();
        if(File::exists("storage/images/services/svg/".$service->image))
        {
            File::delete("storage/images/services/svg/".$service->image);
        } 
        DB::table('serviceboxes')->where('id', $id)->delete();
        return redirect()->back()->with('success','Service Has Been Deleted Successfully...');
    }
}
