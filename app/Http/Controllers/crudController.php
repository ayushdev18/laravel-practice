<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class crudController extends Controller
{
    public function crud()
    {




        // agar pura table get karna ho toh
        /*
        $getdata = DB::table('users')->get();

        return $getdata;

 */



        //data agar insert karna ho toh 

        /*
        $getdata = DB::table("users")->insert([
            'name' => 'ayush',
            'email' => 'starayush2@gmail.com',
            'password' => '123'
             ]);

         if ($getdata) {
            return "data inserted";
        } else {
            return "not inserted";
        }
        
       
*/
        // agar data me kuchh update karna ho toh 
        /*
        $getdata = DB::table("users")->where('name', 'ayush')
            ->update([
                'email' => 'abc@gmail.com'

            ]);
        if ($getdata) {
            return "data updated";
        } else {
            return "not updated";
        }
*/
        // agar database me kuchh delete karna ho toh 

        /*
        $getdata = DB::table("users")->where('name', 'ayush')
            ->delete();
        if ($getdata) {
            return "data has been deleted";
        } else {
            return "datab has been not deleted";
        }
*/
    }
}
