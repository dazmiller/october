<?php

/* C:\lamp\www\october/themes/serviceme/partials/footer.htm */
class __TwigTemplate_1f017a10cbe763f8174f6ff8954048dfd695d333e341f98ae58baab1e21c0368 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<footer class=\"footer-style2\" style=\"border-top:solid 0px #FFFFFF\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-3 mbottom30\">
                <a href=\"index.blade.php\">
                    <img src=\"";
        // line 6
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/footer-logo.png");
        echo "\" alt=\"\" class=\"default\" width=\"146\" height=\"30\" />
                    <img src=\"";
        // line 7
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/footer-logo2.png");
        echo "\" alt=\"\" class=\"only3\" width=\"146\" height=\"30\" />
                </a>
                <p class=\"mtop30 f300\">Etiam accumsan tristique diam, nec mollis nulla. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                <div class=\"social mtop25 mbottom30 clearfix\">
                    <ul class=\"reset-list\">
                        <li class=\"ico-twitter animation\">
                            <a href=\"#\">
                                <span class=\"icon-twitter\"></span>
                            </a>
                        </li>
                        <li class=\"ico-facebook animation\">
                            <a href=\"#\">
                                <span class=\"icon-facebook\"></span>
                            </a>
                        </li>
                        <li class=\"ico-google animation\">
                            <a href=\"#\">
                                <span class=\"icon-googleplus\"></span>
                            </a>
                        </li>
                        <li class=\"ico-pinterest animation\">
                            <a href=\"#\">
                                <span class=\"icon-pinterest\"></span>
                            </a>
                        </li>
                        <li class=\"ico-dribbble animation\">
                            <a href=\"#\">
                                <span class=\"icon-dribbble\"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=\"col-sm-3 mbottom30\">
                <h3>From the Blog</h3>
                <ul class=\"footer-blog reset-list\">
                    <li>
                        <a href=\"blog-post.blade.php\">
                            <img src=\"";
        // line 45
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/footer-img.jpg");
        echo "\" alt=\"\" width=\"68\" height=\"68\"/>
                        </a>
                        <p>Donec ullamcorper nulla non ms ac is</p>
                        <p class=\"tcolor\">January 22, 2015</p>
                        <div class=\"clearfix mbottom20\"></div>
                    </li>
                    <li>
                        <a href=\"blog-post.blade.php\">
                            <img src=\"";
        // line 53
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/footer-img2.jpg");
        echo "\" alt=\"\" width=\"68\" height=\"68\"/>
                        </a>
                        <p>Donec ullamcorper nulla non ms ac is </p>
                        <p class=\"tcolor\">January 22, 2015</p>
                        <div class=\"clearfix\"></div>
                    </li>
                </ul>
            </div>
            <div class=\"col-sm-3 mbottom30\">
                <h3>Company</h3>
                <ul class=\"menu-list reset-list\">
                    <li>
                        <a href=\"#\">About Us</a>
                    </li>
                    <li>
                        <a href=\"faq.blade.php\">FAQs</a>
                    </li>
                    <li>
                        <a href=\"contact.blade.php\">Contact</a>
                    </li>
                    <li>
                        <a href=\"#\">Terms</a>
                    </li>
                    <li>
                        <a href=\"#\">Privacy</a>
                    </li>
                    <li>
                        <a href=\"testimonials.blade.php\">Testimonials</a>
                    </li>
                </ul>
            </div>
            <div class=\"col-sm-3\">
                <h3>Newsletter Singup</h3>
                <div id=\"subscribe\" class=\"footer-subscribe center mbottom10\">
                    <form action=\"http://lorthemes.us8.list-manage1.com/subscribe/post-json?u=42795504a248e486766e563b9&amp;id=f766078320&amp;c=?\" method=\"post\" id=\"mc-embedded-subscribe-form\" name=\"mc-embedded-subscribe-form\" class=\"validate\" target=\"_blank\" novalidate>
                        <input type=\"email\" value=\"\" name=\"EMAIL\" class=\"email\" id=\"mce-EMAIL\" placeholder=\"Enter your email to subscribe\" required>
                        <div style=\"position: absolute; left: -5000px;\">
                            <input type=\"text\" name=\"b_9ed253451c5b914e9c34e388b_6e3ba686ba\" value=\"\">
                        </div>
                        <button class=\"btn-sm btn-small\" type=\"submit\" name=\"subscribe\" id=\"mc-embedded-subscribe\"><span class=\"icon-envelope\"></span></button>
                    </form>
                    <div id=\"notification_container\"></div>
                </div>
                <p class=\"f300\">By subscribing to our mailing list you will always be update with the latest news from us.</p>
            </div>
        </div>
    </div>
";
        // line 100
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("bottom-footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 101
        echo "</footer><!-- end footer -->
</div>
<p id=\"back-top\">
    <a href=\"#top\"><span class=\"icon-angle-up\"></span></a>
</p>";
    }

    public function getTemplateName()
    {
        return "C:\\lamp\\www\\october/themes/serviceme/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 101,  132 => 100,  82 => 53,  71 => 45,  30 => 7,  26 => 6,  19 => 1,);
    }
}