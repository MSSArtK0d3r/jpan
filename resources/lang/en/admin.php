<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'last_login_at' => 'Last login',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'post' => [
        'title' => 'Posts',

        'actions' => [
            'index' => 'Posts',
            'create' => 'New Post',
            'edit' => 'Edit :name',
            'will_be_published' => 'Post will be published at',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'slug' => 'Slug',
            'perex' => 'Perex',
            'published_at' => 'Published at',
            'enabled' => 'Enabled',
            
        ],
    ],

    'entry' => [
        'title' => 'Entries',

        'actions' => [
            'index' => 'Entries',
            'create' => 'New Entry',
            'edit' => 'Edit :name',
            'export' => 'Export to Excel'
        ],

        'columns' => [
            'id' => 'ID',
            'umur' => 'Umur',
            'jantina' => 'Jantina',
            'agama' => 'Agama',
            'bangsa' => 'Bangsa',
            'status' => 'Status',
            'bilAnak' => 'BilAnak',
            'tinggalBersamaPasangan' => 'TinggalBersamaPasangan',
            'education' => 'Education',
            'jumlahGaji' => 'JumlahGaji',
            'kesukaranGaji' => 'KesukaranGaji',
            'pernahTukarKerja' => 'PernahTukarKerja',
            'masalahKesihatan' => 'MasalahKesihatan',
            'tempatTinggal' => 'TempatTinggal',
            'tinggalBersama' => 'TinggalBersama',
            'kenderaanKerja' => 'KenderaanKerja',
            'B1' => 'B1',
            'B2' => 'B2',
            'B3' => 'B3',
            'B4' => 'B4',
            'B5' => 'B5',
            'B6' => 'B6',
            'B7' => 'B7',
            'B8' => 'B8',
            'B9' => 'B9',
            'B10' => 'B10',
            'B11' => 'B11',
            'B12' => 'B12',
            'B13' => 'B13',
            'B14' => 'B14',
            'B15' => 'B15',
            'B16' => 'B16',
            'B17' => 'B17',
            'B18' => 'B18',
            'B19' => 'B19',
            'B20' => 'B20',
            'B21' => 'B21',
            'B22' => 'B22',
            'B23' => 'B23',
            'B24' => 'B24',
            'B25' => 'B25',
            'B26' => 'B26',
            'B27' => 'B27',
            'B28' => 'B28',
            'B29' => 'B29',
            'B30' => 'B30',
            'B31' => 'B31',
            'B32' => 'B32',
            'B33' => 'B33',
            'B34' => 'B34',
            'B35' => 'B35',
            'B36' => 'B36',
            'B37' => 'B37',
            'B38' => 'B38',
            'B39' => 'B39',
            'B40' => 'B40',
            'B41' => 'B41',
            'B42' => 'B42',
            'B43' => 'B43',
            'B44' => 'B44',
            'B45' => 'B45',
            'C1' => 'C1',
            'C2' => 'C2',
            'C3' => 'C3',
            'C4' => 'C4',
            'C5' => 'C5',
            
        ],
    ],

    'role' => [
        'title' => 'Roles',

        'actions' => [
            'index' => 'Roles',
            'create' => 'New Role',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'guard_name' => 'Guard name',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];