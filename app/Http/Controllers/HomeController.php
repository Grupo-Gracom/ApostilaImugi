<?php

namespace App\Http\Controllers;

use App\User;
use App\Resposta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    
    protected $usuario;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->usuario = Auth::user();

            return $next($request);
        });
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$ultimasNoticias = Noticia::orderBy('noticia_id', 'desc')->simplePaginate(10);
        return view('home/index');
    }

    //UNIDADE 1
    public function unidade1Vocabulary(){
        return view('unidade1/vocabulary');
    }
    public function unidade1Conversation(){
        return view('unidade1/conversation');
    }
    public function unidade1Grammar(){
        return view('unidade1/grammar');
    }
    public function unidade1Listening(){
        return view('unidade1/listening');
    }
    public function unidade1Pronunciation(){
        return view('unidade1/pronunciation');
    }
    public function unidade1Understanding(){
        return view('unidade1/understanding');
    }

    //UNIDADE 2
    public function unidade2Vocabulary(){
        return view('unidade2/vocabulary');
    }
    public function unidade2Grammar(){
        return view('unidade2/grammar');
    }
    public function unidade2Listening(){
        return view('unidade2/listening');
    }
    public function unidade2Understanding(){
        return view('unidade2/understanding');
    }

    //UNIDADE 3
    public function unidade3Vocabulary(){
        return view('unidade3/vocabulary');
    }
    public function unidade3Conversation(){
        return view('unidade3/conversation');
    }
    public function unidade3Grammar(){
        return view('unidade3/grammar');
    }
    public function unidade3Pronunciation(){
        return view('unidade3/pronunciation');
    }
    public function unidade3Listening(){
        return view('unidade3/listening');
    }
    public function unidade3Understanding(){
        return view('unidade3/understanding');
    }
    
    //UNIDADE 4
    public function unidade4Vocabulary(){
        return view('unidade4/vocabulary');
    }
    public function unidade4Conversation(){
        return view('unidade4/conversation');
    }
    public function unidade4Grammar(){
        return view('unidade4/grammar');
    }
    public function unidade4Pronunciation(){
        return view('unidade4/pronunciation');
    }
    public function unidade4Listening(){
        return view('unidade4/listening');
    }
    public function unidade4Understanding(){
        return view('unidade4/understanding');
    }

    //UNIDADE 5
    public function unidade5Vocabulary(){
        return view('unidade5/vocabulary');
    }
    public function unidade5Conversation(){
        return view('unidade5/conversation');
    }
    public function unidade5Grammar(){
        return view('unidade5/grammar');
    }
    public function unidade5Pronunciation(){
        return view('unidade5/pronunciation');
    }
    public function unidade5Listening(){
        return view('unidade5/listening');
    }
    public function unidade5Understanding(){
        return view('unidade5/understanding');
    }

    //UNIDADE 6
    public function unidade6Vocabulary(){
        return view('unidade6/vocabulary');
    }
    public function unidade6Conversation(){
        return view('unidade6/conversation');
    }
    public function unidade6Grammar(){
        return view('unidade6/grammar');
    }
    public function unidade6Pronunciation(){
        return view('unidade6/pronunciation');
    }
    public function unidade6Listening(){
        return view('unidade6/listening');
    }
    public function unidade6Understanding(){
        return view('unidade6/understanding');
    }
    
    //UNIDADE 7
    public function unidade7Vocabulary(){
        return view('unidade7/vocabulary');
    }
    public function unidade7Conversation(){
        return view('unidade7/conversation');
    }
    public function unidade7Grammar(){
        return view('unidade7/grammar');
    }
    public function unidade7Pronunciation(){
        return view('unidade7/pronunciation');
    }
    public function unidade7Listening(){
        return view('unidade7/listening');
    }
    public function unidade7Understanding(){
        return view('unidade7/understanding');

    }

    //UNIDADE 8
    public function unidade8Vocabulary(){
        return view('unidade8/vocabulary');
    }
    public function unidade8Conversation(){
        return view('unidade8/conversation');
    }
    public function unidade8Grammar(){
        return view('unidade8/grammar');
    }
    public function unidade8Pronunciation(){
        return view('unidade8/pronunciation');
    }
    public function unidade8Listening(){
        return view('unidade8/listening');
    }
    public function unidade8Understanding(){
        return view('unidade8/understanding');
    }
    //UNIDADE 9
    public function unidade9Vocabulary(){
        return view('unidade9/vocabulary');
    }
    public function unidade9Conversation(){
        return view('unidade9/conversation');
    }
    public function unidade9Grammar(){
        return view('unidade9/grammar');
    }
    public function unidade9Pronunciation(){
        return view('unidade9/pronunciation');
    }
    public function unidade9Listening(){
        return view('unidade9/listening');
    }
    public function unidade9Understanding(){
        return view('unidade9/understanding');
    }

    //UNIDADE 10
    public function unidade10Vocabulary(){
        return view('unidade10/vocabulary');
    }
    public function unidade10Conversation(){
        return view('unidade10/conversation');
    }
    public function unidade10Grammar(){
        return view('unidade10/grammar');
    }
    public function unidade10Pronunciation(){
        return view('unidade10/pronunciation');
    }
    public function unidade10Listening(){
        return view('unidade10/listening');
    }
    public function unidade10Understanding(){
        return view('unidade10/understanding');
    }

    //UNIDADE 11
    public function unidade11Vocabulary(){
        return view('unidade11/vocabulary');
    }
    public function unidade11Conversation(){
        return view('unidade11/conversation');
    }
    public function unidade11Grammar(){
        return view('unidade11/grammar');
    }
    public function unidade11Pronunciation(){
        return view('unidade11/pronunciation');
    }
    public function unidade11Listening(){
        return view('unidade11/listening');
    }
    public function unidade11Understanding(){
        return view('unidade11/understanding');
    }

    //UNIDADE 12
    public function unidade12Vocabulary(){
        return view('unidade12/vocabulary');
    }
    public function unidade12Conversation(){
        return view('unidade12/conversation');
    }
    public function unidade12Grammar(){
        return view('unidade12/grammar');
    }
    public function unidade12Pronunciation(){
        return view('unidade12/pronunciation');
    }
    public function unidade12Listening(){
        return view('unidade12/listening');
    }
    public function unidade12Understanding(){
        return view('unidade12/understanding');
    }

    //UNIDADE 13
    public function unidade13Vocabulary(){
        return view('unidade13/vocabulary');
    }
    public function unidade13Conversation(){
        return view('unidade13/conversation');
    }
    public function unidade13Grammar(){
        return view('unidade13/grammar');
    }
    public function unidade13Pronunciation(){
        return view('unidade13/pronunciation');
    }
    public function unidade13Listening(){
        return view('unidade13/listening');
    }
    public function unidade13Understanding(){
        return view('unidade13/understanding');
    }
    //UNIDADE 16
    public function unidade16Vocabulary(){
        return view('unidade16/vocabulary');
    }
    public function unidade16Conversation(){
        return view('unidade16/conversation');
    }
    public function unidade16Grammar(){
        return view('unidade16/grammar');
    }
    public function unidade16Pronunciation(){
        return view('unidade16/pronunciation');
    }
    public function unidade16Listening(){
        return view('unidade16/listening');
    }
    public function unidade16Understanding(){
        return view('unidade16/understanding');
    }
    //UNIDADE 17
    public function unidade17Vocabulary(){
        return view('unidade17/vocabulary');
    }
    public function unidade17Conversation(){
        return view('unidade17/conversation');
    }
    public function unidade17Grammar(){
        return view('unidade17/grammar');
    }
    public function unidade17Pronunciation(){
        return view('unidade17/pronunciation');
    }
    public function unidade17Listening(){
        return view('unidade17/listening');
    }
    public function unidade17Understanding(){
        return view('unidade17/understanding');
    }
    //UNIDADE 18
    public function unidade18Vocabulary(){
        return view('unidade18/vocabulary');
    }
    public function unidade18Conversation(){
        return view('unidade18/conversation');
    }
    public function unidade18Grammar(){
        return view('unidade18/grammar');
    }
    public function unidade18Pronunciation(){
        return view('unidade18/pronunciation');
    }
    public function unidade18Listening(){
        return view('unidade18/listening');
    }
    public function unidade18Understanding(){
        return view('unidade18/understanding');
    }
    //UNIDADE 19
    public function unidade19Vocabulary(){
        return view('unidade19/vocabulary');
    }
    public function unidade19Conversation(){
        return view('unidade19/conversation');
    }
    public function unidade19Grammar(){
        return view('unidade19/grammar');
    }
    public function unidade19Pronunciation(){
        return view('unidade19/pronunciation');
    }
    public function unidade19Listening(){
        return view('unidade19/listening');
    }
    public function unidade19Understanding(){
        return view('unidade19/understanding');
    }
    //UNIDADE 20
    public function unidade20Vocabulary(){
        return view('unidade20/vocabulary');
    }
    public function unidade20Conversation(){
        return view('unidade19/conversation');
    }
    public function unidade20Grammar(){
        return view('unidade20/grammar');
    }
    public function unidade20Pronunciation(){
        return view('unidade20/pronunciation');
    }
    public function unidade20Listening(){
        return view('unidade20/listening');
    }
    public function unidade20Understanding(){
        return view('unidade20/understanding');
    }
    
}
