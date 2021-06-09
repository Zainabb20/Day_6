<?php
//Establish Connection with database
$host="localhost";
$passwd="";
$username="root";
$dbname="db_internship";

//Connection Function
$connection= mysqli_connect($host, $username, $passwd, $dbname);

if($_POST)
{
    $name=$_POST['txt1'];
    $gender=$_POST['txt2'];
    $mobile=$_POST['txt3'];

//Insert Query
$q= mysqli_query($connection, "insert into tbl_user(user_name,user_gender,user_mobile) values('{$name}','{$gender}','{$mobile}')")
or die("Error". mysqli_error($connection));


//Record Inserted into Database
if($q)
    {
    echo "<script>alert('Record Added');</script>";
    }
}
?>
<html>
    <body>
        <form method="post">
            <table>
                <tr>
                    <td>
                        Name: <input type="text" name="txt1"/>
                    </td>
                </tr>
                 <tr>
                    <td>
                        Gender: <select name="txt2">
                                <option>Male</option>
                                <option>Female</option>
                                </select>
                      </td>
                 </tr>
                 <tr>
                    <td>
                        Mobile No: <input type="number" name="txt3">
                    </td>
                </tr> 
                <tr>
                    <td>
                        <input type="Submit"/>
                    </td>
                    <td>
                        <input type="Reset"/>
                    </td>
                </tr>
                    
            </table>
        </form>
    </body>
</html>



