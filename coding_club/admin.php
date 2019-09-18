<?php 
include "templates/header.php"; 
require_once 'config.php';
session_start();

if($_SESSION['name']==="admin")
{
   $user=$_SESSION['name'];
   echo $user;

   header('Cache-Control:no-store,no-cache,must-revalidate');
   header('Cache-Control:post-check=0,pre-check=0',FALSE);
   header('Pragma: no-cache');
   echo "<h1>Welcome ".$user."</h1><hr>";
?>

   <form action="" method="post">
         <button name="act">Yet to Activate</button>
   </form>

<?php

   if(isset($_POST['act']))
   {
  
      $query="select * from users where status=0 order by registernumber";
      $result=mysqli_query($link,$query);
      $row=$result->fetch_assoc();
      
         if($row)
         {
?>

            <body>
            <h2>Pending Students</h2>
            <table width="600"  border="1">
               <tr bgcolor="#f1f1f1">
                  <th>S.No</th>
                  <th>FIRSTNAME</th>
                  <th>LASTNAME</th>
                  <th>REGISTER NUMBER</th>
                  <th>BATCH</th>
                  <th>COMPANY NAME</th>
                  <th>DESIGNATION</th>
                  <th>LOCATION</th>
                  <th>MOBILE NUMBER</th>
                  <th>EMAIL ID</th>
                  <th>AGE</th>
                  <th>DELETE</th>
                  <th>ACCEPT</th>
               
               </tr>

<?php
            $sno=1;
            do
            {
                  echo "<tr>";
                  echo "<td>".$sno."</td>";
                  echo "<td>".$row['firstname']."</td>";
                  echo "<td>".$row['lastname']."</td>";
                  echo "<td>".$row['registernumber']."</td>";
                  echo "<td>".$row['batch']."</td>";
                  echo "<td>".$row['companyname']."</td>";
                  echo "<td>".$row['designation']."</td>";
                  echo "<td>".$row['location']."</td>";
                  echo "<td>".$row['mobilenumber']."</td>";
                  echo "<td>".$row['email']."</td>";
                  echo "<td>".$row['age']."</td>";

?>
                  <form method="POST" action="delete.php">
                     <td><button name='delete' class="registerbtn" value="<?php echo $row['email']."d"; ?>">delete</button></td>
                     <td><button name='delete' class="registerbtn" value="<?php echo $row['email']."a"; ?>">activate</button></td>
                  </form> 
<?php
                  echo "</tr>";
                  $sno++;
            }while($row=$result->fetch_assoc());
      }
      else    
      {
         echo "<h1>No Pending Members</h1>";
      }
   }
?>
   </table>
   </body>

<?php
   $query="select * from users where status=1 order by registernumber";
   $result=mysqli_query($link,$query);
   $row=$result->fetch_assoc();

   if($row)
   {
?>
      <body>
         <h2>Registered Students</h2>
            <table width="600"  border="1">
               <tr bgcolor="#f1f1f1">
                   <th>S.No</th>
                   <th>FIRSTNAME</th>
                   <th>LASTNAME</th>
                   <th>REGISTER NUMBER</th>
                   <th>BATCH</th>
                   <th>COMPANY NAME</th>
                   <th>DESIGNATION</th>
                   <th>LOCATION</th>
                   <th>MOBILE NUMBER</th>
                   <th>EMAIL ID</th>
                   <th>AGE</th>
               
               </tr>
<?php
      $sno=0;
      do
      {
         echo "<tr>";
         echo "<td>".$sno."</td>";
         echo "<td>".$row['firstname']."</td>";
         echo "<td>".$row['lastname']."</td>";
         echo "<td>".$row['registernumber']."</td>";
         echo "<td>".$row['batch']."</td>";
         echo "<td>".$row['companyname']."</td>";
         echo "<td>".$row['designation']."</td>";
         echo "<td>".$row['location']."</td>";
         echo "<td>".$row['mobilenumber']."</td>";
         echo "<td>".$row['email']."</td>";
         echo "<td>".$row['age']."</td>";
         echo "</tr>";
         $sno++;
      }while($row=$result->fetch_assoc());
   }
   else    
   {
       echo "<h1>No Registered Members</h1>";
   }


}
else
{
   echo "<script> location.href='login.php'; </script>";
}
?>
</table>
</body>




