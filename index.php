<?php
include 'header.php';
if (!isset($_SESSION['logged_in'])) {
    header("Location: login.php");
    ob_end_flush();
}
?>

<div class="container-fluid d-flex justify-content-center">

<div class="search_main">
        <div class="student_search">
            <form action="search.php" method="POST">
                <input type="hidden" name="userID" value="<?= $_SESSION['u_id'] ?>">
                <input class="border-success rounded-2 px-2 py-1 " type="text" name="items" value="" placeholder="Search user">
                <input class="text-success border-success rounded-2 px-2 py-1" type="submit" name="search" value="Search">
            </form>
           
        </div>
    </div>
</div>
    <div class="tab-content d-flex my-5 justify-content-center align-items-center" id="v-pills-tabContent" style="height: 300px;">




        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">

                <table class="table">
                    <thead align="center">
                        <tr>
                            <th scope="col" class="text-start px-md-4">First</th>
                            <th scope="col" class="px-md-4">Last</th>
                            <th scope="col" class="px-md-4">Course</th>
                            <th scope="col" class="px-md-4">Section</th>
                            <th scope="col" class="px-md-4">Action</th>
                        </tr>
                    </thead>



                    <tbody align="center">
                            <?php
                            $userID = $_SESSION['u_id'];
                            $select = $conn->prepare("SELECT * FROM students_record WHERE user_id = ?");
                            $select->execute([$userID]);
                            foreach ($select as $selects) { ?>
                            <tr>
                                <td class="px-md-4"><?= $selects['firstName'] ?></td>
                                <td class="px-md-4"><?= $selects['lastName'] ?></td>
                                <td class="px-md-4"><?= $selects['course'] ?></td>
                                <td class="px-md-4"><?= $selects['section'] ?></td>
                                <td class="px-md-1">
                                    <a class="text-decoration-none " href="add.php?update&id=<?= $selects['s_id'] ?>" class="text-decoration-none">✏</a>
                                    |
                                    <a class="text-decoration-none" href="process.php?delete&id=<?= $selects['s_id'] ?>" class="text-decoration-none">❌</a>
                                </td>
                            <?php } ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
    if (isset($_GET['update'])) { ?>

        <?php
        $id = $_GET['id'];

        $getUser = $conn->prepare("SELECT * FROM accessories WHERE p_id = ?");
        $getUser->execute([$id]);

        foreach ($getUser as $data) { ?>

            <form method="POST" action="process.php">
                <div class="mb-1 row">
                    <div class="col-3 py-1">
                        <label for="fName" class="form-label"><b>fName:</b></label>
                    </div>
                    <div class="col">
                        <input type="hidden" class="form-control" name="userID" value="<?= $data['p_id'] ?>">
                        <input type="text" class="form-control" id="fName" style="font-size: .7rem;" name="fName" value="<?= $data['fName'] ?>">
                    </div>
                </div>
                <div class="mb-1 row">
                    <div class="col-3 py-1">
                        <label for="lName" class="form-label "><b>lName:</b></label>
                    </div>
                    <div class="mb-1 col">
                        <input type="text" class="form-control" id="lName" style="font-size: .7rem;" name="lName" value="<?= $data['lName'] ?>">
                    </div>
                </div>
                <div class="mb-1 row">
                    <div class="col-3 py-1">
                        <label for="course" class="form-label "><b>Course:</b></label>
                    </div>
                    <div class="mb-1 col">
                        <input type="text" class="form-control" id="course" style="font-size: .7rem;" name="course" value="<?= $data['course'] ?>">
                    </div>
                </div>
                <div class="mb-1 row">
                    <div class="col-3 py-1">
                        <label for="section" class="form-label "><b>Section:</b></label>
                    </div>
                    <div class="mb-1 col">
                        <input type="text" class="form-control" id="section" style="font-size: .7rem;" name="section" value="<?= $data['section'] ?>">
                    </div>
                    <div class="mb-1 row">
                    <div class="col-3 py-1">
                        <label for="password" class="form-label "><b>Password:</b></label>
                    </div>
                    <div class="mb-1 col">
                        <input type="text" class="form-control" id="password" style="font-size: .7rem;" name="password" value="<?= $data['password'] ?>">
                    </div>
                </div>
                </div>
                <div class="my-3 form-check card-body text-center">
                    <button type="submit" class="btn btn-primary" name="update" value="Update">Update</button>
                </div>
            </form>
        <?php   } ?>
    <?php } ?>


</div>
</div>
</body>

</html>