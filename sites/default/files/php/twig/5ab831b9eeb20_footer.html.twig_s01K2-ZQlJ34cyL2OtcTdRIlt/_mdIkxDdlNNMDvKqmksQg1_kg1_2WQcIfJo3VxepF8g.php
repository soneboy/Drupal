<?php

/* themes/custom/fashion/footer.html.twig */
class __TwigTemplate_b13508edb571576d61f7d27719dfb34302e89ccaa7925dcefb3a81d7530dd297 extends Twig_Template
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
        $functions = array("url" => 6);

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
        echo "<footer class=\"footer\">
    <div class=\"services\">
        <div class=\"content-wrap\">
            <div class=\"service-item\">
                <div class=\"service-item-main\">
                    <div class=\"thumb\"><img src=\"";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>")));
        echo "themes/custom/fashion/assets/img/card.svg\" width=\"47\" alt=\"\"></div>
                    <h6>Secure payments</h6>
                </div>
                <p class=\"service-body\">Lorem ipsum dolor sit amet, consectetur dolor adipisicing dolor elitlabore.</p>
            </div>
            <div class=\"service-item\">
                <div class=\"service-item-main\">
                    <div class=\"thumb\"><img src=\"";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>")));
        echo "themes/custom/fashion/assets/img/returns.svg\" width=\"53\" alt=\"\"></div>
                    <h6>Returns</h6>
                </div>
                <p class=\"service-body\">Lorem ipsum dolor sit amet, consectetur dolor adipisicing dolor elitlabore.</p>
            </div>
            <div class=\"service-item\">
                <div class=\"service-item-main\">
                    <div class=\"thumb\"><img src=\"";
        // line 20
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>")));
        echo "themes/custom/fashion/assets/img/shipping.svg\" width=\"46\" alt=\"\"></div>
                    <h6>Smart shipping</h6>
                </div>
                <p class=\"service-body\">Lorem ipsum dolor sit amet, consectetur dolor adipisicing dolor elitlabore.</p>
            </div>
            <div class=\"service-item\">
                <div class=\"service-item-main\">
                    <div class=\"thumb\"><img src=\"";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>")));
        echo "themes/custom/fashion/assets/img/customer.svg\" width=\"53\" alt=\"\"></div>
                    <h6>Customer care</h6>
                </div>
                <p class=\"service-body\">Lorem ipsum dolor sit amet, consectetur dolor adipisicing dolor elitlabore.</p>
            </div>
        </div>
    </div>
    <div class=\"bg-black\">
        <div class=\"content-wrap\">
            <div class=\"subscribe-form\">
                <form action=\"\">
                    <label for=\"subscribe-input\">SUBSCRIBE TO OUR NEWSLETTER</label>
                    <input type=\"email\" placeholder=\"Your e-mail\" id=\"subscribe-input\">
                    <button type=\"submit\">OK</button>
                </form>
            </div>
            <div class=\"block-social\">
                <h4>Follow us</h4>
                <ul>
                    <li>
                        <a href=\"javascript:;\">
                            <span class=\"icon font-ico-facebook\"></span>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:;\">
                            <span class=\"icon font-ico-instagram\"></span>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript:;\">
                            <span class=\"icon font-ico-linkedin\"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"footer-links\">
        <div class=\"content-wrap\">
            <ul>
                <li>Copyright 2017 - VEGAIT Sourcing</li>
                <li><a href=\"javascript:;\">About us</a></li>
                <li><a href=\"javascript:;\">Faq</a></li>
                <li><a href=\"javascript:;\">Carreers</a></li>
                <li><a href=\"javascript:;\">For professionals</a></li>
                <li><a href=\"javascript:;\">Term and Conditions</a></li>
                <li><a href=\"javascript:;\">Confidentiality</a></li>
                <li><a href=\"javascript:;\">Contact us</a></li>
            </ul>
        </div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "themes/custom/fashion/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 27,  70 => 20,  60 => 13,  50 => 6,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/fashion/footer.html.twig", "C:\\Users\\nebojsa\\Sites\\devdesktop\\drupal-8.5.0\\themes\\custom\\fashion\\footer.html.twig");
    }
}
