<?php
include('./head.php');
?>

<body>

    <?php
    include('./navbar.php');
    ?>


    <?php
    include('./sidebar.php');
    ?>

    <main id="main" class="main">

        <div class="pagetitle">
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Project Section <span style="color: green; margin-left: 6cm;"><b><?php include('./projectdata.php'); ?></b></span> </h5>

                            <form method="post" enctype="multipart/form-data">

                                <!-- Big Head -->
                                <div class="row mb-3">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Big Head</label>
                                    <div class="col-sm-10">
                                        <input required type="text" name="bighead" class="form-control">
                                    </div>
                                </div>

                                <!-- Small Head -->
                                <div class="row mb-3">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Small Head</label>
                                    <div class="col-sm-10">
                                        <input required type="text" name="smallhead" class="form-control">
                                    </div>
                                </div>

                                <!-- Photo -->
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                                    <div class="col-sm-10">
                                        <input required class="form-control" type="file" name="photo" id="formFile">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Project Category</label>
                                    <div class="col-sm-10">
                                        <select required name="category" class="form-select" aria-label="Default select example">
                                            <option value="">---</option>
                                            <option value="website">Website</option>
                                            <option value="webapp">Web Application</option>
                                            <option value="mobileapp">Mobile App</option>
                                            <option value="networking">Networking</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Submit Button</label>
                                    <div class="col-sm-10">
                                        <button name="go" class="btn btn-primary">Submit Form</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!-- Displaying The Carousels -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Available Projects</h5>

                            <?php
                            $query = "SELECT * FROM project";
                            $result = mysqli_query($conn, $query);
                            ?>

                            <table class="table datatable table-stripped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Big Head</th>
                                        <th scope="col">Small Head</th>
                                        <th scope="col">Photo</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $fo = 1;
                                    while ($ret = mysqli_fetch_array($result)) {
                                        $bighead = $ret['bighead'];
                                        $smallhead = $ret['smallhead'];
                                        $category = $ret['category'];
                                        $photo = $ret['photo'];
                                    ?>

                                        <tr>
                                            <th scope="row"><?php echo $fo++; ?></th>
                                            <td><?php echo $bighead ?></td>
                                            <td><?php echo $smallhead ?></td>
                                            <td> <img style="width: 3cm;" src="../v1/project/<?php echo $photo ?>" alt="" srcset=""></td>
                                            <td><?php echo $category ?></td>
                                            <td>
                                                <a href="editproject.php?id=<?php echo $ret['id']; ?>" class="btn btn-success"><i class="bi bi-pencil-fill"></i></a>
                                                <a href="deleteproject.php?id=<?php echo $ret['id']; ?>" class="btn btn-danger">
                                                    <i class="bi bi-trash-fill"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>

    <?php
    include('./footer.php');
    ?>