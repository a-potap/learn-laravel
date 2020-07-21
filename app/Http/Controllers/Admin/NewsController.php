<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $persons = [
            [
                'id'         => 1,
                'first_name' => 'John',
                'last_name'  => 'Smith',
            ],
            [
                'id'         => 2,
                'first_name' => 'Jane',
                'last_name'  => 'Smith',
            ],
        ];

        $params = [
            'title'   => 'Persons Listing',
            'persons' => $persons,
        ];

        return view('admin.news.index')->with($params);
    }

    public function create()
    {
        $params = [
            'title' => 'Add Person',
        ];

        return view('admin.news.create')->with($params);
    }

    public function store(Request $request)
    {
        $news = \App\News::create([
            'date' => $request->post('date'),
            'text' => $request->post('text'),
        ]);

        $news->save();

        return redirect()
            ->route('news.index')
            ->with('status', 'New person successfully created!');
    }

    public function show($id)
    {
        $person = [
            'id'         => 1,
            'first_name' => 'John',
            'last_name'  => 'Smith',
        ];

        $params = [
            'title'  => 'Person Details',
            'person' => $person,
        ];

        return view('persons.show')->with($params);
    }

    public function edit($id)
    {
        $person = [
            'id'         => 1,
            'first_name' => 'John',
            'last_name'  => 'Smith',
        ];

        $params = [
            'title'  => 'Person Details',
            'person' => $person,
        ];

        return view('persons.edit')->with($params);
    }

    public function update(Request $request, $id)
    {
        return redirect()
            ->route('persons.index')
            ->with('status', 'Person details successfully updated!');
    }

    public function destroy($id)
    {
        return redirect()
            ->route('persons.index')
            ->with('status', 'Person record successfully deleted!');
    }
}
