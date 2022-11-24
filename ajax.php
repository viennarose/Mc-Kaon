<?php

include('db/database.php');

$countryId = isset($_POST['countryId']) ? $_POST['countryId'] : 0;

$command = isset($_POST['get']) ? $_POST['get'] : "";

switch ($command) {
    case "country":
        $statement = "SELECT * FROM city";
        $dt = mysqli_query($connect, $statement);
        while ($result = mysqli_fetch_array($dt)) {
            echo $result1 = "<option value=".$result['psgcCode'].">" . $result['citymunDesc'] . "</option>";
        }
        break;

    case "state":
        $result1 = "<option>-- Select Barangay --</option>";
        $statement = "SELECT brgyCode,brgyDesc FROM brgy ";
        $dt = mysqli_query($connect, $statement);

        while ($result = mysqli_fetch_array($dt)) {
            $result1 .= "<option value=" . $result['brgyCode'] . ">" . $result['brgyDesc'] . "</option>";
        }
        echo $result1;
        break;


}

exit();
?>