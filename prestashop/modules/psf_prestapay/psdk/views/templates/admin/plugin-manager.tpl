<div class="list-group">

	<div class="list-group-item disabled">
		<i class="icon-AdminParentModules"></i> {l s='مدیریت پلاگین های ماژول %s' mod=$module->name sprintf=$module->displayName}
	</div>

	{if $plugins_list}
		<table class="table">
			<tbody>
				{foreach $plugins_list as $plugin}
					<tr>
						<td class="{if $plugin->isEnabled()}module_active{else}module_inactive{/if}" style="width: 1%;">
							<img alt="{$plugin->name}" title="{l s='%s ( %s )' mod=$module->name sprintf=[$plugin->authorName,$plugin->name]}" src="{if $plugin->logoUrl}{$plugin->logoUrl}{else}{$plugins_dir_url}{$plugin->name}/logo.png{/if}" width="57">
						</td>
						<td>
							<div title="{$plugin->displayName} ( {$plugin->name} )">
								<div class="text-muted">
									<span class="text-warning">{$plugin->displayName}</span>
								</div>
								<div class="module_name">
									{if !empty($plugin->authorName)}
										<a href="{$plugin->authorUrl}">
											<small class="text-muted" style="font-size: 9px">{l s='طراحی و توسعه توسط ' mod=$module->name}</small><span class="text-muted">{$plugin->authorName}</span>
										</a>
									{/if}
									<small class="text-primary">
										{if $plugin->db_version}
											{l s='(نسخه نصب شده %s)' mod=$module->name sprintf=$plugin->db_version}
										{else}
											{l s='(نسخه %s)' mod=$module->name sprintf=$plugin->version}
										{/if}
									</small>
								</div>
								<p class="module_description " style="font-size: 10px">
									{$plugin->description}
									
									{if $plugin->infoUrl}
										<br><a href="{$plugin->infoUrl}" class="fancybox-quick-view"><i class="icon-search"></i> {l s='توضیحات بیشتر' mod=$module->name}</a>
									{/if}

								</p>
								{if $plugin->ws_incompatible}
									<small class="bg-warning text-warning" style="font-size: 11px">
										<i class="icon-wrench"></i>&nbsp; {l s='یک نسخه جدید برای پلاگین منتشر شده که با نسخه بالاتر از ماژول پرستاپلاس سازگار است!' mod=$module->name}
									</small>
								{/if}
							</div>
						</td>
						<td class="actions">
							<div class="btn-group-action">
								<div class="btn-group pull-right text-center">
									
									{if !$plugin->ws_version && !$plugin->isCompatible()}
									
										<small class="text-danger">
											{if $plugin->compatibleFrom && $plugin->compatibleTo }
												{l s='سازگار با %s از نسخه %s تا %s' mod=$module->name sprintf=[$module->displayName,$plugin->compatibleFrom,$plugin->compatibleTo]}
											{elseif $plugin->compatibleFrom }
												{l s='سازگار با %s از نسخه %s' mod=$module->name sprintf=[$module->displayName,$plugin->compatibleFrom]}
											{elseif $plugin->compatibleTo }
												{l s='سازگار با %s تا نسخه %s' mod=$module->name sprintf=[$module->displayName,$plugin->compatibleTo]}
											{/if}
										</small>
										
										<div class="alert bg-warning text-muted" style="padding: 5px;margin: 10px auto;">
											<i class="icon-warning"></i>&nbsp; {l s='نسخه ناسازگار' mod=$module->name}
										</div>

										<small class="text-danger"> 
											{if $plugin->compatiblePsFrom && $plugin->compatiblePsTo }
												{l s='سازگار با پرستاشاپ از نسخه %s تا %s' mod=$module->name sprintf=[$plugin->compatiblePsFrom,$plugin->compatiblePsTo]}
											{elseif $plugin->compatiblePsFrom }
												{l s='سازگار با پرستاشاپ از نسخه %s' mod=$module->name sprintf=$plugin->compatiblePsFrom}
											{elseif $plugin->compatiblePsTo }
												{l s='سازگار با پرستاشاپ تا نسخه %s' mod=$module->name sprintf=$plugin->compatiblePsTo}
											{/if}
										</small>
										
									{elseif !$plugin->ws_version && ($plugin->zipUrl or $plugin->buyUrl) }
									
										{if $plugin->zipUrl}
											<a class="btn btn-primary" href="{$page_link}&paction=download&pname={$plugin->name}">
												<i class="icon-download"></i>&nbsp; 
												{if $plugin->ws_version}
													{l s='دانلود نسخه جدید' mod=$module->name}
												{else}
													{l s='دانلود' mod=$module->name}
												{/if}
											</a>
										{else}
											<a class="btn btn-default label-tooltip" href="{$plugin->buyUrl}" {if $plugin->price} data-toggle="tooltip" data-original-title="{l s='%s' mod=$module->name sprintf=$plugin->price}"{/if}>
												<i class="icon-shopping-cart"></i>&nbsp; {l s='خرید پلاگین' mod=$module->name}
											</a>
										{/if}

									{elseif !$plugin->isInstalled()}
									
										<a class="btn btn-success" href="{$page_link}&paction=install&pname={$plugin->name}">
											<i class="icon-plus-sign-alt"></i>&nbsp; {l s='نصب' mod=$module->name}
										</a>
										
									{elseif !$plugin->isEnabled() }
									
										<a class=" btn btn-warning" href="{$page_link}&paction=enable&pname={$plugin->name}" onclick="" title="">
											<i class="icon-off"></i> {l s='فعال' mod=$module->name}
										</a>
										<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
											<span class="caret">&nbsp;</span>
										</button>
										<ul class="dropdown-menu">
											<li>
												<a href="{$page_link}&paction=uninstall&pname={$plugin->name}" onclick="" title="">
													<i class="icon-minus-sign-alt"></i> {l s='حذف نصب' mod=$module->name}
												</a>
											</li>
										</ul>
										
									{elseif $plugin->isOnDisk() && $plugin->isEnabled() }
									
										{if count($plugin->upgradeList) }
											<a class="btn btn-warning" href="{$page_link}&paction=upgrade&pname={$plugin->name}">
												<i class="icon-wrench"></i>&nbsp; {l s='ارتقا ماژول' mod=$module->name}
											</a>
											<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
												<span class="caret">&nbsp;</span>
											</button>
											<ul class="dropdown-menu">
												<li>
													<a href="{$page_link}&paction=disable&pname={$plugin->name}" onclick="" title="">
														<i class="icon-off"></i> {l s='غیرفعال' mod=$module->name}
													</a>
												</li>
												<li>
													<a href="{$page_link}&paction=uninstall&pname={$plugin->name}" onclick="" title="">
														<i class="icon-minus-sign-alt"></i> {l s='حذف نصب' mod=$module->name}
													</a>
												</li>
											</ul>
										{elseif version_compare($plugin->ws_version,$plugin->db_version,'>') && $plugin->zipUrl }
											<a class=" btn btn-warning" href="{$page_link}&paction=download&pname={$plugin->name}" onclick="" title="">
												<i class="icon-download"></i> {l s='دانلود و نصب نسخه جدید' mod=$module->name}
											</a>
											<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
												<span class="caret">&nbsp;</span>
											</button>
											<ul class="dropdown-menu">
												<li>
													<a href="{$page_link}&paction=disable&pname={$plugin->name}" onclick="" title="">
														<i class="icon-off"></i> {l s='غیرفعال' mod=$module->name}
													</a>
												</li>
												<li>
													<a href="{$page_link}&paction=uninstall&pname={$plugin->name}" onclick="" title="">
														<i class="icon-minus-sign-alt"></i> {l s='حذف نصب' mod=$module->name}
													</a>
												</li>
											</ul>
										{else}
											<a class=" btn btn-default" href="{$page_link}&paction=disable&pname={$plugin->name}" onclick="" title="">
												<i class="icon-off"></i> {l s='غیرفعال' mod=$module->name}
											</a>
											<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
												<span class="caret">&nbsp;</span>
											</button>
											<ul class="dropdown-menu">
												<li>
													<a href="{$page_link}&paction=uninstall&pname={$plugin->name}" onclick="" title="">
														<i class="icon-minus-sign-alt"></i> {l s='حذف نصب' mod=$module->name}
													</a>
												</li>
											</ul>
										{/if}
										
									{/if}
									
								</div>
							</div>
						</td>
					</tr>
				{/foreach}
			</tbody>
		</table>
	{/if}
</div>