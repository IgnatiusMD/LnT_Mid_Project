<?php

namespace App\Http\Controllers;

use App\Library;
use Illuminate\Http\Request;

class ValidasiController extends Controller
{
    // protected function validator(array $data)
    // {
    //     return Library::make($data, [
    //         'title' => ['required', 'string', 'max:20', 'min:5'],
    //         'author' => ['required', 'string', 'max:20', 'min:5'],
    //         'pages' => ['required', 'min:0'],
    //         'year' => ['required', 'min:2000', 'max:2021']
    //     ],
    //     [
    //         'title.max' => 'The Title must not contain more than 20 characters.',
    //         'title.min' => 'The Title must not contain less than 5 characters.',
    //         'author.max' => 'The Author must not contain more than 20 characters.',
    //         'author.min' => 'The Author must not contain less than 5 characters.',
    //         'pages.min' => 'The number of pages must be more than 0',
    //         'year.min' => 'The Year Published must not be older than year 2000.',
    //         'year.max' => 'The Year Published cannot be further than year 2021.',
    //     ]);
    // }

    // protected function create(array $data)
    // {
    //     return Library::create([
    //         'groupName' => $data['groupName'],
    //         'groupStat' => $data['groupStat'],
    //         'leadN' => $data['leadN'],
    //         'leadE' => $data['leadE'],
    //         'leadNumber' => $data['leadNumber'],
    //         'leadID' => $data['leadID'],
    //         'leadGit' => $data['leadGit'],
    //         'leadBirth' => $data['leadBirth'],
    //         'leadDOB' => $data['leadDOB']
    //     ]);
    // }


    // function create(Request $request)
    // {
    //     $request->validate([
    //         'judul_lagu' => 'required|min:5|max:20',
    //         'penyanyi' => 'required|min:3|max:15',
    //         'lirik_lagu'=>'required',
    //         'tahun_lagu' => 'required|numeric|min:2000|max:2020',
            
    //     ]);
    //     //masukan ke database 
    //     lagu::create($request->all());


     
        
    //     //habis berhasil input akan redirect ke /lagu 
    //     return redirect('/lagu')->with('sukses', 'lagu berhasil ditambahkan');
  
    // }

}
