<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use App\Models\Media;
use App\Models\Page;
use App\Models\Category;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Fetch statistics
        $stats = [
            'total_users' => User::count(),
            // 'active_users' => User::where('active', true)->count(),
            'total_posts' => Post::count(),
            // 'active_posts' => Post::where('active', true)->count(),
            'total_media' => Media::count(),
            // 'total_pages' => Page::count(),
            // 'total_categories' => Category::count(),
        ];

        // Media Center Statistics
        $mediaCenter = [
            'news' => Post::where('page_id', 51)->count(), // News & Activities
            'photos' => Post::where('page_id', 52)->count(), // Photo Gallery
            'videos' => Post::where('page_id', 53)->count(), // Videos
            'documents' => Post::where('page_id', 54)->count(), // Documents
        ];

        // Recent Posts
        $recentPosts = Post::with('postDetailOne')
            ->where('page_id','>', '50')
            ->where('page_id','<', '60')
            ->orderBy('id', 'desc')
            ->take(10)
            ->get();

        return view('dashboard', compact('stats', 'mediaCenter', 'recentPosts'));
    }

    public function lang(String $locale)
    {
        session(['locale' => $locale]);
        app()->setLocale($locale);
        // return redirect()->back();
        return view('home');
        // echo Session::get('locale');
    }
}
