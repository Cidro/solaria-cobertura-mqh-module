<?php
namespace Asimov\Solaria\Modules\CoberturaMqh;

use Solaria\Modules\SolariaModule;

class CoberturaMqh implements SolariaModule {

    protected $name = 'CoberturaMqh';

    protected $menu_name = 'Cobertura Manquehue';

    public function getName() {
        return $this->name;
    }

    public function getMenuName() {
        return $this->menu_name;
    }

    public function getBackendMenuUrl() {
        return url('backend/modules/cobertura-mqh');
    }

    public function getBackendStyles() {
        return [asset('modules/cobertura-mqh/css/cobertura-mqh-module.css')];
    }

    public function getFrontendStyles() {
        // TODO: Implement getFrontendStyles() method.
    }

    public function getBackendScripts() {
        return [asset('modules/cobertura-mqh/js/cobertura-mqh-module.js')];
    }

    public function getFrontendScripts() {
        // TODO: Implement getFrontendScripts() method.
    }

    public function getCustomFields() {
        // TODO: Implement getCustomFields() method.
    }

    public function render(){
        return 'cobertura-mqh';
    }
}