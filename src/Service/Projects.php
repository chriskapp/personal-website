<?php

namespace App\Service;

class Projects
{
    public function getProjects(): array
    {
        return [
            'about' => [
                'Hello, my name is Christoph, I am a software developer and I like to build and innovate solutions for the API ecosystem using type-safe/oop languages like PHP, TypeScript and Java.',
                'Born in 1986 I have witnessed the early fun days of the internet and I believe that the internet should be open and decentralized, my open source projects are a small contribution to this vision. I am the founder behind the <a href="https://apioo.de/">Apioo-Project</a> which is a collection of API related projects to challenge the current API landscape and to move to a connected future.',
                'Please take a look at my website <a href="https://chrisk.app/">chrisk.app</a> to get an overview about all my projects. I am working as lead solution architect at <a href="https://artemeon.de/">Artemeon</a> where we build RegTech solutions for the financial and insurance sector. If you are a headhunter please <a href="https://chrisk.app/headhunter">click here</a> to contact me.',
            ],
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
                        'name' => 'TypeAPI',
                        'status' => 1,
                        'href' => 'https://typeapi.org/',
                        'description' => 'An OpenAPI alternative to describe REST APIs for type-safe code generation',
                    ],
                    [
                        'name' => 'TypeSchema',
                        'status' => 1,
                        'href' => 'https://typeschema.org/',
                        'description' => 'TypeSchema is a JSON format to describe data models in a language neutral format',
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
                        'name' => 'apioo/typeapi',
                        'status' => 1,
                        'href' => 'https://github.com/apioo/typeapi',
                        'description' => 'An OpenAPI alternative to describe REST APIs for type-safe code generation',
                    ],
                    [
                        'name' => 'apioo/typeschema',
                        'status' => 1,
                        'href' => 'https://github.com/apioo/typeschema',
                        'description' => 'TypeSchema is a JSON format to describe data models in a language neutral format',
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
                        'name' => 'chriskapp/aletheia',
                        'status' => 1,
                        'href' => 'https://github.com/chriskapp/aletheia',
                        'description' => 'Web-Browser like Java app to send raw HTTP requests, it is designed for debugging and finding security issues in web applications',
                    ]
                ],
                'projects' => [
                    [
                        'name' => 'Apioo',
                        'status' => 1,
                        'href' => 'https://apioo.de/',
                        'description' => 'Main project website which lists all projects.',
                    ],
                    [
                        'name' => 'TypeHub',
                        'status' => 1,
                        'href' => 'https://typehub.cloud/',
                        'description' => 'TypeHub is a next generation API and data design platform.',
                    ],
                    [
                        'name' => 'SDKgen',
                        'status' => 1,
                        'href' => 'https://sdkgen.app/',
                        'description' => 'SDKgen is a powerful code generator to automatically build client SDKs for your REST API.',
                    ],
                    [
                        'name' => 'APIGen',
                        'status' => 1,
                        'href' => 'https://apigen.app/',
                        'description' => 'APIgen helps to quickly generate production ready and customizable APIs.',
                    ],
                    [
                        'name' => 'APImon',
                        'status' => 1,
                        'href' => 'https://apimon.app/',
                        'description' => 'APImon provides an intuitive service to monitor and analyze API endpoints.',
                    ],
                    [
                        'name' => 'SDK-Fabric',
                        'status' => 1,
                        'href' => 'https://sdk-fabric.org/',
                        'description' => 'SDK Fabric provides an open infrastructure to automatically generate SDKs for every API.',
                    ],
                    [
                        'name' => 'DeutschlandAPI',
                        'status' => 1,
                        'href' => 'https://deutschland-api.dev/',
                        'description' => 'DeutschlandAPI provides a modern REST API to access public information of germany.',
                    ],
                ],
                'social' => [
                    [
                        'name' => 'Twitter',
                        'status' => 1,
                        'href' => 'https://twitter.com/FusioAPI',
                        'description' => 'Twitter account of Fusio',
                    ],
                    [
                        'name' => '@fusioapi.bsky.social',
                        'status' => 1,
                        'href' => 'https://bsky.app/profile/fusioapi.bsky.social',
                        'description' => 'BlueSky account of Fusio',
                    ],
                    [
                        'name' => '@fusio@fosstodon.org',
                        'status' => 1,
                        'href' => 'https://fosstodon.org/@fusio',
                        'description' => 'Fosstodon account of Fusio',
                    ],
                    [
                        'name' => '@chriskapp@phpc.social',
                        'status' => 1,
                        'href' => 'https://phpc.social/@chriskapp',
                        'description' => 'Personal account on phpc.social',
                        'rel' => 'me',
                    ],
                    [
                        'name' => 'YouTube',
                        'status' => 1,
                        'href' => 'https://www.youtube.com/c/FusioAPI',
                        'description' => 'YouTube account of Fusio',
                    ],
                    [
                        'name' => 'Discord',
                        'status' => 1,
                        'href' => 'https://discord.gg/eMrMgwsc6e',
                        'description' => 'Discord about all related projects or if you want to contact me directly',
                    ],
                    [
                        'name' => 'LinkedIn',
                        'status' => 1,
                        'href' => 'https://www.linkedin.com/in/christoph-kappestein/',
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
                    [
                        'name' => 'Steam',
                        'status' => 1,
                        'href' => 'https://steamcommunity.com/id/chriskapp',
                        'description' => 'Steam account',
                    ],
                ],
            ],
        ];
    }
}
