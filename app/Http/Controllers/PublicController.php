<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;


class PublicController extends Controller
{
    public function home(){
    
        $announcements = Announcement::where('is_accepted', true)->take(4)->orderBy('created_at', 'desc')->get();

        return view('welcome', compact('announcements'));
        
    }

    public function categoryShow(Category $category) {
        $announcements = Announcement::where('is_accepted', true)->where('category_id', $category->id)->get();
        return view('categoryShow', compact('category', 'announcements'));
    }



    public function seacrhAnnoncements(Request $request){
        $announcements = Announcement::search($request->searched)->where('is_accepted', true)->paginate(10);
        
        return view('announcement.search-page', compact('announcements'));
    }

    public function setLanguage($lang){
        session()->put('locale', $lang);
        return redirect()->back();
    }
}
