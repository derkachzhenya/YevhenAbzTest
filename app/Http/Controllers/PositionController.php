<?php

namespace App\Http\Controllers;

use App\Models\Position;
use App\Http\Requests\StorePositionRequest;
use App\Http\Requests\UpdatePositionRequest;
use Illuminate\Http\Request;

class PositionController extends Controller
{

    public function index(Request $request)
    {
        $data['q'] = $request->get('q');
        $positions = Position::where('name', 'like', '%' . $data['q'] . '%')
            ->orderBy('id', 'DESC')
            ->paginate(15)
            ->withQueryString();
        return view('position.index', compact('positions'));
    }


    public function create()
    {
        return view('position.create');
    }


    public function store(StorePositionRequest $request)
    {
        $data = $request->validated();
        Position::firstOrCreate($data);

        return redirect()->route('positions.index');
    }

    public function show(Position $position)
    {
    }


    public function edit(Position $position)
    {
        return view('position.edit', compact('position'));
    }


    public function update(UpdatePositionRequest $request, Position $position)
    {
        $data = $request->validated();
        $position->update($data);
        return redirect()->route('positions.index', compact('position'));
    }


    public function destroy(Position $position)
    {
        $position->delete();
        return redirect()->route('positions.index', compact('position'));
    }
}
