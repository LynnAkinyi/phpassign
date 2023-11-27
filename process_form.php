error_reporting(E_ALL);
ini_set('display_errors', '1');
<?php
include 'connect.php'; // Include the database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $regNo = $_POST['reg_no'];
    $surname = $_POST['surname'];
    $middleName = $_POST['middle_name'];
    $firstName = $_POST['first_name'];
    $course = $_POST['course'];
    $age = $_POST['age'];
    $guardian = $_POST['guardian'];
    $telNo = $_POST['tel_no'];

    // Insert data into the students table
    $sql = "INSERT INTO students (Reg_no, surname, Middle_name, first_name, course, age, guardian, Telno)
            VALUES ('$regNo', '$surname', '$middleName', '$firstName', '$course', '$age', '$guardian', '$telNo')";

    if ($conn->query($sql) === TRUE) {
        echo "Student record added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

