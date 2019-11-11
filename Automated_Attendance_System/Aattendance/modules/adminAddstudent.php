<?php include 'config1.php';?>
<?php
	//echo"Take a view here";
	// $suid = $_SESSION['uid'];
	//echo $suid;
?>
<div class="container">

  <div class="row">
    <div class="col-md-12 col-lg-12">
			<h1 class="page-header">Add Student</h1>  
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

		<div class="col-md-12 col-lg-12">
			<form action="" method="GET" class="form-inline" id="studentForm" data-toggle="validator">
				<div class="form-group">
					<label for="select" class="control-label">Subject:</label>
					<?php
						$query_subject = "SELECT subject.name, subject.id from subject 
					INNER JOIN user_subject WHERE user_subject.id = subject.id  ORDER BY subject.name";
						$sub=$conn->query($query_subject);
						$rsub=$sub->fetchAll(PDO::FETCH_ASSOC);
						//print_r($rsub);
						$subnm=$rsub[0]['name'];
						$subid=$rsub[0]['id'];
						//echo "<h3>".$subnm." ".$subid."</h3>";
					
						echo "<select name='subject' class='form-control' required='required'>";
						for($i = 0; $i<count($rsub); $i++)
						{
							if ($_GET['subject'] == $rsub[$i]['id']) {
								echo"<option value='". $rsub[$i]['id']."' selected='selected'>".$rsub[$i]['name']."</option>";
							}
							else {
								echo"<option value='". $rsub[$i]['id']."'>".$rsub[$i]['name']."</option>";
							}
						}
						echo "</select><br>";
					?>
				</div>
				
				<div class="form-group" >
					<label for="select" class="control-label">Name:</label>
					<input type="text" name="sname" class="form-control" value="<?php print isset($_GET['name']) ? $_GET['name'] : ''; ?>" required>
				</div>
				
				<div class="form-group" >
					<label for="select" class="control-label">Index No:</label>
					<input type="number" name="index" class="form-control" value="<?php print isset($_GET['index']) ? $_GET['index'] : ''; ?>" required>
                </div>
				<input type="hidden" name="page" value="adminAddstudent">
				<input type="submit" class="btn btn-info" name="submit" value="Add Student">
			</form>
		</div>	
    </div>
    <br>
    
</div>
<script>
	$('#studentForm').validator();
</script>
			
			<?php

				
				


				if(isset($_GET['submit']) && !empty($_GET['sname']) && !empty($_GET['index']) )
				{
					$sdat = $_GET['sname'];
                    $edat= $_GET['index'];

                    //checking for already exist roll no
                    // $sql = "SELECT student.name FROM student where  `rollno`=$edat";
                    // $stmt = $conn->prepare($sql);
                    // $stmt->execute();
                    // $resultstmt = $stmt->fetchAll(PDO::FETCH_ASSOC); 

                    // if (mysqli_num_rows($rsultstmt)>0){
                        

                        $subject=$_GET['subject'];
					
                        $query_student = "INSERT into student (name,rollno) values ('$sdat',$edat)";
                        $stu=$conn->query($query_student);
    
                        $query = "select sid from student where rollno=$edat and name='$sdat'";
                        $student=$conn->query($query);
                        $result=$student->fetchAll(PDO::FETCH_ASSOC);
                        $sid=$result[0]['sid'];
    
                        $query_student_sub = "insert into student_subject(sid,id) values ($sid,$subject)";
                        $stu_sub=$conn->query($query_student_sub);
                        
                        print '<div class="alert alert-dismissible alert-success">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Added!</strong>Student Added Successfully!.
                  </div>';
    
                    // }else{
                        
                    //     header("location:index.php?page=adminAddstudent&student=invalid");

                    // }

                    
                    
				}

				



			?>