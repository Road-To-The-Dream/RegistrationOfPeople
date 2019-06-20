$(document).ready(function () {
    let host = $('div.hidden').data('host');

    activateSelect();

    $('#area').on('change', function () {
        getRegions(host, $(this).val());
    });

    $(document).on('change', '#region', function () {
        getCities(host, $(this).val());
    });
});

function activateSelect() {
    $(".chosen-select").chosen({
        width: "100%"
    });
}

function getRegions(host, area) {
    $('div.region').remove();

    $('#form').append('<div class="form-group row region">\n' +
        '                                <label for="region" class="col-md-4 col-form-label text-md-right">Region :</label>\n' +
        '\n' +
        '                                <div class="col-md-6">\n' +
        '                                    <select name="region" id="region" class="chosen-select">\n' +
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
                $('#region').append('<option value="' + region + '">' + region + '</option>');
            });

            $('#region').trigger("chosen:updated");
        },

        error: function (response) {
            console.log("Error");
        }
    })
}

function getCities(host, region) {
    $('div.city').remove();

    $('#form').append('<div class="form-group row city">\n' +
        '                                <label for="city" class="col-md-4 col-form-label text-md-right">City :</label>\n' +
        '\n' +
        '                                <div class="col-md-6">\n' +
        '                                    <select name="city" id="city" class="chosen-select">\n' +
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
                $('#city').append('<option value="' + city + '">' + city + '</option>');
            });

            $('#city').trigger("chosen:updated");
        },

        error: function (response) {
            console.log("Error");
        }
    })
}