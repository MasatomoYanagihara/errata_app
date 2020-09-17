
    <?php
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateGanresTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("ganres", function (Blueprint $table) {

						$table->increments('id');
						$table->integer('name'); //ジャンル名
						$table->timestamps();



						// ----------------------------------------------------
						// -- SELECT [ganres]--
						// ----------------------------------------------------
						// $query = DB::table("ganres")
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
                Schema::dropIfExists("ganres");
            }
        }
    