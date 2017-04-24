<?php namespace App\Http\Controllers;

use App\Models\PrClientPersonsConnections;
use Illuminate\Routing\Controller;

class PrClientPersonsConnectionsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /prclientpersonsconnections
	 *
	 * @return Response
	 */
	public function index()
	{
		return PrClientPersonsConnections::get();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /prclientpersonsconnections/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /prclientpersonsconnections
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /prclientpersonsconnections/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /prclientpersonsconnections/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /prclientpersonsconnections/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /prclientpersonsconnections/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}