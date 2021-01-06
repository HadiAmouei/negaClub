<?
namespace view;
use DOMWrap\Document;
use FwHtml\Elements\Tags\Main\HtmlTags;
use View;
class Startups extends View
{

    public $SingularName = 'استارت آپ';

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
                                                                    HtmlTags::Th('نام استارتاپ'),
                                                                    HtmlTags::Th('آی پی سرور'),
                                                                    HtmlTags::Th('لگو'),
                                                                    HtmlTags::Th('.no-sort عملیات')->Width('150') ,
                                                                    HtmlTags::Th('.no-sort وضعبت')->Width('150')
                                                                )
                                                            ),
                                                        HtmlTags::Tbody()
                                                            ->Content(
                                                                $this->show(['startup_name','startup_ip','showImage'=>'startup_logo'] ,false,true,true)
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
                            $this->Html()->FormGroupStart(6) .
                            $this->Html()->Label('نام استارتاپ') .
                            $this->Html()->Input('startup_name') .
                            $this->Html()->FormGroupEnd() .

                            $this->Html()->FormGroupStart(6) .
                            $this->Html()->Label('آی پی سرور') .
                            $this->Html()->Ip('startup_ip') .
                            $this->Html()->FormGroupEnd() .

                            $this->Html()->FormGroupStart(6) .
                            $this->Html()->Label('شهر ها') .
                            $this->Html()->Select('city_id[]', 'city_id', \model\Cities::toOption(), true, false, 'form-control', true) .
                            $this->Html()->FormGroupEnd() .

                            $this->Html()->FormGroupStart(6) .
                            $this->Html()->Label('لوگو استارتاپ') .
                            $this->Html()->ImageInput('startup_logo', 'image/png', 225, 225) .
                            $this->Html()->FormGroupEnd() .

                            $this->Html()->FormGroupStart(12) .
                            $this->Html()->Label('توضیحات') .
                            $this->Html()->Input('startup_details') .
                            $this->Html()->FormGroupEnd() .

                            $this->Html()->FormGroupStart(12) .
                            $this->Html()->Label('محاسبات امتیاز و اعتبار') .
                            $this->Html()->FormGroupEnd() .

                            $this->Html()->FormGroupStart(6) .
                            '
  <label for="demo" class="sTOs">تبدیل امتیاز  به امتیاز نگا کلاب</label>
<div class="input-group mb-3">
 <span class="input-group-text">هر</span>
  <input type="text" class="form-control" placeholder="مثال:2" id="score_to_club_score" name="score_to_club_score">
  <span class="input-group-text">امتیاز</span>
  <div class="input-group-append">
  <input type="text" class="form-control" placeholder="مثال:2" id="club_score_from_score" name="club_score_from_score">
  <span class="input-group-text">امتیاز نگا کلاب</span>
  </div>
</div>
' .
                            $this->Html()->FormGroupEnd() .

                            $this->Html()->FormGroupStart(6) .
                            $this->Html()->FormGroupEnd() .

                            $this->Html()->FormGroupStart(6) .
                            '
  <label for="demo" class="sTOe">تبدیل امتیاز به اعتبار نگا کلاب</label>
<div class="input-group mb-3">
 <span class="input-group-text">هر</span>
  <input type="text" class="form-control" placeholder="مثال:2" id="score_to_club_credit" name="score_to_club_credit">
  <span class="input-group-text">امتیاز</span>
  <div class="input-group-append">
  <input type="text" class="form-control" placeholder="مثال:2,000 تومان" id="club_credit_from_score" name="club_credit_from_score">
  <span class="input-group-text">اعتبار نگا کلاب</span>
  </div>
</div>
' .
                            $this->Html()->FormGroupEnd() .

                            $this->Html()->FormGroupStart(6) .
                            $this->Html()->FormGroupEnd() .

                            $this->Html()->FormGroupStart(6) .
                            '
  <label for="demo" class="eTOs">تبدیل اعتبار به امتیاز نگا کلاب</label>
<div class="input-group mb-3">
 <span class="input-group-text">هر</span>
  <input type="text" class="form-control" placeholder="مثال:2,000 تومان" id="credit_to_club_score" name="credit_to_club_score">
  <span class="input-group-text">اعتبار</span>
  <div class="input-group-append">
  <input type="text" class="form-control" placeholder="مثال:2" id="club_score_from_credit" name="club_score_from_credit">
  <span class="input-group-text">امتیاز نگا کلاب</span>
  </div>
</div>
' .
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
        