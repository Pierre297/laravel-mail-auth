<?php

namespace App\Http\Controllers;

use App\Mail\VideogameMailDelete;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Videogame;

class ApiController extends Controller
{
    public function getVideogames()
    {

        $videogames = Videogame::all();

        return json_encode($videogames);
    }

    public function deleteVideogame($id)
    {

        $videogame = Videogame::findOrFail($id);

        $videogame->delete();

        $this->sendDeleteMail();

        return redirect()->route('home');
    }

    private function sendDeleteMail()
    {
        Mail::to('test@test.com')->send(new VideogameMailDelete());
    }
}
