<?php

class Posts
{
	private $data = array();
	
	public function __construct($row)
	{
		/*
		/	The constructor
		*/
		
		$this->data = $row;
	}
	
	public function markup_posts()
	{
		//	This method outputs the XHTML markup of the comment		
		// Setting up an alias, so we don't have to write $this->data every time:
		$d = &$this->data;
		
		// Converting the time to a UNIX timestamp:
		$d['dt'] = strtotime($d['dt']);
		
		return '
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="card">
								<div class="card-main">
									<div class="card-inner">
										<a href="read-comments.php?id='.$d['id'].'">
											<p class="card-heading">'.$d['post_content'].'</p>
										</a>
									<p>3 comments | '.date('d M Y',$d['time']).'</p>
									</div>
									<div class="card-action">
										<ul class="nav nav-list pull-left">
											<li>
												<a href="javascript:void(0)"><span class="icon">add</span></a>
											</li>
											<li>
												<a href="javascript:void(0)"><span class="icon">delete</span></a>
											</li>
											<li class="dropdown">
												<a class="dropdown-toggle" data-toggle="dropdown"><span class="icon">settings</span></a>
												<ul class="dropdown-menu">
													<li>
														<a href="javascript:void(0)"><span class="icon margin-right-sm">bell</span>&nbsp;Lorem Ipsum</a>
													</li>
													<li>
														<a href="javascript:void(0)"><span class="icon margin-right-sm">bell</span>&nbsp;Consectetur Adipiscing</a>
													</li>
													<li>
														<a href="javascript:void(0)"><span class="icon margin-right-sm">shuffle</span>&nbsp;Sed Ornare</a>
													</li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
		';
	}

}

?>