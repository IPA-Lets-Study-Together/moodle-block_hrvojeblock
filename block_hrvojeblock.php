<?php
class block_hrvojeblock extends block_base {
	public function init() {
		$this->title = get_string('hrvojeblock', 'block_hrvojeblock'); // it's necessary for each block to have a unique, non-empty title after init() is called so that Moodle can use those titles to differentiate between all of the installed blocks.
	}
	// public function specialization(){} // called after init()
	public function specialization() {
	  if (!empty($this->config->title)) {
	    $this->title = $this->config->title;
	  } else {
	    $this->title = 'Hrvojev block';
	  }
	 
	  /*if (empty($this->config->text)) {
	    $this->config->text = 'Default text ...';
	  } */  
	}

	// dodaj blocku posebnu css klasu
	/*public function html_attributes() {
	    $attributes = parent::html_attributes(); // Get default values
	    $attributes['class'] .= ' block_'. $this->name(); // Append our class to class attribute
	    return $attributes;
	}*/

	public function get_content()
	{
		/*if ($this->content !== null) {
		  return $this->content;
		}*/
	


		$this->content         =  new stdClass;
		$this->content->text   = '<script type="text/javascript">function changeme(){document.getElementById("tochange").innerHTML = "Najbolji"}</script><h2>Ovo je moj prvi block!</h2><p id="tochange" style="color:red">Kako je dobar! <a onclick="changeme()">Klikni tu</a></p>';

		if (! empty($this->config->text)) { // settings od blocka
		    $this->content->text .= $this->config->text;
		}

		// if you dont want the block to be displayed, $this->content should be equal to the empty string ('')

		$this->content->footer = 'Dakle footer';
	 
		return $this->content;
	}

	// za dozvoliti više instanci istog modula unutar istog course-a
	/*public function instance_allow_multiple() {
	  return true;
	}*/

	// Since version 2.4, the following line must be added to the /blocks/simplehtml/block_simplehtml.php file in order to enable global configuration:
	//function has_config() {return true;}


	/*public function hide_header() {
	  return true;
	}*/


	// presretanje lokalnih i globalnih postavki?
	/*public function instance_config_save($data) {

		// moze i ovako $allowHTML = $CFG->Allow_HTML;

	  if(get_config('hrvojeblock', 'Allow_HTML') == '1') {
	    $data->text = strip_tags($data->text);
	  }
	 
	  // And now forward to the default implementation defined in the parent class
	  return parent::instance_config_save($data);
	}*/


}

