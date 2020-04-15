<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Section;
use App\Header;
use App\Service;
use App\User;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        $sections = Section::all();
        $headers = Header::all();
        $users = User::all();
        return view('admin.index', compact('sections', 'headers', 'services', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $headers = Header::all();
        return view('admin.sections.create', compact('headers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $section = new Section();
        $section->section1 = request('section1');
        $section->section2 = request('section2');
        $section->section3 = request('section3');
        $section->section4 = request('section4');
        $section->section5 = request('section5');
        $section->save();
        return redirect()->route('section.index');                  
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
        $section = Section::find($id);
        $headers = Header::all();
        return view('admin.sections.edit', compact('section', 'headers'));
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
        $section = Section::find($id);
        $section->section1 = request('section1');
        $section->section2 = request('section2');
        $section->section3 = request('section3');
        $section->section4 = request('section4');
        $section->section5 = request('section5');
        $section->save();
        return redirect()->route('section.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $section = Section::find($id);
        Storage::delete($section);
        $section->delete();
        return redirect()->back();
    }
}
