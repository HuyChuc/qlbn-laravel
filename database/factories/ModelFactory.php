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
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Faq::class, static function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'content' => $faker->text(),
        'enabled' => $faker->boolean(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
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
$factory->define(App\Models\Faq::class, static function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'content' => $faker->text(),
        'enabled' => $faker->boolean(),
        'image' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Category::class, static function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'code' => $faker->sentence,
        'description' => $faker->sentence,
        'parent_id' => $faker->sentence,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Category::class, static function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'code' => $faker->sentence,
        'description' => $faker->sentence,
        'parent_id' => $faker->randomNumber(5),
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Faq::class, static function (Faker\Generator $faker) {
    return [
        'title' => $faker->text(),
        'content' => $faker->text(),
        'enabled' => $faker->boolean(),
        'cat_id' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Customer::class, static function (Faker\Generator $faker) {
    return [
        'code' => $faker->sentence,
        'address' => $faker->sentence,
        'phone' => $faker->sentence,
        'full_name' => $faker->sentence,
        'gender' => $faker->sentence,
        'group' => $faker->sentence,
        'NHOMBENH' => $faker->sentence,
        'dob' => $faker->sentence,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\CustomersHistory::class, static function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'age' => $faker->sentence,
        'customer_code' => $faker->sentence,
        'visit_date' => $faker->sentence,
        'KHAMBENH' => $faker->text(),
        'BENHSU' => $faker->text(),
        'LYDO' => $faker->text(),
        'customer_id' => $faker->sentence,
        
        
    ];
});

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Medicine::class, static function (Faker\Generator $faker) {
    return [
        'code' => $faker->sentence,
        'name' => $faker->firstName,
        'mfg_date' => $faker->dateTime,
        'exp_date' => $faker->dateTime,
        'made_in' => $faker->sentence,
        'medication_components' => $faker->sentence,
        'notes' => $faker->text(),
        'ID' => $faker->sentence,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\PostsComment::class, static function (Faker\Generator $faker) {
    return [
        'code' => $faker->sentence,
        'create_date' => $faker->sentence,
        'post_id' => $faker->randomNumber(5),
        'comment' => $faker->text(),
        'full_name' => $faker->sentence,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\CustomersPrescription::class, static function (Faker\Generator $faker) {
    return [
        'full_name' => $faker->sentence,
        'T1' => $faker->sentence,
        'T2' => $faker->sentence,
        'T3' => $faker->sentence,
        'T4' => $faker->sentence,
        'T5' => $faker->sentence,
        'T6' => $faker->sentence,
        'T7' => $faker->sentence,
        'T8' => $faker->sentence,
        'T9' => $faker->sentence,
        'T10' => $faker->sentence,
        'T11' => $faker->sentence,
        'T12' => $faker->sentence,
        'T13' => $faker->sentence,
        'T14' => $faker->sentence,
        'T15' => $faker->sentence,
        'T16' => $faker->sentence,
        'T17' => $faker->sentence,
        'T18' => $faker->sentence,
        'T19' => $faker->sentence,
        'T20' => $faker->sentence,
        'N1' => $faker->sentence,
        'N2' => $faker->sentence,
        'N3' => $faker->sentence,
        'N4' => $faker->sentence,
        'N5' => $faker->sentence,
        'N6' => $faker->sentence,
        'N7' => $faker->sentence,
        'N8' => $faker->sentence,
        'N9' => $faker->sentence,
        'N10' => $faker->sentence,
        'N11' => $faker->sentence,
        'N12' => $faker->sentence,
        'N13' => $faker->sentence,
        'N14' => $faker->sentence,
        'N15' => $faker->sentence,
        'N16' => $faker->sentence,
        'N17' => $faker->sentence,
        'N18' => $faker->sentence,
        'N19' => $faker->sentence,
        'N20' => $faker->sentence,
        'customer_code' => $faker->sentence,
        'visit_date' => $faker->sentence,
        'CANBENH' => $faker->text(),
        'CAPBAC' => $faker->text(),
        'DONVI' => $faker->text(),
        'DONTHUOC' => $faker->text(),
        'customer_id' => $faker->sentence,
        'customer_history_id' => $faker->sentence,
        
        
    ];
});
