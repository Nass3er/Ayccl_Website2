<?php

namespace App\Http\Controllers\Admin\General;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Media;
use App\Models\Page;
use App\Models\Post;
use App\Models\PostDetail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Image\Image;
use Spatie\Image\Drivers\GdDriver;
use Spatie\ImageOptimizer\OptimizerChainFactory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File; // This is the new import
use PhpParser\Node\Expr\Throw_;
use Spatie\Image\Drivers\ImageDriver;

class CategoriesController extends Controller
{
    public $route = 'categories';
    public $view = 'admin-panel.general.categories';
    public function index()
    {
        try{
            $categories = Category::where('type', 53)->get();
        }
        catch(\Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
        return view("$this->view.index", compact('categories'));
    }



    public function create()
    {
        try{
            $categories = Category::where('type', 53)->get();
        }
        catch(\Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
        return view("$this->view.create", compact( 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title'      => 'required',
                'title_en'   => 'required',
            ],
            [
                'title.required'      => __('adminlte::adminlte.title_required'),
                'title_en.required'   => __('adminlte::adminlte.title_en_required'),
            ]
        );

        
        try {
            DB::beginTransaction();
            // 1. Create Post
            $category = new Category();
            $category->name = $request->title;
            $category->name_en  = $request->title_en;
            $category->type  = 53;
            
            $category->save(); 

            DB::commit();

            return redirect()->route("$this->route.index", app()->getLocale())
                ->with(['success' => __('adminlte::adminlte.succCreate')]);
        } catch (\Exception $e) {
            DB::rollBack();
            // return redirect()->back()->withErrors(['error' => $e->getMessage()]);
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($locale , int $id)
    {
        try{
            $post = Post::findOrFail($id);
        }
        catch(\Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
        return view("$this->view.edit", compact(  'post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $locale, int $id)
    {
        // dd($request);
        $request->validate(
            [
                'title'      => 'required',
                'title_en'   => 'required',
            ],
            [
                'title.required'      => __('adminlte::adminlte.title_required'),
                'title_en.required'   => __('adminlte::adminlte.title_en_required'),
                ]
        );

        
        try {
            $category = Category::findOrFail($id);
            DB::beginTransaction();
            $category->name = $request->title;
            $category->name_en  = $request->title_en;
            $category->save();
            DB::commit();
            
            return redirect()->route("$this->route.index", app()->getLocale())
                ->with(['success' => __('adminlte::adminlte.succEdit')]);
        } catch (\Exception $e) {
            DB::rollBack();
            // return redirect()->back()->withErrors(['error' => $e->getMessage()]);
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($locale ,string $id)
    {
        try {
            $hasPosts = Post::where('category_id', $id)->exists();
            $hasPostDetails = PostDetail::where('category_id', $id)->exists();
            
            if($hasPosts || $hasPostDetails  )
            {
                return redirect()->route("$this->route.index", app()->getLocale())->with(['error' => __('adminlte::adminlte.cantDelete')]);

            }

            DB::beginTransaction();
            $category = Category::findOrFail($id);
            $category->delete();
            DB::commit();

            return redirect()->route("$this->route.index", app()->getLocale())->with(['success' => __('adminlte::adminlte.succDelete')]);
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
