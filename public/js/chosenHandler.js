$(document).ready(function () {
    let host = $('div.hidden').data('host');

    activateSelect();

    getAreas(host);

    $('#areas').on('change', function () {
        getRegions(host, $(this).val());
    });

    $(document).on('change', '#regions', function () {
        $('div.cities').remove();
        $('div.submit').remove();

        getCities(host, $(this).val());
    });

    $(document).on('change', '#cities', function () {
        $('div.submit').remove();

        $('#form').append('<div class="form-group row justify-content-center submit">\n' +
            '                                <div class="col-md-8 text-md-right">\n' +
            '                                    <button type="submit" class="btn btn-success">Submit</button>\n' +
            '                                </div>\n' +
            '                            </div>');
    });
});

function activateSelect() {
    $(".chosen-select").chosen({
        width: "100%"
    });
}

function getAreas(host) {
    $.ajax({
        url: 'http://' + host + '/register/getAreas',
        type: 'post',
        success: function (response) {
            let areas = JSON.parse(response);

            areas.forEach(function (area) {
                $('#areas').append('<option value="' + area + '">' + area + '</option>');
            });

            $('#areas').trigger("chosen:updated");
        },

        error: function (response) {
            console.log("Error" + response);
        }
    })
}

function getRegions(host, area) {
    $('div.regions').remove();

    $('#form').append('<div class="form-group row regions">\n' +
        '                                <label for="regions" class="col-md-4 col-form-label text-md-right">Region :</label>\n' +
        '\n' +
        '                                <div class="col-md-6">\n' +
        '                                    <select name="region" id="regions" class="chosen-select">\n' +
        '                                        <option value="" selected disabled hidden>Select your region</option>\n' +
        '                                    </select>\n' +
        '                                </div>\n' +
        '                            </div>');

    activateSelect();

    $.ajax({
        url: 'http://' + host + '/register/getRegions',
        type: 'post',
        data: {area: area},
        success: function (response) {
            let regions = JSON.parse(response);

            regions.forEach(function (region) {
                $('#regions').append('<option value="' + region + '">' + region + '</option>');
            });

            $('#regions').trigger("chosen:updated");
        },

        error: function (response) {
            console.log("Error" + response);
        }
    })
}

function getCities(host, region) {
    $('div.city').remove();

    $('#form').append('<div class="form-group row cities">\n' +
        '                                <label for="cities" class="col-md-4 col-form-label text-md-right">City :</label>\n' +
        '\n' +
        '                                <div class="col-md-6">\n' +
        '                                    <select name="city" id="cities" class="chosen-select">\n' +
        '                                        <option value="" selected disabled hidden>Select your city</option>\n' +
        '                                    </select>\n' +
        '                                </div>\n' +
        '                            </div>');

    activateSelect();

    $.ajax({
        url: 'http://' + host + '/register/getCities',
        type: 'post',
        data: {region: region},
        success: function (response) {
            let cities = JSON.parse(response);

            cities.forEach(function (city) {
                $('#cities').append('<option value="' + city + '">' + city + '</option>');
            });

            $('#cities').trigger("chosen:updated");
        },

        error: function (response) {
            console.log("Error" + response);
        }
    })
}