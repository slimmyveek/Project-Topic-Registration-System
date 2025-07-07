<?php
session_start();
include('includes/connect.php');
include('includes/header.php');
?>

<!-- Main content -->
<main class="container">

    <div class="row">
        <div class="col-sm-12">
            <div class="card card-success">
                <div class="card-header">
                    <h5 class="card-title m-2 text-light">
                        Registered Users</h5>
                </div>

                <div class="card-body">

                    <?php
                    if (isset($_POST['delete'])) {
                        $id = $_POST['id'];
                        $query = "DELETE FROM registration WHERE reg_id = '$id' ";
                        $result = mysqli_query($connect, $query);


                        if ($result) {
                            echo "<div class='alert alert-success' role='alert'> This project details has been deleted successfully. </div>";
                        } else {
                            echo "<div class='alert alert-danger' role='alert'> This project details can not be deleted at this time. </div>";
                        }
                    }
                    ?>

                    <div class="table-responsive">

                        <table style="width: 100%;" id="example1" style="align-items: stretch;" class="table table-hover table-bordered">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Fullname</th>
                                    <th>Registration No.</th>
                                    <th>Contact</th>
                                    <th>Project Topic</th>
                                    <th>Supervisor</th>
                                    <th>Verifier</th>
                                    <th>Registered on</th>
                                    <th style='text-align: center;'>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $query = "SELECT * FROM registration ORDER BY reg_id DESC";
                                $row = mysqli_query($connect, $query);

                                if ($row->num_rows < 1) echo "<div class='alert alert-danger' role='alert'>
                            No Regisstered Project Topic Yet
                          </div>";
                                $sn = 0;
                                while ($fetch = $row->fetch_assoc()) {
                                    $id = $fetch['reg_id']; ?><tr>
                                        <td><?php echo ++$sn; ?></td>
                                        <td><?php echo ($fetch['surname'] . " " . $fetch['othernames']); ?></td>
                                        <td><?php echo ($fetch['reg_no']); ?></td>
                                        <td><?php echo ($fetch['phone']); ?></td>
                                        <td><?php echo ($fetch['topic']); ?></td>
                                        <td><?php echo ($fetch['supervisor']); ?></td>
                                        <td><?php echo ($fetch['verifier']); ?></td>
                                        <td><?php echo ($fetch['created']); ?></td>
                                        <td style='text-align: center;'>
                                            <form method="POST">
                                                <input type="hidden" class="form-control" name="id" value="<?php echo $id ?>" required id="">
                                                <button type="submit" onclick="return confirm('Are you sure you want to delete this record?')" name="delete" class="btn btn-danger">
                                                    Delete
                                                </button>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>

                            </tbody>

                        </table>
</main>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>