<?php

return [
    'file_library' => [
        'filesize_limit' => 10,
        'allowed_extensions' => ['pdf']
    ],
    'block_editor' => [
        'crops' => [
            'project_image' => [
                'default' => [
                    [
                        'name' => 'default',
                        'ratio' => 16 / 9
                    ]
                ]
            ],
            'past_project_image' => [
                'default' => [
                    [
                        'name' => 'default',
                        'ratio' => 16 / 9
                    ]
                ]
            ],
            'variable_image' => [
                'default' => [
                    [
                        'name' => 'default',
                    ]
                ]
            ]
        ],
        'blocks' => [
            'quote' => [
                'title' => 'Cita',
                'icon' => 'quote',
                'component' => 'a17-block-quote',
                'rules' => [
                    'quote_text' => 'required'
                ]
            ],
            'paragraph' => [
                'title' => 'Párrafo',
                'icon' => 'text',
                'component' => 'a17-block-paragraph',
            ],
            'paragraph_image' => [
                'title' => 'Párrafo & Imagen',
                'icon' => 'text-image',
                'component' => 'a17-block-paragraph_image',
            ],
            'project_detail' => [
                'title' => 'Proyecto destacado anterior',
                'icon' => 'content-editor',
                'component' => 'a17-block-project_detail',
                'rules' => [
                    'project_title' => 'required',
                    'project_url' => 'required|url',
                    'project_description' => 'required',
                ]
            ]
        ],
     ]
];
