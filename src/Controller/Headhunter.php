<?php

namespace App\Controller;

use App\Model\HeadhunterToken;
use Firebase\JWT\JWT;
use PSX\Api\Attribute\Get;
use PSX\Api\Attribute\Header;
use PSX\Api\Attribute\Path;
use PSX\Api\Attribute\Post;
use PSX\Framework\Config\ConfigInterface;
use PSX\Framework\Controller\ControllerAbstract;
use PSX\Framework\Http\Writer\Template;
use PSX\Framework\Loader\ReverseRouter;
use PSX\Http\Exception\BadRequestException;

class Headhunter extends ControllerAbstract
{
    private ReverseRouter $reverseRouter;
    private ConfigInterface $config;

    public function __construct(ReverseRouter $reverseRouter, ConfigInterface $config)
    {
        $this->reverseRouter = $reverseRouter;
        $this->config = $config;
    }

    #[Get]
    #[Path('/headhunter')]
    public function show(): Template
    {
        return new Template([], __DIR__ . '/../../resources/template/headhunter.php', $this->reverseRouter);
    }

    #[Post]
    #[Path('/headhunter')]
    public function generate(#[Header('X-Acknowledge')] ?string $ack = null): HeadhunterToken
    {
        if ($ack !== 'yes') {
            throw new BadRequestException('You have provided an invalid request header');
        }

        $payload = [
            'iss' => 'https://chrisk.app',
            'aud' => 'https://chrisk.app',
            'iat' => time(),
            'exp' => time() + (60 * 60 * 24 * 7),
        ];

        $token = new HeadhunterToken();
        $token->setToken(JWT::encode($payload, $this->config->get('secret_key'), 'HS256'));
        return $token;
    }
}
