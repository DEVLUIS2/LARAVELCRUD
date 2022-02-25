<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use CreatePizzasTable;
use Illuminate\Database\Console\DbCommand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;

class PizzaController extends Controller
{
    public function __construct(Pizza $pizza)
    {
        $this->pizza = $pizza;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pizza = Pizza::all();
        return view('admin.pizza.show',compact('pizza'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pizza.create');
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

        $pizza = Pizza::create($validated);
        return redirect(route('Pizza.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pizza  $pizza
     * @return \Illuminate\Http\Response
     */
    public function show(Pizza $pizza)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pizza  $pizza
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pizza = $this->pizza->findOrFail($id);
        return view('admin.pizza.edit',compact('pizza'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pizza  $pizza
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dados = $request->all();
        $pizza = $this->pizza->findOrFail($id);
        $pizza->update($dados);

        return redirect()->route('Pizza.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pizza  $pizza
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $pizza = $this->pizza->findOrFail($id);
        $pizza->delete();


        return redirect(route('Pizza.index'));
    }
}
