<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>BOOK MY TRIP</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- font awesome cdn -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- fonts -->
        <link rel = "stylesheet" href = "font.css">
        <!-- normalize css -->
        <link rel = "stylesheet" href = "normalise.css">
        <!-- custom css -->
        <link rel = "stylesheet" href = "utility.css">
        <link rel = "stylesheet" href = "style1.css">
        <link rel = "stylesheet" href = "responsive.css">
    </head>
    <body>
        <!-- navbar  -->
        <nav class = "navbar">
            <div class = "container flex">
                <a href = "index.html" class = "site-brand">
                    BookMy<span>Trip</span>
                </a>

                <button type = "button" id = "navbar-show-btn" class = "flex">
                    <i class = "fas fa-bars"></i>
                </button>
                <div id = "navbar-collapse">
                    <button type = "button" id = "navbar-close-btn" class = "flex">
                        <i class = "fas fa-times"></i>
                    </button>
                    <ul class = "navbar-nav">
                        <li class = "nav-item">
                            <a href = "index.php" class = "nav-link">Home</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "gallery.html" class = "nav-link">Gallery</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "about.html" class = "nav-link">About</a>
                        </li>
                        <li class = "nav-item">
                            <a href = "useradm.php" class = "nav-link">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- end of navbar  -->
        <!-- featured section -->
        <section id = "featured" class = "py-4">
            <div class = "container">
                <div class = "title-wrap">
                    <span class = "sm-title">know about some places before your travel</span>
                    <h2 class = "lg-title">featured places</h2>
                </div>

                <div class = "featured-row">
                    <div class = "featured-item my-2 shadow">
                        <img src = "https://th.bing.com/th/id/OIP.zC733-n9tviCWvNC29U5IQHaEo?pid=ImgDet&rs=1" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                Reo De Janeiro, Brazil
                            </span>
                            <div>
                                <p class = "text"> the capital of the state of Rio de Janeiro. The chief port of Brazil, it was the country's capital from 1763 until 1960, when it was replaced by Brasilia</p>
                            </div>a
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "https://i.pinimg.com/originals/9a/69/ca/9a69caffe1e7def56ea2d75c6a9bb70d.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                North Bondi, Australia
                            </span>
                            <div>
                                <p class = "text">North Bondi is a coastal, eastern suburb of Sydney, in the state of New South Wales, Australia 7 kilometres east of the Sydney</p>
                            </div>
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "https://www.pixsavor.com/uploads/large/germany/berlin-capital-of-germany-at-night.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                Berlin, Germany
                            </span>
                            <div>
                                <p class = "text">Berlin is the capital and largest city of Germany by both area and population. Its 3.7 million inhabitants make it the European Union's most populous city</p>
                            </div>
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "https://i1.wp.com/cushtravel.com/wp-content/uploads/2016/08/bangkok-attractions-wat-arun-1.jpg?resize=697%2C463&ssl=1" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                Khwaeng wat arun, thailand
                            </span>
                            <div>
                                <p class = "text">RISING LIKE A GLITTERING PALACE over the western side of the Chao Phraya River, Wat Arun is one of Thailand’s most spectacular and oldest temples. The site is renowned for its colorful, glazed ceramic tiles</p>
                            </div>
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "https://cdn.wallpapersafari.com/50/34/QhmPM4.jpg" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                Rome, Italy
                            </span>
                            <div>
                                <p class = "text">Rome is the capital city of Italy. It is also the capital of the Lazio region, the centre of the Metropolitan City of Rome, and a special comune named Comune di Roma Capitale</p>
                            </div>
                        </div>
                    </div>

                    <div class = "featured-item my-2 shadow">
                        <img src = "https://th.bing.com/th/id/OIP.eYE20Ss1Fq7sRvFXyBDPaQHaE9?pid=ImgDet&rs=1" alt = "featured place">
                        <div class = "featured-item-content">
                            <span>
                                <i class = "fas fa-map-marker-alt"></i>
                                fuvahmulah, maldives
                            </span>
                            <div>
                                <p class = "text">Fuvahmulah is unique and the most beautiful island in the Maldives, which is located on the equator between two South Atolls -Addu and Huvadhoo</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of featured section -->

        <!-- services section -->
        <section id = "services" class = "py-4">
            <div class = "container">
                <div class = "title-wrap">
                    <span class = "sm-title">know about services that we offer</span>
                    <h2 class = "lg-title">Our services</h2>
                </div>

                <div class = "services-row">
                    <div class = "services-item">
                        <span class = "services-icon">
                            <i class = "fas fa-hotel"></i>
                        </span>
                        <h3>Luxurious Hotel</h3>
                        <p class = "text">Luxurious hotels offer a wide range of services to cater to the needs of their guests, including 24-hour room service, concierge service, valet parking, and housekeeping.
                            Many luxurious hotels feature on-site spas, fitness centers, and swimming pools, allowing guests to relax and unwind during their stay.
                            Fine dining restaurants and bars are common amenities in luxurious hotels, offering guests the chance to indulge in gourmet cuisine and high-end cocktails.</p>
                        
                    </div>

                    <div class = "services-item">
                        <span class = "services-icon">
                            <i class = "fas fa-map-marked-alt"></i>
                        </span>
                        <h3>Trave Guide</h3>
                        <p class = "text"> Travel guides provide comprehensive information about destinations, including attractions, accommodations, transportation, and local customs and culture.
                            Many travel guides offer personalized itinerary planning services, helping travelers make the most of their time in a particular destination.
                            they even offer group tours, allowing travelers to explore a destination with a knowledgeable guide and a group of like-minded individuals.</p>
                    </div>

                    <div class = "services-item">
                        <span class = "services-icon">
                            <i class = "fas fa-money-bill"></i>
                        </span>
                        <h3>Suitable Price</h3>
                        <p class = "text"> We strive to offer competitive prices for our services without compromising on quality.
                            Our pricing strategy is based on market research and analysis to ensure we are offering the most suitable price for the service provided.
                            We offer various discounts and promotions throughout the year, making our services more accessible and affordable for a wider range of customers.
                            We believe in transparent pricing, and we provide clear and detailed pricing information to our customers before any service is rendered.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of services section -->

        <!-- testimonials section -->
        <section id = "testimonials" class = "py-4">
            <div class = "container">
                <div class = "title-wrap">
                    <span class = "sm-title">what our clients say about us</span>
                    <h2 class = "lg-title">testimonials</h2>
                </div>

                <div class = "test-row">
                    <div class = "test-item">
                        <p class = "text">"I recently visited Brazil and it was an incredible experience! The vibrant culture, stunning natural beauty, and delicious cuisine exceeded my expectations. I especially enjoyed exploring the Amazon rainforest and swimming in the crystal-clear waters of Fernando de Noronha. The locals were incredibly friendly and welcoming, making me feel right at home. I highly recommend Brazil as a must-visit destination for anyone looking for adventure, relaxation, and unforgettable memories."</p>
                        <div class = "test-item-info">
                            <img src = "https://i.pinimg.com/originals/ee/49/56/ee49560df0dd49911faf3964c709c0bf.jpg" alt = "testimonial">
                            <div>
                                <h3>Kevin Wilson</h3>
                                <p class = "text">Trip to Brazil</p>
                            </div>
                        </div>
                    </div>

                    <div class = "test-item">
                        <p class = "text">"My trip to the Maldives was nothing short of paradise on earth! The crystal-clear turquoise waters, white sandy beaches, and lush greenery were breathtaking. I loved snorkeling and scuba diving to see the vibrant marine life and coral reefs. The overwater bungalows were luxurious and the perfect place to unwind and enjoy the stunning ocean views. The Maldivian hospitality was top-notch, and the local cuisine was fresh and flavorful. Overall, it was a dream vacation that exceeded all my expectations.</p>
                        <div class = "test-item-info">
                            <img src = "https://i.pinimg.com/originals/44/35/50/443550b58651fdff1c5ea2e9465f93f0.jpg" alt = "testimonial">
                            <div>
                                <h3>Ben Davis</h3>
                                <p class = "text">Trip to Maldives</p>
                            </div>
                        </div>
                    </div>

                    <div class = "test-item">
                        <p class = "text">"My trip to Thailand was an amazing adventure! From the bustling streets of Bangkok to the serene beaches of Phuket, every moment was filled with excitement and wonder. The temples and historical sites were fascinating, and the local markets were a sensory delight. I especially enjoyed trying the delicious Thai food, from street vendors to upscale restaurants. The Thai people were incredibly friendly and welcoming, making me feel at home. The natural beauty of Thailand was awe-inspiring, from the majestic mountains to the crystal-clear waters.</p>
                        <div class = "test-item-info">
                            <img src = "https://i1.wp.com/farm8.staticflickr.com/7004/6545528581_4bd802e92b_z.jpg" alt = "testimonial">
                            <div>
                                <h3>Jaura Jones</h3>
                                <p class = "text">Trip to Thailand</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of testimonials section -->
        <!-- footer -->
        <footer class = "py-4">
            <div class = "container footer-row">
                <div class = "footer-item">
                    <a href = "index.html" class = "site-brand">
                        BookMy<span>Trip</span>
                    </a>
                    <p class = "text">Our travel website has a user-friendly interface, provide accurate and up-to-date information on destinations, hotels, and activities, offer a secure and reliable booking system, and provide excellent customer service. Additionally, it also offer a range of options for different budgets and preferences, and provide helpful tips and advice for travelers.</p>
                </div>

                <div class = "footer-item">
                    <h2>Follow us on: </h2>
                    <ul class = "social-links">
                        <li>
                            <a href = "#">
                                <i class = "fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "#">
                                <i class = "fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "#">
                                <i class = "fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "#">
                                <i class = "fab fa-pinterest"></i>
                            </a>
                        </li>
                        <li>
                            <a href = "#">
                                <i class = "fab fa-google-plus"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class = "footer-item">
                    <h2>Popular Places:</h2>
                    <ul>
                        <li><a href = "#">Thailand</a></li>
                        <li><a href = "#">Australia</a></li>
                        <li><a href = "#">Maldives</a></li>
                        <li><a href = "#">Switzerland</a></li>
                        <li><a href = "#">Germany</a></li>
                    </ul>
                </div>
            </div>
        </footer>
        <!-- end of footer -->

        <!-- js -->
        <script src = "script.js"></script>
        <script>
            // play/pause video
            let video = document.querySelector('.video-wrapper video');
            document.getElementById('play-btn').addEventListener('click', () => {
                if(video.paused){
                    video.play();
                } else {
                    video.pause();
                }
            });
        </script>
    </body>
</html>