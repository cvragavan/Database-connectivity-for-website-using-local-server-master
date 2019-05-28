<!DOCTYPE html>
<html>
<head>
    <title>AWS PHP Tutorial</title>
</head>
<body>
    <h1>AWS PHP Tutorial</h1>
    <?php
        include 'connect.php';

        $conn->query("insert into DBname values(3, 'Vijay')");

        $result = $conn->query("select * from DBname");
        $results = $result->fetch_all(MYSQLI_ASSOC);

        print_r($results);

        $conn->close();



    ?>
</body>
</html>
