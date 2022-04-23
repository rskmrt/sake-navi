<?php

namespace App\Http\Controllers;

use App\Models\Cocktail;
use App\Models\Base;
use App\Models\Taste;
use App\Models\Split;
use App\Models\Strength;
use App\Models\Technique;
use App\Models\Glass;
use Illuminate\Http\Request;
use Auth;

class OriginalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $cocktails = Cocktail::where('user_id', $user['id'])->paginate(9);

        return view('index\originals\original', compact('cocktails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $bases = Base::get();
        $glasses = Glass::get();
        $splits = Split::get();
        $strengths = Strength::get();
        $tastes = Taste::get();
        $techniques = Technique::get();

        return view('index\originals\create', compact('user', 'bases', 'glasses', 'splits', 'strengths', 'tastes', 'techniques'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        Cocktail::insertGetId([
            'name' => $data['name'],
            'user_id' => $data['user_id']
        ]);

        return redirect('original');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
        //
    }
}
