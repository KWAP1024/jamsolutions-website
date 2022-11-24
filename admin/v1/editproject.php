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
        $query = "SELECT * FROM project WHERE id=$id";
        $result = mysqli_query($conn, $query);

        while ($ret = mysqli_fetch_array($result)) {
            $bighead = $ret['bighead'];
            $smallhead = $ret['smallhead'];
            $category = $ret['category'];
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
                            <h5 class="card-title">Project Section <span style="color: green; margin-left: 6cm;"><b><?php include('./updateproject.php'); ?></b></span> </h5>

                            <form method="post" enctype="multipart/form-data">

                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Big head</label>
                                    <div class="col-sm-10">
                                        <input required value="<?php echo $bighead ?>" type="text" name="bighead" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Small head</label>
                                    <div class="col-sm-10">
                                        <input required value="<?php echo $smallhead ?>" type="text" name="smallhead" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Project Category</label>
                                    <div class="col-sm-10">
                                        <select required name="category" class="form-select" aria-label="Default select example">
                                            <option value=""><?php echo $category ?></option>
                                            <option value="website">Website</option>
                                            <option value="webapp">Web Application</option>
                                            <option value="mobileapp">Mobile App</option>
                                            <option value="networking">Networking</option>
                                        </select>
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