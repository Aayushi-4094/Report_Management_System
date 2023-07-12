<html>
<head>
    <title>Displaying the records</title>
    <style>
        
        body
        {
            background: #001660;
        }
        table{
            background: white;
        }
        </style>
</head>

<?php
include("connection.php");
//error_reporting(0);

$query="SELECT * FROM form ";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
//$result=mysqli_fetch_assoc($data);
//echo $result['email_Id']." ".$result['healthreport'];

//echo $total;

if($total !=0)
{
    ?>
    <H1 align="center" style="color:white;">Displaying the records</H1>
    <center><table border= "3"  cellspacing ="5" width="%100">
        <tr>
            
           
            <th width="%20">Email Id</th>
            <th width="%60">Health Report</th>
            
</tr>



<?php
    while($result = mysqli_fetch_assoc($data)) 
    {
        echo "<tr>
        
        
        <td>".$result['email_Id']."</td>
        <td><embed src='".$result['healthreport']."'></td>

        </tr>";

    
    }

}
else{
    echo "Table has no records";
}
?>

</table>
</center>





