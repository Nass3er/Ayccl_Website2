<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Post;
use Illuminate\Http\Request;


// Option 3: Overwrite name dynamically in the model

// You can also override the name accessor so that $user->name already gives the correct value:

// public function getNameAttribute($value)
// {
//     return app()->getLocale() === 'ar' ? $this->attributes['name'] : $this->attributes['name_english'];
// }


// Then $user->name works automatically.





class AboutUsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     private $pageId = 2;
     private $path = "landingPage.about-us.";
    public function index()
    {
        $pageId = 21;
        $page = Page::findOrFail($pageId);
        $posts = Post::where("page_id", $page->id)->where('active', true)->get();
        return view($this->path."about-company", compact('posts', 'page'));
    }
    public function managementIndex()
    {
        $pageId = 22;
        $page = Page::findOrFail($pageId);
        $posts = Post::where("page_id", $page->id)->with('mediaOne')->where('active', true)->get();
        

        return view($this->path."management-board", compact('posts', 'page'));
    }
    public function visionIndex()
    {
         // $pageId = app()->getlocale() =='ar' ? 23 : 123 ;
        $pageId = 23;
        $page = Page::findOrFail($pageId);
        $posts = Post::where("page_id", $page->id)->where('active', true)->get();
         // $posts = Post::where("page_id", $page->id)->where('active', true)->get();
 

         return view($this->path."vision-message", compact('posts', 'page'));
    }

    public function futurePlansIndex()
    {
         // $pageId = app()->getlocale() =='ar' ? 23 : 123 ;
        $pageId = 24;
        $page = Page::findOrFail($pageId);
        $posts = Post::where("page_id", $page->id)->where('active', true)->get();
         // $posts = Post::where("page_id", $page->id)->where('active', true)->get();
 
         return view($this->path."future-plans", compact('posts', 'page'));
    }
    public function socialResponsibilityIndex()
    {
         // $pageId = app()->getlocale() =='ar' ? 23 : 123 ;
        $pageId = 25;
        $page = Page::findOrFail($pageId);
        $posts = Post::where("page_id", $page->id)->where('active', true)->orderBy('order')->get();
        // echo dd($posts);

         return view($this->path."social-responsibility", compact('posts', 'page'));
    }
    public function certificatesIndex()
    {
         // $pageId = app()->getlocale() =='ar' ? 23 : 123 ;
        $pageId = 26;
        $page = Page::findOrFail($pageId);
        $posts = Post::where("page_id", $page->id)->with('postDetail','Media')->where('active', true)->get();

        return view($this->path."prizes-certificates", compact('posts', 'page'));
    }



}
