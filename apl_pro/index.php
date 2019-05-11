<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <title>Jawaban No 6</title>
    </head>
    <body>
        <br /><br />
		<div class="container">
		  <nav class="navbar navbar-inverse">
		   <div class="container-fluid">
			<div class="navbar-header">
			 <a class="navbar-brand" href="#">DATA PROGRAMMER</a>
			</div>
		   </div>
		  </nav>
		  <br />
		  <div class="panel panel-success">
			<div class="panel-body">
			  <div class="row">
			  <form method="POST" id="tambah_p" class="form">
				<div class="col-md-8"><input type="text" class="form-control" name="nama" placeholder="Nama Programmer"></div>
				<div class="col-md-4"><center><button id="tp" type="button" class="btn btn-lg btn-primary">Tambah Programmer</button></center></div>
			  </form>
			  </div>
			</div>
		  </div>
		<div class="tampildata"></div>
		
		</div>
    </body>
			
	<script>
		$('.tampildata').load('data.php');
		$(document).ready(function(){
			$('#tp').click(function(){
				var data = $('#tambah_p').serialize();
				$.ajax({
					type: 'POST',
					url: 'http://localhost/apl_pro/update.php',
					data: data,
					dataType: 'JSON',
					success: function(data) {
						$('.tampildata').load('data.php');
					}
				});
			});
		});
	</script>			
</html>

