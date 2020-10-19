<title>Contact Message</title>
<?php
    $conn = mysqli_connect('localhost', 'shailabh_admin', 'Roushan123#x', 'shailabh_contact');
    $sql = "SELECT * FROM contact";
    $sql_run = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($sql_run)) {
        echo 'Name: '. $row['name']. "<br>";
        echo 'Email: '. $row['email']. "<br>";
        echo 'Message: '. $row['message']. "<br>";
        echo '<br>';
    }
?>