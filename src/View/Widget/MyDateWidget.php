<?php
namespace App\View\Widget;

use \Cake\View\Form\ContextInterface;
use Cake\View\Widget\WidgetInterface;

class MyDateTimeWidget implements WidgetInterface
{

    /**
     * Construtor
     *
     * @param $templates
     */
    public function __construct($templates)
    {
        $this->_templates = $templates;
    }

    /**
     * Secure fields
     *
     * @param array $data
     * @return array
     */
    public function secureFields(array $data)
    {
        return array();
    }

    /**
     * Render callback
     *
     * @param array $data
     * @param ContextInterface $context
     * @return string
     */
    public function render(array $data, ContextInterface $context)
    {
        $format = '';
        if (is_a($data['val'], 'DateTime')) {
            $format = $data['val']->format('Y-m-d');
        } else {
            $format = date('Y-m-d', strtotime($data['val']));
        }

        return '
            <div class="input-group date" id="datetimepicker-' .
            $data['id'] . '" data-date-format="YYYY-MM-DD">
                <input type="text" class="form-control date-input" value="' .
                $format . '" name="' . $data['name'] . '" />
                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
            </div>';
    }

}
