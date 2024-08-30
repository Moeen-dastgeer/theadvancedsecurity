<?php

namespace App\Http\Controllers;

use App\Models\slider;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['sliders'] = DB::table('sliders')->get(); 
        return view('admin.sliders.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sliders.create');
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
                'title'=>'required|max:100',
                'description'=>'required|max:100',
                'main_image'=>'required',  
            ]);
            if ($validator->fails()) 
            {
                return response()->json(['status'=>'error','errors'=> $validator->errors()->toArray()]);
            } 
            else 
            {
                $newImgName = "";  
                if($request->hasFile('main_image'))
                {
                    $files = $request->file('main_image');
                    $file = $files[0];
                    $orginalImageName = $file->getClientOriginalName();
                    $newImgName = Str::slug(date('YmdHis').'-'.$orginalImageName).'.'.$file->extension();
                    $file->storeAs('public/images/sliders', $newImgName);   
                }
                $date = date('Y-m-d H:i:s');
                $data = [
                    'title'=>$request->title,
                    'description'=>$request->description,
                    'image'=>$newImgName,
                    'status'=>$request->status,
                    'created_at'=>$date,
                    'updated_at'=>$date,
                ];
                DB::table('sliders')->insert($data);
                return response()->json(['status'=>'success','message'=>'Slider Has Been Created Successfully...']);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['slider'] = DB::table('sliders')->where('id',$id)->first();
        return view('admin.sliders.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        if ($request->ajax()) {
            $validator = Validator::make($request->all(),[
                'title' => 'required',
                'description' => 'required',
                'main_image' => 'nullable',
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
                        $file->storeAs('public/images/sliders', $newImgName);   
                        DB::table('sliders')->where('id', $id)->update(['image' =>$newImgName]);
                    }
                    $date = date('Y-m-d H:i:s');
                    $Data = [
                        'title'=>$request->title,
                        'description'=>$request->description,
                        'status'=>$request->status,
                        'updated_at'=>$date,
                    ];
                    DB::table('sliders')->where('id', $id)->update($Data);
                return response()->json(['status'=>'success','message'=>'Slider Has Been Updated Successfully...']);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = DB::table('sliders')->where('id', $id)->first();
        if(File::exists("storage/images/sliders/".$slider->image))
        {
            File::delete("storage/images/sliders/".$slider->image);
        } 
        DB::table('sliders')->where('id', $id)->delete();
        return redirect()->back()->with('success','Slider Has Been Deleted Successfully...');
    }
}
