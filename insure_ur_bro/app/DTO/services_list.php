<?php
    use Illuminate\Support\Facades\DB;

    $res = DB::table('services')->select('service_id', 'service_name')->groupBy('service_id', 'service_name')->get();
    foreach($res as $row){
        // echo "<a href='".route('service', ['id' => $row->service_id])."'>".$row->service_name."</a>";
    }