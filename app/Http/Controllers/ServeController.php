<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

use App\Models\Serve;


class ServeController extends Controller
{
    
     public function serve()
    {   
        $serves = Serve::all();
        return view('website.admin.serve', compact('serves'));
    }
    
    
     public function storeserve(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'image' => 'required|image|mimes:png,jpg,jpeg,webp,svg|max:2048',
            'description' => 'nullable|string',
        ]);

        // Upload image
        $path       = 'assets/images/serve/';
        $imageName  = time().'_'.$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path($path), $imageName);

        Serve::create([
            'name'  => $request->name,
            'image' => $path.$imageName,   // store relative path
            'description'  => $request->description,
        ]);

        return back()->with('success', 'Serve created successfully.');                  
    }
    
    
     public function editserve($id)
     
        {
           $serve = Serve::findOrFail($id);
           return view('website.admin.edit-pages.editserve', compact('serve'));
        }
    
    public function updateserve(Request $request, $id)
    
    {
        $serve = Serve::findOrFail($id); 
          $request->validate([
            'name'  => 'required|string|max:255',
            'image' => 'nullable|image|mimes:png,jpg,jpeg,webp,svg|max:2048',
            'description' => 'nullable|string',
        ]);
    
           $data = [
                'name' => $request->name,
                'description' => $request->description, 
         ];
         
      if ($request->hasFile('image')) {
            // delete old image
            if (File::exists(public_path($serve->image))) {
                File::delete(public_path($serve->image));
            }

            $path       = 'assets/images/serve/';
            $imageName  = time().'_'.$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path($path), $imageName);
            $data['image'] = $path.$imageName;
        }
        
       $serve->update($data);
    
        return redirect()->route('serve')->with('success', 'serve updated successfully!');
    }


     public function destroyserve($id)
    {
         $serve = Serve::findOrFail($id);    
         
        // delete image file
        if (File::exists(public_path($serve->image))) {
            File::delete(public_path($serve->image));
        }

        $serve->delete();
                         
         return back()->with('success', 'Serve deleted successfully.');                    
    }
}
