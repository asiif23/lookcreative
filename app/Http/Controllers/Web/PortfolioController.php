<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('web.portfolio.index', [
            'title' => 'Portfolio'
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PortfolioController  $portfolioController
     * @return \Illuminate\Http\Response
     */
    public function show(PortfolioController $portfolioController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PortfolioController  $portfolioController
     * @return \Illuminate\Http\Response
     */
    public function edit(PortfolioController $portfolioController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PortfolioController  $portfolioController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PortfolioController $portfolioController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PortfolioController  $portfolioController
     * @return \Illuminate\Http\Response
     */
    public function destroy(PortfolioController $portfolioController)
    {
        //
    }
}
