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
                            <h5 class="card-title">Carousel Section <span style="color: green; margin-left: 6cm;"><b><?php include('./carouseldata.php'); ?></b></span> </h5>

                            <form method="post" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Big Text</label>
                                    <div class="col-sm-10">
                                        <input required type="text" name="bigtext" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Explanation Texts</label>
                                    <div class="col-sm-10">
                                        <input required type="text" name="explaintext" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                                    <div class="col-sm-10">
                                        <input required class="form-control" type="file" name="photo" id="formFile">
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
                            <h5 class="card-title">Available Carousels</h5>

                            <?php
                            $query = "SELECT * FROM carousel";
                            $result = mysqli_query($conn, $query);
                            ?>

                            <table class="table datatable table-stripped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Big Text</th>
                                        <th scope="col">Explanation Text</th>
                                        <th scope="col">Photo</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $fo = 1;
                                    while ($ret = mysqli_fetch_array($result)) {
                                        $bigtext = $ret['bigtext'];
                                        $explaintext = $ret['explaintext'];
                                        $photo = $ret['photo'];
                                    ?>

                                        <tr>
                                            <th scope="row"><?php echo $fo++; ?></th>
                                            <td><?php echo $bigtext ?></td>
                                            <td><?php echo $explaintext ?></td>
                                            <td> <img style="width: 3cm;" src="../v1/carousel/<?php echo $photo ?>" alt="" srcset=""></td>
                                            <td>
                                                <a href="editcarousel.php?id=<?php echo $ret['id']; ?>" class="btn btn-success"><i class="bi bi-pencil-fill"></i></a>
                                                <a href="deletecarousel.php?id=<?php echo $ret['id']; ?>" class="btn btn-danger">
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