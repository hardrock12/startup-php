<?php

/* search.html */
class __TwigTemplate_97109c9c99b83684b503ddeda1a1fbe53e99fe64d7a9838c7aa9f493d060f3a8 extends Twig_Template
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
        echo "<html xmlns:width=\"http://www.w3.org/1999/xhtml\">
<head>
    
    
    <link href=\"stylesheets/main.css\" rel=\"stylesheet\" type=\"text/css\" >
    
    </head>
<body>
<div class=\"footer\">
    




</div>
<form method=\"get\" action=\"\">
    <input type=\"text\" placeholder=\"Search\" name=\"searchtext\">
    <button type=\"submit\" >search</button>
<select>
<option value=\"price\">
Lowest to Highest Price
</option>
<option value=\"-price\">
Highest to Lowest Price
</option>
<option value=\"Relevance\">
Relevance
</option>

</select>

    <select name=\"option\">

        <option value=\"select\" selected=\"true\">select department</option>
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pizzas"]) ? $context["pizzas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pizza"]) {
            // line 36
            echo "<option value=\"";
            echo twig_escape_filter($this->env, $context["pizza"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["pizza"], "html", null, true);
            echo "</option>\";



        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pizza'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "



    </select>
    </form>
<div class=\"main-results\">

    ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 50
            echo "    <div class=\"item-c\">
    <div class=\"item-title\">
    
    ";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "ItemAttributes", array()), "Title", array()), "html", null, true);
            echo "
    
    
    </div>

    <div class=\"item-image\">
        <img src=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "MediumImage", array()), "URL", array()), "html", null, true);
            echo "\" width=\"100\" height=\"100\">
    </div>


<div class=\"item-price\">
    ";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "OfferSummary", array()), "LowestNewPrice", array()), "FormattedPrice", array()), "html", null, true);
            echo "



</div>
<div class=\"item-externallink\">
<a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "DetailPageURL", array()), "html", null, true);
            echo "\">
    Goto Store>>
    
    </a>
  </div>
    </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "    
    
    </div>

</body></html>";
    }

    public function getTemplateName()
    {
        return "search.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 78,  118 => 70,  109 => 64,  101 => 59,  92 => 53,  87 => 50,  83 => 49,  73 => 41,  59 => 36,  55 => 35,  19 => 1,);
    }
}
/* <html xmlns:width="http://www.w3.org/1999/xhtml">*/
/* <head>*/
/*     */
/*     */
/*     <link href="stylesheets/main.css" rel="stylesheet" type="text/css" >*/
/*     */
/*     </head>*/
/* <body>*/
/* <div class="footer">*/
/*     */
/* */
/* */
/* */
/* */
/* </div>*/
/* <form method="get" action="">*/
/*     <input type="text" placeholder="Search" name="searchtext">*/
/*     <button type="submit" >search</button>*/
/* <select>*/
/* <option value="price">*/
/* Lowest to Highest Price*/
/* </option>*/
/* <option value="-price">*/
/* Highest to Lowest Price*/
/* </option>*/
/* <option value="Relevance">*/
/* Relevance*/
/* </option>*/
/* */
/* </select>*/
/* */
/*     <select name="option">*/
/* */
/*         <option value="select" selected="true">select department</option>*/
/*         {% for pizza in pizzas %}*/
/* <option value="{{pizza}}">{{pizza}}</option>";*/
/* */
/* */
/* */
/*         {% endfor %}*/
/* */
/* */
/* */
/* */
/*     </select>*/
/*     </form>*/
/* <div class="main-results">*/
/* */
/*     {% for item in items %}*/
/*     <div class="item-c">*/
/*     <div class="item-title">*/
/*     */
/*     {{item.ItemAttributes.Title}}*/
/*     */
/*     */
/*     </div>*/
/* */
/*     <div class="item-image">*/
/*         <img src="{{item.MediumImage.URL}}" width="100" height="100">*/
/*     </div>*/
/* */
/* */
/* <div class="item-price">*/
/*     {{item.OfferSummary.LowestNewPrice.FormattedPrice}}*/
/* */
/* */
/* */
/* </div>*/
/* <div class="item-externallink">*/
/* <a href="{{item.DetailPageURL}}">*/
/*     Goto Store>>*/
/*     */
/*     </a>*/
/*   </div>*/
/*     </div>*/
/* */
/*     {% endfor %}*/
/*     */
/*     */
/*     </div>*/
/* */
/* </body></html>*/
