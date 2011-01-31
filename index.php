<?php
/*
Plugin Name: Scheduled Sections
Plugin URI: http://blog.sahanz.com/scheduled-content/
Description: Schedule content inside a post.
Author: SahanZ
Version: 1.0
License: GPL v2 - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html

*/

add_shortcode('schedule', 'sz_schdule');
	
	function sz_schdule($atts, $content){
		
		$curTime=current_time('mysql');
		$curTime=explode(' ', $curTime);
		
		$curStamp=strtotime($curTime[0].' '.$curTime[1]);
		
		
		$defaults=array(
			'on'=> $cur_date[0], //date
			'at'=> $cur_date[1]  //time
		);
		$atts=shortcode_atts($defaults, $atts);//User inputs
		
		$userTime=$atts['on'].' '.$atts['at']; 
		
		$userTime=strtotime($userTime);
				
		/*-- Match Time --
			$userTime=str_replace(':', '\:', $atts['at']); // '/^16\:53/'            
			$pattern='/^'.$userTime.'/';			
			preg_match($pattern, $cur_date[1], $matches);					
		-- Match Time --*/
		
		
		$return = '';
		if($curStamp>=$userTime){
		
			$return=$content;	
		
		}
		
		return $return;
	}