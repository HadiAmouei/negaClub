<?
namespace view;
use DOMWrap\Document;
use FwHtml\Elements\Tags\Main\HtmlTags;
use View;
class Agencies extends View
{

    public $PluralName = 'نمایندگی ها';
    public $SingularName = 'نمایندگی ';

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
                                                                    HtmlTags::Th('نام'),
                                                                    HtmlTags::Th('سرپرستی'),
                                                                    HtmlTags::Th('مدیر'),


                                                                    HtmlTags::Th('.no-sort عملیات')->Width('150'),
                                                                    HtmlTags::Th('.no-sort وضعیت')->Width('150')
                                                                )
                                                            ),
                                                        HtmlTags::Tbody()
                                                            ->Content(
                                                                $this->show(['agency_name','supervision_name'=>new \model\Supervisions()],'','',true)
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
                                    $this->Html()->FormGroupStart(4) .
                                    $this->Html()->Label('نام') .
                                    $this->Html()->Input('agency_name') .
                                    $this->Html()->FormGroupEnd() .
                                    $this->Html()->FormGroupStart(4) .
                                    $this->Html()->Label('رمز عبور') .
                                    $this->Html()->Password('agency_password') .
                                    $this->Html()->FormGroupEnd() .
                                    $this->Html()->FormGroupStart(4) .
                                    $this->Html()->Label('ایمیل') .
                                    $this->Html()->Email('agency_email','','',false) .
                                    $this->Html()->FormGroupEnd() .
                                    $this->Html()->FormGroupStart(4) .
                                    $this->Html()->Label('شماره تماس') .
                                    $this->Html()->Tel('agency_phone','','',false) .
                                    $this->Html()->FormGroupEnd() .
                                    $this->Html()->FormGroupStart(4) .
                                    $this->Html()->Label('سرپرستی') .
                                    $this->Html()->Select('supervision_id','',\model\Supervisions::toOption()) .
                                    $this->Html()->FormGroupEnd() .
                                    $this->Html()->FormGroupStart(4) .
                                    $this->Html()->Label('مدیر') .
                                    $this->Html()->Select('individual_id', 'individual_id', \model\Individuals::toOption()),
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
        