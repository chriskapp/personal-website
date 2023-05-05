<?php

namespace App\Dependency;

use App\Service\Projects;
use PSX\Framework\Dependency\DefaultContainer;

class Container extends DefaultContainer
{
    public function getProjects(): Projects
    {
        return new Projects();
    }
}
