<?

namespace view;

use DOMWrap\Document;
use FwHtml\Elements\Tags\Main\HtmlTags;
use View;

class ProductSubSubGroups extends View
{

    public $SingularName = 'زیر, زیر گروه محصول';

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

                                                                    HtmlTags::Th('گروه'),
                                                                    HtmlTags::Th('زیر گروه'),
                                                                    HtmlTags::Th('زیر زیر گروه'),
                                                                    HtmlTags::Th('آیکون'),
                                                                    HtmlTags::Th('تصویر'),
                                                                    HtmlTags::Th('.no-sort عملیات')->Width('150'),
                                                                    HtmlTags::Th('.no-sort وضعیت')->Width('150')
                                                                )
                                                            ),
                                                        HtmlTags::Tbody()
                                                            ->Content(
                                                          $this->show(['product_groups_name'=>new \model\ProductGroups(),'product_sub_group_name'=>new \model\ProductSubGroups() , 'product_sub_sub_group_name', 'showImage'=>'product_sub_sub_group_icon', 'ShowImage'=>'product_sub_sub_group_image'],true,true,true, function ($item) {
                                                              return HtmlTags::Button('.btn.btn-outline-warning.m-1.ajax')->Content(
                                                                  HtmlTags::I('.fa.fa-camera')
                                                              )->Data_('toggle', 'tooltip')->Title('تصاویر زیر زیر گروه')->Rel((new \controller\GallerySubSubGroups())->RelPath(['product_sub_sub_group_id' => $item->product_sub_sub_group_id
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
                                        $this->Html()->Label('گروه') .
                                        $this->Html()->Select('product_group_id', 'product_group_id', \model\ProductGroups::toOption()) .
                                        $this->Html()->FormGroupEnd() .

                                        $this->Html()->FormGroupStart(4) .
                                        $this->Html()->Label('زیر گروه') .
                                        $this->Html()->Select('product_sub_group_id', 'product_sub_group_id', \model\ProductSubGroups::toOption()) .
                                        $this->Html()->FormGroupEnd() .

                                        $this->Html()->FormGroupStart(4) .
                                        $this->Html()->Label('نام') .
                                        $this->Html()->Input('product_sub_sub_group_name') .
                                        $this->Html()->FormGroupEnd() .

                                        $this->Html()->FormGroupStart(4) .
                                        $this->Html()->Label('آیکون') .
                                        $this->Html()->ImageInput('product_sub_sub_group_icon', 'image/jpeg', 150, 150) .

                                        $this->Html()->FormGroupEnd() .

                                        $this->Html()->FormGroupStart(4) .
                                        $this->Html()->Label('تصویر') .
                                        $this->Html()->ImageInput('product_sub_sub_group_image', 'image/jpeg', 150, 150) .

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
        