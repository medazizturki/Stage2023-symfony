<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* front.html.twig */
class __TwigTemplate_3f39c4179ae0fc726abef09089ac5e4e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front.html.twig"));

        // line 1
        echo "<!doctype html>
<html class=\"no-js\" lang=\"zxx\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>Just7Fit</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- <link rel=\"manifest\" href=\"site.webmanifest\"> -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/img/favicon.png"), "html", null, true);
        echo "\">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/\"css/owl.carousel.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/\"css/magnific-popup.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/\"css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/\"css/themify-icons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/\"css/gijgo.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/\"css/nice-select.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/\"css/flaticon.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/\"css/slicknav.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/\"css/style.css"), "html", null, true);
        echo "\">
    <!-- <link rel=\"stylesheet\" href=\"css/responsive.css\"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"https://browsehappy.com/\">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class=\"header-area \">
            <div id=\"sticky-header\" class=\"main-header-area\">
                <div class=\"container-fluid \">
                    <div class=\"header_bottom_border\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-xl-3 col-lg-2\">
                                <div class=\"logo\">
                                    <a href=\"index.html\">
                                        <img src=\"img/logo.png\" alt=\"\">
                                    </a>
                                </div>
                            </div>
                            <div class=\"col-xl-6 col-lg-7\">
                                <div class=\"main-menu  d-none d-lg-block\">
                                    <nav>
                                        <ul id=\"navigation\">
                                            <li><a href=\"index.html\">home</a></li>
                                            <li><a href=\"about.html\">about</a></li>
                                            <li><a href=\"pricing.html\">pricing</a></li>
                                            <li><a href=\"gallery.html\">gallery</a></li>
                                            <li><a href=\"#\">pages <i class=\"ti-angle-down\"></i></a>
                                                <ul class=\"submenu\">
                                                    
                                                    <li><a href=\"elements.html\">elements</a></li>
                                                </ul>
                                            </li>
                                            <li><a href=\"#\">blog <i class=\"ti-angle-down\"></i></a>
                                                <ul class=\"submenu\">
                                                    <li><a href=\"blog.html\">blog</a></li>
                                                    <li><a href=\"single-blog.html\">single-blog</a></li>
                                                </ul>
                                            </li>
                                            <li><a href=\"contact.html\">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class=\"col-xl-3 col-lg-3 d-none d-lg-block\">
                                <div class=\"Appointment\">
                                    <div class=\"book_btn d-none d-lg-block\">
                                        <a href=\"#\">Join Us</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-12\">
                                <div class=\"mobile_menu d-block d-lg-none\"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class=\"slider_area\">
        <div class=\"slider_active owl-carousel\">
            <div class=\"single_slider  d-flex align-items-center slider_bg_1 overlay\">
                <div class=\"container\">
                    <div class=\"row align-items-center justify-content-center\">
                        <div class=\"col-xl-12\">
                            <div class=\"slider_text text-center\">
                                <span>Build Up Your</span>
                                <h3>Body Shape</h3>
                                <p>Build Your Body and Fitness with Professional Touch</p>
                                <a href=\"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" >Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"single_slider  d-flex align-items-center slider_bg_2 overlay\">
                <div class=\"container\">
                    <div class=\"row align-items-center justify-content-center\">
                        <div class=\"col-xl-12\">
                            <div class=\"slider_text text-center\">
                                <span>Build Up Your</span>
                                <h3>Strength</h3>
                                <p>Build Your Body and Fitness with Professional Touch</p>
                                <a href=\"#\" class=\"boxed-btn3\">Join Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"single_slider  d-flex align-items-center slider_bg_1 overlay\">
                <div class=\"container\">
                    <div class=\"row align-items-center justify-content-center\">
                        <div class=\"col-xl-12\">
                            <div class=\"slider_text text-center\">
                                <span>Build Up Your</span>
                                <h3>Body Shape</h3>
                                <p>Build Your Body and Fitness with Professional Touch</p>
                                <a href=\"#\" class=\"boxed-btn3\">Join Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"single_slider  d-flex align-items-center slider_bg_2 overlay\">
                <div class=\"container\">
                    <div class=\"row align-items-center justify-content-center\">
                        <div class=\"col-xl-12\">
                            <div class=\"slider_text text-center\">
                                <span>Build Up Your</span>
                                <h3>Strength</h3>
                                <p>Build Your Body and Fitness with Professional Touch</p>
                                <a href=\"#\" class=\"boxed-btn3\">Join Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- catagory_area  -->
    <div class=\"catagory_area\">
        <div class=\"container-fluid p-0\">
            <div class=\"row no-gutters\">
                <div class=\"col-lg-6 col-md-6\">
                    <div class=\"single_catagory text-center overlay2 cat_bg_1\">
                        <h3>For Girl</h3>
                        <p>There are many variations of passages of lorem <br> Ipsum available, but the majority have suffered <br> alteration.</p>
                        <a href=\"#\" class=\"boxed-btn3\">Join Now</a>
                    </div>
                </div>
                <div class=\"col-lg-6 col-md-6\">
                    <div class=\"single_catagory text-center overlay2 cat_bg_2\">
                        <h3>For Boys</h3>
                        <p>There are many variations of passages of lorem <br> Ipsum available, but the majority have suffered <br> alteration.</p>
                        <a href=\"#\" class=\"boxed-btn3\">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ catagory_area  -->

    <!-- features_area_start  -->
    <div class=\"features_area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-12\">
                    <div class=\"section_title text-center mb-73\">
                        <h3>Our Features</h3>
                        <p>There are many variations of passages of lorem Ipsum available, but the majority <br> have suffered alteration.</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"single_feature text-center mb-73\">
                        <div class=\"icon\">
                            <img src=\"img/svg_icon/1.svg\" alt=\"\">
                        </div>
                        <h4>Weightlifting</h4>
                        <p>There are many variations of passages of lorem Ipsum available.</p>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"single_feature text-center\">
                        <div class=\"icon\">
                            <img src=\"img/svg_icon/2.svg\" alt=\"\">
                        </div>
                        <h4>Specific Muscles</h4>
                        <p>There are many variations of passages of lorem Ipsum available.</p>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"single_feature text-center\">
                        <div class=\"icon\">
                            <img src=\"img/svg_icon/3.svg\" alt=\"\">
                        </div>
                        <h4>Flex Your Muscles</h4>
                        <p>There are many variations of passages of lorem Ipsum available.</p>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"single_feature text-center\">
                        <div class=\"icon\">
                            <img src=\"img/svg_icon/4.svg\" alt=\"\">
                        </div>
                        <h4>Cardio Exercises</h4>
                        <p>There are many variations of passages of lorem Ipsum available.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- features_area_end  -->

    <div class=\"offer_area offer_bg\">
        <div class=\"container\">
            <div class=\"row justify-content-end\">
                <div class=\"col-lg-6\">
                    <div class=\"offer_text\">
                        <h4>A Big Offer for <br>
                                This Summer</h4>
                        <h3>50% Off</h3>
                        <p>There are many variations of passages of lorem Ipsum available, but the majority have suffered alteration.</p>
                        <a href=\"#\" class=\"boxed-btn3\">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class=\"priscing_area\">
            <div class=\"container\">
                    <div class=\"row\">
                            <div class=\"col-xl-12\">
                                <div class=\"section_title text-center mb-73\">
                                    <h3>Our Pricing</h3>
                                    <p>There are many variations of passages of lorem Ipsum available, but the majority <br> have suffered alteration.</p>
                                </div>
                            </div>
                        </div>
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single_prising text-center\">
                            <div class=\"prising_header\">
                                    <h3>Beginner</h3>
                                    <span>\$45/m</span>
                            </div>
                            <div class=\"pricing_body\">
                                <ul>
                                    <li>24h unlimited access</li>
                                    <li>Trainer Advice</li>
                                    <li class=\"off-color\">Locker + Bathroom</li>
                                    <li class=\"off-color\">Personal trainer</li>
                                </ul>
                            </div>
                            <div class=\"pricing_btn\">
                                    <a href=\"#\" class=\"boxed-btn3\">Join Now</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single_prising text-center\">
                            <div class=\"prising_header\">
                                    <h3>Expert</h3>
                                    <span>\$45/m</span>
                            </div>
                            <div class=\"pricing_body\">
                                <ul>
                                    <li>24h unlimited access</li>
                                    <li>Trainer Advice</li>
                                    <li class=\"off-color\">Locker + Bathroom</li>
                                    <li class=\"off-color\">Personal trainer</li>
                                </ul>
                            </div>
                            <div class=\"pricing_btn\">
                                    <a href=\"#\" class=\"boxed-btn3\">Join Now</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single_prising text-center\">
                            <div class=\"prising_header\">
                                    <h3>Pro</h3>
                                    <span>\$45/m</span>
                            </div>
                            <div class=\"pricing_body\">
                                <ul>
                                    <li>24h unlimited access</li>
                                    <li>Trainer Advice</li>
                                    <li class=\"off-color\">Locker + Bathroom</li>
                                    <li class=\"off-color\">Personal trainer</li>
                                </ul>
                            </div>
                            <div class=\"pricing_btn\">
                                    <a href=\"#\" class=\"boxed-btn3\">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    <!-- gallery_start -->
    <div class=\"gallery_area\">
        <div class=\"single_gallery big_img\">
            <div class=\"hover_pop\">
                    <a class=\"popup-image\" href=\"img/gallery/1.png\">
                        <i class=\"ti-plus\"></i>
                    </a>
            </div>
            <img src=\"img/gallery/1.png\" alt=\"\">
        </div>
        <div class=\"single_gallery big_img\">
                <div class=\"hover_pop\">
                        <a class=\"popup-image\" href=\"img/gallery/2.png\">
                            <i class=\"ti-plus\"></i>
                        </a>
                </div>
            <img src=\"img/gallery/2.png\" alt=\"\">
        </div>
        <div class=\"single_gallery small_img\">
                <div class=\"hover_pop\">
                        <a class=\"popup-image\" href=\"img/gallery/3.png\">
                            <i class=\"ti-plus\"></i>
                        </a>
                </div>
            <img src=\"img/gallery/3.png\" alt=\"\">
        </div>
        <div class=\"single_gallery small_img\">
                <div class=\"hover_pop\">
                        <a class=\"popup-image\" href=\"img/gallery/4.png\">
                            <i class=\"ti-plus\"></i>
                        </a>
                </div>
                <img src=\"img/gallery/4.png\" alt=\"\">
            </div>
        <div class=\"single_gallery big_img\">
                <div class=\"hover_pop\">
                        <a class=\"popup-image\" href=\"img/gallery/5.png\">
                            <i class=\"ti-plus\"></i>
                        </a>
                </div>
            <img src=\"img/gallery/5.png\" alt=\"\">
        </div>
        <div class=\"single_gallery big_img\">
                <div class=\"hover_pop\">
                        <a class=\"popup-image\" href=\"img/gallery/6.png\">
                            <i class=\"ti-plus\"></i>
                        </a>
                </div>
            <img src=\"img/gallery/6.png\" alt=\"\">
        </div>

    </div>
    <!-- gallery_area_end  -->
    <a href=\"#\" class=\"view_pore boxed-btn3\">View More</a>
    <!-- team_area_start  -->
    <div class=\"team_area team_bg_1 overlay2\">
            <div class=\"container\">
                    <div class=\"row\">
                            <div class=\"col-xl-12\">
                                <div class=\"section_title text-center mb-73\">
                                    <h3>Our Trainers</h3>
                                    <p>There are many variations of passages of lorem Ipsum available, but the majority <br> have suffered alteration.</p>
                                </div>
                            </div>
                        </div>
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single_team\">
                            <div class=\"team_thumb\">
                                <img src=\"img/team/1.png\" alt=\"\">
                                <div class=\"team_hover\">
                                    <div class=\"hover_inner text-center\">
                                        <ul>
                                            <li><a href=\"#\"> <i class=\"fa fa-facebook\"></i> </a></li>
                                            <li><a href=\"#\"> <i class=\"fa fa-twitter\"></i> </a></li>
                                            <li><a href=\"#\"> <i class=\"fa fa-instagram\"></i> </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"team_title text-center\">
                                <h3>Jessica Mino</h3>
                                <p>Woman Trainer</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single_team\">
                            <div class=\"team_thumb\">
                                <img src=\"img/team/2.png\" alt=\"\">
                                <div class=\"team_hover\">
                                    <div class=\"hover_inner text-center\">
                                        <ul>
                                            <li><a href=\"#\"> <i class=\"fa fa-facebook\"></i> </a></li>
                                            <li><a href=\"#\"> <i class=\"fa fa-twitter\"></i> </a></li>
                                            <li><a href=\"#\"> <i class=\"fa fa-instagram\"></i> </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"team_title text-center\">
                                <h3>Amit Khan</h3>
                                <p>Men Trainer</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single_team\">
                            <div class=\"team_thumb\">
                                <img src=\"img/team/3.png\" alt=\"\">
                                <div class=\"team_hover\">
                                    <div class=\"hover_inner text-center\">
                                        <ul>
                                            <li><a href=\"#\"> <i class=\"fa fa-facebook\"></i> </a></li>
                                            <li><a href=\"#\"> <i class=\"fa fa-twitter\"></i> </a></li>
                                            <li><a href=\"#\"> <i class=\"fa fa-instagram\"></i> </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"team_title text-center\">
                                <h3>Paulo Rolac</h3>
                                <p>Men Trainer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- team_area_end  -->
    
    <!-- big_offer_area start  -->
    <div class=\"big_offer_area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-12\">
                    <div class=\"offter_text text-center\">
                        <h3>A Big Offer for <br>
                                This Summer</h3>
                        <a href=\"#\" class=\"boxed-btn3\">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- big_offer_area end  -->




    <!-- footer_start  -->
    <footer class=\"footer\">
        <div class=\"footer_top\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-3 col-md-6 col-lg-3 \">
                        <div class=\"footer_widget\">
                            <div class=\"footer_logo\">
                                <a href=\"#\">
                                    <img src=\"img/footer_logo.png\" alt=\"\">
                                </a>
                            </div>
                            <p>5th flora, 700/D kings road, green <br> lane New York-1782 <br>
                                <a href=\"#\">+10 367 826 2567</a> <br>
                                <a href=\"#\">contact@carpenter.com</a>
                            </p>
                            <p>



                            </p>
                            <div class=\"socail_links\">
                                <ul>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"ti-facebook\"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"ti-twitter-alt\"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-instagram\"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-pinterest\"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-youtube-play\"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class=\"col-xl-4 col-md-6 col-lg-4 offset-xl-1\">
                        <div class=\"footer_widget\">
                            <h3 class=\"footer_title\">
                                Useful Links
                            </h3>
                            <ul class=\"links\">
                                <li><a href=\"#\">Pricing</a></li>
                                <li><a href=\"#\">About</a></li>
                                <li><a href=\"#\"> Gallery</a></li>
                                <li><a href=\"#\"> Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-md-6 col-lg-4\">
                        <div class=\"footer_widget\">
                            <h3 class=\"footer_title\">
                                Subscribe
                            </h3>
                            <form action=\"#\" class=\"newsletter_form\">
                                <input type=\"text\" placeholder=\"Enter your mail\">
                                <button type=\"submit\">Subscribe</button>
                            </form>
                            <p class=\"newsletter_text\">Esteem spirit temper too say adieus who direct esteem esteems
                                luckily.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"copy-right_text\">
            <div class=\"container\">
                <div class=\"footer_border\"></div>
                <div class=\"row\">
                    <div class=\"col-xl-12\">
                        <p class=\"copy_right text-center\">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_end  -->

    <!-- JS here -->
    <script src=\"";
        // line 574
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/js/vendor/modernizr-3.5.0.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 575
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/js/vendor/jquery-1.12.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 576
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/js/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 577
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 578
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 579
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/js/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 580
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/js/ajax-form.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 581
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/js/waypoints.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 582
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/js/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 583
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/js/imagesloaded.pkgd.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 584
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/js/scrollIt.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 585
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/js/jquery.scrollUp.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 586
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/js/wow.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 587
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/js/gijgo.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 588
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/js/nice-select.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 589
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/js/jquery.slicknav.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 590
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 591
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/js/plugins.js"), "html", null, true);
        echo "\"></script>



    <!--contact js-->
    <script src=\"";
        // line 596
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/js/contact.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 597
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 598
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/js/jquery.form.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 599
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 600
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/js/mail-script.js"), "html", null, true);
        echo "\"></script>


    <script src=\"";
        // line 603
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assettF/js/main.js"), "html", null, true);
        echo "\"></script>

</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  752 => 603,  746 => 600,  742 => 599,  738 => 598,  734 => 597,  730 => 596,  722 => 591,  718 => 590,  714 => 589,  710 => 588,  706 => 587,  702 => 586,  698 => 585,  694 => 584,  690 => 583,  686 => 582,  682 => 581,  678 => 580,  674 => 579,  670 => 578,  666 => 577,  662 => 576,  658 => 575,  654 => 574,  181 => 104,  100 => 26,  95 => 24,  91 => 23,  87 => 22,  83 => 21,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  63 => 16,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html class=\"no-js\" lang=\"zxx\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>Just7Fit</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- <link rel=\"manifest\" href=\"site.webmanifest\"> -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{asset('assettF/img/favicon.png')}}\">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel=\"stylesheet\" href=\"{{asset('assettF/css/bootstrap.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assettF/\"css/owl.carousel.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assettF/\"css/magnific-popup.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assettF/\"css/font-awesome.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assettF/\"css/themify-icons.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assettF/\"css/gijgo.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assettF/\"css/nice-select.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assettF/\"css/flaticon.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('assettF/\"css/slicknav.css')}}\">

    <link rel=\"stylesheet\" href=\"{{asset('assettF/\"css/style.css')}}\">
    <!-- <link rel=\"stylesheet\" href=\"css/responsive.css\"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"https://browsehappy.com/\">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class=\"header-area \">
            <div id=\"sticky-header\" class=\"main-header-area\">
                <div class=\"container-fluid \">
                    <div class=\"header_bottom_border\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-xl-3 col-lg-2\">
                                <div class=\"logo\">
                                    <a href=\"index.html\">
                                        <img src=\"img/logo.png\" alt=\"\">
                                    </a>
                                </div>
                            </div>
                            <div class=\"col-xl-6 col-lg-7\">
                                <div class=\"main-menu  d-none d-lg-block\">
                                    <nav>
                                        <ul id=\"navigation\">
                                            <li><a href=\"index.html\">home</a></li>
                                            <li><a href=\"about.html\">about</a></li>
                                            <li><a href=\"pricing.html\">pricing</a></li>
                                            <li><a href=\"gallery.html\">gallery</a></li>
                                            <li><a href=\"#\">pages <i class=\"ti-angle-down\"></i></a>
                                                <ul class=\"submenu\">
                                                    
                                                    <li><a href=\"elements.html\">elements</a></li>
                                                </ul>
                                            </li>
                                            <li><a href=\"#\">blog <i class=\"ti-angle-down\"></i></a>
                                                <ul class=\"submenu\">
                                                    <li><a href=\"blog.html\">blog</a></li>
                                                    <li><a href=\"single-blog.html\">single-blog</a></li>
                                                </ul>
                                            </li>
                                            <li><a href=\"contact.html\">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class=\"col-xl-3 col-lg-3 d-none d-lg-block\">
                                <div class=\"Appointment\">
                                    <div class=\"book_btn d-none d-lg-block\">
                                        <a href=\"#\">Join Us</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-12\">
                                <div class=\"mobile_menu d-block d-lg-none\"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class=\"slider_area\">
        <div class=\"slider_active owl-carousel\">
            <div class=\"single_slider  d-flex align-items-center slider_bg_1 overlay\">
                <div class=\"container\">
                    <div class=\"row align-items-center justify-content-center\">
                        <div class=\"col-xl-12\">
                            <div class=\"slider_text text-center\">
                                <span>Build Up Your</span>
                                <h3>Body Shape</h3>
                                <p>Build Your Body and Fitness with Professional Touch</p>
                                <a href=\"{{ path('app_register') }}\" >Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"single_slider  d-flex align-items-center slider_bg_2 overlay\">
                <div class=\"container\">
                    <div class=\"row align-items-center justify-content-center\">
                        <div class=\"col-xl-12\">
                            <div class=\"slider_text text-center\">
                                <span>Build Up Your</span>
                                <h3>Strength</h3>
                                <p>Build Your Body and Fitness with Professional Touch</p>
                                <a href=\"#\" class=\"boxed-btn3\">Join Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"single_slider  d-flex align-items-center slider_bg_1 overlay\">
                <div class=\"container\">
                    <div class=\"row align-items-center justify-content-center\">
                        <div class=\"col-xl-12\">
                            <div class=\"slider_text text-center\">
                                <span>Build Up Your</span>
                                <h3>Body Shape</h3>
                                <p>Build Your Body and Fitness with Professional Touch</p>
                                <a href=\"#\" class=\"boxed-btn3\">Join Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"single_slider  d-flex align-items-center slider_bg_2 overlay\">
                <div class=\"container\">
                    <div class=\"row align-items-center justify-content-center\">
                        <div class=\"col-xl-12\">
                            <div class=\"slider_text text-center\">
                                <span>Build Up Your</span>
                                <h3>Strength</h3>
                                <p>Build Your Body and Fitness with Professional Touch</p>
                                <a href=\"#\" class=\"boxed-btn3\">Join Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- catagory_area  -->
    <div class=\"catagory_area\">
        <div class=\"container-fluid p-0\">
            <div class=\"row no-gutters\">
                <div class=\"col-lg-6 col-md-6\">
                    <div class=\"single_catagory text-center overlay2 cat_bg_1\">
                        <h3>For Girl</h3>
                        <p>There are many variations of passages of lorem <br> Ipsum available, but the majority have suffered <br> alteration.</p>
                        <a href=\"#\" class=\"boxed-btn3\">Join Now</a>
                    </div>
                </div>
                <div class=\"col-lg-6 col-md-6\">
                    <div class=\"single_catagory text-center overlay2 cat_bg_2\">
                        <h3>For Boys</h3>
                        <p>There are many variations of passages of lorem <br> Ipsum available, but the majority have suffered <br> alteration.</p>
                        <a href=\"#\" class=\"boxed-btn3\">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ catagory_area  -->

    <!-- features_area_start  -->
    <div class=\"features_area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-12\">
                    <div class=\"section_title text-center mb-73\">
                        <h3>Our Features</h3>
                        <p>There are many variations of passages of lorem Ipsum available, but the majority <br> have suffered alteration.</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"single_feature text-center mb-73\">
                        <div class=\"icon\">
                            <img src=\"img/svg_icon/1.svg\" alt=\"\">
                        </div>
                        <h4>Weightlifting</h4>
                        <p>There are many variations of passages of lorem Ipsum available.</p>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"single_feature text-center\">
                        <div class=\"icon\">
                            <img src=\"img/svg_icon/2.svg\" alt=\"\">
                        </div>
                        <h4>Specific Muscles</h4>
                        <p>There are many variations of passages of lorem Ipsum available.</p>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"single_feature text-center\">
                        <div class=\"icon\">
                            <img src=\"img/svg_icon/3.svg\" alt=\"\">
                        </div>
                        <h4>Flex Your Muscles</h4>
                        <p>There are many variations of passages of lorem Ipsum available.</p>
                    </div>
                </div>
                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"single_feature text-center\">
                        <div class=\"icon\">
                            <img src=\"img/svg_icon/4.svg\" alt=\"\">
                        </div>
                        <h4>Cardio Exercises</h4>
                        <p>There are many variations of passages of lorem Ipsum available.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- features_area_end  -->

    <div class=\"offer_area offer_bg\">
        <div class=\"container\">
            <div class=\"row justify-content-end\">
                <div class=\"col-lg-6\">
                    <div class=\"offer_text\">
                        <h4>A Big Offer for <br>
                                This Summer</h4>
                        <h3>50% Off</h3>
                        <p>There are many variations of passages of lorem Ipsum available, but the majority have suffered alteration.</p>
                        <a href=\"#\" class=\"boxed-btn3\">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class=\"priscing_area\">
            <div class=\"container\">
                    <div class=\"row\">
                            <div class=\"col-xl-12\">
                                <div class=\"section_title text-center mb-73\">
                                    <h3>Our Pricing</h3>
                                    <p>There are many variations of passages of lorem Ipsum available, but the majority <br> have suffered alteration.</p>
                                </div>
                            </div>
                        </div>
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single_prising text-center\">
                            <div class=\"prising_header\">
                                    <h3>Beginner</h3>
                                    <span>\$45/m</span>
                            </div>
                            <div class=\"pricing_body\">
                                <ul>
                                    <li>24h unlimited access</li>
                                    <li>Trainer Advice</li>
                                    <li class=\"off-color\">Locker + Bathroom</li>
                                    <li class=\"off-color\">Personal trainer</li>
                                </ul>
                            </div>
                            <div class=\"pricing_btn\">
                                    <a href=\"#\" class=\"boxed-btn3\">Join Now</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single_prising text-center\">
                            <div class=\"prising_header\">
                                    <h3>Expert</h3>
                                    <span>\$45/m</span>
                            </div>
                            <div class=\"pricing_body\">
                                <ul>
                                    <li>24h unlimited access</li>
                                    <li>Trainer Advice</li>
                                    <li class=\"off-color\">Locker + Bathroom</li>
                                    <li class=\"off-color\">Personal trainer</li>
                                </ul>
                            </div>
                            <div class=\"pricing_btn\">
                                    <a href=\"#\" class=\"boxed-btn3\">Join Now</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single_prising text-center\">
                            <div class=\"prising_header\">
                                    <h3>Pro</h3>
                                    <span>\$45/m</span>
                            </div>
                            <div class=\"pricing_body\">
                                <ul>
                                    <li>24h unlimited access</li>
                                    <li>Trainer Advice</li>
                                    <li class=\"off-color\">Locker + Bathroom</li>
                                    <li class=\"off-color\">Personal trainer</li>
                                </ul>
                            </div>
                            <div class=\"pricing_btn\">
                                    <a href=\"#\" class=\"boxed-btn3\">Join Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    <!-- gallery_start -->
    <div class=\"gallery_area\">
        <div class=\"single_gallery big_img\">
            <div class=\"hover_pop\">
                    <a class=\"popup-image\" href=\"img/gallery/1.png\">
                        <i class=\"ti-plus\"></i>
                    </a>
            </div>
            <img src=\"img/gallery/1.png\" alt=\"\">
        </div>
        <div class=\"single_gallery big_img\">
                <div class=\"hover_pop\">
                        <a class=\"popup-image\" href=\"img/gallery/2.png\">
                            <i class=\"ti-plus\"></i>
                        </a>
                </div>
            <img src=\"img/gallery/2.png\" alt=\"\">
        </div>
        <div class=\"single_gallery small_img\">
                <div class=\"hover_pop\">
                        <a class=\"popup-image\" href=\"img/gallery/3.png\">
                            <i class=\"ti-plus\"></i>
                        </a>
                </div>
            <img src=\"img/gallery/3.png\" alt=\"\">
        </div>
        <div class=\"single_gallery small_img\">
                <div class=\"hover_pop\">
                        <a class=\"popup-image\" href=\"img/gallery/4.png\">
                            <i class=\"ti-plus\"></i>
                        </a>
                </div>
                <img src=\"img/gallery/4.png\" alt=\"\">
            </div>
        <div class=\"single_gallery big_img\">
                <div class=\"hover_pop\">
                        <a class=\"popup-image\" href=\"img/gallery/5.png\">
                            <i class=\"ti-plus\"></i>
                        </a>
                </div>
            <img src=\"img/gallery/5.png\" alt=\"\">
        </div>
        <div class=\"single_gallery big_img\">
                <div class=\"hover_pop\">
                        <a class=\"popup-image\" href=\"img/gallery/6.png\">
                            <i class=\"ti-plus\"></i>
                        </a>
                </div>
            <img src=\"img/gallery/6.png\" alt=\"\">
        </div>

    </div>
    <!-- gallery_area_end  -->
    <a href=\"#\" class=\"view_pore boxed-btn3\">View More</a>
    <!-- team_area_start  -->
    <div class=\"team_area team_bg_1 overlay2\">
            <div class=\"container\">
                    <div class=\"row\">
                            <div class=\"col-xl-12\">
                                <div class=\"section_title text-center mb-73\">
                                    <h3>Our Trainers</h3>
                                    <p>There are many variations of passages of lorem Ipsum available, but the majority <br> have suffered alteration.</p>
                                </div>
                            </div>
                        </div>
                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single_team\">
                            <div class=\"team_thumb\">
                                <img src=\"img/team/1.png\" alt=\"\">
                                <div class=\"team_hover\">
                                    <div class=\"hover_inner text-center\">
                                        <ul>
                                            <li><a href=\"#\"> <i class=\"fa fa-facebook\"></i> </a></li>
                                            <li><a href=\"#\"> <i class=\"fa fa-twitter\"></i> </a></li>
                                            <li><a href=\"#\"> <i class=\"fa fa-instagram\"></i> </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"team_title text-center\">
                                <h3>Jessica Mino</h3>
                                <p>Woman Trainer</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single_team\">
                            <div class=\"team_thumb\">
                                <img src=\"img/team/2.png\" alt=\"\">
                                <div class=\"team_hover\">
                                    <div class=\"hover_inner text-center\">
                                        <ul>
                                            <li><a href=\"#\"> <i class=\"fa fa-facebook\"></i> </a></li>
                                            <li><a href=\"#\"> <i class=\"fa fa-twitter\"></i> </a></li>
                                            <li><a href=\"#\"> <i class=\"fa fa-instagram\"></i> </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"team_title text-center\">
                                <h3>Amit Khan</h3>
                                <p>Men Trainer</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single_team\">
                            <div class=\"team_thumb\">
                                <img src=\"img/team/3.png\" alt=\"\">
                                <div class=\"team_hover\">
                                    <div class=\"hover_inner text-center\">
                                        <ul>
                                            <li><a href=\"#\"> <i class=\"fa fa-facebook\"></i> </a></li>
                                            <li><a href=\"#\"> <i class=\"fa fa-twitter\"></i> </a></li>
                                            <li><a href=\"#\"> <i class=\"fa fa-instagram\"></i> </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=\"team_title text-center\">
                                <h3>Paulo Rolac</h3>
                                <p>Men Trainer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- team_area_end  -->
    
    <!-- big_offer_area start  -->
    <div class=\"big_offer_area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-12\">
                    <div class=\"offter_text text-center\">
                        <h3>A Big Offer for <br>
                                This Summer</h3>
                        <a href=\"#\" class=\"boxed-btn3\">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- big_offer_area end  -->




    <!-- footer_start  -->
    <footer class=\"footer\">
        <div class=\"footer_top\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-3 col-md-6 col-lg-3 \">
                        <div class=\"footer_widget\">
                            <div class=\"footer_logo\">
                                <a href=\"#\">
                                    <img src=\"img/footer_logo.png\" alt=\"\">
                                </a>
                            </div>
                            <p>5th flora, 700/D kings road, green <br> lane New York-1782 <br>
                                <a href=\"#\">+10 367 826 2567</a> <br>
                                <a href=\"#\">contact@carpenter.com</a>
                            </p>
                            <p>



                            </p>
                            <div class=\"socail_links\">
                                <ul>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"ti-facebook\"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"ti-twitter-alt\"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-instagram\"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-pinterest\"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-youtube-play\"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class=\"col-xl-4 col-md-6 col-lg-4 offset-xl-1\">
                        <div class=\"footer_widget\">
                            <h3 class=\"footer_title\">
                                Useful Links
                            </h3>
                            <ul class=\"links\">
                                <li><a href=\"#\">Pricing</a></li>
                                <li><a href=\"#\">About</a></li>
                                <li><a href=\"#\"> Gallery</a></li>
                                <li><a href=\"#\"> Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-xl-4 col-md-6 col-lg-4\">
                        <div class=\"footer_widget\">
                            <h3 class=\"footer_title\">
                                Subscribe
                            </h3>
                            <form action=\"#\" class=\"newsletter_form\">
                                <input type=\"text\" placeholder=\"Enter your mail\">
                                <button type=\"submit\">Subscribe</button>
                            </form>
                            <p class=\"newsletter_text\">Esteem spirit temper too say adieus who direct esteem esteems
                                luckily.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"copy-right_text\">
            <div class=\"container\">
                <div class=\"footer_border\"></div>
                <div class=\"row\">
                    <div class=\"col-xl-12\">
                        <p class=\"copy_right text-center\">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_end  -->

    <!-- JS here -->
    <script src=\"{{asset('assettF/js/vendor/modernizr-3.5.0.min.js')}}\"></script>
    <script src=\"{{asset('assettF/js/vendor/jquery-1.12.4.min.js')}}\"></script>
    <script src=\"{{asset('assettF/js/popper.min.js')}}\"></script>
    <script src=\"{{asset('assettF/js/bootstrap.min.js')}}\"></script>
    <script src=\"{{asset('assettF/js/owl.carousel.min.js')}}\"></script>
    <script src=\"{{asset('assettF/js/isotope.pkgd.min.js')}}\"></script>
    <script src=\"{{asset('assettF/js/ajax-form.js')}}\"></script>
    <script src=\"{{asset('assettF/js/waypoints.min.js')}}\"></script>
    <script src=\"{{asset('assettF/js/jquery.counterup.min.js')}}\"></script>
    <script src=\"{{asset('assettF/js/imagesloaded.pkgd.min.js')}}\"></script>
    <script src=\"{{asset('assettF/js/scrollIt.js')}}\"></script>
    <script src=\"{{asset('assettF/js/jquery.scrollUp.min.js')}}\"></script>
    <script src=\"{{asset('assettF/js/wow.min.js')}}\"></script>
    <script src=\"{{asset('assettF/js/gijgo.min.js')}}\"></script>
    <script src=\"{{asset('assettF/js/nice-select.min.js')}}\"></script>
    <script src=\"{{asset('assettF/js/jquery.slicknav.min.js')}}\"></script>
    <script src=\"{{asset('assettF/js/jquery.magnific-popup.min.js')}}\"></script>
    <script src=\"{{asset('assettF/js/plugins.js')}}\"></script>



    <!--contact js-->
    <script src=\"{{asset('assettF/js/contact.js')}}\"></script>
    <script src=\"{{asset('assettF/js/jquery.ajaxchimp.min.js')}}\"></script>
    <script src=\"{{asset('assettF/js/jquery.form.js')}}\"></script>
    <script src=\"{{asset('assettF/js/jquery.validate.min.js')}}\"></script>
    <script src=\"{{asset('assettF/js/mail-script.js')}}\"></script>


    <script src=\"{{asset('assettF/js/main.js')}}\"></script>

</body>

</html>", "front.html.twig", "C:\\Users\\octanet\\Desktop\\just7fit\\templates\\front.html.twig");
    }
}
