<?php

namespace App;

class Projects
{
    public function getProjects(): array
    {
        return [
            'about' => 'My name is Christoph Kappestein Iam a developer, open-source enthusiast and chess player. I like to write PHP and Java applications. Talk is cheap show me the code!',
            'projects' => [
                'opensource' => [
                    [
                        'name' => 'Fusio',
                        'status' => 1,
                        'href' => 'https://www.fusio-project.org/',
                        'description' => 'Open source API management platform',
                    ],
                    [
                        'name' => 'PSX',
                        'status' => 1,
                        'href' => 'https://www.phpsx.org/',
                        'description' => 'A PHP framework to develop RESTful APIs',
                    ],
                    [
                        'name' => 'TypeSchema',
                        'status' => 1,
                        'href' => 'https://typeschema.org/',
                        'description' => 'A JSON format to describe JSON structures optimized for code generation',
                    ],
                    [
                        'name' => 'Apioo',
                        'status' => 1,
                        'href' => 'https://github.com/apioo',
                        'description' => 'Github organisation which contains API related projects',
                    ],
                    [
                        'name' => 'GitHub',
                        'status' => 1,
                        'href' => 'https://github.com/chriskapp',
                        'description' => 'Personal Github account',
                    ],
                ],
                'websites' => [
                    [
                        'name' => 'Cloud',
                        'status' => 1,
                        'href' => 'https://fusio.cloud/',
                        'description' => 'A simple hosting service to create a Fusio instance in the cloud.',
                    ],
                    [
                        'name' => 'ApiGen',
                        'status' => 1,
                        'href' => 'https://apigen.app/',
                        'description' => 'A RAD tool to automatically generate REST APIs based on model definitions.',
                    ],
                    [
                        'name' => 'TypeHub',
                        'status' => 1,
                        'href' => 'https://typehub.cloud/',
                        'description' => 'TypeHub is a collaborative platform to design open data specifications, it is like GitHub but instead of code we model data',
                    ],
                ],
            ],
            'contact' => [
                'fingerprint' => 'C6D2 06A6 83D0 5335 8092 8434 BD8F B36E 7240 89DE',
                'href' => 'http://keys.gnupg.net/pks/lookup?search=0xBD8FB36E724089DE&fingerprint=on&op=index'
            ],
        ];
    }
}
