<?php

/* themes/bootstrap/templates/bootstrap/bootstrap-panel.html.twig */
class __TwigTemplate_edc3a32b7c6337c1a341e32dd2cfb7010da138e73a9ce5e102c18cb8bc63730a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'heading' => array($this, 'block_heading'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 45, "if" => 53, "block" => 54);
        $filters = array("clean_class" => 47);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class'),
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

        // line 45
        $context["classes"] = array(0 => "panel", 1 => ((        // line 47
(isset($context["errors"]) ? $context["errors"] : null)) ? ("panel-danger") : (("panel-" . \Drupal\Component\Utility\Html::getClass((isset($context["panel_type"]) ? $context["panel_type"] : null))))));
        // line 50
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">

  ";
        // line 53
        echo "  ";
        if ((isset($context["heading"]) ? $context["heading"] : null)) {
            // line 54
            echo "    ";
            $this->displayBlock('heading', $context, $blocks);
            // line 69
            echo "  ";
        }
        // line 70
        echo "
  ";
        // line 72
        echo "  ";
        $this->displayBlock('body', $context, $blocks);
        // line 105
        echo "
  ";
        // line 107
        echo "  ";
        if ((isset($context["footer"]) ? $context["footer"] : null)) {
            // line 108
            echo "    ";
            $this->displayBlock('footer', $context, $blocks);
            // line 116
            echo "  ";
        }
        // line 117
        echo "
</div>
";
    }

    // line 54
    public function block_heading($context, array $blocks = array())
    {
        // line 55
        echo "      <div class=\"panel-heading\">
        ";
        // line 57
        $context["heading_classes"] = array(0 => "panel-title", 1 => ((        // line 59
(isset($context["required"]) ? $context["required"] : null)) ? ("form-required") : ("")));
        // line 62
        echo "        ";
        if ((isset($context["collapsible"]) ? $context["collapsible"] : null)) {
            // line 63
            echo "          <a";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["heading_attributes"]) ? $context["heading_attributes"] : null), "addClass", array(0 => (isset($context["heading_classes"]) ? $context["heading_classes"] : null)), "method"), "html", null, true));
            echo " href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["target"]) ? $context["target"] : null), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["heading"]) ? $context["heading"] : null), "html", null, true));
            echo "</a>
        ";
        } else {
            // line 65
            echo "          <div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["heading_attributes"]) ? $context["heading_attributes"] : null), "addClass", array(0 => (isset($context["heading_classes"]) ? $context["heading_classes"] : null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["heading"]) ? $context["heading"] : null), "html", null, true));
            echo "</div>
        ";
        }
        // line 67
        echo "      </div>
    ";
    }

    // line 72
    public function block_body($context, array $blocks = array())
    {
        // line 73
        echo "    ";
        // line 74
        $context["body_classes"] = array(0 => "panel-body", 1 => ((        // line 76
(isset($context["collapsible"]) ? $context["collapsible"] : null)) ? ("panel-collapse") : ("")), 2 => ((        // line 77
(isset($context["collapsible"]) ? $context["collapsible"] : null)) ? ("collapse") : ("")), 3 => ((        // line 78
(isset($context["collapsible"]) ? $context["collapsible"] : null)) ? ("fade") : ("")), 4 => (((        // line 79
(isset($context["errors"]) ? $context["errors"] : null) || ((isset($context["collapsible"]) ? $context["collapsible"] : null) &&  !(isset($context["collapsed"]) ? $context["collapsed"] : null)))) ? ("in") : ("")));
        // line 82
        echo "    ";
        // line 83
        $context["description_classes"] = array(0 => "help-block", 1 => (((        // line 85
(isset($context["description"]) ? $context["description"] : null) && ($this->getAttribute((isset($context["description"]) ? $context["description"] : null), "position", array()) == "invisible"))) ? ("sr-only") : ("")));
        // line 88
        echo "
    ";
        // line 89
        if ((isset($context["errors"]) ? $context["errors"] : null)) {
            // line 90
            echo "      <div class=\"alert alert-danger\" role=\"alert\">
        <strong>";
            // line 91
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["errors"]) ? $context["errors"] : null), "html", null, true));
            echo "</strong>
      </div>
    ";
        }
        // line 94
        echo "
    <div";
        // line 95
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["body_attributes"]) ? $context["body_attributes"] : null), "addClass", array(0 => (isset($context["body_classes"]) ? $context["body_classes"] : null)), "method"), "html", null, true));
        echo ">
      ";
        // line 96
        if (((isset($context["description"]) ? $context["description"] : null) && ($this->getAttribute((isset($context["description"]) ? $context["description"] : null), "position", array()) == "before"))) {
            // line 97
            echo "        <p";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["description"]) ? $context["description"] : null), "attributes", array()), "addClass", array(0 => (isset($context["description_classes"]) ? $context["description_classes"] : null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", array()), "html", null, true));
            echo "</p>
      ";
        }
        // line 99
        echo "      ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["body"]) ? $context["body"] : null), "html", null, true));
        echo "
      ";
        // line 100
        if ((((isset($context["description"]) ? $context["description"] : null) && ($this->getAttribute((isset($context["description"]) ? $context["description"] : null), "position", array()) == "after")) || ($this->getAttribute((isset($context["description"]) ? $context["description"] : null), "position", array()) == "invisible"))) {
            // line 101
            echo "        <p";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute((isset($context["description"]) ? $context["description"] : null), "attributes", array()), "addClass", array(0 => (isset($context["description_classes"]) ? $context["description_classes"] : null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "content", array()), "html", null, true));
            echo "</p>
      ";
        }
        // line 103
        echo "    </div>
  ";
    }

    // line 108
    public function block_footer($context, array $blocks = array())
    {
        // line 109
        echo "      ";
        // line 110
        $context["footer_classes"] = array(0 => "panel-footer");
        // line 114
        echo "      <div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["footer_attributes"]) ? $context["footer_attributes"] : null), "addClass", array(0 => (isset($context["footer_classes"]) ? $context["footer_classes"] : null)), "method"), "html", null, true));
        echo ">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["footer"]) ? $context["footer"] : null), "html", null, true));
        echo "</div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/bootstrap/bootstrap-panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 114,  195 => 110,  193 => 109,  190 => 108,  185 => 103,  177 => 101,  175 => 100,  170 => 99,  162 => 97,  160 => 96,  156 => 95,  153 => 94,  147 => 91,  144 => 90,  142 => 89,  139 => 88,  137 => 85,  136 => 83,  134 => 82,  132 => 79,  131 => 78,  130 => 77,  129 => 76,  128 => 74,  126 => 73,  123 => 72,  118 => 67,  110 => 65,  100 => 63,  97 => 62,  95 => 59,  94 => 57,  91 => 55,  88 => 54,  82 => 117,  79 => 116,  76 => 108,  73 => 107,  70 => 105,  67 => 72,  64 => 70,  61 => 69,  58 => 54,  55 => 53,  49 => 50,  47 => 47,  46 => 45,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a Bootstrap Panel component.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: An array of HTML attributes intended to be added to the main*/
/*  *   container tag of this template.*/
/*  *   - id: A valid HTML ID and guaranteed to be unique.*/
/*  * - body: The primary content of the panel.*/
/*  * - body_attributes: (optional) Same as attributes, except applied to the body*/
/*  *   container that appears in the template.*/
/*  * - collapsible: Flag indicating whether the panel is collapsible.*/
/*  * - collapsed: Flag indicating whether the panel is collapsed.*/
/*  * - description: (optional) A list of description properties containing:*/
/*  *    - content: (optional) A description of the form element, may not be set.*/
/*  *    - attributes: (optional) A list of HTML attributes to apply to the*/
/*  *      description content wrapper. Will only be set when description is set.*/
/*  *    - position: (optional) A display setting that can have these values:*/
/*  *      - before: The description is output before the element. This is the*/
/*  *        default value.*/
/*  *      - after: The description is output after the element.*/
/*  *      - invisible: The description is output after the element, hidden*/
/*  *        visually but available to screen readers.*/
/*  * - errors: (optional) Any errors for panel, may not be set.*/
/*  * - footer: (optional) Additional contents intended to be placed at the bottom.*/
/*  * - footer_attributes: (optional) Same as attributes, except applied to the*/
/*  *   footer container that appears in the template.*/
/*  * - heading: (optional) The title of the panel, may not be set.*/
/*  * - heading_attributes: (optional) Same as attributes, except applied to the*/
/*  *   heading container that appears in the template.*/
/*  * - panel_type: (optional) A contextual state. Will be one of these values:*/
/*  *   - danger*/
/*  *   - default (default value)*/
/*  *   - info*/
/*  *   - primary*/
/*  *   - success*/
/*  *   - warning*/
/*  * - target: (optional) The target of the collapsible container.*/
/*  **/
/*  * @ingroup templates*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'panel',*/
/*     errors ? 'panel-danger' : 'panel-' ~ panel_type|clean_class,*/
/*   ]*/
/* %}*/
/* <div{{ attributes.addClass(classes) }}>*/
/* */
/*   {# Heading #}*/
/*   {% if heading %}*/
/*     {% block heading %}*/
/*       <div class="panel-heading">*/
/*         {%*/
/*           set heading_classes = [*/
/*             'panel-title',*/
/*             required ? 'form-required' : '',*/
/*           ]*/
/*         %}*/
/*         {% if collapsible %}*/
/*           <a{{ heading_attributes.addClass(heading_classes) }} href="{{ target }}">{{ heading }}</a>*/
/*         {% else %}*/
/*           <div{{ heading_attributes.addClass(heading_classes) }}>{{ heading }}</div>*/
/*         {% endif %}*/
/*       </div>*/
/*     {% endblock %}*/
/*   {% endif %}*/
/* */
/*   {# Body #}*/
/*   {% block body %}*/
/*     {%*/
/*       set body_classes = [*/
/*       'panel-body',*/
/*       collapsible ? 'panel-collapse',*/
/*       collapsible ? 'collapse',*/
/*       collapsible ? 'fade',*/
/*       errors or collapsible and not collapsed ? 'in',*/
/*       ]*/
/*     %}*/
/*     {%*/
/*       set description_classes = [*/
/*         'help-block',*/
/*         description and description.position == 'invisible' ? 'sr-only',*/
/*       ]*/
/*     %}*/
/* */
/*     {% if errors %}*/
/*       <div class="alert alert-danger" role="alert">*/
/*         <strong>{{ errors }}</strong>*/
/*       </div>*/
/*     {% endif %}*/
/* */
/*     <div{{ body_attributes.addClass(body_classes) }}>*/
/*       {% if description and description.position == 'before' %}*/
/*         <p{{ description.attributes.addClass(description_classes) }}>{{ description.content }}</p>*/
/*       {% endif %}*/
/*       {{ body }}*/
/*       {% if description and description.position == 'after' or description.position == 'invisible' %}*/
/*         <p{{ description.attributes.addClass(description_classes) }}>{{ description.content }}</p>*/
/*       {% endif %}*/
/*     </div>*/
/*   {% endblock %}*/
/* */
/*   {# Footer #}*/
/*   {% if footer %}*/
/*     {% block footer %}*/
/*       {%*/
/*         set footer_classes = [*/
/*           'panel-footer',*/
/*         ]*/
/*       %}*/
/*       <div{{ footer_attributes.addClass(footer_classes) }}>{{ footer }}</div>*/
/*     {% endblock %}*/
/*   {% endif %}*/
/* */
/* </div>*/
/* */
