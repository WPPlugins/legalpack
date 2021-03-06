<?php

namespace legalpack\shortcode {

	if (!defined ('ABSPATH')) {
		exit;
	}

	class Option extends Sub_Shortcode {

		protected $_options;
		protected $_option_name;

		function __construct ($options,
							  $option_name = false,
							  $name = false) {
			$this->_options = $options;
			$this->_option_name = $option_name;
			if ($name === false) {
				$name = $this->_option_name;
			}
			parent::__construct ($name);
		}

		function handle ($values, $content) {
			if ($this->_option_name === false) {
				$name = reset($values);
			} else {
				$name = $this->_option_name;
			}
			return esc_html(call_user_func($this->_options, $name));
		}
	}
}