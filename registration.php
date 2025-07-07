<?php
session_start();
include('includes/connect.php');
include('includes/header.php');
?>

<!-- Main content -->
<main class="container">
    <h3>Registration</h3>
    <hr>

    <?php
    if (isset($_POST["register"])) {
        $surname = $_POST["surname"];
        $othernames = $_POST["othernames"];
        $reg_no = $_POST["reg_no"];
        $phone = $_POST["phone"];
        $supervisor = $_POST["supervisor"];
        $verifier = $_POST["verifier"];
        $topic = $_POST["topic"];
        $created = date('j F, Y / G:i:s');

        //checking if a project topic details already exists
        $check_topic = $connect->query("SELECT * FROM registration WHERE topic = '$topic' ")->num_rows;
        //proceeding to registering new project topic details after checking that the topic doesn't already exist
        $check_reg = $connect->query("SELECT * FROM registration WHERE reg_no = '$reg_no' ")->num_rows;

        if ($check_topic > 0) {
            echo "<div class='alert alert-danger' role='alert'> This project topic has already been registered by another student. Try registering this student with another topic. </div>";
        } elseif ($check_reg > 0) {
            echo "<div class='alert alert-danger' role='alert'> This student has already registered his/her project topic. Try registering another student project topic. </div>";
        } else {
            $query = "INSERT INTO registration (surname, othernames, reg_no, phone, supervisor, verifier, topic, created) VALUES ('$surname', '$othernames', '$reg_no', '$phone', '$supervisor', '$verifier', '$topic', '$created')";
            $result = mysqli_query($connect, $query);
            if ($result === true) {
                echo "<div class='alert alert-success' role='alert'> The project topic has been registered successfully. </div>";
            } else {
                echo "<div class='alert alert-danger' role='alert'> Sorry, you can't register this project topic at this time! </div>";
            }
        }
    }
    ?>

    <form method="POST">

        <div class="row mb-4">
            <div class="col-lg-6">
                Surname: <input type="text" class="form-control" value="" name="surname" required id="">
            </div>

            <div class="col-lg-6">
                Other Names: <input type="text" class="form-control" value="" name="othernames" required id="">
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-lg-6">
                Registration Number: <input type="text" class="form-control" value="" name="reg_no" required id="">
            </div>

            <div class="col-lg-6">
                Phone: <input type="number" class="form-control" value="" name="phone" required id="">
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-lg-6">
                Project Supervisor: <input type="text" class="form-control" value="" name="supervisor" required id="">
            </div>

            <div class="col-lg-6">
                Software Verifier: <input type="text" class="form-control" value="" name="verifier" required id="">
            </div>
        </div>

        <div class="col-lg-12 mb-4">
            Project Topic: <input type="text" class="form-control" value="" name="topic" required id="">
        </div>

        <div class="mb-3 text-center">
            <button class="btn btn-success pt-3 pb-3" name="register">Register Topic</button>
        </div>

    </form>
</main>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>