<?php

namespace App\Http\Controllers;

use App\Models\Score;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scores = Score::all();
        return view('welcome', compact('scores'));
    }

    public function create()
    {
        return view('create-score');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nota_1' => 'required|numeric|min:0|max:5',
            'nota_2' => 'required|numeric|min:0|max:5',
            'nota_3' => 'required|numeric|min:0|max:5',
        ]);
        if ($validator->fails()) {
            return redirect(route('score.create'))->withErrors($validator)
                ->withInput();
        }
        $prom = ($request->nota_1 + $request->nota_2 + $request->nota_3) / 3;
        $score = new Score();
        $score->score_1 = $request->nota_1;
        $score->score_2 = $request->nota_2;
        $score->score_3 = $request->nota_3;
        $score->final_score = $prom;
        $score->save();
        return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $score = Score::find($id);
        $score->delete();
        return redirect(route('home'));
    }
}
