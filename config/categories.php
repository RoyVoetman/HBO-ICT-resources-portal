<?php

return [
    
    /*
    |--------------------------------------------------------------------------
    | Categories
    |--------------------------------------------------------------------------
    */
    
    [
        'name' => 'Student perks',
        'icon' => 'fas fa-graduation-cap',

        'route' => 'student-perks',
        'blade' => 'categories.student-perks',
    ],
    [
        'name' => 'Software',
        'icon' => 'fas fa-desktop',

        'route' => 'software',
        'blade' => 'categories.software',
    ],
    [
        'name' => 'Study Support',
        'icon' => 'fas fa-chalkboard-teacher',
        'is_pro' => true,
        
        'route' => 'study-support',
        'blade' => 'categories.study-support',
    ],
    [
        'name' => 'Blog (coming soon)',
        'icon' => 'fas fa-newspaper',

        'route' => 'blog',
        'blade' => 'categories.blog',
    ],
    [
        'name' => 'Notes archive',
        'icon' => 'fas fa-archive',
        'is_pro' => true,

        'route' => 'notes',
        'blade' => 'categories.notes',
    ],
    [
        'name' => 'Video resources',
        'icon' => 'fab fa-youtube',

        'route' => 'video-resources',
        'blade' => 'categories.video-resources',
    ]

];
