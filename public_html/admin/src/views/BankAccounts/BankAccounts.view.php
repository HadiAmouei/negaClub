<?

namespace view;

use DOMWrap\Document;
use FwHtml\Elements\Tags\Main\HtmlTags;
use View;

class BankAccounts extends View
{

    public $SingularName = 'حساب بانکی' ;

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
                                                                    HtmlTags::Th('نام حساب بانکی'),
                                                                    HtmlTags::Th('نام صاحب حساب'),
                                                                    HtmlTags::Th('نام صاحب کارت'),
                                                                    HtmlTags::Th('.no-sort عملیات')->Width('150')
                                                                )
                                                            ),
                                                        HtmlTags::Tbody()
                                                            ->Content(
                                                                $this->show(['bank_account_name',
                                                                    'bank_account_holder',
                                                                    'bank_account_card_holder'

                                                                ])
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
                                        $this->Html()->FormGroupStart(4) .
                                        $this->Html()->Label('نام حساب بانکی') .
                                        $this->Html()->Input('bank_account_name') .
                                        $this->Html()->FormGroupEnd() .


                                        $this->Html()->FormGroupStart(4) .
                                        $this->Html()->Label('انتخاب بانک') .
                                        $this->Html()->Select('bank_id', 'bank_id', \model\Banks::toOption()) .
                                        $this->Html()->FormGroupEnd() .

                                        $this->Html()->FormGroupStart(4) .
                                        $this->Html()->Label('انتخاب پذیرنده') .
//                                        $this->Html()->Select('provider_id', 'provider_id',\model\Providers::toOption()) .
                                        $this->Html()->Select('provider_id', 'provider_id', \model\Providers::toOption()) .
                                        $this->Html()->FormGroupEnd() .

                                        $this->Html()->FormGroupStart(4) .
                                        $this->Html()->Label('نام صاحب حساب') .
                                        $this->Html()->Input('bank_account_holder') .
                                        $this->Html()->FormGroupEnd() .

                                        $this->Html()->FormGroupStart(4) .
                                        $this->Html()->Label('نام صاحب کارت') .
                                        $this->Html()->Input('bank_account_card_holder') .
                                        $this->Html()->FormGroupEnd() .

                                        $this->Html()->FormGroupStart(4) .
                                        $this->Html()->Label('شماره شبا') .
                                        $this->Html()->Number('bank_account_sheba_number', 'bank_account_sheba_number') .
                                        $this->Html()->FormGroupEnd() .

                                        $this->Html()->FormGroupStart(6) .
                                        $this->Html()->Label('شماره حساب') .
                                        $this->Html()->Number('bank_account_number', 'bank_account_number') .
                                        $this->Html()->FormGroupEnd() .

                                        $this->Html()->FormGroupStart(6) .
                                        $this->Html()->Label('شماره کارت') .
                                        $this->Html()->Number('bank_account_bank_number', 'bank_account_bank_number') .
                                        $this->Html()->FormGroupEnd().
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
