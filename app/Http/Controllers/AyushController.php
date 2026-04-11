<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ayush;

class AyushController
{
    public function getdata()
    {
        // $getdata = Ayush::get();
        // return $getdata;



        // $getdata = Ayush::where('name', 'ayush')->get();

        /* $getdata = Ayush::insert([
            'name' => 'nishnat',
            'gf' => 'ranjani',
            'age' => '25'
        ]);
*/
        /*
        $getdata = Ayush::where('name', 'ayush')
            ->update([
                'gf' => 'swati'
            ]);
*/

        $getdata = Ayush::where('id', 1)
            ->delete();


        return $getdata;
    }
}
