<?php

namespace DMA\Friends\ReportWidgets;

use Backend\Classes\ReportWidgetBase;

class DatePicker extends ReportWidgetBase
{
    public $defaultAlias = 'DatePicker';

    /**
     * {@inheritDoc}
     */
    public function widgetDetails()
    {   
        return [
            'name'        => 'Date Picker',
            'description' => 'A Date picker to work with friends analytical reports'
        ];  
    }   

    /**
     * {@inheritDoc}
     */
    public function render()
    {   
        $this->addJs('jquery-ui/jquery-ui.js');
        $this->addCss('jquery-ui/jquery-ui.css');
        $this->addCss('jquery-ui/jquery-ui.theme.css');
        $this->addJs('js/date-picker.js');
        $this->addCss('css/datepicker.css');

        return $this->makePartial('widget', [
            'current'   => date('Y-m-d'),
            'week'      => DatePicker::dateAgo('-1 week'),
            'month'     => DatePicker::dateAgo('-1 month'),
            'year'      => DatePicker::dateAgo('-1 year'),
        ]);
    }

    public static function dateAgo($string)
    {
        return date('Y-m-d', strtotime($string));
    }
}

