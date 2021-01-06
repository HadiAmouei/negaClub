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
$SideBar->Item('اشخاص', Fa::Users())->_items([
    MenuItem::create('اشخاص حقیقی', Fa::Male())->LinksTo(\controller\Individuals::class),
    MenuItem::create('مشتریان', Fa::User_plus())->LinksTo(\controller\Customers::class),
    MenuItem::create(' سطوح عضویت', Fa::List_ol())->LinksTo(\controller\Levels::class),
    MenuItem::create('آدرس ها', Fa::Location_arrow())->LinksTo(\controller\CustomerAddresses::class),

]);
$SideBar->Item('پذیرندگان', Fa::User_circle_o())->_items([
    MenuItem::create('پذیرندگان', Fa::User_plus())->LinksTo(\controller\Providers::class),
    MenuItem::create('شعب پذیرندگان', Fa::University())->LinksTo(\controller\ProviderBranches::class),
    MenuItem::create('گالری شعب پذیرندگان', Fa::Picture_o())->LinksTo(\controller\Acceptorpictures::class),
    MenuItem::create('حساب های بانکی', Fa::Credit_card())->LinksTo(\controller\BankAccounts::class),

]);
//$SideBar->Item('حساب های بانکی', Fa::Wrench())->_items([
//    MenuItem::create('حساب های بانکی', Fa::Unlock())->LinksTo(\controller\BankAccounts::class),
//    ]);
$SideBar->Item('محصولات', Fa::Product_hunt())->_items([
    MenuItem::create('اطلاعات پایه  ', Fa::Wrench())->_items([
        MenuItem::create('واحد ', Fa::Tachometer())->LinksTo(\controller\Units::class),
        MenuItem::create('رنگ ', Fa::Paint_brush())->LinksTo(\controller\Colors::class),
        MenuItem::create('متریال', Fa::Cog())->LinksTo(\controller\Materials::class),
        MenuItem::create('برند ', Fa::Apple())->LinksTo(\controller\Brands::class),
        MenuItem::create('سایز ', Fa::Arrows_h())->LinksTo(\controller\Sizes::class),
        MenuItem::create('نوع تولید ', Fa::Cog())->LinksTo(\controller\Productions::class),

    ]),
    MenuItem::create('محصولات ', Fa::Product_hunt())->_items([
        MenuItem::create('گروه ', Fa::Product_hunt())->LinksTo(\controller\ProductGroups::class),
        MenuItem::create('زیر گروه ', Fa::Product_hunt())->LinksTo(\controller\ProductSubGroups::class),
        MenuItem::create('زیر , زیر گروه ', Fa::Product_hunt())->LinksTo(\controller\ProductSubSubGroups::class),
        MenuItem::create('نام محصول ', Fa::Product_hunt())->LinksTo(\controller\ProductsName::class),
    ]),
   MenuItem::create('گالری ها ', Fa::Picture_o())->_items([
        MenuItem::create('گالری گروه ها ', Fa::Picture_o())->LinksTo(\controller\GalleryGroups::class),
        MenuItem::create('گالری زیر گروه ها ', Fa::Picture_o())->LinksTo(\controller\GallerySubGroups::class),
        MenuItem::create('گالری زیر , زیر گروه ', Fa::Picture_o())->LinksTo(\controller\GallerySubSubGroups::class),
        MenuItem::create('گالری نام محصول ', Fa::Picture_o())->LinksTo(\controller\GalleryProductName::class),
        MenuItem::create('گالری برند ', Fa::Picture_o())->LinksTo(\controller\PhotoMarks::class),
    ]),

]);
$SideBar->Item('تنظیمات باشگاه مشتریان', Fa::Cogs())->_items([
    MenuItem::create('مدیریت استارتاپ ها', Fa::Cog())->LinksTo(\controller\Startups::class),
    MenuItem::create('تخصیص پذیرنده به استارت آپ', Fa::Handshake_o())->LinksTo(\controller\ProviderToStartup::class),
    MenuItem::create('مدیریت مشتریان استارت آپ ها', Fa::User_plus())->LinksTo(\controller\StartupUsers::class),
]);
//$SideBar->Item('تخصیص', Fa::Wrench())->_items([
//    MenuItem::create('تخصیص پذیرنده به استارت آپ', Fa::Pencil())->LinksTo(\controller\ProviderToStartup::class),
//
//]);
$SideBar->Item('مدیریت نگا کلاب', Fa::Cogs())->_items([
    MenuItem::create('سرپرستی مناطق', Fa::Location_arrow())->LinksTo(\controller\Supervisions::class),
    MenuItem::create('نمایندگی ها', Fa::Location_arrow())->LinksTo(\controller\Agencies::class),

]);
//$SideBar->Item('سرپرستی مناطق', Fa::Wrench())->_items([
//    MenuItem::create('سرپرستی مناطق', Fa::Pencil())->LinksTo(\controller\Supervisions::class),
//
//]);
//$SideBar->Item('نمایندگی ها', Fa::Wrench())->_items([
//    MenuItem::create('نمایندگی ها', Fa::Pencil())->LinksTo(\controller\Agencies::class),
//
//]);

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
