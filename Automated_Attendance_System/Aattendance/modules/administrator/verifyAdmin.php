

<?php

include '../config1.php';
if(isset($_POST['submit']))
{
    $nm=$_POST['name'];
  
   $pass=$_POST['pass'];
   if( isset($nm) && isset($pass))
 {
   if(!empty($nm) && !empty($pass) )
   {


     

     $stmt = $conn->prepare("SELECT adminid, aname FROM admin WHERE aname= ? AND password=?"); 
       $stmt->execute(array($nm,$pass));

        
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
         // print_r($result);
       if(count($result))
       {
       
       $aid = $result[0]['adminid'];
                   $aname = $result[0]['aname'];
                   session_start();
       // Use $HTTP_SESSION_VARS with PHP 4.0.6 or less
       
           $_SESSION['islogin'] ="1";
                           $_SESSION['adminid'] = $aid;
                           $_SESSION['aname'] = $aname;
       
                       header("location:../../index.php?page=admin_dashboard");
       }
       else
       {
          header("location:../../index.php?page=adminLogin&invalid=y");
       }
       
       
     }else
     {
        header("location:../../index.php?page=adminLogin&invalid=y");
     }
   }
 }

?>