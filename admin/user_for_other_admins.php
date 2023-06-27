<?php
require_once "../config/config.php";




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Zistravels Admin Panel</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<style>
    
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            font-size: 12px;
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
 
</style>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="user_for_other_admins.php" class="navbar-brand mx-4 mb-3">
                <h3  style="color:#df9023; font-size:20px"><i class="fa fa-hashtag me-2" style="color:#df9023"></i>Zistravel pakistan</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Admin</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
           
                    
                    <a href="user_for_other_admins.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>User's Data</a>
                
                   
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
        


    <!-- Content Start -->
    
        <div class="table" style="width: 100%;">

            <?php

            // SQL query to fetch data from the table
            $sql = "SELECT `id`, `Name`, `Email`, `Phone_Number`, `Address`, `Arriva`, `Destination`, `family`, `children`, `Adults`, `from_date`, `to_date`,`Agent`,`status` FROM `tickets`";


            // $sql = "SELECT t1.id, t1.name, t1.email, t1.address, t1.phone, t1.from, t1.to, t1.family, t1.adults, t1.child, t1.date
            // FROM table1 t1

            // Execute the query
            $result = $conn->query($sql);
            ?>

            <h2>Data Table</h2>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Family Members</th>
                    <th>Number of Children</th>
                    <th>Number of Adults</th>
                    <th>From Date</th>
                    <th>Till daate</th>
                    <th>Assgn Agent</th>
                    <th>Status</th>
                    <th>Status</th>



                </tr>

                <?php


                    if(mysqli_num_rows($result)>0)
                    {
                        foreach($result as $data)
                        {
                        ?>
                        <tr>
                            <td><?=$data['id']?></td>
                            <td><?=$data['Name']?></td>
                            <td><?=$data['Email']?></td>
                            <td><?=$data['Phone_Number']?></td>
                            <td><?=$data['Address']?></td>
                            <td><?=$data['Arriva']?></td>
                            <td><?=$data['Destination']?></td>

                            <td><?=$data['family']?></td>
                            <td><?=$data['children']?></td>
                            <td><?=$data['Adults']?></td>
                            <td><?=$data['from_date']?></td>
                            <td><?=$data['to_date']?></td>
                            <td><?=$data['family']?></td>
                            <td>
                            <?=$data['Agent']?> </td>
                            <td>
                            <?=$data['status']?> </td>
                            <td>
                            <form action="status.php" method="post">
                            <a href="status.php?id=<?php echo $data['id']; ?>" class="btn btn-primary">Status</a>
                            </form>
                            </td>
                        </tr>
                        <?php
                        }
                    }
                    else
                    {
                        echo "NO record found";
                    }




                
                // // Check if there are any rows returned from the query
                // if ($result->num_rows > 0) {
                //     // Loop through the rows and output the data in each row
                //     while ($row = $result->fetch_assoc()) {
                //         echo "<tr>";
                //         echo "<td>" . $row['id'] . "</td>";
                //         echo "<td>" . $row['Name'] . "</td>";
                //         echo "<td>" . $row['Email'] . "</td>";
                //         echo "<td>" . $row['Phone_Number'] . "</td>";
                //         echo "<td>" . $row['Address'] . "</td>";
                //         echo "<td>" . $row['Arriva'] . "</td>";
                //         echo "<td>" . $row['Destination'] . "</td>";

                //         echo "<td>" . $row['family'] . "</td>";
                //         echo "<td>" . $row['children'] . "</td>";
                //         echo "<td>" . $row['Adults'] . "</td>";
                //         echo "<td>" . $row['from_date'] . "</td>";
                //         echo "<td>" . $row['to_date'] . "</td>";
                //         echo "<td>";
                //         echo "<a href='assign.php' class='btn btn-primary'> Assign agent</a>";
                //         echo "</td>";

                //         echo "</tr>";
                //     }
                // } else {
                //     echo "<tr><td colspan='10'>No data found</td></tr>";
                // }

                // Close the database connection
                $conn->close();
                ?>
            </table>
        </div>
    </div>
    <!-- Chart End -->
    </div>

                </div>





    <?php

        include "footer.php";
    ?>

    