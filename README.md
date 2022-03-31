install composer

composer create-project --prefer-dist laravel/laravel:^8.0 demo
cd demo


################ --ignore-platform-reqs

composer require brackets/craftable
composer require --dev brackets/admin-generator


#config database

php artisan craftable:install

#generate pass: 0Wo1gouAI8

npm install
npm run dev


php artisan serve

#make migration table
php artisan make:migration create_faq_table

#file
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->string('slug')->unique();
			$table->text('perex')->nullable();
			$table->date('published_at')->nullable();
			$table->boolean('enabled')->default(false);
			$table->timestamps();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
}
#end file

php artisan migrate
php artisan admin:generate faq

npm run dev
