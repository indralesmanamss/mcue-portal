
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
						<h2>Tourism Destination</h2>
					</div>
					<div class="col-md-6 col-sm-6">
						<ul>
							<li>
								<a href="index.php"><i class="fa fa-home"></i>Home</a>
							</li>
							<li>
								<a href="touristdes.php"><i class="fa fa-angle-right"></i>Tourism Destination</a>
							</li>
						</ul>
					</div>
				</div>
				<!--ROW END-->
			</div>
		</div>
		<!--Kode-our-speaker-heading End-->
	
    <div id="main" class="content">
        <?php 
            foreach ($model as $row) {
                $content = $row['content'];
        ?> 
            <div class="about_us_content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="kf_heading_1">
                                <h2><?php echo $row['title'];?></h2>
                            </div>
                            <div class="kf_overview_list">
                                 <p align="justify"> <strong class="first-letter"><?php echo substr($row['content'], 0, 1);?></strong><?php echo substr($row['content'], 1); ?></p>
                            </div>                      
                        </div>
                        <div class="col-lg-6 col-md-6">
                                <div class="event-boxslider">
                                    <ul class="bxslider-banner">
                                        <li><img src="<?php echo $row['img_url'];?>" alt="" /></li>
                                    </ul>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
            }
        ?>
		<div class="about_us_content">
            <div class="container">
                <div class="row">
					<div class="col-lg-6 col-md-6">
                        <div class="event-boxslider">
                            <ul class="bxslider-banner">
                                <li><img src="extra-images/bns.jpg" alt="" /></li>
								<li><img src="extra-images/bns2.jpg" alt="" /></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                    	<div class="kf_heading_1">
                        	<h2>Batu Night Spectacular (BNS) Malang</h2>
                        </div>
						<div class="kf_overview_list">
							<p><strong class="first-letter">L</strong>ocated in Batu district, Batu Night Spectacular (BNS) is one of the most famous recreational sites in Malang, particularly at night. In this place, visitors can enjoy the beauty of night scenery in Malang with various decorative lights and enjoy challenging rides. There is also night market where you can buy unique handicraft of Malang.</p>
						</div>
                    </div>
                </div>
            </div>
        </div>
		<div class="about_us_content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                    	<div class="kf_heading_1">
                        	<h2>Balekambang Beach</h2>
                        </div>
						<div class="kf_overview_list">
							 <p align="justify"> <strong class="first-letter">L</strong>ooking at its contour and shape, Balekambang Beach’s contour has similar shape with Tanah Lot beach in Bali, particularly with the existence of temple above the rock in the middle of the sea. Located in southern part of Malang city, Balekambang beach is the favorite place of local people to relax.</p>
						</div>						
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="event-boxslider">
                            <ul class="bxslider-banner">
                                <li><img src="extra-images/balekambang.jpg" alt="" /></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="about_us_content">
            <div class="container">
                <div class="row">
					<div class="col-lg-6 col-md-6">
                        <div class="event-boxslider">
                            <ul class="bxslider-banner">
                                <li><img src="extra-images/pantai_sipelot.jpg" alt="" /></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                    	<div class="kf_heading_1">
                        	<h2>Si Pelot Beach</h2>
                        </div>
						<div class="kf_overview_list">
							<p><strong class="first-letter">N</strong>ot many people know this place, but Si pelot beach is a must-visit for beach lovers. Located in Pujiharjo village, the beach has brownish sand and blue, clear seawater. Unfortunately, it also has pretty strong waves so you have to be careful when swimming on the water. But don’t be worried; since you can swim on the sea, you can still enjoy the beautiful scenery of Si pelot beach</p>
						</div>
                    </div>
                </div>
            </div>
        </div>
		<div class="about_us_content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                    	<div class="kf_heading_1">
                        	<h2>Pulau Sempu</h2>
                        </div>
						<div class="kf_overview_list">
							 <p align="justify"> <strong class="first-letter">S</strong>empu island known locally as Pulau Sempu is actually a Nature Reserve (since 1928). Most famous is the blue lagoon - named Segara Anakan - where you can camp, barbeque, swim, and whatever you feel up to. The blue lagoon is connected to the sea only through several caves above and below the surface. That means that the water inside the lagoon remains calm, and makes a perfect place for swimming. It is also worthwhile to walk a little bit further to explore the island some more, since it is uninhabited except for the wildlife.
                             You need some good shoes to trek in about two hours through the forest. A fishermen boat will help you cross the straight. And, a ranger is coming with you as a guide. Sempu Island also has other fascinating spots, such as the beaches Waru-Waru, Pasir Panjang, Pasir Kembar, Fresh Water Beach and , and the lakes Telaga Lele (Catfish Lake, many catfish within the lake) and Telaga Sat (Dry Lake), and the Tiger Cave.</p>
						</div>						
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="event-boxslider">
                            <ul class="bxslider-banner">
                                <li><img src="extra-images/pulausempu.jpg" alt="" /></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="about_us_content">
            <div class="container">
                <div class="row">
					<div class="col-lg-6 col-md-6">
                        <div class="event-boxslider">
                            <ul class="bxslider-banner">
                                <li><img src="extra-images/sendangbiru.jpg" alt="" /></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                    	<div class="kf_heading_1">
                        	<h2>Sendang Biru Beach</h2>
                        </div>
						<div class="kf_overview_list">
							<p><strong class="first-letter">A</strong>rriving at Sendang Biru is driving into a colorful harbor with a lot of fishermen boats, small and big. It is not only the beach that makes this place really worthwhile to visit, but also the village and the people itself. The village is also well known as it holds the biggest fish auction in Malang. Walking around the village tells you how local fishermen live. Feel free to walk around, since the people are welcoming. he beach has quiet water, since just in front of it, you will find the also famous island Sempu. Only a narrow strait separates the island and Sendang Biru. The village itself faces the Indian Ocean.Most visitors just know the place as an entrance to the island Sempu, but that really underestimates the beauty of the village and its beach.</p>
						</div>
                    </div>
                </div>
            </div>
        </div>
		<div class="about_us_content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                    	<div class="kf_heading_1">
                        	<h2>Ngliyep Beach</h2>
                        </div>
						<div class="kf_overview_list">
							<p><strong class="first-letter">A</strong>ll available: steep cliffs, beautiful trees that fringe the kind of virgin beach beautifully, white sand, shells and huge waves. Hardly visited, because besides its beauty there is actually nothing. The white sand might persuade you to sun bath, have a barbeque, see local men try to catch a fish, or just to enjoy the sunset over the Indian Ocean.</p>
						</div>						
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="event-boxslider">
                            <ul class="bxslider-banner">
                                <li><img src="extra-images/ngliyepbeach.jpg" alt="" /></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about_us_content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="event-boxslider">
                            <ul class="bxslider-banner">
                                <li><img src="extra-images/sumber_pitu_waterfall.jpg" alt="" /></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="kf_heading_1">
                            <h2>Sumber Pitu Waterfall</h2>
                        </div>
                        <div class="kf_overview_list">
                            <p><strong class="first-letter">S</strong>umber Pitu Waterfall or the locals named Umbulan Pitu is the waterfall lies on the western area of Mount Bromo National Park. Precisely, in Duwet Krajan village, Tumpang district of Malang regency. This waterfall is about 30 km from the downtown of Malang, this is one of the largest springs in Duwet Krajan village. Sumber Pitu Waterfall ( the seven springs) come from the springs that emerge at seven points where are almost adjacent. Uniquely, this springs are in the cliffs and the water gushes out from the ground immediately as the waterfalls in a huge number. The discharge of the seven springs is up to 1,600 L / sec. As we know that there are many springs and the discharge of  the water that comes out , this is a possibility that the seven springs (coban pitu) are the underground river</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about_us_content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="kf_heading_1">
                            <h2>Jawa Timur Park</h2>
                        </div>
                        <div class="kf_overview_list">
                            <p><strong class="first-letter">J</strong>awa Timur Park or more often known as Jatim Park is a well-known theme park in Malang that offers various rides, and entertainments. There are pools, science stadium, 3D theatre,   
                            Go kart area, and many more. Located in city center of Malang, Jatim Park makes a great place for children to play and learn.
                            </p>
                        </div>                      
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="event-boxslider">
                            <ul class="bxslider-banner">
                                <li><img src="extra-images/ngliyepbeach.jpg" alt="" /></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about_us_content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="event-boxslider">
                            <ul class="bxslider-banner">
                                <li><img src="extra-images/eco_green_park.jpg" alt="" /></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="kf_heading_1">
                            <h2>Eco Green Park</h2>
                        </div>
                        <div class="kf_overview_list">
                            <p><strong class="first-letter">E</strong>co green park is built specially as education facility for children, loaded with educational value where they can learn about various things in this place. Family can visit this place during holiday, where they can enjoy mini zoo, have jungle adventure, geology science center, animal farm, duck kingdom, eco science center, and many more.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about_us_content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="kf_heading_1">
                            <h2>Angkut Museum</h2>
                        </div>
                        <div class="kf_overview_list">
                            <p><strong class="first-letter">A</strong>ngkut is a word that mean transportation in Javanese. Angkut museum is a tourist destination where you can learn about the history of transportation and its development around the world. There are many collection of transportation from bicycle, cars, motorbikes, public transportation and many more. The display were divided into 10 different country zones, and each zones is design uniquely so it feels like you were in different counties each time you visit  different zones. Angkut museum open from 12.00 to 20.00 and the ticket to Angkut museum can be bought from around IDR 70.000 on weekdays and IDR 80.000 on weekend. If you decided to bring your DSLR you have to pay an extra camera ticket for IDR 30.000
                            </p>
                        </div>                      
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="event-boxslider">
                            <ul class="bxslider-banner">
                                <li><img src="extra-images/angkut_museum.jpg" alt="" /></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
		<div class="about_us_content">
            <div class="container">
                <div class="row">
					<div class="col-lg-6 col-md-6">
                        <div class="event-boxslider">
                            <ul class="bxslider-banner">
                                <li><img src="extra-images/selecta.jpg" alt="" /></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                    	<div class="kf_heading_1">
                        	<h2>Selecta</h2>
                        </div>
						<div class="kf_overview_list">
							<p><strong class="first-letter">S</strong>electa is located in the village of Tulungrejo, Batu, about 1 hour from the city of Malang. Selecta is crowded recreation area during the holidays. Many games that are here like the flying fox, outbound, swimming pool, playground and much more. For reasonably priced entry ticket is 15.200 IDR/person</p>
						</div>
                    </div>
                </div>
            </div>
        </div>
		<div class="about_us_content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                    	<div class="kf_heading_1">
                        	<h2>Kusuma Agrowisata Malang</h2>
                        </div>
						<div class="kf_overview_list">
							<p><strong class="first-letter">W</strong> e have a number of different teams within our agency that specialise in different areas of business so you can be sure that you won’t receive a generic service and although we can’t boast years and years of service we can ensure you that is a good thing in this industry. Our teams are up to date with the latest technologies, media trends and are keen to prove themselves in this industry and that’s what you want from an advertising agency</p>
							<p>We work with clients big and small across a range of sectors and we utilise all forms of media to get your name out there in a way that’s right for you. We believe that analysis of your company and your customers is key in responding effectively to your promotional needs and we will work with you to fully understand your business to achieve the greatest amount of publicity possible so that you can see a return from the advertising.</p>
						</div>				
                    </div>
					<div class="col-lg-6 col-md-6">
                        <div class="event-boxslider">
                            <ul class="bxslider-banner">
                                <li><img src="extra-images/kusuma.jpg" alt="" /></li>
								<li><img src="extra-images/kusuma2.png" alt="" /></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about_us_content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                            <div class="event-boxslider">
                                <ul class="bxslider-banner">
                                    <li><img src="extra-images/wonosari_tea_plantation.jpg" alt="" /></li>
                                </ul>
                            </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="kf_heading_1">
                            <h2>Wonosari tea plantation</h2>
                        </div>
                        
                        <div class="kf_overview_list">
                            <p><strong class="first-letter">W</strong>onosari tea plantation is located 30 KM north of Malang, notably in Lawang District that lies on the foot of Mt Arjuno.  It has ease of access, by private car or even public transport. This tea plantation is the oldest tea plantation in East Java that was utilized as agrotourism. The idea started in 1998, as the application of Kaliklatak Plantation try out in Banyuwangi.
                            Wonosari is located at between 950 and over 1350 meters,  and has a cool weather. It spans over seven square kilometers with a stunning sweeping valleys of tea. The plantation was founded in 1910, aslo grown Indian Assamn, Chinese Cyrenci tea that are exported to Middle East, and United Kingdom.
                            Visitors can enjoy strolling through tea plantation and see the tea process in the factory, beside enjoy the nice scenery and fresh air. The region is also completed with hotel, tennis court, swimming pool and outbound area.
                            </p>
                        </div>              
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="about_us_content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="kf_heading_1">
                            <h2>Coban Pelangi</h2>
                        </div>
                        
                        <div class="kf_overview_list">
                            <p><strong class="first-letter">C</strong>oban Pelangi or also known as Rainbow Waterfall is the next in the list of famous tourist destinations in Malang. This natural attraction has interesting scenery where visitors can see rainbow among the waterfall even there is no rain. The 30-meter high waterfall is perfect for relaxing; you can play in the water or simply enjoy the scenery from the huts.
                            </p>
                        </div>              
                    </div>
                    <div class="col-lg-6 col-md-6">
                            <div class="event-boxslider">
                                <ul class="bxslider-banner">
                                    <li><img src="extra-images/coban_pelangi.jpg" alt="" /></li>
                                </ul>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about_us_content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                            <div class="event-boxslider">
                                <ul class="bxslider-banner">
                                    <li><img src="extra-images/singosari_temple.jpg" alt="" /></li>
                                </ul>
                            </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="kf_heading_1">
                            <h2>Singosari Temple</h2>
                        </div>
                        
                        <div class="kf_overview_list">
                            <p><strong class="first-letter">S</strong>ingosari temple, known locally as (Candi Singosari), located in Singosari district, Malang (about 12km north from Malang). This well preserved Hindu temple dates from 1300AD and is a reminder of the great Hindu kingdoms that ruled East Java before the arrival of Islam. A visit to the nearby bathing pools at Ken Dedes combines perfectly with Singosari Temple. Ken Dedes was the wife of the first King of Singhasari (later Singosari) and these bathing pools are believed to have been part of the royal court. There are some quite wonderful statues here. The whole area has some other fine relics from the early Hindu kingdoms including Candi Jago and Candi Kidal. Ask your guide or at Singosari Temple for further directions</p>
                        </div>              
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="about_us_content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="kf_heading_1">
                            <h2>Coban Rondo</h2>
                        </div>
                        
                        <div class="kf_overview_list">
                            <p><strong class="first-letter">C</strong>oban rondo is the next gorgeous waterfall located in Pandansari village that hides beautiful paradise. To reach the place, you must drive 12 km from Batu district, walk down the stairs, and enjoy the cool, green, and relaxing atmosphere of the waterfall.
                            </p>
                        </div>              
                    </div>
                    <div class="col-lg-6 col-md-6">
                            <div class="event-boxslider">
                                <ul class="bxslider-banner">
                                    <li><img src="extra-images/coban_rondo.jpg" alt="" /></li>
                                </ul>
                            </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="about_us_content">
            <div class="container">
                <div class="row">
					<div class="col-lg-6 col-md-6">
                            <div class="event-boxslider">
                                <ul class="bxslider-banner">
									<li><img src="extra-images/padepokan_seni_mangun_dharma.jpg" alt="" /></li>
                                </ul>
                            </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                    	<div class="kf_heading_1">
                        	<h2>Padepokan Seni Mangun Dharma</h2>
                        </div>
						
						<div class="kf_overview_list">
							<p><strong class="first-letter">P</strong>adepokan Seni Mangun Dharma (Mangun Dharma Art Center), Desa Tulus Besar Tumpang, (psmd@indo.net.id). Arts centre dedicated to the research, promotion and performance of traditional East Javanese artforms including dance, batik, shadow puppetry and carving. Superb place. Dance performances can be arranged on demand and are of excellent quality as the dancers are trained from childhood. Their motto is Rescuing the Arts of East Java.</p>
						</div>				
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="about_us_content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="kf_heading_1">
                            <h2>Taman Rekreasi Senaputra</h2>
                        </div>
                        
                        <div class="kf_overview_list">
                            <p><strong class="first-letter">T</strong>aman Rekreasi Senaputra (Senaputra Park), Jalan Brawijaya, Malang. Traditional East Java dances every Sunday morning at 10AM in the park during the dry season only. Every last Wednesday of the month there is a Wayang Kulit shadow puppet show starting at 10PM.  
                            </p>
                        </div>              
                    </div>
                    <div class="col-lg-6 col-md-6">
                            <div class="event-boxslider">
                                <ul class="bxslider-banner">
                                    <li><img src="extra-images/taman_rekreasi_senaputra.jpg" alt="" /></li>
                                </ul>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about_us_content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                            <div class="event-boxslider">
                                <ul class="bxslider-banner">
                                    <li><img src="extra-images/brawijaya_military_museum.jpg" alt="" /></li>
                                </ul>
                            </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="kf_heading_1">
                            <h2>Brawijaya Military Museum</h2>
                        </div>
                        
                        <div class="kf_overview_list">
                            <p><strong class="first-letter">B</strong>Brawijaya Military Museum, Jalan Ijen. M-Th 08.00-14.30 / F 08.00-11.30 / Sat-Sun 08.00-13.00. Museum of East Java's famous Brawijaya garrison of the Indonesian military. Interesting relics of Indonesia's revolutionary war of the late 1940s, as well as the communist purges of the late 1960s. An insight into the country's turbulent and violent past. Worth at least 45 minutes to an hour when walking through the Jalan Ijen area. </p>
                        </div>              
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="about_us_content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="kf_heading_1">
                            <h2>Mount Bromo</h2>
                        </div>
                        
                        <div class="kf_overview_list">
                            <p><strong class="first-letter">M</strong>ount Bromo (2,329m) is easily recognized as the entire top has been blown off and the crater inside constantly belches white sulfurous smoke. It sits inside the massive Tengger caldera. with a diameter of approximately 10km, surrounded by the Laut Pasir (Sea of Sand) of fine volcanic sand. The overall effect is unsettlingly unearthly, especially when compared to the lush green valleys all around the caldera.
                            The major access point is Cemoro Lawang (also Cemara Lawang or Cemora Lawang - blame the East Javanese accent!) at the northeastern edge of the caldera, but there are also trails from Tosari (northwest) and Ngadas (southwest). The village of Ngadisari, on the road from Probolinggo about 5.5km before Cemoro Lawang, marks the entrance to the national park. Both Cemoro Lawang and Ngadisari are rather picturesque, with brightly-painted houses and flower beds outside.

                            </p>
                        </div>              
                    </div>
                    <div class="col-lg-6 col-md-6">
                            <div class="event-boxslider">
                                <ul class="bxslider-banner">
                                    <li><img src="extra-images/taman_rekreasi_senaputra.jpg" alt="" /></li>
                                </ul>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about_us_content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                            <div class="event-boxslider">
                                <ul class="bxslider-banner">
                                    <li><img src="extra-images/jatimpark2-2.jpg" alt="" /></li>
                                    <li><img src="extra-images/jatimpark2.jpg" alt="" /></li>
                                </ul>
                            </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="kf_heading_1">
                            <h2>Jatim Park 2</h2>
                        </div>
                        
                        <div class="kf_overview_list">
                            <p><strong class="first-letter">W</strong> e have a number of different teams within our agency that specialise in different areas of business so you can be sure that you won’t receive a generic service and although we can’t boast years and years of service we can ensure you that is a good thing in this industry. Our teams are up to date with the latest technologies, media trends and are keen to prove themselves in this industry and that’s what you want from an advertising agency</p>
                            <p>We work with clients big and small across a range of sectors and we utilise all forms of media to get your name out there in a way that’s right for you. We believe that analysis of your company and your customers is key in responding effectively to your promotional needs and we will work with you to fully understand your business to achieve the greatest amount of publicity possible so that you can see a return from the advertising.</p>
                        </div>              
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="our_sponsors">	
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    	<div class="kf_heading_2">
                        	<h3>our sponsors</h3>
                            <span>Ipsum dolor sit amet, consectetuer adipiscing elit consectetuer</span>
                        </div>
                        
                    </div>
                    <div id="owl-demo-new" class="about-brand">	  
                      <div class="item"><a href="#"><img src="images/brand_logo1.png" alt="images/brand_logo"></a></div>
                      <div class="item"><a href="#"><img src="images/brand_logo2.png" alt="brand_logo"></a></div>
                      <div class="item"><a href="#"><img src="images/brand_logo3.png" alt="brand_logo"></a></div>
                      <div class="item"><a href="#"><img src="images/brand_logo4.png" alt="brand_logo"></a></div>
                      <div class="item"><a href="#"><img src="images/brand_logo5.png" alt="brand_logo"></a></div>
                      <div class="item"><a href="#"><img src="images/brand_logo1.png" alt="images/brand_logo"></a></div>
                      <div class="item"><a href="#"><img src="images/brand_logo2.png" alt="brand_logo"></a></div>
                      <div class="item"><a href="#"><img src="images/brand_logo3.png" alt="brand_logo"></a></div>
                      <div class="item"><a href="#"><img src="images/brand_logo4.png" alt="brand_logo"></a></div>
                      <div class="item"><a href="#"><img src="images/brand_logo5.png" alt="brand_logo"></a></div>
                    </div>
                </div>
            </div>
        </div>	
    	<!-- Kode-main-service-box End -->
    </div>