<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Header;
use App\Section;
use App\Service;
use App\User;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $headers = Header::all();
        $sections = Section::all();
        $services = Service::all();
        $users = User::all();
        return view('admin.index', compact('headers', 'sections', 'services', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $headers = Header::all();
        return view('admin.header.create', compact('headers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $header = new Header();
        $header->titre1 = request('titre1');
        $header->titre2 = request('titre2');
        $header->img_path = request('img')->store('img');
        $header->save();
        return redirect()->route('header.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $header = Header::find($id);
        $headers = Header::all();                   
        return view('admin.header.edit', compact('header', 'headers'));
    }

    /**
     * Update the specified resource in storage.                
     *
     * @param  \Illuminate\Http\Request  $request               
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)                                         
    {
        $header = Header::find($id);
        $header->titre1 = request('titre1');
        $header->titre2 = request('titre2');
        if(request('img') !== null){
            Storage::delete($header->img_path);
            $header->img_path = request('img')->store('img');
        }
        $header->save();
        return redirect()->route('header.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $header = Header::find($id);
        Storage::delete($header);
        $header->delete();
        return redirect()->back();
    }
}
