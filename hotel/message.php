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
    <h4 class="center heading">Displaying all user messages</h4>
        <div class="card z-depth-3">               
            <table class="striped responsive-table">
                <thead>
                    <tr>
                        <th>Emails</th>
                        <th>Messages</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $sql = "SELECT email, message FROM getintouch";
                        $result = $conn-> query($sql);
                        if($result-> num_rows > 0) {
                            while($row = $result-> fetch_assoc()) {
                                echo "<tr><td>". $row["email"]. "</td><td>". $row["message"]. "</td></tr>";
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


