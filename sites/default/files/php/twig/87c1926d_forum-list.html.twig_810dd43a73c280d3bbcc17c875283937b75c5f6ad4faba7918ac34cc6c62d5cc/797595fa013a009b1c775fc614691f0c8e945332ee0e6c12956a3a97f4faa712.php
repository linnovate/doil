<?php

/* core/modules/forum/templates/forum-list.html.twig */
class __TwigTemplate_41706954a4974f3fe061676545edd2c14c11906589d6e17ec2d22002c3dd762a extends Twig_Template
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
        $tags = array("for" => 45, "if" => 47);
        $filters = array("t" => 38);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('for', 'if'),
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

        // line 35
        echo "<table>
  <thead>
    <tr>
      <th>";
        // line 38
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Forum")));
        echo "</th>
      <th>";
        // line 39
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Topics")));
        echo "</th>
      <th>";
        // line 40
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Posts")));
        echo "</th>
      <th>";
        // line 41
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Last post")));
        echo "</th>
    </tr>
  </thead>
  <tbody>
  ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["forums"]) ? $context["forums"] : null));
        foreach ($context['_seq'] as $context["child_id"] => $context["forum"]) {
            // line 46
            echo "    <tr>
      <td";
            // line 47
            if (($this->getAttribute($context["forum"], "is_container", array()) == true)) {
                echo " colspan=\"4\"";
            }
            echo ">
        ";
            // line 53
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($context["forum"], "depth", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                if (($this->getAttribute($context["forum"], "depth", array()) > 0)) {
                    echo "<div class=\"indent\">";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "          <div title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["forum"], "icon_title", array()), "html", null, true));
            echo "\">
            <span class=\"visually-hidden\">";
            // line 55
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["forum"], "icon_title", array()), "html", null, true));
            echo "</span>
          </div>
          <div><a href=\"";
            // line 57
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["forum"], "link", array()), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["forum"], "label", array()), "html", null, true));
            echo "</a></div>
          ";
            // line 58
            if ($this->getAttribute($this->getAttribute($context["forum"], "description", array()), "value", array())) {
                // line 59
                echo "            <div>";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["forum"], "description", array()), "value", array()), "html", null, true));
                echo "</div>
          ";
            }
            // line 61
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($context["forum"], "depth", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                if (($this->getAttribute($context["forum"], "depth", array()) > 0)) {
                    echo "</div>";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "      </td>
      ";
            // line 63
            if (($this->getAttribute($context["forum"], "is_container", array()) == false)) {
                // line 64
                echo "        <td>
          ";
                // line 65
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["forum"], "num_topics", array()), "html", null, true));
                echo "
          ";
                // line 66
                if (($this->getAttribute($context["forum"], "new_topics", array()) == true)) {
                    // line 67
                    echo "            <br />
            <a href=\"";
                    // line 68
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["forum"], "new_url", array()), "html", null, true));
                    echo "\">";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["forum"], "new_text", array()), "html", null, true));
                    echo "</a>
          ";
                }
                // line 70
                echo "        </td>
        <td>";
                // line 71
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["forum"], "num_posts", array()), "html", null, true));
                echo "</td>
        <td>";
                // line 72
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["forum"], "last_reply", array()), "html", null, true));
                echo "</td>
      ";
            }
            // line 74
            echo "    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['child_id'], $context['forum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "  </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "core/modules/forum/templates/forum-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 76,  164 => 74,  159 => 72,  155 => 71,  152 => 70,  145 => 68,  142 => 67,  140 => 66,  136 => 65,  133 => 64,  131 => 63,  128 => 62,  116 => 61,  110 => 59,  108 => 58,  102 => 57,  97 => 55,  92 => 54,  80 => 53,  74 => 47,  71 => 46,  67 => 45,  60 => 41,  56 => 40,  52 => 39,  48 => 38,  43 => 35,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a list of forums and containers.*/
/*  **/
/*  * Available variables:*/
/*  * - forums: A collection of forums and containers to display. It is keyed to*/
/*  *   the numeric IDs of all child forums and containers. Each forum in forums*/
/*  *   contains:*/
/*  *   - is_container: A flag indicating if the forum can contain other*/
/*  *     forums. Otherwise, the forum can only contain topics.*/
/*  *   - depth: How deep the forum is in the current hierarchy.*/
/*  *   - zebra: 'even' or 'odd', used for row class.*/
/*  *   - icon_class: 'default' or 'new', used for forum icon class.*/
/*  *   - icon_title: Text alternative for the forum icon.*/
/*  *   - name: The name of the forum.*/
/*  *   - link: The URL to link to this forum.*/
/*  *   - description: The description field for the forum, containing:*/
/*  *     - value: The descriptive text for the forum.*/
/*  *   - new_topics: A flag indicating if the forum contains unread posts.*/
/*  *   - new_url: A URL to the forum's unread posts.*/
/*  *   - new_text: Text for the above URL, which tells how many new posts.*/
/*  *   - old_topics: A count of posts that have already been read.*/
/*  *   - num_posts: The total number of posts in the forum.*/
/*  *   - last_reply: Text representing the last time a forum was posted or*/
/*  *     commented in.*/
/*  * - forum_id: Forum ID for the current forum. Parent to all items within the*/
/*  *   forums array.*/
/*  **/
/*  * @see template_preprocess_forum_list()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* <table>*/
/*   <thead>*/
/*     <tr>*/
/*       <th>{{ 'Forum'|t }}</th>*/
/*       <th>{{ 'Topics'|t }}</th>*/
/*       <th>{{ 'Posts'|t }}</th>*/
/*       <th>{{ 'Last post'|t }}</th>*/
/*     </tr>*/
/*   </thead>*/
/*   <tbody>*/
/*   {% for child_id, forum in forums %}*/
/*     <tr>*/
/*       <td{% if forum.is_container == true %} colspan="4"{% endif %}>*/
/*         {#*/
/*           Enclose the contents of this cell with X divs, where X is the*/
/*           depth this forum resides at. This will allow us to use CSS*/
/*           left-margin for indenting.*/
/*         #}*/
/*         {% for i in 1..forum.depth if forum.depth > 0 %}<div class="indent">{% endfor %}*/
/*           <div title="{{ forum.icon_title }}">*/
/*             <span class="visually-hidden">{{ forum.icon_title }}</span>*/
/*           </div>*/
/*           <div><a href="{{ forum.link }}">{{ forum.label }}</a></div>*/
/*           {% if forum.description.value %}*/
/*             <div>{{ forum.description.value }}</div>*/
/*           {% endif %}*/
/*         {% for i in 1..forum.depth if forum.depth > 0 %}</div>{% endfor %}*/
/*       </td>*/
/*       {% if forum.is_container == false %}*/
/*         <td>*/
/*           {{ forum.num_topics }}*/
/*           {% if forum.new_topics == true %}*/
/*             <br />*/
/*             <a href="{{ forum.new_url }}">{{ forum.new_text }}</a>*/
/*           {% endif %}*/
/*         </td>*/
/*         <td>{{ forum.num_posts }}</td>*/
/*         <td>{{ forum.last_reply }}</td>*/
/*       {% endif %}*/
/*     </tr>*/
/*   {% endfor %}*/
/*   </tbody>*/
/* </table>*/
/* */
