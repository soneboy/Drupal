<?php

/* themes/custom/fashion/templates/display-payment.html.twig */
class __TwigTemplate_9288948c64146d24ed6b335a4e91953d330648fedbf5dd09fc57a79dea129f66 extends Twig_Template
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
        $tags = array("include" => 1, "for" => 111);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('include', 'for'),
                array(),
                array()
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
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/header.html.twig"), "themes/custom/fashion/templates/display-payment.html.twig", 1)->display($context);
        // line 2
        echo "
<div class=\"content block\">

    <div class=\"checkout-blocks block\">
        <div class=\"block-half checkout-form-wrap\">
            <div class=\"checkout-login-form block\">
                <h2>Check out</h2>
                <div class=\"checkout-block-header clearfix\">
                    <h6>Shipping address</h6>
                    <a class=\"btn btn-black\" href=\"javascript:;\">Login</a>
                    <a class=\"registered-customer\" href=\"javascript:;\">Already a client?</a>
                </div>
                <div class=\"form-item\">
                    <span class=\"form-label\">Country</span>
                    <select class=\"form-item-select\" name=\"\">
                        <option value=\"1\">Belgium</option>
                        <option value=\"2\">France</option>
                        <option value=\"3\">Netherlands</option>
                        <option value=\"4\">Germany</option>
                        <option value=\"5\">United Kingdom</option>
                    </select>
                </div>
                <div class=\"checkbox-list block\">
                    <div class=\"form-item form-item-full checkbox\">
                        <input id=\"cb1\" type=\"checkbox\" name=\"cb\" value=\"\">
                        <label class=\"form-checkbox\" for=\"cb1\">Send the bill to a different address</label>
                    </div>
                    <div class=\"form-item form-item-full checkbox\">
                        <input id=\"cb2\" type=\"checkbox\" name=\"cb\" value=\"\">
                        <label class=\"form-checkbox\" for=\"cb2\">Create an account</label>
                    </div>
                </div>
            </div>
            <div class=\"shipping-methods block\">
                <h6>Shipping method</h6>
                <div class=\"radio\">
                    <input id=\"rd1\" type=\"radio\" name=\"shipping-method\" value=\"1\" checked>
                    <label class=\"form-radio\" for=\"rd1\">
                        <span class=\"shipping-merchant\"><img src=\"assets/img/dpd-shipping.png\" width=\"87\" alt=\"\"></span> <span class=\"text\">Standard<br/> (3 open days)</span> <strong>Free</strong>
                    </label>
                </div>
                <div class=\"radio\">
                    <input id=\"rd2\" type=\"radio\" name=\"shipping-method\" value=\"2\">
                    <label class=\"form-radio\" for=\"rd2\">
                        <span class=\"shipping-merchant\"><img src=\"assets/img/dpd-shipping.png\" width=\"87\" alt=\"\"></span> <span class=\"text\">Pick up point<br/> (2 open days)</span> <strong>Free</strong>
                    </label>
                </div>
            </div>
            <div class=\"payment-methods block\">
                <h6>Payment</h6>
                <div class=\"radio\">
                    <input id=\"pay1\" type=\"radio\" name=\"payment-method\" value=\"1\" checked>
                    <label class=\"form-radio\" for=\"pay1\">
\t\t\t\t\t\t\t\t<span class=\"payment-merchant\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/img/master-card-bw.svg\" alt=\"\">
\t\t\t\t\t\t\t\t</span>
                        Mastercard
                    </label>
                </div>
                <div class=\"radio\">
                    <input id=\"pay2\" type=\"radio\" name=\"payment-method\" value=\"2\">
                    <label class=\"form-radio\" for=\"pay2\">
\t\t\t\t\t\t\t\t<span class=\"payment-merchant\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/img/master-card-bw.svg\" alt=\"\">
\t\t\t\t\t\t\t\t</span>
                        Amex
                    </label>
                </div>
                <div class=\"radio\">
                    <input id=\"pay3\" type=\"radio\" name=\"payment-method\" value=\"2\">
                    <label class=\"form-radio\" for=\"pay3\">
\t\t\t\t\t\t\t\t<span class=\"payment-merchant\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/img/visa-bw.svg\" alt=\"\">
\t\t\t\t\t\t\t\t</span>
                        Visa
                    </label>
                </div>
                <div class=\"radio\">
                    <input id=\"pay4\" type=\"radio\" name=\"payment-method\" value=\"2\">
                    <label class=\"form-radio\" for=\"pay4\">
\t\t\t\t\t\t\t\t<span class=\"payment-merchant\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/img/visa-bw.svg\" alt=\"\">
\t\t\t\t\t\t\t\t</span>
                        Bancontact
                    </label>
                </div>
                <div class=\"radio\">
                    <input id=\"pay5\" type=\"radio\" name=\"payment-method\" value=\"3\">
                    <label class=\"form-radio\" for=\"pay5\">
\t\t\t\t\t\t\t\t<span class=\"payment-merchant\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/img/paypal-bw.svg\" alt=\"\">
\t\t\t\t\t\t\t\t</span>
                        Paypal
                    </label>
                </div>
                <div class=\"radio\">
                    <input id=\"pay6\" type=\"radio\" name=\"payment-method\" value=\"2\">
                    <label class=\"form-radio\" for=\"pay6\">
\t\t\t\t\t\t\t\t<span class=\"payment-merchant\">
\t\t\t\t\t\t\t\t\t<img src=\"assets/img/paypal-bw.svg\" alt=\"\">
\t\t\t\t\t\t\t\t</span>
                        Direct transfer
                    </label>
                </div>
            </div>
            <a class=\"btn btn-black btn-big confirm-purchase\" href=\"javascript:;\">Confirm</a>
        </div>
        <div class=\"block-half checkout-orders\">
            <h6>My order</h6>
            ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["payment"]) ? $context["payment"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 112
            echo "                <div class=\"checkout-orders-list clearfix\">
                    <div class=\"checkout-order\">
                        <div class=\"order-thumbnail\">
                            <a href=\"javascript:;\">
                                <img src=\"";
            // line 116
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "img", array()), "html", null, true));
            echo "\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"order-description\">
                            <h6><a href=\"../product/";
            // line 120
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true));
            echo "</a></h6>
                            <span class=\"small-text\">";
            // line 121
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "size", array()), "html", null, true));
            echo "</span>
                            <span class=\"small-text\">";
            // line 122
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "quantity", array()), "html", null, true));
            echo "</span>
                        </div>
                        <span class=\"order-price\">";
            // line 124
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "price", array()), "html", null, true));
            echo ",<sup>00€</sup></span>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "            <div class=\"subtotal-prices order-prices block\">
                <div class=\"price-row\">
                    <span class=\"price-label\">Sub total</span>
                    <span class=\"price\">";
        // line 131
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["totalPrice"]) ? $context["totalPrice"] : null), "html", null, true));
        echo "<sup>00€</sup></span>
                </div>
                <div class=\"price-row\">
                    <span class=\"price-label\">Shipping</span>
                    <span class=\"price\">Free</span>
                </div>
            </div>
            <div class=\"total-prices order-prices block\">
                <div class=\"price-row\">
                    <span class=\"price-label\">Total (TVA <sup>Inc.</sup>)</span>
                    <span class=\"price\">";
        // line 141
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["totalPrice"]) ? $context["totalPrice"] : null), "html", null, true));
        echo "<sup>00€</sup></span>
                </div>
            </div>
            <div class=\"discount-code-form form-item form-item-full\">
                <label for=\"dsc\" class=\"form-label\">Use a discount code</label>
                <input class=\"form-item-text\" type=\"text\" name=\"\" id=\"dsc\" placeholder=\"Discount code (eg. AFX8912)\">
            </div>
            <a class=\"btn btn-black btn-big confirm-purchase show-mobile\" href=\"../thankyou\">Confirm</a>
        </div>
    </div>
</div>
";
        // line 152
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/footer.html.twig"), "themes/custom/fashion/templates/display-payment.html.twig", 152)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/custom/fashion/templates/display-payment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 152,  216 => 141,  203 => 131,  198 => 128,  188 => 124,  183 => 122,  179 => 121,  173 => 120,  166 => 116,  160 => 112,  156 => 111,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/fashion/templates/display-payment.html.twig", "C:\\Users\\nebojsa\\Sites\\devdesktop\\drupal-8.5.0\\themes\\custom\\fashion\\templates\\display-payment.html.twig");
    }
}
