<?php

namespace App\View\Components\Frontend;

use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;

class Contact extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        $data['services'] = DB::table('services')->get();
        $data['faqs'] = DB::table('faqs')->get();
        return view('web.components.contact',$data);
    }
}
