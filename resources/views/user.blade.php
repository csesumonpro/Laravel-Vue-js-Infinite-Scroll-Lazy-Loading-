<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    </head>
    <body>
        <div  id="app">
			<div class="container">
		
				<h2 class="text-center">Laravel Scout</h2>
				<div class="float-right">
					<form action="{{route('search')}}" method="GET">
						<input class="form-control float-right" name="keyword" type="text" placeholder="Search" aria-label="Search">					
					</form>
				</div>
				<br><br>
			 <!-- Search form -->
				@foreach($users as $user)
				 <div class="card">
					<div class="card-body">
						<h4 class="card-title">{{$user->name}}</h4>
						<p class="card-text">{{$user->email}}</p>
					</div>
				</div>
				@endforeach
				<br>
				<div class="pagination float-right">
					{{$users->links()}}
				</div>
			</div>
        </div>
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
