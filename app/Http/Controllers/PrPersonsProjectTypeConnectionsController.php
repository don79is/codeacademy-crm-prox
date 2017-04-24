<?php namespace App\Http\Controllers;

use App\Models\PrPersonsProjectTypeConnections;
use Illuminate\Routing\Controller;

class PrPersonsProjectTypeConnectionsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /prpersonsprojecttypeconnections
	 *
	 * @return Response
	 */
	public function index()
	{
		return PrPersonsProjectTypeConnections::get();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /prpersonsprojecttypeconnections/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /prpersonsprojecttypeconnections
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /prpersonsprojecttypeconnections/{id}
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
	 * GET /prpersonsprojecttypeconnections/{id}/edit
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
	 * PUT /prpersonsprojecttypeconnections/{id}
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
	 * DELETE /prpersonsprojecttypeconnections/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}