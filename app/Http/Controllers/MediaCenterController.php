<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Page;
use App\Models\Post;
use Illuminate\Http\Request;

class MediaCenterController extends Controller
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
    private $path = "landingPage.media-center.";
    public function newsAndActivitiesIndex()
    {
        $pageId = 51;
        $page = Page::findOrFail($pageId);
        $posts = Post::where("page_id", $page->id)
        ->where('active', true)
        ->with(['postDetail', 'media'])->get();
        
        return view($this->path . "news-activities", compact('posts', 'page'));
    }
    public function newsShowIndex($locale, $id, $slug)
    {
        $pageId = 51;
        $page = Page::findOrFail($pageId);

        $post = Post::where("id", $id)
            ->where("page_id", $pageId)
            ->whereHas('postDetail', function ($query) use ($slug) {
                $query->where('slug', $slug);
            })
            ->with([
                'postDetail' => function ($query) use ($slug) {
                    $query->where('slug', $slug);
                },
                'media'
            ])
            ->firstOrFail();
        return view($this->path . "news-page", compact('post', 'page'));
    }

    public function photosGalaryIndex()
    {
        $pageId = 52;
        $page = Page::findOrFail($pageId);
        $posts = Post::where("page_id", $page->id)->where('active',true)->with(['postDetailOne', 'media'])->get();
        $categories = $posts->pluck('postDetailOne.category_id');
        $categories = Category::whereIn('id', $categories)->get();
        return view($this->path . "photos-galary", compact('posts', 'page', 'categories'));
    }
    public function videosIndex()
    {
        $pageId = 53;
        $page = Page::findOrFail($pageId);

        $posts = Post::where("page_id", $page->id)->where('active', true)->with(['postDetailOne', 'mediaOne'])->get();
        $categories = $posts->pluck('postDetailOne.category_id');
        $categories = Category::whereIn('id', $categories)->get();
        return view($this->path . "videos", compact('posts', 'page', 'categories'));
    }
    public function documentsIndex()
    {
        $pageId = 54;
        $page = Page::findOrFail($pageId);
        $posts = Post::where("page_id", $page->id)->where('active', true)->with(['postDetail', 'mediaOne'])->get();
        return view($this->path . "documents", compact('posts', 'page'));
    }
}
