@extends('layouts.main')
@push('title')
    <title>About</title>
@endpush
@section('main-section')

    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WWVDSHZ" height="0" width="0"
                style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->


        <div id="mainWrapper">

            <canvas width="399" height="573"></canvas>

            <div id="header">
                <div class="container clearfix">
                    <div id="mainLogo">
                        <a href="/">
                            <img src="images/netsol-logo.svg" alt="#" id="mainlogoImg">
                            <img src="images/netsol-logo-white.svg" alt="#" id="mainlogoWhite">
                        </a>
                    </div>
                    <a id="mainMenuLink" data-aos="fade-up" data-aos-duration="500"><label>MENU</label><span></span></a>
                    <div id="headerLang">
                        <div class="formField darkStyle">
                            <div class="formFieldIn">
                                <div class="selectField">
                                    <select>
                                        <option selected="" value="https://netsoltech.com/events">English</option>
                                        <option value="https://netsoltech.cn/events">中文</option>
                                        <option value="http://th.netsoltech.com/events">Thai</option>
                                        <option value="http://id.netsoltech.com/events">Bahasa</option>
                                    </select>
                                    <div class="select-selected">English</div>
                                    <div class="select-items select-hide">
                                        <div>English</div>
                                        <div>中文</div>
                                        <div>Thai</div>
                                        <div>Bahasa</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        $(window).on('load', function() {
                            $('#headerLang .selectField .select-items div').on('click', function() {
                                itemIndex = $(this).index()
                                var itemVal = $('#headerLang select').val();
                                window.location.href = itemVal;
                            });
                        });
                    </script>
                </div>
            </div>

            <a id="windowScrollDown" style="display: none; opacity: 1;">
                <img src="images/scrollText.svg" alt="#">
                <span><img id="scrollDownArrow" src="images/scrollDown.svg" alt="#"></span>
            </a>
            <a id="windowScrollUp" style="display: inline; opacity: 1;">
                <img src="images/backToTop.svg" alt="#">
            </a>
            <a id="requestDemo" class="open-model-window" href="#mainRequestDemo">
                <img src="images/requestDemo.svg" alt="#">
            </a>

            <div id="mainMenu" class="" style="width: 399px;">
                <div class="container">
                    <div id="menuLogo">
                        <a href="/">
                            <img src="images/netsol-logo-white.svg" alt="#">
                        </a>
                    </div>
                </div>

                <div id="mainNavContactUs">
                    <a href="http://careers.netsolpk.com" target="_blank" class="btn btn-white btn-small">Careers</a>
                    <a href="contact-us" class="btn btn-white btn-small">Contact Us</a>
                </div>



                <a id="menuSmartNav" href="smartnav">Smart<br>Nav</a>

                <img class="menuVector" id="netsolVector" src="images/netsolVector.svg" alt="#">
                <img class="menuVector" id="ascentVector" src="images/ascentVector.svg" alt="#">
                <img class="menuVector" id="digitalVector" src="images/digitalVector.svg" alt="#">
                <img class="menuVector" id="investorsVector" src="images/investorsVector.svg" alt="#">
                <img class="menuVector" id="innovationVector" src="images/innovationVector.svg" alt="#">
                <img class="menuVector" id="eventsVector" src="images/eventsVector.svg" alt="#">
                <img class="menuVector" id="contactUsVector" src="images/contact-usVector.svg" alt="#">

                <div id="mainMenuNew">
                    <div id="mainMenuNewIn">
                        <ul id="mainNewUL">
                            <li class=" centerItem">
                                <div><span>01</span><a data-vector="#netsolVector" href="/">Home</a></div>
                            </li>
                            <li class="hasSubMenu ">
                                <div>
                                    <span>02</span>
                                    <a data-vector="#netsolVector" href="about-us">About Us</a>
                                    <ul class="subMenu">
                                        <li><a data-vector="#netsolVector" href="about-us">About NETSOL Technologies</a>
                                        </li>
                                        <li><a data-vector="#netsolVector" class="hashTab"
                                                href="about-us#boardOfDirector">Board of Directors</a></li>
                                        <li><a data-vector="#netsolVector" class="hashTab"
                                                href="about-us#managementTeam">Management Team</a></li>
                                        <li><a data-vector="#netsolVector" href="about-us-sr">Social Responsibilities</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="hasSubMenu ">
                                <div>
                                    <span>03</span>
                                    <a data-vector="#ascentVector" href="products">Products</a>
                                    <ul class="subMenu">
                                        <li><a data-vector="#ascentVector" href="products">Overview</a></li>
                                        <li><a data-vector="#ascentVector" href="nfs-ascent">NFS Ascent<sup>®</sup></a></li>
                                        <li><a data-vector="#digitalVector" href="nfs-digital">NFS Digital</a></li>
                                        <li><a data-vector="#digitalVector" href="nxt">NXT</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="hasSubMenu">
                                <div>
                                    <span>04</span>
                                    <a data-vector="#investorsVector" href="https://ir.netsoltech.com/">Investors</a>
                                    <ul>
                                        <li><a data-vector="#investorsVector" href="https://ir.netsoltech.com/">Overview</a>
                                        </li>
                                        <li><a data-vector="#investorsVector"
                                                href="https://ir.netsoltech.com/company-information">Company Information</a>
                                        </li>
                                        <li><a data-vector="#investorsVector"
                                                href="https://ir.netsoltech.com/press-releases">News</a></li>
                                        <li><a data-vector="#investorsVector"
                                                href="https://ir.netsoltech.com/stock-data">Stock Data</a></li>
                                        <li><a data-vector="#investorsVector"
                                                href="https://ir.netsoltech.com/all-sec-filings">SEC Filings</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="hasSubMenu ">
                                <div>
                                    <span>05</span>
                                    <a data-vector="#innovationVector" href="innovation">Innovation</a>
                                    <ul>
                                        <li><a data-vector="#innovationVector" href="innovation">Overview</a></li>
                                        <li><a data-vector="#innovationVector" href="articles">Articles</a></li>
                                        <li><a data-vector="#innovationVector" href="downloads">Downloads</a></li>
                                        <li><a data-vector="#innovationVector" href="in-the-lab">In the Lab</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="active">
                                <div>
                                    <span>06</span>
                                    <a data-vector="#eventsVector" href="events">Events</a>
                                </div>
                            </li>
                            <li class="mobileMenuList">
                                <div>
                                    <span>07</span>
                                    <a data-vector="#contactUsVector" href="contact-us.php">Contact Us</a>
                                </div>
                            </li>
                            <li class="mobileMenuList">
                                <div>
                                    <span>08</span>
                                    <a data-vector="#netsolVector" href="http://careers.netsolpk.com"
                                        target="_blank">Careers</a>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>

                <!-- <div id="scrollToView">Scroll to View More</div> -->
            </div>






            <style>
                .tooltip {
                    position: relative;
                    display: inline-block;
                    margin-bottom: 0px !important;
                    /*border-bottom: 1px dotted black;*/
                }

                .tooltip .tooltiptext {
                    visibility: hidden;
                    width: 250px;
                    background-color: #555;
                    color: #fff;
                    text-align: center;
                    border-radius: 6px;
                    padding: 5px 0;
                    position: absolute;
                    z-index: 1;
                    bottom: 125%;
                    left: 50%;
                    margin-left: -90px;
                    opacity: 0;
                    transition: opacity 0.3s;
                    font-size: 16px;
                    padding: 10px;
                }

                .tooltip .tooltiptext::after {
                    content: "";
                    position: absolute;
                    top: 100%;
                    left: 50%;
                    margin-left: -5px;
                    border-width: 5px;
                    border-style: solid;
                    border-color: #555 transparent transparent transparent;
                }

                .tooltip:hover .tooltiptext {
                    visibility: visible;
                    opacity: 1;
                }

                .eventsListText h4 {
                    height: 70px !important;
                }

            </style>

            <div class="container">
                <div class="breadCrumb">
                    <p class="leadText">You are now viewing <a href="/">Home</a><span> / </span><a
                            href="events">Events</a></p>
                </div>
                <div class="pageTitleSection withVector">
                    <img src="images/events-left.svg" alt="#" class="animated fadeInUp" data-animation-type="fadeInUp"
                        style="">
                    <div class="pageTitleSectionIn">
                        <h1 class="animated fadeInUp" data-animation-type="fadeInUp">Events</h1>
                        <p class="animated fadeInUp" data-animation-type="fadeInUp">To maintain our dominance in the
                            industry, every year we attend and sponsor international finance and leasing summits,
                            conferences, conventions and events worldwide.</p>
                    </div>
                </div>
                <div class="eventsListing clearfix">
                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img src="NetsolTechCMS/uploads/Events/barcelona.jpg" alt="#">
                                </div><span class="tooltiptext" style="bottom:65%;">Intercontinental Barcelona</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">Leasing Life - Conference &amp;
                                    Awards<span class="tooltiptext">Leasing Life - Conference &amp; Awards</span></h4>
                                <br><br>
                                <label>Location</label>
                                <p>Intercontinental Barcelona</p>
                                <label>Date</label>
                                <p>17th March 2022</p>


                            </div>

                        </div>
                    </div>


                    <div id="moreinfo90" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img src="NetsolTechCMS/uploads/Events/Las Vegas.jpg" alt="#">
                                </div><span class="tooltiptext" style="bottom:65%;">Las Vegas, Nevada, USA</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">AFSA Vehicle Finance Conference &amp;
                                    Expo 2022<span class="tooltiptext">AFSA Vehicle Finance Conference &amp; Expo
                                        2022</span></h4><br><br>
                                <label>Location</label>
                                <p> Las Vegas, Nevada, USA</p>
                                <label>Date</label>
                                <p>7th - 10th March 2022</p>


                            </div>

                        </div>
                    </div>


                    <div id="moreinfo93" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img src="NetsolTechCMS/uploads/Events/san-antinio.jpg" alt="#">
                                </div><span class="tooltiptext" style="bottom:65%;">San Antonio, Texas, USA</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">CBA Live! 2022<span
                                        class="tooltiptext">CBA Live! 2022</span></h4><br><br>
                                <label>Location</label>
                                <p> San Antonio, Texas, USA</p>
                                <label>Date</label>
                                <p>7th - 9th March 2022</p>


                            </div>

                        </div>
                    </div>


                    <div id="moreinfo94" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img src="NetsolTechCMS/uploads/Events/London.jpg" alt="#">
                                </div><span class="tooltiptext" style="bottom:65%;">JW Marriott Grosvenor House, London
                                    W1</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">FLA Annual Dinner<span
                                        class="tooltiptext">FLA Annual Dinner</span></h4><br><br>
                                <label>Location</label>
                                <p> JW Marriott Grosvenor House, London W1</p>
                                <label>Date</label>
                                <p>22nd February 2022</p>


                            </div>

                        </div>
                    </div>


                    <div id="moreinfo92" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img src="NetsolTechCMS/uploads/Events/London.jpg" alt="#">
                                </div><span class="tooltiptext" style="bottom:65%;">ETC Venues St Paul's, London</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">IAFN<span
                                        class="tooltiptext">IAFN</span></h4><br><br>
                                <label>Location</label>
                                <p>ETC Venues St Paul's, London</p>
                                <label>Date</label>
                                <p>9th November 2021</p>


                            </div>

                        </div>
                    </div>


                    <div id="moreinfo91" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img src="NetsolTechCMS/uploads/Events/wahington.png" alt="#">
                                </div><span class="tooltiptext" style="bottom:65%;">Washington, DC</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">AFSA Annual Meeting 2021<span
                                        class="tooltiptext">AFSA Annual Meeting 2021</span></h4><br><br>
                                <label>Location</label>
                                <p>Washington, DC</p>
                                <label>Date</label>
                                <p>25th - 27th October 2021</p>

                            </div>

                        </div>
                    </div>


                    <div id="moreinfo89" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img src="NetsolTechCMS/uploads/Events/san-antinio.jpg"
                                        alt="#"></div><span class="tooltiptext" style="bottom:65%;">San Antonio,
                                    TX</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">ELFA Annual Convention 2021<span
                                        class="tooltiptext">ELFA Annual Convention 2021</span></h4><br><br>
                                <label>Location</label>
                                <p>San Antonio, TX</p>
                                <label>Date</label>
                                <p>24th - 26th October 2021</p>

                            </div>

                        </div>
                    </div>


                    <div id="moreinfo88" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img src="NetsolTechCMS/uploads/Events/London.jpg" alt="#">
                                </div><span class="tooltiptext" style="bottom:65%;">Hilton Bankside in London</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">Leasing World Gold Awards 2021<span
                                        class="tooltiptext">Leasing World Gold Awards 2021</span></h4><br><br>
                                <label>Location</label>
                                <p>Hilton Bankside in London</p>
                                <label>Date</label>
                                <p>21st October 2021</p>

                            </div>

                        </div>
                    </div>


                    <div id="moreinfo86" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img src="NetsolTechCMS/uploads/Events/Munich, Germany.jpg"
                                        alt="#"></div><span class="tooltiptext" style="bottom:65%;">Munich,
                                    Germany</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">Motor Finance Europe: Conference &amp;
                                    Awards<span class="tooltiptext">Motor Finance Europe: Conference &amp; Awards</span>
                                </h4><br><br>
                                <label>Location</label>
                                <p>Munich, Germany</p>
                                <label>Date</label>
                                <p>19th October 2021</p>


                            </div>

                        </div>
                    </div>


                    <div id="moreinfo80" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img src="NetsolTechCMS/uploads/Events/Birmingham-NEC.jpg"
                                        alt="#"></div><span class="tooltiptext" style="bottom:65%;">Birmingham's
                                    NEC</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">NACFB Commercial Finance Expo<span
                                        class="tooltiptext">NACFB Commercial Finance Expo</span></h4><br><br>
                                <label>Location</label>
                                <p>Birmingham's NEC</p>
                                <label>Date</label>
                                <p>30th September 2021</p>

                            </div>

                        </div>
                    </div>


                    <div id="moreinfo85" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img src="NetsolTechCMS/uploads/Events/Munich, Germany.jpg"
                                        alt="#"></div><span class="tooltiptext" style="bottom:65%;">Messe Munchen,
                                    Munich</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">IAA Mobility 2021<span
                                        class="tooltiptext">IAA Mobility 2021</span></h4><br><br>
                                <label>Location</label>
                                <p>Messe Munchen, Munich</p>
                                <label>Date</label>
                                <p>7th-12th September 2021</p>

                            </div>

                        </div>
                    </div>


                    <div id="moreinfo87" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img src="NetsolTechCMS/uploads/Events/temple-uk-london.jpg"
                                        alt="#"></div><span class="tooltiptext" style="bottom:65%;">Temple Pier,
                                    Victoria Embankment
                                    London, WC2R 2PN United Kingdom</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">AFPA Trust Summer Sizzler Event<span
                                        class="tooltiptext">AFPA Trust Summer Sizzler Event</span></h4><br><br>
                                <label>Location</label>
                                <p>Temple Pier, Victoria Embankment
                                    London, WC2R 2PN United Kingdom</p>
                                <label>Date</label>
                                <p>8th July 2021</p>


                            </div>

                        </div>
                    </div>


                    <div id="moreinfo84" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img src="NetsolTechCMS/uploads/Events/virtual.jpg" alt="#">
                                </div><span class="tooltiptext" style="bottom:65%;">Virtual</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">Motor Finance Roundtable Forum 2021<span
                                        class="tooltiptext">Motor Finance Roundtable Forum 2021</span></h4><br><br>
                                <label>Location</label>
                                <p>Virtual</p>
                                <label>Date</label>
                                <p>28th May 2021</p>


                            </div>

                        </div>
                    </div>


                    <div id="moreinfo76" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img src="NetsolTechCMS/uploads/Events/virtual.jpg" alt="#">
                                </div><span class="tooltiptext" style="bottom:65%;">Virtual</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">Asset Finance International 2021<span
                                        class="tooltiptext">Asset Finance International 2021</span></h4><br><br>
                                <label>Location</label>
                                <p>Virtual</p>
                                <label>Date</label>
                                <p>26th May 2021</p>


                            </div>

                        </div>
                    </div>


                    <div id="moreinfo82" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img src="NetsolTechCMS/uploads/Events/Florida-USA.jpg"
                                        alt="#"></div><span class="tooltiptext" style="bottom:65%;">Florida, USA </span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">AFSA Independents Conference &amp; Expo
                                    2021<span class="tooltiptext">AFSA Independents Conference &amp; Expo 2021</span>
                                </h4><br><br>
                                <label>Location</label>
                                <p>Florida, USA</p>
                                <label>Date</label>
                                <p>May 25 - 27, 2021 </p>


                            </div>

                        </div>
                    </div>


                    <div id="moreinfo83" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img src="NetsolTechCMS/uploads/Events/Sydney, Australia.jpg"
                                        alt="#"></div><span class="tooltiptext" style="bottom:65%;">Sydney,
                                    Australia</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">AFIA 2021 Conference<span
                                        class="tooltiptext">AFIA 2021 Conference</span></h4><br><br>
                                <label>Location</label>
                                <p>Sydney, Australia</p>
                                <label>Date</label>
                                <p>18 May 2021</p>


                            </div>

                        </div>
                    </div>


                    <div id="moreinfo81" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img src="NetsolTechCMS/uploads/Events/virtual.jpg" alt="#">
                                </div><span class="tooltiptext" style="bottom:65%;">Virtual</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">Car Finance Conference<span
                                        class="tooltiptext">Car Finance Conference</span></h4><br><br>
                                <label>Location</label>
                                <p>Virtual</p>
                                <label>Date</label>
                                <p>23 March 2021</p>


                            </div>

                        </div>
                    </div>


                    <div id="moreinfo79" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img src="NetsolTechCMS/uploads/Events/virtual.jpg" alt="#">
                                </div><span class="tooltiptext" style="bottom:65%;">Virtual</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">CFLA Women's Day Virtual Conference<span
                                        class="tooltiptext">CFLA Women's Day Virtual Conference</span></h4><br><br>
                                <label>Location</label>
                                <p>Virtual</p>
                                <label>Date</label>
                                <p>8th March 2021</p>


                            </div>

                        </div>
                    </div>


                    <div id="moreinfo78" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img src="NetsolTechCMS/uploads/Events/virtual.jpg" alt="#">
                                </div><span class="tooltiptext" style="bottom:65%;">Virtual</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">AFSA Virtual Vehicle Finance Conference
                                    <span class="tooltiptext">AFSA Virtual Vehicle Finance Conference </span></h4>
                                <br><br>
                                <label>Location</label>
                                <p>Virtual</p>
                                <label>Date</label>
                                <p>23rd - 25th February 2021</p>


                            </div>

                        </div>
                    </div>


                    <div id="moreinfo77" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img src="NetsolTechCMS/uploads/Events/BDA-Digital-Day.png"
                                        alt="#"></div><span class="tooltiptext" style="bottom:65%;">Frankfurt,
                                    Germany</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">Digital Day 2020<span
                                        class="tooltiptext">Digital Day 2020</span></h4><br><br>
                                <label>Location</label>
                                <p>Frankfurt, Germany</p>
                                <label>Date</label>
                                <p>2nd December 2020</p>


                            </div>

                        </div>
                    </div>


                    <div id="moreinfo69" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img src="NetsolTechCMS/uploads/Events/nakhon-athom.png"
                                        alt="#"></div><span class="tooltiptext" style="bottom:65%;">Nakhon Pathom,
                                    Thailand</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">THPA GOLF 2020<span
                                        class="tooltiptext">THPA GOLF 2020</span></h4><br><br>
                                <label>Location</label>
                                <p>The Royal Gems Golf and Sports Club, Thailand</p>
                                <label>Date</label>
                                <p>6th November 2020</p>


                            </div>

                        </div>
                    </div>


                    <div id="moreinfo75" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img src="NetsolTechCMS/uploads/Events/washinton.png" alt="#">
                                </div><span class="tooltiptext" style="bottom:65%;">Virtual</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">ELFA 2020 Business Live<span
                                        class="tooltiptext">ELFA 2020 Business Live</span></h4><br><br>
                                <label>Location</label>
                                <p>Virtual</p>
                                <label>Date</label>
                                <p>27th October 2020 - 28th October 2020 </p>


                            </div>

                        </div>
                    </div>


                    <div id="moreinfo74" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img src="NetsolTechCMS/uploads/Events/Munich, Germany.jpg"
                                        alt="#"></div><span class="tooltiptext" style="bottom:65%;">Munich,
                                    Germany</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">Motor Finance: Europe Conference &amp;
                                    Awards 2020<span class="tooltiptext">Motor Finance: Europe Conference &amp; Awards
                                        2020</span></h4><br><br>
                                <label>Location</label>
                                <p>Munich, Germany</p>
                                <label>Date</label>
                                <p>15th October 2020</p>
                                <a href="#moreinfo67" class="btn mgntop20 btn-small active open-model-window "
                                    data-animation-type="fadeInUp">More Info</a>


                            </div>

                        </div>
                    </div>


                    <div id="moreinfo67" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                                <b style="color:#1c72b8">Participation Level:</b><br>
                                <p>Gold Sponsor</p><br><b style="color:#1c72b8">Fireside Chat:</b><br><br><b
                                    style="color:#1c72b8">Topic:</b><br>From Digitization and Customer Self Serving Towards
                                CaaS.<p></p><br><b style="color:#1c72b8">Participants:</b><br>
                                <p>Johannes Riedl<br>Global Client Partner<br>NETSOL</p><br>
                                <p>Ingo Schmuckall<br>Senior Manager<br>Deloitte Consulting GmbH-Strategy &amp; Business
                                    Design.</p><br><b style="color:#1c72b8">Time:</b><br>
                                <p>11:25 AM (UK)</p>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img src="NetsolTechCMS/uploads/Events/sydney.png" alt="#">
                                </div><span class="tooltiptext" style="bottom:65%;">Virtual</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">Loan Origination Summit (Virtual Summit)
                                    <span class="tooltiptext">Loan Origination Summit (Virtual Summit) </span></h4>
                                <br><br>
                                <label>Location</label>
                                <p>Virtual</p>
                                <label>Date</label>
                                <p>13th October 2020 - 15th October 2020 </p>


                            </div>

                        </div>
                    </div>


                    <div id="moreinfo73" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img src="NetsolTechCMS/uploads/Events/washinton.png" alt="#">
                                </div><span class="tooltiptext" style="bottom:65%;">Virtual</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">AFSA Annual Meeting &amp; Independents
                                    Conference &amp; EX...<span class="tooltiptext">AFSA Annual Meeting &amp;
                                        Independents Conference &amp; EXPO </span></h4><br><br>
                                <label>Location</label>
                                <p>Virtual</p>
                                <label>Date</label>
                                <p>6th October 2020 - 8th October 2020 </p>


                            </div>

                        </div>
                    </div>


                    <div id="moreinfo72" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img
                                        src="NetsolTechCMS/uploads/Events/Crown Plaza Beijing Chaoyang U-Town, China.jpg"
                                        alt="#"></div><span class="tooltiptext" style="bottom:65%;">Crowne Plaza Beijing
                                    Chaoyang U-Town, Beijing, China</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">China Leasing Summit<span
                                        class="tooltiptext">China Leasing Summit</span></h4><br><br>
                                <label>Location</label>
                                <p>Beijing, China</p>
                                <label>Date</label>
                                <p>TBD</p>


                            </div>

                        </div>
                    </div>


                    <div id="moreinfo70" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img src="NetsolTechCMS/uploads/Events/Sydney, Australia.jpg"
                                        alt="#"></div><span class="tooltiptext" style="bottom:65%;">Sydney,
                                    Australia</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">Loan Origination and Experience
                                    Summit<span class="tooltiptext">Loan Origination and Experience Summit</span></h4>
                                <br><br>
                                <label>Location</label>
                                <p>Sydney, Australia</p>
                                <label>Date</label>
                                <p>TBD</p>


                            </div>

                        </div>
                    </div>


                    <div id="moreinfo68" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img src="NetsolTechCMS/uploads/Events/London.jpg" alt="#">
                                </div><span class="tooltiptext" style="bottom:65%;">Sky Garden, London, UK</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">Leasing World Customer Service
                                    Excellence Awards<span class="tooltiptext">Leasing World Customer Service Excellence
                                        Awards</span></h4><br><br>
                                <label>Location</label>
                                <p>London, UK</p>
                                <label>Date</label>
                                <p>2nd April 2020</p>


                            </div>

                        </div>
                    </div>


                    <div id="moreinfo65" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img src="NetsolTechCMS/uploads/Events/London.jpg" alt="#">
                                </div><span class="tooltiptext" style="bottom:65%;">Addleshaw Goddard LLP Milton Gate 60
                                    Chiswell treet London EC1Y 4AG</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">Asset Finance Best Practice
                                    Conference<span class="tooltiptext">Asset Finance Best Practice Conference</span>
                                </h4><br><br>
                                <label>Location</label>
                                <p>London, UK</p>
                                <label>Date</label>
                                <p>17th March 2020</p>


                            </div>

                        </div>
                    </div>


                    <div id="moreinfo64" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img src="NetsolTechCMS/uploads/Events/San Diego.jpg" alt="#">
                                </div><span class="tooltiptext" style="bottom:65%;">Omni San Diego</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">Auto Finance Accelerate<span
                                        class="tooltiptext">Auto Finance Accelerate</span></h4><br><br>
                                <label>Location</label>
                                <p>Omni San Diego</p>
                                <label>Date</label>
                                <p>9th - 11th March 2020</p>


                            </div>

                        </div>
                    </div>


                    <div id="moreinfo63" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img src="NetsolTechCMS/uploads/Events/FLA Dinner-08.png"
                                        alt="#"></div><span class="tooltiptext" style="bottom:65%;">Grosvenor House,
                                    London, United Kingdom</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">FLA Annual Dinner 2020<span
                                        class="tooltiptext">FLA Annual Dinner 2020</span></h4><br><br>
                                <label>Location</label>
                                <p>London, United Kingdom</p>
                                <label>Date</label>
                                <p>25th February 2020</p>


                            </div>

                        </div>
                    </div>


                    <div id="moreinfo54" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img src="NetsolTechCMS/uploads/Events/NADA Conference.png"
                                        alt="#"></div><span class="tooltiptext" style="bottom:65%;">Las Vegas, United
                                    States</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">NADA Show<span
                                        class="tooltiptext">NADA Show</span></h4><br><br>
                                <label>Location</label>
                                <p>Las Vegas, United States</p>
                                <label>Date</label>
                                <p>14th - 17th February 2020</p>


                            </div>

                        </div>
                    </div>


                    <div id="moreinfo51" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img
                                        src="NetsolTechCMS/uploads/Events/AFSA Vehicle Finance.png" alt="#"></div><span
                                    class="tooltiptext" style="bottom:65%;">The Bellagio, Las Vegas, United
                                    States</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">AFSA Vehicle Finance Conference<span
                                        class="tooltiptext">AFSA Vehicle Finance Conference</span></h4><br><br>
                                <label>Location</label>
                                <p>Las Vegas, United States</p>
                                <label>Date</label>
                                <p>12th - 14th February 2020</p>


                            </div>

                        </div>
                    </div>


                    <div id="moreinfo50" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img
                                        src="NetsolTechCMS/uploads/Events/IoD, Pall Mall, London.jpg" alt="#"></div><span
                                    class="tooltiptext" style="bottom:65%;">The Institute of Directors (IoD), London,
                                    United Kingdom</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">AFPA/IAA Christmas Charity Leasing Lunch
                                    (UK)<span class="tooltiptext">AFPA/IAA Christmas Charity Leasing Lunch (UK)</span>
                                </h4><br><br>
                                <label>Location</label>
                                <p>London, United Kingdom</p>
                                <label>Date</label>
                                <p>13th December 2019</p>


                            </div>

                        </div>
                    </div>


                    <div id="moreinfo8" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img
                                        src="NetsolTechCMS/uploads/Events/155 Bishopsgate, London.jpg" alt="#"></div><span
                                    class="tooltiptext" style="bottom:65%;">155 Bishopsgate, London, United
                                    Kingdom</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">International Asset Finance Network
                                    (IAFN) Confere...<span class="tooltiptext">International Asset Finance Network
                                        (IAFN) Conference &amp; Awards </span></h4><br><br>
                                <label>Location</label>
                                <p>London, United Kingdom</p>
                                <label>Date</label>
                                <p>12th December 2019</p>


                            </div>

                        </div>
                    </div>


                    <div id="moreinfo7" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img src="NetsolTechCMS/uploads/Events/Barcelona.jpg" alt="#">
                                </div><span class="tooltiptext" style="bottom:65%;">Barcelona, Spain</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">Leasing Life Europe: Conference &amp;
                                    Awards<span class="tooltiptext">Leasing Life Europe: Conference &amp; Awards</span>
                                </h4><br><br>
                                <label>Location</label>
                                <p>Barcelona, Spain</p>
                                <label>Date</label>
                                <p>28th November 2019</p>


                            </div>

                        </div>
                    </div>


                    <div id="moreinfo6" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img src="NetsolTechCMS/uploads/Events/National Seminar.png"
                                        alt="#"></div><span class="tooltiptext" style="bottom:65%;">Jakarta,
                                    Indonesia</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;"> National Seminar <span
                                        class="tooltiptext"> National Seminar </span></h4><br><br>
                                <label>Location</label>
                                <p>Jakarta, Indonesia</p>
                                <label>Date</label>
                                <p>26th November 2019</p>


                            </div>

                        </div>
                    </div>


                    <div id="moreinfo47" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img
                                        src="NetsolTechCMS/uploads/Events/Harry's Bar, Ironmonger Lane.jpg" alt="#"></div>
                                <span class="tooltiptext" style="bottom:65%;">Harry's Bar, Ironmonger, Lane, United
                                    Kingdom</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">AFPA Beaujolais Networking Event<span
                                        class="tooltiptext">AFPA Beaujolais Networking Event</span></h4><br><br>
                                <label>Location</label>
                                <p>London, United Kingdom</p>
                                <label>Date</label>
                                <p>21st November 2019</p>


                            </div>

                        </div>
                    </div>


                    <div id="moreinfo5" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img
                                        src="NetsolTechCMS/uploads/Events/AFIA Conference 2019.png" alt="#"></div><span
                                    class="tooltiptext" style="bottom:65%;">Luna Park, 1 Olympic Drive, Milsons Point,
                                    Sydney, Australia</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;"> AFIA Conference 2019<span
                                        class="tooltiptext"> AFIA Conference 2019</span></h4><br><br>
                                <label>Location</label>
                                <p>Sydney, Australia</p>
                                <label>Date</label>
                                <p>20th November 2019</p>


                            </div>

                        </div>
                    </div>


                    <div id="moreinfo46" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img src="NetsolTechCMS/uploads/Events/APPI Awards.png"
                                        alt="#"></div><span class="tooltiptext" style="bottom:65%;">Jakarta,
                                    Indonesia</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;"> APPI Awards <span
                                        class="tooltiptext"> APPI Awards </span></h4><br><br>
                                <label>Location</label>
                                <p>Jakarta, Indonesia</p>
                                <label>Date</label>
                                <p>6th November 2019</p>


                            </div>

                        </div>
                    </div>


                    <div id="moreinfo45" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img
                                        src="NetsolTechCMS/uploads/Events/InterContinental Budapest.jpg" alt="#"></div><span
                                    class="tooltiptext" style="bottom:65%;">Hilton Bankside, London</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">Leasing World Awards Dinner<span
                                        class="tooltiptext">Leasing World Awards Dinner</span></h4><br><br>
                                <label>Location</label>
                                <p>London, United Kingdom</p>
                                <label>Date</label>
                                <p>30th October 2019</p>


                            </div>

                        </div>
                    </div>


                    <div id="moreinfo2" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img src="NetsolTechCMS/uploads/Events/Las Vegas.jpg" alt="#">
                                </div><span class="tooltiptext" style="bottom:65%;">Las Vegas, United States</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">Auto Finance Summit<span
                                        class="tooltiptext">Auto Finance Summit</span></h4><br><br>
                                <label>Location</label>
                                <p>Las Vegas, United States</p>
                                <label>Date</label>
                                <p>28th - 30th October 2019</p>


                            </div>

                        </div>
                    </div>


                    <div id="moreinfo4" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img
                                        src="NetsolTechCMS/uploads/Events/Marriott Marquis Washington, DC.jpg" alt="#">
                                </div><span class="tooltiptext" style="bottom:65%;">Marriott Marquis Washington, DC,
                                    United States</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">ELFA 58th Annual Convention<span
                                        class="tooltiptext">ELFA 58th Annual Convention</span></h4><br><br>
                                <label>Location</label>
                                <p>Washington, DC, United States</p>
                                <label>Date</label>
                                <p>27th - 29th October 2019</p>


                            </div>

                        </div>
                    </div>


                    <div id="moreinfo3" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img
                                        src="NetsolTechCMS/uploads/Events/Power Sports Finance-07.png" alt="#"></div><span
                                    class="tooltiptext" style="bottom:65%;">Hilton San Diego Bayfront, United
                                    States</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">Power Sports Finance<span
                                        class="tooltiptext">Power Sports Finance</span></h4><br><br>
                                <label>Location</label>
                                <p>San Diego, United States</p>
                                <label>Date</label>
                                <p>23rd - 24th October 2019</p>


                            </div>

                        </div>
                    </div>


                    <div id="moreinfo44" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img src="NetsolTechCMS/uploads/Events/Leaseurope.png" alt="#">
                                </div><span class="tooltiptext" style="bottom:65%;">InterContinental Budapest,
                                    Hungary</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">Leaseurope: The European Leasing &amp;
                                    Consumer Credit...<span class="tooltiptext">Leaseurope: The European Leasing &amp;
                                        Consumer Credit Annual Convention</span></h4><br><br>
                                <label>Location</label>
                                <p>Budapest, Hungary</p>
                                <label>Date</label>
                                <p>10th - 11th October 2019</p>


                            </div>

                        </div>
                    </div>


                    <div id="moreinfo43" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img
                                        src="NetsolTechCMS/uploads/Events/International-Seminar.png" alt="#"></div><span
                                    class="tooltiptext" style="bottom:65%;">Bangkok, Thailand</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">International Seminar<span
                                        class="tooltiptext">International Seminar</span></h4><br><br>
                                <label>Location</label>
                                <p>Bangkok, Thailand</p>
                                <label>Date</label>
                                <p>27th September 2019</p>

                            </div>

                        </div>
                    </div>


                    <div id="moreinfo61" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img src="NetsolTechCMS/uploads/Events/Appi-Seminar.png"
                                        alt="#"></div><span class="tooltiptext" style="bottom:65%;">Pullman Bangkok
                                    Grande, Thailand</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">APPI Conference<span
                                        class="tooltiptext">APPI Conference</span></h4><br><br>
                                <label>Location</label>
                                <p>Bangkok, Thailand</p>
                                <label>Date</label>
                                <p>20th September 2019</p>


                            </div>

                        </div>
                    </div>


                    <div id="moreinfo62" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img
                                        src="NetsolTechCMS/uploads/Events/Global-Auto-Finance-and-Lease-summit.jpg" alt="#">
                                </div><span class="tooltiptext" style="bottom:65%;">Shanghai, China</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">Global Auto Finance &amp; Lease Summit
                                    2019<span class="tooltiptext">Global Auto Finance &amp; Lease Summit 2019</span>
                                </h4><br><br>
                                <label>Location</label>
                                <p>Shanghai, China</p>
                                <label>Date</label>
                                <p>19th - 20th September 2019</p>


                            </div>

                        </div>
                    </div>


                    <div id="moreinfo56" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img
                                        src="NetsolTechCMS/uploads/Events/Hilton Chicago, IL, USA.png" alt="#"></div><span
                                    class="tooltiptext" style="bottom:65%;">Hilton Chicago, IL, United States</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">ELFA Ops &amp; Tech<span
                                        class="tooltiptext">ELFA Ops &amp; Tech</span></h4><br><br>
                                <label>Location</label>
                                <p>Chicago, IL, United States</p>
                                <label>Date</label>
                                <p>16th - 18th September 2019</p>


                            </div>

                        </div>
                    </div>


                    <div id="moreinfo1" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img src="NetsolTechCMS/uploads/Events/Shanghai.jpg" alt="#">
                                </div><span class="tooltiptext" style="bottom:65%;">Shanghai, China</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">Asia Pacific Financial Leasing
                                    Innovation and Coop...<span class="tooltiptext">Asia Pacific Financial Leasing
                                        Innovation and Cooperation Summit</span></h4><br><br>
                                <label>Location</label>
                                <p>Shanghai, China</p>
                                <label>Date</label>
                                <p>TBD</p>


                            </div>

                        </div>
                    </div>


                    <div id="moreinfo9" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img src="NetsolTechCMS/uploads/Events/London.jpg" alt="#">
                                </div><span class="tooltiptext" style="bottom:65%;">Williams F1 Conference Centre,
                                    Oxfordshire, United Kingdom </span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">FLA Annual Motor Finance Convention<span
                                        class="tooltiptext">FLA Annual Motor Finance Convention</span></h4><br><br>
                                <label>Location</label>
                                <p>Oxfordshire, United Kingdom </p>
                                <label>Date</label>
                                <p>TBC</p>


                            </div>

                        </div>
                    </div>


                    <div id="moreinfo10" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                    <div class="eventsList">
                        <div class="eventsListIn animated fadeInUp fill-mode-none" data-animation-type="fadeInUp">
                            <h4 class="tooltip">
                                <div class="eventsMap"><img src="NetsolTechCMS/uploads/Events/London.jpg" alt="#">
                                </div><span class="tooltiptext" style="bottom:65%;">London, United Kingdom</span>
                            </h4>
                            <div class="eventsListText">
                                <h4 class="tooltip" style="font-size:21px;">FLA AGM &amp; Christmas Drinks
                                    Reception<span class="tooltiptext">FLA AGM &amp; Christmas Drinks Reception</span>
                                </h4><br><br>
                                <label>Location</label>
                                <p>London, United Kingdom</p>
                                <label>Date</label>
                                <p>TBC</p>


                            </div>

                        </div>
                    </div>


                    <div id="moreinfo11" class="model-window downloadPopUp">
                        <div class="model-overlay"></div>
                        <div class="model-container">
                            <div class="model-content modal-medium text-left">
                                <a class="close-window"></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>



            <footer id="footer">
                <div class="container">
                    <div class="footerContents clearfix">
                        <div class="footerCol">
                            <h4>CONTACT US</h4>
                            <p>
                                Corporate Headquarters<br> 23975 Park Sorrento<br>Suite 250<br>Calabasas, CA
                                91302<br>USA<br><a href="tel:+1 818 222 9195">+1 818 222 9195</a><br><a
                                    href="mailto:info@netsoltech.com">info@netsoltech.com</a>
                            </p>
                        </div>
                        <div class="footerCol">
                            <h4>COMPANY</h4>
                            <ul>
                                <li><a href="about-us">About Us</a></li>
                                <li><a href="about-us#boardOfDirector">Board of Directors</a></li>
                                <li><a href="about-us#managementTeam">Management Team</a></li>
                                <li><a href="about-us-sr">Social Responsibilities</a></li>
                                <!-- <li><a href="http://careers.netsolpk.com" target="_blank">Careers</a></li> -->
                            </ul>
                        </div>
                        <div class="footerCol">
                            <h4>NFS ASCENT<sup>®</sup> </h4>
                            <ul>
                                <li><a href="front-office-enablement">Front Office</a></li>
                                <li><a href="back-office-enablement">Back Office</a></li>
                                <li><a href="customer-self-service">Self Service</a></li>
                            </ul>
                        </div>
                        <div class="footerCol">
                            <h4>NFS DIGITAL</h4>
                            <ul>
                                <li><a href="digital-self-service-enablement">Self Point of Sale</a></li>
                                <li><a href="digital-self-service-enablement#mAccount">Mobile Account</a></li>
                                <li><a href="digital-dealership-enablement">Mobile Point of Sale</a></li>
                                <li><a href="digital-dealership-enablement#webPos">Web Point of Sale</a></li>
                                <li><a href="digital-field-team-enablement">Mobile Field Investigator</a></li>
                                <li><a href="digital-field-team-enablement#mcollector">Mobile Collector</a></li>
                                <li><a href="digital-floorplan-enablement">Mobile Dealer</a></li>
                                <li><a href="digital-floorplan-enablement#mAuditor">Mobile Auditor</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="footerContents clearfix">
                        <div class="footerCol">
                            <h4>OFFICES</h4>
                            <p>
                                <label>Calabasas</label> <a href="tel:+1 818 222 9195">+1 818 222 9195</a><br>
                                <label>London</label> <a href="tel:+44 0 1403 282300">+44 2 0398 10290</a><br>
                                <!-- +61 2 9221 2081 -->
                                <label>Sydney</label> <a href="tel:+61 2 9159 0165">+61 2 9159 0165</a><br>
                                <label>Beijing</label> <a href="tel:+86 10 6568 2256">+86 10 6568 2256</a><br>
                                <label>Shanghai</label> <a href="tel:+86 21 6020 6700">+86 21 6020 6700</a><br>
                                <label>Bangkok</label> <a href="tel:+66 2685 3552 3">+66 2685 3552 3</a><br>
                                <label>Jakarta</label> <a href="tel:+62 21 2965 5859">+62 21 2965 5859</a><br>
                                <label>Lahore</label> <a href="tel:+92 42 111 44 88 00">+92 42 111 44 88 00</a>
                            </p>
                        </div>
                        <div class="footerCol">
                            <h4>INVESTORS</h4>
                            <ul>
                                <li><a href="https://ir.netsoltech.com/">Overview</a></li>
                                <li><a href="https://ir.netsoltech.com/company-information">Company Information</a></li>
                                <li><a href="https://ir.netsoltech.com/press-releases">News</a></li>
                                <li><a href="https://ir.netsoltech.com/stock-data">Stock Data</a></li>
                                <li><a href="https://ir.netsoltech.com/all-sec-filings">SEC Filings</a></li>
                            </ul>
                        </div>
                        <div class="footerCol">
                            <h4>Innovation</h4>
                            <ul>
                                <li><a href="innovation">Overview</a></li>
                                <li><a href="articles">Articles</a></li>
                                <li><a href="downloads">Downloads</a></li>
                                <li><a href="in-the-lab">In the Lab</a></li>
                            </ul>
                        </div>
                        <div class="footerCol">
                            <h4>FOLLOW</h4>
                            <ul>
                                <li><a href="https://twitter.com/netsoltech" target="_blank">Twitter <img
                                            src="images/twitter-icon.svg" alt="#"></a></li>
                                <li><a href="https://linkedin.com/company/netsol-technologies-inc-" target="_blank">LinkedIn
                                        <img src="images/linkedin-icon.svg" alt="#"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div id="copyRights">
                        <p class="float-left">© 2022 NETSOL Technologies. All Rights Reserved.</p>
                        <p class="float-right"><a href="terms-of-use">Terms of Use</a> | <a
                                href="privacy-policy">Privacy Policy</a> | <a href="about-us-sr">Human Rights Policy</a> |
                            <a href="about-us-sr#ModernSlaveryAct">Modern Slavery Act</a></p>
                    </div>
                </div>
            </footer>


            <div id="mainRequestDemo" class="model-window globaldemo">
                <div class="model-overlay"></div>
                <div class="model-container">
                    <div class="model-content modal-large wizard-model bgSection"
                        style="overflow:hidden; background:#fff !important;">
                        <a class="close-window"></a>

                        <!--<div class="text-center clearfix pad-bottom-100 mgntop-vh-15" id="start-footer" style="margin-top:25vh">
                    <div class="width100">
                        <h3 class="mgntop30 animateElement" data-animation-type="fadeInUp" style="color:#fff;">Request Demo Form</h3>
                        <a class="btn btn-white mgntop60 animateElement" data-animation-type="fadeInUp" onClick="showQuestionfooter()">Start</a>
                    </div>

                </div>-->

                        <form method="post" name="demorequest-footer" id="demorequest-footer">

                            <div class="text-center padtop0 mgntop20 animated fadeInUp" id="question1-footer"
                                data-animation-type="fadeInUp">
                                <h3 class="text-left">Request Demo</h3>
                                <h4 class="text-left">01.Enter your basic information</h4>
                                <div class="getInTouchForm mgntop20">
                                    <div class="formField textField darkStyle" id="name-footer">
                                        <div class="formFieldIn">
                                            <label>
                                                <span>Name</span>
                                                <input type="text" value="" name="name"
                                                    onkeydown="turnwhitefooter('name');">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="formField textField darkStyle" id="email-footer">
                                        <div class="formFieldIn">
                                            <label>
                                                <span>Email</span>
                                                <input type="text" value="" name="email"
                                                    onkeydown="turnwhitefooter('email');">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="formField textField darkStyle" id="designation-footer">
                                        <div class="formFieldIn">
                                            <label>
                                                <span>Designation</span>
                                                <input type="text" value="" name="designation"
                                                    onkeydown="turnwhitefooter('designation');">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="formField textField darkStyle" id="companyname-footer">
                                        <div class="formFieldIn">
                                            <label>
                                                <span>Company Name</span>
                                                <input type="text" value="" name="companyname"
                                                    onkeydown="turnwhitefooter('companyname');">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="formField darkStyle">
                                        <div class="formFieldIn">
                                            <div class="selectField">
                                                <span style="color:#1c72b8">Country</span>
                                                <select name="country" id="country-footer" aria-required="true"
                                                    aria-invalid="false">
                                                    <option value="Pakistan" selected="">Pakistan</option>
                                                    <option value="Afghanistan">Afghanistan</option>
                                                    <option value="Aland Islands">Aland Islands</option>
                                                    <option value="Albania">Albania</option>
                                                    <option value="Algeria">Algeria</option>
                                                    <option value="American Samoa">American Samoa</option>
                                                    <option value="Andorra">Andorra</option>
                                                    <option value="Angola">Angola</option>
                                                    <option value="Anguilla">Anguilla</option>
                                                    <option value="Antarctica">Antarctica</option>
                                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                    <option value="Argentina">Argentina</option>
                                                    <option value="Armenia">Armenia</option>
                                                    <option value="Aruba">Aruba</option>
                                                    <option value="Australia">Australia</option>
                                                    <option value="Austria">Austria</option>
                                                    <option value="Azerbaijan">Azerbaijan</option>
                                                    <option value="Bahamas">Bahamas</option>
                                                    <option value="Bahrain">Bahrain</option>
                                                    <option value="Bangladesh">Bangladesh</option>
                                                    <option value="Barbados">Barbados</option>
                                                    <option value="Belarus">Belarus</option>
                                                    <option value="Belgium">Belgium</option>
                                                    <option value="Belize">Belize</option>
                                                    <option value="Benin">Benin</option>
                                                    <option value="Bermuda">Bermuda</option>
                                                    <option value="Bhutan">Bhutan</option>
                                                    <option value="Bolivia">Bolivia</option>
                                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                    <option value="Botswana">Botswana</option>
                                                    <option value="Bouvet Island">Bouvet Island</option>
                                                    <option value="Brazil">Brazil</option>
                                                    <option value="British Indian Ocean Territory">British Indian Ocean
                                                        Territory</option>
                                                    <option value="British Virgin Islands">British Virgin Islands</option>
                                                    <option value="Brunei">Brunei</option>
                                                    <option value="Bulgaria">Bulgaria</option>
                                                    <option value="Burkina Faso">Burkina Faso</option>
                                                    <option value="Burundi">Burundi</option>
                                                    <option value="Cambodia">Cambodia</option>
                                                    <option value="Cameroon">Cameroon</option>
                                                    <option value="Canada">Canada</option>
                                                    <option value="Cape Verde">Cape Verde</option>
                                                    <option value="Cayman Islands">Cayman Islands</option>
                                                    <option value="Central African Republic">Central African Republic
                                                    </option>
                                                    <option value="Chad">Chad</option>
                                                    <option value="Chile">Chile</option>
                                                    <option value="China">China</option>
                                                    <option value="Christmas Island">Christmas Island</option>
                                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                    <option value="Colombia">Colombia</option>
                                                    <option value="Comoros">Comoros</option>
                                                    <option value="Congo">Congo</option>
                                                    <option value="Cook Islands">Cook Islands</option>
                                                    <option value="Costa Rica">Costa Rica</option>
                                                    <option value="Croatia">Croatia</option>
                                                    <option value="Cuba">Cuba</option>
                                                    <option value="Cyprus">Cyprus</option>
                                                    <option value="Czech Republic">Czech Republic</option>
                                                    <option value="Democratic Republic of Congo">Democratic Republic of
                                                        Congo</option>
                                                    <option value="Denmark">Denmark</option>
                                                    <option value="Disputed Territory Djibouti">Disputed Territory Djibouti
                                                    </option>
                                                    <option value="Dominica">Dominica</option>
                                                    <option value="Dominican Republic">Dominican Republic</option>
                                                    <option value="East Timor">East Timor</option>
                                                    <option value="Ecuador">Ecuador</option>
                                                    <option value="Egypt">Egypt</option>
                                                    <option value="El Salvador">El Salvador</option>
                                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                    <option value="Eritrea">Eritrea</option>
                                                    <option value="Estonia">Estonia</option>
                                                    <option value="Ethiopia">Ethiopia</option>
                                                    <option value="Falkland Islands">Falkland Islands</option>
                                                    <option value="Faroe Islands">Faroe Islands</option>
                                                    <option value="Federated States of Micronesia">Federated States of
                                                        Micronesia</option>
                                                    <option value="Fiji">Fiji</option>
                                                    <option value="Finland">Finland</option>
                                                    <option value="France">France</option>
                                                    <option value="French Guyana">French Guyana</option>
                                                    <option value="French Polynesia">French Polynesia</option>
                                                    <option value="French Southern Territories">French Southern Territories
                                                    </option>
                                                    <option value="Gabon">Gabon</option>
                                                    <option value="Gambia">Gambia</option>
                                                    <option value="Georgia">Georgia</option>
                                                    <option value="Germany">Germany</option>
                                                    <option value="Ghana">Ghana</option>
                                                    <option value="Gibraltar">Gibraltar</option>
                                                    <option value="Greece">Greece</option>
                                                    <option value="Greenland">Greenland</option>
                                                    <option value="Grenada">Grenada</option>
                                                    <option value="Guadeloupe">Guadeloupe</option>
                                                    <option value="Guam">Guam</option>
                                                    <option value="Guatemala">Guatemala</option>
                                                    <option value="Guinea">Guinea</option>
                                                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                    <option value="Guyana">Guyana</option>
                                                    <option value="Haiti">Haiti</option>
                                                    <option value="Heard Island and Mcdonald Islands">Heard Island and
                                                        Mcdonald Islands</option>
                                                    <option value="Honduras">Honduras</option>
                                                    <option value="Hong Kong">Hong Kong</option>
                                                    <option value="Hungary">Hungary</option>
                                                    <option value="Iceland">Iceland</option>
                                                    <option value="India">India</option>
                                                    <option value="Indonesia">Indonesia</option>
                                                    <option value="Iran">Iran</option>
                                                    <option value="Iraq">Iraq</option>
                                                    <option value="Iraq-Saudi Arabia Neutral Zone">Iraq-Saudi Arabia Neutral
                                                        Zone</option>
                                                    <option value="Ireland">Ireland</option>
                                                    <option value="Israel">Israel</option>
                                                    <option value="Italy">Italy</option>
                                                    <option value="Ivory Coast">Ivory Coast</option>
                                                    <option value="Jamaica">Jamaica</option>
                                                    <option value="Japan">Japan</option>
                                                    <option value="Jordan">Jordan</option>
                                                    <option value="Kazakhstan">Kazakhstan</option>
                                                    <option value="Kenya">Kenya</option>
                                                    <option value="Kiribati">Kiribati</option>
                                                    <option value="Kuwait">Kuwait</option>
                                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                    <option value="Laos">Laos</option>
                                                    <option value="Latvia">Latvia</option>
                                                    <option value="Lebanon">Lebanon</option>
                                                    <option value="Lesotho">Lesotho</option>
                                                    <option value="Liberia">Liberia</option>
                                                    <option value="Libya">Libya</option>
                                                    <option value="Liechtenstein">Liechtenstein</option>
                                                    <option value="Lithuania">Lithuania</option>
                                                    <option value="Luxembourg">Luxembourg</option>
                                                    <option value="Macau">Macau</option>
                                                    <option value="Macedonia">Macedonia</option>
                                                    <option value="Madagascar">Madagascar</option>
                                                    <option value="Malawi">Malawi</option>
                                                    <option value="Malaysia Maldives">Malaysia Maldives</option>
                                                    <option value="Mali">Mali</option>
                                                    <option value="Malta">Malta</option>
                                                    <option value="Marshall Islands">Marshall Islands</option>
                                                    <option value="Martinique">Martinique</option>
                                                    <option value="Mauritania">Mauritania</option>
                                                    <option value="Mauritius">Mauritius</option>
                                                    <option value="Mayotte">Mayotte</option>
                                                    <option value="Mexico">Mexico</option>
                                                    <option value="Moldova">Moldova</option>
                                                    <option value="Monaco">Monaco</option>
                                                    <option value="Mongolia">Mongolia</option>
                                                    <option value="Montenegro">Montenegro</option>
                                                    <option value="Montserrat">Montserrat</option>
                                                    <option value="Morocco">Morocco</option>
                                                    <option value="Mozambique">Mozambique</option>
                                                    <option value="Myanmar">Myanmar</option>
                                                    <option value="Namibia">Namibia</option>
                                                    <option value="Nauru">Nauru</option>
                                                    <option value="Nepal">Nepal</option>
                                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                    <option value="Netherlands">Netherlands</option>
                                                    <option value="New Caledonia">New Caledonia</option>
                                                    <option value="New Zealand">New Zealand</option>
                                                    <option value="Nicaragua">Nicaragua</option>
                                                    <option value="Niger">Niger</option>
                                                    <option value="Nigeria">Nigeria</option>
                                                    <option value="Niue">Niue</option>
                                                    <option value="Norfolk Island">Norfolk Island</option>
                                                    <option value="North Korea">North Korea</option>
                                                    <option value="Northern Mariana Islands">Northern Mariana Islands
                                                    </option>
                                                    <option value="Norway">Norway</option>
                                                    <option value="Oman">Oman</option>
                                                    <option value="Pakistan">Pakistan</option>
                                                    <option value="Palau">Palau</option>
                                                    <option value="Palestinian Territories">Palestinian Territories</option>
                                                    <option value="Panama">Panama</option>
                                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                                    <option value="Paraguay">Paraguay</option>
                                                    <option value="Peru">Peru</option>
                                                    <option value="Philippines">Philippines</option>
                                                    <option value="Pitcairn Islands">Pitcairn Islands</option>
                                                    <option value="Poland">Poland</option>
                                                    <option value="Portugal">Portugal</option>
                                                    <option value="Puerto Rico">Puerto Rico</option>
                                                    <option value="Qatar">Qatar</option>
                                                    <option value="Reunion">Reunion</option>
                                                    <option value="Romania">Romania</option>
                                                    <option value="Russia">Russia</option>
                                                    <option value="Rwanda">Rwanda</option>
                                                    <option value="Saint Helena and Dependencies">Saint Helena and
                                                        Dependencies</option>
                                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                    <option value="Saint Lucia">Saint Lucia</option>
                                                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon
                                                    </option>
                                                    <option value="Saint Vincent and the Grenadines">Saint Vincent and the
                                                        Grenadines</option>
                                                    <option value="Samoa">Samoa</option>
                                                    <option value="San Marino">San Marino</option>
                                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                                    <option value="Senegal">Senegal</option>
                                                    <option value="Serbia">Serbia</option>
                                                    <option value="Seychelles">Seychelles</option>
                                                    <option value="Sierra Leone">Sierra Leone</option>
                                                    <option value="Singapore">Singapore</option>
                                                    <option value="Slovakia">Slovakia</option>
                                                    <option value="Slovenia">Slovenia</option>
                                                    <option value="Solomon Islands">Solomon Islands</option>
                                                    <option value="Somalia">Somalia</option>
                                                    <option value="South Africa">South Africa</option>
                                                    <option value="South Georgia and South Sandwich Islands">South Georgia
                                                        and South Sandwich Islands</option>
                                                    <option value="South Korea">South Korea</option>
                                                    <option value="Spain">Spain</option>
                                                    <option value="Spratly Islands">Spratly Islands</option>
                                                    <option value="Sri Lanka">Sri Lanka</option>
                                                    <option value="Sudan">Sudan</option>
                                                    <option value="Suriname">Suriname</option>
                                                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                    <option value="Swaziland">Swaziland</option>
                                                    <option value="Sweden">Sweden</option>
                                                    <option value="Switzerland">Switzerland</option>
                                                    <option value="Syria">Syria</option>
                                                    <option value="Taiwan">Taiwan</option>
                                                    <option value="Tajikistan">Tajikistan</option>
                                                    <option value="Tanzania">Tanzania</option>
                                                    <option value="Thailand">Thailand</option>
                                                    <option value="Togo">Togo</option>
                                                    <option value="Tokelau">Tokelau</option>
                                                    <option value="Tonga">Tonga</option>
                                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                    <option value="Tunisia">Tunisia</option>
                                                    <option value="Turkey">Turkey</option>
                                                    <option value="Turkmenistan">Turkmenistan</option>
                                                    <option value="Turks And Caicos Islands">Turks And Caicos Islands
                                                    </option>
                                                    <option value="Tuvalu">Tuvalu</option>
                                                    <option value="US Virgin Islands">US Virgin Islands</option>
                                                    <option value="Uganda">Uganda</option>
                                                    <option value="Ukraine">Ukraine</option>
                                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                                    <option value="United Kingdom">United Kingdom</option>
                                                    <option value="United States Minor Outlying Islands">United States Minor
                                                        Outlying Islands</option>
                                                    <option value="United States">United States</option>
                                                    <option value="Uruguay">Uruguay</option>
                                                    <option value="Uzbekistan">Uzbekistan</option>
                                                    <option value="Vanuatu">Vanuatu</option>
                                                    <option value="Vatican City">Vatican City</option>
                                                    <option value="Venezuela">Venezuela</option>
                                                    <option value="Vietnam">Vietnam</option>
                                                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                    <option value="Western Sahara">Western Sahara</option>
                                                    <option value="Yemen">Yemen</option>
                                                    <option value="Zambia">Zambia</option>
                                                    <option value="Zimbabwe">Zimbabwe</option>
                                                </select>
                                                <div class="select-selected">Pakistan</div>
                                                <div class="select-items select-hide">
                                                    <div>Pakistan</div>
                                                    <div>Afghanistan</div>
                                                    <div>Aland Islands</div>
                                                    <div>Albania</div>
                                                    <div>Algeria</div>
                                                    <div>American Samoa</div>
                                                    <div>Andorra</div>
                                                    <div>Angola</div>
                                                    <div>Anguilla</div>
                                                    <div>Antarctica</div>
                                                    <div>Antigua and Barbuda</div>
                                                    <div>Argentina</div>
                                                    <div>Armenia</div>
                                                    <div>Aruba</div>
                                                    <div>Australia</div>
                                                    <div>Austria</div>
                                                    <div>Azerbaijan</div>
                                                    <div>Bahamas</div>
                                                    <div>Bahrain</div>
                                                    <div>Bangladesh</div>
                                                    <div>Barbados</div>
                                                    <div>Belarus</div>
                                                    <div>Belgium</div>
                                                    <div>Belize</div>
                                                    <div>Benin</div>
                                                    <div>Bermuda</div>
                                                    <div>Bhutan</div>
                                                    <div>Bolivia</div>
                                                    <div>Bosnia and Herzegovina</div>
                                                    <div>Botswana</div>
                                                    <div>Bouvet Island</div>
                                                    <div>Brazil</div>
                                                    <div>British Indian Ocean Territory</div>
                                                    <div>British Virgin Islands</div>
                                                    <div>Brunei</div>
                                                    <div>Bulgaria</div>
                                                    <div>Burkina Faso</div>
                                                    <div>Burundi</div>
                                                    <div>Cambodia</div>
                                                    <div>Cameroon</div>
                                                    <div>Canada</div>
                                                    <div>Cape Verde</div>
                                                    <div>Cayman Islands</div>
                                                    <div>Central African Republic</div>
                                                    <div>Chad</div>
                                                    <div>Chile</div>
                                                    <div>China</div>
                                                    <div>Christmas Island</div>
                                                    <div>Cocos (Keeling) Islands</div>
                                                    <div>Colombia</div>
                                                    <div>Comoros</div>
                                                    <div>Congo</div>
                                                    <div>Cook Islands</div>
                                                    <div>Costa Rica</div>
                                                    <div>Croatia</div>
                                                    <div>Cuba</div>
                                                    <div>Cyprus</div>
                                                    <div>Czech Republic</div>
                                                    <div>Democratic Republic of Congo</div>
                                                    <div>Denmark</div>
                                                    <div>Disputed Territory Djibouti</div>
                                                    <div>Dominica</div>
                                                    <div>Dominican Republic</div>
                                                    <div>East Timor</div>
                                                    <div>Ecuador</div>
                                                    <div>Egypt</div>
                                                    <div>El Salvador</div>
                                                    <div>Equatorial Guinea</div>
                                                    <div>Eritrea</div>
                                                    <div>Estonia</div>
                                                    <div>Ethiopia</div>
                                                    <div>Falkland Islands</div>
                                                    <div>Faroe Islands</div>
                                                    <div>Federated States of Micronesia</div>
                                                    <div>Fiji</div>
                                                    <div>Finland</div>
                                                    <div>France</div>
                                                    <div>French Guyana</div>
                                                    <div>French Polynesia</div>
                                                    <div>French Southern Territories</div>
                                                    <div>Gabon</div>
                                                    <div>Gambia</div>
                                                    <div>Georgia</div>
                                                    <div>Germany</div>
                                                    <div>Ghana</div>
                                                    <div>Gibraltar</div>
                                                    <div>Greece</div>
                                                    <div>Greenland</div>
                                                    <div>Grenada</div>
                                                    <div>Guadeloupe</div>
                                                    <div>Guam</div>
                                                    <div>Guatemala</div>
                                                    <div>Guinea</div>
                                                    <div>Guinea-Bissau</div>
                                                    <div>Guyana</div>
                                                    <div>Haiti</div>
                                                    <div>Heard Island and Mcdonald Islands</div>
                                                    <div>Honduras</div>
                                                    <div>Hong Kong</div>
                                                    <div>Hungary</div>
                                                    <div>Iceland</div>
                                                    <div>India</div>
                                                    <div>Indonesia</div>
                                                    <div>Iran</div>
                                                    <div>Iraq</div>
                                                    <div>Iraq-Saudi Arabia Neutral Zone</div>
                                                    <div>Ireland</div>
                                                    <div>Israel</div>
                                                    <div>Italy</div>
                                                    <div>Ivory Coast</div>
                                                    <div>Jamaica</div>
                                                    <div>Japan</div>
                                                    <div>Jordan</div>
                                                    <div>Kazakhstan</div>
                                                    <div>Kenya</div>
                                                    <div>Kiribati</div>
                                                    <div>Kuwait</div>
                                                    <div>Kyrgyzstan</div>
                                                    <div>Laos</div>
                                                    <div>Latvia</div>
                                                    <div>Lebanon</div>
                                                    <div>Lesotho</div>
                                                    <div>Liberia</div>
                                                    <div>Libya</div>
                                                    <div>Liechtenstein</div>
                                                    <div>Lithuania</div>
                                                    <div>Luxembourg</div>
                                                    <div>Macau</div>
                                                    <div>Macedonia</div>
                                                    <div>Madagascar</div>
                                                    <div>Malawi</div>
                                                    <div>Malaysia Maldives</div>
                                                    <div>Mali</div>
                                                    <div>Malta</div>
                                                    <div>Marshall Islands</div>
                                                    <div>Martinique</div>
                                                    <div>Mauritania</div>
                                                    <div>Mauritius</div>
                                                    <div>Mayotte</div>
                                                    <div>Mexico</div>
                                                    <div>Moldova</div>
                                                    <div>Monaco</div>
                                                    <div>Mongolia</div>
                                                    <div>Montenegro</div>
                                                    <div>Montserrat</div>
                                                    <div>Morocco</div>
                                                    <div>Mozambique</div>
                                                    <div>Myanmar</div>
                                                    <div>Namibia</div>
                                                    <div>Nauru</div>
                                                    <div>Nepal</div>
                                                    <div>Netherlands Antilles</div>
                                                    <div>Netherlands</div>
                                                    <div>New Caledonia</div>
                                                    <div>New Zealand</div>
                                                    <div>Nicaragua</div>
                                                    <div>Niger</div>
                                                    <div>Nigeria</div>
                                                    <div>Niue</div>
                                                    <div>Norfolk Island</div>
                                                    <div>North Korea</div>
                                                    <div>Northern Mariana Islands</div>
                                                    <div>Norway</div>
                                                    <div>Oman</div>
                                                    <div>Pakistan</div>
                                                    <div>Palau</div>
                                                    <div>Palestinian Territories</div>
                                                    <div>Panama</div>
                                                    <div>Papua New Guinea</div>
                                                    <div>Paraguay</div>
                                                    <div>Peru</div>
                                                    <div>Philippines</div>
                                                    <div>Pitcairn Islands</div>
                                                    <div>Poland</div>
                                                    <div>Portugal</div>
                                                    <div>Puerto Rico</div>
                                                    <div>Qatar</div>
                                                    <div>Reunion</div>
                                                    <div>Romania</div>
                                                    <div>Russia</div>
                                                    <div>Rwanda</div>
                                                    <div>Saint Helena and Dependencies</div>
                                                    <div>Saint Kitts and Nevis</div>
                                                    <div>Saint Lucia</div>
                                                    <div>Saint Pierre and Miquelon</div>
                                                    <div>Saint Vincent and the Grenadines</div>
                                                    <div>Samoa</div>
                                                    <div>San Marino</div>
                                                    <div>Sao Tome and Principe</div>
                                                    <div>Saudi Arabia</div>
                                                    <div>Senegal</div>
                                                    <div>Serbia</div>
                                                    <div>Seychelles</div>
                                                    <div>Sierra Leone</div>
                                                    <div>Singapore</div>
                                                    <div>Slovakia</div>
                                                    <div>Slovenia</div>
                                                    <div>Solomon Islands</div>
                                                    <div>Somalia</div>
                                                    <div>South Africa</div>
                                                    <div>South Georgia and South Sandwich Islands</div>
                                                    <div>South Korea</div>
                                                    <div>Spain</div>
                                                    <div>Spratly Islands</div>
                                                    <div>Sri Lanka</div>
                                                    <div>Sudan</div>
                                                    <div>Suriname</div>
                                                    <div>Svalbard and Jan Mayen</div>
                                                    <div>Swaziland</div>
                                                    <div>Sweden</div>
                                                    <div>Switzerland</div>
                                                    <div>Syria</div>
                                                    <div>Taiwan</div>
                                                    <div>Tajikistan</div>
                                                    <div>Tanzania</div>
                                                    <div>Thailand</div>
                                                    <div>Togo</div>
                                                    <div>Tokelau</div>
                                                    <div>Tonga</div>
                                                    <div>Trinidad and Tobago</div>
                                                    <div>Tunisia</div>
                                                    <div>Turkey</div>
                                                    <div>Turkmenistan</div>
                                                    <div>Turks And Caicos Islands</div>
                                                    <div>Tuvalu</div>
                                                    <div>US Virgin Islands</div>
                                                    <div>Uganda</div>
                                                    <div>Ukraine</div>
                                                    <div>United Arab Emirates</div>
                                                    <div>United Kingdom</div>
                                                    <div>United States Minor Outlying Islands</div>
                                                    <div>United States</div>
                                                    <div>Uruguay</div>
                                                    <div>Uzbekistan</div>
                                                    <div>Vanuatu</div>
                                                    <div>Vatican City</div>
                                                    <div>Venezuela</div>
                                                    <div>Vietnam</div>
                                                    <div>Wallis and Futuna</div>
                                                    <div>Western Sahara</div>
                                                    <div>Yemen</div>
                                                    <div>Zambia</div>
                                                    <div>Zimbabwe</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="formField textField darkStyle" id="phone-footer">
                                        <div class="formFieldIn">
                                            <label>
                                                <span>Phone</span>
                                                <input type="text" value="" name="phone"
                                                    onkeydown="turnwhitefooter('phone');">
                                            </label>
                                        </div>
                                    </div>
                                    <a class="btn btn-small float-left" onclick="showstartfooter()">Previous</a>
                                    <a class="btn btn-small float-right" onclick="showNextOptionfooter()">Next</a>
                                </div>
                            </div>

                            <div class="text-center pad-bottom-100 animated fadeInUp" id="question2-footer"
                                style="display: none;" data-animation-type="fadeInUp">
                                <h3 class="text-left">Request Demo</h3>
                                <h4 class="text-left">02. What would you like to request demo for?</h4>
                                <br><br>

                                <div class="checkBoxRadioFieldIn text-left">
                                    <label class="checkBoxContainer">
                                        NFS Ascent<sup>®</sup>
                                        <input type="checkbox" value="NFS Ascent" name="demo_for[]" id="nfsascent-footer"
                                            class="demo_class">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="checkBoxContainer">
                                        NFS Ascent<sup>®</sup> On Cloud
                                        <input type="checkbox" value="NFS Ascent on Cloud" name="demo_for[]"
                                            id="nfsascentcloud-footer" class="demo_class">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="checkBoxContainer">
                                        NFS Digital
                                        <input type="checkbox" value="NFS Digital" name="demo_for[]" id="nfsdigital-footer"
                                            class="demo_class">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <br>
                                <a class="btn btn-small float-left" onclick="showQuestionfooter()">Previous</a>
                                <a class="btn btn-small float-right" onclick="showNextOption2footer()">Next</a>
                            </div>

                            <div class="text-center pad-bottom-100 animated fadeInUp" id="question3-footer"
                                style="display: none;" data-animation-type="fadeInUp">
                                <h3 class="text-left">Request Demo</h3>
                                <h4 class="text-left">03. What is your type of business?</h4>
                                <br><br>
                                <div class="checkBoxRadioFieldIn text-left">
                                    <label class="checkBoxContainer">
                                        Retail
                                        <input type="checkbox" value="Retail" name="typeofbusiness[]" id="retail-footer"
                                            class="business_class">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="checkBoxContainer">
                                        Wholesale
                                        <input type="checkbox" value="Wholesale" name="typeofbusiness[]"
                                            id="wholesale-footer" class="business_class">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="checkBoxContainer">
                                        Other
                                        <input type="checkbox" value="Otherbiz" id="otherbiz-footer" name="otherbiz">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <br>
                                <div class="getInTouchForm mgntop30" style="display:none" id="otherbizfield">
                                    <div class="formField textField darkStyle">
                                        <div class="formFieldIn" id="nullname-footer">
                                            <label>
                                                <span class="nullname">Type of business</span>
                                                <input type="text" value="" name="otob" id="otob-footer">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <a class="btn btn-small float-left" onclick="showNextOptionfooter()">Previous</a>
                                <a class="btn btn-small float-right" onclick="showNextOption3footer()">Next</a>
                            </div>

                            <div class="text-center pad-bottom-100 animated fadeInUp" id="question4-footer"
                                style="display: none;" data-animation-type="fadeInUp">
                                <h3 class="text-left">Request Demo</h3>
                                <h4 class="text-left">04. What is your annual contract volume?</h4>
                                <br><br>
                                <div class="checkBoxRadioFieldIn text-left">
                                    <label class="radioContainer">
                                        Less than 10,000
                                        <input type="radio" value="Less than 10,000" name="contract_vol[]"
                                            id="contractvol-footer" checked="">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">
                                        10,000 - 40,000
                                        <input type="radio" value="10,000 - 40,000" name="contract_vol[]"
                                            id="contractvol-footer">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">
                                        40,000 - 70,000
                                        <input type="radio" value="40,000 - 70,000" name="contract_vol[]"
                                            id="contractvol-footer">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">
                                        70,000 - 100,000
                                        <input type="radio" value="70,000 - 100,000" name="contract_vol[]"
                                            id="contractvol-footer">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radioContainer">
                                        Greater than 100,000
                                        <input type="radio" value="Greater than 100,000" name="contract_vol[]"
                                            id="contractvol-footer">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <br>
                                <a class="btn btn-small float-left" onclick="showNextOption2footer()">Previous</a>
                                <a class="btn btn-small float-right" onclick="showNextOption4footer()">Next</a>
                            </div>

                            <div class="text-center pad-bottom-100 animated fadeInUp" id="question5-footer"
                                style="display: none;" data-animation-type="fadeInUp">
                                <h3 class="text-left">Request Demo</h3>
                                <h4 class="text-left">05. What type of leases does your company provide?</h4>
                                <br><br>
                                <div class="checkBoxRadioFieldIn text-left">
                                    <label class="checkBoxContainer">
                                        Financial Lease
                                        <input type="checkbox" value="Financial Lease" name="typeofleases[]" id="fl-footer"
                                            class="lease_class">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="checkBoxContainer">
                                        Operating Lease
                                        <input type="checkbox" value="Operating Lease" name="typeofleases[]" id="ol-footer"
                                            class="lease_class">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="checkBoxContainer">
                                        Hire Purchase
                                        <input type="checkbox" value="Hire Purchase" name="typeofleases[]" id="hp-footer"
                                            class="lease_class">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="checkBoxContainer">
                                        Other
                                        <input type="checkbox" value="Other" name="otherlease" id="otherlease-footer">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <br>
                                <div class="getInTouchForm mgntop30" style="display:none" id="otherleasefield-footer">
                                    <div class="formField textField darkStyle">
                                        <div class="formFieldIn" id="nullname-footer">
                                            <label>
                                                <span class="nullname">Type of leases</span>
                                                <input type="text" value="" name="otherleasetype"
                                                    id="otherleasetype-footer">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <a class="btn btn-small float-left" onclick="showNextOption3footer()">Previous</a>
                                <a class="btn btn-small float-right" onclick="showNextOption5footer()">Next</a>
                            </div>

                            <div class="text-center pad-bottom-100 animated fadeInUp" id="question6-footer"
                                style="display: none;" data-animation-type="fadeInUp">
                                <h3 class="text-left">Request Demo</h3>
                                <h4 class="text-left">06. Which industry does your organization operate in?</h4>
                                <br><br>
                                <div class="checkBoxRadioFieldIn text-left">
                                    <label class="checkBoxContainer">
                                        Auto Finance
                                        <input type="checkbox" value="Auto Finance" name="typesoforg[]" id="af-footer"
                                            class="org_class">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="checkBoxContainer">
                                        Equipment Finance
                                        <input type="checkbox" value="Equipment Finance" name="typesoforg[]" id="ef-footer"
                                            class="org_class">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="checkBoxContainer">
                                        Big Ticket
                                        <input type="checkbox" value="Big Ticket" name="typesoforg[]" id="bg-footer"
                                            class="org_class">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="checkBoxContainer">
                                        Bank or subsidiary
                                        <input type="checkbox" value="Bank or subsidiary" name="typesoforg[]" id="bs-footer"
                                            class="org_class">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="checkBoxContainer">
                                        Other
                                        <input type="checkbox" value="Other" name="otherorg-footer">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <br>
                                <div class="getInTouchForm mgntop30" style="display:none; float:left; width:100%;"
                                    id="otherorgfield-footer">
                                    <div class="formField darkStyle">
                                        <div class="formFieldIn" id="nullname-footer">
                                            <label>
                                                <span class="nullname">Organization Type</span>
                                                <input type="text" value="" name="otherorgtype" id="otherorgtype-footer">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <a class="btn btn-small float-left" onclick="showNextOption4footer()">Previous</a>
                                <a class="btn btn-small float-right" onclick="showNextOption6footer()">Next</a>
                            </div>

                            <div class="text-center pad-bottom-100 animated fadeInUp" id="question7-footer"
                                style="display: none;" data-animation-type="fadeInUp">
                                <h3 class="text-left">Request Demo</h3>
                                <h4 class="text-left">07. Additional Comments &amp; Submission</h4>
                                <br>
                                <h3></h3>
                                <div class="getInTouchForm mgntop30" style="width:100%;">
                                    <div class="formField textField darkStyle">
                                        <div class="formFieldIn">
                                            <label>
                                                <span>Please type any additional comments</span>
                                                <input type="text" value="" name="comments-footer" id="comments-footer">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="checkBoxRadioFieldIn">
                                        <label class="checkBoxContainer" style="text-align:left">
                                            By ticking this box you are consenting to allow NETSOL to contact you from time
                                            to time via email about products, services and offers that may be of interest to
                                            you.<br><br>
                                            <span class="mobileconcent">By submitting your personal details you are
                                                consenting to allow NETSOL to process and store your details in line with
                                                our privacy policy and to contact you in relation to your submitted enquiry.
                                                You can withdraw your marketing consent at any time by sending an email to
                                                <a href="mailto:marketing@netsoltech.com"
                                                    style="text-decoration:underline; color:#1c72b8 !important">marketing@netsoltech.com</a>.
                                                <br><br>
                                                More information on our processing can be found on <a href="privacy-policy"
                                                    style="text-decoration:underline; color:#1c72b8 !important">PRIVACY
                                                    POLICY</a></span>
                                            <input type="checkbox" value="Yes" name="acceptcheck-footer"
                                                id="acceptance-footer">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <br><br>
                                    <div class="g-recaptcha" data-sitekey="6LcrqrgUAAAAAKnOOB68FvCIq0nX05jaN43xSx0X"
                                        data-callback="verifyCaptcha">
                                        <div style="width: 304px; height: 78px;">
                                            <div><iframe title="reCAPTCHA"
                                                    src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LcrqrgUAAAAAKnOOB68FvCIq0nX05jaN43xSx0X&amp;co=aHR0cHM6Ly9uZXRzb2x0ZWNoLmNvbTo0NDM.&amp;hl=en&amp;v=_exWVY_hlNJJl2Abm8pI9i1L&amp;size=normal&amp;cb=cfb0ve5buwyn"
                                                    width="304" height="78" role="presentation" name="a-vlasg24scg1f"
                                                    frameborder="0" scrolling="no"
                                                    sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
                                            </div><textarea id="g-recaptcha-response" name="g-recaptcha-response"
                                                class="g-recaptcha-response"
                                                style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                        </div><iframe style="display: none;"></iframe>
                                    </div>
                                    <!--<a class="btn btn-white mgntop20" onClick="showNextOption8()">Submit</a>-->
                                    <input type="submit" value="Submit" class="btn mgntop20 float-left">
                                </div>
                            </div>

                        </form>
                        <div class="text-center pad-bottom-100 padtop150 animated fadeInUp" id="thankyounote-footer"
                            style="display: none; margin-top: 9vh;" data-animation-type="fadeInUp">
                            <h4></h4>
                            <h3 style="color:#fff;">Thank you! <br> You will be contacted shortly.</h3>
                            <br>
                            <a class="btn btn-white mgntop20" onclick="showstartfooter()">Submit Another Request</a>
                        </div>

                        <div class="progress_row step_progress">
                            <div class="progress_block step1_footer" style="width:12%">
                                <div class="progress_number active">01</div>
                                <div class="progress_bar active"></div>
                            </div>
                            <div class="progress_block step2_footer" style="width:12%">
                                <div class="progress_number">02</div>
                                <div class="progress_bar"></div>
                            </div>
                            <div class="progress_block step3_footer" style="width:12%">
                                <div class="progress_number">03</div>
                                <div class="progress_bar"></div>
                            </div>
                            <div class="progress_block step4_footer" style="width:12%">
                                <div class="progress_number">04</div>
                                <div class="progress_bar"></div>
                            </div>
                            <div class="progress_block step5_footer" style="width:12%">
                                <div class="progress_number">05</div>
                                <div class="progress_bar"></div>
                            </div>
                            <div class="progress_block step6_footer" style="width:12%">
                                <div class="progress_number">06</div>
                                <div class="progress_bar"></div>
                            </div>
                            <div class="progress_block step7_footer" style="width:12%">
                                <div class="progress_number">07</div>
                                <div class="progress_bar"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <div id="downloadProfile" class="model-window downloadPopUp">
                <div class="model-overlay"></div>
                <div class="model-container">
                    <div class="model-content modal-medium text-left">
                        <a class="close-window"></a>
                        <h2>Download</h2>
                        <p>To download this file, please fill in the form below.</p>
                        <br>
                        <form method="post" action="db-queries/downloadfile.php" name="downloadprofile">
                            <div class="formField textField darkStyle">
                                <div class="formFieldIn">
                                    <label>
                                        <span>Full Name</span>
                                        <input type="text" value="" name="name" required="" id="downloadname">
                                    </label>
                                </div>
                            </div>
                            <div class="formField textField darkStyle">
                                <div class="formFieldIn">
                                    <label>
                                        <span>Email</span>
                                        <input type="text" value="" name="email" required="" id="downloademail">
                                    </label>
                                </div>
                            </div>
                            <div class="formField textField darkStyle">
                                <div class="formFieldIn">
                                    <label>
                                        <span>Company</span>
                                        <input type="text" value="" name="company" required="" id="downloadcompany">
                                    </label>
                                </div>
                            </div>
                            <div class="termsCheck">
                                <label class="checkBoxContainer darkStyle">
                                    By ticking this box, you are consenting to allow NETSOL to contact you from time to time
                                    via email about products, services and offers that may be of interest to you.<br><br>
                                    By submitting your personal details, you are consenting to allow NETSOL to process and
                                    store your details in line with our privacy policy and to contact you in relation to
                                    your submitted enquiry.
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <input type="hidden" value="NETSOL Corporate Profile.pdf" name="filename">
                            <br>
                            <img id="captcha_code4" src="includes/bot_captcha_code.php" class="flt-lft" width="90">
                            <div class="btnRefresh flt-lft" onclick="refreshCaptcha4();" style="cursor:pointer;"><img
                                    src="images/refresh.png" style="float:left; margin-left:10px; margin-top:5px;"
                                    width="24"></div>
                            <br><br><br>
                            <div class="formField textField darkStyle">
                                <div class="formFieldIn">
                                    <label>
                                        <span>Enter above captcha code</span>
                                        <input type="text" value="" name="imgLessAttemptdown" id="imgLessAttempt4"
                                            autocomplete="false">
                                    </label>
                                    <p class="error4 flt-lft" style="display:none; color:#ff0000;">Enter Correct Captcha
                                        Code.</p>
                                </div>
                            </div>
                            <input type="submit" value="Download" class="btn btn-small" onclick="downloadFile()">
                        </form>

                    </div>
                </div>
            </div>



        <script type="text/javascript" id="">
            (function() {
                window.ldbrry = window.ldbrry || {};
                (function(c, d, a, b) {
                    function f(a) {
                        var e = c.createElement(d);
                        e.src = a;
                        setTimeout(function() {
                            b.parentNode.insertBefore(e, b)
                        }, 1)
                    }
                    b = c.getElementsByTagName(d)[0];
                    f(a)
                })(document, "script", "https://app.leadberry.com/trackers/lb-131668973-187234964-7913.js")
            })();
        </script>

        <link href="css/animate.css" rel="stylesheet" type="text/css">
        <script src="js/animationScript.js" type="text/javascript" defer=""></script>
        <script src="js/customScripts.js" type="text/javascript" defer="defer"></script>
        <script src="js/canvasScript.js" type="text/javascript" defer="defer"></script>

        <script type="text/javascript">
            _satellite.pageBottom();
        </script> -->

        <script type="text/javascript">
            function downloadFile() {
                var downloadname = document.getElementById('downloadname').value;
                var downloademail = document.getElementById('downloademail').value;
                var downloadcompany = document.getElementById('downloadcompany').value;
                if (downloadname != '' && downloademail != '' && downloadcompany != '') {
                    $('.close-window').click();
                }
            }

            // Footer Demo Request Form


            function turnwhitefooter(id) {
                if (id == 'name') {
                    $('#name-footer').removeClass('error');
                }
                if (id == 'email') {
                    $('#email-footer').removeClass('error');
                }
                if (id == 'designation') {
                    $('#designation-footer').removeClass('error');
                }
                if (id == 'companyname') {
                    $('#companyname-footer').removeClass('error');
                }
                if (id == 'phone-footer') {
                    $('#phone').removeClass('error');
                }
            }

            function showQuestionfooter() {
                resetformfooter();
                $('.step1_footer .progress_number').addClass('active');
                $('.step1_footer .progress_bar').addClass('active');

                $('.step2_footer .progress_number').removeClass('active');
                $('.step2_footer .progress_bar').removeClass('active');
                $('.step3_footer .progress_number').removeClass('active');
                $('.step3_footer .progress_bar').removeClass('active');
                $('.step4_footer .progress_number').removeClass('active');
                $('.step4_footer .progress_bar').removeClass('active');
                $('.step5_footer .progress_number').removeClass('active');
                $('.step5_footer .progress_bar').removeClass('active');
                $('.step6_footer .progress_number').removeClass('active');
                $('.step6_footer .progress_bar').removeClass('active');
                $('.step7_footer .progress_number').removeClass('active');
                $('.step7_footer .progress_bar').removeClass('active');
                $('#question1-footer').fadeIn('slow');
            }

            function showNextOptionfooter() {
                var name = $("#name-footer input").val();
                var email = $("#email-footer input").val();
                var designation = $("#designation-footer input").val();
                var companyname = $("#companyname-footer input").val();
                var phone = $("#phone-footer input").val();
                if (name == '' || name == null) {
                    $("#name-footer").addClass('error');
                    //alert("please enter name");
                }
                if (email == '' || email == null) {
                    $("#email-footer").addClass('error');
                    //alert("please enter email");
                }
                if (!ValidateEmail(email)) {
                    $("#email-footer").addClass('error');
                }
                if (designation == '' || designation == null) {
                    $("#designation-footer").addClass('error');
                    //alert("please enter designation");
                }
                if (companyname == '' || companyname == null) {
                    $("#companyname-footer").addClass('error');
                    //alert("please enter company name");
                }
                if (phone == '' || phone == null) {
                    $("#phone-footer").addClass('error');
                    //alert("please enter phone");
                }
                if (name != '' && email != '' && designation != '' && companyname != '' && phone != '') {
                    $('.step1_footer .progress_number').addClass('active');
                    $('.step1_footer .progress_bar').addClass('active');
                    $('.step2_footer .progress_number').addClass('active');
                    $('.step2_footer .progress_bar').addClass('active');

                    $('.step3_footer .progress_number').removeClass('active');
                    $('.step3_footer .progress_bar').removeClass('active');
                    $('.step4_footer .progress_number').removeClass('active');
                    $('.step4_footer .progress_bar').removeClass('active');
                    $('.step5_footer .progress_number').removeClass('active');
                    $('.step5_footer .progress_bar').removeClass('active');
                    $('.step6_footer .progress_number').removeClass('active');
                    $('.step6_footer .progress_bar').removeClass('active');
                    $('.step7_footer .progress_number').removeClass('active');
                    $('.step7_footer .progress_bar').removeClass('active');
                    $('#question1-footer').fadeOut('fast');
                    $('#question2-footer').fadeIn('slow');
                }
            }

            function ValidateEmail(email) {
                var re =
                    /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(email);
            }

            function showNextOption2footer() {
                resetformfooter();
                $('#question3-footer').fadeIn('slow');
                $('.step1_footer .progress_number').addClass('active');
                $('.step1_footer .progress_bar').addClass('active');
                $('.step2_footer .progress_number').addClass('active');
                $('.step2_footer .progress_bar').addClass('active');
                $('.step3_footer .progress_number').addClass('active');
                $('.step3_footer .progress_bar').addClass('active');

                $('.step4_footer .progress_number').removeClass('active');
                $('.step4_footer .progress_bar').removeClass('active');
                $('.step5_footer .progress_number').removeClass('active');
                $('.step5_footer .progress_bar').removeClass('active');
                $('.step6_footer .progress_number').removeClass('active');
                $('.step6_footer .progress_bar').removeClass('active');
                $('.step7_footer .progress_number').removeClass('active');
                $('.step7_footer .progress_bar').removeClass('active');
            }

            function showNextOption3footer() {
                resetformfooter();
                $('#question4-footer').fadeIn('slow');
                $('.step1_footer .progress_number').addClass('active');
                $('.step1_footer .progress_bar').addClass('active');
                $('.step2_footer .progress_number').addClass('active');
                $('.step2_footer .progress_bar').addClass('active');
                $('.step3_footer .progress_number').addClass('active');
                $('.step3_footer .progress_bar').addClass('active');
                $('.step4_footer .progress_number').addClass('active');
                $('.step4_footer .progress_bar').addClass('active');

                $('.step5_footer .progress_number').removeClass('active');
                $('.step5_footer .progress_bar').removeClass('active');
                $('.step6_footer .progress_number').removeClass('active');
                $('.step6_footer .progress_bar').removeClass('active');
                $('.step7_footer .progress_number').removeClass('active');
                $('.step7_footer .progress_bar').removeClass('active');
            }

            function showNextOption4footer() {
                resetformfooter();
                $('.step1_footer .progress_number').addClass('active');
                $('.step1_footer .progress_bar').addClass('active');
                $('.step2_footer .progress_number').addClass('active');
                $('.step2_footer .progress_bar').addClass('active');
                $('.step3_footer .progress_number').addClass('active');
                $('.step3_footer .progress_bar').addClass('active');
                $('.step4_footer .progress_number').addClass('active');
                $('.step4_footer .progress_bar').addClass('active');
                $('.step5_footer .progress_number').addClass('active');
                $('.step5_footer .progress_bar').addClass('active');

                $('.step6_footer .progress_number').removeClass('active');
                $('.step6_footer .progress_bar').removeClass('active');
                $('.step7_footer .progress_number').removeClass('active');
                $('.step7_footer .progress_bar').removeClass('active');
                $('#question5-footer').fadeIn('slow');
            }

            function showNextOption5footer() {
                resetformfooter();
                $('.step1_footer .progress_number').addClass('active');
                $('.step1_footer .progress_bar').addClass('active');
                $('.step2_footer .progress_number').addClass('active');
                $('.step2_footer .progress_bar').addClass('active');
                $('.step3_footer .progress_number').addClass('active');
                $('.step3_footer .progress_bar').addClass('active');
                $('.step4_footer .progress_number').addClass('active');
                $('.step4_footer .progress_bar').addClass('active');
                $('.step5_footer .progress_number').addClass('active');
                $('.step5_footer .progress_bar').addClass('active');
                $('.step6_footer .progress_number').addClass('active');
                $('.step6_footer .progress_bar').addClass('active');

                $('.step7_footer .progress_number').removeClass('active');
                $('.step7_footer .progress_bar').removeClass('active');
                $('#question6-footer').fadeIn('slow');
            }

            function showNextOption6footer() {
                resetformfooter();
                $('.step1_footer .progress_number').addClass('active');
                $('.step1_footer .progress_bar').addClass('active');
                $('.step2_footer .progress_number').addClass('active');
                $('.step2_footer .progress_bar').addClass('active');
                $('.step3_footer .progress_number').addClass('active');
                $('.step3_footer .progress_bar').addClass('active');
                $('.step4_footer .progress_number').addClass('active');
                $('.step4_footer .progress_bar').addClass('active');
                $('.step5_footer .progress_number').addClass('active');
                $('.step5_footer .progress_bar').addClass('active');
                $('.step6_footer .progress_number').addClass('active');
                $('.step6_footer .progress_bar').addClass('active');
                $('.step7_footer .progress_number').addClass('active');
                $('.step7_footer .progress_bar').addClass('active');
                $('#question7-footer').fadeIn('slow');
            }

            function showNextOption7footer() {
                resetformfooter();
                $('#question8-footer').fadeIn('slow');
            }

            function showstartfooter() {
                resetformfooter();
                $('#question1-footer').fadeIn('fast');
                //$('#`').fadeIn('fast');
            }

            function resetformfooter() {
                $('#question1-footer').fadeOut('fast');
                $('#question2-footer').fadeOut('fast');
                $('#question3-footer').fadeOut('fast');
                $('#question4-footer').fadeOut('fast');
                $('#question5-footer').fadeOut('fast');
                $('#question6-footer').fadeOut('fast');
                $('#question7-footer').fadeOut('fast');
                $('#question8-footer').fadeOut('fast');
                $('#start-footer').fadeOut('fast');
                $('#thankyounote-footer').fadeOut('fast');
            }

            $('input[name="otherbiz-footer"]').change(function() {
                if (this.checked) {
                    $('#otherbizfield-footer').fadeIn('slow');
                    //alert("Thanks for checking me");
                } else {
                    $('#otherbizfield-footer').fadeOut('fast');
                }
            });

            $('input[name="otherlease-footer"]').change(function() {
                if (this.checked) {
                    $('#otherleasefield-footer').fadeIn('slow');
                    //alert("Thanks for checking me");
                } else {
                    $('#otherleasefield-footer').fadeOut('fast');
                }
            });

            $('input[name="otherorg-footer"]').change(function() {
                if (this.checked) {
                    $('#otherorgfield-footer').fadeIn('slow');
                    //alert("Thanks for checking me");
                } else {
                    $('#otherorgfield-footer').fadeOut('fast');
                }
            });



            $(document).ready(function() {
                setTimeout(() => {
                    var requestDemoVal = window.location.hash.substr(1);
                    if (requestDemoVal == 'RequestDemo') {
                        $("#requestDemo").trigger("click");
                    }
                }, 200);


                $('#demorequest-footer').on('submit', function(e) {
                    //Stop the form from submitting itself to the server.
                    e.preventDefault();
                    var name = $("#name-footer input").val();
                    var email = $("#email-footer input").val();
                    var designation = $("#designation-footer input").val();
                    var companyname = $("#companyname-footer input").val();
                    var country = $("#country-footer").val();
                    var phone = $("#phone-footer input").val();
                    var demo_for = $('input:checkbox:checked.demo_class').map(function() {
                        return this.value;
                    }).get().join(",");
                    var typeofbusiness = $('input:checkbox:checked.business_class').map(function() {
                        return this.value;
                    }).get().join(",");
                    var typeofleases = $('input:checkbox:checked.lease_class').map(function() {
                        return this.value;
                    }).get().join(",");
                    var typesoforg = $('input:checkbox:checked.org_class').map(function() {
                        return this.value;
                    }).get().join(",");
                    var contractvol = $("#contractvol-footer").val();
                    var acceptance = $("#acceptance-footer").val();
                    var comments = $("#comments-footer").val();

                    // Returns successful data submission message when the entered information is stored in database.
                    var dataString = 'name=' + name + '&company=' + companyname + '&designation=' +
                        designation + '&email=' + email + '&country=' + country + '&phone=' + phone +
                        '&demo_for=' + demo_for + '&typeofbusiness=' + typeofbusiness + '&typeofleases=' +
                        typeofleases + '&typesoforg=' + typesoforg + '&contract_vol=' + contractvol +
                        '&comments=' + comments + '&acceptcheck=' + acceptance;
                    if (name == '' || companyname == '' || designation == '' || email == '' || country == '') {
                        //alert("Please Fill All Fields");
                    } else {
                        //alert(dataString);
                        // AJAX code to submit form.
                        $.ajax({
                            type: "POST",
                            url: "db-queries/demo_request.php",
                            data: dataString,
                            cache: false,
                            success: function(res) {
                                //alert(res);
                                if (res == "fail") {
                                    //alert(res);
                                    $('#captecha3').addClass('error');
                                    $('.error3').show();
                                } else {
                                    //alert(res);
                                    resetformfooter();
                                    //$('#thankyounote-footer').fadeIn('slow');
                                    document.getElementsByName('demorequest-footer')[0].reset();
                                    refreshCaptcha3();
                                    $('#captecha3').removeClass('error');
                                    $('.error3').hide();
                                    return gtag_report_conversion('thank-you.php');
                                    //$('#captecha2').addClass('error');
                                    //$('.caperror').show('error');
                                }
                            },
                            error: function() {
                                alert("There is some network problem, kindly check later!");
                            }

                        });
                    }
                    return false;
                });

            });

            function refreshCaptcha3() {
                $("#captcha_code3").attr('src', 'includes/bot_captcha_code.php');
            }

            function refreshCaptcha4() {
                $("#captcha_code4").attr('src', 'includes/bot_captcha_code.php');
            }
        </script>
        <style>
            #captcha_code3 {
                border: #fff solid 3px !important;
                padding: 5px;
            }

        </style>

        <script type="text/javascript">
            _linkedin_partner_id = "482123";
            window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
            window._linkedin_data_partner_ids.push(_linkedin_partner_id);
        </script>___scripts_8___ <noscript> <img height="1" width="1" style="display:none;" alt=""
                src="https://px.ads.linkedin.com/collect/?pid=482123&fmt=gif" /> </noscript>
        <div
            style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;">
            <div
                style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;">
            </div>
            <div class="g-recaptcha-bubble-arrow"
                style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;">
            </div>
            <div class="g-recaptcha-bubble-arrow"
                style="border: 10px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;">
            </div>
            <div style="z-index: 2000000000; position: relative;"><iframe title="recaptcha challenge expires in two minutes"
                    src="https://www.google.com/recaptcha/api2/bframe?hl=en&amp;v=_exWVY_hlNJJl2Abm8pI9i1L&amp;k=6LcrqrgUAAAAAKnOOB68FvCIq0nX05jaN43xSx0X"
                    name="c-vlasg24scg1f" frameborder="0" scrolling="no"
                    sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"
                    style="width: 100%; height: 100%;"></iframe></div>
        </div>
    </body>
@endsection
