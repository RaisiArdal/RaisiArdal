<div class="panel">
	<div class="panel-heading">
		<i class="icon-rocket"></i>&nbsp;&nbsp; {$module->displayName} {$module->version}
	</div>
	<div class="row">
		<div style="font-size: 13px;text-align: justify;">
			{$module->description}
			<br><br>
			{$module->description_full}
		</div>
		
		<hr>
			
		{if !empty($wsData.product_info.intro_link) }
			<a href="{$wsData.product_info.intro_link}" class="btn btn-default">
				<i class="icon-info-circle"></i>&nbsp;
				توضیحات و معرفی ماژول
			</a>
		{/if}
		{if !empty($wsData.product_info.help_link) }
			<a href="{$wsData.product_info.help_link}" class="btn btn-default">
				<i class="icon-life-ring"></i>&nbsp;
				آموزش و راهنمایی
			</a>
		{/if}
		{if !empty($wsData.product_info.qa_link) }
			<a href="{$wsData.product_info.qa_link}" class="btn btn-default">
				<i class="icon-question-circle"></i>&nbsp;
				پرسش و پاسخ
			</a>
		{/if}
		{if !empty($wsData.product_info.update_link) AND $hasNewVersion }
			<a href="{$wsData.product_info.update_link}" class="btn btn-warning pull-right">
				<i class="icon-refresh"></i>&nbsp;
				به روز رسانی
			</a>
		{/if}
	</div>
</div>

{if isset($wsData.product_info.special_offer) && !empty($wsData.product_info.special_offer) }
	<div class="panel">		
		<div class="panel-heading">
			<i class="icon-bolt"></i> پیشنهاد ویژه <b>{$module->displayName}</b>
		</div>
		<div class="row">
			{$wsData.product_info.special_offer}
		</div>
	</div>
{/if}

{if isset($wsData.offer) && !empty($wsData.offer) }
	<div class="panel">		
		<div class="panel-heading">
			<i class="icon-check-circle"></i> پیشنهاد ویژه پرستافا
		</div>
		<div class="row">
			{$wsData.offer}
		</div>
	</div>
{/if}


{if isset($wsData.links) && count($wsData.links) }
	<div class="panel">
		<div class="panel-heading">
			<i class="icon-link"></i>
			&nbsp;&nbsp; لینک های پیشنهادی
		</div>

		<div class="row">
			<table class="table">
				<tbody>
					{foreach from=$wsData.links key=link_title item=link_url}
						<tr class="{cycle values='odd,even'}">		
							<td class="pointer">
								<i class="icon-caret-right"></i>
								<a class="active" href="{$link_url}">
									{$link_title}
								</a>
							</td>
						</tr>
					{/foreach}
				</tbody>
			</table>
		</div>
	</div>
{/if}