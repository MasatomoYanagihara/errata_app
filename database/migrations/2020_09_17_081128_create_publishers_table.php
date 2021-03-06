
    <?php
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreatePublishersTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("publishers", function (Blueprint $table) {

						$table->increments('id');
						$table->string('name')->nullable(); //出版社名
						$table->timestamps();
						$table->softDeletes();



						// ----------------------------------------------------
						// -- SELECT [publishers]--
						// ----------------------------------------------------
						// $query = DB::table("publishers")
						// ->get();
						// dd($query); //For checking



                });
            }

            /**
             * Reverse the migrations.
             *
             * @return void
             */
            public function down()
            {
                Schema::dropIfExists("publishers");
            }
        }
    