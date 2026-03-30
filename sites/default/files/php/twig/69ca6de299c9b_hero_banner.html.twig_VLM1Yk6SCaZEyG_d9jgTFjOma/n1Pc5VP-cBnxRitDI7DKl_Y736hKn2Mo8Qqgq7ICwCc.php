<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* modules/custom/hero_banner/templates/hero_banner.html.twig */
class __TwigTemplate_d6286aeb56459bdc2f34cba1b89e3481 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!-- Hero Section with Image Banner (working image) -->
<section class=\"hero-section text-white py-5 overflow-hidden\">
\t<div class=\"container py-lg-5 my-3\">
\t\t<div class=\"row align-items-center g-5\">
\t\t\t<div class=\"col-lg-6 order-lg-1 order-2\">
\t\t\t\t";
        // line 6
        if ((($context["gb"] ?? null) && ($context["promo_check"] ?? null))) {
            // line 7
            yield "        <span class=\"badge bg-warning text-dark mb-3 px-3 py-2 rounded-pill\">
\t\t\t\t\t<i class=\"bi bi-speedometer2\"></i>";
            // line 8
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["gb"] ?? null), "html", null, true);
            yield "</span>
        ";
        }
        // line 10
        yield "
\t\t\t\t<h1 class=\"display-4 fw-bold mb-3\">";
        // line 11
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
        yield "</h1>
\t\t\t\t<p class=\"lead mb-4 opacity-90\">";
        // line 12
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["description"] ?? null), "html", null, true);
        yield "</p>
\t\t\t\t<div class=\"d-flex flex-wrap gap-3\">
\t\t\t\t\t<a href=\"";
        // line 14
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["explore_url"] ?? null), "url", [], "any", true, true, true, 14) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["explore_url"] ?? null), "url", [], "any", false, false, true, 14)))) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["explore_url"] ?? null), "url", [], "any", false, false, true, 14), "html", null, true)) : ("/"));
        yield "\" class=\"btn btn-light btn-lg rounded-pill px-5 py-3 fw-semibold text-primary\">Explore Plans
\t\t\t\t\t\t<i class=\"bi bi-arrow-right-short\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"";
        // line 17
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["install_url"] ?? null), "url", [], "any", true, true, true, 17) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["install_url"] ?? null), "url", [], "any", false, false, true, 17)))) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["install_url"] ?? null), "url", [], "any", false, false, true, 17), "html", null, true)) : ("/"));
        yield "\" class=\"btn btn-outline-light btn-lg rounded-pill px-5 py-3\" data-bs-toggle=\"modal\" data-bs-target=\"#signupModal\">Get Installation</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"mt-4 d-flex gap-4 small\">
        ";
        // line 20
        if (($context["promo_check"] ?? null)) {
            // line 21
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["promos"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 22
                yield "            <div>
\t\t\t\t\t\t<i class=\"bi bi-check-circle-fill me-1\"></i>
\t\t\t\t\t\t";
                // line 24
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, true, 24), "html", null, true);
                yield "</div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            yield "        ";
        }
        // line 27
        yield "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div
\t\t\t\tclass=\"col-lg-6 order-lg-2 order-1 text-center\">
\t\t\t\t<!-- Working sample image: modern WiFi router setup -->
\t\t\t\t<img src=\"";
        // line 32
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["img"] ?? null), "image_url", [], "any", true, true, true, 32) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["img"] ?? null), "image_url", [], "any", false, false, true, 32)))) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["img"] ?? null), "image_url", [], "any", false, false, true, 32), "html", null, true)) : ("https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=600&h=450&fit=crop"));
        yield "\" alt=\"Modern WiFi Router and Smart Home Devices\" class=\"img-fluid wifi-illustration rounded-4 shadow-lg hero-img\" style=\"max-width: 100%; height: auto; object-fit: cover; min-height: 300px;\">
\t\t\t</div>
\t\t</div>
\t</div>
</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["gb", "promo_check", "title", "description", "explore_url", "install_url", "promos", "img"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/custom/hero_banner/templates/hero_banner.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  114 => 32,  107 => 27,  104 => 26,  96 => 24,  92 => 22,  87 => 21,  85 => 20,  79 => 17,  73 => 14,  68 => 12,  64 => 11,  61 => 10,  56 => 8,  53 => 7,  51 => 6,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/custom/hero_banner/templates/hero_banner.html.twig", "C:\\xampp\\htdocs\\wifi\\modules\\custom\\hero_banner\\templates\\hero_banner.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 6, "for" => 21];
        static $filters = ["escape" => 8];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
