<?

namespace view;

use DOMWrap\Document;
use FwHtml\Elements\Tags\Main\HtmlTags;
use View;

class GallerySubGroups extends View
{

    public $SingularName = 'گالری زیر گروه محصول';

    public function main(Document &$document)
    {
        $echo = false;
        if ($_REQUEST['product_sub_group_id']) {
            $echo = true;
            $subData = (new \model\ProductSubGroups())->get($_REQUEST['product_sub_group_id']);
        }

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
                                                $this->Html()->refreshAndAdd('', ['product_sub_group_id', $_REQUEST['product_sub_group_id']]),
                                                ($echo ? ' تصاویر ' . $subData->product_sub_group_name : '')

                                            ),
                                        HtmlTags::Div('.card-body.d-flex.flex-wrap')
                                            ->Content(
                                                HtmlTags::Table('.table.table-bordered.table-striped')
                                                    ->Content(
                                                        HtmlTags::Thead('.table-dark')
                                                            ->Content(
                                                                HtmlTags::Tr()->Content(
                                                                    HtmlTags::Th('ردیف')->Width('50'),
                                                                    HtmlTags::Th('نام تصویر'), HtmlTags::Th('زیر گروه'), HtmlTags::Th('تصویر'),
                                                                    HtmlTags::Th('.no-sort عملیات')->Width('150')
                                                                )
                                                            ),
                                                        HtmlTags::Tbody()
                                                            ->Content(
                                                                $this->show(['gallery_sub_groups_name',
                                                                    'product_sub_group_name'=>new \model\ProductSubGroups(),
                                                                    'showImage' => 'gallery_sub_groups_image'
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
        $subRow = '';

        if ($_GET[1]) {
            $subData = \model\ProductSubGroups::get($_GET[1]);
            $subRow = '<option value="' . $subData->product_sub_group_id . '">' . $subData->product_sub_group_name . '</option>';
            $echo = true;
        } else {
            $sub_group_all = \model\ProductSubGroups::getAllActives();
            $subRow .= '<option value="">یک گزینه را انتخاب کنید</option>';
            foreach ($sub_group_all as $i) {
                $subRow .= '<option value="' . $i->product_sub_group_id . '">' . $i->product_sub_group_name . '</option>';
            }
        }

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
                                                $this->Html()->refreshAndBack(),
                                                HtmlTags::Br(),
                                                ($echo ? ' افزودن تصویر برای ' . $subData->product_sub_group_name : '')
                                            ),
                                        $this->Html()->FormStart() .
                                        $this->Html()->FormGroupStart(4) .
                                        $this->Html()->Label('زیر گروه') .
                                        $this->Html()->Select('product_sub_group_id', 'product_sub_group_id', $subRow, 'product_sub_group_name') .
                                        $this->Html()->FormGroupEnd() .

                                        $this->Html()->FormGroupStart(4) .
                                        $this->Html()->Label('نام تصویر') .
                                        $this->Html()->Input('gallery_sub_groups_name') .
                                        $this->Html()->FormGroupEnd() .

                                        $this->Html()->FormGroupStart(4) .
                                        $this->Html()->Label('تصویر') .
                                        $this->Html()->ImageInput('gallery_sub_groups_image', '1', 1, 1) .
                                        $this->Html()->FormGroupEnd() .

                                        $this->Html()->FormGroupStart(12) .
                                        $this->Html()->Label('توضیحات') .
                                        $this->Html()->Input('gallery_sub_groups_desc') .
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
        