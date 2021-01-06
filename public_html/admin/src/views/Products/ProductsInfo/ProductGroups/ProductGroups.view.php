<?
namespace view;
use DOMWrap\Document;
use FwHtml\Elements\Tags\Main\HtmlTags;
use View;
class ProductGroups extends View
{

    public $SingularName = 'گروه محصول';

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
                                                                    HtmlTags::Th('.no-sort عملیات')->Width('150'),
                                                                    HtmlTags::Th('.no-sort وضعیت')->Width('150')
                                                                )
                                                            ),
                                                        HtmlTags::Tbody()
                                                            ->Content(
                                                                $this->show(['product_groups_name'],true,true,true, function ($item) {
                                                                    return HtmlTags::Button('.btn.btn-outline-warning.m-1.ajax')->Content(
                                                                        HtmlTags::I('.fa.fa-camera')
                                                                    )->Data_('toggle', 'tooltip')->Title('تصاویر گروه')->Rel((new \controller\GalleryGroups())->RelPath(['product_group_id' => $item->product_group_id
                                                                    ]));
                                                                })




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
                            $this->Html()->FormStart() .
                            $this->Html()->FormGroupStart(4) .
                            $this->Html()->Label('نام') .
                            $this->Html()->Input('product_groups_name') .
                            $this->Html()->FormGroupEnd() .

                            $this->Html()->FormGroupStart(4) .
                            $this->Html()->Label('آیکون') .
                            $this->Html()->ImageInput('product_groups_icon', 'image/jpeg', 150, 150) .
                            $this->Html()->FormGroupEnd() .

                            $this->Html()->FormGroupStart(4) .
                            $this->Html()->Label('تصویر') .
                            $this->Html()->ImageInput('product_groups_image', 'image/jpeg', 150, 150) .
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
        