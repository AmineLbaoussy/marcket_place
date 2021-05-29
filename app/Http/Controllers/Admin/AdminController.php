<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
       $this->middleware('is.admin');
    }


    public function index()
    {
        $data=[];
        $info = (object) array(
                    'title' => "",
                    'management' => 'lister les utilisateurs'
        );
        return view('admin.office')
                   ->with('data', $data)
                   ->with('info', $info);
    }
}
