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
                ],
                'github' => [
                    [
                        'name' => 'apioo/fusio',
                        'status' => 1,
                        'href' => 'https://github.com/apioo/fusio',
                        'description' => 'Open source API management platform',
                    ],
                    [
                        'name' => 'apioo/psx',
                        'status' => 1,
                        'href' => 'https://github.com/apioo/psx',
                        'description' => 'PHP REST API Framework',
                    ],
                    [
                        'name' => 'apioo/psx-schema',
                        'status' => 1,
                        'href' => 'https://github.com/apioo/psx-schema',
                        'description' => 'Parse and generate data schema formats',
                    ],
                    [
                        'name' => 'apioo/psx-api',
                        'status' => 1,
                        'href' => 'https://github.com/apioo/psx-api',
                        'description' => 'Parse and generate API specification formats',
                    ],
                    [
                        'name' => 'apioo/typeschema',
                        'status' => 1,
                        'href' => 'https://github.com/apioo/typeschema',
                        'description' => 'TypeSchema is a JSON format to describe data models in a language neutral format',
                    ],
                    [
                        'name' => 'apioo/fusio-docker',
                        'status' => 1,
                        'href' => 'https://github.com/apioo/fusio-docker',
                        'description' => 'Official docker container of Fusio an open source API management system',
                    ],
                ],
                'websites' => [
                    [
                        'name' => 'Cloud',
                        'status' => 1,
                        'href' => 'https://fusio.cloud/',
                        'description' => 'A simple hosting service to create a Fusio instance in the cloud',
                    ],
                    [
                        'name' => 'ApiGen',
                        'status' => 1,
                        'href' => 'https://apigen.app/',
                        'description' => 'A RAD tool to automatically generate REST APIs based on model definitions',
                    ],
                    [
                        'name' => 'TypeHub',
                        'status' => 1,
                        'href' => 'https://typehub.cloud/',
                        'description' => 'TypeHub is a collaborative platform to design open data specifications, it is like GitHub but instead of code we model data',
                    ],
                    [
                        'name' => 'Apioo',
                        'status' => 1,
                        'href' => 'https://apioo.de/',
                        'description' => 'Project website which lists all our products',
                    ],
                ],
                'other' => [
                    [
                        'name' => 'Blog',
                        'status' => 1,
                        'href' => 'https://medium.com/@chriskapp',
                        'description' => 'Medium blog where I post about different topics',
                    ],
                    [
                        'name' => 'Twitter',
                        'status' => 1,
                        'href' => 'https://twitter.com/FusioAPI',
                        'description' => 'Twitter account of the Fusio project',
                    ],
                    [
                        'name' => 'YouTube',
                        'status' => 1,
                        'href' => 'https://www.youtube.com/c/FusioAPI',
                        'description' => 'YouTube account of the Fusio project',
                    ],
                    [
                        'name' => 'LinkedIn',
                        'status' => 1,
                        'href' => 'https://www.linkedin.com/in/christoph-kappestein-051962156/',
                        'description' => 'LinkedIn account',
                    ],
                    [
                        'name' => 'Xing',
                        'status' => 1,
                        'href' => 'https://www.xing.com/profile/Christoph_Kappestein/cv',
                        'description' => 'Xing account',
                    ],
                    [
                        'name' => 'GitHub',
                        'status' => 1,
                        'href' => 'https://github.com/chriskapp',
                        'description' => 'Github account',
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
