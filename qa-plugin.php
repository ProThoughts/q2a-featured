<?php

/*
	Plugin Name: Featured Questions
	Plugin URI: https://github.com/ProThoughts/q2a-featured-question
	Plugin Description: Keep featured questions at top of list
	Plugin Version: 1.1
	Plugin Date: 2016-10-23
	Plugin Author: ProThoughts
	Plugin Author URI: http://www.ProThoughts.com/
	Plugin License: GPLv2
	Plugin Minimum Question2Answer Version: 1.6
	Plugin Update Check URI: https://raw.githubusercontent.com/ProThoughts/q2a-featured-question/master/qa-plugin.php
*/                    
                        
                        
    if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
                    header('Location: ../../');
                    exit;   
    }               

    qa_register_plugin_layer('qa-featured-question-layer.php', 'Featured Questions');
    qa_register_plugin_module('module', 'qa-featured-question-admin.php', 'pt_qa_featured_question_admin', 'Featured Questions');

    
/*                              
    Omit PHP closing tag to help avoid accidental output
*/                              
                          

