<?php

namespace App\Http\Controllers\Web;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(Request $request){
        $data['services'] = DB::table('serviceboxes as sb')->join('services as s', 'sb.link', '=','s.id')
                ->select('sb.*','s.slug')
                ->where('s.status','enable')
                ->get(); 
        $data['sliders'] = DB::table('sliders')->where('status','enable')->get();         
        $data['counters'] = DB::table('counter')->get();         
        return view('web.index',$data); 
    }

    public function about(Request $request){
        $data['teams'] = DB::table('team_members')->where('status','enable')->get();
        return view('web.about',$data); 
    }

    public function service($slug){
        $data['service'] = DB::table('services')->where('slug',$slug)->where('status','enable')->first();
        return view('web.service',$data); 
    }

    public function contact(Request $request){
        $data['contact'] = DB::table('contactus')->first();
        return view('web.contact',$data); 
    }

    public function join_our_team(Request $request){
        return view('web.join-our-team'); 
    }

    public function policy()
    {
        $data['policy'] = DB::table('services')->where('id',2)->first();
        return view('web.privacy-policy',$data);
    }

    public function terms()
    {
        $data['terms'] = DB::table('services')->where('id',1)->first();
        return view('web.terms-conditions',$data);
    }
}
