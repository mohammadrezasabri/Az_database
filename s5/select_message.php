<?php

$conn = mysqli_connect("localhost", "root", "auth");

$sql = "SELECT student_id, message_title, message_content FROM student_messages";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $rows = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    echo json_encode($rows);
} else {
    echo "رکوردی یافت نشد.";
}

mysqli_close($conn);

?>