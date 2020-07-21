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

/* default/template/common/footer.twig */
class __TwigTemplate_e179601c70026f6cbb0f1bb896b5784cdc93ccb319edc1d5b32420cde908a51f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<footer>
  <div class=\"container\">
    <div class=\"row\">
      ";
        // line 4
        if (($context["informations"] ?? null)) {
            // line 5
            echo "      <div class=\"col-sm-3\">
        <h5>";
            // line 6
            echo ($context["text_information"] ?? null);
            echo "</h5>
        <ul class=\"list-unstyled\">
         ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 9
                echo "          <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 9);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 9);
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "        </ul>
      </div>
      ";
        }
        // line 14
        echo "      <div class=\"col-sm-3\">
        <h5>";
        // line 15
        echo ($context["text_service"] ?? null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 17
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
\t\t  <li><a href=\"";
        // line 18
        echo ($context["manufacturer"] ?? null);
        echo "\">";
        echo ($context["text_manufacturer"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 19
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 20
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo "</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <h5>Контакты</h5>
\t\t<!--<h5>";
        // line 25
        echo ($context["text_extra"] ?? null);
        echo "</h5>-->
        <ul class=\"list-unstyled\">
\t\t<div class=\"contact-footer module clearfix\">
\t\t
\t\t<div class=\"modcontent contact-footer\">\t\t\t\t\t
\t\t<ul>
\t\t<li><i class=\"fa fa-map-marker\"></i>&nbsp; Адрес: Чиланзарский район, Улица Лутфи, 3-ий проезд, дом 17</li>
\t\t<li><i class=\"fa fa-mobile\"></i>&nbsp; &nbsp;Телефон: +(998)(99)-002-29-92</li>
\t\t<li><i class=\"fa fa-envelope\"></i>&nbsp;E-mail:&nbsp;<a href=\"info@rombik.uz\">info@rombik.uz</a></li>
\t\t</ul>
\t\t</div>
\t\t<div class=\"imgpayment\">
\t\t<img src=\"image/catalog/demo/payment/payment.png\" alt=\"imgpayment\">
\t</div>
</div> 
          <!--<li><a href=\"";
        // line 40
        echo ($context["manufacturer"] ?? null);
        echo "\">";
        echo ($context["text_manufacturer"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 41
        echo ($context["voucher"] ?? null);
        echo "\">";
        echo ($context["text_voucher"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 42
        echo ($context["affiliate"] ?? null);
        echo "\">";
        echo ($context["text_affiliate"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 43
        echo ($context["special"] ?? null);
        echo "\">";
        echo ($context["text_special"] ?? null);
        echo "</a></li>-->
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <h5>";
        // line 47
        echo ($context["text_account"] ?? null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 49
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 50
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 51
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
          <!--<li><a href=\"";
        // line 52
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>-->
        </ul>
      </div>
    </div>
    <hr>
    <div>  
\t<div style=\"width: 100%; display: table;\">
    <div style=\"display: table-row\">
        <div style=\"width: 600px; display: table-cell;\"> ";
        // line 60
        echo ($context["powered"] ?? null);
        echo " </div>
        <div style=\"display: table-cell;\" align=\"right\"> \t\t\t<ul>
\t\t\t<a title=\"Facebook\" href=\"https://www.facebook.com/rombik.uz/\" target=\"_blank\">
\t\t\t\t<span class=\"fa fa-facebook icon-social\" ></span> <span >&nbsp;&nbsp;</span>
\t\t\t</a>
\t\t\t<a title=\"Instagram\" href=\"https://www.instagram.com/rombik_uz/\" target=\"_blank\"> 
\t\t\t\t<span class=\"fa fa-instagram icon-social\"></span> <span >&nbsp;&nbsp;</span>
\t\t\t</a>
\t\t\t<a title=\"Telegram\" href=\"https://t.me/rombikuz\" target=\"_blank\"> 
\t\t\t\t<span class=\"fa fa-telegram icon-social\"></span><span >&nbsp;&nbsp;</span>
\t\t\t</a>
\t\t\t<a title=\"Youtube\" href=\"https://www.youtube.com/channel/UCkccP3F7E3SKOfj7EuKWwJQ\" target=\"_blank\"> 
\t\t\t\t<span class=\"fa fa-youtube icon-social\"></span> 
\t\t\t</a>
\t\t\t</ul> </div>
    </div>
</div>
  </div>
</footer>
";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 80
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
  <!-- Yandex.Metrika counter -->
<script type=\"text/javascript\" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, \"script\", \"https://mc.yandex.ru/metrika/tag.js\", \"ym\");

   ym(54220483, \"init\", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        ecommerce:\"dataLayer\"
   });
</script>
<noscript><div><img src=\"https://mc.yandex.ru/watch/54220483\" style=\"position:absolute; left:-9999px;\" alt=\"\" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body></html>";
    }

    public function getTemplateName()
    {
        return "default/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 82,  215 => 80,  211 => 79,  189 => 60,  176 => 52,  170 => 51,  164 => 50,  158 => 49,  153 => 47,  144 => 43,  138 => 42,  132 => 41,  126 => 40,  108 => 25,  98 => 20,  92 => 19,  86 => 18,  80 => 17,  75 => 15,  72 => 14,  67 => 11,  56 => 9,  52 => 8,  47 => 6,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/footer.twig", "");
    }
}
