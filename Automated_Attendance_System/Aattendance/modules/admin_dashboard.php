<?php include 'config1.php';?>
<?php
	//echo"Take a view here";
	// $suid = $_SESSION['uid'];
	//echo $suid;
?>
<div class="row">
    <div class="col-md-6 col-md-offset-3 col-lg-6 text-center">
      <h3>Search Student</h3>
    </div>
  </div>
  <div class="row">
		<?php if(isset($_GET['student'])) : ?>
			<div class="col-md-6 col-md-offset-3 col-lg-6 no-column-padding">
				<div class="form-group alert alert-dismissible alert-danger">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong>Sorry!</strong> Invalid Student Index No.
				</div>
			</div>
		<?php endif; ?>
	
    <div class="col-md-6 col-md-offset-3 col-lg-6">
      <form class="form-horizontal" action="index.php" method="post" id="studentForm" data-toggle="validator">
        <div class="form-group">
          <label for="rollno" class="control-label">Index No.</label>
          <input type="number" class="form-control" id="rollno" maxlength="10" name="rollno" placeholder="Index No." required>
        </div>
				
				<div class="form-group">
					<input type="submit" name="submit" class="btn btn-success btn-block" value="GO">
				</div>
				
				<input type="hidden" name="admin_student" value="y" />
      </form>
    </div>  
  </div>
</div>

<script>
	$('#studentForm').validator();
</script>

<div class="row">
    <div class="col-md-6 col-md-offset-3 col-lg-6 text-center">
      <h3>Search Class</h3>
    </div>
  </div>
  <div class="row">

	
    <div class="col-md-6 col-md-offset-3 col-lg-6">
      <form class="form-horizontal" action="index.php" method="post" id="studentForm" data-toggle="validator">
        <div class="form-group">
          <label for="rollno" class="control-label">Search</label>
          <input type="text" class="form-control" id="search_text" maxlength="10" name="search_text" placeholder="Search">
        </div>
      </form>
    </div>  
  </div>
</div>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 col-md-offset-3 col-lg-6">
			<p>&nbsp;&nbsp;&nbsp;</p>
			<div class="report-data"  id="result">
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function(){
    var txt=$('#search_text').val();
    if(txt ==''){
        $('#result').html('');
            $.ajax({
                url:"modules/search_handle.php",
                method:"post",
                data:{search:txt},
                dataType: "text" ,
                success: function(data){
                    $('#result').html(data);
    }
    });
    }

    $('#search_text').keyup(function(){
    txt = $(this).val();
    if(txt =='')
        {
            $('#result').html('');
            $.ajax({
                url:"modules/not_search_handle.php",
                method:"post",
                data:{search:txt},
                dataType: "text" ,
                success: function(data){
                    $('#result').html(data);
                }
            });
        }else{
            $('#result').html('');
            $.ajax({
                url:"modules/search_handle.php",
                method:"post",
                data:{search:txt},
                dataType: "text" ,
                success: function(data){
                    $('#result').html(data);
                }
            });
        }
    });
});
</script>