<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function createAnnouncement(){

        return view('announcement.create');
    }

    public function index() {
        $announcements=Announcement::where('is_accepted', true)->paginate(20);
        return view ('announcement.index', compact('announcements'));
    }

    public function showAnnouncement(Announcement $announcement) {
        
        return view ('announcement.show', compact('announcement'));
    }
}
