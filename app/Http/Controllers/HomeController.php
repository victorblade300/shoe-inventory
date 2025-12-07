<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Details;
use App\Models\User;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = User::paginate(10);
        // return $data;
        return view('contacts-list', compact(
            'data'
        ));
    }

}
