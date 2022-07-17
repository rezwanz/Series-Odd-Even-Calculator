<?php
include 'includes/header.php';
?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Sum of Series</h4>
                        </div>
                        <div class="card-body">
                            <form action="action.php" method="post">
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Starting Number</label>
                                    <div class="col-md-8">
                                        <input type="number" name="first_number" class="form-control" />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Ending Number</label>
                                    <div class="col-md-8">
                                        <input type="number" name="last_number" class="form-control" />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Result</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" value="<?php echo isset($result) ? $result : ' '?>">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" name="btn" class="btn btn-success" value="sumOfSeriesBtn" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
include 'includes/footer.php';
?>