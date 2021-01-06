<?

namespace view;

use DOMWrap\Document;
use FwHtml\Elements\Tags\Main\HtmlTags;
use View;

class Visitors extends View {
	
	public $SingularName = 'بازاریاب';
	
	public function main(Document &$document) {
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
																	HtmlTags::Th('جنسیت'), HtmlTags::Th('نام'), HtmlTags::Th('نام خانوادگی'),
																	HtmlTags::Th('.no-sort عملیات')->Width('150')
																)
															),
														HtmlTags::Tbody()
															->Content(
																$this->show([
																	'visitor_gender',
																	'visitor_first_name',
																	'visitor_last_name',
																])
															)
													)
											)
									)
							)
						)
				);
	}
	
	public function add(Document &$document) {
		$document->html = $this->Form();
	}
	
	public function Form() {
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
										$this->Html()->Label('جنسیت') .
										$this->Html()->Input('visitor_gender') .
										$this->Html()->FormGroupEnd() .
										$this->Html()->FormGroupStart(4) .
										$this->Html()->Label('نام') .
										$this->Html()->Input('visitor_first_name') .
										$this->Html()->FormGroupEnd() .
										$this->Html()->FormGroupStart(4) .
										$this->Html()->Label('نام خانوادگی') .
										$this->Html()->Input('visitor_last_name') .
										$this->Html()->FormGroupEnd() .
										$this->Html()->FormGroupStart(4) .
										$this->Html()->Label('شماره شناسنامه') .
										$this->Html()->Input('visitor_national_code') .
										$this->Html()->FormGroupEnd() .
										$this->Html()->FormGroupStart(4) .
										$this->Html()->Label('نام کاربری معرف') .
										$this->Html()->Input('visitor_referer_username') .
										$this->Html()->FormGroupEnd() .
										$this->Html()->FormGroupStart(4) .
										$this->Html()->Label('تاریخ تولد') .
										$this->Html()->Input('visitor_birthdate') .
										$this->Html()->FormGroupEnd() .
										$this->Html()->FormGroupStart(4) .
										$this->Html()->Label('موبایل') .
										$this->Html()->Mobile('visitor_mobile', 'visitor_mobile') .
										$this->Html()->FormGroupEnd() .
										$this->Html()->FormGroupStart(4) .
										$this->Html()->Label('تلفن') .
										$this->Html()->Tel('visitor_telephone', 'visitor_telephone') .
										$this->Html()->FormGroupEnd() .
										$this->Html()->FormGroupStart(4) .
										$this->Html()->Label('کد پستی') .
										$this->Html()->Input('visitor_post_code') .
										$this->Html()->FormGroupEnd() .
										$this->Html()->FormGroupStart(4) .
										$this->Html()->Label('انتخاب استان') .
										$this->Html()->Select('state_id', 'state_id', '') .
										$this->Html()->FormGroupEnd() .
										$this->Html()->FormGroupStart(4) .
										$this->Html()->Label('انتخاب شهر') .
										$this->Html()->Select('city_id', 'city_id', '') .
										$this->Html()->FormGroupEnd() .
										$this->Html()->FormGroupStart(12) .
										$this->Html()->Label('آدرس') .
										$this->Html()->Input('visitor_address') .
										$this->Html()->FormGroupEnd() .
										$this->Html()->FormGroupStart(6) .
										$this->Html()->Label('نام کاربری') .
										$this->Html()->Input('visitor_username') .
										$this->Html()->FormGroupEnd() .
										$this->Html()->FormGroupStart(6) .
										$this->Html()->Label('رمز عبور') .
										$this->Html()->Input('visitor_password') .
										$this->Html()->FormGroupEnd() .
										$this->Html()->CardFooter()
									)
							)
						)
				);
	}
	
	public function edit(Document &$document) {
		$this->doFill();
		$document->html = $this->Form();
	}
	
	public function delete(Document &$document) {
		$this->doFill();
		$this->doDisableAll();
		$document->html = $this->Form();
	}
	
	public function view(Document &$document) {
		$this->doFill();
		$this->doDisableAll();
		$document->html = $this->Form();
	}
	
}
