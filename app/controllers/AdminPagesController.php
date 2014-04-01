<?php 

class AdminPagesController extends BaseController {
 
    public function index()
    {
        return View::make('members.pages.index')->with('pages', Page::all());
    }

    public function create()
    {
        return View::make('members.pages.create');
    }

    public function store()
    {
        $page = new Page;
        $page->heading = Input::get('heading');
        $page->slug = Str::slug(Input::get('heading'));
        $page->area = Input::get('area');
        $page->body = Input::get('body');
        $page->description = Input::get('description');
        $page->save();

        return Redirect::route('members.pages.index');
    }

    public function edit($slug)
    {
        return View::make('members.pages.edit')->with('page', Page::where('slug', $slug)->first());
    }

    public function update($slug)
    {
        $page = Page::where('slug', $slug)->first();
        $page->heading = Input::get('heading');
        $page->slug = Str::slug(Input::get('heading'));
        $page->area = Input::get('area');
        $page->body = Input::get('body');
        $page->description = Input::get('description');
        $page->save();

        Notification::success('The changes to the page were saved.');

        return Redirect::route('members.pages.index');
            
    }

    public function destroy($slug)
    {
        $page = Page::where('slug', $slug)->first();
        $page->delete();

        return Redirect::route('members.pages.index');
    }

    public function changeimage($slug)
    {
        return View::make('members.pages.editimage')->with('page', Page::where('slug', $slug)->first());
    }

    public function updateimage($slug)
    {
        $page = Page::where('slug', $slug)->first();

        // Make large image for article
        Image::make(Input::file('image')
            ->getRealPath())
            // resize the image to a width of 300 and constrain aspect ratio (auto height)
            ->resize(2000, null, true)
            ->save('images/headings/large/'.$page->slug.'.jpg');

        // Make smaller image for aside
        Image::make(Input::file('image')
            ->getRealPath())
            // resize the image to a width of 300 and constrain aspect ratio (auto height)
            ->resize(300, null, true)
            ->save('images/headings/small/'.$page->slug.'.jpg');

        Notification::success('The image was changed.');

        return Redirect::route('members.pages.changeimage', array('page' => $page->slug));
            
    }

 
}
