<!DOCTYPE HTML>
<html>
<head>
    <title>PDO - Update a Record</title>
     
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
         
</head>
<body>
 
    <!-- container -->
    <div class="container">
  
        <div class="page-header">
            <h1>Update admin</h1>
        </div>
     
        <?php
        // get passed parameter value, in this case, the record ID
        // isset() is a PHP function used to verify if a value is there or not
        $id=isset($_GET['id']) ? $_GET['id'] : die('ERROR: Record ID not found.');
        
        //include database connection
        include 'config/database.php';
        
        // read current record's data
        try {
            // prepare select query
            $query = "SELECT id, Username, password FROM admin1 WHERE id = ? LIMIT 0,1";
            $stmt = $con->prepare( $query );
            
            // this is the first question mark
            $stmt->bindParam(1, $id);
            
            // execute our query
            $stmt->execute();
            
            // store retrieved row to a variable
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            
            // values to fill up our form
            $Username = $row['Username'];
            $password = $row['password'];
        }
        
        // show error
        catch(PDOException $exception){
            die('ERROR: ' . $exception->getMessage());
        }
        ?>
 
 <?php
 
 // check if form was submitted
 if($_POST){
      
     try{
      
         // write update query
         // in this case, it seemed like we have so many fields to pass and 
         // it is better to label them and not use question marks
         $query = "UPDATE admin1 
                     SET Username=:Username, password=:password
                     WHERE id = :id";
  
         // prepare query for excecution
         $stmt = $con->prepare($query);
  
         // posted values
         $Username=htmlspecialchars(strip_tags($_POST['Username']));
         $password=htmlspecialchars(strip_tags($_POST['password']));
  
         // bind the parameters
         $stmt->bindParam(':Username', $Username);
         $stmt->bindParam(':password', $password);
         $stmt->bindParam(':id', $id);
          
         // Execute the query
         if($stmt->execute()){
             echo "<div class='alert alert-success'>Record was updated.</div>";
         }else{
             echo "<div class='alert alert-danger'>Unable to update record. Please try again.</div>";
         }
          
     }
      
     // show errors
     catch(PDOException $exception){
         die('ERROR: ' . $exception->getMessage());
     }
 }
 ?>
 
    <!--we have our html form here where new record information can be updated-->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"] . "?id={$id}");?>" method="post">
        <table class='table table-hover table-responsive table-bordered'>
            <tr>
                <td>Username</td>
                <td><input type='text' name='Username' value="<?php echo htmlspecialchars($Username, ENT_QUOTES);  ?>" class='form-control' /></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><textarea name='password' class='form-control'><?php echo htmlspecialchars($password, ENT_QUOTES);  ?></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type='submit' value='Save Changes' class='btn btn-primary' />
                    <a href='index.php' class='btn btn-danger'>Back to read Admin</a>
                </td>
            </tr>
        </table>
    </form>
         
    </div> <!-- end .container -->
     
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   
<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
</body>
</html>