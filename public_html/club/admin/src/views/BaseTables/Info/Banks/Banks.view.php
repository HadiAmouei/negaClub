<?

namespace view;

use DOMWrap\Document;
use FwHtml\Elements\Tags\Main\HtmlTags;
use View;

class Banks extends View
{

    public $SingularName = 'بانک';

//    public function main(Document &$document)
//    {
//        $document->html = $this->Html()->BreadCrumbs() . HtmlTags::Section('.content')
//                ->Content(
//                    HtmlTags::Div('.row')
//                        ->Content(
//                            HtmlTags::Div('.col-md-12')->Content(
//                                HtmlTags::Div('.card.card-primary.card-outline')
//                                    ->Content(
//                                        HtmlTags::Div('.card-header')
//                                            ->Content(
//                                                $this->Html()->CardTitle(),
//                                                $this->Html()->refreshAndAdd()
//                                            ),
//                                        HtmlTags::Div('.card-body.d-flex.flex-wrap')
//                                            ->Content(
//                                                HtmlTags::Table('.table.table-bordered.table-striped')
//                                                    ->Content(
//                                                        HtmlTags::Thead('.table-dark')
//                                                            ->Content(
//                                                                HtmlTags::Tr()->Content(
//                                                                    HtmlTags::Th('ردیف')->Width('50'),
//                                                                    HtmlTags::Th('نام بانک'),
//                                                                    HtmlTags::Th('لوگو'),
//                                                                    HtmlTags::Th('.no-sort عملیات')->Width('150')
////                                                                    HtmlTags::Th('.no-sort وضعیت')->Width('150')
//                                                                )
//                                                            ),
//                                                        HtmlTags::Tbody()
//                                                            ->Content(
//                                                                $this->show(['bank_name','showImage'=>'bank_logo'],false,true)
//                                                            )
//                                                    )
//                                            )
//                                    )
//                            )
//                        )
//                );
//    }


    public function main(Document &$document)
    {
        echo
        ' 
<div class="container">
<form  class="p-5">
<div id="one" class="row col-12 p-5">
<label for="fname">نام </label>
<input type="text" name="fname" class="col-3 form-control m-auto p-2">
<label for="lnmae">نام خانوادگی</label>
<input type="text" name="lname" class="col-3 form-control m-auto p-2">
<label for="mobile">موبایل</label>
<input type="text" name="mobile" class="col-3 form-control m-auto p-2">
</div>


<div id="two" class="row col-12 p-5">
<label for="fname">سن </label>
<input type="text" name="fname" class="col-3 form-control m-auto p-2">
<label for="lnmae">جنسیت</label>
<input type="text" name="lname" class="col-3 form-control m-auto p-2">
<label for="mobile">تاهل</label>
<input type="text" name="mobile" class="col-3 form-control m-auto p-2">
</div>


<div id="three" class="row col-12 p-5">
<label for="fname">آدرس </label>
<input type="text" name="fname" class="col-3 form-control m-auto p-2">
<label for="lnmae">شهر</label>
<input type="text" name="lname" class="col-3 form-control m-auto p-2">
<label for="mobile">استان</label>
<input type="text" name="mobile" class="col-3 form-control m-auto p-2">
</div>



<div class="row col-12 p-5">
<button type="button" id="p" class="col-2 form-control m-auto p-1">صفحه قبل</input>
<button type="button" id="n" class="col-2 form-control m-auto p-1">صفحه بعد</input>
</div>


</form>

</div>

';
        ?>


        <script>
            $(function () {

                $('#two').hide();
                $('#three').hide();
                $('#p').hide();

                $('#n').on('click', function () {
                    $('#one').hide()    ;
                    $('#tow').show();
                    $(this).attr('id', 'n1');
                    $('#p').show();
                })

                $('#n1').on('click', function () {
                    $('#two').hide();
                    $('#three').show();
                    $(this).attr('id', 'n2');
                })

            })
        </script>

        <?php

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
                                        $this->Html()->Label('نام بانک') .
                                        $this->Html()->Input('bank_name') .
                                        $this->Html()->FormGroupEnd() .

                                        $this->Html()->FormGroupStart(4) .
                                        $this->Html()->Label('لوگو') .
                                        $this->Html()->ImageInput('bank_logo', 'image/jpeg', 150, 300, 'false', 'bank_name', false) .
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
