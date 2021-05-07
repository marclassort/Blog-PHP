<?php

namespace App\Controller;

use Core\BaseController;

class ProjectsController extends BaseController 
{

    public function Projects() {
        $this->view("projets");
    }

}