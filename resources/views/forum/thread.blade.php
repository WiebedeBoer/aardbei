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
@if ($postcount >=1)
	@if($threaddata->subforum =="open")
		<a href="/forum">Forum</a> -> <a href="/forum/open">Open Roleplay</a> -> <a href="/forum/{{ $threaddata->thread_id }}">{{ $threaddata->thread_name }}</a>
	@elseif($threaddata->subforum =="tavern")
		<a href="/forum">Forum</a> -> <a href="/forum/tavern">Tavern</a> -> <a href="/forum/{{ $threaddata->thread_id }}">{{ $threaddata->thread_name }}</a>
	@elseif($threaddata->subforum =="intro")
		<a href="/forum">Forum</a> -> <a href="/forum/intro">Introductions</a> -> <a href="/forum/{{ $threaddata->thread_id }}">{{ $threaddata->thread_name }}</a>
	@elseif($threaddata->subforum =="kingdom")
		<a href="/forum">Forum</a> -> <a href="/forum/kingdom">Realm Roleplay</a> -> <a href="/forum/{{ $threaddata->thread_id }}">{{ $threaddata->thread_name }}</a>
	@elseif($threaddata->subforum =="region")
		<a href="/forum">Forum</a> -> <a href="/forum/region">Regional Roleplay</a>	-> <a href="/forum/{{ $threaddata->thread_id }}">{{ $threaddata->thread_name }}</a>
	@elseif($threaddata->subforum =="war")
		<a href="/forum">Forum</a> -> <a href="/forum/war">War &amp; Diplomacy Roleplay</a>	-> <a href="/forum/{{ $threaddata->thread_id }}">{{ $threaddata->thread_name }}</a>
	@else
		<a href="/forum">Forum</a> -> Subforum -> <a href="/forum/{{ $threaddata->thread_id }}">{{ $threaddata->thread_name }}</a>
	@endif
@else
	<a href="/forum">Forum</a> -> Subforum -> Thread
@endif
</div>
</div>
</div>


@if ($postcount >=1)					
	<h1>{{ $post->threads->thread_name }}</h1>
@else
	<h1>Thread</h1>	
@endif

<!--create post-->
<div class="forum-create">
</div>

<!--show posts-->
<div class="threads">
@if ($postcount >=1)
@foreach ($postdata as $post)
	<div class="py-3">
		<div class="forum-thread">
			<h2>{{ $post->threads->thread_name }} - {{ $post->creators->name }}</h2>
			<div>{{ $post->message }}</div>
			<!--edit post-->
			@if($post->creator ==$userid)
				<div><a href="/forum/{{ $post->post_id }}/edit">Edit</a></div>
			@endif
		</div>
	</div>
@endforeach
@endif
</div>

<div class="row">
<div class="col-12 d-flex justify-content-center pt-5">
@if ($postcount >=1)
    {{ $postdata->links() }}
@endif
</div>
</div>

</div>
@endsection