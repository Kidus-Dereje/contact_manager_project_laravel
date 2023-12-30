<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function reset()
    {
        $contacts = Contact::all();
        foreach($contacts as $contact){
            $contact->delete();
        }
        $contacts = Contact::all();
        return view('index', compact('contacts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $contact_name = $request->contact_name;
        $contact_detail = $request->contact_detail;
        if($contact_detail && $contact_name != null){
            Contact::create([
                'contact_name' => $contact_name,
                'contact_detail' => $contact_detail
            ]);
            // $contacts = Contact::all();
            // return view('index', compact('contacts'));
        }
        $contacts = Contact::all();
        return view('index', compact('contacts'));
        // Contact::create([
        //     'contact_name' => $contact_name,
        //     'contact_detail' => $contact_detail
        // ]);
        // $contacts = Contact::all();
        // return view('index', compact('contacts'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
