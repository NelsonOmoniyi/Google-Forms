<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Applications</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="data.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    </head>
    <body style="background-color: #F0EBF8;
    font-family: Arial, Roboto, Sans-serif; text-align: center;">
       
<div class="container">

    <div class="bar">
        <div class="button1">
            <a href="index.php" class="btn btn-sm btn-success">Back To Form</a>
        </div>
        <!-- <div class="button2">
            <button>Back to Form</button>
        </div> -->
    </div>
    <?php
            //connect to data base 
            $conn = new mysqli('localhost', 'nelsonom_form-data', 'Wshadow2000...', 'nelsonom_form-data');

            if ($conn->connect_errno > 0) {
                die("Connection Failed". $conn->connect_error);
            }else {
                echo "<p style='color:green; font-size:10px;'><strong>CONGRATULATIONS!!!! </strong>Connection Successfull</p>";
            }


                //retrieve data from database

            $sql="SELECT * FROM form";
            $result = $conn->query($sql);

            if ($result == True) {
            //    print_r($result);
                if (mysqli_num_rows($result) > 0) {
                    echo "
                        <table id='table' class='table table-condensed table-stripped table-bordered table-hover'>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Title</th>
                                <th>Picture</th>
                                <th>Action</th>
                            </tr>
                    ";
                    // $rowNumber = 0;
                    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        $hold= $row['ID'];
                        // $rowNumber ++;
                        // echo"<p> Row Number: ". $rowNumber."</p>";
                        // print_r($row);
                      echo"<tr>";
                      echo"<td>".$row['firstName']."</td>";
                      echo"<td>".$row['lastName']."</td>";
                      echo"<td>".$row['email']."</td>";
                      echo"<td>".$row['mNumber']."</td>";
                      echo"<td>".$row['title']."</td>";
                      echo"<td>".$row['picture']."</td>";
                      echo"<td><a class='btn btn-info' href='update.php?id=<?php echo $hold ?>'>Edit</a> <a class='btn btn-danger' name='delete' href='data.php?delete=<?php echo $hold ?>'>Delete</a></td>";
                      echo"</tr>";

                    }
                                echo"</table>";
                    if (isset($_GET['delete'])) {
                        $deleteID = $GET['delete'];
                        $mysqli->query("DELETE FROM form WHERE ID=$deleteID")or die($mysqli->error());
                    }
                    // free memory and close result set
                    mysqli_free_result($result);

                }else{
                    echo '<script type="text/javascript"> alert("HEY!!! Database is currently empty......."); </script>';
                }
            }else{
                echo '<script type="text/javascript"> alert("Unable to execute sql query"); </script>';
            }

       
          
?>
    
       
</div>


        
        <script src="" async defer></script>
    </body>
</html>

