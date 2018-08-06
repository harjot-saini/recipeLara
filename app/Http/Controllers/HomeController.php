<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Collection;
use Illuminate\Support\Fluent;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function recipe()
    {
        return view('recipe');
    }

    /**
     * @return string
     */
    protected function url()
    {
        return 'http://www.recipepuppy.com/api/?i=';
    }

    public function searchRecipe($term)
    {
        try {
            $json = file_get_contents($this->url() . $term);
            $data = json_decode($json, true);
        } catch (\Exception $e) {
            $response = false;
        }

        return $data;
    }
}
