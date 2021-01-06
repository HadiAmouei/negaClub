<?
namespace view;
use DOMWrap\Document;
use FwConnection;
use FwHtml\Elements\Tags\Main\HtmlTags;
use View;
class StartupUsers extends View
{

    public $SingularName = 'کاربران استارت آپ';

    public function main(Document &$document)
    {

        $document->html = $this->Html()->BreadCrumbs() . HtmlTags::Section('.content')
                ->Content(
                    HtmlTags::Div('.row')
                        ->Content(
                            HtmlTags::Div('.col-md-12')->Content(
                                HtmlTags::Div('.card.card-primary.card-outline')
                                    ->Content(
                                        HtmlTags::Div('.card-header')
                                            ->Content(
                                                $this->Html()->CardTitle(),
                                                $this->Html()->refreshAndAdd()
                                            ),
                                        HtmlTags::Div('.card-body.d-flex.flex-wrap')
                                            ->Content(
                                                HtmlTags::Table('.table.table-bordered.table-striped')
                                                    ->Content(
                                                        HtmlTags::Thead('.table-dark')
                                                            ->Content(
                                                                HtmlTags::Tr()->Content(
                                                                    HtmlTags::Th('ردیف')->Width('50'),
                                                                    HtmlTags::Th('نام استارتاپ'),
                                                                    HtmlTags::Th('مشتری'),
                                                                    HtmlTags::Th('.no-sort عملیات')->Width('150'),
                                                                    HtmlTags::Th('.no-sort وضعیت')->Width('150')
                                                                )
                                                            ),
                                                        HtmlTags::Tbody()
                                                            ->Content(
                                                                $this->show([
                                                                    'startup_name'=>new \model\Startups(),
                                                                    'customer_id' => function ($item) {
                                                                        $mCustomers = new \model\Customers();
                                                                        $mIndividuals = new \model\Individuals();
                                                                        $id = $mCustomers->get($item);
                                                                        $id = $mIndividuals->get($id->individual_id);
                                                                        $fullName = $id->first_name . $id->last_name;
                                                                        return $fullName;
                                                                    },
                                                                ],false,true,true)
                                                            )
                                                    )
                                            )
                                    )
                            )
                        )
                );
    }
    
    public function Form()
    {
        var_dump($this->getData());

        return $this->Html()->BreadCrumbs() .HtmlTags::Section('.content')
    ->Content(
        HtmlTags::Div('.row')
            ->Content(
                HtmlTags::Div('.col-md-12')->Content(
                    HtmlTags::Div('.card.card-primary.card-outline')
                        ->Content(
                            HtmlTags::Div('.card-header')
                                ->Content(
                                    $this->Html()->CardTitle(),
                                    $this->Html()->refreshAndBack()
                                ),
                                    $this->Html()->FormStart().
                                    $this->Html()->FormGroupStart(6) .
                                    $this->Html()->Label('نام استارتاپ') .
                                    $this->Html()->Select('startup_id','startup_id',\model\Startups::toOption()) .
                                    $this->Html()->FormGroupEnd() .
//
//                                    $this->Html()->FormGroupStart(6) .
//                                    $this->Html()->Label('انتخاب شخص') .
//                                    $this->quickAdd(
//                                        $this->Html()->Select('customer_id', 'customer_id', \model\Customers::toOption()),
//                                        new \controller\Customers()) .
//                                    $this->Html()->FormGroupEnd() .

                                    $this->Html()->FormGroupStart(6) .
                                    $this->Html()->Label('مشتری') .
                                    $this->Html()->Select('customer_id','customer_id','',true,true) .
                                    $this->Html()->FormGroupEnd() .

                                    $this->Html()->FormGroupStart(4).
                                    $this->Html()->Label('اعتبار') .
                                    $this->Html()->Price('User_credit', 'User_credit') .
                                    $this->Html()->FormGroupEnd() .

                                    $this->Html()->FormGroupStart(4) .
                                    $this->Html()->Label('امتیاز') .
                                    $this->Html()->Number('User_score', 'User_score') .
                                    $this->Html()->FormGroupEnd() .

                                    $this->Html()->FormGroupStart(4) .
                                    $this->Html()->Label('موبایل') .
                                    $this->Html()->Mobile('User_mobile') .
                                    $this->Html()->FormGroupEnd() .

                                    $this->Html()->CardFooter()
                        )
                )
            )
    );
    }
    
    public function add(Document &$document)
    {
        $document->html = $this->Form();
    }
    
    public function edit(Document &$document)
    {
        $this->doFill();
        $document->html = $this->Form();
    }
    
    public function delete(Document &$document)
    {
        $this->doFill();
        $this->doDisableAll();
        $document->html = $this->Form();
    }
    
    public function view(Document &$document)
    {
        $this->doFill();
        $this->doDisableAll();
        $document->html = $this->Form();
    }

}
        