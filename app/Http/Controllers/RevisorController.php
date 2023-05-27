<?php

namespace App\Http\Controllers;

use App\Mail\BecomeRevisor;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    public function index(){
        $announcement_to_check = Announcement::where('is_accepted', null)->first();
        return view('revisor.index', compact('announcement_to_check'));
    }

    public function acceptAnnouncement(Announcement $announcement){
        $announcement->setAccepted(true);
        return redirect()->back()->with('message', "Complimenti hai accettato l'annuncio");
    }

    public function rejectAnnouncement(Announcement $announcement){
        $announcement->setAccepted(false);
        return redirect()->back()->with('message', "L'annuncio è stato rifiutato");
    }

    public function workWithUs() {
        return view('workWithUs');
    }

    public function becomeRevisor(Request $request){
        $age = $request->age;
        $messageR = $request->messageR;

        $data = compact('age', 'messageR');
        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user(), $data));
        return redirect('/')->with('message', "Hai richiesto di diventare revisore correttamente");
    }

    public function makeRevisor(User $user){
        Artisan::call('presto:makeUserRevisor', ["email"=>$user->email]);
        return redirect('/')->with('message', "L'utente  {$user->name} è diventato revisore");
    }
}
