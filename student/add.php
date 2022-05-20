<?php
include "../shared/head.php";
include "../shared/nav.php";
// $select = "SELECT * from students";
// $cat = mysqli_query($con, $select);
$notvalid = false;
//ADD NEW STUDENTr
if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    // $id = $_POST['catID'];
    if (empty($name) || empty($email)) {
        $notvalid = true;
    } else {
        $ins = "INSERT into students(`studentName`,`studentEmail`) values('$name','$email')";
        $inserted = mysqli_query($con, $ins);
        header("location:/hospital/student/list.php");
    }
}



#################################################
// $updateBtn = false;  //show button update
// if (isset($_GET['edit'])) {
//     $updateBtn = true; //show button update
//     $id = $_GET['edit']; //get id from url of the doctor you want to update his data
//     $sel = "SELECT * from students where studentID = $id"; //select from database
//     $s = mysqli_query($con, $sel);
//     $student = mysqli_fetch_assoc($s); //return assocciative array
//     $name = $student['studentName']; //get name 
//     $email = $student['studentEmail']; //get email
//     if (isset($_POST['update'])) { //check if clicks udpate button
//         $name = $_POST['name'];
//         $email = $_POST['email'];
//         if (empty($name) || empty($email)) { //check if any of the values is empty
//             $notvalid = true;
//         } else {
//             $update = "UPDATE `students` set studentName = '$name' , studentEmail = '$email' where studentID = $id";
//             $updated =  mysqli_query($con, $update);
//             header("location:/hospital/student/list.php");
//         }
//     }
// }
$updateBtn = false;
if (isset($_GET['edit'])) {
    $updateBtn = true; //show btn update
    $id = $_GET['edit'];
    echo $id ."<br>";
    $s = "SELECT * FROM `students` where `studentID` = $id";
    $row = mysqli_fetch_assoc(mysqli_query($con, $s));
    $name = $row['studentName'];
    $email = $row['studentEmail'];
}

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    if (empty($name) || empty($email)) {
        $notvalid = true;
    } else {
        $update = "UPDATE students SET studentName = '$name' , studentEmail  = '$email' where `studentID` = 2";
        $updated =  mysqli_query($con, $update);
        header("location:/hospital/student/list.php");
    }
}



// if (isset($_POST['update'])) {
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     if (empty($name) || empty($email)) {
//         $notvalid = true;
//     } else {
//         echo $id . "<br>";
//         $update = "UPDATE `students` SET `studentName` = '$name' , `studentEmail` = $email WHERE `studentID` = $id";
//         $updated =  mysqli_query($con, $update);
//         if ($updated) {
//             echo "Success <br>";
//         } else {
//             echo "false";
//         }
//         // header("location:http://localhost/hospital/student/list.php");
//     }
// }

auth();
?>
<div class="display-1 text-center text-info" style="font-family: 'Nunito';">Add Student</div>
<div class="container col-6" style="font-family: 'Nunito';">
    <div class="card">
        <div class="card-body">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="form-group">
                    <label>Name</label>
                    <input name="name" class="form-control" type="text" value="<?php if (isset($name)) echo $name  ?>">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input name="email" class="form-control" type="email" value="<?php if (isset($email)) echo $email  ?>">
                </div>

                <?php if ($notvalid) { ?>
                    <div class="alert alert-danger">Enter Valid Data</div>
                <?php } ?>
                <?php if ($updateBtn) { ?>
                    <button class="btn btn-dark btn-block" name="update">Update</button>
                <?php } else { ?>
                    <button name="send" class="btn btn-primary btn-block">Send</button>
                <?php } ?>
            </form>
        </div>
    </div>
</div>
<?php
include "../shared/script.php";
?>