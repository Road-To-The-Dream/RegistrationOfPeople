<div class="main">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Data</div>

                    <div class="card-body">
                        <form method="POST" action="">

                            <div class="form-group row">
                                <label for="FIO" class="col-md-4 col-form-label text-md-right">Ф И О :</label>

                                <div class="col-md-6">
                                    <input id="fio" type="text" class="form-control" name="fio" value="" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Email :</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Email :</label>

                                <div class="col-md-6">
                                    <select name="" id="" class="chosen-select">

                                    </select>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(".chosen-select").chosen()
</script>