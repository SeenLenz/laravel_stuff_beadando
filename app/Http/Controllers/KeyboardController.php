<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorekeyboardRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeyboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $keyboards = DB::table('keyboards')->get();
        return view('keyboards.index', ['keyboards' => $keyboards]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('keyboards.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorekeyboardRequest $request)
    {
        $validated = $request->validated();
        if (DB::table('keyboards')->insert($validated)) {
            return redirect()->route('keyboards.index')->with('success', 'keyboard created successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $keyboard = DB::table('keyboards')
            ->where('keyboards.id', '=', $id)
            ->first();

        if (!$keyboard) {
            abort(404);
        }

        return view('keyboards.show', ['keyboard' => $keyboard]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $keyboard = DB::table('keyboards')
            ->where('keyboards.id', '=', $id)
            ->first();
        return view('keyboards.edit', ['keyboard' => $keyboard]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorekeyboardRequest $request, string $id)
    {
        $validated = $request->validated();
        DB::table('keyboards')
            ->where('id', '=', $id)
            ->update($validated);
        return redirect()->route('keyboards.show', $id)->with('success', 'keyboard updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('keyboards')->delete($id);
        return redirect()->route('keyboards.index')->with('success', 'keyboard deleted successfully');
    }
}
