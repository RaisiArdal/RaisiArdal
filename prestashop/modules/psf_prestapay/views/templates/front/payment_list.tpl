
<!-- START -- PrestaPay Module - Gates - PrestaFa.com -->
<title>{l s='لیست درگاه های پرداخت' mod='psf_prestapay'}</title>
<link rel="stylesheet" href="{$moduleUrl}views/css/payment.css" type="text/css" media="all" />
<div id="psf-payment">
    <div class="psf-payment-content">
        {if isset($trans_amount)}
        <p>
            <strong>{l s='مبلغ قابل پرداخت :' mod="psf_prestapay"} </strong>{$trans_amount} 
        </p>
        <br/>
        {/if}
        <p>{l s='درگاه پرداخت را جهت اتصال به بانک انتخاب کنید.' mod='psf_prestapay'}</p>
        {if $is_ps17 }
            {$output nofilter}
        {else}
            {$output}
        {/if}
    </div>
</div>
<!-- END -- PrestaPay Module - Gates - PrestaFa.com -->