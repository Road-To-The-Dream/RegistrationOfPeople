<div class="main">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">User card</div>

                    <div class="card-body">

                        <?php if ($data['user']->getId() === null) {
                            ?>

                            <div class="form-group row">
                                <div class="col text-center">
<<<<<<< HEAD
                                    <label class="col-form-label text-md-right text-success">User not found</label>
=======
                                    <label class="col-form-label text-md-right">User not found
>>>>>>> 90822002d01fcebddd989437559e74336f1edfbb
                                </div>
                            </div>

                            <?php
                        } else {
                            ?>

                            <div class="form-group row">
                                <div class="col text-center">
<<<<<<< HEAD
                                    <label class="col-form-label text-md-right text-success">User already exists
                                        !</label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col">
=======
>>>>>>> 90822002d01fcebddd989437559e74336f1edfbb
                                    <label class="col-form-label text-md-right">User
                                        : <?= $data['user']->getFio(); ?></label>
                                </div>
                            </div>

                            <div class="form-group row">
<<<<<<< HEAD
                                <div class="col">
=======
                                <div class="col text-center">
>>>>>>> 90822002d01fcebddd989437559e74336f1edfbb
                                    <label class="col-form-label text-md-right">Address
                                        : <?= $data['address']->getAddress(); ?></label>
                                </div>
                            </div>

                            <?php
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class='hidden' data-host='<?= $configuration['baseHost'] ?>'></div>

<<<<<<< HEAD
</div>
=======
</div>
>>>>>>> 90822002d01fcebddd989437559e74336f1edfbb
