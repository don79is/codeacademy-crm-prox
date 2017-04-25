<?php namespace App\Http\Controllers;

use App\Models\PrClientPersonsPositions;
use Illuminate\Routing\Controller;

class PrClientPersonsPositionsController extends Controller
{

    /**
     * Display a listing of the resource.
     * GET /prclientpersonspositions
     *
     * @return Response
     */
    public function index()
    {
        return PrClientPersonsPositions::get();
    }

    /**
     * Show the form for creating a new resource.
     * GET /prclientpersonspositions/create
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /prclientpersonspositions
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     * GET /prclientpersonspositions/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * GET /prclientpersonspositions/{id}/edit
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT /prclientpersonspositions/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /prclientpersonspositions/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}