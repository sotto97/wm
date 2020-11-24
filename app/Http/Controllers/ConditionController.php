<?php

namespace App\Http\Controllers;

use App\Models\Condition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;


class ConditionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conditions = DB::select("SELECT * FROM conditions ORDER BY check_date asc");
        return view('condition.index', compact('conditions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('condition.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $condition = new Condition;

        $condition->user_id = $request->input('user_id');
        $condition->check_date = $request->input('check_date');
        $condition->weight = $request->input('weight');
        $condition->bmi = $request->input('bmi');
        $condition->fat = $request->input('fat');
        $condition->muscle = $request->input('muscle');
        $condition->visceral_fat = $request->input('visceral_fat');
        $condition->metabolism = $request->input('metabolism');

        $condition->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Condition  $condition
     * @return \Illuminate\Http\Response
     */
    public function show(Condition $condition, $id)
    {
        //
        $condition = Condition::find($id);

        return view('condition.show', compact('condition'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Condition  $condition
     * @return \Illuminate\Http\Response
     */
    public function edit(Condition $condition, $id)
    {
        //
        $condition = Condition::find($id);

        return view('condition.edit', compact('condition'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Condition  $condition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Condition $condition, $id)
    {
        $condition = Condition::find($id);

        $condition->user_id = $request->input('user_id');
        $condition->check_date = $request->input('check_date');
        $condition->weight = $request->input('weight');
        $condition->bmi = $request->input('bmi');
        $condition->fat = $request->input('fat');
        $condition->muscle = $request->input('muscle');
        $condition->visceral_fat = $request->input('visceral_fat');
        $condition->metabolism = $request->input('metabolism');

        $condition->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Condition  $condition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Condition $condition, $id)
    {
        $condition = Condition::find($id);
        $condition->delete();
    }
}
