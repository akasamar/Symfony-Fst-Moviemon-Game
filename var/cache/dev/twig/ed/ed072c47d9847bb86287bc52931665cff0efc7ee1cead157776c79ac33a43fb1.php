<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Game/default/worldmap.html.twig */
class __TwigTemplate_cff21b2771960c633e1b2d53ae513622fa8d1fc603f5e5e8077dafa28509c349 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'main_page' => [$this, 'block_main_page'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Game/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Game/default/worldmap.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Game/default/worldmap.html.twig"));

        $this->parent = $this->loadTemplate("@Game/layout.html.twig", "@Game/default/worldmap.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_css($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 3
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"css/worldmap.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_main_page($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_page"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_page"));

        // line 8
        echo "    <div class=\"container min\">
        <div class=\"row\">
            <div class=\"col-12\" style=\"background:#cec8ff;text-align: center\">
                <div style=\"width:100%;margin:10px 0;\">
                    <div style=\"display: inline-block\" id=\"fight\"></div>
                    <div>
                        <div style=\"display: inline-block\">
                            <p>Name: ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "name"], "method"), "html", null, true);
        echo "</p>
                            <i style=\"color: red;padding-bottom: 3px;\" class=\"fas fa-heart\"></i>
                            <progress max=\"100\" value=\"70\" ></progress>
                        </div>
                    </div>
                </div>
                ";
        // line 21
        $context["count"] = 0;
        // line 22
        echo "                ";
        $context["count2"] = 0;
        // line 23
        echo "                ";
        $context["allDead"] = 1;
        // line 24
        echo "                <div>
                    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["movies"] ?? $this->getContext($context, "movies")));
        foreach ($context['_seq'] as $context["_key"] => $context["films"]) {
            // line 26
            echo "                        ";
            if (($this->getAttribute($context["films"], "alive", []) == 1)) {
                // line 27
                echo "                            ";
                $context["allDead"] = 0;
                // line 28
                echo "                        ";
            }
            // line 29
            echo "
                        ";
            // line 30
            if ((($context["count2"] ?? $this->getContext($context, "count2")) != 12)) {
                // line 31
                echo "                        <div class=\"field inline\" style=\"    ";
                if (($this->getAttribute($context["films"], "alive", []) == 0)) {
                    echo "filter: grayscale(100%);";
                }
                echo "background-image:url(";
                echo twig_escape_filter($this->env, $this->getAttribute($context["films"], "Poster", []), "html", null, true);
                echo ");background-size: 100% 100%;\">
                        </div>
                            ";
                // line 33
                $context["count"] = (($context["count"] ?? $this->getContext($context, "count")) + 2);
                // line 34
                echo "                        ";
            } else {
                // line 35
                echo "                            <div class=\"field inline\"><div class=\"pokeball\"></div></div>
                            <div class=\"field inline\" style=\"    ";
                // line 36
                if (($this->getAttribute($context["films"], "alive", []) == 0)) {
                    echo "filter: grayscale(100%);";
                }
                echo "background-image:url(";
                echo twig_escape_filter($this->env, $this->getAttribute($context["films"], "Poster", []), "html", null, true);
                echo ");background-size: 100% 100%;\">
                            </div>
                            ";
                // line 38
                $context["count"] = (($context["count"] ?? $this->getContext($context, "count")) + 1);
                // line 39
                echo "                        ";
            }
            // line 40
            echo "
                        ";
            // line 41
            if ((($context["count"] ?? $this->getContext($context, "count")) == 5)) {
                // line 42
                echo "                            ";
                $context["count"] = 0;
                // line 43
                echo "                            </div><div>
                        ";
            }
            // line 45
            echo "                        ";
            $context["count2"] = (($context["count2"] ?? $this->getContext($context, "count2")) + 1);
            // line 46
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['films'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
                    ";
        // line 48
        if (($context["allDead"] ?? $this->getContext($context, "allDead"))) {
            // line 49
            echo "                        <script>
                            alert('You killed all!! MALADEC!');
                        </script>
                    ";
        }
        // line 53
        echo "                </div>
                <a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\"><div class=\"return\">Back to Main Menu</div></a>
            </div>
        </div>
    </div>
    <div id=\"list\">
        <h3 style=\"background: red;text-align: center\">Your result</h3>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_js($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 65
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
    <script>
        var position = 12;
        var count = 0;
        var pokeball = \"/pokeball.png\";

        \$(document).keydown(function(e){
            e = e || window.event;

            if (e.keyCode == '38') {
                if (position - 5 < 0)
                    return;
                position -= 5;
                changePosPokeball(position);
            }
            else if (e.keyCode == '40') {
                if (position + 5 > 24)
                    return;
                position += 5;
                changePosPokeball(position);
            }
            else if (e.keyCode == '37') {
                if (position - 1 == 4 || position - 1 == 9 || position - 1 == 14
                    ||  position - 1 == 19 || position - 1 < 0)
                    return;
                position--;
                changePosPokeball(position);
            }
            else if (e.keyCode == '39') {
                if (position + 1 == 5 || position + 1 == 10 || position + 1 == 15
                    ||  position + 1 == 20 || position + 1 > 24)
                    return;
                position++;
                changePosPokeball(position);
            }
            else if (e.keyCode == '13') {
                if (position == 12)
                    return;
                if (position < 12)
                    window.location.href = '";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fightarea");
        echo "?position=' + position;
                else
                    window.location.href = '";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fightarea");
        echo "?position=' + parseInt(position - 1);
            }
        });
        var arrayMovimons = [];

        \$(document).ready(function(){
            getKillResult();
        });

        \$('#fight').click(function(){

            if (position == 12)
                return;
            if (position < 12)
                window.location.href = '";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fightarea");
        echo "?position=' + position;
            else
                window.location.href = '";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fightarea");
        echo "?position=' + parseInt(position - 1);
        });

        function changePosPokeball(pos){
            let count = 0;
            \$('.field').each(function(){
                if (count == pos)
                    \$(this).append('<div class=\"pokeball\"></div>');
                else
                    \$(this).find('.pokeball').remove();
                count++;
            });

        };

        function getKillResult(){
            var res = [];
            ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["movies"] ?? $this->getContext($context, "movies")));
        foreach ($context['_seq'] as $context["_key"] => $context["films"]) {
            // line 140
            echo "                ";
            if (($this->getAttribute($context["films"], "alive", []) == 0)) {
                // line 141
                echo "
                \$('#list').append(\"<p style='padding-left:3px;width:270px;word-wrap: break-word;'>I killed ";
                // line 142
                echo twig_escape_filter($this->env, $this->getAttribute($context["films"], "Title", []), "html", null, true);
                echo " with ID ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["films"], "imdbID", []), "html", null, true);
                echo "</p><hr>\");
                ";
            }
            // line 144
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['films'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "        }

    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Game/default/worldmap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  340 => 145,  334 => 144,  327 => 142,  324 => 141,  321 => 140,  317 => 139,  297 => 122,  292 => 120,  275 => 106,  270 => 104,  227 => 65,  218 => 64,  199 => 54,  196 => 53,  190 => 49,  188 => 48,  185 => 47,  179 => 46,  176 => 45,  172 => 43,  169 => 42,  167 => 41,  164 => 40,  161 => 39,  159 => 38,  150 => 36,  147 => 35,  144 => 34,  142 => 33,  132 => 31,  130 => 30,  127 => 29,  124 => 28,  121 => 27,  118 => 26,  114 => 25,  111 => 24,  108 => 23,  105 => 22,  103 => 21,  94 => 15,  85 => 8,  76 => 7,  62 => 3,  53 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@Game/layout.html.twig\" %}
{% block css %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"css/worldmap.css\">
{% endblock %}

{% block main_page %}
    <div class=\"container min\">
        <div class=\"row\">
            <div class=\"col-12\" style=\"background:#cec8ff;text-align: center\">
                <div style=\"width:100%;margin:10px 0;\">
                    <div style=\"display: inline-block\" id=\"fight\"></div>
                    <div>
                        <div style=\"display: inline-block\">
                            <p>Name: {{ app.session.get('name') }}</p>
                            <i style=\"color: red;padding-bottom: 3px;\" class=\"fas fa-heart\"></i>
                            <progress max=\"100\" value=\"70\" ></progress>
                        </div>
                    </div>
                </div>
                {% set count = 0 %}
                {% set count2 = 0 %}
                {% set allDead = 1 %}
                <div>
                    {% for films in movies %}
                        {% if films.alive == 1 %}
                            {% set allDead = 0 %}
                        {% endif %}

                        {% if count2 != 12 %}
                        <div class=\"field inline\" style=\"    {% if films.alive == 0 %}filter: grayscale(100%);{% endif %}background-image:url({{ films.Poster }});background-size: 100% 100%;\">
                        </div>
                            {% set count = count + 2 %}
                        {% else %}
                            <div class=\"field inline\"><div class=\"pokeball\"></div></div>
                            <div class=\"field inline\" style=\"    {% if films.alive == 0 %}filter: grayscale(100%);{% endif %}background-image:url({{ films.Poster }});background-size: 100% 100%;\">
                            </div>
                            {% set count = count + 1 %}
                        {% endif %}

                        {% if count == 5 %}
                            {% set count = 0 %}
                            </div><div>
                        {% endif %}
                        {% set count2 = count2 + 1 %}
                    {% endfor %}

                    {% if allDead %}
                        <script>
                            alert('You killed all!! MALADEC!');
                        </script>
                    {% endif %}
                </div>
                <a href=\"{{ path('index') }}\"><div class=\"return\">Back to Main Menu</div></a>
            </div>
        </div>
    </div>
    <div id=\"list\">
        <h3 style=\"background: red;text-align: center\">Your result</h3>
    </div>

{% endblock %}

{%  block js %}
    {{ parent() }}
    <script>
        var position = 12;
        var count = 0;
        var pokeball = \"/pokeball.png\";

        \$(document).keydown(function(e){
            e = e || window.event;

            if (e.keyCode == '38') {
                if (position - 5 < 0)
                    return;
                position -= 5;
                changePosPokeball(position);
            }
            else if (e.keyCode == '40') {
                if (position + 5 > 24)
                    return;
                position += 5;
                changePosPokeball(position);
            }
            else if (e.keyCode == '37') {
                if (position - 1 == 4 || position - 1 == 9 || position - 1 == 14
                    ||  position - 1 == 19 || position - 1 < 0)
                    return;
                position--;
                changePosPokeball(position);
            }
            else if (e.keyCode == '39') {
                if (position + 1 == 5 || position + 1 == 10 || position + 1 == 15
                    ||  position + 1 == 20 || position + 1 > 24)
                    return;
                position++;
                changePosPokeball(position);
            }
            else if (e.keyCode == '13') {
                if (position == 12)
                    return;
                if (position < 12)
                    window.location.href = '{{ path('fightarea') }}?position=' + position;
                else
                    window.location.href = '{{ path('fightarea') }}?position=' + parseInt(position - 1);
            }
        });
        var arrayMovimons = [];

        \$(document).ready(function(){
            getKillResult();
        });

        \$('#fight').click(function(){

            if (position == 12)
                return;
            if (position < 12)
                window.location.href = '{{ path('fightarea') }}?position=' + position;
            else
                window.location.href = '{{ path('fightarea') }}?position=' + parseInt(position - 1);
        });

        function changePosPokeball(pos){
            let count = 0;
            \$('.field').each(function(){
                if (count == pos)
                    \$(this).append('<div class=\"pokeball\"></div>');
                else
                    \$(this).find('.pokeball').remove();
                count++;
            });

        };

        function getKillResult(){
            var res = [];
            {% for films in movies %}
                {% if films.alive == 0 %}

                \$('#list').append(\"<p style='padding-left:3px;width:270px;word-wrap: break-word;'>I killed {{ films.Title }} with ID {{ films.imdbID }}</p><hr>\");
                {% endif %}
            {% endfor %}
        }

    </script>

{% endblock %}", "@Game/default/worldmap.html.twig", "/Users/akasamar/Desktop/SymfonyGame/proj/src/GameBundle/Resources/views/default/worldmap.html.twig");
    }
}
