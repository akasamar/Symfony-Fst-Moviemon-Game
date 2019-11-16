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

/* @Game/default/fightarea.html.twig */
class __TwigTemplate_842c7a837f03c6a2b7f7f17995651e85d4f983decaf0f3100e89d8f6ae9ca602 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Game/default/fightarea.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Game/default/fightarea.html.twig"));

        $this->parent = $this->loadTemplate("@Game/layout.html.twig", "@Game/default/fightarea.html.twig", 1);
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
    <link rel=\"stylesheet\" href=\"css/fightarea.css\">
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
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-1\"></div>
            <div class=\"col-10\" style=\"background-color:yellow;text-align: center;\">
                <div class=\"area\">
                    <div class=\"me\"></div>
                    <div class=\"enemy\"></div>
                    <div class=\"fire\"></div>
                    <div class=\"electro\"></div>
                    <div class=\"score\">
                    </div>
                </div>
                <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("worldmap");
        echo "\"><div class=\"return\">Back to WorldMap</div></a>
                <div class=\"info\">
                    <p class=\"my_hp_info\">My HP: 100</p>
                    <p class=\"enemy_hp_info\">Enemy HP: 100</p>
                    <p>Your max attack: ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "strength"], "method"), "html", null, true);
        echo "</p>
                    <p class=\"enemystrength\"></p>
                </div>

                <div class=\"auto\">
                    <p>ATTACK!</p>
                    <div class=\"attack\"></div>
                </div>
            </div>
            <div class=\"col-1\"></div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 38
    public function block_js($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 39
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
    <script>
        ";
        // line 41
        $context["key"] = 0;
        // line 42
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["movies"] ?? $this->getContext($context, "movies")));
        foreach ($context['_seq'] as $context["_key"] => $context["films"]) {
            // line 43
            echo "        ";
            if ((($context["position"] ?? $this->getContext($context, "position")) == ($context["key"] ?? $this->getContext($context, "key")))) {
                // line 44
                echo "            \$('.enemy').css('background-image', 'url( ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["films"], "Poster", []), "html", null, true);
                echo " )');
            var enemyuron = parseInt(";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["films"], "max_attack", []), "html", null, true);
                echo ");
        ";
            }
            // line 47
            echo "        ";
            $context["key"] = (($context["key"] ?? $this->getContext($context, "key")) + 1);
            // line 48
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['films'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        \$('.enemystrength').text(\"Enemy max attack: \" + enemyuron);

        var attackPressed = false;
        var my_life = 100;
        var enemy_life = 100;
        var count_attack = 0;

        \$('.attack').click(function(){
            if (attackPressed)
                return ;
            attackPressed = true;
            \$('.auto p').css('background','orange');

            var enemy_uron = getRandomInt(enemyuron);
            var myuron = getRandomInt(parseInt(";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "strength"], "method"), "html", null, true);
        echo "));

            my_life = parseInt(my_life) - enemy_uron;
            enemy_life = parseInt(enemy_life) - myuron;

            \$('.my_hp_info').text('My HP: ' + my_life);
            \$('.enemy_hp_info').text('Enemy HP: ' + enemy_life);

            if (enemy_life <= 0) {
                alert('Congrats! You kill him!');
                \$.post( \"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("inactive");
        echo "\", {position: ";
        echo twig_escape_filter($this->env, ($context["position"] ?? $this->getContext($context, "position")), "html", null, true);
        echo " });
                window.location.href = '/worldmap';
            }
            else if (my_life <= 0){
                alert('Game over. You are dead :(');
                \$.post( \"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clear");
        echo "\", {} );
                window.location.href = '/';
            }

            attackAction(my_life,enemy_life,myuron,enemy_uron);
            setTimeout(function(){
                \$('.auto p').css('background','none');
                attackPressed = false;
            },500);
        });

        function getRandomInt(max) {
            return Math.floor(Math.random() * Math.floor(max));
        }

        function attackAction(my_life,enemy_life,myuron,enemy_uron){
            let attackresult = \"<p class='innerscore'><span style='color: #78ff9b;font-size: 23px;'>\"+ (++count_attack) +\")</span><span style=\\\"color: #00ff00\\\">You</span> attacked the <span style=\\\"color: red\\\">Enemy</span> with \" + myuron + \" strength and left him \"+enemy_life+\"</p>\" +
                \"<p style='border-bottom: 1px solid white;' class='innerscore'><span style=\\\"color: red\\\">Enemy</span> attacked <span style=\\\"color: #00ff00\\\">You</span> with \"+enemy_uron+\" strength and left you \"+my_life+\"</p>\";
            \$('.score').prepend(attackresult);
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Game/default/fightarea.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 78,  202 => 73,  189 => 63,  173 => 49,  167 => 48,  164 => 47,  159 => 45,  154 => 44,  151 => 43,  146 => 42,  144 => 41,  138 => 39,  129 => 38,  106 => 24,  99 => 20,  85 => 8,  76 => 7,  62 => 3,  53 => 2,  31 => 1,);
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
    <link rel=\"stylesheet\" href=\"css/fightarea.css\">
{% endblock %}

{% block main_page %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-1\"></div>
            <div class=\"col-10\" style=\"background-color:yellow;text-align: center;\">
                <div class=\"area\">
                    <div class=\"me\"></div>
                    <div class=\"enemy\"></div>
                    <div class=\"fire\"></div>
                    <div class=\"electro\"></div>
                    <div class=\"score\">
                    </div>
                </div>
                <a href=\"{{ path('worldmap') }}\"><div class=\"return\">Back to WorldMap</div></a>
                <div class=\"info\">
                    <p class=\"my_hp_info\">My HP: 100</p>
                    <p class=\"enemy_hp_info\">Enemy HP: 100</p>
                    <p>Your max attack: {{ app.session.get('strength') }}</p>
                    <p class=\"enemystrength\"></p>
                </div>

                <div class=\"auto\">
                    <p>ATTACK!</p>
                    <div class=\"attack\"></div>
                </div>
            </div>
            <div class=\"col-1\"></div>
        </div>
    </div>
{% endblock %}

{%  block js %}
    {{ parent() }}
    <script>
        {% set key = 0 %}
        {% for films in movies %}
        {% if position == key  %}
            \$('.enemy').css('background-image', 'url( {{ films.Poster}} )');
            var enemyuron = parseInt({{ films.max_attack }});
        {% endif %}
        {% set key = key + 1 %}
        {% endfor %}
        \$('.enemystrength').text(\"Enemy max attack: \" + enemyuron);

        var attackPressed = false;
        var my_life = 100;
        var enemy_life = 100;
        var count_attack = 0;

        \$('.attack').click(function(){
            if (attackPressed)
                return ;
            attackPressed = true;
            \$('.auto p').css('background','orange');

            var enemy_uron = getRandomInt(enemyuron);
            var myuron = getRandomInt(parseInt({{ app.session.get('strength') }}));

            my_life = parseInt(my_life) - enemy_uron;
            enemy_life = parseInt(enemy_life) - myuron;

            \$('.my_hp_info').text('My HP: ' + my_life);
            \$('.enemy_hp_info').text('Enemy HP: ' + enemy_life);

            if (enemy_life <= 0) {
                alert('Congrats! You kill him!');
                \$.post( \"{{ path('inactive') }}\", {position: {{position}} });
                window.location.href = '/worldmap';
            }
            else if (my_life <= 0){
                alert('Game over. You are dead :(');
                \$.post( \"{{ path('clear') }}\", {} );
                window.location.href = '/';
            }

            attackAction(my_life,enemy_life,myuron,enemy_uron);
            setTimeout(function(){
                \$('.auto p').css('background','none');
                attackPressed = false;
            },500);
        });

        function getRandomInt(max) {
            return Math.floor(Math.random() * Math.floor(max));
        }

        function attackAction(my_life,enemy_life,myuron,enemy_uron){
            let attackresult = \"<p class='innerscore'><span style='color: #78ff9b;font-size: 23px;'>\"+ (++count_attack) +\")</span><span style=\\\"color: #00ff00\\\">You</span> attacked the <span style=\\\"color: red\\\">Enemy</span> with \" + myuron + \" strength and left him \"+enemy_life+\"</p>\" +
                \"<p style='border-bottom: 1px solid white;' class='innerscore'><span style=\\\"color: red\\\">Enemy</span> attacked <span style=\\\"color: #00ff00\\\">You</span> with \"+enemy_uron+\" strength and left you \"+my_life+\"</p>\";
            \$('.score').prepend(attackresult);
        }
    </script>
{% endblock %}", "@Game/default/fightarea.html.twig", "/Users/akasamar/Desktop/SymfonyGame/proj/src/GameBundle/Resources/views/default/fightarea.html.twig");
    }
}
