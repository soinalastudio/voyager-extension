<?php

namespace SoinalaStudio\VoyagerExtension\FormFields;

use TCG\Voyager\FormFields\AbstractHandler;

class AdvRelatedFormField extends AbstractHandler
{
    protected $name = 'VE Related Model';
    protected $codename = 'adv_related';

    /*
     *  $dataTypeContent - Current model record
     */
    public function createContent($row, $dataType, $dataTypeContent, $options)
    {
        return view('voyager-extension::formfields.adv_related', [
            'row'             => $row,
            'options'         => $options,
            'dataType'        => $dataType,
            'dataTypeContent' => $dataTypeContent,
        ]);
    }

}
