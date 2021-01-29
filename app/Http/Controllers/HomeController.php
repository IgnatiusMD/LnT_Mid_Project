<?php

namespace App\Http\Controllers;

use App\Library;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function view(){
        $datas = Library::all();
        return view('home', compact('datas'));
    }

    public function create(Request $request){
        return view('create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => ['required', 'string', 'max:20', 'min:5'],
            'author' => ['required', 'string', 'max:20', 'min:5'],
            'pages' => ['required', 'numeric', 'min:0'],
            'year' => ['required', 'numeric', 'max:2021', 'min:2000']
        ],
        [
            'title.max' => 'The Title must not contain more than 20 characters.',
            'title.min' => 'The Title must not contain less than 5 characters.',
            'author.max' => 'The Author must not contain more than 20 characters.',
            'author.min' => 'The Author must not contain less than 5 characters.',
            'pages.min' => 'The number of pages must be less than 0',
            'year.min' => 'The Year Published cannot be older than 2000',
            'year.max' => 'The Year Published must be less than 2021'
        ]);
        Library::create([
            'title' => $request -> title,
            'author' => $request -> author,
            'pages' => $request -> pages,
            'year' => $request -> year
        ]);
        return redirect('/');
    }

    public function edit($id){
        $data = Library::findOrFail($id);
        return view('edit', compact('data'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'title' => ['required', 'string', 'max:20', 'min:5'],
            'author' => ['required', 'string', 'max:20', 'min:5'],
            'pages' => ['required', 'numeric', 'min:0'],
            'year' => ['required', 'numeric', 'max:2021', 'min:2000']
        ],
        [
            'title.max' => 'The Title must not contain more than 20 characters.',
            'title.min' => 'The Title must not contain less than 5 characters.',
            'author.max' => 'The Author must not contain more than 20 characters.',
            'author.min' => 'The Author must not contain less than 5 characters.',
            'pages.min' => 'The number of pages must be more than 0',
            'year.min' => 'The Year Published cannot be older than 2000',
            'year.max' => 'The Year Published must be less than 2021'
        ]);
        Library::findOrFail($id)->update([
            'title' => $request->title,
            'author' => $request->author,
            'pages' => $request->pages,
            'year' => $request->year
        ]);
        return redirect('/');
    }

    public function delete($id){
        Library::destroy($id);
        return redirect('/');
    }
}
