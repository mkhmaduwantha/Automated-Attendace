<?php include 'config1.php';?>
<?php
	//echo"Take a view here";
	//$suid = $_SESSION['uid'];
	//echo $suid;
?>
<div class="container">

  <div class="row">
    <div class="col-md-12 col-lg-12">
			<h1 class="page-header">Add Class</h1>  
		</div>
	</div>
    
	<div class="row">
		<div class="col-md-12 col-lg-12">
			<form action="" method="GET" class="form-inline" data-toggle="validator">
				<div class="form-group" >
					<label for="select" class="control-label">Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
					<input type="text" name="sname" class="form-control" value="<?php print isset($_GET['sname']) ? $_GET['sname'] : ''; ?>" required>
				</div>
                <br>
                <br>
				<div class="form-group" >
					<label for="select" class="control-label">User Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
					<input type="text" name="uname" class="form-control" value="<?php print isset($_GET['uname']) ? $_GET['uname'] : ''; ?>" required>
                </div>
                <br>
                <br>
                <div class="form-group" >
					<label for="select" class="control-label">Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
					<input type="text" name="pas" class="form-control" value="<?php print isset($_GET['pas']) ? $_GET['pas'] : ''; ?>" required>
                </div>
                <br>
                <br>
                <br>
				<input type="hidden" name="page" value="addClass">
				<input type="submit" class="btn btn-info" name="submit" value="Add Class">
			</form>
		</div>	
    </div>
</div>
<?php

				
				


				if(isset($_GET['submit']) && !empty($_GET['uname']) && !empty($_GET['sname']) && !empty($_GET['pas']) )
				{
					$sname = $_GET['sname'];
                    $uname= $_GET['uname'];
                    $pas= $_GET['pas'];

                    //checking for already exist roll no
                    // $sql = "SELECT student.name FROM student where  `rollno`=$edat";
                    // $stmt = $conn->prepare($sql);
                    // $stmt->execute();
                    // $resultstmt = $stmt->fetchAll(PDO::FETCH_ASSOC); 

                    // if (mysqli_num_rows($rsultstmt)>0){
                        
					
                        $query_sub = "INSERT into subject (name) values ('$sname')";
                        $stu=$conn->query($query_sub);

                        $query_u = "INSERT into user (uname,password,status) values ('$uname','$pas',1)";
                        $user=$conn->query($query_u);

    
                        $query1 = "select id from subject where name='$sname'";
                        $subject=$conn->query($query1);
                        $result1=$subject->fetchAll(PDO::FETCH_ASSOC);
                        $subid=$result1[0]['id'];

                        $query2 = "select uid from user where uname='$uname' and password='$pas'";
                        $user=$conn->query($query2);
                        $result2=$user->fetchAll(PDO::FETCH_ASSOC);
                        $userid=$result2[0]['uid'];
    
                        $query_student_sub = "insert into user_subject(uid,id) values ($userid,$subid)";
                        $stu_sub=$conn->query($query_student_sub);
                        
                        print '<br><div class="alert alert-dismissible alert-success">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Added!</strong>Student Added Successfully!.
                  </div>';
    
                    // }else{
                        
                    //     header("location:index.php?page=adminAddstudent&student=invalid");

                    // }

                    
                    
				}

				


