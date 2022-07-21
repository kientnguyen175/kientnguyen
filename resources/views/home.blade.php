<x-layout>
    <x-slot:title>Home</x-slot>

    <x-slot:banner>
        <div class="isg-intro">
            <!-- MOBILE LOGO -->
            <div class="isg-mobile-logo">
                <img src="images/photos/square.jpg" alt="" />      
            </div>
            <!-- HEADER ICONS -->
            <ul class="isg-header-icons">
                <!-- LOGO -->
                <li class="isg-logo">
                    <img src="{{ asset('images/avatar.jpeg') }}" alt="" />      
                </li>
                <li class="isg-social">
                    <a href="{{ config('social.facebook') }}" class="fa fa-facebook">Facebook</a>
                </li>
                <li class="isg-social">
                    <a href="{{ config('social.github') }}" class="fa fa-github">GitHub</a>
                </li>
                <li class="isg-social">
                    <a href="{{ config('social.instagram') }}" class="fa fa-instagram" target="_blank">Instagram</a>
                </li>
                <li class="isg-social">
                    <a href="{{ config('social.youtube') }}" class="fa fa-youtube-play" target="_blank">Youtube</a>
                </li>
            </ul>
            <h1>KIEN TRUNG NGUYEN</h1>
            <p class="isg-subtitle">Web Developer</p>
        </div>
    </x-slot>

    <x-slot:slot>
        <div id="isg-boxes">
            <div class="isg-box one-third" data-bgcolor="#1F2041">
                <a id="about-link" href="#about" class="isg-panel-open">
                    <div class="isg-box-content">
                        <h2>PROFILE</h2>
                        <b>VIEW MORE</b>
                    </div>
                </a>
            </div>
            <div class="isg-box one-third" data-bgcolor="#422040">
                <a id="resume-link" href="#resume" class="isg-panel-open">
                    <div class="isg-box-content">
                        <h2>EDUCATION</h2>
                        <b>VIEW MORE</b>
                    </div>
                </a>
            </div>
            <div class="isg-box one-third" data-bgcolor="#2E4057">
                <a id="portfolio-link" href="#portfolio" class="isg-panel-open">
                    <div class="isg-box-content">
                        <h2>EXPERIENCE</h2>
                        <b>VIEW MORE</b>
                    </div>
                </a>
            </div>
            <div class="isg-box one-third" data-bgcolor="#782347">
                <a id="contact-link" href="#contact" class="isg-panel-open">
                    <div class="isg-box-content">
                        <h2>PERSONAL PROJECTS</h2>
                        <b>VIEW MORE</b>
                    </div>
                </a>
            </div>
            <div class="isg-box one-third" data-bgcolor="#1F2041">
                <a id="contact-link" href="#contact" class="isg-panel-open">
                    <div class="isg-box-content">
                        <h2>SKILLS</h2>
                        <b>VIEW MORE</b>
                    </div>
                </a>
            </div>
            <div class="isg-box one-third" data-bgcolor="#422040">
                <a id="contact-link" href="#contact" class="isg-panel-open">
                    <div class="isg-box-content">
                        <h2>AWARDS</h2>
                        <b>VIEW MORE</b>
                    </div>
                </a>
            </div>
        </div>
    </x-slot>

    <x-slot:panels>
        <div id="isg-panels">
            <!-- ABOUT -->
            <article id="about" class="isg-panel">
                <div class="isg-panel-inner" data-bordercolor="#1F2041">
                    <div class="isg-panel-close">
                        <span class="fa fa-times-circle-o"></span>
                    </div>
                    <div class="isg-panel-rotated-text">
                        <span class="isg-panel-rotated-text-inner">PROFILE</span>
                    </div>
                    <div class="isg-panel-up">
                        <span class="fa fa-arrow-circle-o-up"></span>
                    </div>
                    <div class="isg-panel-img">
                        <img src="images/photos/about.jpg" alt="" />
                    </div>
                    <h2>ABOUT ME</h2>
                    <!-- TABLE -->
                    <div class="isg-table">
                        <div class="isg-table-row">
                            <div>
                                <p><i class="fa fa-user"></i> <strong>Date of birth</strong></p>
                                <p>April 28th 1980</p>
                            </div>
                            <div>
                                <p><i class="fa fa-language"></i> <strong>Languages</strong></p>
                                <p>English, German, French</p>
                            </div>
                        </div>
                        <div class="isg-table-row">
                            <div>
                                <p><i class="fa fa-futbol-o"></i> <strong>Hobbies</strong></p>
                                <p>Soccer, Puzzles, Yoga, Music</p>
                            </div>
                            <div>
                                <p><i class="fa fa-check-circle"></i> <strong>Availability</strong></p>
                                <p>Part Time</p>
                            </div>
                        </div>
                    </div>
                    <p>Proident quo ipsum. Aliquip lorem irure hic quid, et elit litteris relinqueret. Sunt arbitror efflorescere. Ingeniis non pariatur iis o elit arbitrantur iis an magna philosophari o nam aute enim ea excepteur quo ab laboris ita consequat ex mandaremus exquisitaque de excepteur de quid a singulis hic id dolore ullamco quibusdam.</p>
                    <hr/>
                    <h2>WHAT CAN I DO</h2>
                    <!-- ICON BOX -->
                    <div class="isg-circle-icon-box">
                        <div class="isg-circle-icon-left">
                            <!-- ICON -->
                            <div class="isg-circle-icon-container">
                                <a href="#" class="fa fa-paint-brush"></a>
                            </div>
                            <!-- ICON TEXT-->
                            <div class="isg-circle-icon-text">
                                <h5>Web Design</h5>
                                <p>Te summis mentitum ullamco, aliqua nam officia do nescius dolor quem an ipsum,eu quorum laborum philosophari. Sint est ubi aliqua cernantur nam. Quo ubi praetermissum, iis anim lorem ad admodum.</p>
                            </div>
                        </div>
                    </div>
                    <!-- ICON BOX -->
                    <div class="isg-circle-icon-box">
                        <div class="isg-circle-icon-left">
                            <!-- ICON -->
                            <div class="isg-circle-icon-container">
                                <a href="#" class="fa fa-wordpress"></a>
                            </div>
                            <!-- ICON TEXT-->
                            <div class="isg-circle-icon-text">
                                <h5>WordPress</h5>
                                <p>Officia exercitation do nescius. Est nam legam sint duis. Cernantur quis iudicem ingeniis, sint hic mandaremus. Hic summis dolore e quibusdam, commodo. Sed velit doctrina philosophari aut commodo.</p>
                            </div>
                        </div>
                    </div>
                    <!-- ICON BOX -->
                    <div class="isg-circle-icon-box">
                        <div class="isg-circle-icon-left">
                            <!-- ICON -->
                            <div class="isg-circle-icon-container">
                                <a href="#" class="fa fa-eye"></a>
                            </div>
                            <!-- ICON TEXT-->
                            <div class="isg-circle-icon-text">
                                <h5>SEO</h5>
                                <p>Voluptate illum dolor ita ipsum, quid deserunt singulis, labore admodum itamultos malis ea nam nam tamen foreamet. Vidisse quid incurreret ut ut labore possumus. Aliquip lorem irure hic quid, et elit.</p>
                            </div>
                        </div>
                    </div>
                    <!-- ICON BOX -->
                    <div class="isg-circle-icon-box">
                        <div class="isg-circle-icon-left">
                            <!-- ICON -->
                            <div class="isg-circle-icon-container">
                                <a href="#" class="fa fa-apple"></a>
                            </div>
                            <!-- ICON TEXT-->
                            <div class="isg-circle-icon-text">
                                <h5>Application</h5>
                                <p>Legam e officia ita nae nam varias, admodum ea illum officia, nisi pariatur id doloreirure, est proident se probant, et lorem appellat possumus appellat. Excepteur de quid a singulis hic id dolore ullamco.</p>
                            </div>
                        </div>
                    </div>
                    <hr/>
                    <h2>WHAT MY CLIENTS SAY</h2>
                    <div id="testimonial-carousel" class="isg-slick-carousel">
                        <figure class="isg-testimonial">
                            <div class="isg-author">
                                <img src="images/photos/testimonial1.jpg" alt="" />
                                <h6>Leon Bailey</h6>
                                <span>Themeforest</span>
                            </div>
                            <blockquote>
                                <p>Cillum de hic culpa probant. Ex noster mentitum, ullamco dolore senserit. Nulla arbitror de amet quorum ad te voluptate ea cernantur, duis graviterque senserit elit arbitror ubi nulla doctrina a philosophari, ut minim ad nulla ad id amet magna aut eiusmod, id eram aut elit, quae admodum arbitrantur. Qui est amet quis sint an probant.</p>
                            </blockquote>
                        </figure>
                        <figure class="isg-testimonial">
                            <div class="isg-author">
                                <img src="images/photos/testimonial2.jpg" alt="" />
                                <h6>Terri Williams</h6>
                                <span>Codecanyon</span>
                            </div>
                            <blockquote>
                                <p>Lorem comprehenderit incididunt illum probant, si laboris cohaerescant. In fore relinqueret, officia eu veniam. Iudicem elit quamquam quamquam quo qui enim illustriora. Tempor dolore possumus, iudicem esse fugiat e irure. Velit nostrud laboris, veniam mentitum iis mandaremus te ab appellat si quamquam e te culpa arbitror probant.</p>
                            </blockquote>
                        </figure>
                        <figure class="isg-testimonial">
                            <div class="isg-author">
                                <img src="images/photos/testimonial3.jpg" alt="" />
                                <h6>Sergio Holt</h6>
                                <span>Photodune</span>
                            </div>
                            <blockquote>
                                <p>Varias cernantur do tamen tamen, pariatur anim se excepteur praetermissum, ita te quem ingeniis, possumus quid cupidatat mentitum. Tamen distinguantur cupidatat eram laborum nam occaecat nisi id laborum despicationes, ubi ut familiaritatem non quamquam ipsum admodum ab fugiat ab eiusmod, sed illum firmissimum ea de senserit o cupidatat qui ex.</p>
                            </blockquote>
                        </figure>
                        <figure class="isg-testimonial">
                            <div class="isg-author">
                                <img src="images/photos/testimonial4.jpg" alt="" />
                                <h6>Carrie Miles</h6>
                                <span>Graphicriver</span>
                            </div>
                            <blockquote>
                                <p>Esse ita sed culpa cupidatat. E esse fabulas occaecat, senserit eu sunt excepteur. Incurreret firmissimum an mentitum, voluptate id irure ingeniis non in an distinguantur est eu offendit ex admodum. Se minim aute tamen appellat. Varias pariatur laboris de lorem cernantur qui eruditionem. Nostrud malis minim ad esse.</p>
                            </blockquote>
                        </figure>
                    </div>
                </div>
            </article>
            <!-- RESUME -->
            <article id="resume" class="isg-panel">
                <div class="isg-panel-inner" data-bordercolor="#422040">
                    <!-- CLOSE ICON -->
                    <div class="isg-panel-close">
                        <span class="fa fa-times-circle-o"></span>
                    </div>
                    <!-- ROTATED TEXT -->
                    <div class="isg-panel-rotated-text">
                        <span class="isg-panel-rotated-text-inner">RESUME</span>
                    </div>
                    <!-- UP ICON -->
                    <div class="isg-panel-up">
                        <span class="fa fa-arrow-circle-o-up"></span>
                    </div>
                    <!-- PANEL IMG -->
                    <div class="isg-panel-img">
                        <img src="images/photos/resume.jpg" alt="" />
                    </div>
                    <h2>EXPERIENCE</h2>
                    <!-- RESUME BOX -->
                    <div class="isg-resume-box">
                        <div class="isg-resume-title">
                            <div class="isg-title-container">
                                <h6>Senior Developer - Google Inc</h6>
                                <p><strong>2010 to present</strong></p>
                            </div>
                            <div class="isg-resume-date">2010</div>
                        </div>
                        <div class="isg-resume-content">
                            <p>Nescius malis eram si malis, elit de officia, quibusdam summis pariatur appellat se litteris ad legam, irure ubi offendit do te irure nescius comprehenderit, mandaremus eram ullamco e eu esse malis in officia. Quae vidisse expetendis se quem litteris ubi despica.</p>
                        </div>
                    </div>
                    <!-- RESUME BOX -->
                    <div class="isg-resume-box">
                        <div class="isg-resume-title">
                            <div class="isg-title-container">
                                <h6>Art Director - Designs Ltd</h6>
                                <p><strong>2008-2010</strong></p>
                            </div>
                            <div class="isg-resume-date">2008</div>
                        </div>
                        <div class="isg-resume-content">
                            <p>Do aute fugiat fugiat singulis, culpa efflorescere tempor quis ullamco ita e in instituendarum id deserunt culpa senserit admodum. Ex malis distinguantur. Multos tempor te culpa sint, velit commodo de quid veniam. Labore eiusmod an laboris.</p>
                        </div>
                    </div>
                    <!-- RESUME BOX -->
                    <div class="isg-resume-box">
                        <div class="isg-resume-title">
                            <div class="isg-title-container">
                                <h6>Web Designer - Web Agency</h6>
                                <p><strong>2005-2008</strong></p>
                            </div>
                            <div class="isg-resume-date">2005</div>
                        </div>
                        <div class="isg-resume-content">
                            <p>Nam sed nisi fore amet, irure litteris non tractavissent, ipsum arbitror ex familiaritatem do ut nulla est magna ita pariatur nulla summis aut varias, proident summis incurreret doctrina, ita proident ubi admodum, nam malis nulla ne eiusmod. Admodum non ipsum laboris.</p>
                        </div>
                    </div>
                    <hr/>
                    <h2>EDUCATION</h2>
                    <!-- RESUME BOX -->
                    <div class="isg-resume-box">
                        <div class="isg-resume-title">
                            <div class="isg-title-container">
                                <h6>The University of Texas</h6>
                                <p><strong>1997-2002</strong></p>
                            </div>
                            <div class="isg-resume-date">1997</div>
                        </div>
                        <div class="isg-resume-content">
                            <p>Incididunt efflorescere se doctrina aut quid non probant, ubi sed esse mandaremus, ex dolore o duis ex proident si irure ad ea se nulla possumus, nescius elit consequat eiusmod quo in nam sunt velit aute. Ea minim dolore aliqua arbitror qui ab ipsum quae cillum commodo o an aut eram officia id aut.</p>
                        </div>
                    </div>
                    <!-- RESUME BOX -->
                    <div class="isg-resume-box">
                        <div class="isg-resume-title">
                            <div class="isg-title-container">
                                <h6>Institue of Design</h6>
                                <p><strong>1994-1997</strong></p>
                            </div>
                            <div class="isg-resume-date">1994</div>
                        </div>
                        <div class="isg-resume-content">
                            <p>Quibusdam duis iudicem iudicem, ex quid quis legam incurreret se quo aute quibusdam vidisse non qui admodum ita laborum. Quamquam dolor aute laborum malis, culpa hic quo nisi doctrina te incurreret duis minim deserunt fore, nisi aliquip distinguantur.</p>
                        </div>
                    </div>
                    <hr/>
                    <h2>SKILLS</h2>
                    <p>Minim singulis pariatur. De eram exercitation, cillum admodum non expetendis. Te qui sunt mandaremus.</p>
                    <!-- SKILL BARS -->
                    <div class="isg-skills">
                        <div class="isg-skillbar" data-percent="70%">
                            <div class="isg-skillbar-title"><span>HTML5</span>
                            </div>
                            <div class="isg-skillbar-bar"></div>
                            <div class="isg-skill-bar-percent">70%</div>
                        </div>
                        <div class="isg-skillbar" data-percent="65%">
                            <div class="isg-skillbar-title"><span>CSS3</span>
                            </div>
                            <div class="isg-skillbar-bar"></div>
                            <div class="isg-skill-bar-percent">65%</div>
                        </div>
                        <div class="isg-skillbar" data-percent="50%">
                            <div class="isg-skillbar-title"><span>jQuery</span>
                            </div>
                            <div class="isg-skillbar-bar"></div>
                            <div class="isg-skill-bar-percent">50%</div>
                        </div>
                        <div class="isg-skillbar" data-percent="80%">
                            <div class="isg-skillbar-title"><span>PHP</span>
                            </div>
                            <div class="isg-skillbar-bar"></div>
                            <div class="isg-skill-bar-percent">80%</div>
                        </div>
                        <div class="isg-skillbar" data-percent="100%">
                            <div class="isg-skillbar-title"><span>Wordpress</span>
                            </div>
                            <div class="isg-skillbar-bar"></div>
                            <div class="isg-skill-bar-percent">100%</div>
                        </div>
                        <div class="isg-skillbar" data-percent="75%">
                            <div class="isg-skillbar-title"><span>SEO</span>
                            </div>
                            <div class="isg-skillbar-bar"></div>
                            <div class="isg-skill-bar-percent">75%</div>
                        </div>
                        <div class="isg-skillbar" data-percent="70%">
                            <div class="isg-skillbar-title"><span>Photoshop</span>
                            </div>
                            <div class="isg-skillbar-bar"></div>
                            <div class="isg-skill-bar-percent">70%</div>
                        </div>
                        <!-- End Skill Bars -->
                    </div>
                    <a href="#contact" class="isg-button isg-panel-open">Hire Me</a>
                    <a href="#" class="isg-button primary">Download Resume</a>
                </div>
            </article>
            <!-- PORTFOLIO -->
            <article id="portfolio" class="isg-panel">
                <div class="isg-panel-inner" data-bordercolor="#2E4057">
                    <!-- CLOSE ICON -->
                    <div class="isg-panel-close">
                        <span class="fa fa-times-circle-o"></span>
                    </div>
                    <!-- ROTATED TEXT -->
                    <div class="isg-panel-rotated-text">
                        <span class="isg-panel-rotated-text-inner">PORTFOLIO</span>
                    </div>
                    <!-- UP ICON -->
                    <div class="isg-panel-up">
                        <span class="fa fa-arrow-circle-o-up"></span>
                    </div>
                    <!-- PANEL CONTENT -->
                    <h2>PORTFOLIO</h2>
                    <p>Labore o deserunt est legam, quae illustriora deserunt aliqua cupidatat. Possumus instituendarum hic iudicem o ingeniis summis quorum arbitror fugiat ad hic sint ingeniis sempiternum.</p>
                    <div class="isg-filter-menu-icon"><i class="fa fa-bars"></i> FILTERS</div>
                    <ul id="isg-portfolio-filter" class="isg-portfolio-filter">
                        <li data-filter="all" class="isg-filter-active">All</li>
                        <li data-filter="cat1">Category 1</li>
                        <li data-filter="cat2">Category 2</li>
                        <li data-filter="cat3">Category 3</li>
                    </ul>
                    <!-- PORTFOLIO ITEMS -->
                    <div id="isg-portfolio-container" class="isg-portfolio-container">
                        <!-- GALLERY 1 -->
                        <figure class="isg-portfolio-item" data-filter="cat1">
                            <a id="gallery1" href="#"></a>
                            <img src="images/photos/portfolio-1.jpg" alt="" />
                            <i class="fa fa-search"></i>
                            <figcaption>
                                <h4>IMAGE GALLERY</h4>
                                <p>Cernantur enim se cernantur illum.</p>
                            </figcaption>
                        </figure>
                        <!-- GALLERY 2 -->
                        <figure class="isg-portfolio-item" data-filter="cat2 cat3">
                            <a id="gallery2" href="#"></a>
                            <img src="images/photos/portfolio-2.jpg" alt="" />
                            <i class="fa fa-play"></i>
                            <figcaption>
                                <h4>VIDEO GALLERY</h4>
                                <p>Illum excepteur e domestic sia.</p>
                            </figcaption>
                        </figure>
                        <!-- GALLERY 3 -->
                        <figure class="isg-portfolio-item" data-filter="cat2">
                            <a id="gallery3" href="#"></a>
                            <img src="images/photos/portfolio-3.jpg" alt="" />
                            <i class="fa fa-search"></i>
                            <figcaption>
                                <h4>AUTOPLAY ON</h4>
                                <p>Do labore pariatur ut fugiat cupid.</p>
                            </figcaption>
                        </figure>
                        <!-- GALLERY 4 -->
                        <figure class="isg-portfolio-item" data-filter="cat3">
                            <a id="gallery4" href="#"></a>
                            <img src="images/photos/portfolio-4.jpg" alt="" />
                            <i class="fa fa-search"></i>
                            <figcaption>
                                <h4>MINIMAL</h4>
                                <p>Nisi commodo commodo, voluptate sunt.</p>
                            </figcaption>
                        </figure>
                        <!-- EXTERNAL LINK -->
                        <figure class="isg-portfolio-item" data-filter="cat1 cat3">
                            <a href="https://themeforest.net/user/egemenerd?ref=egemenerd" target="_blank"></a>
                            <img src="images/photos/portfolio-5.jpg" alt="" />
                            <i class="fa fa-chain"></i>
                            <figcaption>
                                <h4>EXTERNAL LINK</h4>
                                <p>Cillum nescius hic anim cillum.</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </article>
            <!-- CONTACT -->
            <article id="contact" class="isg-panel">
                <div class="isg-panel-inner" data-bordercolor="#782347">
                    <!-- CLOSE ICON -->
                    <div class="isg-panel-close">
                        <span class="fa fa-times-circle-o"></span>
                    </div>
                    <!-- ROTATED TEXT -->
                    <div class="isg-panel-rotated-text">
                        <span class="isg-panel-rotated-text-inner">CONTACT</span>
                    </div>
                    <!-- UP ICON -->
                    <div class="isg-panel-up">
                        <span class="fa fa-arrow-circle-o-up"></span>
                    </div>
                    <!-- PANEL IMG -->
                    <div class="isg-panel-img">
                        <img src="images/photos/contact.jpg" alt="" />
                    </div>
                    <!-- PANEL CONTENT -->
                    <h2>CONTACT ME</h2>
                    <!-- TABLE -->
                    <div class="isg-table">
                        <div class="isg-table-row">
                            <div>
                                <p><i class="fa fa-phone-square"></i> <strong>Phone</strong></p>
                                <p>+9234-435-4345</p>
                            </div>
                            <div>
                                <p><i class="fa fa-envelope"></i> <strong>E-mail</strong></p>
                                <p><a href="mailto:info@mysite.com">info@mysite.com</a></p>
                            </div>
                        </div>
                        <div class="isg-table-row">
                            <div>
                                <p><i class="fa fa-map"></i> <strong>Address</strong></p>
                                <p>John Kennedy Str. Brooklyn, NY 12938, United States</p>
                            </div>
                            <div>
                                <p><i class="fa fa-fax"></i> <strong>Fax</strong></p>
                                <p>+9234-435-4346</p>
                            </div>
                        </div>
                    </div>
                    <p>Quibusdam noster aut laborum despicationes. Malis appellat o enim tamen. O amet quibusdam. Magna occaecat ex coniunctione, quis in mentitum, multos excepteur offendit, id a dolore illum.</p>
                    <hr/>
                    <h2>DROP ME A LINE</h2>
                    <!-- CONTACT FORM -->
                    <form id="ajax-form" action="https://thememasters.club/html-templates/insurgent/mailer.php" method="post">
                        <label>Full name</label>
                        <input type="text" name="sendername" id="sendername" required="required" maxlength="50" />
                        <label>Phone Number</label>
                        <input type="text" name="senderphone" id="senderphone" maxlength="50" />
                        <label>Email address</label>
                        <input type="email" name="senderemail" id="senderemail" required="required" maxlength="50" />
                        <label>Message</label>
                        <textarea name="sendermessage" id="sendermessage" required="required"></textarea>
                        <div class="submit-container">
                            <input type="submit" class="isg-button" value="Send Message" /> <i id="ajax-spinner" class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span>
                        </div>
                    </form>
                    <div id="form-messages"></div>
                </div>
            </article>
        </div>    
    </x-slot>
</x-layout>
