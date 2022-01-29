<?php

namespace App\Website;

use App\Projects;
use PSX\Dependency\Attribute\Inject;
use PSX\Framework\Controller\ViewAbstract;
use PSX\Http\Environment\HttpContextInterface;

class Text extends ViewAbstract
{
    #[Inject]
    private Projects $projects;

    protected function doGet(HttpContextInterface $context): mixed
    {
        return $this->render(__DIR__ . '/resource/index.txt.php', $this->projects->getProjects());
    }
}
