<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__4b6fb72c466caefce1663262866fd63f12888e9e2c19ca08442152f4fb3919d4 */
class __TwigTemplate_8695eeb3faeb513ead83da372425b34aa331b24695bad4258011ba02fd165ded extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fa\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestashop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestashop/img/app_icon.png\" />

<title>منطقه‌ها • فروشگاه من</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminZones';
    var iso_user = 'fa';
    var lang_is_rtl = '1';
    var full_language_code = 'fa-ir';
    var full_cldr_language_code = 'fa-IR';
    var country_iso_code = 'IR';
    var _PS_VERSION_ = '1.7.8.1';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'یک سفارش جدید در فروشگاه شما ثبت شده است.';
    var order_number_msg = 'شماره سفارش: ';
    var total_msg = 'مجموع: ';
    var from_msg = 'از: ';
    var see_order_msg = 'نمایش این سفارش';
    var new_customer_msg = 'یک مشتری جدید در فروشگاه شما ثبت نام کرده است.';
    var customer_name_msg = 'نام مشتری: ';
    var new_msg = 'یک پیام جدید در فروشگاه شما ارسال شده است.';
    var see_msg = 'خواندن این پیام';
    var token = 'd6ee9a75164eefcba24e61809245d945';
    var token_admin_orders = tokenAdminOrders = 'd75e0e43e4512381cdb23775ba77c6d3';
    var token_admin_customers = 'f35fcc9f2275234aab2c69f8ce58643a';
    var token_admin_customer_threads = tokenAdminCustomerThreads = '31cd560ed6fc1476e3fa11adf1d27ec8';
    var currentIndex = 'index.php?controller=AdminZones';
    var employee_token = '807785ed2d342cd110e55313534d6255';
    var choose_language_translate = 'انتخاب زبان:';
    var default_language = '2';
    var admin_modules_link = '/prestashop/admin096vm4ztc/index.php/improve/modules/catalog/recommended?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4';
    var admin_notification_get_link = '/prestashop/admin096vm4ztc/index.php/common/notifications?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4';
    var admin_notification_push_link = adminNotificationPushLink = '/prestashop/admin096vm4ztc/index.php/common/notifications/ack?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4';
    var tab_modules_list = '';
    var update_success_msg = 'بروز رسانی موفق بود';
    var errorLogin = 'پرستاشاپ قادر به ورود به افزونه‌ها نیست. لطفا اعتبارنامه‌ها و اتصال خود به اینترنت را بررسي نمائید.';
    var search_product_msg = 'جستجوی یک محصول';
  </script>

      <link href=\"/prestashop/admin096vm4ztc/themes/new-theme/public/theme_rtl.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/admin096vm4ztc/themes/default/css/vendor/nv.d3_rtl.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/gamification/views/css/gamification_rtl.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/psf_prestaplus/views/css/admin/prestaplus_init.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/psf_prestaplus/plugins/boomisaz/views/css/admin/prestaplus-fix-rtl.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/psf_prestaplus/plugins/boomisaz/views/css/admin/version/1750.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/psf_prestaplus/plugins/boomisaz/views/css/admin/prestaplus-font.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/psf_prestapay/views/css/admin/prestapay_init.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/prestashop\\/admin096vm4ztc\\/\";
var baseDir = \"\\/prestashop\\/\";
var changeFormLanguageUrl = \"\\/prestashop\\/admin096vm4ztc\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\";
var currency = {\"iso_code\":\"IRR\",\"sign\":\"\\u0631\\u06cc\\u0627\\u0644\",\"name\":\"\\u0631\\u06cc\\u0627\\u0644 \\u0627\\u06cc\\u0631\\u0627\\u0646\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"\\u200e\\u2212\",\"\\u200e+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"\\u0646\\u0627\\u0639\\u062f\\u062f\"],\"currencyCode\":\"IRR\",\"currencySymbol\":\"\\u0631\\u06cc\\u0627\\u0644\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"\\u200e\\u2212\",\"\\u200e+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"\\u0646\\u0627\\u0639\\u062f\\u062f\"],\"positivePattern\":\"\\u200e\\u00a4#,##0.00\",\"negativePattern\":\"-\\u200e\\u00a4#,##0.00\",\"maxFractionDigits\":0,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"\\u200e\\u2212\",\"\\u200e+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"\\u0646\\u0627\\u0639\\u062f\\u062f\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"\\u200e\\u2212\",\"\\u200e+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"\\u0646\\u0627\\u0639\\u062f\\u062f\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var psf_plus_jalali_status = \"1\";
var psfplus_editor_skin_tinymce = \"\\/prestashop\\/modules\\/psf_prestaplus\\/plugins\\/boomisaz\\/views\\/css\\/tinymce\\/prestafa-skin.css\";
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/prestashop/admin096vm4ztc/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/admin.js?v=1.7.8.1\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin096vm4ztc/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/tools.js?v=1.7.8.1\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin096vm4ztc/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_mbo/views/js/recommended-modules.js?v=2.0.1\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/psf_prestaplus/plugins/boomisaz/views/js/admin/moment.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/psf_prestaplus/plugins/boomisaz/views/js/admin/jMoment.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/psf_prestaplus/plugins/boomisaz/views/js/admin/persian-date.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/psf_prestaplus/plugins/boomisaz/views/js/admin/jquery.ui.datepicker-fa.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/psf_prestaplus/plugins/boomisaz/views/js/admin/library-date.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/psf_prestaplus/plugins/boomisaz/views/js/admin/admin.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/rtl.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/prestashop/admin096vm4ztc/index.php/common/notifications?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
            var admin_gamification_ajax_url = \"https:\\/\\/localhost\\/prestashop\\/admin096vm4ztc\\/index.php?controller=AdminGamification&token=a78be68b851f551a9ff6917267cf346d\";
            var current_id_tab = 73;
        </script>
                <style>
                /* EDITOR - CSS */
                .mce-rtl .mce-flow-layout{
                    text-align: right !important;
                    margin-left: inherit;
                    margin-right: 5px;
                }
                .mce-window.mce-in{
                    left: auto !important;
                    right: calc(50% - 215px) !important;
                }
                .mce-btn-group .mce-first {
                     border-radius: 3px 0 0 3px;
                }
                .mce-btn-group .mce-last {
                    border-right: solid 1px #ccc !important;
                }
                .mce-btn-group .mce-btn  {
                    border: solid 1px #ccc;
                    border-right: none;
                }
                </style><script type=\"text/javascript\" src=\"/prestashop/modules/psf_prestaplus/plugins/boomisaz/views/js/admin/tinymce-psf-plus-new.js\" defer=\"defer\"></script>

";
        // line 140
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>

<body
  class=\"lang-fa lang-rtl adminzones\"
  data-base-url=\"/prestashop/admin096vm4ztc/index.php\"  data-token=\"xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"https://localhost/prestashop/admin096vm4ztc/index.php?controller=AdminDashboard&amp;token=de21461e4a779d2af851646fcb6205ab\"></a>
      <span id=\"shop_version\">1.7.8.1</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    دسترسی سریع
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/prestashop/admin096vm4ztc/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=b36e4b95c02f83f244e7337406f75d60\"
                 data-item=\"ارزیابی فهرست محصولات\"
      >ارزیابی فهرست محصولات</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/prestashop/admin096vm4ztc/index.php?controller=AdminOrders&amp;token=d75e0e43e4512381cdb23775ba77c6d3\"
                 data-item=\"سفارش‌ها\"
      >سفارش‌ها</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/prestashop/admin096vm4ztc/index.php/sell/catalog/categories/new?token=a6034b8023af7878ba9250e6016f0b76\"
                 data-item=\"شاخه جدید\"
      >شاخه جدید</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/prestashop/admin096vm4ztc/index.php/improve/modules/manage?token=a6034b8023af7878ba9250e6016f0b76\"
                 data-item=\"ماژول های نصب شده\"
      >ماژول های نصب شده</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/prestashop/admin096vm4ztc/index.php/sell/catalog/products/new?token=a6034b8023af7878ba9250e6016f0b76\"
                 data-item=\"محصول جدید\"
      >محصول جدید</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://localhost/prestashop/admin096vm4ztc/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=72522c877e87fd820ee6daf38c462695\"
                 data-item=\"کوپن جدید\"
      >کوپن جدید</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"14\"
        data-icon=\"icon-AdminParentCountries\"
        data-method=\"add\"
        data-url=\"index.php/improve/international/zones/?-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\"
        data-post-link=\"https://localhost/prestashop/admin096vm4ztc/index.php?controller=AdminQuickAccesses&token=24b5a8792dd764016190d7bdd350a5d0\"
        data-prompt-text=\"لطفا این میانبر را نام گذاری کنید:\"
        data-link=\"منطقه&zwnj;ها - لیست\"
      >
        <i class=\"material-icons\">add_circle</i>
        اضافه کردن این صفحه به دسترسی سریع
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://localhost/prestashop/admin096vm4ztc/index.php?controller=AdminQuickAccesses&token=24b5a8792dd764016190d7bdd350a5d0\">
      <i class=\"material-icons\">settings</i>
      مدیریت دسترسی‌های سریع
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/prestashop/admin096vm4ztc/index.php?controller=AdminSearch&amp;token=d4e790e164afdc3cc1e93b57b028fd16\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"جستجو (مثلاً: مرجع محصول، نام مشتری…)\" aria-label=\"نوار جستجو\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        هر جا
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"هر جا\" href=\"#\" data-value=\"0\" data-placeholder=\"به دنبال چه هستید؟\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> هر جا</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"کاتالوگ\" href=\"#\" data-value=\"1\" data-placeholder=\"نام محصول، مرجع و غیره.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> کاتالوگ</a>
        <a class=\"dropdown-item\" data-item=\"مشتریان با نام\" href=\"#\" data-value=\"2\" data-placeholder=\"نام\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> مشتریان با نام</a>
        <a class=\"dropdown-item\" data-item=\"مشتریان با آدرس IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> مشتریان با آدرس IP</a>
        <a class=\"dropdown-item\" data-item=\"سفارش‌ها\" href=\"#\" data-value=\"3\" data-placeholder=\"شناسه سفارش\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> سفارش‌ها</a>
        <a class=\"dropdown-item\" data-item=\"فاکتور\" href=\"#\" data-value=\"4\" data-placeholder=\"شماره فاکتور\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> فاکتور</a>
        <a class=\"dropdown-item\" data-item=\"سبدها\" href=\"#\" data-value=\"5\" data-placeholder=\"شناسه‌ی سبد خرید\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> سبدها</a>
        <a class=\"dropdown-item\" data-item=\"ماژول‌ها\" href=\"#\" data-value=\"7\" data-placeholder=\"نام ماژول\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> ماژول‌ها</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">جستجو</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

      
      
              <div class=\"component\" id=\"header-shop-list-container\">
            <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"https://localhost/prestashop/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>نمایش فروشگاه من</span>
    </a>
  </div>
        </div>
                    <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              سفارش‌ها<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              مشتریان<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              پیام‌ها<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              در حال حاضر سفارش جدیدی وجود ندارد :(<br>
              آیا شما <strong><a href=\"https://localhost/prestashop/admin096vm4ztc/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=5e91b080c6624b081502b5b91e972711\">سبدهای رها شده</a></strong> خود را بررسی کرده‌اید؟ <br>سفارش بعدی شما می‌تواند در آن پنهان شده باشد!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              در حال حاضر مشتری جدیدی وجود ندارد :(<br>
              آیا شما این روز‌ها در رسانه‌های اجتماعی فعال بوده‌اید؟
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              در حال حاضر پیام جدیدی وجود ندارد.<br>
              به نظر می‌رسد همه مشتریان شما خوشحال هستند :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      از <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - ثبت‌نام شده <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">

      <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"https://localhost/prestashop/img/pr/default.jpg\" /></span>
      <span class=\"employee_profile\">Mostafa خوش آمدی</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashop/admin096vm4ztc/index.php/configure/advanced/employees/1/edit?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\">
      <i class=\"material-icons\">edit</i>
      <span>نمایه‌ی شما</span>
    </a>
    </div>

    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">book</i> منابع</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">school</i> تمرین کردن</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">person_pin_circle</i> یک متخصص پیدا کنید</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">extension</i> بازاچه پرستاشاپ</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">help</i> مرکز پشتیبانی</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://localhost/prestashop/admin096vm4ztc/index.php?controller=AdminLogin&amp;logout=1&amp;token=e195c6a7a95653952afe8450e7ee40f2\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>خروج از حساب</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashop/admin096vm4ztc/index.php/configure/advanced/employees/toggle-navigation?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"https://localhost/prestashop/admin096vm4ztc/index.php?controller=AdminDashboard&amp;token=de21461e4a779d2af851646fcb6205ab\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>پیشخوان</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">فروش</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/prestashop/admin096vm4ztc/index.php/sell/orders/?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      سفارش‌ها
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/prestashop/admin096vm4ztc/index.php/sell/orders/?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\"> سفارش‌ها
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/prestashop/admin096vm4ztc/index.php/sell/orders/invoices/?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\"> فاکتور
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestashop/admin096vm4ztc/index.php/sell/orders/credit-slips/?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\"> رسیدهای مالی
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestashop/admin096vm4ztc/index.php/sell/orders/delivery-slips/?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\"> رسیدهای تحویل
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"https://localhost/prestashop/admin096vm4ztc/index.php?controller=AdminCarts&amp;token=5e91b080c6624b081502b5b91e972711\" class=\"link\"> سبدهای خرید
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestashop/admin096vm4ztc/index.php/sell/catalog/products?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      کاتالوگ
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/prestashop/admin096vm4ztc/index.php/sell/catalog/products?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\"> محصول‌ها
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prestashop/admin096vm4ztc/index.php/sell/catalog/categories?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\"> شاخه‌ها
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/prestashop/admin096vm4ztc/index.php/sell/catalog/monitoring/?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\"> بازبینی
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"https://localhost/prestashop/admin096vm4ztc/index.php?controller=AdminAttributesGroups&amp;token=6a9c5679b2d5c44b8d881976aa31c6c4\" class=\"link\"> مشخصه‌ها و ویژگی‌ها
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/prestashop/admin096vm4ztc/index.php/sell/catalog/brands/?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\"> برندها و فراهم‌کننده‌ها
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/prestashop/admin096vm4ztc/index.php/sell/attachments/?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\"> فایل‌ها
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"https://localhost/prestashop/admin096vm4ztc/index.php?controller=AdminCartRules&amp;token=72522c877e87fd820ee6daf38c462695\" class=\"link\"> تخفیف ها
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestashop/admin096vm4ztc/index.php/sell/stocks/?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\"> موجودی
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestashop/admin096vm4ztc/index.php/sell/customers/?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      مشتریان
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/prestashop/admin096vm4ztc/index.php/sell/customers/?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\"> مشتریان
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestashop/admin096vm4ztc/index.php/sell/addresses/?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\"> آدرس‌ها
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"https://localhost/prestashop/admin096vm4ztc/index.php?controller=AdminCustomerThreads&amp;token=31cd560ed6fc1476e3fa11adf1d27ec8\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      خدمات مشتریان
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"https://localhost/prestashop/admin096vm4ztc/index.php?controller=AdminCustomerThreads&amp;token=31cd560ed6fc1476e3fa11adf1d27ec8\" class=\"link\"> خدمات مشتریان
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/prestashop/admin096vm4ztc/index.php/sell/customer-service/order-messages/?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\"> پیام‌‌‌‌‌‌های سفارش
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"https://localhost/prestashop/admin096vm4ztc/index.php?controller=AdminReturn&amp;token=64073d69a70e5ef1d4c370bc36d01634\" class=\"link\"> کالاهای برگشتی
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"https://localhost/prestashop/admin096vm4ztc/index.php?controller=AdminStats&amp;token=b36e4b95c02f83f244e7337406f75d60\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      آمار
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">بهبود</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/prestashop/admin096vm4ztc/index.php/improve/modules/manage?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      ماژول‌ها
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestashop/admin096vm4ztc/index.php/improve/modules/manage?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\"> مدیریت ماژول‌ها
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/prestashop/admin096vm4ztc/index.php/modules/addons/modules/catalog?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\"> کاتالوگ ماژول‌ها
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/prestashop/admin096vm4ztc/index.php/improve/design/themes/?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      طراحی
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/prestashop/admin096vm4ztc/index.php/improve/design/themes/?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\"> قالب و لوگو
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"140\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/prestashop/admin096vm4ztc/index.php/modules/addons/themes/catalog?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\"> Theme Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/prestashop/admin096vm4ztc/index.php/improve/design/mail_theme/?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\"> قالب ایمیل
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestashop/admin096vm4ztc/index.php/improve/design/cms-pages/?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\"> صفحه‌ها
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestashop/admin096vm4ztc/index.php/improve/design/modules/positions/?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\"> موقعیت‌ها
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"https://localhost/prestashop/admin096vm4ztc/index.php?controller=AdminImages&amp;token=90f7cb94e7cf3b11b381a9262b86df0e\" class=\"link\"> تنظیمات تصاویر
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/prestashop/admin096vm4ztc/index.php/modules/link-widget/list?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\"> پیوند دادن فهرست
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"https://localhost/prestashop/admin096vm4ztc/index.php?controller=AdminCarriers&amp;token=598727fc6c4cb6238d3553f898d20a2b\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      ارسال
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"https://localhost/prestashop/admin096vm4ztc/index.php?controller=AdminCarriers&amp;token=598727fc6c4cb6238d3553f898d20a2b\" class=\"link\"> حامل‎ها
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/prestashop/admin096vm4ztc/index.php/improve/shipping/preferences/?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\"> تنظیمات
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/prestashop/admin096vm4ztc/index.php/improve/payment/payment_methods?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      پرداخت
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/prestashop/admin096vm4ztc/index.php/improve/payment/payment_methods?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\"> روش‌های پرداخت
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/prestashop/admin096vm4ztc/index.php/improve/payment/preferences?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\"> تنظیمات
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestashop/admin096vm4ztc/index.php/improve/international/localization/?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      بين المللي
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/prestashop/admin096vm4ztc/index.php/improve/international/localization/?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\"> بومی سازی
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/prestashop/admin096vm4ztc/index.php/improve/international/zones/?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\"> مکان‌ها
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestashop/admin096vm4ztc/index.php/improve/international/taxes/?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\"> مالیات‌ها
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/prestashop/admin096vm4ztc/index.php/improve/international/translations/settings?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\"> ترجمه‌ها
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"142\" id=\"subtab-Marketing\">
                    <a href=\"https://localhost/prestashop/admin096vm4ztc/index.php?controller=AdminPsfacebookModule&amp;token=374770312b648860681228b7ac19030d\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-142\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"143\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"https://localhost/prestashop/admin096vm4ztc/index.php?controller=AdminPsfacebookModule&amp;token=374770312b648860681228b7ac19030d\" class=\"link\"> Facebook
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"145\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"https://localhost/prestashop/admin096vm4ztc/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=b6ac27342186b0f01e93efd587424b09\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">پیکربندی</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/prestashop/admin096vm4ztc/index.php/configure/shop/preferences/preferences?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      پارامترهای فروشگاه
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/prestashop/admin096vm4ztc/index.php/configure/shop/preferences/preferences?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\"> عمومی
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/prestashop/admin096vm4ztc/index.php/configure/shop/order-preferences/?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\"> تنظیمات سفارش
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/prestashop/admin096vm4ztc/index.php/configure/shop/product-preferences/?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\"> محصولات
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestashop/admin096vm4ztc/index.php/configure/shop/customer-preferences/?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\"> تنظیمات مشتری
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestashop/admin096vm4ztc/index.php/configure/shop/contacts/?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\"> تماس با ما
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/prestashop/admin096vm4ztc/index.php/configure/shop/seo-urls/?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\"> بازدید و سئو
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"https://localhost/prestashop/admin096vm4ztc/index.php?controller=AdminSearchConf&amp;token=23b0947ddc3dede371d73f7c754e64c6\" class=\"link\"> جستجو
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"134\" id=\"subtab-AdminGamification\">
                                <a href=\"https://localhost/prestashop/admin096vm4ztc/index.php?controller=AdminGamification&amp;token=a78be68b851f551a9ff6917267cf346d\" class=\"link\"> Merchant Expertise
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/prestashop/admin096vm4ztc/index.php/configure/advanced/system-information/?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      پارامترهای پیشرفته
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/prestashop/admin096vm4ztc/index.php/configure/advanced/system-information/?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\"> اطلاعات
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/prestashop/admin096vm4ztc/index.php/configure/advanced/performance/?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\"> کارایی
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/prestashop/admin096vm4ztc/index.php/configure/advanced/administration/?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\"> مدیریت
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestashop/admin096vm4ztc/index.php/configure/advanced/emails/?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\"> ایمیل
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/prestashop/admin096vm4ztc/index.php/configure/advanced/import/?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\"> واردسازی
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/prestashop/admin096vm4ztc/index.php/configure/advanced/employees/?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\"> کارمندان
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/prestashop/admin096vm4ztc/index.php/configure/advanced/sql-requests/?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\"> پایگاه داده
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestashop/admin096vm4ztc/index.php/configure/advanced/logs/?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\"> گزارش‌ها
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestashop/admin096vm4ztc/index.php/configure/advanced/webservice-keys/?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\"> وب سرویس
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"120\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/prestashop/admin096vm4ztc/index.php/configure/advanced/feature-flags/?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" class=\"link\"> ویژگی‌های آزمایشی
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"148\" id=\"subtab-AdminDBSThemeModule\">
                    <a href=\"https://localhost/prestashop/admin096vm4ztc/index.php?controller=AdminPrestaplusPanel&amp;token=fe140cfdcf32914566880f501e383a0a\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      پرستافا
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-148\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"149\" id=\"subtab-AdminPrestaplusPanel\">
                                <a href=\"https://localhost/prestashop/admin096vm4ztc/index.php?controller=AdminPrestaplusPanel&amp;token=fe140cfdcf32914566880f501e383a0a\" class=\"link\"> پرستاپلاس
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"151\" id=\"subtab-AdminPrestapayPanel\">
                                <a href=\"https://localhost/prestashop/admin096vm4ztc/index.php?controller=AdminPrestapayPanel&amp;token=fbb95587b4fd625b3c9549b94ff48011\" class=\"link\"> پرستاپی
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>

<div id=\"main-div\">
          
<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">مکان‌ها</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/prestashop/admin096vm4ztc/index.php/improve/international/zones/?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" aria-current=\"page\">منطقه‌ها</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            منطقه‌ها          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/prestashop/admin096vm4ztc/index.php/improve/international/zones/new?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\"                  title=\"افزودن منطقه‎ی جدید\"                >
                  <i class=\"material-icons\">add_circle_outline</i>                  افزودن منطقه‎ی جدید
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"راهنما\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/prestashop/admin096vm4ztc/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Ffa%252Fdoc%252FAdminZones%253Fversion%253D1.7.8.1%2526country%253Dfa/%D8%B1%D8%A7%D9%87%D9%86%D9%85%D8%A7?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\"
                   id=\"product_form_open_help\"
                >
                  راهنما
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <li class=\"nav-item\">
                    <a href=\"/prestashop/admin096vm4ztc/index.php/improve/international/zones/?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\" id=\"subtab-AdminZones\" class=\"nav-link tab active current\" data-submenu=\"73\">
                      منطقه‌ها
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"https://localhost/prestashop/admin096vm4ztc/index.php?controller=AdminCountries&token=b62545432833311acbf0338f3c63b2a5\" id=\"subtab-AdminCountries\" class=\"nav-link tab \" data-submenu=\"74\">
                      کشورها
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"https://localhost/prestashop/admin096vm4ztc/index.php?controller=AdminStates&token=a6c914b9671ad22015c795e9664f8f56\" id=\"subtab-AdminStates\" class=\"nav-link tab \" data-submenu=\"75\">
                      استان‎ها
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item  pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/prestashop/admin096vm4ztc/index.php/improve/international/zones/new?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\"              title=\"افزودن منطقه‎ی جدید\"            >
              افزودن منطقه‎ی جدید
              <i class=\"material-icons\">add_circle_outline</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"راهنما\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/prestashop/admin096vm4ztc/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Ffa%252Fdoc%252FAdminZones%253Fversion%253D1.7.8.1%2526country%253Dfa/%D8%B1%D8%A7%D9%87%D9%86%D9%85%D8%A7?_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4\"
            >
              راهنما
            </a>
                        </div>
    </div>
  </div>
  <script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'ماژول‌ها و سرویس‌های توصیه شده',
        'Close': 'بستن',
      },
      recommendedModulesUrl: '/prestashop/admin096vm4ztc/index.php/modules/addons/modules/recommended?tabClassName=AdminZones&_token=xCF5S7njCl-T5ePo6j02vp04MDTRz7g7tQQx7eKQwQ4',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 1,
      shouldUseLegacyTheme: 0,
    });
  }
</script>

</div>
      
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1265
        $this->displayBlock('content_header', $context, $blocks);
        // line 1266
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1267
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1268
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1269
        echo "
            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>اوه نه!</h1>
  <p class=\"mt-3\">
    نسخه‌ی موبایل این صفحه هنوز آماده نشده است.
  </p>
  <p class=\"mt-2\">
    لطفاً از یک رایانه‌ی رومیزی برای دسترسی به این صفحه استفاده کنید تا روزی که این صفحه با موبایل سازگار شود.
  </p>
  <p class=\"mt-2\">
    متشکریم.
  </p>
  <a href=\"https://localhost/prestashop/admin096vm4ztc/index.php?controller=AdminDashboard&amp;token=de21461e4a779d2af851646fcb6205ab\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    قبلی
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FA&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fa/login?email=RaisiArdal%40gmail.com&amp;firstname=Mostafa&amp;lastname=Raisi&amp;website=http%3A%2F%2Flocalhost%2Fprestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FA&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/prestashop/admin096vm4ztc/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">فروشگاه خود را به بازار PrestaShop وصل کنید تا به طور خودکار تمام خریدهای Addons خود را وارد کنید.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>یک حساب کاربری ندارید؟</h4>
\t\t\t\t\t\t<p class='text-justify'>قدرت افزونه‌های پرستاشاپ را کشف کنید! بازارچه رسمی پرستاشاپ را ببینید و بیش از 3500 ماژول بدیع را بیابید که نرخ تبدیل را بهینه می کند، بازدیدکنندگان را افزایش می دهد، بر میزان وفاداری مشتریان  و سوددهی شما می افزاید</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>اتصال به افزونه‌های پرستاشاپ</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/fa/forgot-your-password\">کلمه‌ی عبورم را فراموش کرده‌ام</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fa/login?email=RaisiArdal%40gmail.com&amp;firstname=Mostafa&amp;lastname=Raisi&amp;website=http%3A%2F%2Flocalhost%2Fprestashop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FA&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tایجاد حساب کاربری
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> ورود به حساب
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1376
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 140
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1265
    public function block_content_header($context, array $blocks = [])
    {
    }

    // line 1266
    public function block_content($context, array $blocks = [])
    {
    }

    // line 1267
    public function block_content_footer($context, array $blocks = [])
    {
    }

    // line 1268
    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1376
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__4b6fb72c466caefce1663262866fd63f12888e9e2c19ca08442152f4fb3919d4";
    }

    public function getDebugInfo()
    {
        return array (  1466 => 1376,  1461 => 1268,  1456 => 1267,  1451 => 1266,  1446 => 1265,  1437 => 140,  1429 => 1376,  1320 => 1269,  1317 => 1268,  1314 => 1267,  1311 => 1266,  1309 => 1265,  180 => 140,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__4b6fb72c466caefce1663262866fd63f12888e9e2c19ca08442152f4fb3919d4", "");
    }
}
