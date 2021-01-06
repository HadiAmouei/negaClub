<?

namespace view;

use DOMWrap\Document;
use FwHtml\Elements\Tags\Main\HtmlTags;
use View;

class ProviderToStartup extends View
{

    public $SingularName = 'تخصیص پذیرنده به استارت آپ';

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
                                                                    HtmlTags::Th('استارت آپ'),
                                                                    HtmlTags::Th('پذیرنده'),
                                                                    HtmlTags::Th('نوع قرارداد'),
                                                                    HtmlTags::Th('شماره قرارداد'),
                                                              
                                                                    HtmlTags::Th('.no-sort عملیات')->Width('150'),
                                                                    HtmlTags::Th('.no-sort وضعیت')->Width('150')
                                                                )
                                                            ),
                                                        HtmlTags::Tbody()
                                                            ->Content(
                                                                $this->show(['startup_name'=>new \model\Startups(),
                                                                    'provider_name' =>new \model\Providers(),
                                                                    'contract_type_name'=>new \model\ContractTypes(),
                                                                    'provider_to_startup_contract_number',

                                                                ],true,true,true)
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
        return $this->Html()->BreadCrumbs() . HtmlTags::Section('.content')
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
                                        $this->Html()->FormStart() .

//                                        $this->Html()->FormGroupStart(6) .
//                                        $this->Html()->Label(' استارت آپ') .
//                                        $this->Html()->Select('startup_id', 'startup_id', selectByClass(new \model\Startups())) .
//                                        $this->Html()->FormGroupEnd() .
//
                                        $this->Html()->FormGroupStart(6) .
                                        $this->Html()->Label(' استارت آپ') .
                                        $this->Html()->Select('startup_id', 'startup_id', \model\Startups::toOption()) .
                                        $this->Html()->FormGroupEnd() .
//
                                        $this->Html()->FormGroupStart(6) .
                                        $this->Html()->Label(' پذیرندگان') .
                                        $this->Html()->Select('provider_id', 'provider_id', \model\Providers::toOption()) .
                                        $this->Html()->FormGroupEnd() .

                                        $this->Html()->FormGroupStart(6) .
                                        $this->Html()->Label('شعب پذیرندگان') .
                                        $this->Html()->Select('provider_branch_id[]', 'provider_branch_id', \model\ProviderBranches::toOption(),true,false,'form-control',true) .
                                        $this->Html()->FormGroupEnd() .

                                        $this->Html()->FormGroupStart(4) .
                                        $this->Html()->Label('شماره قرارداد') .
                                        $this->Html()->Number('provider_to_startup_contract_number') .
                                        $this->Html()->FormGroupEnd() .

                                        $this->Html()->FormGroupStart(4) .
                                        $this->Html()->Label('تاریخ شروع قرارداد') .
                                        $this->Html()->Input('provider_to_startup_start_date') .
                                        $this->Html()->FormGroupEnd() .

                                        $this->Html()->FormGroupStart(4) .
                                        $this->Html()->Label('تاریخ پایان قرارداد') .
                                        $this->Html()->Input('provider_to_startup_end_date') .
                                        $this->Html()->FormGroupEnd() .

                                        $this->Html()->FormGroupStart(12) .
                                        $this->Html()->Label('انواع قرارداد') .
                                        $this->Html()->Select('contracttype_id', 'contracttype_id', \model\ContractTypes::toOption()) .
                                        $this->Html()->FormGroupEnd() .

                                        $this->Html()->FormGroupStart(4,'','provider_to_startup_cash_discount_div') .
                                        $this->Html()->Label('درصد تخفیف نقدی') .
                                        $this->Html()->Percent('provider_to_startup_cash_discount','provider_to_startup_cash_discount','',false) .
                                        $this->Html()->FormGroupEnd() .

                                        $this->Html()->FormGroupStart(4,'','provider_to_startup_credit_discount_div') .
                                        $this->Html()->Label('درصد تخفیف اعتباری','') .
                                        $this->Html()->Percent('provider_to_startup_credit_discount','provider_to_startup_credit_discount','',false) .
                                        $this->Html()->FormGroupEnd() .

                                        $this->Html()->FormGroupStart(4,'','provider_to_startup_month_ssettlement_div') .
                                        $this->Html()->Label('تعداد ماه های تسویه') .
                                        $this->Html()->Number('provider_to_startup_month_ssettlement','provider_to_startup_month_ssettlement','',false) .
                                        $this->Html()->FormGroupEnd() .

                                        $this->Html()->FormGroupStart(10) .
                                        '<label class="d-block" style="font-size: 150%">محاسبه امتیاز</label>' .
                                        ' هر ' . $this->Html()->SmallInputNumber('provider_to_startup_each_buy', 'provider_to_startup_each_buy', '', false) .
                                        ' خرید = ' .
                                        $this->Html()->SmallInputNumber('provider_to_startup_score_per_buy', 'provider_to_startup_score_per_buy', '', false) .
                                        ' امتیاز '.
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
        