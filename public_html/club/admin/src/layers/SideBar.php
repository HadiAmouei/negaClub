<?
use FwHtml\FontAwesome as Fa;
$SideBar = new Sidebar(true);


$SideBar->Item('تنظیمات پنل', Fa::Wrench())->_items([
    MenuItem::create('آموزش فرم ها', Fa::Pencil())->LinksTo('Labels/addLabels'),
]);

$SideBar->Item('اطلاعات جفرافیایی', Fa::Location_arrow())->_items([
    MenuItem::create('کشور', Fa::Location_arrow())->LinksTo(\controller\Countries::class),
    MenuItem::create('استان', Fa::Location_arrow())->LinksTo(\controller\States::class),
    MenuItem::create('شهر', Fa::Location_arrow())->LinksTo(\controller\Cities::class),
    MenuItem::create('منطقه', Fa::Location_arrow())->LinksTo(\controller\Districts::class),
    MenuItem::create('محدوده', Fa::Location_arrow())->LinksTo(\controller\Ranges::class),
]);
$SideBar->Item('اطلاعات پایه ای', Fa::Cogs())->_items([
    MenuItem::create('گروه کاری', Fa::Users())->LinksTo(\controller\WorkGroups::class),
    MenuItem::create('اصناف', Fa::List_ul())->LinksTo(\controller\Castes::class),
    MenuItem::create('تحصیلات', Fa::University())->LinksTo(\controller\Educations::class),
    MenuItem::create('مشاغل', Fa::Money())->LinksTo(\controller\Jobs::class),
    MenuItem::create('انواع قرارداد', Fa::Handshake_o())->LinksTo(\controller\ContractTypes::class),
    MenuItem::create('بانک ', Fa::Credit_card_alt())->LinksTo(\controller\Banks::class),
    MenuItem::create('پیش شماره کارت بانکی', Fa::Credit_card())->LinksTo(\controller\BankCards::class),
    MenuItem::create('شبکه های اجتماعی', Fa::Telegram())->LinksTo(\controller\SocialMedias::class),

]);
$SideBar->Item('اشخاص', Fa::Cogs())->_items([
    MenuItem::create('مدیریت اشخاص حقیقی', Fa::Users())->LinksTo(\controller\Individuals::class),
    MenuItem::create('سطوح عضویت', Fa::Users())->LinksTo(\controller\Levels::class),
    MenuItem::create('مدیریت مشتریان', Fa::Users())->LinksTo(\controller\Customers::class),
    MenuItem::create('مدیریت آدرس مشتریان', Fa::Users())->LinksTo(\controller\CustomerAddresses::class),
    MenuItem::create('مدیریت پذیرندگان', Fa::Users())->LinksTo(\controller\Providers::class),
    MenuItem::create('مدیریت شعب پذیرندگان', Fa::Users())->LinksTo(\controller\ProviderBranches::class),


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
