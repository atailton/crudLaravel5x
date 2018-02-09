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
						<h2>Criando Usuário</h2>
						<a href="{{url('/')}}">Voltar<a/>
					</div>
				</center>
			</div>
		</div>
		<br>
		<div class="row"> 
		
			<div class="col-md-12">
				@if(session('success'))
					<p>{{session('success')}}</p>
				@endif
				<form action="{{url('/create_client')}}" method="post">
				
				{{ csrf_field() }}
				
					<div class="form-group">
						<label for="name">Nome</label>
						<input type="text" name="name" placeholder="Digite o nome" class="form-control">
					</div>
					
					<div class="form-group">
						<label for="email">E-mail</label>
						<input type="text" name="email" placeholder="Digite o e-mail" class="form-control">
					</div>
					
					<div class="form-group">
						<input type="submit" value="Salvar" class="btn btn-primary">
					</div>
					
					
				
				</form>
				
			</div>
			
		</div>
	</div>
	
     
	 
	 
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
