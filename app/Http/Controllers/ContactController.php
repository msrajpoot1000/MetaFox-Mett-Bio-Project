<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;

use App\Models\Companyinfo;

class ContactController extends Controller
{
    public function contact()
    {   
         $companyinfos = Companyinfo::first();
        return view('website.frontend.contact', compact('companyinfos'));
    }
    
    public function viewcontact()
    {   
        $contacts = Contact::latest()->get();
        return view('website.admin.contact', compact('contacts'));
    }
    
    public function contactstore(Request $request)
    {
        // Validation
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Save to database
        Contact::create($request->all());

        return back()->with('success', 'Message sent successfully!');
    }
    
    public function contactdestroy($id)
    {
        $contact = Contact::findOrFail($id); // ID se record find karo
        $contact->delete(); // Record delete karo
    
        return redirect()->back()->with('success', 'Contact deleted successfully!');
    }
}
