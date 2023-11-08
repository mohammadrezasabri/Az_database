<?php

$conn = mysqli_connect("localhost", "root", "auth");

$sql_employee = "SELECT employee_id, employee_name, employee_role FROM employees";
$result_employee = mysqli_query($conn, $sql_employee);

$sql_admin = "SELECT admin_id, admin_name, admin_role FROM admins";
$result_admin = mysqli_query($conn, $sql_admin);

$data = array();

if (mysqli_num_rows($result_employee) > 0) {
    $employees = array();
    while ($row = mysqli_fetch_assoc($result_employee)) {
        $employees[] = $row;
    }
    $data['employees'] = $employees;
}

if (mysqli_num_rows($result_admin) > 0) {
    $admins = array();
    while ($row = mysqli_fetch_assoc($result_admin)) {
        $admins[] = $row;
    }
    $data['admins'] = $admins;
}

echo json_encode($data);

mysqli_close($conn);

?>