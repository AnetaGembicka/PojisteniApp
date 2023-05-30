<?php

use Latte\Runtime as LR;

/** source: D:\IT\htdocs\nette\app\Presenters/templates/Home/oAplikaci.latte */
final class Template98fd02f8a5 extends Latte\Runtime\Template
{
	public const Blocks = [
		['content' => 'blockContent'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		$this->renderBlock('content', get_defined_vars()) /* line 1 */;
	}


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		echo '<h2>O aplikaci</h2>
<p>Vítejte v aplikaci pro evidenci pojištěných
<div>Zadejte prosím své údaje pro zpracování.</div>
<div>Děkujeme za použití aplikace.</div>
</p>
';
	}
}
