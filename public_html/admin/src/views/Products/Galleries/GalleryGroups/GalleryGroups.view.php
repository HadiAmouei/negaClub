<?
namespace view;
use DOMWrap\Document;
use FwHtml\Elements\Tags\Main\HtmlTags;
use View;
class GalleryGroups extends View
{

    public $SingularName = 'گالری محصول';

    public function main(Document &$document)
    {

        $echo = false;
        if ($_REQUEST['product_group_id']){
            $echo = true;
            $groupData = (new \model\ProductGroups())->get($_REQUEST['product_group_id']);
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
                                                 $this->Html()->refreshAndAdd('',['product_group_id',$_REQUEST['product_group_id']]),
                                                ($echo ? ' تصاویر '.$groupData->product_groups_name : '')
                                            ),
                                        HtmlTags::Div('.card-body.d-flex.flex-wrap')
                                            ->Content(
                                                HtmlTags::Table('.table.table-bordered.table-striped')
                                                    ->Content(
                                                        HtmlTags::Thead('.table-dark')
                                                            ->Content(
                                                                HtmlTags::Tr()->Content(
                                                                    HtmlTags::Th('ردیف')->Width('50'),
                                                                    HtmlTags::Th('نام تصویر'),HtmlTags::Th('گروه'),HtmlTags::Th('تصویر'),
                                                                    HtmlTags::Th('.no-sort عملیات')->Width('150')
                                                                )
                                                            ),
                                                        HtmlTags::Tbody()
                                                            ->Content(
                                                                $this->show(['gallery_group_name',
                                                                    'product_groups_name'=>new \model\ProductGroups(),
                                                                    'showImage'=>'gallery_group_image',
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

        $groupRow='';

        if ($_GET[1]) {
            $groupData =\model\ProductGroups::get($_GET[1]);
            $groupRow = '<option value="'.$groupData->product_group_id.'">'.$groupData->product_groups_name.'</option>';
            $echo = true;
        }else{
            $group_all =\model\ProductGroups::getAllActives();
            $groupRow .= '<option value="">یک گزینه را انتخاب کنید</option>';
            foreach ($group_all as $i){
                $groupRow .= '<option value="'.$i->product_group_id.'">'.$i->product_groups_name.'</option>';
            }
        }

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
                                    $this->Html()->refreshAndBack(),
                                    HtmlTags::Br(),
                                    ($echo ? ' افزودن تصویر برای '.$groupData->product_groups_name : '')
                                ),
                                    $this->Html()->FormStart().
                                      $this->Html()->FormGroupStart(4) .
                            $this->Html()->Label('گروه') .
                            $this->Html()->Select('product_group_id', 'product_group_id', $groupRow) .
                            $this->Html()->FormGroupEnd() .
                            
                            $this->Html()->FormGroupStart(4) .
                            $this->Html()->Label('نام تصویر') .
                            $this->Html()->Input('gallery_group_name') .
                            $this->Html()->FormGroupEnd() .
                            
                            $this->Html()->FormGroupStart(4) .
                            $this->Html()->Label('تصویر') .
                            $this->Html()->ImageInput('gallery_group_image','1',1,1).
                            $this->Html()->FormGroupEnd() .
                            
                            $this->Html()->FormGroupStart(12) .
                            $this->Html()->Label('توضیحات') .
                            $this->Html()->Input('gallery_group_desc') .
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
        