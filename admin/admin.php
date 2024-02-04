<?php 
//include('conn.php');
//include('checklogin.php');
include('func.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="Admin.css">
</head>

<body>

    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="lab la-accussoft"></span><span>Food Gallery</span></h2>

        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="admin.php" class="active"><span class="las la-igloo" style="color:white;"></span>
                    <span style="color:white;">Dashboard</span></a>
                </li>
                <li>
                    <a href="customer.php"><span class="las la-users" ></span>
                    <span>Customers</span></a>
                </li>
                <li>
                    <a href="category.php"><span class="las la-clipboard-list" ></span>
                    <span>Menu Available</span></a>
                </li>
                <li>
                    <a href="registredmenu.php"><span class="las la-receipt" ></span>
                    <span>Manage</span></a>
                </li>
                <li>
                    <a href="sellproduct.php"><span class="las la-shopping-bag" ></span>
                    <span>Orders</span></a>
                </li>
                <li>
                    <a href="invoice.php"><span class="las la-user-circle" ></span>
                    <span>Invoice</span></a>
                </li>
                <li>
                    <a href="logout.php"><span class="las la-user-circle" ></span>
                    <span>Logout</span></a>
                </li>

                <!-- <li>
                    <a href=""><span class="las la-clipboard-list" ></span>
                    <span>Tasks</span></a>
                </li> -->
            </ul>
        </div>
    </div>
    <div class="main-content">
        <header>
            <h2>

                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label> Dashboard
            </h2>
            <!-- <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search here" />
            </div> -->

            <div class="user-wrapper">
                <img src="../image/img1.png" width="30px" height="40px" alt="">
                <div>
                    <h4>Aroma Cafe</h4>
                    <small>Super Admin</small>
                </div>
            </div>
        </header>

        <main>
            <div class="cards">
                <div class="cards-single">
                    <div>
                        <h1><?= getCount('registration') ?></h1>
                         <span>Customers</span> 
                         
                    </div>
                    <div>
                        <span class="las la-users"></span>
            
                    </div>
                </div>

                <div class="cards-single">
                    <div>
                        <h1><?= getCount('menu') ?></h1>
                        <span>Menu</span>

                    </div>
                    <div>
                        <span class="las la-clipboard-list"></span>
                    </div>
                </div>
                <div class="cards-single">
                    <div>
                        <h1>10</h1>
                        <span>Orders</span>

                    </div>
                    <div>
                        <span class="las la-shopping-bag"></span>
                    </div>
                </div>

                <div class="cards-single">
                    <div>
                        <h1>Rs 6k</h1>
                        <span>Income</span> -
                    </div>
                    <div>
                        <span class="lab la-google-wallet"></span>
                    </div>
                </div>


            </div>
           <!-- <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Recent Available Menu</h3>
                            <button>See All <span class="las la-arrow-right"></span></button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>Menu Name</td>
                                            <td>Department</td>
                                            <td>Status</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>UI-UX Design</td>
                                            <td>UI Team</td>
                                            <td>
                                                <span class="status purple"></span> Review
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Web Development</td>
                                            <td>Front End</td>
                                            <td>
                                                <span class="status pink"></span> in progress
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ushop app</td>
                                            <td>Mobile Team</td>
                                            <td>
                                                <span class="status orange"></span> pending
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="customers">
                    <div class="card">
                        <div class="card-header">
                            <h3>New Customers</h3>
                            <button>See All <span class="las la-arrow-right"></span></button>
                        </div>
                         <div class="card-body">
                            <div class="customer">
                                <div class="info">
                                    <img src="../image/img2.jpg" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Lewis S.Chandrakanta</h4>
                                        <small>CEO Expert</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>
                                </div>
                            </div>

                            <div class="customer">
                                <div class="info">
                                    <img src="../image/img2.jpg" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Lewis S.Chandrakanta</h4>
                                        <small>CEO Expert</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>
                                </div>
                            </div>

                            <div class="customer">
                                <div class="info">
                                    <img src="../image/img2.jpg" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Lewis S.Chandrakanta</h4>
                                        <small>CEO Expert</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>
                                </div>
                            </div>

                            <div class="customer">
                                <div class="info">
                                    <img src="../image/img2.jpg" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Lewis S.Chandrakanta</h4>
                                        <small>CEO Expert</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>
                                </div>
                            </div>

                            <div class="customer">
                                <div class="info">
                                    <img src="../image/img2.jpg" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Lewis S.Chandrakanta</h4>
                                        <small>CEO Expert</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="las la-comment"></span>
                                    <span class="las la-phone"></span>
                                </div>
                            </div> 

                        </div>
                    </div>
                </div>
            </div>-->
        </main>
    </div>
</body>

</html>