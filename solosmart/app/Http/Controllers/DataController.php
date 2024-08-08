<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    public function getData(Request $request)
    {
        $id = $request->input('id');

        $data = DB::table('esp32_table_dht11_leds_update')
            ->where('id', $id)
            ->first();

        return response()->json($data);
    }

    public function updateData(Request $request)
    {
        $data = $request->all();

        DB::table('esp32_table_dht11_leds_record')->insert($data);

        return response()->json(['status' => 'success']);
    }
}



