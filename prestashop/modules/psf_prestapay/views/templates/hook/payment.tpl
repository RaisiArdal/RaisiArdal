<!-- START -- PrestaPay Module - Gate {$gate} Plugin - PrestaFa.com -->
{if $is_ps17 and !isset($is_list) }
    <div class="row">
        <div class="col-xs-12">
            <p id="{$gate}" class="prestapay-gate payment_module ps17">
                <img src="{$path}logo.png" alt="{$title}"/>
                {$title}
            </p>
        </div>
    </div>
{else}
    <div class="row">
        <div class="col-xs-12">
            <p id="{$gate}" class="prestapay-gate payment_module">
                <a href="{$linkPayment|escape:'html'}" title="{$title}">
                    <img src="{$path}logo.png" alt="{$title}"/>
                    <span>{$title}</span>
                </a>
            </p>
        </div>
    </div>
{/if}
<!-- END -- PrestaPay Module - Gate {$gate} Plugin - PrestaFa.com -->