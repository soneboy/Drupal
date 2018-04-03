<?php

/* themes/custom/fashion/templates/display-thankyou.html.twig */
class __TwigTemplate_f9d3184f8d1facc7dcb394d1a565e2f439078343dfdb849a4fd7ed9a219951b1 extends Twig_Template
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
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('include'),
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
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/header.html.twig"), "themes/custom/fashion/templates/display-thankyou.html.twig", 1)->display($context);
        // line 2
        echo "<div class=\"content block confirmation-block\">
    <div class=\"checkout-blocks-wrap\">
        <div class=\"wrap\">
            <div class=\"checkout-block-full\">
                <div class=\"checkout-subheading\">
                    <h3>Thank you!</h3>
                    <div class=\"right\">
                        <a href=\"javascript:;\" class=\"print-link\"><i class=\"icon font-ico-print\"></i><span>Print your invoice</span></a>
                    </div>
                </div>
                <div class=\"checkout-block-form clearfix mob-border\">
                    <p>Your order has been placed successfully. <br>You’ll receive a confirmation e-mail.</p>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 19
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/footer.html.twig"), "themes/custom/fashion/templates/display-thankyou.html.twig", 19)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/custom/fashion/templates/display-thankyou.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 19,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/fashion/templates/display-thankyou.html.twig", "C:\\Users\\nebojsa\\Sites\\devdesktop\\drupal-8.5.0\\themes\\custom\\fashion\\templates\\display-thankyou.html.twig");
    }
}
