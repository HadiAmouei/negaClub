
$("#startup_id").getOptions({
    url: 'controllers/Persons/Customers/Customers',
    target: 'customer_id',
    controller_type: 'getCustomersNotInStartup',
    rest: {
        request: 'options'
    }
});

    $('#customer_id').on('change',function () {

        $.ajax({
            url: 'controllers/Persons/Customers/Customers',
            type:'POST',
            data:{
                id: $(this).val(),
                startUp: $('#startup_id').val(),
                controller_type: 'getMobile',
            },
            success: res=>{
                if (res === 'again'){
                    Swal.fire({
                        icon: 'warning',
                        title: 'هشدار!',
                        text: 'این کاربر قبلا در این استارت آپ ثبت نام کرده است',
                        confirmButtonText: 'تایید',
                        preConfirm: () => {
                            $("#customer_id").val('');
                            $('#customer_id').trigger('change');
                        }
                    });
                }else {
                    $("#User_mobile").val(res);
                    $("#User_mobile").attr('readonly',true);
                }

            }
        });
    });
