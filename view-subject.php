<?php
$con = mysqli_connect('localhost','root','','rps_db');
$sql = "SELECT *FROM subjects";
$result=mysqli_query($con,$sql);

?>
<a href="index.php">Home</a>	|
<a href="add-subject.php">Add Subject</a>		|
<a href="view-subject.php">View Subject</a>
<hr/>
<h1> View Data</h1>
<table border="2">
	<tr>
		
			<th>subject</th>
			<th>code</th>
			<th>Credit</th>
			<th>Semester</th>
			<th>Action</th>
				
			</tr>
			<?php 
			  while($rows=$result->fetch_assoc())
				  
			  {
            ?>
				<tr>
					<td><?php echo $rows['subjects_name']; ?></td>
                    <td><?php echo $rows['code']; ?></td>
                    <td><?php echo $rows['credit']; ?></td>	
                    <td><?php echo $rows['semester_id']; ?></td>
                     <td><a href="edit-subject.php?id=<?php echo $rows['id']; ?>">Edit</a> | <a href="delete-subject.php?id=<?php echo $rows['id']; ?>" onclick="return confirm('Do you want to delete')">Delete</a></td>
					 </tr>
					 <?php
			  }
					 ?>
					 </table>