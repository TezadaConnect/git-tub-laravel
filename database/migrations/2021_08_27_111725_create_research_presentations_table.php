<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResearchPresentationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('research_presentations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('department_id');
            $table->foreignId('research_class_id');
            $table->foreignId('research_category_id');
            $table->foreignId('research_agenda_id');
            $table->text('title');
            $table->text('researchers');
            $table->foreignId('research_involve_id');
            $table->foreignId('research_type_id');
            $table->text('keywords');
            $table->foreignId('funding_type_id');
            $table->decimal('funding_amount', 9, 2)->nullable();
            $table->string('funding_agency');
            $table->date('date_started');
            $table->date('date_targeted');
            $table->date('date_completed')->nullable();
            $table->string('conference_title')->nullable();
            $table->string('organizer')->nullable();
            $table->string('venue')->nullable();
            $table->date('date_presented')->nullable();
            $table->foreignId('research_level_id');
            $table->text('document_description');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('research_presentations');
    }
}