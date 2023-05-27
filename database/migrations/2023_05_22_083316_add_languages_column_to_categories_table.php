<?php

use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('categories', function (Blueprint $table) {
               $table->string('en');
               $table->string('de');
            

        });

        $categories= [
            'Electronic',
            'Forniture',
            'Real Estate',
            'Gardening',
            'Motors',
            'Hobby',
            'Entertainment',
            'Books',
            'Animals',
            'Clothing'
            ];

        $categoriesDe= [
            'Elektronik',
            'Möbel',
            'Immobilie',
            'Gartenarbeit',
            'Motoren',
            'Hobby',
            'Unterhaltung',
            'Bücher',
            'Tiere',
            'Kleidung'
            ];
    

        $i=0;
        $x=0;

        foreach(Category::all() as $category) {
               $category->en=$categories[$i];
               $category->save();
               $i++;
            }

        
        foreach(Category::all() as $category) {
            $category->de=$categoriesDe[$x];
            $category->save();
            $x++;  
            }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn('en');
            $table->dropColumn('de');
        });
        
    }
};
