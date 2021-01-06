<?
namespace view;
use DOMWrap\Document;
use FwConnection;
use FwHtml\Elements\Tags\Main\HtmlTags;
use View;
class Sizes extends View
{

    public $SingularName = 'سایز';

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
                                                                    HtmlTags::Th('نام'),HtmlTags::Th('آیکون'),
                                                                    HtmlTags::Th('.no-sort عملیات')->Width('150')
                                                                )
                                                            ),
                                                        HtmlTags::Tbody()
                                                            ->Content(
                                                                $this->show(['size_name','showImage'=>'size_icon'])
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
                                    $this->Html()->FormGroupStart(6) .
                                    $this->Html()->Label('نام') .
                                    $this->Html()->Input('size_name') .
                                    $this->Html()->FormGroupEnd() .

                                    $this->Html()->FormGroupStart(6) .
                                    $this->Html()->Label('گروه') .
                                    $this->Html()->Select('product_group_id', 'product_group_id', \model\ProductGroups::toOption()) .
                                    $this->Html()->FormGroupEnd() .

                                    $this->Html()->FormGroupStart(6) .
                                    $this->Html()->Label('زیر گروه') .
                                    $this->Html()->Select('product_sub_group_id', 'product_sub_group_id',\model\ProductSubGroups::toOption()) .
                                    $this->Html()->FormGroupEnd() .

                                    $this->Html()->FormGroupStart(6) .
                                    $this->Html()->Label('تصویر') .
                                    $this->Html()->ImageInput('size_icon', 'image/jpeg', 150, 300) .
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
        