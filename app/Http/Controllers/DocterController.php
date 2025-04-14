<?php

namespace App\Http\Controllers;

use App\Models\docter;
use Illuminate\Http\Request;

class DocterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('docters.docter_form');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('docters.create');
    }

    public function dashboard()
    {
        return view('docters.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'names' => 'required|string|max:255',
            'email' => 'required|email|unique:docters,email',
            'phone' => 'required|numeric|min:10',
            'address' => 'required|string|max:500'
        ]);

        $docter = docter::create([
            'names' => $request->names,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address
        ]);

        if($docter) {
            return redirect()->back()->with('success', 'New Doctor Inserted Successfully');
        }

        return redirect()->back()->with('error', 'Failed to insert new doctor');
    }

    /**
     * Display the specified resource.
     */
    public function show(docter $docter)
    {
        return view('docters.show', compact('docter'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(docter $docter)
    {
        return view('docters.edit',['docter'=>$docter]);
    }

    /**
     * Display all doctors.
     */
    public function showALl()
    {
        $docters = docter::all();
        return view('docters.retrieve', compact('docters'));
    }
   
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, docter $docter)
    {
        $request->validate([
            'names' => 'required|string|max:255',
            'email' => 'required|string|email',
            'phone' => 'required|numeric|min:10',
            'address' => 'required|string|max:500'
        ]);

        $docter->update([
            // 'id'=>$request->id,
            'names' => $request->names,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address
        ]);

        return redirect()->back()->with('success', 'Doctor updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(docter $docter)
    {
        $docter->delete();
        return redirect()->back()->with('success', 'Doctor deleted successfully');
        }
}
