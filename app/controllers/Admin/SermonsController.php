<?php namespace App\Controllers\Admin;
 
use App\Models\Sermon;
use App\Services\Validators\SermonValidator;
use Input, Notification, Redirect, Sentry, Str;
 
class SermonsController extends \BaseController {
 
    public function index()
    {
        return \View::make('admin.sermons.index')->with('sermons', Sermon::all());
    }
 
    public function show($id)
    {
        return \View::make('admin.sermons.show')->with('sermon',Sermon::find($id));
    }
 
    public function create()
    {
        return \View::make('admin.sermons.create');
    }
 
    public function store()
    {
        $validation = new SermonValidator;
 
        if ($validation->passes())
        {
            $sermon = new Sermon;
            $sermon->title   = Input::get('title');
            $sermon->slug    = Str::slug(Input::get('title'));
            $sermon->body    = Input::get('body');
            $sermon->user_id = Sentry::getUser()->id;
            $sermon->save();
            
            // Now that we have the article ID we need to move the image
            if (Input::hasFile('image'))
            {
                $sermon->image = \Image::upload(Input::file('image'), 'sermons/' . $sermon->id);
                $sermon->save();
            }
 
            Notification::success('The sermon was saved.');
 
            return Redirect::route('admin.sermons.edit', $sermon->id);
        }
 
        return Redirect::back()->withInput()->withErrors($validation->errors);
    }
 
    public function edit($id)
    {
        return \View::make('admin.sermons.edit')->with('sermon', Sermon::find($id));
    }
 
    public function update($id)
    {
        $validation = new SermonValidator;
 
        if ($validation->passes())
        {
            $sermon = Sermon::find($id);
            $sermon->title   = Input::get('title');
            $sermon->slug    = Str::slug(Input::get('title'));
            $sermon->body    = Input::get('body');
            $sermon->user_id = Sentry::getUser()->id;
            if (Input::hasFile('image')) $sermon->image   = Image::upload(Input::file('image'), 'sermons/' . $article->id);
            $sermon->save();
 
            Notification::success('The sermon was saved.');
 
            return Redirect::route('admin.sermons.edit', $sermon->id);
        }
 
        return Redirect::back()->withInput()->withErrors($validation->errors);
    }
 
    public function destroy($id)
    {
        $sermon = Sermon::find($id);
        $sermon->delete();
 
        Notification::success('The sermon was deleted.');
 
        return Redirect::route('admin.sermons.index');
    }
 
}
