
    <?php
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateBooksTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("books", function (Blueprint $table) {

						$table->increments('id');
						$table->string('title');
						$table->string('author'); //著者
						$table->integer('publishers_id'); //出版社
						$table->string(' year_or_publication'); //出版年
						$table->string('ganre_id'); //ジャンル
						$table->timestamps();
						

                    //*********************************
                    // Foreign KEY [ Uncomment if you want to use!! ]
                    //*********************************
                        //$table->foreign("publishers_id")->references("id")->on("publishers");
						//$table->foreign("ganre_id")->references("id")->on("ganres");



						// ----------------------------------------------------
						// -- SELECT [books]--
						// ----------------------------------------------------
						// $query = DB::table("books")
						// ->leftJoin("publishers","publishers.id", "=", "books.publishers_id")
						// ->leftJoin("ganres","ganres.id", "=", "books.ganre_id")
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
                Schema::dropIfExists("books");
            }
        }
    