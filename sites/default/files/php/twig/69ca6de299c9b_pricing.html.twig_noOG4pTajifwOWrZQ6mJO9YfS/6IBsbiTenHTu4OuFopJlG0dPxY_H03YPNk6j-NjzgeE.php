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
\t\t\t\t          contracts.</p>
\t\t</div>
\t\t<div
\t\t\tclass=\"row g-4 justify-content-center\">
\t\t\t<!-- Plan 1 -->
\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t<div class=\"card h-100 border-0 shadow-card price-card p-4\">
\t\t\t\t\t<h3 class=\"fw-bold\">Essential</h3>
\t\t\t\t\t<div class=\"mt-2 mb-3\">
\t\t\t\t\t\t<span class=\"display-4 fw-bold\">\$39</span>
\t\t\t\t\t\t<span class=\"text-secondary\">/mo</span>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t\t<ul class=\"list-unstyled mt-3 mb-4\">
\t\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t\t<i class=\"bi bi-wifi text-primary me-2\"></i>
\t\t\t\t\t\t\t300 Mbps Download</li>
\t\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t\t<i class=\"bi bi-wifi text-primary me-2\"></i>
\t\t\t\t\t\t\t300 Mbps Upload</li>
\t\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t\t<i class=\"bi bi-infinity text-primary me-2\"></i>
\t\t\t\t\t\t\tUnlimited Data</li>
\t\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t\t<i class=\"bi bi-router text-primary me-2\"></i>
\t\t\t\t\t\t\tStandard Router</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"mt-auto\">
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-primary rounded-pill w-100 py-2\" data-bs-toggle=\"modal\" data-bs-target=\"#signupModal\">Get Essential</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Plan 2 (Popular) -->
\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t<div class=\"card h-100 border-0 shadow-card price-card popular p-4\">
\t\t\t\t\t<div class=\"popular-badge\">🔥 MOST POPULAR</div>
\t\t\t\t\t<h3 class=\"fw-bold\">Pro Turbo</h3>
\t\t\t\t\t<div class=\"mt-2 mb-3\">
\t\t\t\t\t\t<span class=\"display-4 fw-bold\">\$59</span>
\t\t\t\t\t\t<span class=\"text-secondary\">/mo</span>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t\t<ul class=\"list-unstyled mt-3 mb-4\">
\t\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t\t<i class=\"bi bi-wifi text-primary me-2\"></i>
\t\t\t\t\t\t\t800 Mbps / 800 Mbps</li>
\t\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t\t<i class=\"bi bi-shield-check text-primary me-2\"></i>
\t\t\t\t\t\t\tWiFi 6 Mesh Extender</li>
\t\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t\t<i class=\"bi bi-infinity text-primary me-2\"></i>
\t\t\t\t\t\t\tUnlimited + Priority Support</li>
\t\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t\t<i class=\"bi bi-trophy text-primary me-2\"></i>
\t\t\t\t\t\t\tFree Static IP</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"mt-auto\">
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary rounded-pill w-100 py-2\" data-bs-toggle=\"modal\" data-bs-target=\"#signupModal\">Upgrade to Pro</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Plan 3 -->
\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t<div class=\"card h-100 border-0 shadow-card price-card p-4\">
\t\t\t\t\t<h3 class=\"fw-bold\">Gigabit Elite</h3>
\t\t\t\t\t<div class=\"mt-2 mb-3\">
\t\t\t\t\t\t<span class=\"display-4 fw-bold\">\$89</span>
\t\t\t\t\t\t<span class=\"text-secondary\">/mo</span>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t\t<ul class=\"list-unstyled mt-3 mb-4\">
\t\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t\t<i class=\"bi bi-lightning-charge text-primary me-2\"></i>
\t\t\t\t\t\t\t1.2 Gbps / 1 Gbps</li>
\t\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t\t<i class=\"bi bi-phone text-primary me-2\"></i>
\t\t\t\t\t\t\tWhole-home WiFi Mesh</li>
\t\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t\t<i class=\"bi bi-laptop text-primary me-2\"></i>
\t\t\t\t\t\t\tAdvanced Security Suite</li>
\t\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t\t<i class=\"bi bi-gem text-primary me-2\"></i>
\t\t\t\t\t\t\tPriority 24/7 Technician</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"mt-auto\">
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-primary rounded-pill w-100 py-2\" data-bs-toggle=\"modal\" data-bs-target=\"#signupModal\">Go Elite</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
";
        yield from [];
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
    public function getDebugInfo(): array
    {
        return array (  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/custom/pricing/templates/pricing.html.twig", "C:\\xampp\\htdocs\\wifi\\modules\\custom\\pricing\\templates\\pricing.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
