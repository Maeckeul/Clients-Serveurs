<?php 

namespace App;

class Controller extends BaseController {

    function executeHome() {
        $data = $this->model->getPageData('home');

        return $this->view->displayHtml($data);
    }

    function executeContact() {
        $data = $this->model->getPageData('contact');

        $usersHtml = '<ul>';
        foreach ($data['users'] as $user => $email) {
            $usersHtml .= '<li>' . $user . ' : ' . $email . '</li>';
        }

        $usersHtml .= '</ul>';

        $data['content'] .= $usersHtml;

        return $this->view->displayHtml($data);
    }

    function executeApi() {
        $data = $this->model->getPageData('contact');

        return $this->view->displayJson($data['users']);
    }
}