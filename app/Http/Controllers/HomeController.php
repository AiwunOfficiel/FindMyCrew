<?php

namespace App\Http\Controllers;

use Auth;
use Cmgmyr\Messenger\Models\Thread;
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
        $message = new MessagesController; # Déclaration de la variable message

        /**
         * Affichage de la page home
         * 
         * @return mixed
         */
        return view('home')
            ->with('count', $message->header('count'))
            ->with('threads', $message->header('threads'));
    }
}
