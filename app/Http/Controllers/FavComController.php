<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavComController extends Controller
{
    public function welcome(){
        {
            return view('welcome');
        }
    }
        // Formation 
    public function fHottelerieRestauration(){
        return view('Formation.hottelerieRestauration');
    }
    public function fPatisserie(){
        return view('Formation.patisserie');
    }

        // Services
    public function sEvenementiel(){
        return view('Service.evenementiel');
    }
    public function sHottelerie(){
        return view('Service.hottelerie');
    }

        // A propos
    public function about(){
        return view('about');
    }
    
        // Contact
    public function contact(){
        return view('contact');
    }

}
