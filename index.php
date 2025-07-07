<?php
session_start();
include('includes/connect.php');
include('includes/header.php');
?>

<!-- Main Content -->
<main>
    <div class="container text-center">
        <div class="mb-5">
            <h1 class="mb-4">Welcome to</h1>
            <h1 class="mb-3"><b> Library and Information Science </b></h1>
            <h1 class="mb-4"><b>Project Topic Registration System</b></h1>

        </div>

        <div class="mb-5 pb-5">
            <a href="registration.php">
                <button class="btn btn-success pt-3 pb-3">
                    Register New Project Topic
                </button>
            </a>
            <a class="text-light"> ---- </a>

            <a href="verification.php">
                <button class="btn btn-success pt-3 pb-3" name="verify">Verify Topic</button>
            </a>
        </div>
    </div>
</main>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>