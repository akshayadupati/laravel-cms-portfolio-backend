@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Work</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>Company</th>
            <th>Job Title</th>
            <th>Start year</th>
            <th>Final year</th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($works as $work)
        <tr>
            <td>{{$work->company}}</td>
            <td>{{$work->job_title}}</td>
            <td>{{$work->start_from}}</td>
            <td>{{$work->end_to}}</td>
            <td><a href="/console/works/edit/{{$work->id}}">Edit</a></td>
            <td><a href="/console/works/delete/{{$work->id}}">Delete</a></td>
        </tr>
        @endforeach
    </table>

    <a href="/console/works/add" class="w3-button w3-green">New Work Experience</a>

</section>

@endsection