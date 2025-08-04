<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

use App\Models\Homeslider;

class HomesliderController extends Controller
{
    public function homeslider()
    {    
         $sliders = Homeslider::all();
         return view('website.admin.homeslider', compact('sliders'));
    }
    
    public function store(Request $request)
    {
        $data = $request->validate([
            'heading1' => 'required|string|max:255',
            'heading2' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'homesliderimage' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        if ($request->hasFile('homesliderimage')) {
            $file = $request->file('homesliderimage');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('assets/images/homeslider'), $filename);
            $data['homesliderimage'] = 'assets/images/homeslider/' . $filename;
        }

        Homeslider::create($data);

        return back()->with('success', 'Slider created successfully!');
    }
    
    
     public function destroy($id)
    {
        $slider = Homeslider::findOrFail($id);

        if ($slider->homesliderimage && File::exists(public_path($slider->homesliderimage))) {
            File::delete(public_path($slider->homesliderimage));
        }

        $slider->delete();

        return back()->with('success', 'Slider deleted successfully!');
    }

}