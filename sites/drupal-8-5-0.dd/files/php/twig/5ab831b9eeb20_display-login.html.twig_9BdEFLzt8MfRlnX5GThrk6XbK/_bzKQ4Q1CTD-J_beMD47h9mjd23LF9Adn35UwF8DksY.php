<?php

/* themes/custom/fashion/templates/display-login.html.twig */
class __TwigTemplate_cacdadb99b2c3be39e7aa6f135bc07e9f3f824cd098b4516c619f56301a73a7f extends Twig_Template
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
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/header.html.twig"), "themes/custom/fashion/templates/display-login.html.twig", 1)->display($context);
        // line 2
        echo "<div class=\"content block\">

    <div class=\"block login-wrap\">
        <div class=\"block-half\">
            <div class=\"img-wrap\">
                <img class=\"full-width\" src=\"assets/img/content/login-image.jpg\" alt=\"\">
            </div>
        </div>
        <div class=\"block-half\">
            <div class=\"login-form-wrap\">
                <h2>Log in</h2>
                <h6>Manage your orders, newsletter subscription and more</h6>
                <div class=\"login-form clearfix\">
                    <h6>Don't have an account?</h6>
                    <a class=\"btn btn-big create-account-btn\" href=\"javascript:;\">Create an account</a>
                    <h6>Log in</h6>
                    <form method=\"post\">
                    <div class=\"form-item form-item-full\">
                        <input class=\"form-item-text\" type=\"text\" name=\"username\" placeholder=\"Username\">
                    </div>
                    <div class=\"form-item form-item-full\">
                        <input class=\"form-item-text\" type=\"password\" name=\"password\" placeholder=\"Password\">
                    </div>
                    <a class=\"forgot-password\" href=\"javascript:;\">Forgot your password?</a>
                    <a class=\"btn btn-black btn-big login-btn\" href=\"javascript:;\">
                        <input type=\"submit\">Log in</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 34
        $this->loadTemplate(((isset($context["directory"]) ? $context["directory"] : null) . "/footer.html.twig"), "themes/custom/fashion/templates/display-login.html.twig", 34)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/custom/fashion/templates/display-login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 34,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/fashion/templates/display-login.html.twig", "C:\\Users\\nebojsa\\Sites\\devdesktop\\drupal-8.5.0\\themes\\custom\\fashion\\templates\\display-login.html.twig");
    }
}
