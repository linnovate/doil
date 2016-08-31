<?php

/* themes/bootstrap/templates/views/views-view-table.html.twig */
class __TwigTemplate_f5e1a4f3284418a401970d814f79d7ba21fadff3ba58741473688f7afe1fccb1 extends Twig_Template
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
        $tags = array("if" => 30, "set" => 33, "for" => 63);
        $filters = array("merge" => 100);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'set', 'for'),
                array('merge'),
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

        // line 30
        if ((isset($context["responsive"]) ? $context["responsive"] : null)) {
            // line 31
            echo "  <div class=\"table-responsive\">
";
        }
        // line 33
        $context["classes"] = array(0 => "table", 1 => ((( !twig_test_empty($this->getAttribute(        // line 35
(isset($context["context"]) ? $context["context"] : null), "bordered", array())) || $this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "table_bordered", array()))) ? ("table-bordered") : ("")), 2 => ((( !twig_test_empty($this->getAttribute(        // line 36
(isset($context["context"]) ? $context["context"] : null), "condensed", array())) || $this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "table_condensed", array()))) ? ("table-condensed") : ("")), 3 => ((( !twig_test_empty($this->getAttribute(        // line 37
(isset($context["context"]) ? $context["context"] : null), "hover", array())) || $this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "table_hover", array()))) ? ("table-hover") : ("")), 4 => ((( !twig_test_empty($this->getAttribute(        // line 38
(isset($context["context"]) ? $context["context"] : null), "striped", array())) || $this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "table_striped", array()))) ? ("table-striped") : ("")));
        // line 40
        echo "<table";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  ";
        // line 41
        if ((isset($context["caption_needed"]) ? $context["caption_needed"] : null)) {
            // line 42
            echo "    <caption>
      ";
            // line 43
            if ((isset($context["caption"]) ? $context["caption"] : null)) {
                // line 44
                echo "        ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["caption"]) ? $context["caption"] : null), "html", null, true));
                echo "
      ";
            } else {
                // line 46
                echo "        ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
                echo "
      ";
            }
            // line 48
            echo "      ";
            if (( !twig_test_empty((isset($context["summary"]) ? $context["summary"] : null)) ||  !twig_test_empty((isset($context["description"]) ? $context["description"] : null)))) {
                // line 49
                echo "        <details>
          ";
                // line 50
                if ( !twig_test_empty((isset($context["summary"]) ? $context["summary"] : null))) {
                    // line 51
                    echo "            <summary>";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["summary"]) ? $context["summary"] : null), "html", null, true));
                    echo "</summary>
          ";
                }
                // line 53
                echo "          ";
                if ( !twig_test_empty((isset($context["description"]) ? $context["description"] : null))) {
                    // line 54
                    echo "            ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true));
                    echo "
          ";
                }
                // line 56
                echo "        </details>
      ";
            }
            // line 58
            echo "    </caption>
  ";
        }
        // line 60
        echo "  ";
        if ((isset($context["header"]) ? $context["header"] : null)) {
            // line 61
            echo "    <thead>
    <tr>
      ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["header"]) ? $context["header"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 64
                echo "        ";
                if ($this->getAttribute($context["column"], "default_classes", array())) {
                    // line 65
                    echo "          ";
                    // line 66
                    $context["column_classes"] = array(0 => "views-field", 1 => ("views-field-" . $this->getAttribute(                    // line 68
(isset($context["fields"]) ? $context["fields"] : null), $context["key"], array(), "array")));
                    // line 71
                    echo "        ";
                }
                // line 72
                echo "      <th";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["column"], "attributes", array()), "addClass", array(0 => (isset($context["column_classes"]) ? $context["column_classes"] : null)), "method"), "setAttribute", array(0 => "scope", 1 => "col"), "method"), "html", null, true));
                echo ">";
                // line 73
                if ($this->getAttribute($context["column"], "wrapper_element", array())) {
                    // line 74
                    echo "<";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "wrapper_element", array()), "html", null, true));
                    echo ">";
                    // line 75
                    if ($this->getAttribute($context["column"], "url", array())) {
                        // line 76
                        echo "<a href=\"";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "url", array()), "html", null, true));
                        echo "\" title=\"";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "title", array()), "html", null, true));
                        echo "\">";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "content", array()), "html", null, true));
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "sort_indicator", array()), "html", null, true));
                        echo "</a>";
                    } else {
                        // line 78
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "content", array()), "html", null, true));
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "sort_indicator", array()), "html", null, true));
                    }
                    // line 80
                    echo "</";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "wrapper_element", array()), "html", null, true));
                    echo ">";
                } else {
                    // line 82
                    if ($this->getAttribute($context["column"], "url", array())) {
                        // line 83
                        echo "<a href=\"";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "url", array()), "html", null, true));
                        echo "\" title=\"";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "title", array()), "html", null, true));
                        echo "\">";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "content", array()), "html", null, true));
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "sort_indicator", array()), "html", null, true));
                        echo "</a>";
                    } else {
                        // line 85
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "content", array()), "html", null, true));
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "sort_indicator", array()), "html", null, true));
                    }
                }
                // line 88
                echo "</th>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "    </tr>
    </thead>
  ";
        }
        // line 93
        echo "  <tbody>
  ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 95
            echo "    <tr";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "attributes", array()), "html", null, true));
            echo ">
      ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "columns", array()));
            foreach ($context['_seq'] as $context["key"] => $context["column"]) {
                // line 97
                echo "        ";
                if ($this->getAttribute($context["column"], "default_classes", array())) {
                    // line 98
                    echo "          ";
                    $context["column_classes"] = array(0 => "views-field");
                    // line 99
                    echo "          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "fields", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                        // line 100
                        echo "            ";
                        $context["column_classes"] = twig_array_merge((isset($context["column_classes"]) ? $context["column_classes"] : null), array(0 => ("views-field-" . $context["field"])));
                        // line 101
                        echo "          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 102
                    echo "        ";
                }
                // line 103
                echo "      <td";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["column"], "attributes", array()), "addClass", array(0 => (isset($context["column_classes"]) ? $context["column_classes"] : null)), "method"), "html", null, true));
                echo ">";
                // line 104
                if ($this->getAttribute($context["column"], "wrapper_element", array())) {
                    // line 105
                    echo "<";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "wrapper_element", array()), "html", null, true));
                    echo ">
          ";
                    // line 106
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "content", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                        // line 107
                        echo "            ";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["content"], "separator", array()), "html", null, true));
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["content"], "field_output", array()), "html", null, true));
                        echo "
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 109
                    echo "          </";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "wrapper_element", array()), "html", null, true));
                    echo ">";
                } else {
                    // line 111
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "content", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
                        // line 112
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["content"], "separator", array()), "html", null, true));
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["content"], "field_output", array()), "html", null, true));
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                // line 115
                echo "        </td>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "  </tbody>
</table>
";
        // line 121
        if ((isset($context["responsive"]) ? $context["responsive"] : null)) {
            // line 122
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/views/views-view-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 122,  291 => 121,  287 => 119,  280 => 117,  273 => 115,  265 => 112,  261 => 111,  256 => 109,  246 => 107,  242 => 106,  237 => 105,  235 => 104,  231 => 103,  228 => 102,  222 => 101,  219 => 100,  214 => 99,  211 => 98,  208 => 97,  204 => 96,  199 => 95,  195 => 94,  192 => 93,  187 => 90,  180 => 88,  175 => 85,  165 => 83,  163 => 82,  158 => 80,  154 => 78,  144 => 76,  142 => 75,  138 => 74,  136 => 73,  132 => 72,  129 => 71,  127 => 68,  126 => 66,  124 => 65,  121 => 64,  117 => 63,  113 => 61,  110 => 60,  106 => 58,  102 => 56,  96 => 54,  93 => 53,  87 => 51,  85 => 50,  82 => 49,  79 => 48,  73 => 46,  67 => 44,  65 => 43,  62 => 42,  60 => 41,  55 => 40,  53 => 38,  52 => 37,  51 => 36,  50 => 35,  49 => 33,  45 => 31,  43 => 30,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for displaying a view as a table.*/
/*  **/
/*  * Available variables:*/
/*  * - attributes: Remaining HTML attributes for the element.*/
/*  *   - class: HTML classes that can be used to style contextually through CSS.*/
/*  * - title : The title of this group of rows.*/
/*  * - header: The table header columns.*/
/*  *   - attributes: Remaining HTML attributes for the element.*/
/*  *   - content: HTML classes to apply to each header cell, indexed by*/
/*  *   the header's key.*/
/*  * - caption_needed: Is the caption tag needed.*/
/*  * - caption: The caption for this table.*/
/*  * - accessibility_description: Extended description for the table details.*/
/*  * - accessibility_summary: Summary for the table details.*/
/*  * - responsive: Whether or not to use the .table-responsive wrapper.*/
/*  * - rows: Table row items. Rows are keyed by row number.*/
/*  *   - attributes: HTML classes to apply to each row.*/
/*  *   - columns: Row column items. Columns are keyed by column number.*/
/*  *     - attributes: HTML classes to apply to each column.*/
/*  *     - content: The column content.*/
/*  **/
/*  * @ingroup templates*/
/*  **/
/*  * @see template_preprocess_views_view_table()*/
/*  *//* */
/* #}*/
/* {% if responsive %}*/
/*   <div class="table-responsive">*/
/* {% endif %}*/
/* {% set classes = [*/
/*   'table',*/
/*   context.bordered is not empty or theme.settings.table_bordered ? 'table-bordered',*/
/*   context.condensed is not empty or theme.settings.table_condensed ? 'table-condensed',*/
/*   context.hover is not empty or theme.settings.table_hover ? 'table-hover',*/
/*   context.striped is not empty or theme.settings.table_striped ? 'table-striped',*/
/* ] %}*/
/* <table{{ attributes.addClass(classes) }}>*/
/*   {% if caption_needed %}*/
/*     <caption>*/
/*       {% if caption %}*/
/*         {{ caption }}*/
/*       {% else %}*/
/*         {{ title }}*/
/*       {% endif %}*/
/*       {% if (summary is not empty) or (description is not empty) %}*/
/*         <details>*/
/*           {% if summary is not empty %}*/
/*             <summary>{{ summary }}</summary>*/
/*           {% endif %}*/
/*           {% if description is not empty %}*/
/*             {{ description }}*/
/*           {% endif %}*/
/*         </details>*/
/*       {% endif %}*/
/*     </caption>*/
/*   {% endif %}*/
/*   {% if header %}*/
/*     <thead>*/
/*     <tr>*/
/*       {% for key, column in header %}*/
/*         {% if column.default_classes %}*/
/*           {%*/
/*           set column_classes = [*/
/*           'views-field',*/
/*           'views-field-' ~ fields[key],*/
/*           ]*/
/*           %}*/
/*         {% endif %}*/
/*       <th{{ column.attributes.addClass(column_classes).setAttribute('scope', 'col') }}>*/
/*         {%- if column.wrapper_element -%}*/
/*           <{{ column.wrapper_element }}>*/
/*           {%- if column.url -%}*/
/*             <a href="{{ column.url }}" title="{{ column.title }}">{{ column.content }}{{ column.sort_indicator }}</a>*/
/*           {%- else -%}*/
/*             {{ column.content }}{{ column.sort_indicator }}*/
/*           {%- endif -%}*/
/*           </{{ column.wrapper_element }}>*/
/*         {%- else -%}*/
/*           {%- if column.url -%}*/
/*             <a href="{{ column.url }}" title="{{ column.title }}">{{ column.content }}{{ column.sort_indicator }}</a>*/
/*           {%- else -%}*/
/*             {{- column.content }}{{ column.sort_indicator }}*/
/*           {%- endif -%}*/
/*         {%- endif -%}*/
/*         </th>*/
/*       {% endfor %}*/
/*     </tr>*/
/*     </thead>*/
/*   {% endif %}*/
/*   <tbody>*/
/*   {% for row in rows %}*/
/*     <tr{{ row.attributes }}>*/
/*       {% for key, column in row.columns %}*/
/*         {% if column.default_classes %}*/
/*           {% set column_classes = [ 'views-field' ] %}*/
/*           {% for field in column.fields %}*/
/*             {% set column_classes = column_classes|merge(['views-field-' ~ field]) %}*/
/*           {% endfor %}*/
/*         {% endif %}*/
/*       <td{{ column.attributes.addClass(column_classes) }}>*/
/*         {%- if column.wrapper_element -%}*/
/*           <{{ column.wrapper_element }}>*/
/*           {% for content in column.content %}*/
/*             {{ content.separator }}{{ content.field_output }}*/
/*           {% endfor %}*/
/*           </{{ column.wrapper_element }}>*/
/*         {%- else -%}*/
/*           {% for content in column.content %}*/
/*             {{- content.separator }}{{ content.field_output -}}*/
/*           {% endfor %}*/
/*         {%- endif %}*/
/*         </td>*/
/*       {% endfor %}*/
/*     </tr>*/
/*   {% endfor %}*/
/*   </tbody>*/
/* </table>*/
/* {% if responsive %}*/
/*   </div>*/
/* {% endif %}*/
/* */
