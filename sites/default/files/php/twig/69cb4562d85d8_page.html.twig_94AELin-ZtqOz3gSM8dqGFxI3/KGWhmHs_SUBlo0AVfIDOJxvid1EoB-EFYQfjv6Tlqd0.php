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

/* themes/custom/main/templates/page.html.twig */
class __TwigTemplate_c6cc34b1d332a92eb1eef45f8671ac4a extends Template
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
        if (($context["logged_in"] ?? null)) {
            // line 2
            yield "

";
            // line 4
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 4), "html", null, true);
            yield "

<nav class=\"navbar navbar-expand-lg sticky-top py-3\">
\t<div class=\"container\">
\t\t<a class=\"navbar-brand fw-bold fs-3\" href=\"#\">
\t\t\t<i class=\"bi bi-wifi text-primary me-2\"></i>";
            // line 9
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "name", [], "any", false, false, true, 9), "html", null, true);
            yield "
\t\t</a>
\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarMain\" aria-controls=\"navbarMain\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>
\t\t<div class=\"collapse navbar-collapse\" id=\"navbarMain\">
\t\t\t<ul class=\"navbar-nav mx-auto mb-2 mb-lg-0 fw-semibold gap-2\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Home</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"#plans\">Plans</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"#features\">Features</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"#faq\">FAQ</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"#contact\">Contact</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<div class=\"d-flex\">
\t\t\t\t<a href=\"#\" class=\"btn btn-outline-primary rounded-pill px-4\" data-bs-toggle=\"modal\" data-bs-target=\"#signupModal\">Sign Up</a>
\t\t\t</div>
\t\t</div>
\t</div>
</nav>

<main class=\"site-content\">
\t";
            // line 40
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 40), "html", null, true);
            yield "
</main>


<!-- Signup Modal -->
<div class=\"modal fade\" id=\"signupModal\" tabindex=\"-1\" aria-labelledby=\"signupModalLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog modal-dialog-centered\">
\t\t<div class=\"modal-content rounded-4 border-0 shadow-lg\">
\t\t\t<div class=\"modal-header border-0 pb-0\">
\t\t\t\t<h5 class=\"modal-title fw-bold fs-4\" id=\"signupModalLabel\">Get NexusWave WiFi</h5>
\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t</div>
\t\t\t<div class=\"modal-body pt-0 px-4 pb-4\">
\t\t\t\t<p class=\"text-secondary\">Fill your details to claim exclusive offers and free installation.</p>
\t\t\t\t<form>
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<label class=\"form-label fw-semibold\">Full name</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"John Carter\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<label class=\"form-label fw-semibold\">Email address</label>
\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" placeholder=\"hello@example.com\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<label class=\"form-label fw-semibold\">Phone number</label>
\t\t\t\t\t\t<input type=\"tel\" class=\"form-control\" placeholder=\"(555) 123-4567\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t\t<label class=\"form-label fw-semibold\">Preferred plan</label>
\t\t\t\t\t\t<select class=\"form-select\">
\t\t\t\t\t\t\t<option>Essential 300 Mbps</option>
\t\t\t\t\t\t\t<option selected>Pro Turbo 800 Mbps (Popular)</option>
\t\t\t\t\t\t\t<option>Gigabit Elite 1.2 Gbps</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary w-100 rounded-pill py-2 fw-bold\">Sign up & Claim Promo
\t\t\t\t\t\t              →</button>
\t\t\t\t\t<p class=\"small text-secondary mt-3 text-center\">No spam, no contracts. We'll contact you within 2h.</p>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<footer id=\"contact\" class=\"bg-dark text-white pt-5 pb-4\">
\t<div class=\"container\">
\t\t<div class=\"row gy-4\">
\t\t\t<div class=\"col-md-5\">
\t\t\t\t<a class=\"navbar-brand text-white fw-bold fs-3\" href=\"#\">
\t\t\t\t\t<i class=\"bi bi-wifi me-2\"></i>";
            // line 89
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "name", [], "any", false, false, true, 89), "html", null, true);
            yield "</a>
\t\t\t\t<p class=\"text-white-50 mt-3\">Redefining connectivity with future-proof fiber internet. Fast, fair, and truly
\t\t\t\t\t            unlimited.</p>
\t\t\t\t<div class=\"d-flex gap-3 mt-3\">
\t\t\t\t\t<a href=\"#\" class=\"text-white-50\">
\t\t\t\t\t\t<i class=\"bi bi-facebook fs-5\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\" class=\"text-white-50\">
\t\t\t\t\t\t<i class=\"bi bi-twitter-x fs-5\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<a href=\"#\" class=\"text-white-50\">
\t\t\t\t\t\t<i class=\"bi bi-instagram fs-5\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<h5 class=\"fw-semibold\">Explore</h5>
\t\t\t\t<ul class=\"list-unstyled mt-3\">
\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t<a href=\"#\" class=\"text-white-50 text-decoration-none\">Coverage Map</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t<a href=\"#\" class=\"text-white-50 text-decoration-none\">Business Plans</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t<a href=\"#\" class=\"text-white-50 text-decoration-none\">Referral Program</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"col-md-4\">
\t\t\t\t<h5 class=\"fw-semibold\">Contact Us</h5>
\t\t\t\t<ul class=\"list-unstyled mt-3 text-white-50\">
\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t<i class=\"bi bi-telephone-fill me-2\"></i>
\t\t\t\t\t\t1-800-WAVEFIBER</li>
\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t<i class=\"bi bi-envelope-fill me-2\"></i>
\t\t\t\t\t\thello@nexuswave.com</li>
\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t<i class=\"bi bi-geo-alt-fill me-2\"></i>
\t\t\t\t\t\t123 Fiber Ave, Suite 100, Austin, TX</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t<hr class=\"mt-4 opacity-25\">
\t\t<div class=\"text-center text-white-50 small\">© 2025 NexusWave Communications — Empowering seamless connectivity.
\t\t</div>
\t</div>
</footer>

";
        } else {
            // line 140
            yield "  <div style=\"padding-top:200px;\" align=\"center\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 140), "html", null, true);
            yield "</div>
";
        }
        // line 142
        yield "

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["logged_in", "page", "site"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/main/templates/page.html.twig";
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
        return array (  204 => 142,  198 => 140,  144 => 89,  92 => 40,  58 => 9,  50 => 4,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/main/templates/page.html.twig", "C:\\xampp\\htdocs\\wifi\\themes\\custom\\main\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 1];
        static $filters = ["escape" => 4];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
