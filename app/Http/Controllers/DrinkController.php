<?php

namespace App\Http\Controllers;

use App\Models\Drink;
use Illuminate\Http\Request;

class DrinkController extends Controller
{
    public function __construct(Drink $drink)
    {
        $this->drink = $drink;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drink = Drink::all();
        return view('admin.drink.show',compact('drink'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.drink.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:100',
            'registro' => 'required|integer',
        ]);

        $drink = Drink::create($validated);
        return redirect(route('Drink.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Drink  $drink
     * @return \Illuminate\Http\Response
     */
    public function show(Drink $drink)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Drink  $drink
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $drink = $this->drink->findOrFail($id);
        return view('admin.drink.edit',compact('drink'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Drink  $drink
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $dados = $request->all();
        $drink = $this->drink->findOrFail($id);
        $drink->update($dados);

        return redirect()->route('Drink.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Drink  $drink
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $drink = $this->drink->findOrFail($id);
        $drink->delete();

        return redirect(route('Drink.index'));
    }
}
