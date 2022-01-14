<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata', function (Blueprint $table) {
            $table->id();
            $table->string('biodata_type');
            $table->string('marital_status');
            $table->string('per_addr_district');
            $table->string('per_adr_upazila');
            $table->string('per_adr_road_home');
            $table->string('pre_adr_district');
            $table->string('pre_adr_upazila');
            $table->string('pre_adr_road_home');
            $table->string('nationality');
            $table->date('br_date');
            $table->string('body_color');
            $table->string('height');
            $table->string('weight');
            $table->string('bl_group');
            $table->string('professoin_type');
            $table->string('profession_name');
            $table->string('edu_media');
            $table->string('edu_board');
            $table->string('ssc_pass');
            $table->string('sss_dept');
            $table->integer('sss_pass_year')->length(4);
            $table->string('hsc_pass');
            $table->string('hsc_dept');
            $table->integer('hsc_pass_year')->length(4);
            $table->string('honours');
            $table->string('honours_inst');
            $table->integer('honours_pass_year')->length(4);
            $table->string('other_edu');
            $table->string('fath_name');
            $table->string('moth_name');
            $table->string('fath_profe');
            $table->string('moth_profe');
            $table->string('broth_num');
            $table->string('sist_num');
            $table->string('uncle');
            $table->string('family_eco_status');
            $table->string('beard');
            $table->string('pant_over_ankle');
            $table->string('pray_times');
            $table->string('begin_salah_five');
            $table->string('mahram_nonmahram');
            $table->string('correct_qur_reci');
            $table->string('madzhab');
            $table->string('film_serial');
            $table->string('loving_islami_book');
            $table->string('two_followed_scholars');
            $table->string('pir_mazar');
            $table->string('about_yourself');
            $table->string('parents_agreement');
            $table->string('why_marry');
            $table->string('wife_curtain');
            $table->string('husband_driven_curtain');
            $table->string('allow_study');
            $table->string('living_location');
            $table->string('dowry');
            $table->string('mohrana');
            $table->string('prof_details');
            $table->string('highest_age');
            $table->string('body_color_expect');
            $table->string('min_height');
            $table->string('min_edu');
            $table->string('district');
            $table->string('part_marital_status');
            $table->string('profe');
            $table->string('eco_status');
            $table->string('family_status');
            $table->string('virtu_in_brief');
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
        Schema::dropIfExists('biodata');
    }
}
