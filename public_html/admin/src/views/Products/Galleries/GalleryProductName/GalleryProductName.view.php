<?

namespace view;

use DOMWrap\Document;
use FwHtml\Elements\Tags\Main\HtmlTags;
use View;

class GalleryProductName extends View
{

    public $SingularName = 'گالری نام محصول';

    public function main(Document &$document)
    {

        $echo = false;
        if ($_REQUEST['product_id']) {
            $echo = true;
            $nameData = (new \model\ProductsName())->get($_REQUEST['product_id']);
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
                                                $this->Html()->refreshAndAdd('', ['product_id', $_REQUEST['product_id']]),
                                                ($echo ? ' تصاویر ' . $nameData->product_name : '')
                                            ),
                                        HtmlTags::Div('.card-body.d-flex.flex-wrap')
                                            ->Content(
                                                HtmlTags::Table('.table.table-bordered.table-striped')
                                                    ->Content(
                                                        HtmlTags::Thead('.table-dark')
                                                            ->Content(
                                                                HtmlTags::Tr()->Content(
                                                                    HtmlTags::Th('ردیف')->Width('50'),
                                                                    HtmlTags::Th('نام تصویر'), HtmlTags::Th('نام محصول'), HtmlTags::Th('تصویر'),
                                                                    HtmlTags::Th('.no-sort عملیات')->Width('150')
                                                                )
                                                            ),
                                                        HtmlTags::Tbody()
                                                            ->Content(
                                                                $this->show(['gallery_product_name_name',
                                                                    'product_name'=>new \model\ProductsName(),
                                                                    'showImage' => 'gallery_product_name_image'
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
        $nameRow = '';

        if ($_GET[1]) {
            $nameData = \model\ProductsName::get($_GET[1]);
            $nameRow = '<option value="' . $nameData->product_id . '">' . $nameData->product_name . '</option>';
            $echo = true;
        } else {
            $name_all = \model\ProductsName::getAllActives();
            $nameRow .= '<option value="">یک گزینه را انتخاب کنید</option>';
            foreach ($name_all as $i) {
                $nameRow .= '<option value="' . $i->product_id . '">' . $i->product_name . '</option>';
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
                                                ($echo ? ' افزودن تصویر برای ' . $nameData->product_name : '')

                                            ),
                                        $this->Html()->FormStart() .
                                        $this->Html()->FormGroupStart(4) .
                                        $this->Html()->Label('نام محصول') .
                                        $this->Html()->Select('product_id', 'product_id', $nameRow) .
                                        $this->Html()->FormGroupEnd() .

                                        $this->Html()->FormGroupStart(4) .
                                        $this->Html()->Label('نام تصویر') .
                                        $this->Html()->Input('gallery_product_name_name') .
                                        $this->Html()->FormGroupEnd() .

                                        $this->Html()->FormGroupStart(4) .
                                        $this->Html()->Label('تصویر') .
                                        $this->Html()->ImageInput('gallery_product_name_image', '1', 1, 1) .
                                        $this->Html()->FormGroupEnd() .

                                        $this->Html()->FormGroupStart(12) .
                                        $this->Html()->Label('توضیحات') .
                                        $this->Html()->Input('gallery_product_name_desc') .
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
        