<?php

namespace App\Http\Controllers;

use App\Models\page;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function terms()
    {
        $data['terms'] = DB::table('pages')->first();
        return view('admin.pages.terms',$data);
    }

    public function terms_update(Request $request)
    {
        $request->validate(
            [
            'description' => 'required',
            ]
        );
    $description = $request->description;
    $date = date('Y-m-d H:i:s');
    DB::table('pages')->where('id',1)->update(array('description' => $description,'updated_at' =>$date));
    return redirect()->back()->with('success','Terms & Conditions Has been Updated Successfully...');
    }

    public function privacy()
    {
        $data['policy'] = DB::table('pages')->skip(1)->take(1)->first();
        return view('admin.pages.policy',$data);
    }

    public function privacy_update(Request $request)
    {
        $request->validate(
            [
            'description' => 'required',
            ]
        );
    $description = $request->description;
    $date = date('Y-m-d H:i:s');
    DB::table('pages')->where('id',2)->update(array('description' => $description,'updated_at' =>$date));
    return redirect()->back()->with('success','Privacy & Policy Has been Updated Successfully...');
    }

    public function sections()
    {
        $data['sections'] = DB::table('sections')->paginate(10);
        return view('admin.sections.list', $data);
    }
    
      public function sections_create()
      {
           return view('admin.sections.create');
      }
      
      public function sections_store(Request $request)
      {
            if ($request->ajax()) {
                $validator = Validator::make($request->all(),[
                    'title' => 'required',
                    'page' => 'required',
                    'main_image' => 'nullable',
                    'description' => 'required',
                ],[]);
            }

            if ($validator->fails()) {
                return response()->json(['status'=>'error','errors'=> $validator->errors()->toArray()]);
            } else 
            {
                    $newImgName = "";  
                    if($request->hasFile('main_image'))
                    {
                        $files = $request->file('main_image');
                        $file = $files[0];
                        $orginalImageName = $file->getClientOriginalName();
                        $newImgName = Str::slug(date('YmdHis').'-'.$orginalImageName).'.'.$file->extension();
                        $file->storeAs('public/images/sections', $newImgName);   
                    }
                    $date = date('Y-m-d H:i:s');
                    $productData = [
                        'title'=>$request->title,
                        'description'=>$request->description,
                        'image' =>$newImgName,
                        'page_name'  =>$request->page,
                        'created_at'=>$date,
                        'updated_at'=>$date,
                    ];
                    $id = DB::table('sections')->insert($productData);
                return response()->json(['status'=>'success','message'=>'Section Has Been Created Successfully...']);
            }
      }
      
      public function sections_edit($id)
      {
           $data['section'] = DB::table('sections')->where('id',$id)->first();
           return view('admin.sections.edit', $data);
      }
      
      public function sections_update(Request $request)
      {
           $id = $request->id;
        if ($request->ajax()) {
            $validator = Validator::make($request->all(),[
                'title' => 'required',
                'page' => 'required',
                'main_image' => 'nullable',
                'description' => 'required',
            ],[]);
        }

            if ($validator->fails()) {
                return response()->json(['status'=>'error','errors'=> $validator->errors()->toArray()]);
            } else {
                    if($request->hasFile('main_image'))
                    {
                        $files = $request->file('main_image');
                        $file = $files[0];
                        $orginalImageName = $file->getClientOriginalName();
                        $newImgName = Str::slug(date('YmdHis').'-'.$orginalImageName).'.'.$file->extension();
                        $file->storeAs('public/images/sections', $newImgName);  
                        DB::table('sections')->where('id', $id)->update(['image' =>$newImgName]);
                    }
                    $date = date('Y-m-d H:i:s');
                    $productData = [
                        'title'=>$request->title,
                        'description'=>$request->description,
                        'page_name'=>$request->page,
                        'updated_at'=>$date,
                    ];
                    DB::table('sections')->where('id', $id)->update($productData);
                return response()->json(['status'=>'success','message'=>'Section Has Been Updated Successfully...']);
            }
      }
      
      public function sections_delete($id)
      {
            
        $section = DB::table('sections')->where('id', $id)->first();
        if(File::exists("storage/images/sections/".$section->image))
        {
            File::delete("storage/images/sections/".$section->image);
        } 
        DB::table('sections')->where('id', $id)->delete();
        return redirect()->back()->with('success','section Has Been Deleted Successfully...');
    
      }
    
    
    public function counters() 
    {
        
        $data['counters'] = DB::table('counter')->paginate(5);
        return view('admin.counters.list',$data);
    }
    
    public function counters_create()
    {
        return view('admin.counters.create');
    }
    
    public function counters_store(Request $request)
    {
        if ($request->ajax()) {
            $validator = Validator::make($request->all(),[
                'title' => 'required',
                'value' => 'required',
            ],[]);

            if ($validator->fails()) {
                return response()->json(['status'=>'error','errors'=> $validator->errors()->toArray()]);
            } else {
                    
                    $date = date('Y-m-d H:i:s');
                    $productData = [
                        'title'=>$request->title,
                        'value'=>$request->value,
                        'created_at'=>$date,
                        'updated_at'=>$date,
                    ];
                    DB::table('counter')->insert($productData);
                    
                return response()->json(['status'=>'success','message'=>'Counter Has Been Created Successfully...']);
            }
            
        } 
        
    }
    
    public function counters_edit($id)
    {
        $data['counter'] = DB::table('counter')->where('id',$id)->first();
        return view('admin.counters.edit',$data);
    }
    
    public function counters_update(Request $request)
    {
        $id = $request->id;
        if ($request->ajax()) {
            $validator = Validator::make($request->all(),[
                'title' => 'required',
                'value' => 'required',
            ],[]);

            if ($validator->fails()) {
                return response()->json(['status'=>'error','errors'=> $validator->errors()->toArray()]);
            } else {
                   
                    $date = date('Y-m-d H:i:s');
                    $productData = [
                        'title'=>$request->title,
                        'value'=>$request->value,
                    ];
                    DB::table('counter')->where('id', $id)->update($productData);
                return response()->json(['status'=>'success','message'=>'Counter Has Been Updated Successfully...']);
            }
        }
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, page $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(page $page)
    {
        //
    }
}
