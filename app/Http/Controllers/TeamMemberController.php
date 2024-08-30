<?php

namespace App\Http\Controllers;

use App\Models\team_member;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class TeamMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['teams'] = DB::table('team_members')->paginate(5); 
        return view('admin.team.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.create');
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
                'name' => 'required',
                'main_image' => 'required|max:1',
                'designation' => 'required',
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
                        $file->storeAs('public/images/teams', $newImgName);   
                    }
                    $date = date('Y-m-d H:i:s');
                    $Data = [
                        'name'=>$request->name,
                        'designation'=>$request->designation,
                        'image' =>$newImgName,
                        'status'=>$request->status,
                        'created_at'=>$date,
                        'updated_at'=>$date,
                    ];
                    $id = DB::table('team_members')->insert($Data);
                    
                return response()->json(['status'=>'success','message'=>'Team Member Has Been Created Successfully...']);
            }
            
        } 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\team_member  $team_member
     * @return \Illuminate\Http\Response
     */
    public function show(team_member $team_member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\team_member  $team_member
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['team'] = DB::table('team_members')->where('id',$id)->first();
        return view('admin.team.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\team_member  $team_member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        if ($request->ajax()) {
            $validator = Validator::make($request->all(),[
                'name' => 'required',
                'main_image' => 'nullable|max:1',
                'designation' => 'required',
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
                        $file->storeAs('public/images/teams', $newImgName);   
                        DB::table('team_members')->where('id', $id)->update(['image' =>$newImgName]);
                    }
                    $date = date('Y-m-d H:i:s');
                    $Data = [
                        'name'=>$request->name,
                        'designation'=>$request->designation,
                        'status'=>$request->status,
                        'updated_at'=>$date,
                    ];
                    DB::table('team_members')->where('id', $id)->update($Data);
                return response()->json(['status'=>'success','message'=>'Team Member Has Been Updated Successfully...']);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\team_member  $team_member
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = DB::table('team_members')->where('id', $id)->first();
        if(File::exists("storage/images/teams/".$team->image))
        {
            File::delete("storage/images/teams/".$team->image);
        } 
        DB::table('team_members')->where('id', $id)->delete();
        return redirect()->back()->with('success','Team Member Has Been Deleted Successfully...');
    }
}
