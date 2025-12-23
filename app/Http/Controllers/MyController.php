<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    private $myvalue;
    protected $myvalue2;
    public $myval = "";

    // Constructor
    // MyController()

    function __construct() {

    }

    function index(){
        return view('myview.index');
    }

    function info(Request $req) {
        //echo $req->input('mynumber');
        return view('myview.info');
    }

    function calculate(Request $req) {
        // echo $req->input('mynumber');
        echo $req->input('mynumber');
        $data['num'] = $req->input('mynumber');
        return view('myview.calculate',$data);
    }

    function html101(Request $req) {
        return view('template.html101');
    }

    function result(Request $req) {
        $data = [
            'fname' => $req->input('fname'),
            'lname' => $req->input('lname'),
            'dateofbirth' => $req->input('dateofbirth'),
            'age' => $req->input('age'),
            'gender' => $req->input('gender'),
            'myfile' => $req->file('myfile'),
            'address' => $req->input('address'),
            'favoritecolor' => $req->input('favoritecolor'),
            'genre' => $req->input('genre'),
            'consent_check' => $req->input('consent_check'),
        ];
        return view('template.html101_view',$data);
    }
}
