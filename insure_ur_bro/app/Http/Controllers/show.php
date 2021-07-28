<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class show extends Controller
{
    public function showCopmanies(){
        $companies = DB::table('companies')->get();
        return view('layout.companies', ['companies' => $companies]);
    }

    public function showServices(){
        $services = DB::table('services')->select('service_id', 'service_name')->groupBy('service_name', 'service_id')->get();
        return view('layout.services', ['services' => $services]);
    }

    public function showCompany($id){
        $company_id = $id;
        $name = DB::table('companies')->select('name')->where('company_id', '=', $company_id)->get();
        $info = DB::table('services')->where('company_id', '=', $company_id)->get();
        $data = ['Cid' => $company_id, 'name' => $name, 'info' => $info];
        return view('layout.company', ['info' => $data]);       
    }

    public function login(){
        $user = DB::table('loginfo')->get();
        return view('layout.profile', ['user' => $user]);
    }

    public function logged(){
        $company_id = session()->get('id');
        $orders = DB::table('orders')->where('company_id', '=', $company_id)->get();
        return view('layout.profile_logged', ['orders' => $orders]);
    }
}
