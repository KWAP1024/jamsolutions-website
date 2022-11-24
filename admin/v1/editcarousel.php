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

    <!-- Fetch Data -->
    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM carousel WHERE id=$id";
        $result = mysqli_query($conn, $query);

        while ($ret = mysqli_fetch_array($result)) {
            $bigtext = $ret['bigtext'];
            $explaintext = $ret['explaintext'];
            $photo = $ret['photo'];
        }
    }
    ?>
    <main id="main" class="main">

        <div class="pagetitle">
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Carousel Section <span style="color: green; margin-left: 6cm;"><b><?php include('./updatecarousel.php'); ?></b></span> </h5>

                            <form method="post" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Big Text</label>
                                    <div class="col-sm-10">
                                        <input required value="<?php echo $bigtext ?>" type="text" name="bigtext" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Explanation Texts</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="explaintext" id="" cols="30" rows="10"> <?php echo $explaintext ?> </textarea>
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

    </main>



    <?php
    include('./footer.php');
    ?>