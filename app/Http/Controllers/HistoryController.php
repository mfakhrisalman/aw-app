<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $histories = History::get(); 

        return view('history.index', ['histories' => $histories]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('history.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'alamat' => 'required',
            'tanggal' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);
    
        if (auth()->check()) {
            $validatedData['user_id'] = auth()->user()->id;
        } else {
            return redirect('/')->with('error', 'Mohon Login Untuk Menambahkan Data History Project');
        }
    
        // Tangani unggahan gambar
        if ($request->hasFile('foto')) {
            $imagePath = $request->file('foto')->store('history_images', 'public');
            $validatedData['foto'] = $imagePath;
        }
    
        History::create($validatedData);
    
        return redirect('/history')->with('success', 'Data History Project Baru Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $histories = History::paginate(6);

        return view('welcome', ['histories' => $histories]);
    }
    // public function showDetail(History $history)
    // {
    //     return view('detail', ["history" => $history ]);
    // }
    public function showDetail($id)
{
    $history = History::findOrFail($id);
    return view('detail', ["history" => $history]);
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(History $history)
    {
        return view('history.edit',[
            'history' => $history
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, History $history)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'tanggal' => 'required|date',
            'deskripsi' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);
    
        // Proses upload gambar baru jika ada
        if ($request->hasFile('foto')) {
            $imagePath = $request->file('foto')->store('history_images', 'public');
            $validatedData['foto'] = $imagePath;
        }
    
        // Perbarui data pada database
        $history->update($validatedData);
    
        return redirect('/history')->with('success', 'Data Berhasil Diperbarui');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(History $history)
    {
        History::destroy($history->id);
        return redirect('/history')->with('success', 'Data History Project Berhasil Dihapus');
    }   
}
