<?php

$conn = mysqli_connect("localhost", "username", "password", "database");


$sql = "UPDATE student SET name = 'mohammadreza' WHERE code_meli = 1";


$result = mysqli_query($conn, $sql);


if ($result) {
    echo "رکورد با موفقیت ویرایش شد.";
} else {
    echo "خطا در ویرایش رکورد: " . mysqli_error($conn);
}


mysqli_close($conn);
?>