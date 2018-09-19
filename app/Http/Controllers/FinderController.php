<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\FinderResource;
//use App\Http\Requests;
use App\Finder;
use Illuminate\View\View;

class FinderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //$finder = Finder::orderBy('created_at', 'decs')->paginate(15);
        $finder = Finder::paginate(15);
        return FinderResource::collection($finder);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $finder = $request->isMethod('put') ? Finder::findOrFail
//            ($request->finder_id) : new Finder;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Finder  $finder
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $finder = Finder::findOrFail($id);
        return new FinderResource($finder);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Finder  $finder
     * @return \Illuminate\Http\Response
     */
    public function edit(Finder $finder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Finder  $finder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Finder $finder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Finder  $finder
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $finder = Finder::findOrFail($id);
        if ($finder->delete()){
            return new FinderResource($finder);
        }
    }
}
