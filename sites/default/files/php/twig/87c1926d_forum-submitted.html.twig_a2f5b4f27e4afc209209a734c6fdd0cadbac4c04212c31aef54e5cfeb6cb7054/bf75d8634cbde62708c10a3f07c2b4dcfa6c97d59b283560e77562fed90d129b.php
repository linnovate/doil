<?php

/* core/modules/forum/templates/forum-submitted.html.twig */
class __TwigTemplate_8316b65eabf1140f41e6df523711620f151f9951362f750fde741302983aa2ab extends Twig_Template
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
        $tags = array("if" => 19, "trans" => 20);
        $filters = array("t" => 22);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'trans'),
                array('t'),
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
        if ((isset($context["time"]) ? $context["time"] : null)) {
            // line 20
            echo "  <span>";
            echo t("By @author @time ago", array("@author" => (isset($context["author"]) ? $context["author"] : null), "@time" => (isset($context["time"]) ? $context["time"] : null), ));
            echo "</span>
";
        } else {
            // line 22
            echo "  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("n/a")));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/forum/templates/forum-submitted.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 22,  45 => 20,  43 => 19,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a forum post submission string.*/
/*  **/
/*  * The submission string indicates when and by whom a topic was submitted.*/
/*  **/
/*  * Available variables:*/
/*  * - author: The author of the post.*/
/*  * - time: How long ago the post was created.*/
/*  * - topic: An object with the raw data of the post. Potentially unsafe. Be*/
/*  *   sure to clean this data before printing.*/
/*  **/
/*  * @see template_preprocess_forum_submitted()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% if time %}*/
/*   <span>{% trans %}By {{ author }} {{ time }} ago{% endtrans %}</span>*/
/* {% else %}*/
/*   {{ 'n/a'|t }}*/
/* {% endif %}*/
/* */
