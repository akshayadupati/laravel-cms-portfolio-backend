@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Education</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>Title</th>
            <th>Start Year</th>
            <th>End Year</th>
            <th>Degree</th>
            <th>Location</th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($studies as $study)
        <tr>
            <td>{{$study->title}}</td>
            <td>{{$study->start}}</td>
            <td>{{$study->end}}</td>
            <td>{{$study->degree}}</td>
            <td>{{$study->location}}</td>
            <td><a href="/console/education/edit/{{$study->id}}">Edit</a></td>
            <td><a href="/console/education/delete/{{$study->id}}">Delete</a></td>
        </tr>
        @endforeach
    </table>

    <a href="/console/education/add" class="w3-button w3-green">New Education</a>

</section>

@endsection