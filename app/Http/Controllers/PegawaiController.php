<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Pegawai;
 
class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pegawai = Pegawai::orderBy('created_at', 'DESC')->get();
  
        return view('pegawais.index', compact('pegawai'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pegawais.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pegawai::create($request->all());
 
        return redirect()->route('pegawais')->with('Pegawai', 'Pegawai added successfully');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pegawai = Pegawai::findOrFail($id);
  
        return view('pegawais.show', compact('pegawai'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pegawai = Pegawai::findOrFail($id);
  
        return view('pegawais.edit', compact('pegawai'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pegawai= Pegawai::findOrFail($id);
  
        $pegawai->update($request->all());
  
        return redirect()->route('pegawais')->with('success', 'Pegawai updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pegawai = Pegawai::findOrFail($id);
  
        $pegawai->delete();
  
        return redirect()->route('pegawais')->with('success', 'Pegawai deleted successfully');
    }
}