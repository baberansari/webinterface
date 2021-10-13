<?php
namespace App\Http\Controllers\Api;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Main()
    {
        // echo 'test';
        return view('pages.Main'); 
    }
    public function Home()
    {
        $title="Home ";
        // echo 'test';
        return view('pages.Home')->with('title',$title); 
    }
    
    public function About()
    {     $title="About";
        // echo 'test';
        return view('pages.About')->with('title',$title); 

    }
    public function Contact()
    {     $title="Contact  ";
        // echo 'test';
        return view('pages.Contact')->with('title',$title); 

    }
    public function Service()
    {
        $title="services  ";
        $data = array(
            'title' => 'services',
            'service' => ['ali','ahmed','ashar']

        );

        // echo 'test';
        return view('pages.Service')->with($data); 
    }
   
}