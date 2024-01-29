<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konsumen;
use App\Models\Response;

class konsumenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = konsumen::all();
        return view ("konsumen.index", ["data"=> $data]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, $namaKonsumen)
    {
            $konsumen = Konsumen::findOrFail($id);
            if(!$konsumen) {
               return redirect()->back()->with('error', 'Konsumen not found.');
            }
            $response = Response::where('namaKonsumen', $konsumen->namaKonsumen)->get();
            
            return view('konsumen.show', ['data' => $response]);
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
        try {
            $konsumen = Konsumen::findOrFail($id);
            $konsumen->delete();
            return redirect()->back()->with('success', 'Konsumen successfully deleted.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete konsumen.');
        }
    }
}
