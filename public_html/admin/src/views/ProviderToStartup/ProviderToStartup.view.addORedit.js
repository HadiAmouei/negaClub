$(function () {
    $('#provider_to_startup_start_date').persianDatepicker();
    $('#provider_to_startup_end_date').persianDatepicker();
    $('#provider_to_startup_cash_discount_div').hide();
    $('#provider_to_startup_credit_discount_div').hide();
    $('#provider_to_startup_month_ssettlement_div').hide();
    $('#contracttype_id').on('change', function () {
        let value = $(this).val();

        switch (value) {
            case '1':
                $('#provider_to_startup_cash_discount_div').show();
                $('#provider_to_startup_cash_discount').prop('required',true);
                $('#provider_to_startup_credit_discount_div').hide();
                $('#provider_to_startup_credit_discount').prop('required', false);
                $('#provider_to_startup_month_ssettlement_div').hide();
                $('#provider_to_startup_month_ssettlement').prop('required', false);

                break;
            case '2':
                $('#provider_to_startup_cash_discount_div').hide();
                $('#provider_to_startup_cash_discount').prop('required',false);
                $('#provider_to_startup_credit_discount_div').show();
                $('#provider_to_startup_credit_discount').prop('required',true);
                $('#provider_to_startup_month_ssettlement_div').show();
                $('#provider_to_startup_month_ssettlement').prop('required',true);

                break;
            case '3':
                $('#provider_to_startup_cash_discount_div').show();
                $('#provider_to_startup_month_ssettlement').prop('required',true);
                $('#provider_to_startup_credit_discount_div').show();
                $('#provider_to_startup_credit_discount').prop('required', true);
                $('#provider_to_startup_month_ssettlement_div').show();
                $('#provider_to_startup_month_ssettlement').prop('required', true);

                break;
        }


    });

    $('#provider_id').getOptions({
        url: 'controllers/Providers/ProviderBranches/ProviderBranches',
        target: 'provider_branch_id',
        controller_type: 'getProviderBranchesInProvider'
    });
    $('#startup_id').getOptions({
        url: 'controllers/Providers/Providers',
        target: 'provider_id',
        controller_type: 'getProvidersNotInStartup'
    });
})
