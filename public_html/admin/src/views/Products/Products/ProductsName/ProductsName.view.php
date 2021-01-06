<?

namespace view;

use DOMWrap\Document;
use FwHtml\Elements\Tags\Main\HtmlTags;
use View;

class ProductsName extends View
{

    public $SingularName = 'نام محصول';

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
                                                                    HtmlTags::Th('نام'), HtmlTags::Th('گروه'), HtmlTags::Th('زیر گروه'), HtmlTags::Th('زیر , زیر گروه'),
                                                                    HtmlTags::Th('.no-sort عملیات')->Width('150') ,
                                                                    HtmlTags::Th('.no-sort وضعیت')->Width('150')
                                                                )
                                                            ),
                                                        HtmlTags::Tbody()
                                                            ->Content(
                                                                $this->show([
                                                                    'product_name',
                                                                    'product_groups_name'=>new \model\ProductGroups(),
                                                                    'product_sub_group_name'=>new \model\ProductSubGroups(),
                                                                    'product_sub_sub_group_name'=>new \model\ProductSubSubGroups()
                                                                ],true,true,true, function ($item) {
                                                                    return HtmlTags::Button('.btn.btn-outline-warning.m-1.ajax')->Content(
                                                                        HtmlTags::I('.fa.fa-camera')
                                                                    )->Data_('toggle', 'tooltip')->Title('تصاویر نام محصول')->Rel((new \controller\GalleryProductName())->RelPath(['product_id' => $item->product_id
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
                                        $this->Html()->Select('product_group_id', 'product_group_id',\model\ProductGroups::toOption()) .
                                        $this->Html()->FormGroupEnd() .

                                        $this->Html()->FormGroupStart(4) .
                                        $this->Html()->Label('زیر گروه') .
                                        $this->Html()->Select('product_sub_group_id', 'product_sub_group_id', \model\ProductSubGroups::toOption()) .
                                        $this->Html()->FormGroupEnd() .

                                        $this->Html()->FormGroupStart(4) .
                                        $this->Html()->Label('زیر , زیر گروه') .
                                        $this->Html()->Select('product_sub_sub_group_id', 'product_sub_sub_group_id', \model\ProductSubSubGroups::toOption()) .
                                        $this->Html()->FormGroupEnd() .

                                        $this->Html()->FormGroupStart(6) .
                                        $this->Html()->Label('نام') .
                                        $this->Html()->Input('product_name') .
                                        $this->Html()->FormGroupEnd() .

                                        $this->Html()->FormGroupStart(6) .
                                        $this->Html()->Label('تصویر') .
                                        $this->Html()->ImageInput('product_image', 'image/jpeg', 150, 300) .
                                        $this->Html()->FormGroupEnd() .


                                        $this->Html()->FormGroupStart(4) .
                                        '<input type="checkbox" id="product_color">'.
                                        $this->Html()->Label('آیا نیاز به انتخاب رنگ دارید؟') .
                                        $this->Html()->Select('color_id', 'color_id',\model\Colors::toOption(), false) .
                                        $this->Html()->FormGroupEnd() .
                                        $this->Html()->FormGroupStart(8) .
                                        $this->Html()->FormGroupEnd() .


                                        $this->Html()->FormGroupStart(4) .
                                        '<input type="checkbox" id="product_size">'.
                                        $this->Html()->Label('آیا نیاز به انتخاب سایز دارید؟') .
                                        $this->Html()->Select('size_id', 'size_id', \model\Sizes::toOption(), false) .
                                        $this->Html()->FormGroupEnd() .
                                        $this->Html()->FormGroupStart(8) .
                                        $this->Html()->FormGroupEnd() .


                                        $this->Html()->FormGroupStart(4) .
                                        '<input type="checkbox" id="product_material">'.
                                        $this->Html()->Label('آیا نیاز به انتخاب متریال دارید؟') .
                                        $this->Html()->Select('material_id', 'material_id',\model\Materials::toOption(), false) .
                                        $this->Html()->FormGroupEnd() .
                                        $this->Html()->FormGroupStart(8) .
                                        $this->Html()->FormGroupEnd() .


                                        $this->Html()->FormGroupStart(4) .
                                        '<input type="checkbox" id="product_weights">'.
                                        $this->Html()->Label('آیا نیاز به انتخاب وزن دارید؟') .
                                        '<div class="input-group mb-3 col-12"  id="product_weight">
                                        <span class="input-group-text">وزن</span>
                                        <input type="text" class="form-control" placeholder="مثال:2" name="product_weight">
                                        <span class="input-group-text">گرم</span>
                                        </div>' .
                                        $this->Html()->FormGroupEnd() .
                                        $this->Html()->FormGroupStart(8) .
                                        $this->Html()->FormGroupEnd() .


                                        $this->Html()->FormGroupStart(4) .
                                        '<input type="checkbox" id="product_dimension">'.
                                        $this->Html()->Label('آیا نیاز به انتخاب ابعاد دارید؟') .
                                        '<br>' .
                                        '<div class="input-group mb-3 col-12"  id="product_length">
                                         <span class="input-group-text">طول</span>
                                         <input type="text" class="form-control" placeholder="مثال:2" name="product_length">
                                         <span class="input-group-text">سانتی متر</span>
                                         </div>' .
                                        '<div class="input-group mb-3 col-12" id="product_width">
                                         <span class="input-group-text">عرض</span>
                                         <input type="text" class="form-control" placeholder="مثال:2" name="product_width">
                                         <span class="input-group-text">سانتی متر</span>
                                         </div>' .
                                        '<div class="input-group mb-3 col-12" id="product_height">
                                         <span class="input-group-text">ارتفاع</span>
                                         <input type="text" class="form-control" placeholder="مثال:2" name="product_height">
                                         <span class="input-group-text">سانتی متر</span>
                                         </div>' .
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
        