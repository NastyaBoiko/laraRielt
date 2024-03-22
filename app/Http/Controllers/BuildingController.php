<?php

namespace App\Http\Controllers;

use App\Models\Building;
use Illuminate\Http\Request;

class BuildingController extends Controller
{
    public function index() {
        $buildings = Building::all();
        return view('building.index', compact('buildings'));
    }

    public function create() {
        return view('building.create');
    }

    public function store() {
        $data = request()->validate([
            'title' => 'string',
            'district' => 'string',
            'address' => 'string',
        ]);
        Building::create($data);
        return redirect()->route('building.index');
    }

    public function show(Building $building) {
        return view('building.show', compact('building'));
    }

    public function edit(Building $building) {
        return view('building.edit', compact('building'));
    }

    public function update(Building $building) {
        $data = request()->validate([
            'title' => 'string',
            'district' => 'string',
            'address' => 'string',
        ]);
        $building->update($data);
        return redirect()->route('building.show', $building->id);
    }

    public function destroy(Building $building) {
        $building->delete();
        return redirect()->route('building.index');
    }


}
