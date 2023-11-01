<?php

$conn = mysqli_connect("localhost", "root", "auth");


$sql = "SELECT `code_meli`,`name`,`last_name` FROM `student`";


$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {
        echo "کد ملی: " . $row["code_meli"]. " - نام: " . $row["name"]. " - فامیل: " . $row["last_name"]. "<br>";
    }
} else {
    echo "رکوردی یافت نشد.";
}

mysqli_close($conn);

?>