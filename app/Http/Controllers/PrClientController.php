<?php namespace App\Http\Controllers;

use App\Models\PrClient;
use Illuminate\Routing\Controller;

class PrClientController extends Controller
{

    /**
     * Display a listing of the resource.
     * GET /prclient
     *
     * @return Response
     */
    public function index()
    {
        return PrClient::get();
        //PrClient::all(); //istraukimas gale get() first()
       // $configuration = [
           // "example" => "labas rytas",
           //"client" =>PrClient::with(['projects','clientPersons'])->get()];
       // return view ('data',$configuration);
    }

    /**
     * Show the form for creating a new resource.
     * GET /prclient/create
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * POST /prclient
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     * GET /prclient/{id}
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
     * GET /prclient/{id}/edit
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
     * PUT /prclient/{id}
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
     * DELETE /prclient/{id}
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}