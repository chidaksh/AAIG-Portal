<?php
session_start();
if (!isset($_SESSION['logged_in__admin_name'])) {
    echo '<script type="text/javascript"> location.href = "admin_login.php" </script>';
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/admin_main.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .sidebar.open {
            width: 200px;
        }

        .sidebar.open li.profile {
            width: 200px;
        }
    </style>
</head>

<body>
    <div class="page-wrap">
        <div class="sidebar">
            <div class="logo-details">
                <i class='bx bxs-user icon'></i>
                <div class="logo_name">
                    ADMIN
                </div>
                <i class='bx bx-menu' id="btn"></i>
            </div>
            <ul class="nav-list">
                <!-- <li>
                    <i class='bx bx-search'></i>
                    <input type="text" placeholder="Search...">
                    <span class="tooltip">Search</span>
                </li> -->
                <li>
                    <a href="index.php">
                        <i class='bx bxs-home'></i>
                        <span class="links_name">HOME</span>

                    </a>
                    <span class="tooltip">HOME</span>
                </li>
                <li>
                    <a href="admin_login.php">
                        <i class='bx bx-log-out' id="log_out"></i>
                        <span class="links_name">Log Out</span>
                    </a>
                    <span class="tooltip">Log Out</span>
                </li>
                <br>
                <li class="profile">
                    <div class="profile-details">
                        <img src="images/icons/admin.png" alt="user Image">
                        <div class="name_job">
                            <div class="name">Chidaksh.R</div>
                            <div class="job">ADMIN</div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- <section class="home-section">
        <div class="text">Dashboard</div>
    </section> -->
    <script>
        let sidebar = document.querySelector(".sidebar");
        let closeBtn = document.querySelector("#btn");
        let searchBtn = document.querySelector(".bx-search");

        // const ChartSideBar = document.getElementById("page-wrap");

        // if (!sessionStorage.getItem('sideBarDisplay')) {
        //     sessionStorage.sideBarDisplay = 'none';
        //     console,log("hii");
        // }
        // console.log(sessionStorage.sideBarDisplay);
        // ChartSideBar.style.display = sessionStorage.sideBarDisplay;


        // function chartButton() {
        //     ChartSideBar.style.display = (ChartSideBar.style.display === 'block') ? 'none' : 'Block';
        //     sessionStorage.sideBarDisplay = ChartSideBar.style.display;
        // }

        closeBtn.addEventListener("click", () => {
            sidebar.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
            //chartButton();
        });

        searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search iocn
            sidebar.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
        });
        // following are the code to change sidebar button(optional)
        function menuBtnChange() {
            if (sidebar.classList.contains("open")) {
                closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
            } else {
                closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
            }
        }
    </script>
</body>

</html>