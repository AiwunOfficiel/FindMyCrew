<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Cmgmyr\Messenger\Models\Message;
use Cmgmyr\Messenger\Models\Participant;
use Cmgmyr\Messenger\Models\Thread;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;

class MessagesController extends Controller
{
    /**
     * Attribut les valeurs de $threads & $count
     * 
     * @param $value
     * @return string
     */
    public function header($value) {
        if(Auth::check()):
            if($value = 'count'):
                return Auth::user()->newThreadsCount();
            elseif($value = 'threads'):
                return Thread::getAllLatest()->get();
            endif;
        endif;
    }


    /**
     * Liste tout les messages de l'utilisateur
     * 
     * @return mixed
     */
    public function index() {
        $threads = Thread::getAllLatest()->get();
        return view('messager.index', compact('threads'));
    }

    /**
     * Affiche le message
     * 
     * @param $id
     * @return mixed
     */
    public function show($id) {
        try {
            $thread = Thread::findOrFail($id);
        } catch(ModelNotFoundException $e){
            Session::flash('error_message', 'La discussion avec l\'id "'.$id.'" n\'a pas était trouvé !');
            return redirect()->route('messages');
        }
        $userId = Auth::id();
        $users = User::whereNotIn('id', $thread->participantsUserIds($userId));

        $thread->markAsRead($userId);
        return view('messager.show', compact('thread', 'users'));
    }

    /**
     * Créer un nouveau message
     * 
     * @return mixed
     */
    public function create() {
        $count = $this->header('count');
        $threads = $this->header('threads');
        $users = User::where('id', '!=', Auth::id())->get();
        return view('message.create', compact('users', 'count', 'threads'));

    }

    /**
     * Validation d'un nouveau message
     * 
     * @return mixed
     */
    public function store() {
        $input = Request::all();

        $thread = Thread::create([
            'subject' => $input['subject']
        ]);

        // Message
        Message::create([
            'thread_id' => $thread->id,
            'user_id' => Auth::id(),
            'body' => $input['message'],
        ]);

        // Sender
        Participant::create([
            'thread_id' => $thread->id,
            'user_id' => Auth::id(),
            'last_read' => new Carbon,
        ]);

        // Envoyer à
        if(Request::has('recipients')) {
            $thread->addParticipant($input['recipients']);
        }

        return redirect()->route('messages');
    }

    /**
     * Ajouter un nouveau message à une conversation
     * 
     * @param $id
     * @return mixed
     */
    public function update($id) {
        try {
            $thread = Thread::findOrFail($id);
        } catch(ModelNotFoundException $e) {
            Session::flash('error_message', 'La discussion avec l\'id "'.$id.'" n\'a pas était trouvé !');
            return redirect()->route('messages');
        }
        $thread->activateAllParticipants();

        // Message
        Message::create([
            'thread_id' => $thread->id,
            'user_id' => Auth::id(),
            'body' => Request::input('messages'),
        ]);

        // Ajouter un participant
        $participant = Participant::findOrCreate([
            'thread_id' => $thread->id,
            'user_id' => Auth::id(),
        ]);
        $participant->last_read = new Carbon;
        $participant->save();

        if(Request::has('recipients')) {
            $thread->addParticipant(Request::input('recipients'));
        }

        return redirect()->route('messages.show', $id);
    }
}
