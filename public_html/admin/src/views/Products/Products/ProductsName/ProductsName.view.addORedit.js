$(document).ready(function () {
    $('#product_length,#product_width,#product_height,#product_weight').checkNumber();

    $('#color_id').next(".select2-container").toggle(555);
    $('#size_id').next(".select2-container").toggle(555);
    $('#material_id').next(".select2-container").toggle(555);
    $('#product_length').toggle(555);
    $('#product_width').toggle(555);
    $('#product_height').toggle(555);
    $('#product_weight').toggle(555);


    $('#product_color').on('ifUnchecked', function (e) {
        $('#color_id').next(".select2-container").toggle(555);
    });
    $('#product_color').on('ifChecked', function (e) {
        $('#color_id').next(".select2-container").toggle(555);
    });
    $('#product_size').on('ifUnchecked', function (e) {
        $('#size_id').next(".select2-container").toggle(555);
    });
    $('#product_size').on('ifChecked', function (e) {
        $('#size_id').next(".select2-container").toggle(555);
    });
    $('#product_material').on('ifUnchecked', function (e) {
        $('#material_id').next(".select2-container").toggle(555);
    });
    $('#product_material').on('ifChecked', function (e) {
        $('#material_id').next(".select2-container").toggle(555);
    });
    $('#product_dimension').on('ifUnchecked', function (e) {
        // $('#product_length').hide();
        $('#product_length').toggle(555);
        // $('#product_width').hide();
        $('#product_width').toggle(555);
        // $('#product_height').hide();
        $('#product_height').toggle(555);
    });
    $('#product_dimension').on('ifChecked', function (e) {
        // $('#product_length').show();
        $('#product_length').toggle(555);
        // $('#product_width').show();
        $('#product_width').toggle(555);
        // $('#product_height').show();
        $('#product_height').toggle(555);
    });
    $('#product_weights').on('ifUnchecked', function (e) {
        // $('#product_weight').hide();
        $('#product_weight').toggle(555);
    });
    $('#product_weights').on('ifChecked', function (e) {
        // $('#product_weight').show();
        $('#product_weight').toggle(555);
    });

    $("#product_group_id").getOptions({
        url: 'controllers/Products/ProductsInfo/ProductSubGroups/ProductSubGroups',
        target: 'product_sub_group_id',
        controller_type: 'getSubWithGroup',
        rest: {
            request: 'options'
        }
    });

    $("#product_group_id").getOptions({
        url: 'controllers/Products/ProductsInfo/Materials/Materials',
        target: 'material_id',
        controller_type: 'getMaterialWithSubGroup',
        rest: {
            request: 'options'
        }
    });

    $("#product_sub_group_id").getOptions({
        url: 'controllers/Products/ProductsInfo/ProductSubSubGroups/ProductSubSubGroups',
        target: 'product_sub_sub_group_id',
        controller_type: 'getSubSubWithSubGroup',
        rest: {
            request: 'options'
        }
    });


});
