$("#state_id").getOptions({
    url: 'controllers/BaseTables/Locations/Cities/Cities',
    target: 'city_id',
    controller_type: 'getCityInState'

})
$("#city_id").getOptions({
    url: 'controllers/BaseTables/Locations/Districts/Districts',
    target: 'district_id',
    controller_type: 'getDistrictInCity'

})