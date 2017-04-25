<?php namespace App\Http\Controllers;


use App\Models\PrPersonsTypes;
use Illuminate\Routing\Controller;

class PrPersonsTypesController extends Controller
{

    /**
     * Display a listing of the resource.
     * GET /prpersonstypes
     *
     * @return Response
     */
    public function index()
    {
        return PrPersonsTypes::get();
    }

    /**
     * Show the form for creating a new resource.
     * GET /prpersontypes/create
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /prpersontypes
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     * GET /prpersontypes/{id}
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
     * GET /prpersontypes/{id}/edit
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
     * PUT /prpersontypes/{id}
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
     * DELETE /prpersontypes/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}