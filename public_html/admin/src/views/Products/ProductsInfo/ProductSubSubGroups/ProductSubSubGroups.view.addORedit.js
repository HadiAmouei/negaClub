


$("#product_group_id").getOptions({
    url: 'controllers/Products/ProductsInfo/ProductSubGroups/ProductSubGroups',
    target: 'product_sub_group_id',
    controller_type: 'getSubWithGroup',
    rest: {
        request: 'options'
    }
});