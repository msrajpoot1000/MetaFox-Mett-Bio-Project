<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certificate;

class CertificateController extends Controller
{
    // Frontend view of all certificates
    public function certificate()
    { 
        $certificates = Certificate::latest()->get();
        return view('website.frontend.certificate', compact('certificates'));
    }

    // Admin view with upload form and certificate list
    public function addcertificate()
    {
        $certificates = Certificate::latest()->get();
        return view('website.admin.certificate', compact('certificates'));
    }

    // Store uploaded certificates (images or PDFs)
   public function certificatestore(Request $request)
    {
        $request->validate([
            'certificateimage' => 'required|mimes:jpeg,png,jpg,gif,svg,pdf|max:5120',
            'name' => 'nullable|string',
        ]);
    
        if ($request->hasFile('certificateimage')) {
            $file = $request->file('certificateimage');
            $fileName = time().'_'.uniqid().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('uploads/certificates'), $fileName);
    
            Certificate::create([
                'certificateimage' => 'uploads/certificates/'.$fileName,
                'name' => $request->name
            ]);
        }
    
        return back()->with('success', 'Certificate uploaded successfully!');
    }

    // Delete a certificate and its file
    public function certificatedestroy($id)
    {
        $certificate = Certificate::findOrFail($id);

        $filePath = public_path($certificate->certificateimage);
        if (file_exists($filePath)) {
            unlink($filePath);
        }

        $certificate->delete();

        return back()->with('success', 'Certificate deleted successfully!');
    }
}
