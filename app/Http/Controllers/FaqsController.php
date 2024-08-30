<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FaqsController extends Controller
{
    public function index()
    {
        $data['faqs'] = DB::table('faqs')->orderBy('updated_at','DESC')->paginate(5);
        return view('admin.faqs.list',$data);
    }

    public function create()
    {
        return view('admin.faqs.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
            'question' => 'required',
            'answer' => 'required',
            ]
        );
        
        $date = date('Y-m-d H:i:s');
            $faqsData = [
                'question'=>$request->question,
                'answer' =>$request->answer,
                'created_at'=>$date,
                'updated_at'=>$date,
            ];
            DB::table('faqs')->insert($faqsData);

        return redirect()->back()->with('success','FAQs Has been Inserted Successfully...');
    }

    public function delete($id)
    {
        DB::table('faqs')->where('id', $id)->delete();
        return redirect()->back()->with('success','FAQs Has been Deleted Successfully...');

    }

    public function edit($id)
    {
        $data['faq'] = DB::table('faqs')->where('id', $id)->first();
        return view('admin.faqs.edit',$data);

    }

    public function update(Request $request)
    {  
        $request->validate(
            [
            'question' => 'required',
            'answer' => 'required',
            ]
        );
    $id = $request->id;
    $question = $request['question'];
    $answer = $request['answer'];    
    $date = date('Y-m-d H:i:s');
    DB::table('faqs')->where('id', $id)->update(array('question' => $question,'answer' => $answer,'updated_at' =>$date));
    return redirect('admin/faqs/list')->with('success','FAQs Has been Updated Successfully...');

    }
    
}
