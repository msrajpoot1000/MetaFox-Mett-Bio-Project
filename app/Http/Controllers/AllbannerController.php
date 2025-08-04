<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;

use App\Models\Allbanner;

class AllbannerController extends Controller
{
    public function allbanner()
    {
        $banners = Allbanner::all();
        return view('website.admin.allbanner', compact('banners'));
    }
    
     public function store(Request $request)
    {
        $data = [];

        foreach ([
            'aboutimage',
            'productimage',
            'certificateimage',
            'contactusimage'
        ] as $field) {
            if ($request->hasFile($field)) {
                $file = $request->file($field);
                $filename = time() . '_' . $file->getClientOriginalName();
                $destinationPath = public_path('assets/images/allbanner');

                // Create directory if not exists
                if (!File::exists($destinationPath)) {
                    File::makeDirectory($destinationPath, 0755, true);
                }

                $file->move($destinationPath, $filename);
                $data[$field] = 'assets/images/allbanner/' . $filename;
            }
        }

        Allbanner::create($data);

        return redirect()->back()->with('success', 'Banners uploaded successfully!');
    }

    
    public function destroy($id, $field)
     {
        $banner = Allbanner::findOrFail($id);
    
        // Check field is valid
        $allowedFields = [
            'aboutimage', 'productimage', 'certificateimage',
            'contactusimage'
        ];
    
        if (!in_array($field, $allowedFields)) {
            return back()->with('error', 'Invalid image field.');
        }
    
        // Delete image file from storage (optional)
        if ($banner->$field && file_exists(public_path($banner->$field))) {
            unlink(public_path($banner->$field));
        }
    
        // Remove path from DB
        $banner->$field = null;
        $banner->save();
    
        return back()->with('success', ucfirst($field).' deleted successfully.');
    }
}
