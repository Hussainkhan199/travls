<?php


require_once "../config/config.php";
include "header.php";


if (isset($_POST['submit'])) {
    // Retrieve the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `other_admins`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "New admin created.";
        // Redirect to the admin dashboard or any other desired page
        // header("Location: other.php");

    } else {
        echo "Invalid credentials. Please try again.";
    }
}

?>


<div class="container" style="padding-left:200px; padding-right:200px; margin-top:50px">
    <h3 style="padding-bottom:20px">User Registration</h3>
    <form method="POST" action="">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" required style="width: 50%;">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" required style="width: 50%;">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password" required style="width: 50%;">
        </div>
        <br />
        <div style="padding-left:300px; padding-bottom:20px">

            <button type="submit" class="btn btn-primary" name="submit">Register</button>
        </div>
    </form>
</div>
</div>
</div>

<div>
    <h1>All Admins </h1>
    <div class="table" style="padding-left:300px">
        <?php
        // SQL query to fetch data from the table
        $sql = "SELECT * FROM `other_admins`";
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
            </tr>
            <?php
            if (mysqli_num_rows($result) > 0) {
                foreach ($result as $data) {
            ?>
                    <tr>
                        <td><?= $data['id'] ?></td>
                        <td><?= $data['name'] ?></td>
                        <td><?= $data['email'] ?></td>
                        <td>
                            <form action="remove.php" method="post">
                                <button class="btn btn-danger" name="remove" value="<?= $data['id']; ?>"> Remove this admin</button>
                            </form>
                        </td>
                    </tr>
            <?php
                }
            } else {
                echo "NO record found";
            }
            $conn->close();

            ?>
        </table>
    </div>
</div>
</div>
<?php
include "footer.php";
?>