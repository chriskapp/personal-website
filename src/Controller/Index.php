<?php

namespace App\Controller;

use App\Service\Profile;
use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Path;
use PSX\Framework\Controller\ControllerAbstract;
use PSX\Framework\Http\Writer\Template;
use PSX\Framework\Loader\ReverseRouter;

class Index extends ControllerAbstract
{
    public function __construct(private Profile $profile, private ReverseRouter $reverseRouter)
    {
    }

    #[Get]
    #[Path('/')]
    public function show(): Template
    {
        $data = [
            'title' => 'Christoph Kappestein',
            'canonical' => $this->reverseRouter->getUrl([self::class, 'show']),
            'profile' => $this->profile->getProfile(),
        ];

        return new Template($data, __DIR__ . '/../../resources/template/index.php', $this->reverseRouter);
    }
}
