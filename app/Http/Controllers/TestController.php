<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    function getUsers() {
        return "Hi";
    }

    function sayHi($name = "laravel") {
        $message = "Hi " . $name;

        return response()->json([
            "status" => "Success",
            "message" => $message
        ]);
    }

    function addUser(Request $request){
        $name = $request->name;
        return response()->json([
            "status" => "Success",
            "message" => $name
        ]);
    }

    function sortString(){
        $str = 'eA2a1E';
        // $unsorted = str_split($str);
        // sort($unsorted);
        // $sorted = implode($unsorted);
        
        $array = array();
        for($i = 0; $i < strlen($str); $i++){
            $array[] = $str{$i};
        }
        array_multisort($array, SORT_NUMERIC, $array);

        return response()->json([
            "status" => "Success",
            "message" => $array
        ]);

    }
}
