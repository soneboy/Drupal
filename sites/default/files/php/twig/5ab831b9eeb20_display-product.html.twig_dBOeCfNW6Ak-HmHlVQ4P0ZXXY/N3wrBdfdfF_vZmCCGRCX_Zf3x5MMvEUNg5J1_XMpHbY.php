<?php

/* themes/custom/fashion/templates/display-product.html.twig */
class __TwigTemplate_0861900e4a306b9823e1d9cb2fa2213d310aee524526be15573ff9eb5f5c4010 extends Twig_Template
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
        $tags = array("include" => 1);
        $filters = array();
        $functions = array("attach_library" => 242);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('include'),
                array(),
                array('attach_library')
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
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/header.html.twig"), "themes/custom/fashion/templates/display-product.html.twig", 1)->display($context);
        // line 2
        echo "<div class=\"content block\">
    <div class=\"block breadcrumbs mob-only\">
        <h1>Women</h1>
        <div class=\"category-overlay\">
            <ul class=\"category\">
                <li>
                    <a href=\"javascript:;\" class=\"active\">woman</a>
                </li>
                <li>
                    <a href=\"javascript:;\">man</a>
                </li>
                <li>
                    <a href=\"javascript:;\">kids</a>
                </li>
                <li class=\"btn-close js-close-category\">
                    <a href=\"javascript:;\">
                        <i class=\"icon font-ico-close\"></i>
                    </a>
                </li>
            </ul>
            <ul class=\"sub-category\">
                <li class=\"selected\">
                    <a href=\"javascript:;\">Sweat-shirt</a>
                </li>
                <li>
                    <span>Lorem ipsum</span>
                </li>
                <a href=\"javascript:;\" class=\"category-toggle js-category-toggle\"></a>
            </ul>
        </div>
        <div class=\"filter-sort\">
            <i class=\"icon font-ico-sort\"></i>
            <select name=\"\" id=\"\">
                <option value=\"\">Sort by Suggestions</option>
                <option value=\"\">lorem</option>
                <option value=\"\">ipsum</option>
                <option value=\"\">dolor</option>
            </select>
        </div>
    </div>

    <div class=\"block product-page-shop\">
        <a class=\"back-link\" href=\"product-overvirew.html\"><i class=\"icon font-ico-arrow-left\"></i> Back to products</a>
        <div class=\"product-image\">
            <div class=\"img-wrap\">
                <img class=\"full-width\" src=\"../";
        // line 47
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/assets/img/content/";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "getImg", array()), "html", null, true));
        echo "\" alt=\"\">
\t\t\t\t\t\t<span class=\"img-ratio\">
\t\t\t\t\t\t\t<span>image size <span>690x862</span></span>
\t\t\t\t\t\t\t<span>Ratio <span>800x1000</span></span>
\t\t\t\t\t\t</span>
            </div>
        </div>
        <div class=\"product-details\">
            <div class=\"block\">
                <h1 class=\"product-name\">";
        // line 56
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "getName", array()), "html", null, true));
        echo "</h1>
                <span class=\"product-price\">";
        // line 57
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "getPrice", array()), "html", null, true));
        echo "</sup></span>
                <div class=\"product-description\">
                    <div class=\"tabbed\">
                        <ul class=\"tabs clearfix\">
                            <li class=\"active\">
                                <span class=\"tab-head\">Description</span>
                            </li>
                            <li>
                                <span class=\"tab-head\">Composition</span>
                            </li>
                        </ul>
                        <div class=\"tab-content\">
                            <div class=\"tab active\">
                                <p> ";
        // line 70
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "getDescription", array()), "html", null, true));
        echo "</p>
                            </div>
                            <div class=\"tab\">
                                <p> ";
        // line 73
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "getComposition", array()), "html", null, true));
        echo "</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"block product-colors\">
                <span class=\"selected-color\">Selected color: <span class=\"color-name\">orange</span></span>
                <ul class=\"clearfix\">
                    <li class=\"selected\">
                        <a href=\"javascript:;\" data-color=\"orange\">
                            <img src=\"../";
        // line 84
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/assets/img/content/product-colors/color-orange.png\" alt=\"\">
                        </a>
                    </li>
                    <li class=\"disabled\">
                        <a href=\"javascript:;\" data-color=\"brown light\">
                            <img src=\"../";
        // line 89
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/assets/img/content/product-colors/color-brown-light.png\" alt=\"\">
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:;\" data-color=\"grey smoke\">
                            <img src=\"../";
        // line 94
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/assets/img/content/product-colors/color-grey-smoke.png\" alt=\"\">
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:;\" data-color=\"white smoke\">
                            <img src=\"../";
        // line 99
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/assets/img/content/product-colors/color-white-smoke.png\" alt=\"\">
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:;\" data-color=\"green blue\">
                            <img src=\"../";
        // line 104
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/assets/img/content/product-colors/color-green-blue.png\" alt=\"\">
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:;\" data-color=\"dark blue\">
                            <img src=\"../";
        // line 109
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/assets/img/content/product-colors/color-dark-blue.png\" alt=\"\">
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:;\" data-color=\"dark grey\">
                            <img src=\"../";
        // line 114
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/assets/img/content/product-colors/color-dark-grey.png\" alt=\"\">
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:;\" data-color=\"light blue\">
                            <img src=\"../";
        // line 119
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/assets/img/content/product-colors/color-light-blue.png\" alt=\"\">
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:;\" data-color=\"gravel\">
                            <img src=\"../";
        // line 124
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/assets/img/content/product-colors/color-gravel.png\" alt=\"\">
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:;\" data-color=\"gravel dark\">
                            <img src=\"../";
        // line 129
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/assets/img/content/product-colors/color-gravel-dark.png\" alt=\"\">
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:;\" data-color=\"dark wood\">
                            <img src=\"../";
        // line 134
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/assets/img/content/product-colors/color-dark-wood.png\" alt=\"\">
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:;\" data-color=\"wood\">
                            <img src=\"../";
        // line 139
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/assets/img/content/product-colors/color-wood.png\" alt=\"\">
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:;\" data-color=\"red\">
                            <img src=\"../";
        // line 144
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/assets/img/content/product-colors/color-red.png\" alt=\"\">
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:;\" data-color=\"blood red\">
                            <img src=\"../";
        // line 149
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/assets/img/content/product-colors/color-blood-red.png\" alt=\"\">
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:;\" data-color=\"dark red\">
                            <img src=\"../";
        // line 154
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/assets/img/content/product-colors/color-dark-red.png\" alt=\"\">
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:;\" data-color=\"brushed metal\">
                            <img src=\"../";
        // line 159
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/assets/img/content/product-colors/color-brushed-metal.png\" alt=\"\">
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:;\" data-color=\"mineral blue\">
                            <img src=\"../";
        // line 164
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/assets/img/content/product-colors/color-mineral-blue.png\" alt=\"\">
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:;\" data-color=\"sky blue\">
                            <img src=\"../";
        // line 169
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/assets/img/content/product-colors/color-sky-blue.png\" alt=\"\">
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:;\" data-color=\"sea blue\">
                            <img src=\"../";
        // line 174
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/assets/img/content/product-colors/color-sea-blue.png\" alt=\"\">
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:;\" data-color=\"blue\">
                            <img src=\"../";
        // line 179
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/assets/img/content/product-colors/color-blue.png\" alt=\"\">
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:;\" data-color=\"blue medium\">
                            <img src=\"../";
        // line 184
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/assets/img/content/product-colors/color-blue-medium.png\" alt=\"\">
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:;\" data-color=\"teal\">
                            <img src=\"../";
        // line 189
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/assets/img/content/product-colors/color-teal.png\" alt=\"\">
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:;\" data-color=\"darker wood\">
                            <img src=\"../";
        // line 194
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/assets/img/content/product-colors/color-darker-wood.png\" alt=\"\">
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:;\" data-color=\"olive\">
                            <img src=\"../";
        // line 199
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/assets/img/content/product-colors/color-olive.png\" alt=\"\">
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:;\" data-color=\"dark green\">
                            <img src=\"../";
        // line 204
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/assets/img/content/product-colors/color-dark-green.png\" alt=\"\">
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:;\" data-color=\"dirt\">
                            <img src=\"../";
        // line 209
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/assets/img/content/product-colors/color-dirt.png\" alt=\"\">
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:;\" data-color=\"pink\">
                            <img src=\"../";
        // line 214
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/assets/img/content/product-colors/color-pink.png\" alt=\"\">
                        </a>
                    </li>
                </ul>
            </div>
            <div class=\"block product-sizes\">
                <ul>
                    <li class=\"disabled\"><a href=\"javascript:;\">xs</a></li>
                    <li><a href=\"javascript:;\">s</a></li>
                    <li class=\"selected\"><a href=\"javascript:;\">m</a></li>
                    <li><a href=\"javascript:;\">l</a></li>
                    <li><a href=\"javascript:;\">xl</a></li>
                    <li><a href=\"javascript:;\">xxl</a></li>
                </ul>
                <a class=\"size-guide-link\" href=\"javascript:;\">Size guide</a>
                <p>The model is 167cm for 54kg and is wearing a size M.</p>
            </div>
            <div class=\"block product-basket\">
                <a class=\"btn btn-black btn-big add-to-cart\" href=\"javascript:;\">Add to bag</a>
                <div class=\"right\">
                    <p>Is your size or color out of stock?</p>
                    <a href=\"javascript:;\" class=\"link\">Get notified when it’s back</a>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 241
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/footer.html.twig"), "themes/custom/fashion/templates/display-product.html.twig", 241)->display($context);
        // line 242
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("product/product"), "html", null, true));
    }

    public function getTemplateName()
    {
        return "themes/custom/fashion/templates/display-product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 242,  384 => 241,  354 => 214,  346 => 209,  338 => 204,  330 => 199,  322 => 194,  314 => 189,  306 => 184,  298 => 179,  290 => 174,  282 => 169,  274 => 164,  266 => 159,  258 => 154,  250 => 149,  242 => 144,  234 => 139,  226 => 134,  218 => 129,  210 => 124,  202 => 119,  194 => 114,  186 => 109,  178 => 104,  170 => 99,  162 => 94,  154 => 89,  146 => 84,  132 => 73,  126 => 70,  110 => 57,  106 => 56,  92 => 47,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/fashion/templates/display-product.html.twig", "C:\\Users\\nebojsa\\Sites\\devdesktop\\drupal-8.5.0\\themes\\custom\\fashion\\templates\\display-product.html.twig");
    }
}
