<?php
namespace App\View\Helper;

use Cake\Core\Configure;
use Cake\View\Helper;

class AppHelper extends Helper
{

    /**
     * Other Helpers needed
     *
     * @var array
     */
    public $helpers = ['Html'];

    /**
     * Generate configured menu html
     *
     * @param $name
     * @return string Html generated menu items
     */
    public function generateMenu($name)
    {
        $menuHtml = '';
        $menuConfig = Configure::read('Menu.' . $name);
        if (!empty($menuConfig)) {
            $header = $menuConfig['header'];
            $menuHtml .= '<li class="header">' . $header . '</li>';
            foreach ($menuConfig['items'] as $menuTitle => $menuOptions) {
                $menuHtml .= '<li class="treeview">';
                $url = '#';
                $menuHtml .= $this->Html->link('<span>' . $menuTitle . '</span><i class="fa fa-angle-left pull-right"></i>', $url, ['escape' => false]);
                $menuHtml .= '<ul class="treeview-menu">';
                foreach ($menuOptions['subItems'] as $subItemTitle => $subItemOptions) {
                    $url = $subItemOptions['url'];
                    $menuHtml .= '<li>' . $this->Html->link($subItemTitle, $url) . '</li>';
                }
                $menuHtml .= '</ul>';
                $menuHtml .= '</li>';
            }
        }
        return $menuHtml;
    }
}
