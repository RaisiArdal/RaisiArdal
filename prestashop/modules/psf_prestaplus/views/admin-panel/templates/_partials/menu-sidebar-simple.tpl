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
						<a class="list-group-item {if !empty($item.active) OR ($item_key == $active_section && $controller != $module->pluginsAdminController)}active{/if}" href="{if isset($item.link)}{$item.link}{else}#{/if}">
							<i class="{if isset($item.icon) }{$item.icon}{else}icon-caret-right{/if}"></i>&nbsp;
							{$item.title}
							
							{if isset($item.badge) && !empty($item.badge)}<span class="badge psfpal_bg_warning">{$item.badge}</span>{/if}
							
							{if isset($item.label.content) && !empty($item.label.content)}
								<span class="label {if isset($item.label.class)}{$item.label.class}{else}label-default{/if}">
									{$item.label.content}
								</span>
							{/if}
						</a>
					{/if}
				{/foreach}
				
			</div>
			
			{if isset($menu.after) } {$menu.after nofilter} {/if}
		
		{/if}
		
	{/foreach}
{/if}