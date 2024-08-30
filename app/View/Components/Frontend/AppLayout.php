<?php

namespace App\View\Components\Frontend;

use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        $data['services'] = DB::table('services')->get();
        $data['contact'] = DB::table('contactus')->first();
        return view('web.layouts.app',$data);
    }
}
