<?php

return [

    /*
    |--------------------------------------------------------------------------
    | English Application App Specific Resources
    |--------------------------------------------------------------------------
    */

    'article' => [
        'create' => 'Create article',
        'edit'   => 'Edit article',
        'fields' => [
            'category_id'  => 'Category',
            'content'      => 'Content RO',
            'content_ru'      => 'Content RU',
            'content_en'      => 'Content EN',
            'description'  => 'Description',
            'published_at' => 'Published At',
            'title'        => 'Article Title RO',
            'title_ru'        => 'Article Title RU',
            'title_en'        => 'Article Title EN',
        ],
        'index'  => 'Articles',
        'show'   => 'Show article'
    ],
    'category' => [
        'create' => 'Create category',
        'edit'   => 'Edit category',
        'fields' => [
            'article_count' => 'Article Count',
            'description'   => 'Description',
            'title'         => 'Category Title'
        ],
        'index'  => 'Categories',
        'show'   => 'Show category'
    ],
    'dashboard' => [
        'fields' => [
            'alexa_local'     => 'Alexa Local',
            'alexa_world'     => 'Alexa World',
            'average_time'    => 'Average Time',
            'bounce_rate'     => 'Bounce Rate',
            'browsers'        => 'Browsers',
            'chart_country'   => 'Country',
            'chart_region'    => 'Region',
            'chart_visitors'  => 'Visitors',
            'entrance_pages'  => 'Entrance',
            'exit_pages'      => 'Exit',
            'keywords'        => 'Keywords',
            'os'              => 'OS',
            'page_visits'     => 'Page Visits',
            'pages'           => 'Pages',
            'region_visitors' => 'Region Visitors',
            'time_pages'      => 'Time',
            'total_visits'    => 'Total Visits',
            'traffic_sources' => 'Traffic Sources',
            'unique_visits'   => 'Unique Visits',
            'visitors'        => 'Visitors',
            'visits'          => 'Visits',
            'visits_today'    => 'Visits Today',
            'world_visitors'  => 'World Visitor Distribution'
        ],
        'index' => 'Dashboard'
    ],
    'elfinder' => [
        'index' => 'File Manager',
    ],
    'page' => [
        'create' => 'Create page',
        'edit'   => 'Edit page',
        'fields' => [
            'content'     => 'Content RO',
            'content_ru'     => 'Content RU',
            'content_en'     => 'Content EN',
            'description' => 'Description RO',
            'description_ru' => 'Description RU',
            'description_en' => 'Description EN',
            'title'       => 'Title RO',
            'title_ru'    => 'Title RU',
            'title_en'    => 'Title EN',
            'parent_id'    => 'Parent',
            'img' => 'Imagine reprezentativa (link)',
        ],
        'index'  => 'Pages',
        'show'   => 'Show page'
    ],
    'parent' => [
        'fields' => [
            'title' => 'Parent Page',
        ]
    ],
    'user' => [
        'create' => 'Create user',
        'edit'   => 'Edit user',
        'fields' => [
            'email'                 => 'Email',
            'ip_address'            => 'IP',
            'logged_in_at'          => 'Login At',
            'logged_out_at'         => 'Logout At',
            'password'              => 'Password',
            'password_confirmation' => 'Password Confirm'
        ],
        'index'  => 'Users',
        'show'   => 'Show user'
    ],
    'block' => [
        'create' => 'Create a Block',
        'edit'   => 'Edit a Block',
        'fields' => [
          'content'     => 'Content RO',
          'content_ru'     => 'Content RU',
          'content_en'     => 'Content EN',
          'description' => 'Description RO',
          'description_ru' => 'Description RU',
          'description_en' => 'Description EN',
          'title'       => 'Title RO',
          'title_ru'    => 'Title RU',
          'title_en'    => 'Title EN',
        ],
        'index'  => 'Blocks',
        'show'   => 'Show a Block'
    ]
];
