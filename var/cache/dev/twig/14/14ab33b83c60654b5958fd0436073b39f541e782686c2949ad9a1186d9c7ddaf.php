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

/* @Game/default/index.html.twig */
class __TwigTemplate_fc74d42c1fb28f882f8b0242743584c5f4e12009a54fb01b682fb5834665ba5d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Game/default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Game/default/index.html.twig"));

        $this->parent = $this->loadTemplate("@Game/layout.html.twig", "@Game/default/index.html.twig", 1);
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
    <link rel=\"stylesheet\" href=\"css/index.css\">
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
        echo "    <div class=\"mainstartblock\">
        <button id=\"new\" type=\"button\" class=\"btn btn-success\">New</button>
        <button id=\"save\" type=\"button\" class=\"btn btn-primary\">Save</button>
        <button id=\"load\" type=\"button\" class=\"btn btn-primary\">Load</button>
        ";
        // line 12
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "name"], "method")) {
            // line 13
            echo "            <button id=\"cancel\" type=\"button\" class=\"btn btn-danger\">Cancel</button>
        ";
        }
        // line 15
        echo "        <br>
        <br>
        <div class=\"playerName\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
        <div class=\"loadGame\">
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["files"] ?? $this->getContext($context, "files")));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 24
            echo "                <button class=\"files__btn\" type=\"button\">";
            echo twig_escape_filter($this->env, $context["file"], "html", null, true);
            echo "</button>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_js($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 31
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
    <script>
        \$('.playerName').hide();
        \$('.loadGame').hide();

    \$('#new').click(function(){
        \$('.playerName').show();
    });

    \$('#cancel').click(function(){
        ";
        // line 41
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "name"], "method")) {
            // line 42
            echo "            window.location.href = \"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("worldmap");
            echo "\";
        ";
        }
        // line 44
        echo "    });

    \$('#save').click(function(){
        \$.post( \"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("save");
        echo "\", function() {
        })
            .done(function() {
                alert( \"success\" );
            })
            .fail(function() {
                alert( \"Something went wrong\" );
            })
    });

        \$('#load').click(function(){
            \$('.loadGame').show();
        });

        \$('.files__btn').on('click', function(e) {
            var filename = \$(e.target).text();
            \$.ajax({
                type: 'GET',
                url: \"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("load");
        echo "\",
                data: {
                    filename: filename
                },
                success: function(data) {
                    if (data.success === true) {
                        window.location.href = \"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("worldmap");
        echo "\";
                    }
                },
                error: function(error) {
                    console.log(error);
                }
            });
        });

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Game/default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 71,  198 => 65,  177 => 47,  172 => 44,  166 => 42,  164 => 41,  150 => 31,  141 => 30,  129 => 26,  120 => 24,  116 => 23,  110 => 20,  106 => 19,  102 => 18,  97 => 15,  93 => 13,  91 => 12,  85 => 8,  76 => 7,  62 => 3,  53 => 2,  31 => 1,);
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
    <link rel=\"stylesheet\" href=\"css/index.css\">
{% endblock %}

{% block main_page %}
    <div class=\"mainstartblock\">
        <button id=\"new\" type=\"button\" class=\"btn btn-success\">New</button>
        <button id=\"save\" type=\"button\" class=\"btn btn-primary\">Save</button>
        <button id=\"load\" type=\"button\" class=\"btn btn-primary\">Load</button>
        {% if app.session.get('name') %}
            <button id=\"cancel\" type=\"button\" class=\"btn btn-danger\">Cancel</button>
        {% endif %}
        <br>
        <br>
        <div class=\"playerName\">
            {{ form_start(form) }}
            {{ form_widget(form) }}
            {{ form_end(form) }}
        </div>
        <div class=\"loadGame\">
            {% for file in files %}
                <button class=\"files__btn\" type=\"button\">{{ file }}</button>
            {% endfor %}
        </div>
    </div>
{% endblock %}

{% block js %}
    {{ parent() }}
    <script>
        \$('.playerName').hide();
        \$('.loadGame').hide();

    \$('#new').click(function(){
        \$('.playerName').show();
    });

    \$('#cancel').click(function(){
        {% if app.session.get('name') %}
            window.location.href = \"{{ path('worldmap') }}\";
        {% endif %}
    });

    \$('#save').click(function(){
        \$.post( \"{{ path('save') }}\", function() {
        })
            .done(function() {
                alert( \"success\" );
            })
            .fail(function() {
                alert( \"Something went wrong\" );
            })
    });

        \$('#load').click(function(){
            \$('.loadGame').show();
        });

        \$('.files__btn').on('click', function(e) {
            var filename = \$(e.target).text();
            \$.ajax({
                type: 'GET',
                url: \"{{ url('load') }}\",
                data: {
                    filename: filename
                },
                success: function(data) {
                    if (data.success === true) {
                        window.location.href = \"{{ url('worldmap') }}\";
                    }
                },
                error: function(error) {
                    console.log(error);
                }
            });
        });

    </script>
{% endblock %}", "@Game/default/index.html.twig", "/Users/akasamar/Desktop/SymfonyGame/proj/src/GameBundle/Resources/views/default/index.html.twig");
    }
}
