<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->enum('type', ['Page', 'Slider', 'Snippet']);
            $table->string('location');
            $table->string('banner')->nullable();
            $table->longText('content')->nullable();
            $table->enum('status', ['Active', 'Archived']);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });

        DB::table('contents')->insert(
            array(
                [
                    'title'   => 'About CMSD82',
                    'type'   => 'Snippet',
                    'location'   => 'about',
                    'content'  => '<h4 class="font-weight-bold text-justify text-dark text-uppercase mb-4 mt-4">ALL STUDENTS REALIZING THEIR FULL POTENTIAL<br />HONOURING AND RESPECTING CULTURE AND DIVERSITY<br />WELL-BEING WITHIN THE EDUCATIONAL COMMUNITY</h4>
                    <p class="text-grey-dark text-justify mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet erat augue. Aenean neque turpis, placerat at erat non, lacinia interdum odio. Aliquam eros nulla, rhoncus rutrum varius eu, malesuada et turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec in dui vitae diam consequat accumsan et quis lacus. Morbi auctor tortor erat, non gravida magna dapibus et. Proin viverra, arcu vitae maximus elementum, odio purus ullamcorper lorem, id maximus leo libero a nulla.</p>
                    <p class="text-grey-dark text-justify mb-4">Caecus facilisi facilisis refero rusticus saluto tincidunt validus. Abdo ea gilvus. Ibidem in nunc paratus.</p>',
                    'status' => 'Active'
                ]
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contents');
    }
};
