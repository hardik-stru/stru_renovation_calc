<script>
    $(document).ready(function () {

        $('body').addClass('bg-light');
        $('footer').addClass('py-8 py-md-11 bg-gray-200');

        $(window).scroll(function () {
            var scroll = $(window).scrollTop();
            console.log(scroll);
            if (scroll > 167) {
                $(".sticky_div").removeClass('sticky-top').addClass('sticky-top-0');
            } else {
                $(".sticky_div").removeClass('sticky-top-0').addClass('sticky-top');
            }
        });
    });

    function digitOnly(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }

    function isNumberKey(evt, obj) {

        var charCode = (evt.which) ? evt.which : event.keyCode;
        var value = $(obj).val();
        var dotcontains = value.indexOf(".") != -1;
        if (dotcontains)
            if (charCode == 46)
                return false;
        if (charCode == 46)
            return true;
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }

    function average_monthly_income_before_renovation() {
        if ($("#before_renovation_avg_monthly_income_form").parsley().validate()) {

            var high_season_days = (parseInt($("#hs_days").val()) * parseInt($("#hs_occupancy").val())) / 100;
            var medium_season_days = (parseInt($("#ms_days").val()) * parseInt($("#ms_occupancy").val())) / 100;
            var shoulder_season_days = (parseInt($("#ss_days").val()) * parseInt($("#ss_occupancy").val())) / 100;

            var high_season_revenue = parseFloat(high_season_days) * parseFloat($("#hs_rates").val());
            var medium_season_revenue = parseFloat(medium_season_days) * parseFloat($("#ms_rates").val());
            var shoulder_season_revenue = parseFloat(shoulder_season_days) * parseFloat($("#ss_rates").val());

            if (isNaN(high_season_revenue)) {
                high_season_revenue = 0;
            }
            if (isNaN(medium_season_revenue)) {
                medium_season_revenue = 0;
            }
            if (isNaN(shoulder_season_revenue)) {
                shoulder_season_revenue = 0;
            }

            var before_renovation_avg_monthly_income = parseFloat(high_season_revenue) + parseFloat(medium_season_revenue) + parseFloat(shoulder_season_revenue);

            if (isNaN(before_renovation_avg_monthly_income)) {
                before_renovation_avg_monthly_income = 0;
            }

            $("#before_renovation_avg_monthly_income").val(before_renovation_avg_monthly_income);

            $("#before_renovation_avg_monthly_income_modal").modal('hide');

        }


    }

    function average_monthly_income_after_renovation() {
        if ($("#before_renovation_avg_monthly_income_form").parsley().validate()) {

            var high_season_days = (parseInt($("#hs_days_after_renovation").val()) * parseInt($("#hs_occupancy_after_renovation").val())) / 100;
            var medium_season_days = (parseInt($("#ms_days_after_renovation").val()) * parseInt($("#ms_occupancy_after_renovation").val())) / 100;
            var shoulder_season_days = (parseInt($("#ss_days_after_renovation").val()) * parseInt($("#ss_occupancy_after_renovation").val())) / 100;

            var high_season_revenue = parseFloat(high_season_days) * parseFloat($("#hs_rates_after_renovation").val());
            var medium_season_revenue = parseFloat(medium_season_days) * parseFloat($("#ms_rates_after_renovation").val());
            var shoulder_season_revenue = parseFloat(shoulder_season_days) * parseFloat($("#ss_rates_after_renovation").val());

            if (isNaN(high_season_revenue)) {
                high_season_revenue = 0;
            }
            if (isNaN(medium_season_revenue)) {
                medium_season_revenue = 0;
            }
            if (isNaN(shoulder_season_revenue)) {
                shoulder_season_revenue = 0;
            }

            var after_renovation_avg_monthly_income = parseFloat(high_season_revenue) + parseFloat(medium_season_revenue) + parseFloat(shoulder_season_revenue);

            if (isNaN(after_renovation_avg_monthly_income)) {
                after_renovation_avg_monthly_income = 0;
            }

            $("#after_renovation_avg_monthly_income").val(after_renovation_avg_monthly_income);

            $("#after_renovation_avg_monthly_income_modal").modal('hide');

        }


    }

    function open_before_renovation_avg_monthly_income_modal() {
        $("#before_renovation_avg_monthly_income_modal").modal('show');
    }

    function open_after_renovation_avg_monthly_income_modal() {
        $("#after_renovation_avg_monthly_income_modal").modal('show');
    }

    function calculate_total_revenue() {

        if ($("#calculator_form").parsley().validate()) {

            var tax = (parseFloat($("#purchase_price").val()) * parseFloat($("#tax").val()))/100;
            if (isNaN(tax)) {
                tax = 0;
            }

            var before_renovation_yearly_income = parseFloat($("#before_renovation_avg_monthly_income").val()) * 12;
            var total_property_cost = parseFloat($("#purchase_price").val()) + parseFloat(tax) + parseFloat($("#insurance").val()) + parseFloat($("#utilities").val());

            alert(before_renovation_yearly_income + "***" + total_property_cost);

            if (isNaN(before_renovation_yearly_income)) {
                before_renovation_yearly_income = 0;
            }
            if (isNaN(total_property_cost)) {
                total_property_cost = 0;
            }
            var total_profit_before_renovation = parseFloat(Math.max(total_property_cost, before_renovation_yearly_income)) - parseFloat(Math.min(total_property_cost, before_renovation_yearly_income));
            if (isNaN(total_profit_before_renovation)) {
                total_profit_before_renovation = 0;
            }
            var bf_sign;
            var bf_class;
            if (total_property_cost > before_renovation_yearly_income) {
                bf_sign = "-";
                bf_class = "button-loss";
            } else if (total_property_cost < before_renovation_yearly_income) {
                bf_sign = "+";
                bf_class = "button-profit";
            } else {
                bf_sign = "";
                bf_class = "button-primary";
            }
            $.ajax({
                url: "<?php echo _U ?>home",
                data: {convert_number_formate: 1, data: total_profit_before_renovation},
                success: function (r) {
                    $(".before_renovation_div").removeClass('button-primary').removeClass('button-loss').removeClass('button-profit').addClass(bf_class);
                    $("#revenue_before_renovation").text(r);
                    $("#bf_sign").text(bf_sign);
                }
            });

            var renovation_cost = parseFloat($("#renovation_cost").val()) + parseFloat(total_property_cost);
            var avg_monthly_income_after_renovation = $("#after_renovation_avg_monthly_income").val();
            var yearly_income_after_renovation = parseFloat(avg_monthly_income_after_renovation) * 12;

            if (isNaN(renovation_cost)) {
                renovation_cost = 0;
            }
            if (isNaN(yearly_income_after_renovation)) {
                yearly_income_after_renovation = 0;
            }

            var total_profit_after_renovation = parseFloat(Math.max(renovation_cost, yearly_income_after_renovation)) - parseFloat(Math.min(renovation_cost, yearly_income_after_renovation));
            if (isNaN(total_profit_after_renovation)) {
                total_profit_after_renovation = 0;
            }

            var af_sign;
            var af_class;
            if (renovation_cost > yearly_income_after_renovation) {
                af_sign = "-";
                af_class = "button-loss";
            } else if (renovation_cost < yearly_income_after_renovation) {
                af_sign = "+";
                af_class = "button-profit";
            } else {
                af_sign = "";
                af_class = "button-primary";
            }

            $.ajax({
                url: "<?php echo _U ?>home",
                data: {convert_number_formate: 1, data: total_profit_after_renovation},
                success: function (r) {
                    $(".after_renovation_div").removeClass('button-primary').removeClass('button-loss').removeClass('button-profit').addClass(af_class);
                    $("#revenue_after_renovation").text(r);
                    $("#af_sign").text(af_sign);
                }
            });
        }
    }

    function form_reset() {
        $(".after_renovation_div").removeClass('button-primary').removeClass('button-loss').removeClass('button-profit').addClass('button-primary');
        $(".before_renovation_div").removeClass('button-primary').removeClass('button-loss').removeClass('button-profit').addClass('button-primary');
        $("#af_sign").text('');
        $("#bf_sign").text('');
        $("#revenue_before_renovation").text('$0.00');
        $("#revenue_after_renovation").text('$0.00');

    }

</script>