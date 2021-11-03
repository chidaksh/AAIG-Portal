<?php 
session_start();
if(!isset($_SESSION['logged_in__stu_roll'] )){
    echo '<script type="text/javascript"> location.href = "student_login.php" </script>';
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Student</title>
</head>
<body>
<!---<h2>I am admin</h2>--->
<div class="m-4">
        <nav class="nav nav-pills nav-justified">
            <a href="student_add_own_details.php" class="nav-item nav-link ">
            <i class="bi-person"></i> EDIT DETAILS
            </a>
            <a href="student_register.php" class="nav-item nav-link ">
                <i class="bi-person"></i> REGISTER FOR COURSE
            </a>
            <a href="student_profile.php" class="nav-item nav-link ">
              <i class="bi-person"></i> VIEW PROFILE
            </a>
            <a href="stud_view_attendance.php" class="nav-item nav-link ">
            <i class="bi bi-card-list"></i> VIEW ATTENDANCE
            </a>
            <a href="" class="nav-item nav-link ">
            <i class="bi bi-card-list"></i> VIEW ID CARD
            </a>
        </nav>
    </div>
</body>
</html>

