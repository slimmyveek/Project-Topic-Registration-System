<?php
session_start();
include('includes/connect.php');
include('includes/header.php');
?>

<!-- Main content -->
<main class="container">
    <h3>Verification</h3>
    <hr>

    <?php
    if (isset($_POST["verify"])) {
        $topic = $_POST["topic"];

        //checking if a project topic details already exists
        $check_topic = $connect->query("SELECT * FROM registration WHERE topic = '$topic' ")->num_rows;

        if ($check_topic > 0) {
            echo "<div class='alert alert-danger' role='alert'> This project topic has already been registered. You can't register this project topic again. </div>";
        } else {
            echo "<div class='alert alert-primary' role='alert'> This project topic has not been previously registered. You can proceed to register this topic. </div>";
        }
    }
    ?>

    <form method="POST">

        <h5 class="mb-4 text-center">Verify if a project topic has been registered already.</h5>

        <div class="col-lg-12 mb-4 text-center">
            <h3>Project Topic:</h3> <input type="text" class="form-control" value="" name="topic" required id="">
        </div>

        <div class="mb-3 text-center">
            <a href="">
                <button class="btn btn-success pt-3 pb-3" name="verify">Verify Topic</button>
            </a>
        </div>

    </form>
</main>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>