<?php

use Latte\Runtime as LR;

/** source: D:\IT\htdocs\nette\app\Presenters/templates/Home/default.latte */
final class Template5e0dfd5544 extends Latte\Runtime\Template
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


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['pojistenec' => '11'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<br/>
<h2>Pojištěnci</h2>
<br/>
<table class="table striped table-striped table-hover">
    <tr>
        <th>Jméno a Příjmení</th>
        <th>Telefon</th>
        <th>Věk</th>
    </tr>
';
		foreach ($pojistenci as $pojistenec) /* line 11 */ {
			echo '        <tr>
          <td>';
			echo LR\Filters::escapeHtmlText($pojistenec->jmeno) /* line 13 */;
			echo ' ';
			echo LR\Filters::escapeHtmlText($pojistenec->prijmeni) /* line 13 */;
			echo '</td>
          <td>';
			echo LR\Filters::escapeHtmlText($pojistenec->telefon) /* line 14 */;
			echo '</td>
          <td>';
			echo LR\Filters::escapeHtmlText($pojistenec->vek) /* line 15 */;
			echo '</td>
        </tr>
';

		}

		echo '</table>
<br/>
<h3>Nový pojištěnec</h3>
<div class="row">
    <div class="col-md-12 mx-auto">
';
		$form = $this->global->formsStack[] = $this->global->uiControl['pojistenecForm'] /* line 24 */;
		echo '        <form';
		echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin(end($this->global->formsStack), [], false) /* line 24 */;
		echo '>
            <div class="form-group row">
            <div class="col-sm-6">
                <label';
		echo ($ʟ_input = Nette\Bridges\FormsLatte\Runtime::item('jmeno', $this->global))->getLabelPart()->attributes() /* line 27 */;
		echo '>Jméno</label>
                <input';
		echo ($ʟ_input = Nette\Bridges\FormsLatte\Runtime::item('jmeno', $this->global))->getControlPart()->addAttributes(['class' => null, 'placeholder' => null])->attributes() /* line 28 */;
		echo ' class="form-control" placeholder="Jméno">
            </div>
            <div class="col-sm-6">
                <label';
		echo ($ʟ_input = Nette\Bridges\FormsLatte\Runtime::item('prijmeni', $this->global))->getLabelPart()->attributes() /* line 31 */;
		echo '>Příjmení</label>
                <input';
		echo ($ʟ_input = Nette\Bridges\FormsLatte\Runtime::item('prijmeni', $this->global))->getControlPart()->addAttributes(['class' => null, 'placeholder' => null])->attributes() /* line 32 */;
		echo ' class="form-control" placeholder="Příjmení">
            </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6">
                    <label';
		echo ($ʟ_input = Nette\Bridges\FormsLatte\Runtime::item('vek', $this->global))->getLabelPart()->attributes() /* line 37 */;
		echo '>Věk</label>
                    <input';
		echo ($ʟ_input = Nette\Bridges\FormsLatte\Runtime::item('vek', $this->global))->getControlPart()->addAttributes(['class' => null, 'placeholder' => null])->attributes() /* line 38 */;
		echo ' class="form-control" placeholder="Věk">
                </div>
                <div class="col-sm-6">
                    <label';
		echo ($ʟ_input = Nette\Bridges\FormsLatte\Runtime::item('telefon', $this->global))->getLabelPart()->attributes() /* line 41 */;
		echo '>Telefon</label>
                    <input';
		echo ($ʟ_input = Nette\Bridges\FormsLatte\Runtime::item('telefon', $this->global))->getControlPart()->addAttributes(['class' => null, 'placeholder' => null])->attributes() /* line 42 */;
		echo ' class="form-control" placeholder="Telefon">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12 text-center">
                    <input';
		echo ($ʟ_input = Nette\Bridges\FormsLatte\Runtime::item('send', $this->global))->getControlPart()->addAttributes(['class' => null])->attributes() /* line 47 */;
		echo ' class="btn btn-primary btn-lg mt-4">
                </div>

            </div>
        ';
		echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd(end($this->global->formsStack), false) /* line 24 */;
		echo '</form>
';
		array_pop($this->global->formsStack);
		echo '    </div>
</div>';
	}
}
