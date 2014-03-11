<?php

// Since version 2.4, the following line must be added to the /blocks/simplehtml/block_simplehtml.php file in order to enable global configuration:
// function has_config() {return true;}

$settings->add(new admin_setting_heading(

            'headerconfig',
            get_string('headerconfig', 'block_hrvojeblock'),
            get_string('descconfig', 'block_hrvojeblock')
        ));
 
$settings->add(new admin_setting_configcheckbox(
            'hrvojeblock/Allow_HTML',
            get_string('labelallowhtml', 'block_hrvojeblock'),
            get_string('descallowhtml', 'block_hrvojeblock'),
            '0' // default?
        ));