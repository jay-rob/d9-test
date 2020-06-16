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

/* core/profiles/demo_umami/themes/umami/templates/components/recipe-collections/block--views-block--recipe-collections-block.html.twig */
class __TwigTemplate_6ec189ac7a7fea337b7ddf4b1ee79c6ddae23d95b1c67d74b27031bf14b1e8f8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array();
        $filters = array("escape" => 9);
        $functions = array("attach_library" => 9);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['attach_library']
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

    protected function doGetParent(array $context)
    {
        // line 1
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("block.html.twig", "core/profiles/demo_umami/themes/umami/templates/components/recipe-collections/block--views-block--recipe-collections-block.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("umami/recipe-collections"), "html", null, true);
        echo "
  <div class=\"container\">
    ";
        // line 11
        $this->displayParentBlock("content", $context, $blocks);
        echo "
  </div>
";
    }

    public function getTemplateName()
    {
        return "core/profiles/demo_umami/themes/umami/templates/components/recipe-collections/block--views-block--recipe-collections-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 11,  75 => 9,  71 => 8,  60 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/profiles/demo_umami/themes/umami/templates/components/recipe-collections/block--views-block--recipe-collections-block.html.twig", "/var/www/html/web/core/profiles/demo_umami/themes/umami/templates/components/recipe-collections/block--views-block--recipe-collections-block.html.twig");
    }
}
