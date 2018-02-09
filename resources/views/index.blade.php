<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Crud Laravel</title>
		
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
		<style>
			h2{
				color: #101d75;
			}
		</style>
		
		
    </head>
    <body>
	
	<div class="container">
		<br><br><br><br>
		<div class="row"> 
			<div class="col-md-12">
				<center>
					<div>
						<h2>Crud com Laravel 5.5</h2>
						<a href="{{url('/create_client')}}">Cadastrar</a>
					</div>
				</center>
			</div>
		</div>
		<br>
		<div class="row"> 
		
			<div class="col-md-12">
			
				<table class="table">
					<thead>
						<tr>
							<td>#</td>
							<td>Nome</td>
							<td>E-mail</td>
							<td>Ação</td>
						</tr>
					</thead>
					<tbody>
					@foreach($clients as $client)
						<tr>
							<td>{{ $client->id }}</td>
							<td>{{ $client->name }}</td>
							<td>{{ $client->email }}</td>
							<td>
								<form action="{{url('/delete_client', $client->id)}}" method="post">
								{{ csrf_field() }}
								<input type="hidden" name="_method" value="DELETE">
								
								<input type="submit" value="Deletar" class="btn btn-danger">
								<a href="{{url('/edit_client', $client->id)}}" class="btn btn-success">Editar</a>
								
								
								</form>
							</td>
						</tr>
					@endforeach
					</tbody>
				</table>
				@if(session('success'))
					<p>{{session('success')}}</p>
				@endif
			</div>
			
		</div>
	</div>
	
     
	 
	 
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
