<?php session_start(); ?>
<?php include 'config1.php';?>
<?php
	//echo"Take a view here";
	//$suid = $_SESSION['uid'];
	//echo $suid;
?>
<?php

$output = '';
$sql = "SELECT * FROM subject WHERE CONCAT(name) LIKE '%".$_POST["search"]."%'";
$stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
if(count($result) > 0){
    
    $output .= '<table class="table table-striped table-hover reports-table">';
    $output .= "<thead>";
    $output .= "<tr>";
    $output .= "<th>class ID</th>";
    $output .= "<th>class Name</th>";
    $output .= "</tr>";
    $output .= "</thead>";
    $output .= "<tbody>";
					
                
    for($k=0;$k<count($result);$k++)
    {
        $output .= '
            <tr >
                <td><h6>'.$result[$k]['id'].'</h6></td>
                <td><h6>'.$result[$k]['name'].'</h6></td>
                <td>
                <a href="index.php?page=adminStudentinfo&sub_id='.$result[$k]['id'].'"><span class="label label-success">View Details</span></a>
                &nbsp;
                <!--
                <a href="editProfileForm.php"><span class="label label-info">Edit</span></a>
                &nbsp;
                <a href="editProfileForm.php"><span class="label label-warning">Edit</span></a>
                &nbsp;--></td>
            </tr>
        ';
        
    }
    $output .= "</tbody>";
    $output .= "<table>";
    echo $output;
}else
{
    $output='Data Not Found';
    echo $output;
}

?>