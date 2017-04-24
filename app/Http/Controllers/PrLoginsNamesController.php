<?php namespace App\Http\Controllers;

use App\Models\PrLoginsNames;
use Illuminate\Routing\Controller;

class PrLoginsNamesController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /prloginsnames
	 *
	 * @return Response
	 */
	public function index()
	{
		return PrLoginsNames::get();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /prloginsnames/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /prloginsnames
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /prloginsnames/{id}
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
	 * GET /prloginsnames/{id}/edit
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
	 * PUT /prloginsnames/{id}
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
	 * DELETE /prloginsnames/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}