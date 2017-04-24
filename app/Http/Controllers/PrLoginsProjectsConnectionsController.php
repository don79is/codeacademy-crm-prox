<?php namespace App\Http\Controllers;

use App\Models\PrLoginsProjectsConnections;
use Illuminate\Routing\Controller;


class PrLoginsProjectsConnectionsController extends Controller
{

    /**
     * Display a listing of the resource.
     * GET /prloginsprojectsconnection
     *
     * @return Response
     */
    public function index()
    {
        return PrLoginsProjectsConnections::get();
    }

    /**
     * Show the form for creating a new resource.
     * GET /prloginsprojectsconnection/create
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /prloginsprojectsconnection
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     * GET /prloginsprojectsconnection/{id}
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
     * GET /prloginsprojectsconnection/{id}/edit
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
     * PUT /prloginsprojectsconnection/{id}
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
     * DELETE /prloginsprojectsconnection/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}