install composer

#npm install

#npm run dev


#Run: php artisan serve

#make migration table
php artisan make:migration create_faq_table

#file example
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


![1](https://user-images.githubusercontent.com/18664928/160970565-86657980-a6d3-42cb-a784-e70515e4053d.JPG)
![2](https://user-images.githubusercontent.com/18664928/160970571-8bcd0bb6-cffc-42d4-b59f-7178aa57fbf4.JPG)

