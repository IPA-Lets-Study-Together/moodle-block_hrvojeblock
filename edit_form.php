<?php
 
class block_hrvojeblock_edit_form extends block_edit_form {
 
    protected function specific_definition($mform) {
 
        // Section header title according to language file.
        $mform->addElement('header', 'configheader', get_string('blocksettings', 'block'));
 
        // A sample string variable with a default value.
        $mform->addElement('text', 'config_text', get_string('blockstring', 'block_hrvojeblock')); // it MUST contain config_xxx
        $mform->setDefault('config_text', '');
        $mform->setType('config_text', PARAM_MULTILANG);   


        // A sample string variable with a default value.
	    $mform->addElement('text', 'config_title', get_string('blocktitle', 'block_hrvojeblock'));
	    $mform->setDefault('config_title', 'Hrvojev Block');
	    $mform->setType('config_title', PARAM_MULTILANG);     
 
    }
}