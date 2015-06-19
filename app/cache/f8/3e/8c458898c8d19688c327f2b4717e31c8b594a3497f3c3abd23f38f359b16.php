<?php

/* parser/index.twig */
class __TwigTemplate_f83e8c458898c8d19688c327f2b4717e31c8b594a3497f3c3abd23f38f359b16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("templates/base.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "templates/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 8
        $context["bodyClass"] = "file-psr";
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "data", array()), "title", array()), "html", null, true);
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "
        <div class=\"row\">
            <div class=\"col-md-10 col-sm-10 col-xs-12 center-block animated slideInLeft\">
                <div class=\"url-snr-public-text\">
                    <h4>Debris | ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "data", array()), "title", array()), "html", null, true);
        echo "</h4>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-10 col-sm-10 col-xs-12 center-block\">

                <div class=\"url-snr-public-text\" style=\"padding: 50px 20px;\">
                    <h4>File Parser | Under construction <i class=\"fa fa-wrench fa-4\"></i></h4>
                </div>

            </div>
        </div>

";
    }

    public function getTemplateName()
    {
        return "parser/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 16,  49 => 12,  46 => 11,  40 => 5,  36 => 2,  34 => 8,  11 => 2,);
    }
}
