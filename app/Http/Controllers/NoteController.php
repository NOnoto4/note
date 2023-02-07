<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    //mypageへ
    public function home()
    {
        return view('note.mypage');
    }
}
