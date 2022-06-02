<?php

namespace Modularity\Module\Divider;

class Divider extends \Modularity\Module
{
    public $slug = 'divider';
    public $supports = array();
    private $curl; 

    public function init()
    {
        $this->nameSingular = __('Divider', 'modularity');
        $this->namePlural = __('Dividers', 'modularity');
        $this->description = __("Add a content divider.", 'modularity');
    }

    public function data() : array
    {
        $data['title'] = get_field('divider_title', $this->ID);
        $data['titleVariant'] = get_field('divider_title_variant', $this->ID);
        //Send to view
        return $data;
    }


    /**
     * Available "magic" methods for modules:
     * init()            What to do on initialization
     * data()            Use to send data to view (return array)
     * style()           Enqueue style only when module is used on page
     * script            Enqueue script only when module is used on page
     * adminEnqueue()    Enqueue scripts for the module edit/add page in admin
     * template()        Return the view template (blade) the module should use when displayed
     */
}
