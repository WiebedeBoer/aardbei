@extends('layouts.forum')
@section('title')
Forum
@endsection
@section('content')
<div class="py-5">
@include('session')
<div class="row">
<div class="col-12 d-flex justify-content-center py-3">	
<div class="forum-nav-menu">
<a href="/forum">Forum</a> -> <a href="/forum/region">Regional Roleplay</a>
</div>
</div>
</div>
	
<h1>Regional Roleplay</h1>

<div class="threads">
@if ($threadcount >=1)
@foreach ($threaddata as $thread)
	<div class="py-3">
		<div class="forum-thread">
			<a href="/forum/{{ $thread->thread_id }}">{{ $thread->thread_name }}</a>
		</div>
	</div>
@endforeach
@endif
</div>

<div class="row">
<div class="col-12 d-flex justify-content-center pt-5">
@if ($threadcount >=1)
    {{ $threaddata->links() }}
@endif
</div>
</div>

</div>
@endsection