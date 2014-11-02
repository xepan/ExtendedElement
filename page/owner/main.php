<?php

class page_ExtendedElement_page_owner_main extends page_componentBase_page_owner_main {
	function initMainPage(){
		$this->add('H3')->setHTML('Component Owner Main Page<small>No Options At back end :)</small>');
	}


	function page_config(){
		$this->add('H1')->set('Default Config Page');
	}
}