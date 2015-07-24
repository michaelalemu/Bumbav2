<?php

class PostsOfUser
{
	private $data = array();
	
	public function __construct($row)
	{
		//	The constructor		
		$this->data = $row;
	}
	
	public function markup_postsofuser()
	{
		//	This method outputs the XHTML markup of the comment		
		// Setting up an alias, so we don't have to write $this->data every time:
		$d = &$this->data;
		
		// Converting the time to a UNIX timestamp:
		$d['dt'] = strtotime($d['dt']);

		// Reduce amount of letters
		$d['post_content'] = substr(strip_tags($d['post_content']), 0, 20);
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
										<a href="?id='.$_SESSION['user_id'].'&delete_post_id='.$d['post_id'].'#modal" data-toggle="modal"><span class="icon">delete</span></a>
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
								<div class="text-overflow"><a href="read-comments.php?id='.$d['post_id'].'">'.$d['post_content'].'</a></div>
							</div>
						</div>
					</div>
		';
		return $d['post_content'];
	}
}

?>