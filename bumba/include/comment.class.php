<?php

class Comment
{
	private $data = array();
	
	public function __construct($row)
	{
		/*
		/	The constructor
		*/
		
		$this->data = $row;
	}
	
	public function markup_comments()
	{
		/*
		/	This method outputs the XHTML markup of the comment
		*/
		
		// Setting up an alias, so we don't have to write $this->data every time:
		$d = &$this->data;
		
		// Converting the time to a UNIX timestamp:
		$d['dt'] = strtotime($d['dt']);

		// Reduce amount of letters
		$d['comment'] = substr(strip_tags($d['comment']), 0, 40);

		return '
					<div class="tile tile-collapse">
						<div data-target="#tile-collapse-1" data-toggle="tile">
							<div class="pull-left tile-side" data-ignore="tile">
								<div class="avatar avatar-blue avatar-sm">
									<span class="icon">alarm</span>
								</div>
							</div>
							<div class="tile-action" data-ignore="tile">
								<ul class="nav nav-list pull-right">
									<li>
										<a href="javascript:void(0)"><span class="icon">star</span></a>
									</li>
									<li>
										<a href="javascript:void(0)"><span class="icon">delete</span></a>
									</li>
									<li class="dropdown">
										<a class="dropdown-toggle" data-toggle="dropdown"><span class="icon">settings</span></a>
										<ul class="dropdown-menu">
											<li>
												<a href="javascript:void(0)"><span class="icon margin-right-sm">loop</span>Lorem Ipsum</a>
											</li>
											<li>
												<a href="javascript:void(0)"><span class="icon margin-right-sm">replay</span>Consectetur Adipiscing</a>
											</li>
											<li>
												<a href="javascript:void(0)"><span class="icon margin-right-sm">shuffle</span>Sed Ornare</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="tile-inner">
								<div class="text-overflow">'.$d['comment'].'</div>
							</div>
						</div>
					</div>
		';
	}
	
	public static function validate(&$arr)
	{
		/*
		/	This method is used to validate the data sent via AJAX.
		/
		/	It return true/false depending on whether the data is valid, and populates
		/	the $arr array passed as a paremter (notice the ampersand above) with
		/	either the valid input data, or the error messages.
		*/
		
		$errors = array();
		$data	= array();
		
		// Using the filter_input function introduced in PHP 5.2.0
		// Using the filter with a custom callback function:
		
		if(!($data['comment'] = filter_input(INPUT_POST,'comment',FILTER_CALLBACK,array('options'=>'Comment::validate_text'))))
		{
			$errors['comment'] = 'Please enter a comment body.';
		}
		
		if(!empty($errors)){
			
			// If there are errors, copy the $errors array to $arr:
			
			$arr = $errors;
			return false;
		}
		
		// If the data is valid, sanitize all the data and copy it to $arr:
		
		foreach($data as $k=>$v){
			$arr[$k] = mysql_real_escape_string($v);
		}
		
		return true;
		
	}

	private static function validate_text($str)
	{
		/*
		/	This method is used internally as a FILTER_CALLBACK
		*/
		
		if(mb_strlen($str,'utf8')<1)
			return false;
		
		// Encode all html special characters (<, >, ", & .. etc) and convert
		// the new line characters to <br> tags:
		
		$str = nl2br(htmlspecialchars($str));
		
		// Remove the new line characters that are left
		$str = str_replace(array(chr(10),chr(13)),'',$str);
		
		return $str;
	}

}

?>