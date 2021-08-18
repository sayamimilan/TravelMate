<?php include('header.php') ?>
<?php require 'mysql_connect.php'; ?>

<style>
    .design{
        padding-top: 50px;
    }
    .heading{
        padding-top:5px;
        padding-bottom:5px;
    }
</style>

<div class="row design">
    <div class="col s12 m10 offset-m1 l8 offset-l2">
    <h4 class="center heading">Displaying all users available</h4>
        <div class="card z-depth-3">               
            <table class="striped">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Emails</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $sql = "SELECT username, first_name, last_name, email FROM users WHERE id!=1";
                        $result = $conn-> query($sql);
                        if($result-> num_rows > 0) {
                            while($row = $result-> fetch_assoc()) {
                                echo "<tr><td>". $row["username"]. "</td><td>". $row["first_name"]. "</td><td>". $row["last_name"]. "</td><td>". $row["email"]. "</td></tr>" ;
                            }
                            echo "</tbody></table>";
                        }
                        else{
                            echo"0 result!";
                        }
                        $conn-> close();
                    ?>
        </div>
    </div>
</div>

