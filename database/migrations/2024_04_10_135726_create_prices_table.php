<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Type;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('month_id')->constrained('months', indexName: 'price_month_id')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('type_id')->constrained('types', indexName: 'price_type_id')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('tonnage_id')->constrained('tonnages', indexName: 'price_tonnage_id')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->smallInteger('price')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('prices', function (Blueprint $table){
            $table->dropForeign('price_month_id');
            $table->dropForeign('price_type_id');
            $table->dropForeign('price_tonnage_id');
        });
        Schema::dropIfExists('prices');
    }
};
