<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workout;
use App\User;
use Doctrine\Inflector\Rules\Word;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class WorkoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $workouts = DB::select("SELECT * FROM workouts");
        return view(('workouts.index'), compact('workouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('workouts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $workout = new Workout;

        $workout->user_id = auth()->id();
        $workout->work_type = $request->work_type;
        $workout->date = $request->date;

        $workout->save();
        return redirect('wo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Workout  $workout
     * @return \Illuminate\Http\Response
     */
    // public function show(Workout $workout, $id)
    public function show(Request $request, $id)
    {
        //
        $workout = Workout::find($id);
        return view('workouts.show', compact('workout'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Workout  $workout
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Workout $workout)
    {
        //
        $workout = Workout::find($request->id);
        return view('workouts.edit', compact('workout'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Workout  $workout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Workout $workout, $id)
    {
        //
        $workout = Workout::find($id);

        $workout->user_id = auth()->id();
        $workout->work_type = $request->work_type;
        $workout->date = $request->date;

        $workout->save();

        return redirect('wo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Workout  $workout
     * @return \Illuminate\Http\Response
     */
    public function destroy(Workout $workout, $id)
    {
        //
        $workout = Workout::find($id);
        $workout->delete();
        return redirect('wo');
    }
}
