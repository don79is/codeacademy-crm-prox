<?php namespace App\Http\Controllers;

use App\Models\PrClient;
use App\Models\PrProjects;
use App\Models\PrProjectsTypes;
use Illuminate\Routing\Controller;

class PrProjectsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /prprojects
	 *
	 * @return Response
	 */
	public function index()
    {
        return PrProjects::get();



    }
	/**
	 * Show the form for creating a new resource.
	 * GET /prprojects/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /prprojects
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /prprojects/{id}
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
	 * GET /prprojects/{id}/edit
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
	 * PUT /prprojects/{id}
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
	 * DELETE /prprojects/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}