<?
namespace view;
use DOMWrap\Document;
use FwHtml\Elements\Tags\Main\HtmlTags;
use View;
class Startups extends View
{

    public $SingularName = 'استارتاپ';

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
                                                                    HtmlTags::Th('نام استارتاپ'),HtmlTags::Th('آی پی سرور'),HtmlTags::Th('توضیحات'),
                                                                    HtmlTags::Th('.no-sort عملیات')->Width('150')
                                                                )
                                                            ),
                                                        HtmlTags::Tbody()
                                                            ->Content(
                                                                $this->show(['startup_name','startup_ip','startup_details'])
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
                            $this->Html()->Label('نام استارتاپ') .
                            $this->Html()->Input('startup_name') .
                            $this->Html()->FormGroupEnd() .
                            
                            $this->Html()->FormGroupStart(4) .
                            $this->Html()->Label('لوگو استارتاپ') .
                            $this->Html()->ImageInput('startup_logo','image/png',225,225).
                            $this->Html()->FormGroupEnd() .
                            
                            $this->Html()->FormGroupStart(4) .
                            $this->Html()->Label('آی پی سرور') .
                            $this->Html()->Ip('startup_ip') .
                            $this->Html()->FormGroupEnd() .
                            
                            $this->Html()->FormGroupStart(12) .
                            $this->Html()->Label('توضیحات') .
                            $this->Html()->Input('startup_details') .
                            $this->Html()->FormGroupEnd()  .
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
