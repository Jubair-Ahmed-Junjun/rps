<style>
	a{
	 padding-left: 170px;
	 padding-right: 150px;;
	 text-decoration: none;
	 font-family: sans-serif;
	 font-weight: 700;
	 font-size: 20px;
	}
	
	legend{
		font-family: sans-serif;
		font-size: 25px;
	}
	
	label{
		font-family: Roboto;
		font-size: 20px;
	}
	
	form{
		margin: 20px auto;
		width: 50%;
	}
	
	.input{
		width: 50%;
		margin-bottom: 20px;
	}
	
	.input input[type="text"]
	{
		border: none;
		border-bottom: 1px solid #000;
		background: transparent;
		outline: none;
		height: 40px;
		color: #000;
		font-size: 16px;
	}
	
	.btn input[type="reset"], input[type="submit"]
	{
		border: none;
		outline: none;
		height: 40px;
		background: #fb2525;
		color: #fff;
		font-size: 18px;
		border-radius: 10px;
		
	}
	
	select{
		width: 190px;
		height: 30px;
		display: block;
		margin-bottom: 20px;
		margin-top: 20px;
		padding: 10px, 50px, 10px, 10px;
		background: #fff;
		color: #000;
		font-size: 18px;
		border-radius: 10px;
	}
	
	.btn input[type="reset"]:hover, input[type="submit"]:hover
	{
		cursor: pointer;
		background: #ffc107;
		color: #000;
		
	}
	
</style>
<?php
$message='';

if(isset($_POST['save']))
{
	echo "Hello";
	$subject_name=$_POST['subject_name'];
	$code=$_POST['code'];
	$credit=$_POST['credit'];
	$semester_id=$_POST['semester_id'];
	$con=mysqli_connect('localhost','root','','rps_db');
	$sql="INSERT INTO subjects(subjects_name,code,credit,semester_id)VALUES('$subject_name','$code','$credit',$semester_id)";
	$result=mysqli_query($con,$sql);
	if($result===TRUE)
	{
		$message ="Data Insert Successfully.";
    }}

?>
<script>
function myFunction(){
	alart("DATA INNERT Successfully");
}
</script>
<a href="index.php">Home</a>	
<a href="add-subject.php">Add Subject</a>  |
<a href="view-subject.php">View Subject</a>	|
<hr/>
<?php
echo $message; 
?>


<fieldset>
	<legend>Add new subject</legend>
<form action="" method="POST">
<table>
<tr>
<td><td label>Subject Name:</label></td>
<td class="input"><input type="text" name="subject_name" placeholder="Enter subject name" required></td>
</tr>
<tr>
<td><td label>Code:</label></td>
<td class="input"><input type="text" name="code" placeholder="Enter subject code" required></td>
</tr>
<tr>
<td><td label>Credit:</label></td>
<td class="input"><input type="text" name="credit" placeholder="Enter subject credit" required></td>
</tr>
<tr>
<td><td label>Semister:</label></td>
<td>
	<select name="semester_id" required>
		<option value="">Select</option>
			<option value="1">First</option>
			<option value="2">2nd</option>
			<option value="3">3rd</option>
			<option value="4">4th</option>
			<option value="5">5th</option>
			<option value="6">6th</option>
			<option value="7">7th</option>
			<option value="8">8th</option>
			</select>
			</td>
	</tr>
				<tr>
					<td class="btn" align="right" colspan="2">
						<input type="reset" name="clear" value="Clear">
						<input onclick="myFunction()" type="submit" name="save" value="Save">
						
					</td>

</tr>
</table>
</form>
</fieldset>
