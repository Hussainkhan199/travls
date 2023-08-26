<?php



    require_once "../config/config.php";
    session_start();
    if(!isset($_SESSION['admin'])){
        header("location:admin_form.php");
    }
?>


<?php
include "header.php";

?>
<div class="table" style="width: 100%;">

<?php

// SQL query to fetch data from the table
$sql = "SELECT `id`, `name`, `email`, `phone`, `city`, `country`, `de_time`, `re_time`, `child`, `adult`, `text` FROM `hotel` ";


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
        <th>city</th>
        <th>country</th>
        <th>de_time</th>
        <th>re_time</th>
        <th>Number of Children</th>
        <th>Number of Adults</th>
        <th>text</th>
     

    </tr>

    <?php


        if(mysqli_num_rows($result)>0)
        {
            foreach($result as $data)
            {
            ?>
            <tr>
                <td><?=$data['id']?></td>
                <td><?=$data['name']?></td>
                <td><?=$data['email']?></td>
                <td><?=$data['phone']?></td>
                <td><?=$data['city']?></td>
                <td><?=$data['country']?></td>
                <td><?=$data['de_time']?></td>

                <td><?=$data['re_time']?></td>
                <td><?=$data['child']?></td>
                <td><?=$data['adult']?></td>
                <td><?=$data['text']?></td>
            
                 <td>
                <form action="assign.php" method="post">
                <a href="assign.php?id=<?php echo $data['id']; ?>" class="btn btn-primary">Assign Agent</a>
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


<a href="download.php"> Download CVS </a>


<?php

include "footer.php";
?>

