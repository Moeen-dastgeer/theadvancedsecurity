<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard(Request $request){
        $date = date('Y-m-d ');
        $data['team'] = DB::table('team_members')->count(); 
        $data['services'] = DB::table('services')->count(); 
        $data['contact'] = DB::table('contacts')->count(); 
        $data['contacts'] = DB::table('contacts')->whereBetween('created_at',[$date.' 00:00:00',$date.' 23:59:59'])->paginate(4);
        return view('admin.dashboard',$data);
    }
}
