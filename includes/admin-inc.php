<?php

include_once 'Includes/dbc.php';


$query = 'SELECT * FROM grooming';
$result = $db->query($query);
$numResults = $result->num_rows;





echo"<div class='tbl-container'>";
echo"<h5><b>Appointment(s) $numResults</b></h5>";
echo"<table>";
echo"<thead>";
echo"<tr>
    <th>Grooming ID</th>
    <th>First Name</th>  
    <th>Last Name</th>
    <th>Address</th>
    <th>City</th>
    <th>State</th>
    <th>Zip</th>
    <th>PhoneNumber</th>
    <th>Email</th>
    <th>PetType</th>
    <th>Breed</th>
    <th>PetName</th>
    <th>NeuteredOrSpayed</th>
    <th>PetBirthday</th>
    <th>Delete</th>
    <th>Edit</th>
</tr>
</thead>";

while ($row = $result->fetch_assoc())
{
?>    
<tr>
    <td><?php echo $row['GroomingID'] ?></td>
    <td><?php echo $row['FirstName'] ?></td>
    <td><?php echo $row['LastName'] ?></td>
    <td><?php echo $row['Address'] ?></td>
    <td><?php echo $row['City']?></td>
    <td><?php echo $row['State']?></td>
    <td><?php echo $row['Zip']?></td>
    <td><?php echo $row['PhoneNumber']?></td>
    <td><?php echo $row['Email']?></td>
    <td><?php echo $row['PetType']?></td>
    <td><?php echo $row['Breed']?></td>
    <td><?php echo $row['PetName']?></td>
    <td><?php echo $row['NeuteredOrSpayed']?></td>
    <td><?php echo $row['PetBirthday']?></td>
    <td><a onclick="return confirm('Are you sure you want to Delete?')" href="Includes/delete.php?id=<?php echo $row['GroomingID']?>">Delete</a></td>
    <td><a href="Includes/grooming-edit.php?edit_id=<?php echo $row['GroomingID']?>">Edit</a></td>


    

</tr>
<?php 
}
?>
</table>
</div>

<?php
$result->free();
$db->close();

?>

