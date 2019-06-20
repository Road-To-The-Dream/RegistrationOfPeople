<div class="main">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Data</div>

                    <div class="card-body">
                        <form id="form" method="POST" action="">

                            <div class="form-group row">
                                <label for="fio" class="col-md-4 col-form-label text-md-right">F I O :</label>

                                <div class="col-md-6">
                                    <input id="fio" type="text" class="form-control" name="fio" value="" required
                                           autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Email :</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="" required>
                                </div>
                            </div>

                            <div class="form-group row areas">
                                <label for="areas" class="col-md-4 col-form-label text-md-right">Area :</label>

                                <div class="col-md-6">
                                    <select name="area" id="areas" class="chosen-select">
                                        <option value="" selected disabled hidden>Select your area</option>
                                    </select>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class='hidden' data-host='<?= $configuration['baseHost'] ?>'></div>

</div>