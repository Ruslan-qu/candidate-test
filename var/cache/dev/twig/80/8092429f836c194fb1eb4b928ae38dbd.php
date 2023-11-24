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

/* application/calculate-price.html.twig */
class __TwigTemplate_edc96a964eb0ff3a489aa6e4a2c293d9 extends Template
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
            'h2' => [$this, 'block_h2'],
            'form_calculate_price' => [$this, 'block_form_calculate_price'],
            'table_calculate_price' => [$this, 'block_table_calculate_price'],
            'tbody_calculate_price' => [$this, 'block_tbody_calculate_price'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "application/calculate-price.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "application/calculate-price.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "application/calculate-price.html.twig", 1);
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
    public function block_h2($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "h2"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "h2"));

        // line 30
        echo "    <br><h2>Select the product, if available, specify the discount coupon, specify the tax number</h2></br>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 33
    public function block_form_calculate_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_calculate_price"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_calculate_price"));

        echo " 

    ";
        // line 36
        echo "    
    ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_calculate_price"]) || array_key_exists("form_calculate_price", $context) ? $context["form_calculate_price"] : (function () { throw new RuntimeError('Variable "form_calculate_price" does not exist.', 37, $this->source); })()), 'form_start');
        echo "

        <th>";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_calculate_price"]) || array_key_exists("form_calculate_price", $context) ? $context["form_calculate_price"] : (function () { throw new RuntimeError('Variable "form_calculate_price" does not exist.', 39, $this->source); })()), "products", [], "any", false, false, false, 39), 'label');
        echo "<br>
        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_calculate_price"]) || array_key_exists("form_calculate_price", $context) ? $context["form_calculate_price"] : (function () { throw new RuntimeError('Variable "form_calculate_price" does not exist.', 40, $this->source); })()), "products", [], "any", false, false, false, 40), 'widget');
        echo "<br>
        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_calculate_price"]) || array_key_exists("form_calculate_price", $context) ? $context["form_calculate_price"] : (function () { throw new RuntimeError('Variable "form_calculate_price" does not exist.', 41, $this->source); })()), "products", [], "any", false, false, false, 41), 'errors');
        echo "</th>

        <th>";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_calculate_price"]) || array_key_exists("form_calculate_price", $context) ? $context["form_calculate_price"] : (function () { throw new RuntimeError('Variable "form_calculate_price" does not exist.', 43, $this->source); })()), "coupons", [], "any", false, false, false, 43), 'label');
        echo "<br>
        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_calculate_price"]) || array_key_exists("form_calculate_price", $context) ? $context["form_calculate_price"] : (function () { throw new RuntimeError('Variable "form_calculate_price" does not exist.', 44, $this->source); })()), "coupons", [], "any", false, false, false, 44), 'widget');
        echo "<br>
        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr_error"]) || array_key_exists("arr_error", $context) ? $context["arr_error"] : (function () { throw new RuntimeError('Variable "arr_error" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 46
            echo "           ";
            if (($context["key"] == "coupon")) {
                // line 47
                echo "                ";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "
            ";
            }
            // line 48
            echo "    
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_calculate_price"]) || array_key_exists("form_calculate_price", $context) ? $context["form_calculate_price"] : (function () { throw new RuntimeError('Variable "form_calculate_price" does not exist.', 50, $this->source); })()), "coupons", [], "any", false, false, false, 50), 'errors');
        echo "</th>

        <th>";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_calculate_price"]) || array_key_exists("form_calculate_price", $context) ? $context["form_calculate_price"] : (function () { throw new RuntimeError('Variable "form_calculate_price" does not exist.', 52, $this->source); })()), "taxes", [], "any", false, false, false, 52), 'label');
        echo "<br>
        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_calculate_price"]) || array_key_exists("form_calculate_price", $context) ? $context["form_calculate_price"] : (function () { throw new RuntimeError('Variable "form_calculate_price" does not exist.', 53, $this->source); })()), "taxes", [], "any", false, false, false, 53), 'widget');
        echo "<br>
        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arr_error"]) || array_key_exists("arr_error", $context) ? $context["arr_error"] : (function () { throw new RuntimeError('Variable "arr_error" does not exist.', 54, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            echo "  
            ";
            // line 55
            if (($context["key"] == "taxe")) {
                // line 56
                echo "                ";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "
            ";
            }
            // line 57
            echo " 
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_calculate_price"]) || array_key_exists("form_calculate_price", $context) ? $context["form_calculate_price"] : (function () { throw new RuntimeError('Variable "form_calculate_price" does not exist.', 59, $this->source); })()), "taxes", [], "any", false, false, false, 59), 'errors');
        echo "</th>

        ";
        // line 61
        $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_calculate_price"]) || array_key_exists("form_calculate_price", $context) ? $context["form_calculate_price"] : (function () { throw new RuntimeError('Variable "form_calculate_price" does not exist.', 61, $this->source); })()), "payment_processor", [], "any", false, false, false, 61), 'widget');
        // line 62
        echo "
         <th>";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_calculate_price"]) || array_key_exists("form_calculate_price", $context) ? $context["form_calculate_price"] : (function () { throw new RuntimeError('Variable "form_calculate_price" does not exist.', 63, $this->source); })()), "button", [], "any", false, false, false, 63), 'widget', ["label" => "Calculate", "attr" => ["class" => "save"]]);
        echo "</th>

    ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_calculate_price"]) || array_key_exists("form_calculate_price", $context) ? $context["form_calculate_price"] : (function () { throw new RuntimeError('Variable "form_calculate_price" does not exist.', 65, $this->source); })()), 'form_end');
        echo "
   
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 70
    public function block_table_calculate_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_calculate_price"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "table_calculate_price"));

        // line 72
        if ( !twig_test_empty((isset($context["find_Product"]) || array_key_exists("find_Product", $context) ? $context["find_Product"] : (function () { throw new RuntimeError('Variable "find_Product" does not exist.', 72, $this->source); })()))) {
            // line 73
            echo "            <th>Product price</th>
            <th>Coupon</th>
            <th>Tax</th>
            <th>Total amount</th>
            <th>Reset</th>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 81
    public function block_tbody_calculate_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody_calculate_price"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tbody_calculate_price"));

        // line 82
        echo "    <tr>
        ";
        // line 83
        if ( !twig_test_empty((isset($context["find_Product"]) || array_key_exists("find_Product", $context) ? $context["find_Product"] : (function () { throw new RuntimeError('Variable "find_Product" does not exist.', 83, $this->source); })()))) {
            // line 84
            echo "
            <td>";
            // line 85
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["find_Product"] ?? null), "getPriceProduct", [], "method", true, true, false, 85)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["find_Product"] ?? null), "getPriceProduct", [], "method", false, false, false, 85), "")) : ("")), "html", null, true);
            echo " euro</td>
                            
            <td>";
            // line 87
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["find_one_by_coupon"] ?? null), "getDiscount", [], "method", true, true, false, 87)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["find_one_by_coupon"] ?? null), "getDiscount", [], "method", false, false, false, 87), "")) : ("")), "html", null, true);
            echo "
            ";
            // line 88
            if ( !twig_test_empty((isset($context["find_one_by_coupon"]) || array_key_exists("find_one_by_coupon", $context) ? $context["find_one_by_coupon"] : (function () { throw new RuntimeError('Variable "find_one_by_coupon" does not exist.', 88, $this->source); })()))) {
                // line 89
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["find_one_by_coupon"]) || array_key_exists("find_one_by_coupon", $context) ? $context["find_one_by_coupon"] : (function () { throw new RuntimeError('Variable "find_one_by_coupon" does not exist.', 89, $this->source); })()), "getIdTypeCoupon", [], "method", false, false, false, 89), "getId", [], "method", false, false, false, 89) == 1)) {
                    // line 90
                    echo "                    %
                ";
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 91
(isset($context["find_one_by_coupon"]) || array_key_exists("find_one_by_coupon", $context) ? $context["find_one_by_coupon"] : (function () { throw new RuntimeError('Variable "find_one_by_coupon" does not exist.', 91, $this->source); })()), "getIdTypeCoupon", [], "method", false, false, false, 91), "getId", [], "method", false, false, false, 91) == 2)) {
                    // line 92
                    echo "                    euro
                ";
                }
                // line 94
                echo "            ";
            }
            echo "</td>

            <td>";
            // line 96
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["find_one_by_tax"] ?? null), "getTaxRate", [], "method", true, true, false, 96)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["find_one_by_tax"] ?? null), "getTaxRate", [], "method", false, false, false, 96), "")) : ("")), "html", null, true);
            echo " %</td>

                <td>";
            // line 98
            if (( !twig_test_empty((isset($context["find_one_by_coupon"]) || array_key_exists("find_one_by_coupon", $context) ? $context["find_one_by_coupon"] : (function () { throw new RuntimeError('Variable "find_one_by_coupon" does not exist.', 98, $this->source); })())) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["find_one_by_coupon"]) || array_key_exists("find_one_by_coupon", $context) ? $context["find_one_by_coupon"] : (function () { throw new RuntimeError('Variable "find_one_by_coupon" does not exist.', 98, $this->source); })()), "getIdTypeCoupon", [], "method", false, false, false, 98), "getId", [], "method", false, false, false, 98) == 1))) {
                // line 99
                echo "                    ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["find_Product"]) || array_key_exists("find_Product", $context) ? $context["find_Product"] : (function () { throw new RuntimeError('Variable "find_Product" does not exist.', 99, $this->source); })()), "getPriceProduct", [], "method", false, false, false, 99) - ((twig_get_attribute($this->env, $this->source,                 // line 100
(isset($context["find_Product"]) || array_key_exists("find_Product", $context) ? $context["find_Product"] : (function () { throw new RuntimeError('Variable "find_Product" does not exist.', 100, $this->source); })()), "getPriceProduct", [], "method", false, false, false, 100) / 100) * twig_get_attribute($this->env, $this->source, (isset($context["find_one_by_coupon"]) || array_key_exists("find_one_by_coupon", $context) ? $context["find_one_by_coupon"] : (function () { throw new RuntimeError('Variable "find_one_by_coupon" does not exist.', 100, $this->source); })()), "getDiscount", [], "method", false, false, false, 100))) + (((twig_get_attribute($this->env, $this->source,                 // line 101
(isset($context["find_Product"]) || array_key_exists("find_Product", $context) ? $context["find_Product"] : (function () { throw new RuntimeError('Variable "find_Product" does not exist.', 101, $this->source); })()), "getPriceProduct", [], "method", false, false, false, 101) - ((twig_get_attribute($this->env, $this->source, (isset($context["find_Product"]) || array_key_exists("find_Product", $context) ? $context["find_Product"] : (function () { throw new RuntimeError('Variable "find_Product" does not exist.', 101, $this->source); })()), "getPriceProduct", [], "method", false, false, false, 101) / 100) * twig_get_attribute($this->env, $this->source,                 // line 102
(isset($context["find_one_by_coupon"]) || array_key_exists("find_one_by_coupon", $context) ? $context["find_one_by_coupon"] : (function () { throw new RuntimeError('Variable "find_one_by_coupon" does not exist.', 102, $this->source); })()), "getDiscount", [], "method", false, false, false, 102))) / 100) * twig_get_attribute($this->env, $this->source,                 // line 103
(isset($context["find_one_by_tax"]) || array_key_exists("find_one_by_tax", $context) ? $context["find_one_by_tax"] : (function () { throw new RuntimeError('Variable "find_one_by_tax" does not exist.', 103, $this->source); })()), "getTaxRate", [], "method", false, false, false, 103))), "html", null, true);
                echo "
                ";
            } elseif (( !twig_test_empty(            // line 104
(isset($context["find_one_by_coupon"]) || array_key_exists("find_one_by_coupon", $context) ? $context["find_one_by_coupon"] : (function () { throw new RuntimeError('Variable "find_one_by_coupon" does not exist.', 104, $this->source); })())) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["find_one_by_coupon"]) || array_key_exists("find_one_by_coupon", $context) ? $context["find_one_by_coupon"] : (function () { throw new RuntimeError('Variable "find_one_by_coupon" does not exist.', 104, $this->source); })()), "getIdTypeCoupon", [], "method", false, false, false, 104), "getId", [], "method", false, false, false, 104) == 2))) {
                // line 105
                echo "                    ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["find_Product"]) || array_key_exists("find_Product", $context) ? $context["find_Product"] : (function () { throw new RuntimeError('Variable "find_Product" does not exist.', 105, $this->source); })()), "getPriceProduct", [], "method", false, false, false, 105) - twig_get_attribute($this->env, $this->source, (isset($context["find_one_by_coupon"]) || array_key_exists("find_one_by_coupon", $context) ? $context["find_one_by_coupon"] : (function () { throw new RuntimeError('Variable "find_one_by_coupon" does not exist.', 105, $this->source); })()), "getDiscount", [], "method", false, false, false, 105)) + (((twig_get_attribute($this->env, $this->source,                 // line 106
(isset($context["find_Product"]) || array_key_exists("find_Product", $context) ? $context["find_Product"] : (function () { throw new RuntimeError('Variable "find_Product" does not exist.', 106, $this->source); })()), "getPriceProduct", [], "method", false, false, false, 106) - twig_get_attribute($this->env, $this->source, (isset($context["find_one_by_coupon"]) || array_key_exists("find_one_by_coupon", $context) ? $context["find_one_by_coupon"] : (function () { throw new RuntimeError('Variable "find_one_by_coupon" does not exist.', 106, $this->source); })()), "getDiscount", [], "method", false, false, false, 106)) / 100) * twig_get_attribute($this->env, $this->source,                 // line 107
(isset($context["find_one_by_tax"]) || array_key_exists("find_one_by_tax", $context) ? $context["find_one_by_tax"] : (function () { throw new RuntimeError('Variable "find_one_by_tax" does not exist.', 107, $this->source); })()), "getTaxRate", [], "method", false, false, false, 107))), "html", null, true);
                echo "
                ";
            } else {
                // line 108
                echo "   
                    ";
                // line 109
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["find_Product"]) || array_key_exists("find_Product", $context) ? $context["find_Product"] : (function () { throw new RuntimeError('Variable "find_Product" does not exist.', 109, $this->source); })()), "getPriceProduct", [], "method", false, false, false, 109) + ((twig_get_attribute($this->env, $this->source, (isset($context["find_Product"]) || array_key_exists("find_Product", $context) ? $context["find_Product"] : (function () { throw new RuntimeError('Variable "find_Product" does not exist.', 109, $this->source); })()), "getPriceProduct", [], "method", false, false, false, 109) / 100) * twig_get_attribute($this->env, $this->source, (isset($context["find_one_by_tax"]) || array_key_exists("find_one_by_tax", $context) ? $context["find_one_by_tax"] : (function () { throw new RuntimeError('Variable "find_one_by_tax" does not exist.', 109, $this->source); })()), "getTaxRate", [], "method", false, false, false, 109))), "html", null, true);
                echo "
                ";
            }
            // line 110
            echo " euro</td>

            ";
            // line 112
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_calculate_price"]) || array_key_exists("form_calculate_price", $context) ? $context["form_calculate_price"] : (function () { throw new RuntimeError('Variable "form_calculate_price" does not exist.', 112, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reset")]);
            echo "

            <td>";
            // line 114
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_reset"]) || array_key_exists("form_reset", $context) ? $context["form_reset"] : (function () { throw new RuntimeError('Variable "form_reset" does not exist.', 114, $this->source); })()), "button", [], "any", false, false, false, 114), 'widget', ["label" => "Reset", "attr" => ["class" => "reset"]]);
            echo "</td>

            ";
            // line 116
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_calculate_price"]) || array_key_exists("form_calculate_price", $context) ? $context["form_calculate_price"] : (function () { throw new RuntimeError('Variable "form_calculate_price" does not exist.', 116, $this->source); })()), 'form_end');
            echo "

        ";
        }
        // line 119
        echo "    </tr>   
                
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 123
    public function block_json_response($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "json_response"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "json_response"));

        // line 124
        echo "    <pre>
        ";
        // line 125
        echo twig_escape_filter($this->env, (isset($context["response"]) || array_key_exists("response", $context) ? $context["response"] : (function () { throw new RuntimeError('Variable "response" does not exist.', 125, $this->source); })()), "html", null, true);
        echo "
    </pre>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "application/calculate-price.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  537 => 125,  534 => 124,  524 => 123,  512 => 119,  506 => 116,  501 => 114,  496 => 112,  492 => 110,  487 => 109,  484 => 108,  479 => 107,  478 => 106,  476 => 105,  474 => 104,  470 => 103,  469 => 102,  468 => 101,  467 => 100,  465 => 99,  463 => 98,  458 => 96,  452 => 94,  448 => 92,  446 => 91,  443 => 90,  440 => 89,  438 => 88,  434 => 87,  429 => 85,  426 => 84,  424 => 83,  421 => 82,  411 => 81,  395 => 73,  393 => 72,  383 => 70,  370 => 65,  365 => 63,  362 => 62,  360 => 61,  354 => 59,  347 => 57,  341 => 56,  339 => 55,  333 => 54,  329 => 53,  325 => 52,  319 => 50,  312 => 48,  306 => 47,  303 => 46,  299 => 45,  295 => 44,  291 => 43,  286 => 41,  282 => 40,  278 => 39,  273 => 37,  270 => 36,  257 => 33,  246 => 30,  236 => 29,  219 => 24,  211 => 22,  201 => 21,  190 => 18,  181 => 16,  173 => 14,  163 => 13,  144 => 11,  125 => 9,  106 => 7,  87 => 5,  69 => 3,  46 => 1,);
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

{% block h2 %}
    <br><h2>Select the product, if available, specify the discount coupon, specify the tax number</h2></br>
{% endblock h2 %}

{% block form_calculate_price %} 

    {#form calculate#}
    
    {{ form_start(form_calculate_price) }}

        <th>{{ form_label(form_calculate_price.products) }}<br>
        {{ form_widget(form_calculate_price.products) }}<br>
        {{ form_errors(form_calculate_price.products) }}</th>

        <th>{{ form_label(form_calculate_price.coupons) }}<br>
        {{ form_widget(form_calculate_price.coupons) }}<br>
        {% for key, value in arr_error %}
           {% if key == 'coupon' %}
                {{ value }}
            {% endif %}    
        {% endfor %}
        {{ form_errors(form_calculate_price.coupons) }}</th>

        <th>{{ form_label(form_calculate_price.taxes) }}<br>
        {{ form_widget(form_calculate_price.taxes) }}<br>
        {% for key, value in arr_error %}  
            {% if key == 'taxe' %}
                {{ value }}
            {% endif %} 
        {% endfor %}
        {{ form_errors(form_calculate_price.taxes) }}</th>

        {% do form_widget(form_calculate_price.payment_processor) %}

         <th>{{ form_widget(form_calculate_price.button, { 'label': 'Calculate', 'attr': {'class': 'save'} }) }}</th>

    {{ form_end(form_calculate_price) }}
   
{% endblock form_calculate_price %}


{% block table_calculate_price %}
{#Table#}
{% if find_Product is not empty %}
            <th>Product price</th>
            <th>Coupon</th>
            <th>Tax</th>
            <th>Total amount</th>
            <th>Reset</th>
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
                    {{ find_Product.getPriceProduct() + (find_Product.getPriceProduct() / 100 * find_one_by_tax.getTaxRate()) }}
                {% endif %} euro</td>

            {{ form_start(form_calculate_price, {'action': path('reset')}) }}

            <td>{{ form_widget(form_reset.button, { 'label': 'Reset', 'attr': {'class': 'reset'} }) }}</td>

            {{ form_end(form_calculate_price) }}

        {% endif %}
    </tr>   
                
{% endblock tbody_calculate_price %}

{% block json_response %}
    <pre>
        {{response}}
    </pre>
{% endblock json_response %}", "application/calculate-price.html.twig", "/var/www/templates/application/calculate-price.html.twig");
    }
}
