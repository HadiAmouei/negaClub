
$("#country_id").getOptions({
    url: 'controllers/BaseTables/Locations/States/States',
    target: 'state_id',
    controller_type: 'getStateInCountry',
    rest: {
        request: 'options'
    }
});

$("#state_id").getOptions({
    url: 'controllers/BaseTables/Locations/Cities/Cities',
    target: 'city_id',
    controller_type: 'getCityInState',
    rest: {
        request: 'options'
    }
});
