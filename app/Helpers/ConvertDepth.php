<?php 
    namespace App\Helpers;



    class ConvertDepth{
        static function render($depth){
            $depth = $depth * 50;
            $depth = (string)$depth;
            $depth.="px";
            return $depth;
        }
    }