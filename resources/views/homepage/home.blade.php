<!DOCTYPE html>
<html lang="en">

<head>

    {{-- <script type="module" src="./js/main.js"></script> --}}
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>CamSola HOA</title>
    <!-- Favicon-->
    <link rel="icon" href="../assets/img/landingpage/icon_camella.webp">
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Titan+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/luxon@3.1.0/build/global/luxon.min.js"></script>

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">


    @vite('resources/sass/styles.scss')
    @vite('resources/js/app.js')






</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="../assets/img/navbar-logo.svg" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#announcement">Annoucements</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">More Info</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link-btn btn btn-outline-primary btn-sm" href="#login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">

            <div class="masthead-heading text-uppercase">Camella Solamonte Homeowners Association</div>
            <div class="masthead-subheading">A Healthy Community within your Hands...</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#announcement">Tell Me More</a>
        </div>
    </header>

    <!-- Announcement Grid-->
    <section class="page-section bg-light" id="announcement">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Public Announcements</h2>
                <h3 class="subtitle-announcement section-subheading text-muted">Latest:</h3>
            </div>

            <div class="row announcement-row">
                <!-------announcement---->
            </div>

        </div>
    </section>

    <!--BODs-->
    <section class="page-section" id="bod_page">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Board of Directors</h2>
                {{-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> --}}
            </div>
            <div class="row">
                <!-- BOD MEMBERS-->
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque,
                        laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Services</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">E-Commerce</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam
                        architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Responsive Design</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam
                        architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Web Security</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam
                        architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About-->
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">About</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>2009-2011</h4>
                            <h4 class="subheading">Our Humble Beginnings</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                                voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero
                                unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>March 2011</h4>
                            <h4 class="subheading">An Agency is Born</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                                voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero
                                unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>December 2015</h4>
                            <h4 class="subheading">Transition to Full Service</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                                voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero
                                unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>July 2020</h4>
                            <h4 class="subheading">Phase Two Expansion</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                                voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero
                                unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4>
                            Be Part
                            <br />
                            Of Our
                            <br />
                            Story!
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>
  
    <!-- Clients-->
    <div class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto"
                            src="assets/img/logos/microsoft.svg" alt="..." aria-label="Microsoft Logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto"
                            src="assets/img/logos/google.svg" alt="..." aria-label="Google Logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto"
                            src="assets/img/logos/facebook.svg" alt="..." aria-label="Facebook Logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/ibm.svg"
                            alt="..." aria-label="IBM Logo" /></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Contact Us</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <!-- * * * * * * * * * * * * * * *-->
            <!-- * * SB Forms Contact Form * *-->
            <!-- * * * * * * * * * * * * * * *-->
            <!-- This form is pre-integrated with SB Forms.-->
            <!-- To make this form functional, sign up at-->
            <!-- https://startbootstrap.com/solution/contact-forms-->
            <!-- to get an API token!-->
            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- Name input-->
                            <input class="form-control" id="name" type="text" placeholder="Your Name *"
                                data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <div class="form-group">
                            <!-- Email address input-->
                            <input class="form-control" id="email" type="email" placeholder="Your Email *"
                                data-sb-validations="required,email" />
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.
                            </div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <div class="form-group mb-md-0">
                            <!-- Phone number input-->
                            <input class="form-control" id="phone" type="tel" placeholder="Your Phone *"
                                data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is
                                required.</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <!-- Message input-->
                            <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Submit success message-->
                <!---->
                <!-- This is what your users will see when the form-->
                <!-- has successfully submitted-->
                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center text-white mb-3">
                        <div class="fw-bolder">Form submission successful!</div>
                        To activate this form, sign up at
                        <br />
                        <a
                            href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                    </div>
                </div>
                <!-- Submit error message-->
                <!---->
                <!-- This is what your users will see when there is-->
                <!-- an error submitting the form-->
                <div class="d-none" id="submitErrorMessage">
                    <div class="text-center text-danger mb-3">Error sending message!</div>
                </div>
                <!-- Submit Button-->
                <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled"
                        id="submitButton" type="submit">Send Message</button></div>
            </form>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; Camella Solamonte Home Owner Association 2022 - All Rights Reserved.</div>
                {{-- <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i
                            class="fab fa-linkedin-in"></i></a>
                </div> --}}
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#">Privacy Policy</a>
                    <a class="link-dark text-decoration-none" href="#">Terms of Use</a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="https://github.com/AngeloXD13">Dev: AngeloXD13</a>
                   
                </div>
            </div>
        </div>
    </footer>


    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        window.onload = function() {

            getAnnouncementDetails();
            getBODmembers();

        }


        function trim_description(description) {
            if (description.length > 10) {
                description = description.substring(0, 35) + "...";
                return description;
            } else
                return description;
        }

        function calDateAgo(dString = null) {
            //var dString = "2021-04-1 12:00:00";
            var tz_from = 'Asia/Manila';
            var DateTime = luxon.DateTime;


            var d1 = new Date(dString);
            var d2 = new Date();
            // console.log('d1', d1);
            // console.log('d2', d2);


            var t2 = d2.getTime();
            var t1 = d1.getTime();


            var d1Y = d1.getFullYear();
            var d2Y = d2.getFullYear();

            var d1M = d1.getMonth();
            var d2M = d2.getMonth();

            var time_obj = {};
            time_obj.year = d2.getFullYear() - d1.getFullYear();
            time_obj.month = (d2M + 12 * d2Y) - (d1M + 12 * d1Y);
            time_obj.week = parseInt((t2 - t1) / (24 * 3600 * 1000 * 7));
            time_obj.day = parseInt((t2 - t1) / (24 * 3600 * 1000));
            time_obj.hour = parseInt((t2 - t1) / (3600 * 1000));
            time_obj.minute = parseInt((t2 - t1) / (60 * 1000));
            time_obj.second = parseInt((t2 - t1) / (1000));

            for (const obj_key in time_obj) {
                if (time_obj[obj_key] == 0) {
                    delete time_obj[obj_key];
                }
            }
            var ago_text = 'just now';

            if (typeof Object.keys(time_obj)[0] != 'undefined') {
                var time_key = Object.keys(time_obj)[0];
                var time_val = time_obj[Object.keys(time_obj)[0]];
                time_key += (time_val > 1) ? 's' : '';
                ago_text = time_val + ' ' + time_key + ' ago';
            }

            return ago_text;
        }

        function getAnnouncementDetails() {

            var announcements_files = JSON.parse({{ Illuminate\Support\Js::from($announcements_files) }});
            //console.log(announcements_files);

            var announcements = JSON.parse({{ Illuminate\Support\Js::from($public_announcements) }});
            //console.log(announcements);

            announcements.forEach(announcement => {
                const row = document.getElementsByClassName('announcement-row');
                //console.log(row);

                const boxbootstrap = document.createElement('div');
                boxbootstrap.className = 'col-lg-4 col-sm-6 mb-4';
                row[0].appendChild(boxbootstrap)

                const announcement_item = document.createElement('div');
                announcement_item.className = "announcement-item-" + announcement.id + " announcement-item";
                boxbootstrap.appendChild(announcement_item);

                var announcement_thumbnail = null;
                announcements_files.forEach(file => {
                    if (file.announcement_id === announcement.id) {
                        announcement_thumbnail = "{{ asset('storage/images/announcement/') }}" + '/' + file
                            .filename;
                        //console.log(announcement_thumbnail);
                        return;
                    }
                });

                if (announcement_thumbnail == null) {
                    announcement_thumbnail = "../assets/img/navbar-logo.svg"
                }

                announcement_item.innerHTML = `
                    <a class="announcement-link" data-bs-toggle="modal" href="#announcementModal-` + announcement.id + `">
                        <div class="announcement-hover">
                            <div class="announcement-hover-content">
                                <h3 class="text-uppercase">See details</h3>
                            </div>
                        </div>      
                        <img class="img-fluid thumbnail-announcement" src="` + announcement_thumbnail + `" alt="..." />    
                    </a>
                    <div class="announcement-caption">
                        <div class="announcement-caption-heading"></div>
                        <div class="announcement-caption-subheading text-muted"></div>
                        <div class="announcement-caption-dateposted text-muted"></div> 
                    </div>
                `;


                var select = '.announcement-item-' + announcement.id + ' .announcement-caption ';
                const heading = document.querySelector(select + ' .announcement-caption-heading')
                const subheading = document.querySelector(select + ' .announcement-caption-subheading')
                const dateposted = document.querySelector(select + ' .announcement-caption-dateposted')

                //console.log(announcement.subject);

                heading.innerText = announcement.subject;
                subheading.innerText = announcement.description;
                dateposted.innerText = "Posted on " + calDateAgo(announcement.updated_at);

                //announcement modal

                const footer = document.querySelector('footer');

                //new div modal
                const announcement_modal = document.createElement('div');
                announcement_modal.setAttribute('class', 'announcement-modal modal fade');
                announcement_modal.setAttribute('id', ('announcementModal-' + announcement.id));
                announcement_modal.setAttribute('tabindex', '-1');
                announcement_modal.setAttribute('role', 'dialog');
                announcement_modal.setAttribute('aria-hidden', 'true');

                var ann_dateposted = new Date(announcement.updated_at);

                const announcement_image_slider = document.createElement('div');
                announcement_image_slider.setAttribute('class', 'carousel slide carousel-dark');
                announcement_image_slider.setAttribute('data-bs-ride', 'true');
                announcement_image_slider.setAttribute('id', ('announcement-' + announcement.id + '-slider'));
                announcement_image_slider.innerHTML = `
                    <div class="carousel-indicators">
                    </div>
                    <div class="carousel-inner">
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#`+('announcement-' + announcement.id + '-slider')+`" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#`+('announcement-' + announcement.id + '-slider')+`" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                `;

                const carousel_indicators = announcement_image_slider.querySelector('.carousel-indicators');

                const carousel_inner = announcement_image_slider.querySelector('.carousel-inner');

                var img_row = 0;
                announcements_files.forEach(file => {
                    if (file.announcement_id === announcement.id) {

                        announcement_thumbnail = "{{ asset('storage/images/announcement/') }}" + '/' + file.filename;

                        const slider_button = document.createElement('button');
                        slider_button.setAttribute("class", "carousel-btn");
                        slider_button.setAttribute("type", "button");
                        slider_button.setAttribute("data-bs-target", ('#announcement-' + announcement.id + '-slider'));
                        slider_button.setAttribute("data-bs-slide-to", img_row);
                        slider_button.setAttribute("aria-label", ("Slide " + img_row));
                        carousel_indicators.appendChild(slider_button);

                        const carousel_item = document.createElement('div');
                        carousel_item.setAttribute("class", "carousel-item");
                        carousel_inner.appendChild(carousel_item);

                        const img = document.createElement('img');
                        img.setAttribute("src", announcement_thumbnail)
                        img.setAttribute("class", "d-block w-100")

                        carousel_item.appendChild(img);

                        img_row++;

                    }
                });
                const first_carousel = announcement_image_slider.querySelector('.carousel-item');
                if(first_carousel != null){
                    //console.log("first_carousel", first_carousel);
                    first_carousel.setAttribute("class", "carousel-item active")
                }

                const first_slider_btn = announcement_image_slider.querySelector('.carousel-btn');
                if(first_slider_btn != null){
                    first_slider_btn.setAttribute("class", "carousel-btn active");
                    first_slider_btn.setAttribute("aria-current", "true");
                }

                announcement_modal.innerHTML = `
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                                    alt="Close modal" /></div>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <div class="modal-body">
                                            <!-- Project details-->
                                            <h2 class="text-uppercase">` + announcement.subject + `</h2>
                                            <p class="item-intro text-muted">` + "Posted " + calDateAgo(announcement.updated_at) + ", " + ann_dateposted + `</p>
                                            <!--img class="img-fluid d-block mx-auto" src="` + announcement_thumbnail + `" alt="..." /-->
                                            <div class="announcement-img-slider d-block mx-auto"></div>
                                            <p>` + announcement.description + `</p>
                        
                                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                                type="button">
                                                <i class="fas fa-xmark me-1"></i>
                                                Exit
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                `;

                if(first_carousel != null){
                    const div_annoucement_img_slider = announcement_modal.querySelector('.announcement-img-slider');
                    div_annoucement_img_slider.appendChild(announcement_image_slider)
                }
               
                //console.log("announcement", announcement_modal);
                //append to after the footer
                footer.parentNode.insertBefore(announcement_modal, footer.nextSibling);
            });
           // console.log(announcements);

        }

        function getBODmembers(){

            var information_files = JSON.parse({{ Illuminate\Support\Js::from($information_files) }});
            console.log(information_files);

            var data_bodmembers = JSON.parse({{ Illuminate\Support\Js::from($bodmembers) }});
            console.log(data_bodmembers);

            const bod_page = document.getElementById("bod_page");
            const row = bod_page.querySelector(".row");
            

            data_bodmembers.forEach(bodmember => {

                var bod_pic = null;
                information_files.forEach(file => {
                    if (file.i_content_id === bodmember.id) {

                        bod_pic = "{{ asset('storage/images/information/') }}" + '/' + file.filename;

                    }
                });

                const bod_item = document.createElement('div');
                bod_item.setAttribute("class","col-lg-4");
                row.appendChild(bod_item);

                const bod_member = document.createElement('div');
                bod_member.setAttribute("class","bod-member");
                bod_member.innerHTML = `
                    <img class="mx-auto rounded-circle" src="`+ bod_pic+`" alt="bod_profile_pic" />
                    <h4>`+ bodmember.heading1 +`</h4>
                    <h3 class="bod-position text-muted">`+ bodmember.heading2 +`</h3>
                    <h2 class="bod-email text-muted">`+ bodmember.heading3 +`</h2>
                    <h2 class="bod-contact number text-muted">`+ bodmember.heading4 +`</h2>
                `;
                bod_item.appendChild(bod_member);
                
            });

            




        }

    </script>

</body>

</html>
