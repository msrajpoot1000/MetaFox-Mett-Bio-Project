<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Testimonial;

class TestimonialController extends Controller
{
     public function testimonial()
    {   
        $testimonials = Testimonial::latest()->get();
        return view('website.admin.testimonial', compact('testimonials'));
    }
    
   public function testimonialstore(Request $request)
    {
        $request->validate([
            'user' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'feedback' => 'required|string',
        ]);

        Testimonial::create([
            'user' => $request->user,
            'rating' => $request->rating,
            'feedback' => $request->feedback,
        ]);

        return back()->with('success', 'Testimonial submitted successfully!');
    }

    // ✅ Delete Testimonial by ID
    public function testimonialdestroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();

        return back()->with('success', 'Testimonial deleted successfully!');
    }
}
