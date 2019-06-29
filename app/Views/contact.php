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
                                    <label class="col-form-label text-md-right text-success">User not found</label>
                                </div>
                            </div>

                            <?php
                        } else {
                            ?>

                            <div class="form-group row">
                                <div class="col text-center">
                                    <label class="col-form-label text-md-right text-success">User already exists !</label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col">
                                    <label class="col-form-label text-md-right">User
                                        : <?= $data['user']->getFio(); ?></label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col">
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

</div>