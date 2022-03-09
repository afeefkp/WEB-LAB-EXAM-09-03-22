<html>
    <head>
        <title>document</title>
        <style>
            body{
                background: brown;
                
            }
            td,h3{
                color:white;
            }
        </style>
    </head>
    <body>
    <form method="POST" action="">
    <CENTER><table>
        <h3 >ENTER YOUR DATA</h3>
        <tr>
            <td>Name</td>
            <td><input type="text" name="fname" placeholder="enter your name"></td>
        </tr>

        <tr>
            <td>Age</td>
            <td><input type="number" name="fage" placeholder="enter your age"></td>
        </tr>

        <tr>
            <td><input type="submit" name="btn" value="Insert"></td>
        </tr>
        
    </table>
    
    </form>

    <form method="POST" action="">
        <h3>FOR DISPLAY</h3>
        <input type="submit" name="display" value="Display">
    </form>
    </body>
    </CENTER>
</html>
<center>
<?php
if(isset($_POST['btn'])){
    $name=$_POST["fname"];
    $age=$_POST["fage"];
    
    $conn=mysqli_connect("localhost","root","");
    if(!$conn){
        echo "Connection error";
    }
    $db=mysqli_select_db($conn,"web");
    if(!$db){
        echo "Selection error";
    }

    $in="INSERT INTO details(t_name,t_age) VALUES('$name','$age')";
    $q=mysqli_query($conn,$in);
    if(!$q){
        echo "Insertion error";
    }
    

}


if(isset($_POST['display'])){
        
    $conn=mysqli_connect("localhost","root","");
    if(!$conn){
        echo "Connection error";
    }

    $db=mysqli_select_db($conn,"web");
    if(!$db){
        echo "Selection error";
    }

    $sel="SELECT * FROM details";
    $q2=mysqli_query($conn,$sel);
    if(!$q2){
        echo " error";
    }
    else{
            echo "<table border='2'>
                <tr>
                <td>NAME</td>
                <td>Age</td>
                </tr>";
                while($row=mysqli_fetch_assoc($q2)){
            echo "<tr><td>".$row['t_name']."</td><td>".$row['t_age']."</td></tr>";
        }
         echo "</table>";
            
    }
}
?>
</center>