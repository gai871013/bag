<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable()->comment('客户姓名');
            $table->string('auth_name')->nullable()->comment('鉴定人姓名');
            $table->string('brand')->nullable()->comment('品牌');
            $table->string('price')->nullable()->comment('公价');
            $table->string('series')->nullable()->comment('系列');
            $table->date('date')->nullable()->comment('日期');
            $table->tinyInteger('type')->nullable()->comment('类型');
            $table->tinyInteger('cortex')->nullable()->comment('皮质');
            $table->tinyInteger('style')->nullable()->comment('款型');
            $table->tinyInteger('design')->nullable()->comment('款式');
            $table->tinyInteger('parts')->nullable()->comment('配件');
            $table->tinyInteger('line')->nullable()->comment('走线');
            $table->tinyInteger('is_check_parts')->nullable()->comment('是否检查配件');
            $table->tinyInteger('girdle')->nullable()->comment('肩带');
            $table->tinyInteger('metals')->nullable()->comment('五金');
            $table->tinyInteger('logo')->nullable()->comment('logo');
            $table->tinyInteger('lining')->nullable()->comment('内衬');
            $table->tinyInteger('smell')->nullable()->comment('气味');
            $table->tinyInteger('level_usage')->nullable()->comment('使用程度');
            $table->tinyInteger('edge_wear')->nullable()->comment('边角磨损');
            $table->tinyInteger('metals_wear')->nullable()->comment('五金件');
            $table->tinyInteger('blot')->nullable()->comment('污渍');
            $table->tinyInteger('colour_fading')->nullable()->comment('褪色');
            $table->tinyInteger('off_line')->nullable()->comment('脱线');
            $table->tinyInteger('chip')->nullable()->comment('开胶');
            $table->tinyInteger('')->nullable()->comment('新旧级别');
            $table->date('buy_time')->nullable()->comment('购买时间');
            $table->string('evaluated_price')->nullable()->comment('评估价格');
            $table->text('details')->nullable()->comment('细节图');
            $table->text('auth_details')->nullable()->comment('鉴定图');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bags');
    }
}
