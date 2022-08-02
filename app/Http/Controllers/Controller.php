<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function sort()
    {
        $dates = User::sortable()->get();
        return view('dashboard')->with('dates', $dates);
//        $dates = User::select('id','name','email')->get();
//        return view('dashboard', compact('dates'));

//        return view('items.index', compact('items'));
//        $dates = User::sortable()->get();
//        return view("dashboard")->with('dates',$dates);
    }
}
