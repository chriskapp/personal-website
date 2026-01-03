<?php

namespace App\Controller;

use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Path;
use PSX\Framework\Controller\ControllerAbstract;
use PSX\Framework\Http\Writer\Template;
use PSX\Framework\Loader\ReverseRouter;

class Imprint extends ControllerAbstract
{
    public function __construct(private ReverseRouter $reverseRouter)
    {
    }

    #[Get]
    #[Path('/imprint')]
    public function show(): Template
    {
        $data = [
            'title' => 'Imprint | Christoph Kappestein',
            'canonical' => $this->reverseRouter->getUrl([self::class, 'show']),
        ];

        return new Template($data, __DIR__ . '/../../resources/template/imprint.php', $this->reverseRouter);
    }
}
