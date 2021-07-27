<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class orderInsertController extends Controller
{
    public function insertform($id, $Cid){
        $service_id = $id;
        $company_id = $Cid;
        session()->put('service_id', $service_id);
        session()->put('company_id', $company_id);
        $name = "";
        $info = DB::table('services')->where('company_id', '=', $company_id)->where('service_id', '=', $service_id)->get();
        return view('layout.service_order', ['info' => $info]);
    }

    public function insert(Request $request){
        $service_id = session()->get('service_id');
        $company_id = session()->get('company_id');
        $sql = DB::table('services')->select('service_name')->where('service_id', '=', $service_id)->where('company_id', '=', $company_id)->get();

        foreach($sql as $row){
            $name = $row->service_name;
        }
        
        $FIO = $request->input('FIO');
        $phone =$request->input('phone');
        $email = $request->input('email');
        $date = date('Y-m-d');
        $data = array("company_id" => $company_id, "service_name" => $name, "FIO" => $FIO, "email" => $email, "phone_number" => $phone, "date" => $date);
        DB::table('orders')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo "<meta http-equiv='refresh' content='0;URL=/'>";
    }
}
