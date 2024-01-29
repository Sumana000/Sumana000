<!-- for ajax  -->
<!-- live data search results -->
<div class="container-fluid py-5">
    <div class="table-responsive-sm">
        <table class="table table-hover">
            <?php
            $hostName = "localhost";
            $dbUser = "root";
            $dbPassword = "";
            $dbName = "project";
            $conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
            if (!$conn) {
                die("Something went wrong;");
            }
            // Create connection
            $input = $_POST['name'];
            $sql = "SELECT * FROM jobfinder WHERE tittle LIKE '%{$input}%' OR location Like '%{$input}%'";
            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result) > 0) {
                echo '
                        <thead>
                    <tr>
                        <th>Title</th>
                        <th>Organization</th>
                        <th>Location</th>
                        <th>Qualification</th>
                        <th>DeadLine</th>
                    </tr>
                </thead>';
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "	<tr>
		          <td>" . $row['tittle'] . "</td>
		          <td>" . $row['organization'] . "</td>
		          <td>" . $row['location'] . "</td>
		          <td>" . $row['qualification'] . "</td>
                  <td>" . $row['deadline'] . "</td>
		        </tr>";
                }
            } else {
                echo '<p class="text-center">No Data Found!</p>';
            }

            ?>
            <table>
    </div>
</div>