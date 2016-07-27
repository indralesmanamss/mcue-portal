<!-- Kode-Header End -->

        <div class="sub-header">

            <!-- SUB HEADER -->

        </div>

        <!-- Kode-Slider End -->

        <!--Kode-our-speaker-heading start-->

        <div class="Kode-page-heading">

            <div class="container">

                <!--ROW START-->

                <div class="row">

                    <div class="col-md-6 col-sm-6">

                        <h2>Event</h2>

                    </div>

                    <div class="col-md-6 col-sm-6">

                        <ul>

                            <li>

                                <a href="#"><i class="fa fa-home"></i>Home</a>

                            </li>

                            <li>

                                <a href="#"><i class="fa fa-angle-right"></i>Events</a>

                            </li>

                        </ul>

                    </div>

                </div>

                <!--ROW END-->

            </div>

        </div>

        <!--Kode-our-speaker-heading End--> 

        <!--KODE-EVENT-SHEDULE START--> 

        <div class="kode-blog-style-2">

            <!--KODE_TEAM_BLOG START-->
            <div class="container">
                <div class="row">
                    <?php 
                        $i = 0;
                        foreach ($model as $row) {
                    ?>
                        <div class="col-md-4">
                            <!--TEAM_BLOG_THUMB START-->
                            <div class="kode-team-blog">
                                <figure>
                                    <img src="<?php echo $row['img_url'];?>" alt=""/>
                                    <a href="#" class="culinaryClass"><i class="fa fa-search"></i></a>
                                </figure>
                                <div class="kode-thumb-caption">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-user"></i>Admin</a></li>
                                        <li><a href="#"><i class="fa fa-clock-o"></i><?php echo $row['date_post'];?></a></li>
                                    </ul>
                                    <h4><?php echo $row['title'];?></h4>
                                    <p><?php echo $row['content'];?></p>
                                    <span><a href="#" data-dialog="somedialog-1" class="trigger culinaryClass">Read More</a></span>
                                </div>
                            </div>
                            <!--TEAM_BLOG_THUMB END-->
                        </div>
                    <?php
                        $i++;
                            if ($i%3 == 0) {
                                echo '</div><div class="row">';
                            }
                        }

                    ?>
                    
                </div>
                
                <div class="row">
                    <div class="col-md-4">
                        <!--TEAM_BLOG_THUMB START-->
                        <div class="kode-team-blog">
                            <figure>
                                <img src="extra-images/culinary/ayam_kremes_potre_koneng_restaurant.jpg" alt=""/>
                                <a href="#"><i class="fa fa-search"></i></a>
                            </figure>
                            <div class="kode-thumb-caption">
                                <h4>Ayam Kremes Potre Koneng Restaurant</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-user"></i>John Doe</a></li>
                                    <li><a href="#"><i class="fa fa-clock-o"></i>Jan 11, 2015</a></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <span><a href="#">Read More</a></span>
                            </div>
                        </div>
                        <!--TEAM_BLOG_THUMB END-->
                    </div>
                    <div class="col-md-4">
                        <!--TEAM_BLOG_THUMB START-->
                        <div class="kode-team-blog">
                            <figure>
                                <img src="extra-images/culinary/bakso_bakar_pahlawan_trip.jpg" alt=""/>
                                <a href="#"><i class="fa fa-search"></i></a>
                            </figure>
                            <div class="kode-thumb-caption">
                                <h4>Bakso Bakar Pahlawan Trip</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-user"></i>John Doe</a></li>
                                    <li><a href="#"><i class="fa fa-clock-o"></i>Jan 11, 2015</a></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <span><a href="#">Read More</a></span>
                            </div>
                        </div>
                        <!--TEAM_BLOG_THUMB END-->
                    </div>
                    <div class="col-md-4">
                        <!--TEAM_BLOG_THUMB START-->
                        <div class="kode-team-blog">
                            <figure>
                                <img src="extra-images/culinary/harmoni_restaurant.jpg" alt=""/>
                                <a href="#"><i class="fa fa-search"></i></a>
                            </figure>
                            <div class="kode-thumb-caption">
                                <h4>Harmoni Restaurant</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-user"></i>John Doe</a></li>
                                    <li><a href="#"><i class="fa fa-clock-o"></i>Jan 11, 2015</a></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <span><a href="#">Read More</a></span>
                            </div>
                        </div>
                        <!--TEAM_BLOG_THUMB END-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <!--TEAM_BLOG_THUMB START-->
                        <div class="kode-team-blog">
                            <figure>
                                <img src="extra-images/culinary/stmj_glintung.jpg" alt=""/>
                                <a href="#"><i class="fa fa-search"></i></a>
                            </figure>
                            <div class="kode-thumb-caption">
                                <h4>STMJ Glintung</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-user"></i>John Doe</a></li>
                                    <li><a href="#"><i class="fa fa-clock-o"></i>Jan 11, 2015</a></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <span><a href="#">Read More</a></span>
                            </div>
                        </div>
                        <!--TEAM_BLOG_THUMB END-->
                    </div>
                    <div class="col-md-4">
                        <!--TEAM_BLOG_THUMB START-->
                        <div class="kode-team-blog">
                            <figure>
                                <img src="extra-images/culinary/mie_iblis_malang.jpg" alt=""/>
                                <a href="#"><i class="fa fa-search"></i></a>
                            </figure>
                            <div class="kode-thumb-caption">
                                <h4>Mie Iblis Malang</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-user"></i>John Doe</a></li>
                                    <li><a href="#"><i class="fa fa-clock-o"></i>Jan 11, 2015</a></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <span><a href="#">Read More</a></span>
                            </div>
                        </div>
                        <!--TEAM_BLOG_THUMB END-->
                    </div>
                    <div class="col-md-4">
                        <!--TEAM_BLOG_THUMB START-->
                        <div class="kode-team-blog">
                            <figure>
                                <img src="extra-images/culinary/surabi_gendut.jpg" alt=""/>
                                <a href="#"><i class="fa fa-search"></i></a>
                            </figure>
                            <div class="kode-thumb-caption">
                                <h4>Surabi Gendut</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-user"></i>John Doe</a></li>
                                    <li><a href="#"><i class="fa fa-clock-o"></i>Jan 11, 2015</a></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <span><a href="#">Read More</a></span>
                            </div>
                        </div>
                        <!--TEAM_BLOG_THUMB END-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <!--TEAM_BLOG_THUMB START-->
                        <div class="kode-team-blog">
                            <figure>
                                <img src="extra-images/culinary/gado_gado_citra_malang_city.jpg" alt=""/>
                                <a href="#"><i class="fa fa-search"></i></a>
                            </figure>
                            <div class="kode-thumb-caption">
                                <h4>Gado-gado Citra Malang City</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-user"></i>John Doe</a></li>
                                    <li><a href="#"><i class="fa fa-clock-o"></i>Jan 11, 2015</a></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <span><a href="#">Read More</a></span>
                            </div>
                        </div>
                        <!--TEAM_BLOG_THUMB END-->
                    </div>
                    <div class="col-md-4">
                        <!--TEAM_BLOG_THUMB START-->
                        <div class="kode-team-blog">
                            <figure>
                                <img src="extra-images/culinary/lesehan_pak_haji_sholeh.jpg" alt=""/>
                                <a href="#"><i class="fa fa-search"></i></a>
                            </figure>
                            <div class="kode-thumb-caption">
                                <h4>Lesehan Pak H.Sholeh</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-user"></i>John Doe</a></li>
                                    <li><a href="#"><i class="fa fa-clock-o"></i>Jan 11, 2015</a></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <span><a href="#">Read More</a></span>
                            </div>
                        </div>
                        <!--TEAM_BLOG_THUMB END-->
                    </div>
                    <div class="col-md-4">
                        <!--TEAM_BLOG_THUMB START-->
                        <div class="kode-team-blog">
                            <figure>
                                <img src="extra-images/culinary/lesehan_yogyakarta_malang.jpg" alt=""/>
                                <a href="#"><i class="fa fa-search"></i></a>
                            </figure>
                            <div class="kode-thumb-caption">
                                <h4>Lesehan Yogyakarta Malang</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-user"></i>John Doe</a></li>
                                    <li><a href="#"><i class="fa fa-clock-o"></i>Jan 11, 2015</a></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <span><a href="#">Read More</a></span>
                            </div>
                        </div>
                        <!--TEAM_BLOG_THUMB END-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <!--TEAM_BLOG_THUMB START-->
                        <div class="kode-team-blog">
                            <figure>
                                <img src="extra-images/culinary/taman_indie_resto_malang.jpg" alt=""/>
                                <a href="#"><i class="fa fa-search"></i></a>
                            </figure>
                            <div class="kode-thumb-caption">
                                <h4>Taman Indie Resto Malang</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-user"></i>John Doe</a></li>
                                    <li><a href="#"><i class="fa fa-clock-o"></i>Jan 11, 2015</a></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <span><a href="#">Read More</a></span>
                            </div>
                        </div>
                        <!--TEAM_BLOG_THUMB END-->
                    </div>
                    <div class="col-md-4">
                        <!--TEAM_BLOG_THUMB START-->
                        <div class="kode-team-blog">
                            <figure>
                                <img src="extra-images/culinary/amsterdam_garden_and_steak_house_malang.jpg" alt=""/>
                                <a href="#"><i class="fa fa-search"></i></a>
                            </figure>
                            <div class="kode-thumb-caption">
                                <h4>Amsterdam Garden & Steak House Malang</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-user"></i>John Doe</a></li>
                                    <li><a href="#"><i class="fa fa-clock-o"></i>Jan 11, 2015</a></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <span><a href="#">Read More</a></span>
                            </div>
                        </div>
                        <!--TEAM_BLOG_THUMB END-->
                    </div>
                    <div class="col-md-4">
                        <!--TEAM_BLOG_THUMB START-->
                        <div class="kode-team-blog">
                            <figure>
                                <img src="extra-images/culinary/malibu_steak_and_pizza_malang.jpg" alt=""/>
                                <a href="#"><i class="fa fa-search"></i></a>
                            </figure>
                            <div class="kode-thumb-caption">
                                <h4>Malibu Steak 'N' Pizza Malang</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-user"></i>John Doe</a></li>
                                    <li><a href="#"><i class="fa fa-clock-o"></i>Jan 11, 2015</a></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <span><a href="#">Read More</a></span>
                            </div>
                        </div>
                        <!--TEAM_BLOG_THUMB END-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <!--TEAM_BLOG_THUMB START-->
                        <div class="kode-team-blog">
                            <figure>
                                <img src="extra-images/culinary/padi_resto_galeri_malang.jpg" alt=""/>
                                <a href="#"><i class="fa fa-search"></i></a>
                            </figure>
                            <div class="kode-thumb-caption">
                                <h4>Padi Resto Galeri Malang</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-user"></i>John Doe</a></li>
                                    <li><a href="#"><i class="fa fa-clock-o"></i>Jan 11, 2015</a></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <span><a href="#">Read More</a></span>
                            </div>
                        </div>
                        <!--TEAM_BLOG_THUMB END-->
                    </div>
                    <div class="col-md-4">
                        <!--TEAM_BLOG_THUMB START-->
                        <div class="kode-team-blog">
                            <figure>
                                <img src="extra-images/culinary/ikan_bakar_52_malang.jpg" alt=""/>
                                <a href="#"><i class="fa fa-search"></i></a>
                            </figure>
                            <div class="kode-thumb-caption">
                                <h4>Ikan Bakar 52 Malang</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-user"></i>John Doe</a></li>
                                    <li><a href="#"><i class="fa fa-clock-o"></i>Jan 11, 2015</a></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <span><a href="#">Read More</a></span>
                            </div>
                        </div>
                        <!--TEAM_BLOG_THUMB END-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <!---PAGINATIOn START-->
                        <div class="pag">
                            <ul class="pagination">
                                <li>
                                  <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">Prev</span>
                                  </a>
                                </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li>
                                  <a href="#" aria-label="Next">
                                    <span aria-hidden="true">Next</span>
                                  </a>
                                </li>
                            </ul>
                        </div>
                        <!--PAGINATION END-->
                    </div>
                </div>
            </div>

        </div>

        <!--KODE-EVENT-SHEDULE END-->   