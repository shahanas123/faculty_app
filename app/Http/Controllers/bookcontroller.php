<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bookmodel;

class bookcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $getbooktitle=request('booktitle');
        $getauthor=request('author');
        $getdescription=request('description');
        $getdistributor=request('distributor');
        $getprice=request('price');

        echo  $getbooktitle;
        echo   $getauthor;
        echo  $getdescription;
        echo $getdistributor;
        echo $getprice;

        $book= new bookmodel();
        $book->booktitle=$getbooktitle;
        $book->author=$getauthor;
        $book->description=$getdescription;
        $book->distributor=$getdistributor;
        $book->price=$getprice;

        $book->save();


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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
