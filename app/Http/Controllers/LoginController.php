<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController
{

    public function  login()
    {
        $n = 4;
        for ($i = 1; $i <= $n; $i++) {
            for ($j = 1; $j <= (2 * $n) - 1; $j++) {

                echo "$i";
            }
            echo "<br/>";
        }
    }
}
