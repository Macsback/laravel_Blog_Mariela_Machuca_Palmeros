<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnquiriesController extends Controller
{
    //
    public function index(){
        $data['enquieries'] = Enquiry::orderby('id')->paginate(10);
        return view('enquiries.index', $data);
    }
}
