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

/* application/purchase.html.twig */
class __TwigTemplate_256902f4ae9460938dae648da69382ca extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'h3' => [$this, 'block_h3'],
            'title' => [$this, 'block_title'],
            'logo' => [$this, 'block_logo'],
            'legend' => [$this, 'block_legend'],
            'legend_response' => [$this, 'block_legend_response'],
            'name_product' => [$this, 'block_name_product'],
            'price_product' => [$this, 'block_price_product'],
            'h2_calculate_price' => [$this, 'block_h2_calculate_price'],
            'form_calculate_price' => [$this, 'block_form_calculate_price'],
            'table_calculate_price' => [$this, 'block_table_calculate_price'],
            'tbody_calculate_price' => [$this, 'block_tbody_calculate_price'],
            'h2_purchase' => [$this, 'block_h2_purchase'],
            'form_purchase' => [$this, 'block_form_purchase'],
            'json_response' => [$this, 'block_json_response'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "application/purchase.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "application/purchase.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "application/purchase.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_h3($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "h3"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "h3"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["title_logo"]) || array_key_exists("title_logo", $context) ? $context["title_logo"] : (function () { throw new RuntimeError('Variable "title_logo" does not exist.', 5, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_logo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "logo"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "logo"));

        echo twig_escape_filter($this->env, (isset($context["title_logo"]) || array_key_exists("title_logo", $context) ? $context["title_logo"] : (function () { throw new RuntimeError('Variable "title_logo" does not exist.', 7, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_legend($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "legend"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "legend"));

        echo twig_escape_filter($this->env, (isset($context["legend"]) || array_key_exists("legend", $context) ? $context["legend"] : (function () { throw new RuntimeError('Variable "legend" does not exist.', 9, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_legend_response($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "legend_response"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "legend_response"));

        echo twig_escape_filter($this->env, (isset($context["legend_response"]) || array_key_exists("legend_response", $context) ? $context["legend_response"] : (function () { throw new RuntimeError('Variable "legend_response" does not exist.', 11, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_name_product($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "name_product"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "name_product"));

        // line 14
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr_products"]) || array_key_exists("arr_products", $context) ? $context["arr_products"] : (function () { throw new RuntimeError('Variable "arr_products" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["value_product"]) {
            echo " 

            <th>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value_product"], "getNameProduct", [], "method", false, false, false, 16), "html", null, true);
            echo "</th>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 21
    public function block_price_product($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "price_product"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "price_product"));

        // line 22
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr_products"]) || array_key_exists("arr_products", $context) ? $context["arr_products"] : (function () { throw new RuntimeError('Variable "arr_products" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["value_product"]) {
            echo " 

        <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value_product"], "getPriceProduct", [], "method", false, false, false, 24), "html", null, true);
            echo " euro</td>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value_product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 29
    public function block_h2_calculate_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "h2_calculate_price"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "h2_calculate_price"));

        // line 30
        echo "    <br><h2>Select the product, if available, specify the discount coupon, 
    specify the tax number</h2>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 34
    public function block_form_calculate_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_calculate_price"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_calculate_price"));

        echo " 

    ";
        // line 37
        echo "    
    ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_purchase"]) || array_key_exists("form_purchase", $context) ? $context["form_purchase"] : (function () { throw new RuntimeError('Variable "form_purchase" does not exist.', 38, $this->source); })()), 'form_start');
        echo "

        <th>";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_purchase"]) || array_key_exists("form_purchase", $context) ? $context["form_purchase"] : (function () { throw new RuntimeError('Variable "form_purchase" does not exist.', 40, $this->source); })()), "products", [], "any", false, false, false, 40), 'label');
        echo "<br>
        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_purchase"]) || array_key_exists("form_purchase", $context) ? $context["form_purchase"] : (function () { throw new RuntimeError('Variable "form_purchase" does not exist.', 41, $this->source); })()), "products", [], "any", false, false, false, 41), 'widget');
        echo "<br>
        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_purchase"]) || array_key_exists("form_purchase", $context) ? $context["form_purchase"] : (function () { throw new RuntimeError('Variable "form_purchase" does not exist.', 42, $this->source); })()), "products", [], "any", false, false, false, 42), 'errors');
        echo "</th>

        <th>";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_purchase"]) || array_key_exists("form_purchase", $context) ? $context["form_purchase"] : (function () { throw new RuntimeError('Variable "form_purchase" does not exist.', 44, $this->source); })()), "coupons", [], "any", false, false, false, 44), 'label');
        echo "<br>
        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_purchase"]) || array_key_exists("form_purchase", $context) ? $context["form_purchase"] : (function () { throw new RuntimeError('Variable "form_purchase" does not exist.', 45, $this->source); })()), "coupons", [], "any", false, false, false, 45), 'widget');
        echo "<br>
        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr_error"]) || array_key_exists("arr_error", $context) ? $context["arr_error"] : (function () { throw new RuntimeError('Variable "arr_error" does not exist.', 46, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 47
            echo "           ";
            if (($context["key"] == "coupon")) {
                // line 48
                echo "                ";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "
            ";
            }
            // line 49
            echo "    
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_purchase"]) || array_key_exists("form_purchase", $context) ? $context["form_purchase"] : (function () { throw new RuntimeError('Variable "form_purchase" does not exist.', 51, $this->source); })()), "coupons", [], "any", false, false, false, 51), 'errors');
        echo "</th>

        <th>";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_purchase"]) || array_key_exists("form_purchase", $context) ? $context["form_purchase"] : (function () { throw new RuntimeError('Variable "form_purchase" does not exist.', 53, $this->source); })()), "taxes", [], "any", false, false, false, 53), 'label');
        echo "<br>
        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_purchase"]) || array_key_exists("form_purchase", $context) ? $context["form_purchase"] : (function () { throw new RuntimeError('Variable "form_purchase" does not exist.', 54, $this->source); })()), "taxes", [], "any", false, false, false, 54), 'widget');
        echo "<br>
        ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr_error"]) || array_key_exists("arr_error", $context) ? $context["arr_error"] : (function () { throw new RuntimeError('Variable "arr_error" does not exist.', 55, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            echo "  
            ";
            // line 56
            if (($context["key"] == "taxe")) {
                // line 57
                echo "                ";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "
            ";
            }
            // line 58
            echo " 
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_purchase"]) || array_key_exists("form_purchase", $context) ? $context["form_purchase"] : (function () { throw new RuntimeError('Variable "form_purchase" does not exist.', 60, $this->source); })()), "taxes", [], "any", false, false, false, 60), 'errors');
        echo "</th>

        <th>";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_purchase"]) || array_key_exists("form_purchase", $context) ? $context["form_purchase"] : (function () { throw new RuntimeError('Variable "form_purchase" does not exist.', 62, $this->source); })()), "payment_processor", [], "any", false, false, false, 62), 'label');
        echo "<br>
        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_purchase"]) || array_key_exists("form_purchase", $context) ? $context["form_purchase"] : (function () { throw new RuntimeError('Variable "form_purchase" does not exist.', 63, $this->source); })()), "payment_processor", [], "any", false, false, false, 63), 'widget');
        echo "<br>
        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_purchase"]) || array_key_exists("form_purchase", $context) ? $context["form_purchase"] : (function () { throw new RuntimeError('Variable "form_purchase" does not exist.', 64, $this->source); })()), "payment_processor", [], "any", false, false, false, 64), 'errors');
        echo "</th>

         <th>";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_purchase"]) || array_key_exists("form_purchase", $context) ? $context["form_purchase"] : (function () { throw new RuntimeError('Variable "form_purchase" does not exist.', 66, $this->source); })()), "button", [], "any", false, false, false, 66), 'widget', ["label" => "Calculate", "attr" => ["class" => "save"]]);
        echo "</th>

    ";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_purchase"]) || array_key_exists("form_purchase", $context) ? $context["form_purchase"] : (function () { throw new RuntimeError('Variable "form_purchase" does not exist.', 68, $this->source); })()), 'form_end');
        echo "
   
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 73
    public function block_table_calculate_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_calculate_price"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_calculate_price"));

        // line 75
        if ( !twig_test_empty((isset($context["find_Product"]) || array_key_exists("find_Product", $context) ? $context["find_Product"] : (function () { throw new RuntimeError('Variable "find_Product" does not exist.', 75, $this->source); })()))) {
            // line 76
            echo "            <th>Product price</th>
            <th>Coupon</th>
            <th>Tax</th>
            <th>Payment method</th>
            <th>Total amount</th>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 84
    public function block_tbody_calculate_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody_calculate_price"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody_calculate_price"));

        // line 85
        echo "
    <tr>
        ";
        // line 87
        if ( !twig_test_empty((isset($context["find_Product"]) || array_key_exists("find_Product", $context) ? $context["find_Product"] : (function () { throw new RuntimeError('Variable "find_Product" does not exist.', 87, $this->source); })()))) {
            // line 88
            echo "
            <td>";
            // line 89
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["find_Product"] ?? null), "getPriceProduct", [], "method", true, true, false, 89)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["find_Product"] ?? null), "getPriceProduct", [], "method", false, false, false, 89), "")) : ("")), "html", null, true);
            echo " euro</td>
                            
            <td>";
            // line 91
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["find_one_by_coupon"] ?? null), "getDiscount", [], "method", true, true, false, 91)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["find_one_by_coupon"] ?? null), "getDiscount", [], "method", false, false, false, 91), "")) : ("")), "html", null, true);
            echo "
            ";
            // line 92
            if ( !twig_test_empty((isset($context["find_one_by_coupon"]) || array_key_exists("find_one_by_coupon", $context) ? $context["find_one_by_coupon"] : (function () { throw new RuntimeError('Variable "find_one_by_coupon" does not exist.', 92, $this->source); })()))) {
                // line 93
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["find_one_by_coupon"]) || array_key_exists("find_one_by_coupon", $context) ? $context["find_one_by_coupon"] : (function () { throw new RuntimeError('Variable "find_one_by_coupon" does not exist.', 93, $this->source); })()), "getIdTypeCoupon", [], "method", false, false, false, 93), "getId", [], "method", false, false, false, 93) == 1)) {
                    // line 94
                    echo "                    %
                ";
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 95
(isset($context["find_one_by_coupon"]) || array_key_exists("find_one_by_coupon", $context) ? $context["find_one_by_coupon"] : (function () { throw new RuntimeError('Variable "find_one_by_coupon" does not exist.', 95, $this->source); })()), "getIdTypeCoupon", [], "method", false, false, false, 95), "getId", [], "method", false, false, false, 95) == 2)) {
                    // line 96
                    echo "                    euro
                ";
                }
                // line 98
                echo "            ";
            }
            echo "</td>

            <td>";
            // line 100
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["find_one_by_tax"] ?? null), "getTaxRate", [], "method", true, true, false, 100)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["find_one_by_tax"] ?? null), "getTaxRate", [], "method", false, false, false, 100), "")) : ("")), "html", null, true);
            echo " %</td>

            <td>";
            // line 102
            echo twig_escape_filter($this->env, ((array_key_exists("payment_methods", $context)) ? (_twig_default_filter((isset($context["payment_methods"]) || array_key_exists("payment_methods", $context) ? $context["payment_methods"] : (function () { throw new RuntimeError('Variable "payment_methods" does not exist.', 102, $this->source); })()), "")) : ("")), "html", null, true);
            echo "</td>

            <td>";
            // line 104
            if (( !twig_test_empty((isset($context["find_one_by_coupon"]) || array_key_exists("find_one_by_coupon", $context) ? $context["find_one_by_coupon"] : (function () { throw new RuntimeError('Variable "find_one_by_coupon" does not exist.', 104, $this->source); })())) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["find_one_by_coupon"]) || array_key_exists("find_one_by_coupon", $context) ? $context["find_one_by_coupon"] : (function () { throw new RuntimeError('Variable "find_one_by_coupon" does not exist.', 104, $this->source); })()), "getIdTypeCoupon", [], "method", false, false, false, 104), "getId", [], "method", false, false, false, 104) == 1))) {
                // line 105
                echo "                    ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["find_Product"]) || array_key_exists("find_Product", $context) ? $context["find_Product"] : (function () { throw new RuntimeError('Variable "find_Product" does not exist.', 105, $this->source); })()), "getPriceProduct", [], "method", false, false, false, 105) - ((twig_get_attribute($this->env, $this->source,                 // line 106
(isset($context["find_Product"]) || array_key_exists("find_Product", $context) ? $context["find_Product"] : (function () { throw new RuntimeError('Variable "find_Product" does not exist.', 106, $this->source); })()), "getPriceProduct", [], "method", false, false, false, 106) / 100) * twig_get_attribute($this->env, $this->source, (isset($context["find_one_by_coupon"]) || array_key_exists("find_one_by_coupon", $context) ? $context["find_one_by_coupon"] : (function () { throw new RuntimeError('Variable "find_one_by_coupon" does not exist.', 106, $this->source); })()), "getDiscount", [], "method", false, false, false, 106))) + (((twig_get_attribute($this->env, $this->source,                 // line 107
(isset($context["find_Product"]) || array_key_exists("find_Product", $context) ? $context["find_Product"] : (function () { throw new RuntimeError('Variable "find_Product" does not exist.', 107, $this->source); })()), "getPriceProduct", [], "method", false, false, false, 107) - ((twig_get_attribute($this->env, $this->source, (isset($context["find_Product"]) || array_key_exists("find_Product", $context) ? $context["find_Product"] : (function () { throw new RuntimeError('Variable "find_Product" does not exist.', 107, $this->source); })()), "getPriceProduct", [], "method", false, false, false, 107) / 100) * twig_get_attribute($this->env, $this->source,                 // line 108
(isset($context["find_one_by_coupon"]) || array_key_exists("find_one_by_coupon", $context) ? $context["find_one_by_coupon"] : (function () { throw new RuntimeError('Variable "find_one_by_coupon" does not exist.', 108, $this->source); })()), "getDiscount", [], "method", false, false, false, 108))) / 100) * twig_get_attribute($this->env, $this->source,                 // line 109
(isset($context["find_one_by_tax"]) || array_key_exists("find_one_by_tax", $context) ? $context["find_one_by_tax"] : (function () { throw new RuntimeError('Variable "find_one_by_tax" does not exist.', 109, $this->source); })()), "getTaxRate", [], "method", false, false, false, 109))), "html", null, true);
                echo "
                ";
            } elseif (( !twig_test_empty(            // line 110
(isset($context["find_one_by_coupon"]) || array_key_exists("find_one_by_coupon", $context) ? $context["find_one_by_coupon"] : (function () { throw new RuntimeError('Variable "find_one_by_coupon" does not exist.', 110, $this->source); })())) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["find_one_by_coupon"]) || array_key_exists("find_one_by_coupon", $context) ? $context["find_one_by_coupon"] : (function () { throw new RuntimeError('Variable "find_one_by_coupon" does not exist.', 110, $this->source); })()), "getIdTypeCoupon", [], "method", false, false, false, 110), "getId", [], "method", false, false, false, 110) == 2))) {
                // line 111
                echo "                    ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["find_Product"]) || array_key_exists("find_Product", $context) ? $context["find_Product"] : (function () { throw new RuntimeError('Variable "find_Product" does not exist.', 111, $this->source); })()), "getPriceProduct", [], "method", false, false, false, 111) - twig_get_attribute($this->env, $this->source, (isset($context["find_one_by_coupon"]) || array_key_exists("find_one_by_coupon", $context) ? $context["find_one_by_coupon"] : (function () { throw new RuntimeError('Variable "find_one_by_coupon" does not exist.', 111, $this->source); })()), "getDiscount", [], "method", false, false, false, 111)) + (((twig_get_attribute($this->env, $this->source,                 // line 112
(isset($context["find_Product"]) || array_key_exists("find_Product", $context) ? $context["find_Product"] : (function () { throw new RuntimeError('Variable "find_Product" does not exist.', 112, $this->source); })()), "getPriceProduct", [], "method", false, false, false, 112) - twig_get_attribute($this->env, $this->source, (isset($context["find_one_by_coupon"]) || array_key_exists("find_one_by_coupon", $context) ? $context["find_one_by_coupon"] : (function () { throw new RuntimeError('Variable "find_one_by_coupon" does not exist.', 112, $this->source); })()), "getDiscount", [], "method", false, false, false, 112)) / 100) * twig_get_attribute($this->env, $this->source,                 // line 113
(isset($context["find_one_by_tax"]) || array_key_exists("find_one_by_tax", $context) ? $context["find_one_by_tax"] : (function () { throw new RuntimeError('Variable "find_one_by_tax" does not exist.', 113, $this->source); })()), "getTaxRate", [], "method", false, false, false, 113))), "html", null, true);
                echo "
                ";
            } else {
                // line 114
                echo "  
                    ";
                // line 115
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["find_Product"]) || array_key_exists("find_Product", $context) ? $context["find_Product"] : (function () { throw new RuntimeError('Variable "find_Product" does not exist.', 115, $this->source); })()), "getPriceProduct", [], "method", false, false, false, 115) + ((twig_get_attribute($this->env, $this->source,                 // line 116
(isset($context["find_Product"]) || array_key_exists("find_Product", $context) ? $context["find_Product"] : (function () { throw new RuntimeError('Variable "find_Product" does not exist.', 116, $this->source); })()), "getPriceProduct", [], "method", false, false, false, 116) / 100) * twig_get_attribute($this->env, $this->source, (isset($context["find_one_by_tax"]) || array_key_exists("find_one_by_tax", $context) ? $context["find_one_by_tax"] : (function () { throw new RuntimeError('Variable "find_one_by_tax" does not exist.', 116, $this->source); })()), "getTaxRate", [], "method", false, false, false, 116))), "html", null, true);
                echo "
                ";
            }
            // line 117
            echo " euro</td>
        ";
        }
        // line 119
        echo "    </tr> 

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 123
    public function block_h2_purchase($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "h2_purchase"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "h2_purchase"));

        // line 124
        echo "<br><h2>Enter the amount and click pay</h2>                  
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 127
    public function block_form_purchase($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_purchase"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_purchase"));

        // line 128
        echo "
";
        // line 129
        $context["value_total_amount"] = "";
        // line 130
        echo " 
";
        // line 131
        if ( !twig_test_empty((isset($context["find_Product"]) || array_key_exists("find_Product", $context) ? $context["find_Product"] : (function () { throw new RuntimeError('Variable "find_Product" does not exist.', 131, $this->source); })()))) {
            // line 132
            echo "
    ";
            // line 133
            if (( !twig_test_empty((isset($context["find_one_by_coupon"]) || array_key_exists("find_one_by_coupon", $context) ? $context["find_one_by_coupon"] : (function () { throw new RuntimeError('Variable "find_one_by_coupon" does not exist.', 133, $this->source); })())) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["find_one_by_coupon"]) || array_key_exists("find_one_by_coupon", $context) ? $context["find_one_by_coupon"] : (function () { throw new RuntimeError('Variable "find_one_by_coupon" does not exist.', 133, $this->source); })()), "getIdTypeCoupon", [], "method", false, false, false, 133), "getId", [], "method", false, false, false, 133) == 1))) {
                // line 134
                echo "        ";
                ob_start();
                // line 135
                echo "            ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["find_Product"]) || array_key_exists("find_Product", $context) ? $context["find_Product"] : (function () { throw new RuntimeError('Variable "find_Product" does not exist.', 135, $this->source); })()), "getPriceProduct", [], "method", false, false, false, 135) - ((twig_get_attribute($this->env, $this->source,                 // line 136
(isset($context["find_Product"]) || array_key_exists("find_Product", $context) ? $context["find_Product"] : (function () { throw new RuntimeError('Variable "find_Product" does not exist.', 136, $this->source); })()), "getPriceProduct", [], "method", false, false, false, 136) / 100) * twig_get_attribute($this->env, $this->source, (isset($context["find_one_by_coupon"]) || array_key_exists("find_one_by_coupon", $context) ? $context["find_one_by_coupon"] : (function () { throw new RuntimeError('Variable "find_one_by_coupon" does not exist.', 136, $this->source); })()), "getDiscount", [], "method", false, false, false, 136))) + (((twig_get_attribute($this->env, $this->source,                 // line 137
(isset($context["find_Product"]) || array_key_exists("find_Product", $context) ? $context["find_Product"] : (function () { throw new RuntimeError('Variable "find_Product" does not exist.', 137, $this->source); })()), "getPriceProduct", [], "method", false, false, false, 137) - ((twig_get_attribute($this->env, $this->source, (isset($context["find_Product"]) || array_key_exists("find_Product", $context) ? $context["find_Product"] : (function () { throw new RuntimeError('Variable "find_Product" does not exist.', 137, $this->source); })()), "getPriceProduct", [], "method", false, false, false, 137) / 100) * twig_get_attribute($this->env, $this->source,                 // line 138
(isset($context["find_one_by_coupon"]) || array_key_exists("find_one_by_coupon", $context) ? $context["find_one_by_coupon"] : (function () { throw new RuntimeError('Variable "find_one_by_coupon" does not exist.', 138, $this->source); })()), "getDiscount", [], "method", false, false, false, 138))) / 100) * twig_get_attribute($this->env, $this->source,                 // line 139
(isset($context["find_one_by_tax"]) || array_key_exists("find_one_by_tax", $context) ? $context["find_one_by_tax"] : (function () { throw new RuntimeError('Variable "find_one_by_tax" does not exist.', 139, $this->source); })()), "getTaxRate", [], "method", false, false, false, 139))), "html", null, true);
                echo "
        ";
                $context["value_total_amount"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 140
                echo "           
    ";
            } elseif (( !twig_test_empty(            // line 141
(isset($context["find_one_by_coupon"]) || array_key_exists("find_one_by_coupon", $context) ? $context["find_one_by_coupon"] : (function () { throw new RuntimeError('Variable "find_one_by_coupon" does not exist.', 141, $this->source); })())) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["find_one_by_coupon"]) || array_key_exists("find_one_by_coupon", $context) ? $context["find_one_by_coupon"] : (function () { throw new RuntimeError('Variable "find_one_by_coupon" does not exist.', 141, $this->source); })()), "getIdTypeCoupon", [], "method", false, false, false, 141), "getId", [], "method", false, false, false, 141) == 2))) {
                // line 142
                echo "        ";
                ob_start();
                // line 143
                echo "            ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["find_Product"]) || array_key_exists("find_Product", $context) ? $context["find_Product"] : (function () { throw new RuntimeError('Variable "find_Product" does not exist.', 143, $this->source); })()), "getPriceProduct", [], "method", false, false, false, 143) - twig_get_attribute($this->env, $this->source, (isset($context["find_one_by_coupon"]) || array_key_exists("find_one_by_coupon", $context) ? $context["find_one_by_coupon"] : (function () { throw new RuntimeError('Variable "find_one_by_coupon" does not exist.', 143, $this->source); })()), "getDiscount", [], "method", false, false, false, 143)) + (((twig_get_attribute($this->env, $this->source,                 // line 144
(isset($context["find_Product"]) || array_key_exists("find_Product", $context) ? $context["find_Product"] : (function () { throw new RuntimeError('Variable "find_Product" does not exist.', 144, $this->source); })()), "getPriceProduct", [], "method", false, false, false, 144) - twig_get_attribute($this->env, $this->source, (isset($context["find_one_by_coupon"]) || array_key_exists("find_one_by_coupon", $context) ? $context["find_one_by_coupon"] : (function () { throw new RuntimeError('Variable "find_one_by_coupon" does not exist.', 144, $this->source); })()), "getDiscount", [], "method", false, false, false, 144)) / 100) * twig_get_attribute($this->env, $this->source,                 // line 145
(isset($context["find_one_by_tax"]) || array_key_exists("find_one_by_tax", $context) ? $context["find_one_by_tax"] : (function () { throw new RuntimeError('Variable "find_one_by_tax" does not exist.', 145, $this->source); })()), "getTaxRate", [], "method", false, false, false, 145))), "html", null, true);
                echo "
        ";
                $context["value_total_amount"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 147
                echo "    ";
            } else {
                echo "  
        ";
                // line 148
                ob_start();
                // line 149
                echo "            ";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["find_Product"]) || array_key_exists("find_Product", $context) ? $context["find_Product"] : (function () { throw new RuntimeError('Variable "find_Product" does not exist.', 149, $this->source); })()), "getPriceProduct", [], "method", false, false, false, 149) + ((twig_get_attribute($this->env, $this->source,                 // line 150
(isset($context["find_Product"]) || array_key_exists("find_Product", $context) ? $context["find_Product"] : (function () { throw new RuntimeError('Variable "find_Product" does not exist.', 150, $this->source); })()), "getPriceProduct", [], "method", false, false, false, 150) / 100) * twig_get_attribute($this->env, $this->source, (isset($context["find_one_by_tax"]) || array_key_exists("find_one_by_tax", $context) ? $context["find_one_by_tax"] : (function () { throw new RuntimeError('Variable "find_one_by_tax" does not exist.', 150, $this->source); })()), "getTaxRate", [], "method", false, false, false, 150))), "html", null, true);
                echo "
        ";
                $context["value_total_amount"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 152
                echo "    ";
            }
        }
        // line 153
        echo "   
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 156
    public function block_json_response($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "json_response"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "json_response"));

        // line 157
        $context["json_response"] = "";
        // line 158
        echo "    <pre>   
        ";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 159, $this->source); })()), "flashes", ["response"], "method", false, false, false, 159));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 160
            echo "            ";
            $context["json_response"] = $context["message"];
            // line 161
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "        ";
        if ( !twig_test_empty((isset($context["json_response"]) || array_key_exists("json_response", $context) ? $context["json_response"] : (function () { throw new RuntimeError('Variable "json_response" does not exist.', 162, $this->source); })()))) {
            // line 163
            echo "            ";
            echo twig_escape_filter($this->env, (isset($context["json_response"]) || array_key_exists("json_response", $context) ? $context["json_response"] : (function () { throw new RuntimeError('Variable "json_response" does not exist.', 163, $this->source); })()), "html", null, true);
            echo "
        ";
        } else {
            // line 165
            echo "            ";
            echo twig_escape_filter($this->env, (isset($context["response"]) || array_key_exists("response", $context) ? $context["response"] : (function () { throw new RuntimeError('Variable "response" does not exist.', 165, $this->source); })()), "html", null, true);
            echo "
        ";
        }
        // line 167
        echo "    </pre>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "application/purchase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  673 => 167,  667 => 165,  661 => 163,  658 => 162,  652 => 161,  649 => 160,  645 => 159,  642 => 158,  640 => 157,  630 => 156,  619 => 153,  615 => 152,  610 => 150,  608 => 149,  606 => 148,  601 => 147,  596 => 145,  595 => 144,  593 => 143,  590 => 142,  588 => 141,  585 => 140,  580 => 139,  579 => 138,  578 => 137,  577 => 136,  575 => 135,  572 => 134,  570 => 133,  567 => 132,  565 => 131,  562 => 130,  560 => 129,  557 => 128,  547 => 127,  536 => 124,  526 => 123,  514 => 119,  510 => 117,  505 => 116,  504 => 115,  501 => 114,  496 => 113,  495 => 112,  493 => 111,  491 => 110,  487 => 109,  486 => 108,  485 => 107,  484 => 106,  482 => 105,  480 => 104,  475 => 102,  470 => 100,  464 => 98,  460 => 96,  458 => 95,  455 => 94,  452 => 93,  450 => 92,  446 => 91,  441 => 89,  438 => 88,  436 => 87,  432 => 85,  422 => 84,  406 => 76,  404 => 75,  394 => 73,  381 => 68,  376 => 66,  371 => 64,  367 => 63,  363 => 62,  357 => 60,  350 => 58,  344 => 57,  342 => 56,  336 => 55,  332 => 54,  328 => 53,  322 => 51,  315 => 49,  309 => 48,  306 => 47,  302 => 46,  298 => 45,  294 => 44,  289 => 42,  285 => 41,  281 => 40,  276 => 38,  273 => 37,  260 => 34,  248 => 30,  238 => 29,  221 => 24,  213 => 22,  203 => 21,  192 => 18,  183 => 16,  175 => 14,  165 => 13,  146 => 11,  127 => 9,  108 => 7,  89 => 5,  71 => 3,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block h3 %}{% endblock h3 %}

{% block title %}{{title_logo}}{% endblock %}

{% block logo %}{{title_logo}}{% endblock %}

{% block legend %}{{legend}}{% endblock legend%}

{% block legend_response %}{{legend_response}}{% endblock legend_response %}

{% block name_product %}
    {% for value_product in arr_products %} 

            <th>{{ value_product.getNameProduct() }}</th>

    {% endfor %}        
{% endblock name_product %}

{% block price_product %}
    {% for value_product in arr_products %} 

        <td>{{ value_product.getPriceProduct() }} euro</td>

    {% endfor %}
{% endblock price_product %}

{% block h2_calculate_price %}
    <br><h2>Select the product, if available, specify the discount coupon, 
    specify the tax number</h2>
{% endblock h2_calculate_price %}

{% block form_calculate_price %} 

    {#form purchase#}
    
    {{ form_start(form_purchase) }}

        <th>{{ form_label(form_purchase.products) }}<br>
        {{ form_widget(form_purchase.products) }}<br>
        {{ form_errors(form_purchase.products) }}</th>

        <th>{{ form_label(form_purchase.coupons) }}<br>
        {{ form_widget(form_purchase.coupons) }}<br>
        {% for key, value in arr_error %}
           {% if key == 'coupon' %}
                {{ value }}
            {% endif %}    
        {% endfor %}
        {{ form_errors(form_purchase.coupons) }}</th>

        <th>{{ form_label(form_purchase.taxes) }}<br>
        {{ form_widget(form_purchase.taxes) }}<br>
        {% for key, value in arr_error %}  
            {% if key == 'taxe' %}
                {{ value }}
            {% endif %} 
        {% endfor %}
        {{ form_errors(form_purchase.taxes) }}</th>

        <th>{{ form_label(form_purchase.payment_processor) }}<br>
        {{ form_widget(form_purchase.payment_processor) }}<br>
        {{ form_errors(form_purchase.payment_processor) }}</th>

         <th>{{ form_widget(form_purchase.button, { 'label': 'Calculate', 'attr': {'class': 'save'} }) }}</th>

    {{ form_end(form_purchase) }}
   
{% endblock form_calculate_price %}


{% block table_calculate_price %}
{#Table#}
{% if find_Product is not empty %}
            <th>Product price</th>
            <th>Coupon</th>
            <th>Tax</th>
            <th>Payment method</th>
            <th>Total amount</th>
{% endif %}
{% endblock table_calculate_price %}

{% block tbody_calculate_price %}

    <tr>
        {% if find_Product is not empty %}

            <td>{{ find_Product.getPriceProduct()|default('') }} euro</td>
                            
            <td>{{ find_one_by_coupon.getDiscount()|default('') }}
            {% if find_one_by_coupon is not empty %}
                {% if find_one_by_coupon.getIdTypeCoupon().getId() == 1 %}
                    %
                {% elseif find_one_by_coupon.getIdTypeCoupon().getId() == 2 %}
                    euro
                {% endif %}
            {% endif %}</td>

            <td>{{ find_one_by_tax.getTaxRate()|default('') }} %</td>

            <td>{{ payment_methods|default('') }}</td>

            <td>{% if find_one_by_coupon is not empty and find_one_by_coupon.getIdTypeCoupon().getId() == 1 %}
                    {{ (find_Product.getPriceProduct() 
                        - (find_Product.getPriceProduct() / 100 * find_one_by_coupon.getDiscount()))
                            + ((find_Product.getPriceProduct() - (find_Product.getPriceProduct() 
                                / 100 * find_one_by_coupon.getDiscount()))
                                    / 100 * find_one_by_tax.getTaxRate()) }}
                {% elseif find_one_by_coupon is not empty and find_one_by_coupon.getIdTypeCoupon().getId() == 2 %}
                    {{ (find_Product.getPriceProduct() - find_one_by_coupon.getDiscount())
                     + ((find_Product.getPriceProduct() - find_one_by_coupon.getDiscount())
                      / 100 * find_one_by_tax.getTaxRate()) }}
                {% else %}  
                    {{ find_Product.getPriceProduct() 
                        + (find_Product.getPriceProduct() / 100 * find_one_by_tax.getTaxRate()) }}
                {% endif %} euro</td>
        {% endif %}
    </tr> 

{% endblock tbody_calculate_price %}

{% block h2_purchase %}
<br><h2>Enter the amount and click pay</h2>                  
{% endblock h2_purchase %}

{% block form_purchase %}

{% set value_total_amount = '' %}
 
{% if find_Product is not empty %}

    {% if find_one_by_coupon is not empty and find_one_by_coupon.getIdTypeCoupon().getId() == 1 %}
        {% set value_total_amount %}
            {{ (find_Product.getPriceProduct() 
                - (find_Product.getPriceProduct() / 100 * find_one_by_coupon.getDiscount()))
                    + ((find_Product.getPriceProduct() - (find_Product.getPriceProduct() 
                        / 100 * find_one_by_coupon.getDiscount()))
                            / 100 * find_one_by_tax.getTaxRate()) }}
        {% endset %}           
    {% elseif find_one_by_coupon is not empty and find_one_by_coupon.getIdTypeCoupon().getId() == 2 %}
        {% set value_total_amount %}
            {{ (find_Product.getPriceProduct() - find_one_by_coupon.getDiscount())
                + ((find_Product.getPriceProduct() - find_one_by_coupon.getDiscount())
                    / 100 * find_one_by_tax.getTaxRate()) }}
        {% endset %}
    {% else %}  
        {% set value_total_amount %}
            {{ find_Product.getPriceProduct() 
                + (find_Product.getPriceProduct() / 100 * find_one_by_tax.getTaxRate()) }}
        {% endset %}
    {% endif %}
{% endif %}   
{% endblock form_purchase %}   

{% block json_response %}
{% set json_response = '' %}
    <pre>   
        {% for message in app.flashes('response') %}
            {% set json_response = message %}
        {% endfor %}
        {% if json_response is not empty %}
            {{ json_response }}
        {% else %}
            {{response}}
        {% endif %}
    </pre>
{% endblock json_response %}
", "application/purchase.html.twig", "/var/www/templates/application/purchase.html.twig");
    }
}
