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
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $con = mysqli_connect('localhost','root','','rps_db');
    $sql = "SELECT * FROM subjects WHERE id=$id";
    $result = mysqli_query($con,$sql);
    $row = $result->fetch_assoc();

}

?>

<a href="index.php">Home</a>	|
<a href="add-subject.php">Add Subject</a>	|
<a href="view-subject.php">View Subject</a>
<hr>
<?php echo $message; ?>
<hr>
<fieldset>
    <legend>Add New Subject</legend>
    <form action="update-subject.php" method="POST">
        <table>

            <tr>
                <td><label>Subject Name: </label></td>
                <td class="input">
                    <input type="hidden" name="id" value="<?php echo $row['id'];?>" required>
                    <input type="text" name="subject_name" value="<?php echo $row['subjects_name'];?>" required>
                </td>
            </tr>
            <tr>
                <td><label>Code: </label></td>
                <td class="input"><input type="text" name="code" value="<?php echo $row['code'];?>" required> </td>
            </tr>
            <tr>
                <td><label>Credit</label></td>
                <td class="input"><input type="text" name="credit" value="<?php echo $row['credit'];?>" required> </td>
            </tr>
            <tr>
                <td><label>Select Semester: </label></td>
                <td>
                    <select name="semester_id" required>
                        <option value="">--Select--</option>
                        <option <?php echo $row['semester_id']=='1'?'selected':'' ?>value="1">First</option>
                        <option <?php echo $row['semester_id']=='2'?'selected':'' ?> value="2">Second</option>
                        <option <?php echo $row['semester_id']=='3'?'selected':'' ?> value="3">Third</option>
                        <option <?php echo $row['semester_id']=='4'?'selected':'' ?> value="4">Fourth</option>
                        <option <?php echo $row['semester_id']=='5'?'selected':'' ?> value="5">Fifth</option>
                        <option <?php echo $row['semester_id']=='6'?'selected':'' ?> value="6">Sixth</option>
                        <option <?php echo $row['semester_id']=='7'?'selected':'' ?> value="7">Seventh</option>
                        <option <?php echo $row['semester_id']=='8'?'selected':'' ?> value="8">Eighth</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td class="btn" align="right" colspan="2">
                    <input type="submit" name="cancel" value="Cancel">
                    <input type="submit" name="update" value="Update">

                </td>
            </tr>
        </table>
    </form>
</fieldset>