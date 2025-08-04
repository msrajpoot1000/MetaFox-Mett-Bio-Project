<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Companyinfo;

class CompanyinfoController extends Controller
{
    
   public function edit_companyinfo()
   {
       $companyinfos = Companyinfo::first();
        return view('website.admin.companyinfo', compact('companyinfos'));   
    }
    
    
      public function store(Request $request)
    {
        // Validating input
        $request->validate([
            'companyname' => 'required|string|max:255',
            'email'       => 'required|email',
            'phone'       => 'required|string|max:15',
            'phone2'       => 'nullable|string|max:15',
            'phone3'       => 'nullable|string|max:15',
            'address'     => 'required|string|max:500',
            'facebook'    => 'nullable|url',
            'instagram'  => 'nullable|url',
            'linkedin'   => 'nullable|url',
            'pinterest'  => 'nullable|url',
            'twitter'  => 'nullable|url',
            'youtube'  => 'nullable|url',
            'logo'       => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Fetch existing record or create new
        $company = Companyinfo::first() ?: new Companyinfo;

        // Handle logo upload
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $destination = public_path('assets/images/logo');
            $file->move($destination, $filename);

            // Delete old logo if exists
            if ($company->logo && file_exists($destination . '/' . $company->logo)) {
                unlink($destination . '/' . $company->logo);
            }

            $company->logo = $filename;
        }

        // Update rest of the fields
        $company->companyname = $request->companyname;
        $company->email       = $request->email;
        $company->phone       = $request->phone;
        $company->phone2       = $request->phone2;
        $company->phone3       = $request->phone3;
        $company->address     = $request->address;
        $company->facebook    = $request->facebook;
        $company->instagram   = $request->instagram;
        $company->linkedin    = $request->linkedin;
        $company->pinterest   = $request->pinterest;
        $company->twitter   = $request->twitter;
        $company->youtube   = $request->youtube;

        $company->save();

        return redirect()->route('dashboard')->with('message', 'Company information saved successfully!');
        }
    
        public function destroy($id)
        {
            $company = Companyinfo::findOrFail($id);
            $logoPath = public_path('assets/images/logo/' . $company->logo);
    
            if ($company->logo && file_exists($logoPath)) {
                unlink($logoPath);
            }
    
            $company->delete();
    
            return redirect()->route('dashboard')->with('message', 'Company information deleted successfully!');
        }
 }
