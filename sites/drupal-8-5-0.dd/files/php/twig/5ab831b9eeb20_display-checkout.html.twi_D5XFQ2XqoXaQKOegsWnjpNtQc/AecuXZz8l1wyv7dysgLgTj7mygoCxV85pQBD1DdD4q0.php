<?php

/* themes/custom/fashion/templates/display-checkout.html.twig */
class __TwigTemplate_2f47b321804ffaf20181e59072f48f21e7271ea137295666c0045b55ac3ee9dc extends Twig_Template
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
        $tags = array("include" => 1, "for" => 8);
        $filters = array();
        $functions = array("attach_library" => 74);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('include', 'for'),
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
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/header.html.twig"), "themes/custom/fashion/templates/display-checkout.html.twig", 1)->display($context);
        // line 2
        echo "<div class=\"content block\">
    <div class=\"checkout-blocks block\">
        <div class=\"block-half checkout-orders\">
            <h3>My <span>shopping</span> bag</h3>
            <span class=\"subtitle\"><i class=\"icon font-ico-basket\"></i> My shopping bag</span>
            <div class=\"checkout-orders-list clearfix\">
                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cartContent"]) ? $context["cartContent"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 9
            echo "                <div class=\"checkout-order\">
                    <div class=\"order-thumbnail\">
                        <a href=\"javascript:;\">
                            <img src=\"";
            // line 12
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "img", array()), "html", null, true));
            echo "\" alt=\"\" class=\"desktop-img\">
                            <img src=\"";
            // line 13
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "img", array()), "html", null, true));
            echo "\" alt=\"\" class=\"mobile-img\">
                            <span class=\"img-ratio\">image vignette ratio <span>800x1000</span></span>
                        </a>
                    </div>
                        <div class=\"order-description\">
                            <h6><a href=\"javascript:;\">";
            // line 18
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true));
            echo "</a></h6>
                            <span>
                                <span class=\"order-price\" data-price=\"";
            // line 20
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "price", array()), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "price", array()), "html", null, true));
            echo "</span>
                            <sup>,00€</sup>
                            </span>
                            <span class=\"small-text color\"> ";
            // line 23
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "color", array()), "html", null, true));
            echo "</span>
                            <div class=\"form-item\">
                                <span class=\"form-label\">";
            // line 25
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "size", array()), "html", null, true));
            echo "</span>
                                <select class=\"form-item-select size-selection\" name=\"\" data-index=\"";
            // line 26
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["key"], "html", null, true));
            echo "\">
                                    <option value=\"M\">M</option>
                                    <option value=\"L\">L</option>
                                    <option value=\"XL\">XL</option>
                                    <option value=\"XXL\">XXL</option>
                                </select>
                            </div>
                            <div class=\"form-item\">
                                <span class=\"form-label\">Quantity</span>
                                <select class=\"form-item-select quantity-selection\" name=\"\" data-index=\"";
            // line 35
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["key"], "html", null, true));
            echo "\">
                                    <option value=\"1\">1X</option>
                                    <option value=\"2\">2X</option>
                                    <option value=\"3\">3X</option>
                                    <option value=\"4\">4X</option>
                                </select>
                            </div>
                        </div>
                    <a class=\"remove-product\" data-index=\"";
            // line 43
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["key"], "html", null, true));
            echo "\" href=\"javascript:;\"><i class=\"icon font-ico-recycle-bin\"></i></a>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "            </div>
            <div class=\"subtotal-prices order-prices block\">
                <div class=\"price-row\">
                    <span class=\"price-label\">Sub-total</span>
                    <span class=\"price\">";
        // line 50
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["totalPrice"]) ? $context["totalPrice"] : null), "html", null, true));
        echo "<sup>,00€</sup></span>
                </div>
            </div>
        </div>
        <div class=\"block-half checkout-form-wrap\">
            <p>You need help finding the right size? <br>Check out our <a href=\"javascript:;\">size guide</a>.</p>
            <div class=\"discount-code-form form-item form-item-full\">
                <label for=\"dsc\" class=\"form-label subtitle\">Use a discount code</label>
                <div class=\"disc-field-wrap\">
                    <input class=\"form-item-text\" type=\"text\" name=\"\" id=\"dsc\" placeholder=\"Discount code (eg. AFX8912)\">
                    <button type=\"submit\" class=\"btn btn-black\">Validate</button>
                </div>
            </div>
            <div class=\"total-prices order-prices block\">
                <div class=\"price-row\">
                    <span class=\"price-label\">Total</span>
                    <span class=\"total-price\">";
        // line 66
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["totalPrice"]) ? $context["totalPrice"] : null), "html", null, true));
        echo "<sup>,00€</sup></span>
                </div>
            </div>
            <a class=\"btn btn-black btn-medium confirm-purchase\" href=\"../payment\">proceed to checkout</a>
        </div>
    </div>
</div>
";
        // line 73
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/footer.html.twig"), "themes/custom/fashion/templates/display-checkout.html.twig", 73)->display($context);
        // line 74
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("checkout/checkout"), "html", null, true));
    }

    public function getTemplateName()
    {
        return "themes/custom/fashion/templates/display-checkout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 74,  163 => 73,  153 => 66,  134 => 50,  128 => 46,  119 => 43,  108 => 35,  96 => 26,  92 => 25,  87 => 23,  79 => 20,  74 => 18,  66 => 13,  62 => 12,  57 => 9,  53 => 8,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/fashion/templates/display-checkout.html.twig", "C:\\Users\\nebojsa\\Sites\\devdesktop\\drupal-8.5.0\\themes\\custom\\fashion\\templates\\display-checkout.html.twig");
    }
}
