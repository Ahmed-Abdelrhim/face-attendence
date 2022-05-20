<?php
include "../shared/head.php";
include "../shared/nav.php";
//select from database
$select = "SELECT * from students";
$student = mysqli_query($con, $select);
// $catSelect = "SELECT * From categories";
// $category = mysqli_query($con, $catSelect);
// $docSelect = "SELECT * From doctors";
// $doctor = mysqli_query($con, $docSelect);
// $names = array();
// foreach ($doctor as $docData) {
//     foreach ($category as $catData) {
//         if ($docData['categoryID'] == $catData['id']) {
//             $str = $catData['name'] . " ";
//             echo $str;
//         }
//     }
// }


// if (isset($str)) {
//     echo "<br>" . $str;
// }
//if clicks delete button delete doctor
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    $del = "DELETE from students where studentID = $id";
    $d = mysqli_query($con, $del);
    header("location:/hospital/student/list.php");
}

auth();

?>
<div class="display-1 text-center text-info">Students List Page</div>
<table class="table table-dark  col-6 mx-auto text-center">
    <tr>
        <th>Student ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    <?php foreach ($student as $data) { ?>
        <tr>
            <th><?php echo $data['studentID'] ?></th>
            <th><?php echo $data['studentName'] ?></th>
            <th><?php echo $data['studentEmail'] ?></th>

            <th><a class="btn btn-primary" name="edit" href="/hospital/student/add.php?edit=<?php echo $data['studentID'] ?>">Edit</a></th>
            <th><a class="btn btn-danger" name="del" href="<?php echo $_SERVER['PHP_SELF'] ?>?del=<?php echo $data['studentID'] ?>">Delete</a></th>
        </tr>
    <?php } ?>
</table>
<?php
include "../shared/script.php";
?>
