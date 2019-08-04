<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* index.html.twig */
class __TwigTemplate_db71b883dbdbb73e1f2a67c344e37c5b2239b7677dd1dd47d9ede150951f7431 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "BitCourse";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  <nav>
    <div id=\"pln\">-</div>
    <div id=\"eur\">-</div>
    <div id=\"gbp\">-</div>
    <div id=\"jpy\">-</div>
    <div id=\"chf\">-</div>
  </nav>
  <section>
    <p class=\"center\">Bitcoin price</p>
    <table>
      <tr>
        <th colspan=\"2\">Price</th>
        <th colspan=\"4\">Change %</th>
      </tr>
      <tr>
        <td rowspan=\"2\">Price</td>
        <td>Today</td>
        <td>Yesterday</td>
        <td>Week ago</td>
        <td>Month ago</td>
        <td>Year ago</td>
      </tr>
      <tr>
        <td id=\"usd\">-</td>
        <td id=\"yesterday\">-
        </td>
        <td id=\"weekago\">-
        </td>
        <td id=\"monthago\">-
        </td>
        <td id=\"yearago\">-
        </td>
      </tr>
    </table>
    <canvas id=\"myChart\" width=\"400\" height=\"150\"></canvas>
    <script>
      const ctx = document.getElementById('myChart').getContext('2d');
      const myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: [
            '6M',
            '3M',
            '2M',
            '1M',
            '3W',
            '2W',
            '1W',
            '6D',
            '5D',
            '4D',
            '3D',
            '2D',
            '1D',
            'Today'
          ],
          datasets: [
            {
              label: 'Bitcoin price',
              data: [
                ";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chart"]) || array_key_exists("chart", $context) ? $context["chart"] : (function () { throw new RuntimeError('Variable "chart" does not exist.', 66, $this->source); })()), 0, [], "any", false, false, false, 66), "html", null, true);
        echo ",
                ";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chart"]) || array_key_exists("chart", $context) ? $context["chart"] : (function () { throw new RuntimeError('Variable "chart" does not exist.', 67, $this->source); })()), 1, [], "any", false, false, false, 67), "html", null, true);
        echo ",
                ";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chart"]) || array_key_exists("chart", $context) ? $context["chart"] : (function () { throw new RuntimeError('Variable "chart" does not exist.', 68, $this->source); })()), 2, [], "any", false, false, false, 68), "html", null, true);
        echo ",
                ";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chart"]) || array_key_exists("chart", $context) ? $context["chart"] : (function () { throw new RuntimeError('Variable "chart" does not exist.', 69, $this->source); })()), 3, [], "any", false, false, false, 69), "html", null, true);
        echo ",
                ";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chart"]) || array_key_exists("chart", $context) ? $context["chart"] : (function () { throw new RuntimeError('Variable "chart" does not exist.', 70, $this->source); })()), 4, [], "any", false, false, false, 70), "html", null, true);
        echo ",
                ";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chart"]) || array_key_exists("chart", $context) ? $context["chart"] : (function () { throw new RuntimeError('Variable "chart" does not exist.', 71, $this->source); })()), 5, [], "any", false, false, false, 71), "html", null, true);
        echo ",
                ";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chart"]) || array_key_exists("chart", $context) ? $context["chart"] : (function () { throw new RuntimeError('Variable "chart" does not exist.', 72, $this->source); })()), 6, [], "any", false, false, false, 72), "html", null, true);
        echo ",
                ";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chart"]) || array_key_exists("chart", $context) ? $context["chart"] : (function () { throw new RuntimeError('Variable "chart" does not exist.', 73, $this->source); })()), 7, [], "any", false, false, false, 73), "html", null, true);
        echo ",
                ";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chart"]) || array_key_exists("chart", $context) ? $context["chart"] : (function () { throw new RuntimeError('Variable "chart" does not exist.', 74, $this->source); })()), 8, [], "any", false, false, false, 74), "html", null, true);
        echo ",
                ";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chart"]) || array_key_exists("chart", $context) ? $context["chart"] : (function () { throw new RuntimeError('Variable "chart" does not exist.', 75, $this->source); })()), 9, [], "any", false, false, false, 75), "html", null, true);
        echo ",
                ";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chart"]) || array_key_exists("chart", $context) ? $context["chart"] : (function () { throw new RuntimeError('Variable "chart" does not exist.', 76, $this->source); })()), 10, [], "any", false, false, false, 76), "html", null, true);
        echo ",
                ";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chart"]) || array_key_exists("chart", $context) ? $context["chart"] : (function () { throw new RuntimeError('Variable "chart" does not exist.', 77, $this->source); })()), 11, [], "any", false, false, false, 77), "html", null, true);
        echo ",
                ";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chart"]) || array_key_exists("chart", $context) ? $context["chart"] : (function () { throw new RuntimeError('Variable "chart" does not exist.', 78, $this->source); })()), 12, [], "any", false, false, false, 78), "html", null, true);
        echo ",
                ";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chart"]) || array_key_exists("chart", $context) ? $context["chart"] : (function () { throw new RuntimeError('Variable "chart" does not exist.', 79, $this->source); })()), 13, [], "any", false, false, false, 79), "html", null, true);
        echo ",
              ],
              backgroundColor: ['rgba(111, 111, 111, 0.2)'],
              borderColor: [
                'rgba(247,147,26, 1)',
                'rgba(247,147,26, 1)',
                'rgba(247,147,26, 1)',
                'rgba(247,147,26, 1)',
                'rgba(247,147,26, 1)',
                'rgba(247,147,26, 1)',
                'rgba(247,147,26, 1)',
                'rgba(247,147,26, 1)',
                'rgba(247,147,26, 1)',
                'rgba(247,147,26, 1)',
                'rgba(247,147,26, 1)',
                'rgba(247,147,26, 1)',
                'rgba(247,147,26, 1)',
                'rgba(247,147,26, 1)',
                'rgba(247,147,26, 1)',
                'rgba(247,147,26, 1)',
                'rgba(247,147,26, 1)',
                'rgba(247,147,26, 1)'
              ],
              borderWidth: 1
            }
          ]
        },
        options: {
          scales: {
            yAxes: [
              {
                ticks: {
                  beginAtZero: true
                }
              }
            ]
          }
        }
      });
    </script>
  </section>
  <footer>
    Updated (60 sec ): <span id=\"updated\">-</span> second ago | <a href=\"/data\">API</a> | Powered by <a href=\"https://www.coindesk.com/price/bitcoin\">CoinDesk</a>
  </footer>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 79,  198 => 78,  194 => 77,  190 => 76,  186 => 75,  182 => 74,  178 => 73,  174 => 72,  170 => 71,  166 => 70,  162 => 69,  158 => 68,  154 => 67,  150 => 66,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}BitCourse{% endblock %}

{% block body %}
  <nav>
    <div id=\"pln\">-</div>
    <div id=\"eur\">-</div>
    <div id=\"gbp\">-</div>
    <div id=\"jpy\">-</div>
    <div id=\"chf\">-</div>
  </nav>
  <section>
    <p class=\"center\">Bitcoin price</p>
    <table>
      <tr>
        <th colspan=\"2\">Price</th>
        <th colspan=\"4\">Change %</th>
      </tr>
      <tr>
        <td rowspan=\"2\">Price</td>
        <td>Today</td>
        <td>Yesterday</td>
        <td>Week ago</td>
        <td>Month ago</td>
        <td>Year ago</td>
      </tr>
      <tr>
        <td id=\"usd\">-</td>
        <td id=\"yesterday\">-
        </td>
        <td id=\"weekago\">-
        </td>
        <td id=\"monthago\">-
        </td>
        <td id=\"yearago\">-
        </td>
      </tr>
    </table>
    <canvas id=\"myChart\" width=\"400\" height=\"150\"></canvas>
    <script>
      const ctx = document.getElementById('myChart').getContext('2d');
      const myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: [
            '6M',
            '3M',
            '2M',
            '1M',
            '3W',
            '2W',
            '1W',
            '6D',
            '5D',
            '4D',
            '3D',
            '2D',
            '1D',
            'Today'
          ],
          datasets: [
            {
              label: 'Bitcoin price',
              data: [
                {{ chart.0 }},
                {{ chart.1 }},
                {{ chart.2 }},
                {{ chart.3 }},
                {{ chart.4 }},
                {{ chart.5 }},
                {{ chart.6 }},
                {{ chart.7 }},
                {{ chart.8 }},
                {{ chart.9 }},
                {{ chart.10 }},
                {{ chart.11 }},
                {{ chart.12 }},
                {{ chart.13 }},
              ],
              backgroundColor: ['rgba(111, 111, 111, 0.2)'],
              borderColor: [
                'rgba(247,147,26, 1)',
                'rgba(247,147,26, 1)',
                'rgba(247,147,26, 1)',
                'rgba(247,147,26, 1)',
                'rgba(247,147,26, 1)',
                'rgba(247,147,26, 1)',
                'rgba(247,147,26, 1)',
                'rgba(247,147,26, 1)',
                'rgba(247,147,26, 1)',
                'rgba(247,147,26, 1)',
                'rgba(247,147,26, 1)',
                'rgba(247,147,26, 1)',
                'rgba(247,147,26, 1)',
                'rgba(247,147,26, 1)',
                'rgba(247,147,26, 1)',
                'rgba(247,147,26, 1)',
                'rgba(247,147,26, 1)',
                'rgba(247,147,26, 1)'
              ],
              borderWidth: 1
            }
          ]
        },
        options: {
          scales: {
            yAxes: [
              {
                ticks: {
                  beginAtZero: true
                }
              }
            ]
          }
        }
      });
    </script>
  </section>
  <footer>
    Updated (60 sec ): <span id=\"updated\">-</span> second ago | <a href=\"/data\">API</a> | Powered by <a href=\"https://www.coindesk.com/price/bitcoin\">CoinDesk</a>
  </footer>
{% endblock %}
", "index.html.twig", "/home/marcys/Desktop/dev/BitCourse/templates/index.html.twig");
    }
}
