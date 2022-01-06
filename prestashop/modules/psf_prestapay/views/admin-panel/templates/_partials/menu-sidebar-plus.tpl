{if isset($sidebar_array)}
	{foreach from=$sidebar_array item=menu}
	
		{if !isset($menu.is_show) OR (isset($menu.is_show) AND $menu.is_show)}
			
			{if isset($menu.before) } {$menu.before nofilter} {/if}
			
			<div class="list-group psf_pp_panel">
			
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
				
				{foreach from=$menu.items item=item key=item_key}
					{if !isset($item.is_show) OR (isset($item.is_show) AND $item.is_show)}
						<div class="list-group-item">
							<a class="{if !empty($item.active) OR ($item_key == $active_section && $controller != $module->pluginsAdminController)}active{/if}
							{if isset($item.plugin) && !empty($item.sub_menus)}psf-plugin-has-submenu{/if}" href="{if isset($item.link)}{$item.link}{else}#{/if}">
								<i class="{if isset($item.icon) }{$item.icon}{else}icon-caret-right{/if}"></i>&nbsp;
								{$item.title}


								
								{if !empty($item.badges) && is_array($item.badges)}
									{foreach from=$item.badges item=badge}
										{if is_array($badge) && !empty($badge.value)}
											<span class="badge psf-plugin-badge {if isset($badge.type)}badge-{$badge.type}{else}badge-success{/if}">
												{$badge.value}
											</span>
										{elseif !is_array($badge) && !empty($badge)}
											<span class="badge psf-plugin-badge badge-plus">{$badge}</span>
										{/if}
									{/foreach}
								{elseif !empty($item.badges) && !is_array($item.badges)}
									<span class="badge psf-plugin-badge badge-plus">{$item.badges}</span>
								{/if}

								{if isset($item.label.content) && !empty($item.label.content)}
									<span class="label {if isset($item.label.class)}{$item.label.class}{else}label-default{/if}">
										{$item.label.content}
									</span>
								{/if}
							</a>
							{if isset($item.plugin) && isset($item.sub_menus) && !empty($item.sub_menus)}
								<span class="grower 
								{if $item.plugin == $plugin && empty($class)}active{/if}
								{if $item.plugin == $plugin && !empty($class)}open{else}close{/if}"></span>
								<ul {if $item.plugin == $plugin && !empty($class)}class="open"{/if}>
									{foreach from=$item.sub_menus item=sub_menu key=sub_key}
										<li>
											<a class="{if isset($sub_menu.active)}active{/if}" href="{$sub_menu.link}">

												{if isset($sub_menu.icon)}<i class="{$sub_menu.icon}"></i>{/if}&nbsp; 
												{$sub_menu.title}
												{if isset($sub_menu.badge)}<span class="badge psf-plugin-badge badge-plus">{$sub_menu.badge}</span>{/if}
											</a>
										</li>
									{/foreach}
								</ul>
							{/if}
						</div>
					{/if}
				{/foreach}
				
			</div>
			
			{if isset($menu.after) } {$menu.after nofilter} {/if}
		
		{/if}
		
	{/foreach}
{/if}

{literal}
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
{/literal}