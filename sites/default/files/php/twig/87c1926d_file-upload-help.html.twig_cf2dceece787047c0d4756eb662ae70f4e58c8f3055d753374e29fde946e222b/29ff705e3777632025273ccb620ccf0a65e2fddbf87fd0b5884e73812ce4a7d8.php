<?php

/* themes/bootstrap/templates/file/file-upload-help.html.twig */
class __TwigTemplate_fb6370966b43513da10b88b77af6007d2d34d32e7356b60bc0ee73fdd75c7955 extends Twig_Template
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
        $tags = array("if" => 16);
        $filters = array("safe_join" => 22);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('safe_join'),
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

        // line 16
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 17
            echo "  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true));
            echo "<br>
";
        }
        // line 19
        if ((isset($context["popover"]) ? $context["popover"] : null)) {
            // line 20
            echo "  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["popover"]) ? $context["popover"] : null), "html", null, true));
            echo "
";
        } else {
            // line 22
            echo "  ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->safeJoin($this->env, (isset($context["descriptions"]) ? $context["descriptions"] : null), "<br>")));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/file/file-upload-help.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 22,  53 => 20,  51 => 19,  45 => 17,  43 => 16,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display help text for file fields.*/
/*  **/
/*  * Available variables:*/
/*  * - description: The normal description for this field, specified by the user.*/
/*  * - descriptions: Lines of help text for uploading a file.*/
/*  * - popover: Markup to display the descriptions as a popover instead.*/
/*  **/
/*  * @ingroup templates*/
/*  **/
/*  * @see template_preprocess_file_upload_help()*/
/*  *//* */
/* #}*/
/* {% if description %}*/
/*   {{ description }}<br>*/
/* {% endif %}*/
/* {% if popover %}*/
/*   {{ popover }}*/
/* {% else %}*/
/*   {{ descriptions|safe_join('<br>') }}*/
/* {% endif %}*/
/* */
