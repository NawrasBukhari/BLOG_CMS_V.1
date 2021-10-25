<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrontendTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frontend', function (Blueprint $table) {
            $table->id();
            $table->string('title');

            $table->text('description');

            $table->string('author');

            $table->string('logo');

            $table->string('Login_link');

            $table->string('register_link');

            $table->string('section_1_title');
            $table->string('section_1_span');
            $table->string('section_1_a1');
            $table->text('section_1_paragraph');

            $table->string('section_2_title');
            $table->text('section_2_paragraph');

            $table->string('section_3_title');
            $table->text('section_3_paragraph');

            $table->string('section_3_card_1');
            $table->text('section_3_card_1_p1');

            $table->string('section_3_card_2');
            $table->text('section_3_card_2_p2');

            $table->string('section_3_card_3');
            $table->text('section_3_card_3_p3');

            $table->string('section_3_card_4');
            $table->text('section_3_card_4_p4');

            $table->string('section_3_card_5');
            $table->text('section_3_card_5_p5');

            $table->string('section_3_card_6');
            $table->text('section_3_card_6_p6');

            $table->string('section_4_title');
            $table->text('section_4_paragraph');

            $table->string('section_4_card_1_title');
            $table->text('section_4_card_1_paragraph');

            $table->string('section_4_card_2_title');
            $table->text('section_4_card_2_paragraph');

            $table->string('section_4_card_3_title');
            $table->text('section_4_card_3_paragraph');

            $table->string('section_5_title');
            $table->string('section_5_subtitle');
            $table->text('section_5_paragraph');

            $table->string('facebook_link');
            $table->string('whatsapp_link');
            $table->string('telegram_link');
            $table->string('github_link');

            $table->string('footer_text');
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
        Schema::dropIfExists('frontend');
    }
}
