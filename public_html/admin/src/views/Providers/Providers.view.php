<?

namespace view;

use DOMWrap\Document;
use model\Entity\SocialMediasEntity;
use FwHtml\Elements\Tags\Main\HtmlTags;
use View;

class Providers extends View {
	
	public $SingularName = 'پذیرنده';
	
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
																	HtmlTags::Th('نام'),
                                                                    HtmlTags::Th('صنف'),
                                                                    HtmlTags::Th('تصویر'),
																	HtmlTags::Th('.no-sort عملیات')->Width('150'),
																	HtmlTags::Th('.no-sort وضعیت')->Width('150')
																)
															),
														HtmlTags::Tbody()
															->Content(
																$this->show([
																	'provider_name',
																	'caste_name'=> new \model\Castes(),
																	'showImage' => 'provider_image',
																], true, true, true))

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
										$this->Html()->Label('نام') .
										$this->Html()->Input('provider_name') .
										$this->Html()->FormGroupEnd() .
										$this->Html()->FormGroupStart(4) .
										$this->Html()->Label('عکس') .
										$this->Html()->ImageInput('provider_image') .
										$this->Html()->FormGroupEnd() .
										$this->Html()->FormGroupStart(4) .
										$this->Html()->Label('مدیر') .
										$this->Html()->Select('provider_manager', 'provider_manager', \model\Individuals::toOption()) .
										$this->Html()->FormGroupEnd() .
										$this->Html()->FormGroupStart(4) .
										$this->Html()->Label('تلفن') .
										$this->Html()->Tel('provider_tel') .
										$this->Html()->FormGroupEnd() .
										$this->Html()->FormGroupStart(4) .
										$this->Html()->Label('گروه کاری') .
										$this->Html()->Select('workgroup_id', 'workgroup_id', \model\WorkGroups::toOption()) .
										$this->Html()->FormGroupEnd() .
										$this->Html()->FormGroupStart(4) .
										$this->Html()->Label('اصناف') .
										$this->Html()->Select('caste_id', 'caste_id',\model\Castes::toOption()) .
										$this->Html()->FormGroupEnd() .
										$this->Html()->FormGroupStart(12) .
										$this->Html()->Label('شبکه های اجتماعی') .
										$this->Table() .
										$this->Html()->FormGroupEnd() .
										$this->Html()->CardFooter()
									)
							)
						)
				);
	}
	
	private function Table() {
		$data = json_decode($this->getData()->social_media_ids,true);
		$this->initDataTable = false;

		return HtmlTags::Table('.table.table-bordered.table-striped')->Content(
			HtmlTags::Thead()->Content(
				HtmlTags::Tr()->Content(
					HtmlTags::Th('.no-sort')->Content("ردیف"),
					HtmlTags::Th('.no-sort')->Content("#"),
					HtmlTags::Th()->Content("نام شبکه"),
					HtmlTags::Th()->Content("آیکون")->Width('100'),
					HtmlTags::Th('.no-sort')->Content("آدرس")
				)
			),
			HtmlTags::Tbody()->Content(

				function () use ($data) {
                    $row = '0' ;
					$output = [];
					/** @var SocialMediasEntity $socialMedia */
					foreach (\model\SocialMedias::getAll() as $socialMedia) {
					    $image = $socialMedia->social_media_icon;
                        $row ++ ;
						$output[] = HtmlTags::Tr()->Content(
							HtmlTags::Td()->Content("$row"),
							HtmlTags::Td()->Content(
								HtmlTags::Input()
									->Attrs(['checked' => isset($data[$socialMedia->social_media_id])])
									->Type('checkbox')->Class('socialMediaCheckBox')
							),
							HtmlTags::Td()->Content(
								$socialMedia->social_media_name
							),
							HtmlTags::Td()->Content(
							    '<img src="src/images/SocialMedias/'.$image.'"style="width: 100px;height=100px">'
							),
							HtmlTags::Td()->Content(
								$this->Html()->Input("social_media_ids[$socialMedia->social_media_id]")->Disabled(!isset($data[$socialMedia->social_media_id]))->Required(false)
							)
						);
					}
					return $output;
				}
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
