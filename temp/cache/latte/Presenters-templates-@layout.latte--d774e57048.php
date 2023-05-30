<?php

use Latte\Runtime as LR;

/** source: D:\IT\htdocs\nette\app\Presenters/templates/@layout.latte */
final class Templated774e57048 extends Latte\Runtime\Template
{
	public const Blocks = [
		['scripts' => 'blockScripts'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		echo '<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>';
		if ($this->hasBlock('title')) /* line 7 */ {
			$this->renderBlock('title', [], function ($s, $type) {
				$ʟ_fi = new LR\FilterInfo($type);
				return LR\Filters::convertTo($ʟ_fi, 'html', $this->filters->filterContent('stripHtml', $ʟ_fi, $s));
			}) /* line 7 */;
			echo ' | ';
		}
		echo 'PojištěniApp</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<header>
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark" aria-label="Third navbar example">
		<div class="container-fluid">
			<a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('default')) /* line 16 */;
		echo '" class="navbar-brand">PojištěniApp</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarsExample03">
				<ul class="navbar-nav me-auto mb-2 mb-sm-0">
					<li class="nav-item">
						<a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('default')) /* line 24 */;
		echo '" class="nav-link active" aria-current="page">Pojištěnci</a>
					</li>
					<li class="nav-item">
						<a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('OAplikaci')) /* line 27 */;
		echo '" class="nav-link">O aplikaci</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</header>
';
		foreach ($flashes as $flash) /* line 34 */ {
			echo '	<div';
			echo ($ʟ_tmp = array_filter(['alert', 'alert-' . $flash->type])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($ʟ_tmp))) . '"' : "" /* line 34 */;
			echo '>';
			echo LR\Filters::escapeHtmlText($flash->message) /* line 34 */;
			echo '</div>
';

		}

		echo '<main role="main" class="container">
';
		$this->renderBlock('content', [], 'html') /* line 36 */;
		echo '</main>
<footer class="text-center text-white fixed-bottom" style="background-color: #21081a;">
	<div class="container p-4"></div>
	<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
		© ';
		echo LR\Filters::escapeHtmlText(date('Y')) /* line 41 */;
		echo '
		<a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('default')) /* line 42 */;
		echo '" class="text-white">PojištěníApp</a>
	</div>
	<!-- Copyright -->
</footer>
';
		$this->renderBlock('scripts', get_defined_vars()) /* line 46 */;
		echo '</body>
</html>
';
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['flash' => '34'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}


	/** {block scripts} on line 46 */
	public function blockScripts(array $ʟ_args): void
	{
		echo '		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://nette.github.io/resources/js/3/netteForms.min.js"></script>
';
	}
}
