<?

namespace view;

use DOMWrap\Document;
use FwHtml\Elements\Tags\Main\HtmlTags;
use View;

class PhotoMarks extends View
{

    public $SingularName = 'گالری برند محصول';

    public function main(Document &$document)
    {

        $echo = false;
        if ($_REQUEST['brand_id']) {
            $echo = true;
            $subData = (new \model\Brands())->get($_REQUEST['brand_id']);
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
                                                $this->Html()->refreshAndAdd('', ['brand_id', $_REQUEST['brand_id']]),
                                                ($echo ? ' تصاویر ' . $subData->brand_name : '')

                                            ),
                                        HtmlTags::Div('.card-body.d-flex.flex-wrap')
                                            ->Content(
                                                HtmlTags::Table('.table.table-bordered.table-striped')
                                                    ->Content(
                                                        HtmlTags::Thead('.table-dark')
                                                            ->Content(
                                                                HtmlTags::Tr()->Content(
                                                                    HtmlTags::Th('ردیف')->Width('50'),
                                                                    HtmlTags::Th('نام تصویر'), HtmlTags::Th('برند'), HtmlTags::Th('تصویر'),
                                                                    HtmlTags::Th('.no-sort عملیات')->Width('150')
                                                                )
                                                            ),
                                                        HtmlTags::Tbody()
                                                            ->Content(
                                                                $this->show([
                                                                    'photo_marks_name',
                                                                    'brand_name'=>new \model\Brands(),
                                                                    'showImage' => 'photo_marks_image'
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

        $brandRow = '';

        if ($_GET[1]) {
            $brandData = \model\Brands::get($_GET[1]);
            $brandRow = '<option value="' . $brandData->brand_id . '">' . $brandData->brand_name . '</option>';
            $echo = true;
        } else {
            $brand_all = \model\Brands::getAll();
            $brandRow .= '<option value="" disabled >یک گزینه را انتخاب کنید</option>';
            foreach ($brand_all as $i) {
                $brandRow .= '<option value="' . $i->brand_id . '">' . $i->brand_name . '</option>';
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
                                                ($echo ? ' افزودن تصویر برای ' . $brandData->brand_name : '')

                                            ),
                                        $this->Html()->FormStart() .
                                        $this->Html()->FormGroupStart(4) .
                                        $this->Html()->Label('برند') .
                                        $this->Html()->Select('brand_id', 'brand_id', $brandRow) .
                                        $this->Html()->FormGroupEnd() .

                                        $this->Html()->FormGroupStart(4) .
                                        $this->Html()->Label('نام تصویر') .
                                        $this->Html()->Input('photo_marks_name') .
                                        $this->Html()->FormGroupEnd() .

                                        $this->Html()->FormGroupStart(4) .
                                        $this->Html()->Label('تصویر') .
                                        $this->Html()->ImageInput('photo_marks_image', '1', 1, 1) .
                                        $this->Html()->FormGroupEnd() .

                                        $this->Html()->FormGroupStart(12) .
                                        $this->Html()->Label('توضیحات') .
                                        $this->Html()->Input('photo_marks_desc') .
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
        