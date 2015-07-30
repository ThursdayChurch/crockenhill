<?php namespace Crockenhill\Http\Controllers;

class PageController extends BaseController {

  protected $layout = 'layouts.main';

	public function showPage($slug)
	{
    if ($page = \Crockenhill\Page::where('slug', $slug)->first()) {

	    if (\Request::is('members/members-area')) {
	    	$area = 'members';
		    $breadcrumbs = '<li class="active">'.$page->heading.'</li>';
	    } else {
	    	$area = $slug;
		    $breadcrumbs = '<li class="active">'.$page->heading.'</li>';
	    }

	    $links = \Crockenhill\Page::where('area', $area)
	    	->where('slug', '!=', $slug)
	    	->where('slug', '!=', $area)
	    	->where('slug', '!=', 'privacy-policy')
	    	->where('admin', '!=', 'yes')
	    	->orderBy(\DB::raw('RAND()'))
	    	->take(5)
	    	->get();
	    
	    $description = '<meta name="description" content="'.$page->description.'">';
	    
			return view('page', array(
		    'slug'          => $page->slug,
		    'heading'       => $page->heading,		    
		    'description'   => $description,
		    'area'					=> $page->area,
		    'breadcrumbs'   => $breadcrumbs,
		    'content'       => htmlspecialchars_decode($page->body),
		    'links'					=> $links,
			));
		} else {
			\App::abort(404);
		};
	}

	public function showSubPage($area, $slug)
	{
	    if ($page = \Crockenhill\Page::where('slug', $slug)->first()) {
		    $parent = \Crockenhill\Page::where('slug', $area)->first();
		    $links = \Crockenhill\Page::where('area', $area)
		    	->where('slug', '!=', $slug)
		    	->where('slug', '!=', 'buzz-club')
		    	->where('slug', '!=', 'carols-in-the-chequers')
		    	->where('slug', '!=', 'family-fun-night')
		    	->where('slug', '!=', 'privacy-policy')
		    	->where('slug', '!=', $area)
		    	->where('admin', '!=', 'yes')
		    	->get();
		    
		    $breadcrumb = '<li>'.link_to($page['area'], $parent->heading).'&nbsp</li><li class="active">'.$page->heading.'</li>';
		    $description = '<meta name="description" content="'.$page->description.'">';

				return view('page', array(
			    'slug'          => $page->slug,
			    'heading'       => $page->heading,		    
			    'description'   => $description,
			    'area'					=> $page->area,
			    'breadcrumbs'   => $breadcrumb,
			    'content'       => htmlspecialchars_decode($page->body),
			    'links'					=> $links,
				));
			} else {
				\App::abort(404);
			};
	}
}