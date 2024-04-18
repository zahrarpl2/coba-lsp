<?php

namespace App\Http\Controllers;

use App\Models\CourtType;
use Illuminate\Http\Request;

class CourtTypeController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courttype = CourtType::all();
        return view('courttype', compact('courttype'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = [
            'required'  => ':attribute need to be filled',
            'min'       => ':attribute minimum :min character',
            'max'       => ':attribute maximal :max character',
            'unique'    => 'data sudah ditambahkan'
        ];

        $validationData = $request->validate([
            'name' => 'required|min:2|max:20|unique:categories'
        ], $message);

        CourtType::create($validationData);

        return redirect()->back()->with('success', 'Successfully added Court Type');
    }

    /**
     * Display the specified resource.
     */
    public function show(CourtType $courttype)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CourtType $courttype)
    {
        $courttype = CourtType::find($courttype->id);
        return $courttype;
        // dd($courttype);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CourtType $courttype)
    {
        $message = [
            'required'  => ':attribute need to be filled',
            'min'       => ':attribute minimum :min character',
            'max'       => ':attribute maximal :max character',
        ];

        $validationData = $request->validate([
            'name' => 'required|min:2|max:20'
        ], $message);

        CourtType::where('id', $courttype->id)->update($validationData);

        return redirect()->back()->with('success', 'Successfully edited court type');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CourtType $courttype)
    {
        CourtType::find($courttype->id)->delete();

        return redirect()->back()->with('success', 'Successfully deleted court type');
    }
}
