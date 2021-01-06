<?php

namespace controller;

use ControllerScheme;
use FwAuthSystem\Main\UserObject;
use FwHtml\Elements\Tags\Main\HtmlTags;
use model\Entity\IndividualsEntity;
use model\Users;

class Agencies extends ControllerScheme
{
    const name = 'نمایندگی ها';

    protected function add(?bool $csrf = true)
    {
        $data = $this->requestArray();
        /** @var IndividualsEntity $individual */
        $individual = \model\Individuals::get($data['individual_id']);
        $user_id = \model\Users::add([
            'user_username' => $individual->mobile,
            'user_name' => $data['agency_name'],
            'user_email' => $data['agency_email'],
            'user_password' => sha1(md5($data['agency_password'])),
            'role_name' => 'AgenciesRole',
        ]);
        $data['user_id'] = $user_id;
        $this->setRequestArray($data);
        return parent::add($csrf);
    }

    public function edit(?bool $csrf = true)
    {
        $data = $this->requestArray();
        $userId = $this->model()::get($data['agency_id'])->user_id;

        Users::edit($userId, [
            'user_name' => $data['agency_name'],
            'user_email' => $data['agency_email'],
            'user_password' => sha1(md5($data['agency_password'])),
        ]);

        $this->setRequestArray($data);
        return parent::edit($csrf);
    }

}