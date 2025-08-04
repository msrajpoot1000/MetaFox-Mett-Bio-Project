<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\About;
use App\Models\Serve;
use App\Models\Product;
use App\Models\Allbanner;
use App\Models\Companyinfo;
use App\Models\Productcategory;

class AboutController extends Controller
{
    // Frontend View
    public function about()
    {   
        $banner = Allbanner::select('aboutimage')->first();
        $categories = Productcategory::all();
        $companyinfos = Companyinfo::first();
        $serves = Serve::all();
        return view('website.frontend.aboutus', compact('banner', 'categories', 'companyinfos', 'serves'));
    }

    // Admin - Show current about
    public function view_about()
    {
        $about = About::latest()->first();
        return view('website.admin.aboutus', compact('about'));
    }

    // Admin - Edit page
    public function add_about()
    {
        $about = About::first();
        return view('website.admin.edit-pages.edit-aboutus', compact('about'));
    }

    // Admin - Store about section (only if not exists)
     public function about_store(Request $request)
        {
            $request->validate([
                'heading' => 'required|string',
                'image1' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'image2' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'image3' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'description' => 'nullable|string',
                'long_description' => 'nullable|string',
                'our_mission_description' => 'nullable|string',
                'our_vision_description' => 'nullable|string',
            ]);
    
            // Fetch existing or create new
            $about = About::first() ?: new About;
    
            // Handle image uploads
            foreach (['image1', 'image2', 'image3'] as $img) {
                if ($request->hasFile($img)) {
                    $file = $request->file($img);
                    $filename = time() . '_' . $img . '.' . $file->getClientOriginalExtension();
                    $destination = public_path('uploads/abouts');
    
                    // Delete old image
                    if ($about->$img && File::exists($destination . '/' . $about->$img)) {
                        File::delete($destination . '/' . $about->$img);
                    }
    
                    $file->move($destination, $filename);
                    $about->$img = 'uploads/abouts/' . $filename;
                }
            }
    
            // Assign other fields
            $about->heading = $request->heading;
            $about->description = $request->description;
            $about->long_description = $request->long_description;
            $about->our_mission_description = $request->our_mission_description;
             $about->our_vision_description = $request->our_vision_description;
            
            $about->save();
    
            return redirect()->route('view.about')->with('success', 'About section saved successfully!');
        }

    // Admin - Delete about section
    public function destroy_about()
    {
        $about = About::first();
        if ($about) {
            $about->delete();
            return redirect()->back()->with('success', 'About section deleted successfully!');
        }

        return redirect()->back()->with('error', 'No about section found to delete.');
    }
}
