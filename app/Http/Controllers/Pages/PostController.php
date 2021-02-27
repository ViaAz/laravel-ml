<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function __construct(Request $request){
        dump($request->route()->getName());
    }
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return view('pages.posts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
//     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *

     */
    public function store(Request $request)
    {
        return dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return "show $id";
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit($id)
    {
        return view('pages.posts.edit', ['id' => $id]);
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, $id)
    {
        dump($request);
        dd($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy($id)
    {
        dump(__METHOD__);
        dd($id);
    }
}
