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
                    'banner'    => 'matbanner6.png',
                    'content'  => '<h4 class="font-weight-bold text-justify text-dark text-uppercase mb-4 mt-4">ALL STUDENTS REALIZING THEIR FULL POTENTIAL<br />HONOURING AND RESPECTING CULTURE AND DIVERSITY<br />WELL-BEING WITHIN THE EDUCATIONAL COMMUNITY</h4>
                    <p class="text-grey-dark text-justify mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet erat augue. Aenean neque turpis, placerat at erat non, lacinia interdum odio. Aliquam eros nulla, rhoncus rutrum varius eu, malesuada et turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec in dui vitae diam consequat accumsan et quis lacus. Morbi auctor tortor erat, non gravida magna dapibus et. Proin viverra, arcu vitae maximus elementum, odio purus ullamcorper lorem, id maximus leo libero a nulla.</p>
                    <p class="text-grey-dark text-justify mb-4">Caecus facilisi facilisis refero rusticus saluto tincidunt validus. Abdo ea gilvus. Ibidem in nunc paratus.</p>',
                    'status' => 'Active'
                ],
                [
                    'title'   => 'The Mountains Are Calling...',
                    'type'   => 'Slider',
                    'location'   => 'slider',
                    'banner'    => 'matbanner1.png',
                    'content'  => 'Come join us! We are always looking for great talent to join our team.',
                    'status' => 'Active'
                ],
                [
                    'title'   => 'Territory Acknowledgment',
                    'type'   => 'Slider',
                    'location'   => 'slider',
                    'banner'    => 'matbanner2.png',
                    'content'  => 'Acknowledging with respect the lands on which we live, work, play and learn as the traditional & unceded territories of the Gitxsan, Haisla, Nisga’a & Ts’msyen Peoples',
                    'status' => 'Active'
                ],
                [
                    'title'   => 'Truth & Reconciliation',
                    'type'   => 'Slider',
                    'location'   => 'slider',
                    'banner'    => 'matbanner3.png',
                    'content'  => 'Coast Mountains School District is committed to walking side by side with local Nations to meet the needs of Indigenous learners and their families.',
                    'status' => 'Active'
                ],
                [
                    'title'   => 'Engage, Ignite, Empower!',
                    'type'   => 'Slider',
                    'location'   => 'slider',
                    'banner'    => 'matbanner4.png',
                    'content'  => 'The Board of Education’s Strategic Plan... charting the course for student success.',
                    'status' => 'Active'
                ],
                [
                    'title'   => 'Monthly Theme Goes Here',
                    'type'   => 'Slider',
                    'location'   => 'slider',
                    'banner'    => 'matbanner5.png',
                    'content'  => NULL,
                    'status' => 'Active'
                ],
                [
                    'title'   => 'CMTF Job Postings',
                    'type'   => 'Snippet',
                    'location'   => 'cmtf',
                    'banner'    => NULL,
                    'content'  => '<p>Please submit separate applications for each posting.&nbsp; Internal applications should be sent to:&nbsp;<strong>hr@cmsd.bc.ca</strong></p>
                    <p>External applicants, please apply through Make a Future at&nbsp;&nbsp;<a href="https://www.makeafuture.ca/regions-districts/bc-public-school-districts/north/coast-mountains/">https://www.makeafuture.ca/regions-districts/bc-public-school-districts/north/coast-mountains/</a></p>
                    <p>Please ensure you state the posting number in your application. You will receive an email indicating that your application was received. Should you not receive this confirmation within 48 business hours, please phone 250-638-4403.</p>',
                    'status' => 'Active'
                ],
                [
                    'title'   => 'CUPE Job Postings',
                    'type'   => 'Snippet',
                    'location'   => 'cupe',
                    'banner'    => NULL,
                    'content'  => '<p><a href="http://cmsd.bc.ca/wp-content/uploads/2022/02/We-Are-Hiring-Join-our-CMSD82-Team-April-19-2022.pdf">We Are Hiring &ndash; Join our CMSD82 Team!</a></p>
                    <p>Please submit separate applications (via email is preferred) for each posting.</p>
                    <p>Applications should be sent to:&nbsp;<a href="mailto:hr@cmsd.bc.ca">hr@cmsd.bc.ca</a>&nbsp;</p>
                    <p>Please ensure you state the posting number in your application.&nbsp;You will receive an email indicating that your application was received.&nbsp; Should you not receive this confirmation within 48 business hours, please phone 250-638-4440.</p>
                    <p>For instructions on applying to the Coast Mountains School District 82,&nbsp;including Casual-on-Call,&nbsp;please click here:&nbsp;<a href="http://cmsd.bc.ca/wp-content/uploads/2018/08/Application-instructions.pdf">Application instructions</a>&nbsp;(updated).&nbsp; &nbsp; &nbsp;</p>
                    <p>For Complete Job Descriptions please click here:&nbsp;<a href="http://cmsd.bc.ca/cupe-job-postings/support-staff-job-descriptions/">Job Descriptions</a></p>',
                    'status' => 'Active'
                ],
                [
                    'title'   => 'Administrative and Exempt Job Postings',
                    'type'   => 'Snippet',
                    'location'   => 'exempt',
                    'banner'    => NULL,
                    'content'  => '<p><a href="http://cmsd.bc.ca/wp-content/uploads/2011/08/Information_on_Living_and_Working_in_SD82.pdf" target="_blank" rel="noopener noreferrer">Information</a><a href="http://cmsd.bc.ca/wp-content/uploads/2011/08/Information_on_Living_and_Working_in_SD82.pdf" target="_blank" rel="noopener noreferrer">_on_Living_and_Working_in_SD82</a></p>
                    <p><a href="http://cmsd.bc.ca/wp-content/uploads/2011/08/Map_of_BC_-_showing_SD82.pdf" target="_blank" rel="noopener noreferrer">Map_of_BC_-_showing_SD82</a></p>
                    <p><a href="https://www.youtube.com/watch?v=IRC7zFCf6EU">CMSD82 Recruitment Video &ndash; April 2021 &ndash; YouTube</a></p>
                    <p><label for="jobPostApplyForm:module-jobpost-applicant-only-canada">Only persons who are legally allowed to work in Canada can apply for this job. If you are not currently authorized to work in Canada, do not apply as the employer will not consider your job application</label></p>',
                    'status' => 'Active'
                ],
                [
                    'title'   => 'Staff Resource Page',
                    'type'   => 'Snippet',
                    'location'   => 'staff',
                    'banner'    => NULL,
                    'content'  => '<p>Welcome to the Coast Moutains School District 82 (CMSD82) Staff Resource page. You can access this section from the top of every page. We welcome feedback so if you would like to recommend a feature to be added to this section or have any other questions, you can contact us through the contact information means available in the top bar.</p>',
                    'status' => 'Active'
                ],
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
