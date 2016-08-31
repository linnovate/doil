<?php

/* core/modules/forum/templates/forums.html.twig */
class __TwigTemplate_ce31fb28ebb833eec58a536b8721f06860124771d2c5d9ba4f46789f3eecbbe4 extends Twig_Template
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
        $tags = array("if" => 19);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 19
        if ((isset($context["forums_defined"]) ? $context["forums_defined"] : null)) {
            // line 20
            echo "  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["forums"]) ? $context["forums"] : null), "html", null, true));
            echo "
  ";
            // line 21
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["topics"]) ? $context["topics"] : null), "html", null, true));
            echo "
  ";
            // line 22
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["topics_pager"]) ? $context["topics_pager"] : null), "html", null, true));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/forum/templates/forums.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 22,  50 => 21,  45 => 20,  43 => 19,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a forum.*/
/*  **/
/*  * May contain forum containers as well as forum topics.*/
/*  **/
/*  * Available variables:*/
/*  * - forums: The forums to display (as processed by forum-list.html.twig).*/
/*  * - topics: The topics to display.*/
/*  * - topics_pager: The topics pager.*/
/*  * - forums_defined: A flag to indicate that the forums are configured.*/
/*  **/
/*  * @see template_preprocess_forums()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% if forums_defined %}*/
/*   {{ forums }}*/
/*   {{ topics }}*/
/*   {{ topics_pager }}*/
/* {% endif %}*/
/* */
