
<link rel="stylesheet" href="{$cssFile}" type="text/css" media="all" />

<div id="psf-payment">
    <div class="psf-payment-content errors">
        <div class="alert alert-danger">
            <img src="{$errorIcon}" class="error-icon">
            <br>
            <strong>{l s='خطا :' mod='psf_prestapay'}</strong>
            <span>متاسفانه تمامی درگاه‌های پرداخت فروشگاه با خطا مواجه شده‌اند.</span>
        </div>
        <a href="/" class="back-btn" style="float: right">{l s='« خانه' mod='psf_prestapay'}</a>
        {if isset($btnbackUrl) && $btnbackUrl}
            <a href="/" class="back-btn">{l s='بازگشت »' mod='psf_prestapay'}</a>
        {else}
            <a href="{$link->getPageLink('order', true, NULL, "step=3")|escape:'html'}" class="back-btn">{l s='بازگشت و انتخاب روش پرداخت دیگر »' mod='psf_prestapay'}</a>
        {/if}
    </div>
</div>
