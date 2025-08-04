<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function add_blog(){
        $allBlogs = Blog::get();
        return view('website.admin.blog', compact('allBlogs'));
    }
    
    public function all_blog(){
        $allBlogs = Blog::get();
        return view('website.frontend.blog', compact('allBlogs'));
    }
    
    public function show($id){
        $blog = Blog::findOrFail($id);
        return view('website.frontend.blog-details', compact('blog'));
    }
    
    public function blog_store(Request $request){
        //Validation
        $request->validate([
            'heading' => 'required|string|max:255',
            'description' => 'nullable|string',
            'user' => 'required|string',
            'long_description' => 'nullable|string',
            'image' => 'required',
            'date' => 'required|date',
            
        ]);
        
        //upload image
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('uploads'), $imageName);

        //save
        Blog::create([
            'heading' => $request->heading,
            'description' => $request->description,
            'long_description' => $request->long_description,
            'image' => $imageName,
            'date' => $request->date,
            'user' => $request->user, // updated here
        ]);

        return redirect()->back()->with('message', 'Blog created successfully!');
    }
    
    // Fetch For Previous Data
    public function update_blog($id){
        $fetchBlogs = Blog::findOrFail($id);
        return view('website.admin.edit-pages.editblog', compact('fetchBlogs'));
    }
    
    // Update method
    public function blog_updateStore(Request $request, $id){
        // Find the record to update
        $fetchBlogs = Blog::findOrFail($id);

        // Update the fields
        $fetchBlogs->heading = $request->input('heading');
        $fetchBlogs->description = $request->input('description');
        $fetchBlogs->long_description = $request->input('long_description');
        $fetchBlogs->date = $request->input('date'); // added
        $fetchBlogs->user = $request->input('user'); // updated here

        // Handle the image upload if provided
        if ($request->hasFile('image')) {
            // Generate a new name for the image
            $imageName = time() . '.' . $request->image->extension();

            // Move the uploaded image to the 'uploads' directory
            $request->image->move(public_path('uploads'), $imageName);
            
            // Save the new image name to the database
            $fetchBlogs->image = $imageName;
        }

        $fetchBlogs->save(); // Save the updated record

        return redirect()->route('add.blog')->with('message', 'Blog updated successfully!');
    }
    
    // For Delete
    public function destroy($id){
       // Record fetch karein  
       $dlt = Blog::findOrFail($id);

       // Record delete karein
       $dlt->delete();
       // Redirect with success message
       return redirect()->back()->with('message', 'Record deleted successfully!');
    }
}
