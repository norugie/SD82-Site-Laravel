@extends ( 'layout.layout' )

@section ( 'content' )
    <div class="row blog-post">
        <div class="col-md-12">
            <div class="media-body pr-3">
                <!--Main content of post-->
                <div class="blog-content">
                    <p class="lead">Accumsan consequat in melior nulla te tincidunt. Defui hendrerit illum odio te typicus valde validus vindico voco. Abico refero tation vulputate.</p>
                    <p>Exerci lobortis nutus paulatim plaga quae typicus usitas virtus vulpes. Augue gravis obruo persto zelus. Metuo obruo proprius saepius ut ymo. Camur comis nunc plaga praemitto roto rusticus tum ymo. Dolore esca exputo nisl paulatim volutpat. Ad aliquip amet facilisi oppeto paratus praemitto valde verto.</p>
                    <p>Consequat eum interdico praemitto vero verto. Consequat incassum neque paratus. Ea illum proprius roto venio. Abigo caecus esca eum importunus praemitto. Bene enim metuo premo valde. Modo validus vulputate. Abigo accumsan ex lucidus meus molior quia ullamcorper.</p>
                </div>
            </div>

            <h3 class="text-uppercase font-weight-bold my-5">
                Department Members
            </h3>

            <!-- The team -->
            <div class="team team-grid mt-4">
                <div class="row" data-toggle="isotope-grid" data-isotope-options='{"layoutMode": "fitRows", "itemSelector": ".grid-item"}'>

                    <!--Team Member-->
                    <div class="col-6 col-sm-4 col-md-3 grid-item">
                        <div class="team-member">
                            <img src="/assets/img/team/person-1.jpg" class="img-thumbnail" alt="Kate" />
                            <h5 class="name">
                            <a href="team-member.html" title="View Kate's profile">John Smith</a>
                            </h5>
                            <p class="role">Department Head</p>
                        </div>
                    </div>

                    <!--Team Member-->
                    <div class="col-6 col-sm-4 col-md-3 grid-item">
                        <div class="team-member">
                            <img src="/assets/img/team/person-2.jpg" class="img-thumbnail" alt="Kate" />
                            <h5 class="name">
                            <a href="team-member.html" title="View Kate's profile">John Doe</a>
                            </h5>
                            <p class="role">Team Lead</p>
                        </div>
                    </div>

                    <!--Team Member-->
                    <div class="col-6 col-sm-4 col-md-3 grid-item">
                        <div class="team-member">
                            <img src="/assets/img/team/person-3.jpeg" class="img-thumbnail" alt="Kate" />
                            <h5 class="name">
                            <a href="team-member.html" title="View Kate's profile">Eva Calvert</a>
                            </h5>
                            <p class="role">Designer</p>
                        </div>
                    </div>

                    <!--Team Member-->
                    <div class="col-6 col-sm-4 col-md-3 grid-item">
                        <div class="team-member">
                            <img src="/assets/img/team/person-5.jpg" class="img-thumbnail" alt="Kate" />
                            <h5 class="name">
                            <a href="team-member.html" title="View Kate's profile">Sam Johnson</a>
                            </h5>
                            <p class="role">Developer</p>
                        </div>
                    </div>
                </div>
            </div>

            <h3 class="text-uppercase font-weight-bold my-3">
                Department Files and Links
            </h3>
            <ul class="list-unstyled">
                <li>
                    <a href="#" class="d-flex align-items-center py-1 text-hover-no-underline">Department File Sample</a>
                </li>
                <li>
                    <a href="#" class="d-flex align-items-center py-1 text-hover-no-underline">Department Link Sample</a>
                <li>
                    <a href="#" class="d-flex align-items-center py-1 text-hover-no-underline">Department-specific resource Sample</a>
                </li>
            </ul>
        </div>
    </div>
@endsection