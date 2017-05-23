<?php

/* theme.yaml.twig */
class __TwigTemplate_ff1315f614624de93523d47837236142cd0502c929e080bd0da19b4e40e5bbda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "enabled: true
dropdown:
  enabled: true
";
    }

    public function getTemplateName()
    {
        return "theme.yaml.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("enabled: true
dropdown:
  enabled: true
", "theme.yaml.twig", "/Users/Josh/Vagrants/altitudeDev/app/user/plugins/devtools/components/theme/pure-blank/theme.yaml.twig");
    }
}
