<?php

namespace App\Http\Controllers;

use App\Interfaces\RepositoryInterface;
use App\Models\cars;
use Illuminate\Http\Request;

class CarsController extends Controller
{

    protected $repo;

    public function __construct(RepositoryInterface $repo)
    {
        $this->repo = $repo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = $this->repo->getAll();

        return view('cars.index', ['cars' => $cars]);
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

    public function show($id)
    {


        $cars = $this->repo->find($id);
        return view('cars.index', ['cars' => $cars]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\cars $cars
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\cars $cars
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cars = $this->repo->find($id);
        return view('cars.edit', ['cars' => $cars]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\cars $cars
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->repo->update(['details' => $request->details, 'client' => $request->client], $id);
        return redirect()->route('cars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\cars $cars
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $this->repo->delete($id);
        return redirect()->route('cars');
    }

}
