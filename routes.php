<?php

return [

    [['ANY'], '/', App\Website\Index::class],
    [['ANY'], '/humans.txt', App\Website\Text::class],
    [['ANY'], '/imprint', App\Website\Imprint::class],

];
