<?php 

    include 'config1.php';
    $sub_id=$_GET['sub_id'];
    $get_query = "SELECT uid from user_subject where `id`=$sub_id";
	$get_sub=$conn->query($get_query);
	$get_result=$get_sub->fetchAll(PDO::FETCH_ASSOC);
	$uid = $get_result[0]['uid'];
?>
<div class="container">
  <div class="row">
    <div class="col-md-12 col-lg-12">
    <a href="index.php?page=adminAddstudent"><span class="label label-success">Add Student</span></a>
            
            <h1 class="page-header">Your Subject and Students</h1>
            
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 col-lg-12">
		
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Subject</h3>
				</div>
				<div class="panel-body">
					
					<?php
						$output = '';
		
						$query_subject = "SELECT subject.name, subject.id from subject INNER JOIN user_subject WHERE user_subject.id = subject.id AND user_subject.uid = {$uid}  ORDER BY subject.name";
						$sub=$conn->query($query_subject);
						$rsub=$sub->fetchAll(PDO::FETCH_ASSOC);
						
						$noOfSubject = count($rsub);
						
						for($i = 0; $i<$noOfSubject; $i++) {
							$output .= $rsub[$i]['name'];
							$output .= '&nbsp;';
						}
						print $output;
					?>
					
				</div>
			</div>
			
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Students</h3>
				</div>
				<div class="panel-body">
					<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>Roll No</th>
							<th>Name</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$outputData = '';
							$studentQuery = "SELECT DISTINCT name, rollno FROM `user_subject` INNER JOIN student_subject INNER JOIN student WHERE user_subject.id = student_subject.id AND student_subject.sid = student.sid AND user_subject.uid = $uid";
							
							$stmtStudent = $conn->prepare($studentQuery); 
							$stmtStudent->execute();
							$resultStudent = $stmtStudent->fetchAll(PDO::FETCH_ASSOC); 
							
							for($i = 0; $i<count($resultStudent); $i++) {
								$outputData .= "<tr>";
								$outputData .= "<td>" . $resultStudent[$i]['rollno'] . "</td>";
								$outputData .= "<td>" . $resultStudent[$i]['name'] . "</td>";
								$outputData .= "</tr>";
							}
							print $outputData;
							
						?>
						</tbody>
					</table>
				</div>
			</div>
			
						
		</div>
	</div>
</div>