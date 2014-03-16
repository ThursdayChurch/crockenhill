<?php

class PageController extends BaseController {

    protected $layout = 'layouts.main';

	public function showPage($slug)
	{
	    $page = Page::where('slug', $slug)->first();
	    
	    $active_breadcrumb = '<li class="active">'.$page->heading.'</li>';
	    $description = '<meta name="description" content="'.$page->description.'">';
	    
		$this->layout->content = View::make('pages.page', array(
		    'slug'          => $page->slug,
		    'heading'       => $page->heading,
		    'breadcrumbs'   => $active_breadcrumb,
		    'description'   => $description,
		    'content'       => htmlspecialchars_decode($page->body),
		));
	}

}
