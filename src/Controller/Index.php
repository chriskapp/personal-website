<?php

namespace App\Controller;

use App\Service\Projects;
use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Path;
use PSX\Framework\Controller\ControllerAbstract;
use PSX\Framework\Http\Writer\Template;
use PSX\Framework\Loader\ReverseRouter;

class Index extends ControllerAbstract
{
    private Projects $projects;
    private ReverseRouter $reverseRouter;

    public function __construct(Projects $projects, ReverseRouter $reverseRouter)
    {
        $this->projects = $projects;
        $this->reverseRouter = $reverseRouter;
    }

    #[Get]
    #[Path('/')]
    public function show(): Template
    {
        return new Template($this->projects->getProjects(), __DIR__ . '/../../resources/template/index.php', $this->reverseRouter);
    }
}
