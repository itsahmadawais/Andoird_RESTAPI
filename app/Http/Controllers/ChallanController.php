<?php

namespace App\Http\Controllers;

use App\Models\Challan;
use Illuminate\Http\Request;

class ChallanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $challan = Challan :: all();
        return response()->json([
            'success' => true,
            'data' => $challan
        ]);

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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Challan  $challan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $challan = Challan :: findOrFail();
        return response()->json([
            'success' => true,
            'data' => $challan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Challan  $challan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $challan = Challan :: findOrFail($id);
        return response()->json([
            'success' => true,
            'data' => $challan
        ]);
    }
}
