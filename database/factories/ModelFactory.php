<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Brackets\AdminAuth\Models\AdminUser::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'activated' => true,
        'forbidden' => $faker->boolean(),
        'language' => 'en',
        'deleted_at' => null,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        'last_login_at' => $faker->dateTime,
        
    ];
});/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Post::class, static function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'slug' => $faker->unique()->slug,
        'perex' => $faker->text(),
        'published_at' => $faker->date(),
        'enabled' => $faker->boolean(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Entry::class, static function (Faker\Generator $faker) {
    return [
        'umur' => $faker->sentence,
        'jantina' => $faker->sentence,
        'agama' => $faker->sentence,
        'bangsa' => $faker->sentence,
        'status' => $faker->sentence,
        'bilAnak' => $faker->sentence,
        'tinggalBersamaPasangan' => $faker->sentence,
        'education' => $faker->sentence,
        'jumlahGaji' => $faker->sentence,
        'kesukaranGaji' => $faker->sentence,
        'pernahTukarKerja' => $faker->sentence,
        'masalahKesihatan' => $faker->sentence,
        'tempatTinggal' => $faker->sentence,
        'tinggalBersama' => $faker->sentence,
        'kenderaanKerja' => $faker->sentence,
        'B1' => $faker->sentence,
        'B2' => $faker->sentence,
        'B3' => $faker->sentence,
        'B4' => $faker->sentence,
        'B5' => $faker->sentence,
        'B6' => $faker->sentence,
        'B7' => $faker->sentence,
        'B8' => $faker->sentence,
        'B9' => $faker->sentence,
        'B10' => $faker->sentence,
        'B11' => $faker->sentence,
        'B12' => $faker->sentence,
        'B13' => $faker->sentence,
        'B14' => $faker->sentence,
        'B15' => $faker->sentence,
        'B16' => $faker->sentence,
        'B17' => $faker->sentence,
        'B18' => $faker->sentence,
        'B19' => $faker->sentence,
        'B20' => $faker->sentence,
        'B21' => $faker->sentence,
        'B22' => $faker->sentence,
        'B23' => $faker->sentence,
        'B24' => $faker->sentence,
        'B25' => $faker->sentence,
        'B26' => $faker->sentence,
        'B27' => $faker->sentence,
        'B28' => $faker->sentence,
        'B29' => $faker->sentence,
        'B30' => $faker->sentence,
        'B31' => $faker->sentence,
        'B32' => $faker->sentence,
        'B33' => $faker->sentence,
        'B34' => $faker->sentence,
        'B35' => $faker->sentence,
        'B36' => $faker->sentence,
        'B37' => $faker->sentence,
        'B38' => $faker->sentence,
        'B39' => $faker->sentence,
        'B40' => $faker->sentence,
        'B41' => $faker->sentence,
        'B42' => $faker->sentence,
        'B43' => $faker->sentence,
        'B44' => $faker->sentence,
        'B45' => $faker->sentence,
        'C1' => $faker->sentence,
        'C2' => $faker->sentence,
        'C3' => $faker->sentence,
        'C4' => $faker->sentence,
        'C5' => $faker->sentence,
        
        
    ];
});
