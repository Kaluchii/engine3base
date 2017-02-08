<?php

return [

    'static_all_site' => [
        'string' => ['phone','copyright','vk','inst','fb'],
        'image'  => ['logo'],
        'text'   => ['metrik_script', 'metrik_noscript']
    ],
    'head_slider' => [
        'imageset' => ['slider' => 'slide'],
    ],

    'gallery_block' => [
        'groups' => [
            'gallery_type' => [
                'string' => ['gall_name'],
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
                'string' => ['category_name'],
            ],
            'institution' => [
                'image' => ['marker_icon'],
                'marker_category' => ['superior']
            ],
            'marker' => [
                'string' => ['lon','lat','label'],
                'institution' => ['superior']
            ]
        ]
    ],


    'flats_page' => [
        'groups' => [
            'dom_flat' => [
                'string' => ['dom_flat_name', 'flat_title'],
                'float' => ['min_area', 'max_area'],
            ],
            'layout' => [
                'string' => ['layout_name'],
                'float' => ['min_area', 'max_area'],
                'image' => ['layout_scheme', 'complex_scheme'],
                'text' => ['facts', 'descr'],
                'dom_flat' => ['superior']
            ],
        ]
    ],

    'advantages' => [
        'groups' => [
            'advantage' => [
                'image' => ['advantage'],
                'string' => ['green_title', 'green_text'],
                'text' => ['descr'],
            ]
        ]
    ],

    'prices' => [
        'float' => ['dollar', 'meter_cost']
    ]
];