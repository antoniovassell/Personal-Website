<?php
/**
 * AuthHelper
 *
 * @author Florian Krämer
 * @copyright 2013 - 2014 Florian Krämer
 * @license MIT
 */
namespace Frontend\View\Helper;

use Cake\Utility\Inflector;
use Cake\View\Helper;
use Cake\View\View;

class FrontendHelper extends Helper {

/**
 * Default settings
 *
 * @var array
 */
	protected $_defaultConfig = [
		'viewVar' => 'configData'
	];

/**
 * User data
 *
 * @array
 */
	protected $_userData = [];

    /**
     * Constructor
     *
     * @param \Cake\View\View $View
     * @param array $settings
     * @throws RuntimeException
     * @return AuthHelper
     */
	public function __construct(\Cake\View\View $View, $settings = []) {
		parent::__construct($View, $settings);
	}

    /**
     * Allow ability to call an element as a function
     *
     * @param string $name
     * @param array $arguments
     */
    public function __call($name, $arguments)
    {
        $name = Inflector::underscore($name);
        if (!$this->_View->elementExists('Frontend/' . $name)) {
            echo $this->_View->element('Frontend.' . $name, $arguments);
        }
    }

    /**
     * To load a predefined page such as a contact page
     *
     * @param $name
     * @param $arguments
     */
    public function page($name, $arguments)
    {
        echo $this->_View->element('Frontend.Pages/' . $name, $arguments);
    }
}
