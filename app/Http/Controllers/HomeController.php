<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MessagesController;

class HomeController extends Controller
{
    /**
     * Création d'une nouvelle instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Affichage du tableau de bord.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $message = new MessagesController;
        return view('home')
            ->with('count', $message->header('count'))
            ->with('threads', $message->header('threads'));
    }
}
