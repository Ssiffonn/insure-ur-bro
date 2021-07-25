<?php
    use Illuminate\Support\Facades\DB;
    
    $res = DB::table('companies')->get();
    foreach($res as $row){
        echo "<a href='".route('company', ['id' => $row->company_id])."'>".$row->name."</a>";
    }
