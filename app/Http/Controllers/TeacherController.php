<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    // Show form & list
    public function add_teacher()
    {
        $teachers = Teacher::latest()->get();
        return view('website.admin.teacher', compact('teachers'));
    }
    
    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('website.admin.edit-pages.edit-teacher', compact('teacher'));
    }

    // Store new teacher
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'expert' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/teachers'), $imageName);
            $imagePath = 'uploads/teachers/' . $imageName;
        }

        Teacher::create([
            'name' => $request->name,
            'expert' => $request->expert,
            'image' => $imagePath,
        ]);

        return redirect()->back()->with('success', 'Teacher added successfully!');
    }

    // Update teacher
    public function update(Request $request, $id)
    {
        $teacher = Teacher::findOrFail($id);

        $request->validate([
            'name' => 'required|string',
            'expert' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Optional: Delete old image
            if ($teacher->image && file_exists(public_path($teacher->image))) {
                unlink(public_path($teacher->image));
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/teachers'), $imageName);
            $teacher->image = 'uploads/teachers/' . $imageName;
        }

        $teacher->name = $request->name;
        $teacher->expert = $request->expert;
        $teacher->save();

        return redirect()->route('add.teacher')->with('success', 'Teacher updated successfully!');

    }

    // Delete teacher
    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);

        if ($teacher->image && file_exists(public_path($teacher->image))) {
            unlink(public_path($teacher->image));
        }

        $teacher->delete();

        return redirect()->back()->with('success', 'Teacher deleted successfully!');
    }
}
