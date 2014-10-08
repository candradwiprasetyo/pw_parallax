<?php
$bg_color = '#1CBB9B';
?>
<style>
/* CSS Document */

/*==========================================*/
/*           Color Schemes
/*==========================================*/
/*==========================================*/
/*       01 - Global Elements
/*==========================================*/


html,
body {
  color: #888888;
}
html h1,
body h1,
html h2,
body h2,
html h3,
body h3,
html h4,
body h4,
html h5,
body h5 {
  color: #333333;
}
a {
  color: <?= $bg_color?>;
}
a:hover {
  color: <?= $bg_color?>;
}

.banner .overlay {
  position: absolute;
  z-index: 1;
  height: 100%;
  width: 100%;
  background: <?= $bg_color?>;
  opacity: 0.8;
  -webkit-opacity: 0.8;
  -moz-opacity: 0.8;
}

/*==========================================*/
/*       02 - Navbar Elements
/*==========================================*/
.navbar-inverse.scroll-fixed-navbar .navbar-nav li:hover a {
  color: <?= $bg_color ?>;
}
.navbar-inverse.scroll-fixed-navbar .navbar-nav li.active a {
  color: <?= $bg_color ?>;
}
.navbar-inverse.scroll-fixed-navbar .navbar-nav li.active a:hover {
  color: <?= $bg_color ?>;
}
/*==========================================*/
/*       03 - Banner Elements
/*==========================================*/
.banner .banner-content .buttons .def-btn:hover {
  color: #888888;
}
/*==========================================*/
/*           04 - Intro Elements
/*==========================================*/
.intro {
  background: <?= $bg_color ?>;
}
.intro .link .def-btn:hover {
  color: <?= $bg_color ?>;
}
/*==========================================*/
/*         05 - About Elements
/*==========================================*/
.about .content .icon i {
  color: <?= $bg_color ?>;
}
/*==========================================*/
/*        06 - Testimonial Elements
/*==========================================*/
.testimonial .carousel .carousel-control .control-circle:hover {
  border: 1px solid <?= $bg_color ?>;
}
.testimonial .carousel .carousel-control .control-circle:hover .fa {
  color: <?= $bg_color ?>;
}
/*==========================================*/
/*        07 - Team Elements
/*==========================================*/
.team {
  padding: 80px 0px;
}
.team .content .team-info .photo .overlay {
  background: rgba(147, 190, 76, 0.8);
}
.team .content .team-info .photo .overlay .link .circle:hover {
  color: <?= $bg_color ?>;
}
/*==========================================*/
/*        08 - counter Elements
/*==========================================*/
/*==========================================*/
/*        09 - portfolio Elements
/*==========================================*/
.portfolio .portfoliofilter a .filterbutton {
  color: #888888;
}
.portfolio .portfoliofilter a.current .filterbutton {
  background: <?= $bg_color ?>;
  border: 1px solid <?= $bg_color ?>;
}
.portfolio .portfoliofilter a:hover .filterbutton {
  border: 1px solid <?= $bg_color ?>;
  color: <?= $bg_color ?>;
}
.portfolio .portfoliocontent .content .overlay:hover {
  background: rgba(147, 190, 76, 0.8);
}
/*==========================================*/
/*        10 - Why Us Elements
/*==========================================*/
.why-us .skills .skillbars .bar-container .meter {
  background: <?= $bg_color ?>;
}
/*==========================================*/
/*        11 - Pricing Elements
/*==========================================*/
.pricing .pricing-table .price {
  background: <?= $bg_color ?>;
}
.pricing .pricing-table .list .def-btn {
  border: 1px solid <?= $bg_color ?>;
  border-color: <?= $bg_color ?>;
  color: <?= $bg_color ?>;
}
.pricing .pricing-table .list .def-btn:hover {
  background: <?= $bg_color ?>;
}
/*==========================================*/
/*        12 - Offer Elements
/*==========================================*/
/*==========================================*/
/*        13 - Twitter Feed Elements
/*==========================================*/
.twitter-feed .logo i {
  color: <?= $bg_color ?>;
}
.twitter-feed .time a {
  color: #888888;
}
/*==========================================*/
/*        14 - News Elements
/*==========================================*/
.news .news-content .media .quote {
  background: <?= $bg_color ?>;
}
.news .news-content .detail .title h3 {
  color: <?= $bg_color ?>;
}
/*==========================================*/
/*        15 - Clients Elements
/*==========================================*/
/*==========================================*/
/*        16 - Map Elements
/*==========================================*/
.map .map-title {
  background: <?= $bg_color ?>;
}
/*==========================================*/
/*        17 - contact Elements
/*==========================================*/
.contact .footer-form .input-container .form-control:focus {
  border: 1px solid <?= $bg_color ?>;
}
.contact .footer-form .textarea-container textarea:focus {
  border: 1px solid <?= $bg_color ?>;
}
.contact .footer-form .button-container .def-btn {
  border: 1px solid <?= $bg_color ?>;
  color: <?= $bg_color ?>;
}
.contact .footer-form .button-container .def-btn:hover {
  background: <?= $bg_color ?>;
}
/*==========================================*/
/*       18 - Footer Elements
/*==========================================*/
.footer {
  background-color: <?= $bg_color ?>;
}
.footer .right .social-icons .circle:hover .fa {
  color: <?= $bg_color ?>;
}
/*==========================================*/
/*       19 - Responsive Settings
/*==========================================*/
@media (max-width: 768px) {
  .navbar-inverse .navbar-toggle {
    border: 1px solid <?= $bg_color ?>;
    margin: 23px 10px;
  }
  .navbar-inverse .navbar-toggle span.icon-bar {
    background: <?= $bg_color ?>;
  }
  .navbar-inverse .navbar-toggle:focus,
  .navbar-inverse .navbar-toggle:hover {
    background: <?= $bg_color ?>;
  }
  .navbar-inverse .navbar-collapse ul.navbar-nav li.active {
    color: <?= $bg_color ?>;
  }
  .navbar-inverse .navbar-collapse ul.navbar-nav li a {
    color: #888888;
  }
  .navbar-inverse .navbar-collapse ul.navbar-nav li a:hover {
    background: <?= $bg_color ?>;
  }
}

</style>