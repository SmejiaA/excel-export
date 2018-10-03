<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function import($value='')
    {
    	Excel::import(new UsersImport, 'users.xlsx');
        
        return redirect('/home')->with('success', 'All good!');
    }
}
