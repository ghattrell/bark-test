<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Guestbook\Models\Entry;

class EntriesController extends Controller
{
    public function index()
    {
        dd(phpinfo());
        return App::make('SuccessHandler')->send(Entry::all()->toArray());
    }

    public function show(int $entry_id)
    {
        return App::make('SuccessHandler')->send([
            'entry' => Entry::find($entry_id)
        ]);
    }

    public function save(Request $request)
    {
        $entry = Entry::create($request->all());

        return App::make('SuccessHandler')->setCode(201)->send([
            'saved_entry' => $entry
        ]);

        return response()->json($entry, 201);
    }
}
