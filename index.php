<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>

    <div class="container">
        <form action="#" method="POST" enctype="multipart/form-data">
            <h3><center>FORM</center></h3> 
            <label>Name</label>
           <input type="text" name="Name" placeholder="Enter your Fullname">
           <label>Age</label>
           <input type="text" name="Age" placeholder="Enter your Age">
           <label>Weight</label>
           <input type="text" name="Weight" placeholder="Enter your Weight">
           <label>Email Id</label>
           <input type="text" name="Email_Id" placeholder="Enter your Email">
           <label>Upload Health Report</label>
           <input type="file" name="HealthReport">
           
           <input type="submit" name="Submit">
        </form>
    </div>

</body>
</html>

<?php
if(isset($_POST['Submit']))
{
    $Name = $_POST['Name'];
    $Age = $_POST['Age'];
    $Weight = $_POST['Weight'];
    $Email_Id = $_POST['Email_Id'];
    
    $filename = $_FILES["HealthReport"]["name"];
    $tempname = $_FILES["HealthReport"]["tmp_name"];
    $folder = "images/".$filename; 
    move_uploaded_file($tempname, $folder);

    if($Name != '' && $Age != '' && $Weight != '' && $Email_Id != '')
    {
        $query = "INSERT INTO form (name, age, weight, email_Id, healthreport) VALUES ('$Name', '$Age', '$Weight', '$Email_Id', '$folder')";
        $data = mysqli_query($conn, $query);
        if($data)
        {
            echo "<script>alert('Data inserted into database');</script>";
        }
        else
        {
            echo "<script>alert('Failed to insert data into database');</script>";
        }      
    }
    else
    {
        echo "<script>alert('Please fill all the fields');</script>";
    }
}
?>
