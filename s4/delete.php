<?php

$conn = mysqli_connect("localhost", "root", "auth");


$sql = "DELETE FROM student WHERE name = alireza";


$result = mysqli_query($conn, $sql);


if ($result) {
    echo "رکورد با موفقیت حذف شد.";
} else {
    echo "خطا در حذف رکورد: " . mysqli_error($conn);
}


mysqli_close($conn);




?>