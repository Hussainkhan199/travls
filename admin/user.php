<?php
require_once "../config/config.php";

include "header.php";


?>



    <!-- Content Start -->
    
        <div class="table" style="width: 100%;">

            <?php

            // SQL query to fetch data from the table
            $sql = "SELECT `id`, `Name`, `Email`, `Phone_Number`, `Address`, `Arriva`, `Destination`, `family`, `children`, `Adults`, `from_date`, `to_date` FROM `tickets`";


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
                    <th>Button</th>


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
                                <a href="assign.php?id=<?=$data['id']?>" class="btn btn-primary"> Assign Agent </a>
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

    