<?php

return [

    'static_all_site' => [
        'string' => ['phone','copyright','vk','inst','fb'],
        'image'  => ['logo']
    ],
    'head_slider' => [
        'imageset' => ['slider' => 'slide'],
    ],

    'gallery_block' => [
        'groups' => [
            'gallery_type' => [
                'string' => ['gall_name', 'gall_id'],
            ],
            'slider_from' => [
                'image' => ['slide'],
                'text' => ['slide_text'],
                'gallery_type' => ['superior']
            ]
        ]
    ],
    'flats_block' => [
        'groups' => [
            'flat' => [
                'image' => ['panorame'],
                'string' => ['flat_name'],
                'int' => ['cost'],
                'float' => ['min_area', 'max_area'],
                'text' => ['description']
            ]
        ]
    ],
    'interest_place' => [
        'groups' => [
            'place' => [
                'image' => ['place_photo'],
                'string' => ['time_to_place', 'place_name'],
            ]
        ]
    ],
    'map_block' => [
        'groups' => [
            'marker_category' => [
                'string' => ['category_name', 'category_id'],
            ],
            'institution' => [
                'image' => ['marker_icon'],
                'marker_category' => ['superior']
            ],
            'marker' => [
                'string' => ['lon','lat','title'],
                'institution' => ['superior']
            ]
        ]
    ]
];
