<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = DB::table('mobil')->where('status', 'Aktif')->get();

        for ($i=0; $i < count($data); $i++) { 
            $data[$i]->harga = number_format($data[$i]->harga, 0, ".", ".");
        }

        return view('home')->with([
            'data'  => $data,
        ]);
    }

    public function logout()
    {
        //logout user
        auth()->logout();
        // redirect to homepage
        return redirect('/');
    }

}
