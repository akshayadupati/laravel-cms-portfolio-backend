<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class WorksController extends Controller
{
    public function list()
    {
        return view('works.list', [
            'works' => Work::all()
        ]);
    }

    public function addForm()
    {
        return view('works.add');
    }

    public function add()
    {

        $attributes = request()->validate([
            'company' => 'required',
            'job_title' => 'required',
            'start_from' => 'required',
            'end_to' => 'nullable',
        ]);

        $work = new Work();
        $work->company = $attributes['company'];
        $work->job_title = $attributes['job_title'];
        $work->start_from = $attributes['start_from'];
        $work->end_to = $attributes['end_to'];
        $work->save();

        return redirect('/console/works/list')
            ->with('message', 'Work has been added!');
    }

    public function editForm(Work $work)
    {
        return view('works.edit', [
            'work' => $work,
        ]);
    }

    public function edit(Work $work)
    {

        $attributes = request()->validate([
            'company' => 'required',
            'job_title' => 'required',
            'start_from' => 'required',
            'end_to' => 'nullable',
        ]);

        $work->company = $attributes['company'];
        $work->job_title = $attributes['job_title'];
        $work->start_from = $attributes['start_from'];
        $work->end_to = $attributes['end_to'];
        $work->save();


        return redirect('/console/works/list')
            ->with('message', 'Work has been edited!');
    }

    public function delete(Work $work)
    {
        $work->delete();

        return redirect('/console/works/list')
            ->with('message', 'Work has been deleted!');
    }
}
