<?php
include("koneksi.php");
$query = "SELECT * FROM users ORDER BY id";
$result = mysqli_query($con, $query);
if(mysqli_num_rows($result) > 0){
	foreach ($result as $pro){ 
		$id=$pro['id'];
		$bisa='';
		$query = "SELECT nama FROM skills WHERE user_id=$id";
		$skills = mysqli_query($con, $query);
		if(mysqli_num_rows($skills) > 0){
			foreach ($skills as $skill){ 
				$bisa.=$skill['nama'].',';
			}
			$bisa=substr($bisa, 0, -1);//menghilangkan koma paling belakang
		}else{
			$bisa='belum ada skill';
		}
		?>
		<div class="panel panel-success">
		  <div class="panel-body">
			<div class="row">
			  <div class="col-md-6">
				<div class="panel panel-primary">
				  <div class="panel-heading"><?php echo $pro['nama'];?></div>
				  <div class="panel-body"><?php echo $bisa;?></div>
				</div>
			  </div>
			  <div class="col-md-6"><br /><br />
				<div class="row">
				  <form method="POST" id="<?php echo $id;?>" class="form">
					<input type="hidden" name="id" value="<?php echo $id;?>">
					<div class="col-md-8"><input type="text" class="form-control" name="skill" placeholder="Skill"></div>
					<div class="col-md-4"><center><button type="button" onclick="save(<?php echo $id;?>)"class="btn btn-md btn-primary">Tambah Skill</button></center></div>
				  </form>
				</div>
			  </div>
			</div> 	
		  </div>
		</div>
	<?php
	}	
}?>
<script>
	function save(id){
		var url = "http://localhost/apl_pro/update.php";
		var data = $('#'+id).serialize();
		$.ajax({
			url : url,
			type: "POST",
			data: data,
			dataType: "JSON",
			success: function(data)
			{
				$('.tampildata').load('data.php');
			},
			error: function (jqXHR, textStatus, errorThrown)
			{
			   alert(textStatus);
			}
		});
	}
</script>