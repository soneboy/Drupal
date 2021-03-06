<?php

/* themes/custom/fashion/header.html.twig */
class __TwigTemplate_008af38c4b3d7ff332ab7aa34c19a133ca6b4d5943519d448490f2c92234c4ee extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array("url" => 4);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array('url')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<header class=\"header\">
    <div class=\"wrap\">
        <a href=\"/\" class=\"logo\">
            <img src=\"";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>")));
        echo "themes/custom/fashion/assets/img/logo.png\" width=\"162\" alt=\"Fashion/Style\" />
        </a>
        <span class=\"filters-toggle js-toggle-filters\">Filters</span>
        <ul class=\"main-nav\">
            <li>
                <a href=\"";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>")));
        echo "products/woman\">Women</a>
                <div class=\"nav-submenu\">
                    <div class=\"wrap\">
                        <a class=\"nav-submenu-item\" href=\"";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>")));
        echo "products/woman?subcategory=tee-shirt\">
                            Tee-shirt
                        </a>
                        <a class=\"nav-submenu-item\" href=\"";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>")));
        echo "products/woman?subcategory=sweat-shirt\">
                            Sweat-shirt
                        </a>
                        <a class=\"nav-submenu-item\" href=\"";
        // line 18
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>")));
        echo "products/woman?subcategory=jogging\">
                            Jogging
                        </a>
                        <a class=\"nav-submenu-item\" href=\"";
        // line 21
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>")));
        echo "products/woman?subcategory=jacket\">
                            Jacket
                        </a>
                        <a class=\"nav-submenu-item\" href=\"";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>")));
        echo "products/woman?subcategory=accessories\">
                            Accessories
                        </a>
                    </div>
                </div>
            </li>
            <li>
                <a href=\"";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>")));
        echo "products/man\">Men</a>
            </li>
            <li>
                <a href=\"";
        // line 34
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>")));
        echo "products/kids\">Kids</a>
            </li>
        </ul>
        <div class=\"header-actions\">
            <ul>
                <li class=\"subnav-desktop\">
                    <a href=\"javascript:;\" class=\"js-subnav-toggle\">
                        ...
                    </a>
                </li>
                <li class=\"search-link\">
                    <a href=\"javascript:;\" class=\"js-search-toggle\">
                        <i class=\"icon font-ico-search\"></i>
                    </a>
                    <div class=\"header-search\">
                        <div class=\"wrap\">
                            <form action=\"\" method=\"post\">
                                <div class=\"search-form\">
                                    <input type=\"text\" name=\"search-form\" />
                                    <button class=\"btn btn-black btn-big\" type=\"submit\">Search</button>
                                </div>
                            </form>
                            <div class=\"search-suggestions block\">
                                <h6><i class=\"icon font-ico-arrow-right\"></i> Suggestions</h6>
                                <ul>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <img src=\"";
        // line 61
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>")));
        echo "themes/custom/fashion/assets/img/content/suggestion-01.jpg\" alt=\"\">
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <img src=\"";
        // line 66
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>")));
        echo "themes/custom/fashion/assets/img/content/suggestion-02.jpg\" alt=\"\">
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <img src=\"";
        // line 71
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>")));
        echo "themes/custom/fashion/assets/img/content/suggestion-03.jpg\" alt=\"\">
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <img src=\"";
        // line 76
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>")));
        echo "themes/custom/fashion/assets/img/content/suggestion-04.jpg\" alt=\"\">
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <img src=\"";
        // line 81
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>")));
        echo "themes/custom/fashion/assets/img/content/suggestion-05.jpg\" alt=\"\">
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"javascript:;\">
                                            <img src=\"";
        // line 86
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>")));
        echo "themes/custom/fashion/assets/img/content/suggestion-06.jpg\" alt=\"\">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class=\"basket-link\">
                    <a href=\"";
        // line 95
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>")));
        echo "checkout\" class=\"js-basket-subnav-toggle\">
                        <i class=\"icon font-ico-basket\"></i>
                        <span class=\"basket-items\">";
        // line 97
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["cart"]) ? $context["cart"] : null), "html", null, true));
        echo "</span>
                    </a>
                    <div class=\"basket-subnav header-subnav\">
                        <a href=\"";
        // line 100
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>")));
        echo "checkout\" class=\"logo\">
                            <img src=\"";
        // line 101
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>")));
        echo "themes/custom/fashion/assets/img/logo.png\" width=\"162\" alt=\"Fashion/Style\">
                        </a>
                        <span class=\"close-subnav js-close-subnav\"><i class=\"icon font-ico-close\"></i></span>
                    </div>
                </li>
                <li class=\"profile-link\">
                    <a href=\"javascript:;\" class=\"js-login-subnav-toggle\">
                        <i class=\"icon font-ico-profile\"></i>
                    </a>
                    <div class=\"login-subnav header-subnav\">
                        <span class=\"close-subnav js-close-subnav\"><i class=\"icon font-ico-close\"></i></span>
                        <div class=\"login-form-wrap\">
                            <h3>Log in</h3>
                            <h6>Manage your orders, newsletter are like saving shipping address...</h6>
                            <div class=\"login-form clearfix\">
                                <h6>Don't have an account?</h6>
                                <a class=\"btn btn-big create-account-btn\" href=\"javascript:;\">Create an account</a>
                                <h6>Log in</h6>
                                <div class=\"form-item form-item-full\">
                                    <input class=\"form-item-text\" type=\"text\" name=\"\" placeholder=\"E-mail address\">
                                </div>
                                <div class=\"form-item form-item-full\">
                                    <input class=\"form-item-text\" type=\"password\" name=\"\" placeholder=\"Password\">
                                </div>
                                <a class=\"forgot-password\" href=\"javascript:;\">Forgot your password?</a>
                                <a class=\"btn btn-black btn-big login-btn\" href=\"javascript:;\">Log in</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class=\"currency-language\">
                    <a href=\"javascript:;\" class=\"cl-toggle js-cl-toggle\">
                        <span class=\"c-label\">€</span><span class=\"l-label\">FR</span>
                    </a>
                    <div class=\"cl-dropdown\">
                        <div class=\"c-dropdown\">
                            <label for=\"currency\">choose currency</label>
                            <select name=\"\" id=\"currency\" class=\"c-dropdown\">
                                <option value=\"\">€ EUR</option>
                                <option value=\"\">£ Pound</option>
                            </select>
                        </div>
                        <div class=\"l-dropdown\">
                            <label for=\"language\">choose language</label>
                            <div class=\"select-list\">
                                <span class=\"selected\"><img src=\"themes/custom/fashion/assets/svg/ico-flag-uk.svg\" alt=\"English flag\">English</span>
                                <div class=\"dest-dropdown js-dest-overlay\">
                                    <ul>
                                        <li><span class=\"primary\"><img src=\"themes/custom/fashion/assets/svg/ico-flag-uk.svg\" alt=\"English flag\">English</span></li>
                                        <li><span class=\"primary\"><img src=\"themes/custom/fashion/assets/svg/ico-flag-belgium.svg\" alt=\"Belgium flag\">Belgium</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class=\"menu-toggle-wrap\">
                    <a class=\"menu-toggle js-subnav-toggle\" href=\"javascript:;\">
                        <span class=\"hamburger\"></span>
                    </a>
                    <div class=\"subnav header-subnav\">
                        <div class=\"subnav-links\">
                            <ul>
                                <li>
                                    <a href=\"javascript:;\">About us</a>
                                </li>
                                <li>
                                    <a href=\"javascript:;\">Edito</a>
                                </li>
                                <li>
                                    <a href=\"javascript:;\">Events</a>
                                </li>
                                <li>
                                    <a href=\"javascript:;\">Collabs</a>
                                </li>
                                <li>
                                    <a href=\"javascript:;\">Store</a>
                                </li>
                                <li>
                                    <a href=\"javascfript:;\">Jobs</a>
                                </li>
                                <li>
                                    <a href=\"javascfript:;\">Contact</a>
                                </li>
                                <li>
                                    <a href=\"javascfript:;\">Professionals</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "themes/custom/fashion/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 101,  195 => 100,  189 => 97,  184 => 95,  172 => 86,  164 => 81,  156 => 76,  148 => 71,  140 => 66,  132 => 61,  102 => 34,  96 => 31,  86 => 24,  80 => 21,  74 => 18,  68 => 15,  62 => 12,  56 => 9,  48 => 4,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/fashion/header.html.twig", "C:\\Users\\nebojsa\\Sites\\devdesktop\\drupal-8.5.0\\themes\\custom\\fashion\\header.html.twig");
    }
}
