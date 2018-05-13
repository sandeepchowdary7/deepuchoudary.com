<?php

return [
    'meta'      => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "Nuno Maduro", // set false to total remove
            'description'  => 'Nuno Maduro is the creator of Laravel Zero and Collision, Web Developer at AlumnForce, Laravel evangelist, open source enthusiast and host on Laravel Portugal.', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => ['Nuno Maduro', 'Laravel', 'Laravel Zero', 'Php', 'Open Source'],
            'canonical'    => false, // Set null for using Url::current(), set false to total remove
        ],

        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
        ],
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => "Nuno Maduro", // set false to total remove
            'description' => 'Nuno Maduro is the creator of Laravel Zero and Collision, Web Developer at AlumnForce, Laravel evangelist, open source enthusiast and host on Laravel Portugal.', // set false to total remove
            'url'         => false, // Set null for using Url::current(), set false to total remove
            'type'        => false,
            'site_name'   => false,
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            'card'        => 'summary',
            'site'        => '@enunomaduro',
        ],
    ],
];
