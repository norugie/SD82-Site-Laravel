<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('title');
            $table->enum('type', ['Media', 'Post'])->default('Post');
            $table->foreignId('user_id')->constrained();
            $table->string('thumbnail')->default('default_thumbnail.jpg');
            $table->mediumText('desc')->nullable();
            $table->longText('content')->nullable();
            $table->enum('status', ['Active', 'Archived']);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });

        DB::table('posts')->insert(
            array(
                [
                    'slug'   => 'sample-news-post-lorem-ipsum-dolor-sit-amet',
                    'title'   => 'Sample News Post: Lorem ipsum dolor sit amet',
                    'type'  => 'Post',
                    'user_id'  => 1,
                    'thumbnail' => 'default_thumbnail.png',
                    'desc' => 'Quisque ullamcorper, tortor nec cursus sagittis, ligula elit facilisis ante.',
                    'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempus eros quis risus iaculis laoreet. Nulla euismod, risus vitae imperdiet finibus, quam sem imperdiet purus, quis lacinia nisi ligula id ex. Etiam dignissim, sapien ut dignissim faucibus, dui tortor aliquet velit, eget commodo mi lacus ut massa. Fusce in commodo mauris, in aliquam leo. Etiam congue ex at leo lobortis condimentum. Sed tristique imperdiet tellus, a cursus sapien placerat id. Pellentesque vitae porttitor tortor. Ut consequat justo quis ligula pellentesque ornare. Morbi eu iaculis neque. Quisque ut neque ut enim commodo pharetra ut id dolor. Praesent pellentesque molestie lorem, ut iaculis dolor cursus cursus. Suspendisse sodales elit sed egestas fermentum. Vestibulum condimentum pellentesque iaculis. Morbi suscipit metus urna, ut sagittis purus posuere eu.</p>
                    <p>Sed vulputate orci sed enim sollicitudin dignissim. Vivamus vitae tortor mollis, placerat libero a, consequat augue. Fusce dapibus erat vel tellus suscipit tincidunt. Sed risus orci, finibus id tincidunt et, porttitor vel ligula. Proin auctor id magna eu dictum. Donec pellentesque leo ut pulvinar venenatis. Nunc lacinia augue ac elit luctus, ac gravida erat mattis. Maecenas sed enim nulla. Suspendisse non porta mi, quis lacinia nulla. Pellentesque volutpat in nulla sit amet commodo. Quisque nibh lacus, hendrerit in quam a, placerat tincidunt erat. Duis bibendum justo ac quam tincidunt, non eleifend felis placerat. Nam eget posuere metus. Praesent lobortis turpis sit amet dui lacinia, eu facilisis augue maximus. Vivamus odio dolor, volutpat vel ultrices non, fringilla a neque.</p>',
                    'status'  => 'Active'
                ],
                [
                    'slug'   => 'sample-news-post-quisque-ullamcorper',
                    'title'   => 'Sample News Post: Quisque ullamcorper',
                    'type'  => 'Post',
                    'user_id'  => 2,
                    'thumbnail' => 'default_thumbnail.png',
                    'desc' => 'Ut luctus, lorem eu porttitor convallis, lectus erat imperdiet lectus, ac varius est dui eu justo.',
                    'content' => '<p>Aenean sit amet nunc velit. Mauris pulvinar consequat est, vehicula ornare metus iaculis non. Sed id porta felis, id vestibulum dui. Ut non nisi sit amet mi eleifend sollicitudin tincidunt nec enim. Sed pulvinar tellus in dictum vulputate. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam ac dapibus arcu. Mauris ante velit, convallis condimentum lorem eget, suscipit blandit justo. Quisque placerat sem id diam tincidunt varius. Aliquam sollicitudin ipsum eget turpis ornare, id dapibus enim euismod. Nunc quis condimentum nisl, vel accumsan ligula. Duis vitae libero rutrum, vulputate dui non, suscipit dui. Quisque mattis, nisi non porttitor accumsan, massa libero ultricies nisl, quis sollicitudin metus nunc ac orci. Praesent vitae congue nulla, mattis tempus metus.</p>
                    <p>Nulla elit sapien, laoreet sit amet arcu id, placerat eleifend nisl. Integer faucibus urna quis justo luctus, sed ultricies sapien aliquam. Suspendisse ullamcorper, sapien non condimentum porta, massa orci mollis velit, non imperdiet magna nisl id est. Nam in sem molestie, pretium nisi et, dignissim nisl. In vitae nunc eros. Mauris libero lorem, condimentum vel hendrerit sed, bibendum in est. Nunc tincidunt, risus id elementum interdum, nunc dolor vulputate augue, iaculis feugiat mi urna in lectus. Vestibulum sodales nisi sem, eu vehicula elit lacinia et. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur at pharetra augue.</p>',
                    'status'  => 'Active'
                ],
                [
                    'slug'   => 'sample-news-post-nunc-porta-tempor-suscipit',
                    'title'   => 'Sample News Post: Nunc porta tempor suscipit',
                    'type'  => 'Post',
                    'user_id'  => 1,
                    'thumbnail' => 'default_thumbnail.png',
                    'desc' => 'Nam odio lacus, ultrices vel sapien eu, tempor fermentum tortor.',
                    'content' => '<p>Etiam cursus aliquet nunc, ac placerat lorem condimentum eu. Quisque ullamcorper placerat tempor. Aenean blandit ligula arcu, at suscipit dui tincidunt et. Nunc cursus sem blandit ante facilisis, a condimentum massa tincidunt. Donec a condimentum ipsum, in suscipit augue. Mauris tempor purus eget dui varius ullamcorper. Nulla eget varius augue, sed pellentesque velit. Sed laoreet felis luctus ante finibus faucibus. Donec molestie egestas metus ac elementum.</p>
                    <p>Donec ut nisi id mi dignissim vestibulum. Cras auctor vitae nibh et rutrum. Morbi augue orci, commodo porttitor lorem eget, semper blandit lectus. Nullam quis pulvinar lorem. Praesent id libero commodo, laoreet sem in, consectetur libero. Phasellus ut velit eros. Phasellus feugiat nisi at eleifend auctor. Nunc sit amet malesuada eros, eget porta est. Aliquam egestas, quam non ultrices sollicitudin, orci massa eleifend urna, sed aliquam velit elit sed sapien. Pellentesque vitae ante lacus. Mauris urna est, efficitur nec fringilla eget, vulputate vel ipsum. Morbi turpis nulla, convallis quis euismod ac, vestibulum nec tellus. Nulla tempor vel eros et mollis. Cras vitae ipsum at libero facilisis mollis ac ut diam. Nulla interdum, diam vel consequat aliquet, nisi sem dapibus turpis, eu lacinia nibh augue in arcu.</p>
                    <p>Fusce egestas vulputate diam non bibendum. Etiam nisi nulla, accumsan non ultricies in, porttitor eget velit. Etiam vitae lacus a leo suscipit lacinia. Phasellus id massa ut erat blandit eleifend. Maecenas consectetur leo vulputate magna varius congue ut dignissim dolor. Donec nec purus vel metus molestie dictum. Nullam pulvinar ultricies eleifend. Fusce id pellentesque dolor. Nulla cursus sem eget lorem ultricies, sed mattis ligula fermentum. Donec in placerat nisi, sagittis fermentum risus. Nulla non tellus neque. Vestibulum in dictum eros, at imperdiet elit. Quisque hendrerit sed lectus sit amet pretium. Etiam eget ipsum metus.</p>
                    <p>Nam sodales gravida elit eu molestie. Cras eget feugiat nisl. Duis iaculis fermentum purus quis aliquam. In hac habitasse platea dictumst. Sed sollicitudin hendrerit magna in vestibulum. Fusce quis posuere tortor, nec mattis lectus. Aliquam varius varius leo ultricies varius. Duis finibus lorem ut lorem convallis, non cursus velit aliquet. Vestibulum ut scelerisque libero.</p>',
                    'status'  => 'Active'
                ],
                [
                    'slug'   => 'sample-news-post-quisque-ullamcorper-placerat-tempor',
                    'title'   => 'Sample News Post: Quisque ullamcorper placerat tempor',
                    'type'  => 'Post',
                    'user_id'  => 2,
                    'thumbnail' => 'default_thumbnail.png',
                    'desc' => 'Praesent id libero commodo, laoreet sem in, consectetur libero. Phasellus ut velit eros.',
                    'content' => '<p>Etiam cursus aliquet nunc, ac placerat lorem condimentum eu. Quisque ullamcorper placerat tempor. Aenean blandit ligula arcu, at suscipit dui tincidunt et. Nunc cursus sem blandit ante facilisis, a condimentum massa tincidunt. Donec a condimentum ipsum, in suscipit augue. Mauris tempor purus eget dui varius ullamcorper. Nulla eget varius augue, sed pellentesque velit. Sed laoreet felis luctus ante finibus faucibus. Donec molestie egestas metus ac elementum.</p>
                    <p>Fusce egestas vulputate diam non bibendum. Etiam nisi nulla, accumsan non ultricies in, porttitor eget velit. Etiam vitae lacus a leo suscipit lacinia. Phasellus id massa ut erat blandit eleifend. Maecenas consectetur leo vulputate magna varius congue ut dignissim dolor. Donec nec purus vel metus molestie dictum. Nullam pulvinar ultricies eleifend. Fusce id pellentesque dolor. Nulla cursus sem eget lorem ultricies, sed mattis ligula fermentum. Donec in placerat nisi, sagittis fermentum risus. Nulla non tellus neque. Vestibulum in dictum eros, at imperdiet elit. Quisque hendrerit sed lectus sit amet pretium. Etiam eget ipsum metus.</p>
                    <p>Nam sodales gravida elit eu molestie. Cras eget feugiat nisl. Duis iaculis fermentum purus quis aliquam. In hac habitasse platea dictumst. Sed sollicitudin hendrerit magna in vestibulum. Fusce quis posuere tortor, nec mattis lectus. Aliquam varius varius leo ultricies varius. Duis finibus lorem ut lorem convallis, non cursus velit aliquet. Vestibulum ut scelerisque libero.</p>',
                    'status'  => 'Active'
                ],
                [
                    'slug'   => 'sample-news-post-vestibulum-in-dictum-eros-at-imperdiet-elit',
                    'title'   => 'Sample News Post: Vestibulum in dictum eros, at imperdiet elit',
                    'type'  => 'Post',
                    'user_id'  => 1,
                    'thumbnail' => 'default_thumbnail.png',
                    'desc' => 'Nam sodales gravida elit eu molestie. Cras eget feugiat nisl. Duis iaculis fermentum purus quis aliquam.',
                    'content' => '<p>Etiam cursus aliquet nunc, ac placerat lorem condimentum eu. Quisque ullamcorper placerat tempor. Aenean blandit ligula arcu, at suscipit dui tincidunt et. Nunc cursus sem blandit ante facilisis, a condimentum massa tincidunt. Donec a condimentum ipsum, in suscipit augue. Mauris tempor purus eget dui varius ullamcorper. Nulla eget varius augue, sed pellentesque velit. Sed laoreet felis luctus ante finibus faucibus. Donec molestie egestas metus ac elementum.</p>
                    <p>Fusce egestas vulputate diam non bibendum. Etiam nisi nulla, accumsan non ultricies in, porttitor eget velit. Etiam vitae lacus a leo suscipit lacinia. Phasellus id massa ut erat blandit eleifend. Maecenas consectetur leo vulputate magna varius congue ut dignissim dolor. Donec nec purus vel metus molestie dictum. Nullam pulvinar ultricies eleifend. Fusce id pellentesque dolor. Nulla cursus sem eget lorem ultricies, sed mattis ligula fermentum. Donec in placerat nisi, sagittis fermentum risus. Nulla non tellus neque. Vestibulum in dictum eros, at imperdiet elit. Quisque hendrerit sed lectus sit amet pretium. Etiam eget ipsum metus.</p>',
                    'status'  => 'Active'
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
        Schema::dropIfExists('posts');
    }
}
