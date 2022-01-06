
    <!-- START -- PrestaPay Module - Gate {$gate} Plugin - PrestaFa.com -->
    <link rel="stylesheet" href="{$moduleUrl}views/css/payment.css" type="text/css" media="all" />
    <div id="psf-payment" class="validation ps17">
        <div class="psf-payment-content">
            {if isset($id_order) }
                <div id="psf-content-top">
                    <h3>{l s='پرداخت شما تایید شد.' mod="psf_prestapay"}</h3>
                    <p>
                        <strong>{l s='شماره پیگیری پرداخت:' mod="psf_prestapay"} </strong>{$reference_payment}
                    </p>
                </div>
                <div id="psf-content-message">
                    {$messageConfirmation nofilter}
                </div>
                <div id="psf-content-download">
                    {if $show_link_download}
                        {assign var='virtual' value='1'}
                        {foreach from=$products item=product key=k}
                            {if !isset($product.deleted) && $product.download_hash  && $product.display_filename != '' && $product.product_quantity_refunded == 0 && $product.product_quantity_return == 0}
                                {if $virtual == 1}
                                    <div class="link_file">
                                    <h6>{l s='محصولات را دانلود کنید : '  mod='psf_prestapay'}</h6>
                                    {assign var='virtual' value='0'}
                                {/if}
                                {if isset($is_guest) && $is_guest}
                                    <a href="{$link->getPageLink('get-file', true, NULL, "key={$product.filename|escape:'html':'UTF-8'}-{$product.download_hash|escape:'html':'UTF-8'}&id_order={$order->id}&secure_key={$order->secure_key}")|escape:'html':'UTF-8'}" >{l s='دانلود :'  mod='psf_prestapay'}{$product.product_name|escape:'html':'UTF-8'}</a>
                                {else}
                                    <a href="{$link->getPageLink('get-file', true, NULL, "key={$product.filename|escape:'html':'UTF-8'}-{$product.download_hash|escape:'html':'UTF-8'}")|escape:'html':'UTF-8'}" >{l s='دانلود :'  mod='psf_prestapay'}{$product.product_name|escape:'html':'UTF-8'}</a>
                                {/if}

                            {/if}
                        {/foreach}
                        {if $virtual == 0}<!-- end link_file --></div>{/if}
                    {/if}
                </div>
                <div id="psf-content-bottom">
                    <p>
                        {l s='در صورتی که هرگونه سوال، نظر یا مشکلی دارید با بخش' mod='psf_prestapay'}
                        <a href="{$link->getPageLink('contact', true)}">
                            <strong>{l s='پشتیبانی مشتریان تماس بگیرید.' mod='psf_prestapay'}</strong>
                        </a>
                    </p>
                    {if $is_guest}
                        <p class="cart_navigation exclusive">
                            <a class="button-exclusive btn btn-default" href="{$link->getPageLink('guest-tracking', true, NULL, "id_order={$reference_order|urlencode}&email={$email|urlencode}")|escape:'html':'UTF-8'}" title="{l s='دنبال کردن سفارش' mod='psf_prestapay'}">» {l s='دنبال کردن سفارش' mod='psf_prestapay'}</a>
                        </p>
                    {else}
                        <p class="cart_navigation exclusive">
                            <a class="button-exclusive btn btn-default" href="{$link->getPageLink('history', true)|escape:'html':'UTF-8'}" title="{l s='نمایش سفارش های من' mod='psf_prestapay'}">» {l s='نمایش سفارش های من' mod='psf_prestapay'}</a>
                        </p>
                    {/if}
                </div>
            {/if}
        </div>
    </div>

