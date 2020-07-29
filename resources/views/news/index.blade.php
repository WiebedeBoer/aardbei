@extends('layouts.news')
@section('title')
News
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">News</div>
                <div class="card-body">
					<div class="container">
					<h1>News</h1>
					<div class="links">
						<a href="/news#general">General News</a>
						<a href="/news#developer">Developers Log</a>
						<a href="/manual">Manual</a>

					</div>
						<div class="py-4">
						<a name="general"><h2>General News</h2></a>
							<div class="py-4">
								<h3>In Development, 6th of march 2020</h3>
								<p>Welcome to Medieval. The game is in alpha development.</p>
							</div>
						</div>
						<div class="py-4">
						<a name="developer"><h2>Developers Log</h2></a>
							<div class="py-4">
								<h3>News, 6th of march 2020</h3>
								<p>Manual and news section added.</p>
							</div>
							<div class="py-4">
								<h3>Registration, 6th of march 2020</h3>
								<p>Registration is complete. You can register for the game in alpha stage.</p>
							</div>
							<div class="py-4">
								<h3>Alpha Development, 6th of march 2020</h3>
								<p>Game is in alpha development. Alpha development commenced.</p>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection