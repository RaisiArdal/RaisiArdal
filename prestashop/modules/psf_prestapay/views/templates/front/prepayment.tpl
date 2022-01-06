<!-- START -- PrestaPay Module - Gate {$gate} Plugin - PrestaFa.com -->
<meta name="viewport" content="width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0">
<link rel="stylesheet" href="{$moduleUrl}views/css/payment.css" type="text/css" media="all" />
<div id="psf-payment">
    <div class="psf-payment-content">
        <img src="{$path}logo.png" title="{$gate_name}"/>
        <p>{l s='درحال ارسال به'} {$gate_name}</p>

        <div class="loader"></div>

        <div class="alert alert-warning">
            <small> چنانچه به درگاه پرداخت متصل نشدید روی دکمه پرداخت کلیک کنید</small>
        </div>
        <form name="formpayment" id="formpayment" action="{$redirect_link}" method="{if isset($form_method)}{$form_method}{else}post{/if}">
            <!-- #version1.2#  -->
            {if isset($form_post_data) }
                {foreach $form_post_data as $key => $value}
                    <input type="hidden" name="{$key}" value="{$value}" />
                {/foreach}
            {/if}
            <input type="submit" class="btn btn-success" value=" پرداخت" />
        </form>
        {if isset($btnbackUrl) && $btnbackUrl}
            <a href="{$btnbackUrl}" class="back-btn">{l s='بازگشت »' mod='psf_prestapay'}</a>
        {elseif isset($link)}
            <a href="{$link->getPageLink('order', true, NULL, 'step=3')|escape:'html'}" class="back-btn">{l s='بازگشت »' mod='psf_prestapay'}</a>
        {/if}
    </div>
</div>

<script type="text/javascript">
    setTimeout("document.forms.formpayment.submit();",600);
</script>
<!-- END -- PrestaPay Module - Gate {$gate} Plugin - PrestaFa.com -->
