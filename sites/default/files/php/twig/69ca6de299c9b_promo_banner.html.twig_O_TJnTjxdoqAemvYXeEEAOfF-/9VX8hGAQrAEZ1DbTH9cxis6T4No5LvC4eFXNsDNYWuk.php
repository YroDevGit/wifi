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

/* modules/custom/promo_banner/templates/promo_banner.html.twig */
class __TwigTemplate_20682bd1ea8e3eedd38475591cf6a531 extends Template
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
        yield "<!-- PROMO BANNER (Limited time offer with image) -->
  <div class=\"container mt-4 mb-2\">
    <div class=\"promo-banner text-white p-4 rounded-4 d-flex flex-wrap justify-content-between align-items-center\"
      style=\"background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);\">
      <div class=\"d-flex gap-4 align-items-center flex-wrap\">
        <i class=\"bi bi-megaphone-fill fs-1 text-warning\"></i>
        <div>
          <h4 class=\"mb-0 fw-bold\">";
        // line 8
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
        yield "</h4>
          <p class=\"mb-0 opacity-75\">";
        // line 9
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["description"] ?? null), "html", null, true);
        yield "</p>
        </div>
      </div>
      <a href=\"";
        // line 12
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["url"] ?? null), "url", [], "any", true, true, true, 12) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["url"] ?? null), "url", [], "any", false, false, true, 12)))) ? ($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["url"] ?? null), "url", [], "any", false, false, true, 12), "html", null, true)) : ("/"));
        yield "\" class=\"btn btn-warning rounded-pill px-4 py-2 mt-2 mt-sm-0 fw-bold\" data-bs-toggle=\"modal\"
        data-bs-target=\"#signupModal\">Claim Offer →</a>
    </div>
  </div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["title", "description", "url"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/custom/promo_banner/templates/promo_banner.html.twig";
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
        return array (  63 => 12,  57 => 9,  53 => 8,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/custom/promo_banner/templates/promo_banner.html.twig", "C:\\xampp\\htdocs\\wifi\\modules\\custom\\promo_banner\\templates\\promo_banner.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 8];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
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
