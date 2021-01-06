<?
use FwHtml\FontAwesome as Fa;
$SideBar = new Sidebar(true);


$SideBar->Item('تنظیمات پنل', Fa::Wrench())->_items([
    MenuItem::create('آموزش فرم ها', Fa::Pencil())->LinksTo('Labels/addLabels'),
]);
$SideBar->Item('Tools', Fa::Wrench())->_items([
    MenuItem::create('QUERY BUILDER', Fa::Times_circle_o())
        ->LinksTo('QueryBuilder/QueryBuilder.fwTools'),
    MenuItem::create('MODEL GENERATOR', Fa::Times_circle_o())
        ->LinksTo('modelGenerator/modelGenerator.fwTools'),
    MenuItem::create('Form Generator', Fa::Times_circle_o())
        ->LinksTo('formGenerator/formGenerator.fwTools'),
    MenuItem::create('Data seeder', Fa::Times_circle_o())
        ->LinksTo('DataSeeder/DataSeeder.fwTools'),
]);
$SideBar->render();
