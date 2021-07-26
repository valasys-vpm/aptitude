<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\ProjectsImport;
use Illuminate\Http\Request;
use Excel;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.pages.home.index');
    }

    public function upload_file()
    {
        return view('admin.pages.upload');
    }

    public function upload_file_store(Request $request)
    {
        $rows = Excel::toArray(new ProjectsImport, $request->file('file'));
        //dd($rows[0]);
        $finalArray = "";
        foreach ($rows[0] as $key => $row) {
            //dd($rows[0]);

            if($key != 0) {
                $data = "
    ".($key-1)." =>
    (object) array (
        'Appending_Marketing_Comments' => '".$row[0]."',
        'City__c' => '".$row[1]."',
        'company' => '".$row[2]."',
        'Country__c' => '".$row[3]."',
        'email' => '".$row[4]."',
        'firstName' => '".$row[5]."',
        'lastName' => '".$row[6]."',
        'LeadSourceRecentDetails' => '".$row[7]."',
        'mktoPersonNotes' => '".$row[8]."',
        'phone' => '".$row[9]."',
        'State__c' => '".$row[10]."',
        'title' => '".$row[11]."',
        'industry' => '".$row[12]."',
        'No_Seats__c' => '".$row[13]."',
        'custom1' => '".$row[14]."',
    ),";
                $finalArray = $finalArray.$data;
            }
            //$finalArray = $finalArray.$key.'->'.$row[5].'<br>';
            //echo $key.'<br>';

        }

        echo '<pre>';
        echo '$finalLeadsArray = array (';
        echo $finalArray;
        echo ');';
        echo '</pre>';
        die;

    }
}
