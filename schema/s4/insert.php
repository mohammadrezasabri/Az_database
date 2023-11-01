<?php

$conn = mysqli_connect("localhost", "root", "auth");


$sql = "INSERT INTO student (`code_meli`,`name`,`last-name`, `age`,`phone`, `addres`) VALUES
 ('alireza','haghighian', 15,09127375936, 'esfahan st.khajo' )";


$result = mysqli_query($conn, $sql);


if ($result) {
    echo "رکورد با موفقیت افزوده شد.";
} else {
    echo "خطا در افزودن رکورد: " . mysqli_error($conn);
}


mysqli_close($conn);
?>