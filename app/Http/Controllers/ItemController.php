<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use DataTables;

class ItemController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $items = Item::all();
            return DataTables::of($items)
                ->addColumn('action', function($row){
                    return '<button class="btn btn-primary btn-sm editItem" data-id="'.$row->id.'">Edit</button>
                            <button class="btn btn-danger btn-sm deleteItem" data-id="'.$row->id.'">Delete</button>';
                })
                ->make(true);
        }
        return view('items.index');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Item::create($validated);

        return response()->json(['success' => 'Item added successfully']);
    }

    public function edit(Item $item)
    {
        return response()->json($item);
    }

    public function update(Request $request, Item $item)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $item->update($validated);

        return response()->json(['success' => 'Item updated successfully']);
    }

    public function destroy(Item $item)
    {
        $item->delete();

        return response()->json(['success' => 'Item deleted successfully']);
    }
}
