<?php 
    namespace App\Helpers;
    use Illuminate\Support\Carbon;



    class DataFormatCarbon{
        static function date($date){
            $date = Carbon::create($date); 
            return $date->format("F j, Y"); 
        }
    }