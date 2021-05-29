<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ModeratorController extends Controller
{
    public function __construct()
    {
        $this->middleware('is.moderator');
    }


    public function index()
    {
        $data=[];
        $info = (object) array(
                    'title' => "",
                    'management' => 'lister les utilisateurs'
        );
        return view('admin.adjointe')
                   ->with('data', $data)
                   ->with('info', $info);
    
    }
    
}
