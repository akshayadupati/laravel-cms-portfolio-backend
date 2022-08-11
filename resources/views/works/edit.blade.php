@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Edit Work</h2>

    <form method="post" action="/console/works/edit/{{$work->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="company">Company:</label>
            <input type="text" name="company" id="company" value="{{old('company', $work->company)}}" required>

            @if ($errors->first('company'))
            <br>
            <span class="w3-text-red">{{$errors->first('company')}}</span>
            @endif
        </div>
        <div class="w3-margin-bottom">
            <label for="job_title">Job Title:</label>
            <input type="text" name="job_title" id="job_title" value="{{old('job_title', $work->job_title)}}" required>

            @if ($errors->first('job_title'))
            <br>
            <span class="w3-text-red">{{$errors->first('job_title')}}</span>
            @endif
        </div>
        <div class="w3-margin-bottom">
            <label for="start_from">Start Date:</label>
            <input type="number" min="1900" max="2099" step="1" name="start_from" id="start_from" value="{{old('start_from', $work->start_from)}}" required />

            @if ($errors->first('start_from'))
            <br>
            <span class="w3-text-red">{{$errors->first('start_from')}}</span>
            @endif
        </div>
        <div class="w3-margin-bottom">
            <label for="end_to">End Date:</label>
            <input type="number"  max="2099" step="1"  name="end_to" id="end_to" value="{{old('end_to', $work->end_to)}}" />

            @if ($errors->first('end_to'))
            <br>
            <span class="w3-text-red">{{$errors->first('end_to')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Edit Work</button>

    </form>

    <a href="/console/works/list">Back to Work List</a>

</section>

@endsection