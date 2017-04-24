<?php namespace App\Http\Controllers;

use App\Models\PrProjectsTypes;
use Illuminate\Routing\Controller;

class PrProjectsTypesController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /prprojectstypes
	 *
	 * @return Response
	 */
	public function index()
	{
        return PrProjectsTypes::orderBy('created_at','desc')//builder
        ->select('id','name','types','description')//builder
        ->first(); //istraukimas gale get() first()
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /prprojectstypes/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /prprojectstypes
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /prprojectstypes/{id}
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
	 * GET /prprojectstypes/{id}/edit
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
	 * PUT /prprojectstypes/{id}
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
	 * DELETE /prprojectstypes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}