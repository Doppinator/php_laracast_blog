<?php

        //-------------
        //Function takes an input for $value (specified URI in code). That input is passed to if() to compare against the REQUEST_URI. If truthy, returns $value string to function.

        function urlIS($value) {
            return $_SERVER['REQUEST_URI'] === $value;
        }


        /* The same logic as
        //Reusable function urlIS(). $value is provided by code.
        function urlIS($value)
        {
            //if input $value is absolutely the same as Server's reported GET URI, returns truthy.
            if ($value === $_SERVER['REQUEST_URI']) {
                //When if is truthy, give urlIS() the input back for use.
                return $value;
            };
        }*/

        //HOW TO USE:
        // <?php urlIS('/') ? 'EchoStringIfTruthy' : 'EchoStringIfNotTruthy'; 
        //-------------
        

//When you call dd() you give it an argument; that argument is passed to var_dump(). Function just encapsulates rest of instructions (echo, die, etc) for reuse.
function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}
