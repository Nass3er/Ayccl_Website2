<?php

namespace App\Http\Controllers\Admin\General;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Models\Page;
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

class PagesController extends Controller
{
    public $backgroundFolder = "pages";
    public function update(Request $request, $locale, int $id)
    {

        $request->validate(
            [
                'content_ar'    => 'required',
                'content_en' => 'required',
                'files'      => 'required',
            ],
            [
                'content_ar.required'    => __('adminlte::adminlte.content_required'),
                'content_en.required' => __('adminlte::adminlte.content_en_required'),
                'files.required'      => __('adminlte::adminlte.files_required'),
            ]
        );
        try {
            $page = Page::findOrFail($id);

            DB::beginTransaction();

            $page->content = $request->content_ar;
            $page->content_en = $request->content_en;

            // 3) Upload Media (if provided)
            if ($request->hasFile('files')) 
            {
                $files = is_array($request->file('files')) ? $request->file('files') : [$request->file('files')];
 
                foreach ($files as $file) {
                    // 1) Names & paths
                    // $fileName      = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                    $fileName      = $page->id .'-' .$page->title .'-'. $page->title_en;
                    $fileName = Str::trim($fileName);
                    $fileName = Str::replace(' ', '-', $fileName);

                    $ext           = strtolower($file->getClientOriginalExtension());
                    $uniqueName    = "{$fileName}-" . time() . ".{$ext}";
 
                    $originalRel   = "images/$this->backgroundFolder/{$page->id}/{$uniqueName}";
                    // $thumbRel      = "images/$this->backgroundFolder/{$page->id}/thumbnails/{$uniqueName}";
 
                    $originalDir   = public_path("images/$this->backgroundFolder/{$page->id}");
                    // $thumbDir      = public_path("images/$this->backgroundFolder/{$page->id}/thumbnails");
 
                    // 2) Ensure directories exist
                    File::makeDirectory($originalDir, 0755, true, true);
                    // File::makeDirectory($thumbDir, 0755, true, true);
 
                    // 3) Move original file to /public (no Imagick)
                    $absoluteOriginal = public_path($originalRel);
                    $file->move($originalDir, $uniqueName);
 
                    // 4) (Optional) Optimize original with spatie/image-optimizer
                    try {
                        if (class_exists(\Spatie\ImageOptimizer\OptimizerChainFactory::class)) {
                            $optimizerChain = OptimizerChainFactory::create();
                            $optimizerChain->optimize($absoluteOriginal);
                        }
                    } catch (\Throwable $e) {
                        // swallow optimization errors (missing binaries, etc.)
                    }
 
                    // 5) Create 200x200 thumbnail with GD
                    // $absoluteThumb = public_path($thumbRel);
 
                    // // Load source via GD
                    // $src = match ($ext) {
                    //     'jpg', 'jpeg' => imagecreatefromjpeg($absoluteOriginal),
                    //     'png'        => imagecreatefrompng($absoluteOriginal),
                    //     'gif'        => imagecreatefromgif($absoluteOriginal),
                    //     'webp'       => function_exists('imagecreatefromwebp') ? imagecreatefromwebp($absoluteOriginal) : null,
                    //     default      => null,
                    // };
 
                    // if ($src) {
                    //     $srcW = imagesx($src);
                    //     $srcH = imagesy($src);
 
                    //     // Fit & crop center to 200x200
                    //     $targetW = 500;
                    //     $targetH = 500;
                    //     $scale   = max($targetW / $srcW, $targetH / $srcH);
                    //     $newW    = (int) round($srcW * $scale);
                    //     $newH    = (int) round($srcH * $scale);
 
                    //     $resized = imagecreatetruecolor($newW, $newH);
 
                    //     // Preserve transparency for PNG/WebP
                    //     if (in_array($ext, ['png', 'webp'])) {
                    //         imagealphablending($resized, false);
                    //         imagesavealpha($resized, true);
                    //         $transparent = imagecolorallocatealpha($resized, 0, 0, 0, 127);
                    //         imagefilledrectangle($resized, 0, 0, $newW, $newH, $transparent);
                    //     }
 
                        // imagecopyresampled($resized, $src, 0, 0, 0, 0, $newW, $newH, $srcW, $srcH);
 
                        // $thumb = imagecreatetruecolor($targetW, $targetH);
 
                        // if (in_array($ext, ['png', 'webp'])) {
                        //     imagealphablending($thumb, false);
                        //     imagesavealpha($thumb, true);
                        //     $transparent = imagecolorallocatealpha($thumb, 0, 0, 0, 127);
                        //     imagefilledrectangle($thumb, 0, 0, $targetW, $targetH, $transparent);
                        // }
 
                        // $offsetX = (int) floor(($newW - $targetW) / 2);
                        // $offsetY = (int) floor(($newH - $targetH) / 2);
                        // imagecopy($thumb, $resized, 0, 0, $offsetX, $offsetY, $targetW, $targetH);
 
                        // // Save thumbnail
                        // match ($ext) {
                        //     'jpg', 'jpeg' => imagejpeg($thumb, $absoluteThumb, 90),
                        //     'png'        => imagepng($thumb, $absoluteThumb, 9),
                        //     'gif'        => imagegif($thumb, $absoluteThumb),
                        //     'webp'       => function_exists('imagewebp') ? imagewebp($thumb, $absoluteThumb, 90) : null,
                        //     default      => null,
                        // };
 
                        // imagedestroy($thumb);
                        // imagedestroy($resized);
                        // imagedestroy($src);
                    }
 
                    
                    $page->background       = $originalRel;   // store relative path
                }
                $page->save();
                // Commit after processing all files (do NOT commit inside the loop)
                DB::commit();
                
                return redirect()->back()->with(['success' => __('adminlte::adminlte.succEdit')]);
                // return redirect()->route("$this->backgroundFolder.index", app()->getLocale())
                // ->with(['success' => __('adminlte::adminlte.succEdit')]);
            }
         catch (\Exception $e) {
            DB::rollBack();
            // return redirect()->back()->withErrors(['error' => $e->getMessage()]);
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

}
