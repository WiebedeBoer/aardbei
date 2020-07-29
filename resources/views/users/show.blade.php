@extends('layouts.game')
@section('title')
Game
@endsection
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">			
                <div class="card-header">Game Account</div>
                <div class="card-body">
					
					<div class="container">
						<h1>{{ $userdata->name }}</h1>
						<div class="py-3"><div class="col-sm-3"><h3>Name:</h3> {{ $userdata->name }}</div></div>
						<div class="py-3"><div class="col-sm-3"><h3>Email:</h3> {{ $userdata->email }}</div></div>
						@if($dynastycount ==1)
							<div class="py-3"><div class="col-sm-3"><h3>Dynasty:</h3> <a href="/dynasty/{{$dynastydata->dynasty_id}}">{{$dynastydata->dynasty_name}}</a></div></div>
							@if($portraitcount <4)
								<div class="py-3"><div class="col-sm-3"><h3>Tutorial:</h3>Step 2<br><a href="/tutorial/character" class="btn btn-primary"> Set up a Player Character</a></div></div>
							@else
								<div class="py-3"><div class="col-sm-3"><h3>Tutorial:</h3>Step 3<br><a href="/tutorial/estate" class="btn btn-primary"> Set up an Estate</a></div></div>
							@endif
						@else
							<div class="py-3"><div class="col-sm-3"><h3>Tutorial:</h3>Step 1<br><a href="/tutorial/dynasty" class="btn btn-primary"> Set up a Dynasty</a></div></div>
						@endif
						<div class="py-3">
						
<form method="POST" action="/users/{{$userdata->id}}" enctype="multipart/form-data" class="pb-3">
@method('PATCH')
<div class="col-sm-3">
<div class="form-group">

<h3>Music:</h3> <img src="{{ asset('img/images/trumpet.png') }}" class="tbi" width="48" height="48" alt="audio" title="audio">
<select name="audio" class="selectpicker form-control">
<optgroup label="music">
    <option value="1" {{ $userdata->audio ==1 ? 'selected' : '' }}>on</option>
    <option value="0" {{ $userdata->audio ==0 ? 'selected' : '' }}>off</option>
</select>
</div>
<div>{{$errors->first('audio')}}</div>
<div class="py-1"><input type="submit" value="change music setting" class="btn btn-primary"></div>
</div>
@csrf
</form>					
						</div>
						
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection