<?php

namespace Haythem\PrintPdfButton;

use Laravel\Nova\Fields\Field;

class PrintPdfButton extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'print-pdf-button';


    public function pdfUrl($url){
        return $this->withMeta(['pdfUrl'=>$url]);
    }
    public function buttonIcon($icon = null){
        return $this->withMeta(['buttonIcon'=>$icon]);
    }

    public function buttonText($text = 'Print'){
        return $this->withMeta(['buttonText'=>$text]);
    }

}
