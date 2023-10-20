<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use Illuminate\Http\Request;

class ArtworkController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Artwork::latest()->paginate(10);
        return view('index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
        'artist_name'     => 'request',
        'description'     => 'request',
        'art_type'        => 'request',
        'media_link'      => 'request',
        'cover_image'     => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
       ]);
       $file_name = time() . '.' . request()->Artwork_image->getClientOriginalExtension();
       request()->Artwork_image->move(public_path('images'), $file_name);
       $Artwork = new Artwork();

       $Artwork->artist_name = $request->artist_name;
       $Artwork->description = $request->description;
       $Artwork->art_type = $request->art_type;
       $Artwork->media_link = $request->media_link;
       $Artwork->cover_image= $file_name;

       $Artwork->save();

       return redirect()->route('artworks.index')->with('success', 'Artwork Added successfully.');
    }

    /**
     * Display the specified resource.
     * 
     * @param  \App\Models\Artwork  $artwork
     * @return \Illuminate\Http\Response
     */
    public function show(Artwork $artwork)
    {
        return view('show', compact('artwork'));
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param  \App\Models\Artwork  $artwork
     * @return \Illuminate\Http\Response
     */
    public function edit(Artwork $artwork)
    {
        return view('edit', compact('artwork')); 
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artwork  $artwork
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artwork $artwork)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artwork $artwork)
    {
        //
    }
}
