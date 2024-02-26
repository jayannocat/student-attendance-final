<?php
include 'header.php';
if (!isset($_SESSION['logged_in'])) {
    header("Location: login.php");
    ob_end_flush();
}
?>

<div class="container-fluid d-flex justify-content-center align-items-center" style="height: 600px">
    <div class="tab-pane fade show" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0" style="width: 500px; height: 310px; font-size: .7rem;">
        <div class="shadow p-4 rounded-3">

        <?php if (isset($_GET['update'])) { ?>

            <?php
            $id = $_GET['id'];

            $getData = $conn->prepare("SELECT * FROM students_record WHERE s_id = ?");
            $getData->execute([$id]);
            foreach ($getData as $selects) { ?>
                <form method="POST" action="process.php">
                    <div id="inputs">
                        <div class="position-relative mb-3">
                            <div class="mb-1 row">
                                <div class="col-5 py-1">
                                    <label for="first" class="form-label "><b>First Name:</b></label>
                                </div>
                                <div class="col" id="input">
                                    <input type="hidden" class="form-control" name="sID" value="<?= $selects['s_id'] ?>">
                                    <input type="text" style="font-size: .7rem;" class="form-control" id="first" name="first" value="<?= $selects['firstName'] ?>">
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <div class="col-5 py-1">
                                    <label for="last" class="form-label "><b>Last Name:</b></label>
                                </div>
                                <div class="col" id="input">
                                    <input type="text" style="font-size: .7rem;" class="form-control" id="last" name="last" value="<?= $selects['lastName'] ?>">
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <div class="col-5 py-1">
                                    <label for="course" class="form-label "><b>Course:</b></label>
                                </div>
                                <div class="col" id="input">
                                    <input type="text" style="font-size: .7rem;" class="form-control" id="course" name="course" value="<?= $selects['course'] ?>">
                                </div>
                            </div>
                            <div class="mb-1 row" id="input">
                                <div class="col-5 py-1">
                                    <label for="section" class="form-label "><b>Section:</b></label>
                                </div>
                                <div class="col" id="input">
                                    <input type="text" style="font-size: .7rem;" class="form-control" id="section" name="section" value="<?= $selects['section'] ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-3 form-check card-body text-center">
                        <button type="submit" class="btn btn-success" name="update">Add</button>
                    </div>
                </form>
            <?php } ?>
            <?php } else { ?>
            <?php
            $uID = $_SESSION['u_id'];
            $select = $conn->prepare("SELECT * FROM user WHERE userID = ?");
            $select->execute([$uID]);
            foreach ($select as $selects) { ?>
                <form method="POST" action="process.php">
                    <div id="inputs">
                        <div class="position-relative mb-3">
                            <div class="mb-1 row">
                                <div class="col-5 py-1">
                                    <label for="first" class="form-label "><b>First Name:</b></label>
                                </div>
                                <div class="col" id="input">
                                    <input type="hidden" class="form-control" name="uID" value="<?= $selects['userID'] ?>">
                                    <input type="text" style="font-size: .7rem;" class="form-control" id="first" name="first">
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <div class="col-5 py-1">
                                    <label for="last" class="form-label "><b>Last Name:</b></label>
                                </div>
                                <div class="col" id="input">
                                    <input type="text" style="font-size: .7rem;" class="form-control" id="last" name="last">
                                </div>
                            </div>
                            <div class="mb-1 row">
                                <div class="col-5 py-1">
                                    <label for="course" class="form-label "><b>Course:</b></label>
                                </div>
                                <div class="col" id="input">
                                    <input type="text" style="font-size: .7rem;" class="form-control" id="course" name="course">
                                </div>
                            </div>
                            <div class="mb-1 row" id="input">
                                <div class="col-5 py-1">
                                    <label for="section" class="form-label "><b>Section:</b></label>
                                </div>
                                <div class="col" id="input">
                                    <input type="text" style="font-size: .7rem;" class="form-control" id="section" name="section">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-3 form-check card-body text-center">
                        <button type="submit" class="btn btn-success" name="add">Add</button>
                    </div>
                </form>
            <?php } ?>
            <?php } ?>

        </div>
    </div>
</div>