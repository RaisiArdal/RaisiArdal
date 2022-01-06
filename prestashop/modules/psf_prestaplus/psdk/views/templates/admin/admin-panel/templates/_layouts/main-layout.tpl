{if isset($_positions.HEADER)}
	{$_positions.HEADER}
{/if}

<div class="panel">

	{if isset($_positions.TOP_CONTAINER)}
		{$_positions.TOP_CONTAINER}
	{/if}

	<div class="row">
	
		<div class="col-md-3">
			{if isset($_positions.SIDEBAR)}
				{$_positions.SIDEBAR}
			{/if}
		</div>
		
		<div id="moduleContainer" class="col-md-9">
		
			{if isset($_positions.TOP_CONTENT)}
				{$_positions.TOP_CONTENT}
			{/if}
			
			{if isset($_flash.message) && !empty($_flash.message)}
				<div class="row">
					<div class="col-sm-12">
						<div class="alert alert-{if isset($_flash.type)}{$_flash.type}{else}info{/if} ">
							<button type="button" class="close" data-dismiss="alert">×</button>
							{$_flash.message}
						</div>
					</div>
				</div>
			{/if}
			
			{if $show_native_reports}
				{if isset($conf)}
					<div class="bootstrap">
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							{$conf}
						</div>
					</div>
				{/if}
				{if count($errors) && current($errors) != ''}
					<div class="bootstrap">
						<div class="alert alert-danger">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
						{if count($errors) == 1}
							{reset($errors)}
						{else }
							{l s='%d errors' sprintf=$errors|count}
							<br/>
							<ol>
								{foreach $errors as $error}
									<li>{$error}</li>
								{/foreach}
							</ol>
						{/if}
						</div>
					</div>
				{/if}
				{if isset($informations) && count($informations) && $informations}
					<div class="bootstrap">
						<div class="alert alert-info">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							<ul id="infos_block" class="list-unstyled">
								{foreach $informations as $info}
									<li>{$info}</li>
								{/foreach}
							</ul>
						</div>
					</div>
				{/if}
				{if isset($confirmations) && count($confirmations) && $confirmations}
					<div class="bootstrap">
						<div class="alert alert-success" style="display:block;">
							{foreach $confirmations as $conf}
								{$conf}
							{/foreach}
						</div>
					</div>
				{/if}
				{if count($warnings)}
					<div class="bootstrap">
						<div class="alert alert-warning">
							<button type="button" class="close" data-dismiss="alert">&times;</button>
							{if count($warnings) > 1}
								<h4>{l s='There are %d warnings:' sprintf=count($warnings)}</h4>
							{/if}
							<ul class="list-unstyled">
								{foreach $warnings as $warning}
									<li>{$warning}</li>
								{/foreach}
							</ul>
						</div>
					</div>
				{/if}
			{/if}
			
			{$_content}
			
			{if isset($_positions.BOTTOM_CONTENT)}
				{$_positions.BOTTOM_CONTENT}
			{/if}
			
		</div>
	</div>
	
	{if isset($_positions.BOTTOM_CONTAINER)}
		{$_positions.BOTTOM_CONTAINER}
	{/if}

</div>

{if isset($_positions.FOOTER)}
	{$_positions.FOOTER}
{/if}
