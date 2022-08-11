<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Study;

class StudiesController extends Controller
{
    //
    public function list()
    {
        return view('studies.list', [
            'studies' => Study::all()
        ]);
    }

    public function addEducation()
    {
        return view('studies.add');
    }

    public function add()
    {

        $attributes = request()->validate([
            'title' => 'required',
            'start' => 'required',
            'end' => 'required',
            'degree' => 'required',
            'location' => 'required',
        ]);

        $study = new Study();
        $study->title = $attributes['title'];
        $study->start = $attributes['start'];
        $study->end = $attributes['end'];
        $study->degree = $attributes['degree'];
        $study->location = $attributes['location'];
        $study->save();

        return redirect('/console/education/list')
            ->with('message', 'Education has been added!');
    }

    public function editEducation(Study $study)
    {
        return view('studies.edit', [
            'study' => $study,
        ]);
    }

    public function edit(Study $study)
    {

        $attributes = request()->validate([
            'title' => 'required',
            'start' => 'required',
            'end' => 'required',
            'degree' => 'required',
            'location' => 'required',
        ]);

        $study->title = $attributes['title'];
        $study->start = $attributes['start'];
        $study->end = $attributes['end'];
        $study->degree = $attributes['degree'];
        $study->location = $attributes['location'];
        $study->save();

        return redirect('/console/education/list')
            ->with('message', 'Education has been edited!');
    }

    public function delete(Study $study)
    {
        $study->delete();

        return redirect('/console/education/list')
            ->with('message', 'Education has been deleted!');
    }

}
