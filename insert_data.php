<?php
include('../LoginRegisterAuthentication/connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capture and sanitize inputs
    $learners_name = mysqli_real_escape_string($connection, $_POST['learners_name']);
    $grade = mysqli_real_escape_string($connection, $_POST['grade']);
    $school_level = mysqli_real_escape_string($connection, $_POST['school_level']);
    $region = mysqli_real_escape_string($connection, $_POST['region']);
    $division = mysqli_real_escape_string($connection, $_POST['division']);
    $school_year = mysqli_real_escape_string($connection, $_POST['school_year']);
    $section = mysqli_real_escape_string($connection, $_POST['section']);
    $gender = mysqli_real_escape_string($connection, $_POST['gender']);
    $subject = mysqli_real_escape_string($connection, $_POST['subject']);

    // Debugging output
    echo "School Year: " . $school_year . "<br>";

    // Extract the first 2 digits of the school year
    $year_prefix = substr($school_year, 0, 2);
    echo "Year Prefix: " . $year_prefix . "<br>";

    // Generate a unique 4-digit random number
    $unique_suffix = sprintf("%04d", mt_rand(1, 9999));
    echo "Unique Suffix: " . $unique_suffix . "<br>";

    // Combine them to form the school_id
    $school_id = $year_prefix . $unique_suffix;
    echo "Generated School ID: " . $school_id . "<br>";

    // Insert data into the database
    $query = "INSERT INTO students (learners_name, grade, school_level, region, division, school_year, section, gender, subject, school_id)
              VALUES ('$learners_name', '$grade', '$school_level', '$region', '$division', '$school_year', '$section', '$gender', '$subject', '$school_id')";

    if (mysqli_query($connection, $query)) {
        header("Location: Crud.php?success=Student added successfully");
    } else {
        die("Error: " . mysqli_error($connection));
    }
}
?>
