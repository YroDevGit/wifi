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

/* modules/custom/pricing/templates/pricing.html.twig */
class __TwigTemplate_78a3dbb23c1a45943a4840a1c57a9164 extends Template
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
        yield "<!-- PLANS / PRICING SECTION (Cards) -->
<section id=\"plans\" class=\"py-5\">
\t<div class=\"container py-4\">
\t\t<div class=\"text-center mb-5\">
\t\t\t<span class=\"badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill\">Internet Plans</span>
\t\t\t<h2 class=\"display-5 fw-bold mt-2\">Choose Your Perfect Speed</h2>
\t\t\t<p class=\"lead text-secondary w-75 mx-auto\">Fiber-powered plans with symmetrical upload & download, no
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t          contracts.</p>
\t\t</div>
\t\t<div
\t\t\tclass=\"row g-4 justify-content-center\">
\t\t\t<!-- Plan 1 -->
\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["pac"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 14
            yield "\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t<div class=\"card h-100 border-0 shadow-card price-card p-4\">
          ";
            // line 16
            if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "field_popular", [], "any", false, false, true, 16)) {
                // line 17
                yield "          <div class=\"popular-badge\">🔥 MOST POPULAR</div>
          ";
            }
            // line 19
            yield "\t\t\t\t\t\t<h3 class=\"fw-bold\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, true, 19), "html", null, true);
            yield "</h3>
\t\t\t\t\t\t<div class=\"mt-2 mb-3\">
\t\t\t\t\t\t\t<span class=\"display-4 fw-bold\">\$";
            // line 21
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "field_price", [], "any", false, false, true, 21), "html", null, true);
            yield "</span>
\t\t\t\t\t\t\t<span class=\"text-secondary\">/mo</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<ul class=\"list-unstyled mt-3 mb-4\">
            ";
            // line 26
            if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "field_items", [], "any", false, false, true, 26)) {
                // line 27
                yield "              ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "field_items", [], "any", false, false, true, 27));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 28
                    yield "                ";
                    $context["var"] = Twig\Extension\CoreExtension::split($this->env->getCharset(), $context["i"], "
");
                    // line 29
                    yield "                ";
                    $context["icon"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["var"] ?? null), 0, [], "array", true, true, true, 29) &&  !(null === (($_v0 = ($context["var"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["var"] ?? null), 0, [], "array", false, false, true, 29))))) ? ((($_v1 = ($context["var"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["var"] ?? null), 0, [], "array", false, false, true, 29))) : (""));
                    // line 30
                    yield "                ";
                    $context["text"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["var"] ?? null), 1, [], "array", true, true, true, 30) &&  !(null === (($_v2 = ($context["var"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2[1] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["var"] ?? null), 1, [], "array", false, false, true, 30))))) ? ((($_v3 = ($context["var"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3[1] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["var"] ?? null), 1, [], "array", false, false, true, 30))) : (""));
                    // line 31
                    yield "              <li class=\"mb-2\"><i class=\"";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["icon"] ?? null), "html", null, true);
                    yield "\"></i> ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["text"] ?? null), "html", null, true);
                    yield "</li>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                yield "            ";
            }
            // line 34
            yield "            </ul>
\t\t\t\t\t\t<div class=\"mt-auto\">
\t\t\t\t\t\t\t";
            // line 36
            if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "field_url", [], "any", false, false, true, 36)) {
                // line 37
                yield "              <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "field_url", [], "any", false, false, true, 37), "url", [], "any", false, false, true, 37), "html", null, true);
                yield "\" class=\"btn btn-outline-primary rounded-pill w-100 py-2\" data-bs-toggle=\"modal\" data-bs-target=\"#signupModal\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "field_url", [], "any", false, false, true, 37), "title", [], "any", false, false, true, 37), "html", null, true);
                yield "</a>
              ";
            }
            // line 39
            yield "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "
\t\t</div>
\t</div>
</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["pac"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/custom/pricing/templates/pricing.html.twig";
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
        return array (  140 => 43,  131 => 39,  123 => 37,  121 => 36,  117 => 34,  114 => 33,  103 => 31,  100 => 30,  97 => 29,  93 => 28,  88 => 27,  86 => 26,  78 => 21,  72 => 19,  68 => 17,  66 => 16,  62 => 14,  58 => 13,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/custom/pricing/templates/pricing.html.twig", "C:\\xampp\\htdocs\\wifi\\modules\\custom\\pricing\\templates\\pricing.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 13, "if" => 16, "set" => 28];
        static $filters = ["escape" => 19, "split" => 28];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'set'],
                ['escape', 'split'],
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
