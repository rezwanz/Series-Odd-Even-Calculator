<?php
    include 'includes/header.php';
?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center">Series</h4>
                        </div>
                        <div class="card-body">
                            <form action="action.php" method="post">
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">First Number</label>
                                    <div class="col-md-8">
                                        <input type="number" name="first_number" class="form-control" />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Last Number</label>
                                    <div class="col-md-8">
                                        <input type="number" name="last_number" class="form-control" />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Result</label>
                                    <div class="col-md-8">
                                        <textarea class="form-control"><?php echo isset($result) ?$result : ' ' ?></textarea>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" name="btn" class="btn btn-success" value="seriesBtn" />
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