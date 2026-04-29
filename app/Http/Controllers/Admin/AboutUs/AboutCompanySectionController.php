<?php

namespace App\Http\Controllers\Admin\AboutUs;

use App\Http\Controllers\Controller;
use App\Models\AboutCompanySection;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\DB;

class AboutCompanySectionController extends Controller
{
    public $route = 'about-company-sections';
    public $view = 'admin-panel.about-us.about-company-sections';

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $sections = AboutCompanySection::orderby('order')->get();
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
        return view("$this->view.index", compact('sections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $icons = $this->getIcons();
        return view("$this->view.create", compact('icons'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'      => 'required',
            'title_en'   => 'nullable',
            'icon'       => 'required',
            'content'    => 'required',
            'content_en' => 'nullable',
        ]);

        try {
            $maxOrder = AboutCompanySection::max('order') ?? 0;
            AboutCompanySection::create([
                'title'      => $request->title,
                'title_en'   => $request->title_en,
                'icon'       => $request->icon,
                'content'    => $request->content,
                'content_en' => $request->content_en,
                'order'      => $request->order ?? ($maxOrder + 1),
                'active'     => $request->active ?? true,
            ]);

            return redirect()->route("$this->route.index", app()->getLocale())
                ->with(['add' => true]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($locale, string $id)
    {
        try {
            $section = AboutCompanySection::findOrFail($id);
            $icons = $this->getIcons();
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
        return view("$this->view.edit", compact('section', 'icons'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $locale, string $id)
    {
        $request->validate([
            'title'      => 'required',
            'title_en'   => 'nullable',
            'icon'       => 'required',
            'content'    => 'required',
            'content_en' => 'nullable',
        ]);

        try {
            $section = AboutCompanySection::findOrFail($id);
            $section->update([
                'title'      => $request->title,
                'title_en'   => $request->title_en,
                'icon'       => $request->icon,
                'content'    => $request->content,
                'content_en' => $request->content_en,
                'order'      => $request->order,
                'active'     => $request->active ?? true,
            ]);

            return redirect()->route("$this->route.index", app()->getLocale())
                ->with(['edit' => true]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($locale, string $id)
    {
        try {
            $section = AboutCompanySection::findOrFail($id);
            $section->delete();
            return redirect()->route("$this->route.index", app()->getLocale())
                ->with(['delete' => true]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function activation($locale, int $id)
    {
        try {
            $msg = DB::transaction(function () use ($id) : string {
                $section = AboutCompanySection::findOrFail($id);
                $activation = !($section->active);
                $section->update(['active' => $activation]);
                return $activation ? __('adminlte::adminlte.succActivate') : __('adminlte::adminlte.succDeactivate');
            });
            return redirect()->back()->with(['success' => $msg]);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    private function getIcons()
    {
        return [
            '🏭' => 'Factory',
            '📖' => 'Book',
            '🕐' => 'Clock',
            '📍' => 'Location',
            '🧱' => 'Bricks',
            '📊' => 'Chart',
            '⚙️' => 'Gear',
            '🤝' => 'Partners',
            '🏅' => 'Medal',
            '📌' => 'Pin',
            '🚀' => 'Rocket',
            '💡' => 'Idea',
            '🌍' => 'World',
            '🛡️' => 'Shield',
            '💎' => 'Diamond',
        ];
    }
}
