{if isset($sidebar_array)}
    {foreach from=$sidebar_array item=menu}

        {if !isset($menu.is_show) OR (isset($menu.is_show) AND $menu.is_show)}

            {if isset($menu.before) } {$menu.before nofilter} {/if}

			<div class="list-group">

                {if isset($menu.title)}
					<div class="list-group-item disabled" href="#">

						<i class="{if isset($menu.icon) }{$menu.icon}{else}icon-caret-right{/if}"></i>&nbsp;

                        {$menu.title}

                        {if isset($menu.badge) && !empty($menu.badge)}<span class="badge">{$menu.badge}</span>{/if}

                        {if isset($menu.label.content)  && !empty($menu.label.content) }
							<span class="label {if isset($menu.label.class)}{$menu.label.class}{else}label-default{/if}">
								{$menu.label.content}
							</span>
                        {/if}

					</div>
                {/if}

                {foreach from=$menu.items item=item key=item_key }
                    {if !isset($item.is_show) OR (isset($item.is_show) AND $item.is_show)}
						<div class="list-group-item ">
							<a class="{if !empty($item.active) OR ($item_key == $active_section) }active1{/if}" href="{if isset($item.link)}{$item.link}{else}#{/if}">
								<i class="{if isset($item.icon) }{$item.icon}{else}icon-caret-right{/if}"></i>&nbsp;
                                {$item.title}

                                {if isset($item.badge) && !empty($item.badge)}<span class="badge psfpal_bg_warning">{$item.badge}</span>{/if}

                                {if isset($item.label.content) && !empty($item.label.content)}
									<span class="label {if isset($item.label.class)}{$item.label.class}{else}label-default{/if}">
										{$item.label.content}
									</span>
                                {/if}
							</a>
							<span class="grower{if !empty($item.active) OR ($item_key == $active_section) } active1{/if}
							 {if !empty($item.active) OR ($item_key == $active_section) } open{else}close{/if}"></span>
							<ul {if !empty($item.active) OR ($item_key == $active_section) } style="display: block" {/if}>
								<li><a class="active" href="#"><i class="{if isset($item.icon) }{$item.icon}{else}icon-caret-right{/if}"></i>&nbsp;تست تستس</a></li>
								<li><a href="#"><i class="{if isset($item.icon) }{$item.icon}{else}icon-caret-right{/if}"></i>&nbsp;تست تستس</a></li>
							</ul>
						</div>
                    {/if}
                {/foreach}

			</div>

            {if isset($menu.after) } {$menu.after nofilter} {/if}

        {/if}

    {/foreach}
{/if}
<script type="text/javascript">
    $(document).ready(function(){
        $(".grower").click(function(){
            var element = $(this);
            if(element.hasClass('open')){
                element.addClass('close').removeClass('open');
                element.parent().find('ul:first').slideUp();
            }
            else{
                $('.grower').not(element).addClass('close').removeClass('open');
                var elementUL = element.parent().find('ul:first');
                $('.list-group-item ul').not(elementUL).slideUp();

                element.addClass('open').removeClass('close');
                element.parent().find('ul:first').slideDown();
            }
        });
    });
</script>