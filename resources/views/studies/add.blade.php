@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Add Education</h2>

    <form method="post" action="/console/education/add" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="title">Title:</label>
            <input type="title" name="title" id="title" value="{{old('title')}}" required>

            @if ($errors->first('title'))
            <br>
            <span class="w3-text-red">{{$errors->first('title')}}</span>
            @endif
        </div>
        <div class="w3-margin-bottom">
            <label for="start">Start Year:</label>
            <input type="text" name="start" id="start" value="{{old('start')}}" required>

            @if ($errors->first('start'))
            <br>
            <span class="w3-text-red">{{$errors->first('start')}}</span>
            @endif
        </div>
        <div class="w3-margin-bottom">
            <label for="end">End Year:</label>
            <input type="text" name="end" id="end" value="{{old('end')}}" required>

            @if ($errors->first('end'))
            <br>
            <span class="w3-text-red">{{$errors->first('end')}}</span>
            @endif
        </div>
        <div class="w3-margin-bottom">
            <label for="degree">Degree:</label>
            <input type="text" name="degree" id="degree" value="{{old('degree')}}" required>

            @if ($errors->first('degree'))
            <br>
            <span class="w3-text-red">{{$errors->first('degree')}}</span>
            @endif
        </div>
        <div class="w3-margin-bottom">
            <label for="location">Location:</label>
            <input type="text" name="location" id="location" value="{{old('location')}}" required>

            @if ($errors->first('start'))
            <br>
            <span class="w3-text-red">{{$errors->first('start')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Add Education</button>

    </form>

    <a href="/console/education/list">Back to Education List</a>

</section>

@endsection