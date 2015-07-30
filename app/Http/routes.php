<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'Home', function()
{
    return view('home');
}]);

// Sermon Routes

Route::group(array('prefix' => 'sermons'), function()
{
    Route::get('preachers', array(
        'as' => 'getPreachers',
        'uses' => 'SermonController@getPreachers'
    ));
    Route::get('preachers/{preacher}', array(
        'as' => 'getPreacher',
        'uses' => 'SermonController@getPreacher'
    ));
    Route::get('series', array(
        'as' => 'getSerieses',
        'uses' => 'SermonController@getSerieses'
    ));
    Route::get('series/{series}', array(
        'as' => 'getSeries',
        'uses' => 'SermonController@getSeries'
    ));
});

Route::resource('sermons', 'SermonController');

Route::resource('whats-on', 'MeetingController');

// Members Area Routes

// Confide routes

Route::get('members/login', 'MemberController@login');
Route::post('members/login', 'MemberController@doLogin');
Route::get('members/confirm/{code}', 'MemberController@confirm');
Route::get('members/forgot_password', 'MemberController@forgotPassword');
Route::post('members/forgot_password', 'MemberController@doForgotPassword');
Route::get('members/reset_password/{token}', 'MemberController@resetPassword');
Route::post('members/reset_password', 'MemberController@doResetPassword');
Route::get('members/logout', 'MemberController@logout');
Route::get('members/register', 'MemberController@create');
Route::post('users', 'MemberController@store');

// Custom Routes

Route::group(array('prefix' => 'members', 'before' => 'auth.member'), function()
{
    Route::get('/', function()
        {
            return Redirect::to('members-area');
        });

    Route::group(array('before' => 'auth.admin'), function()
    {
        // Manage pages
        Route::resource('pages', 'AdminPagesController');
        Route::get('pages/{slug}/changeimage', array(
            'uses'  => 'AdminPagesController@changeimage',
            'as'    => 'members.pages.changeimage'
            ));
        Route::post('pages/{slug}/changeimage', array(
            'uses'  => 'AdminPagesController@updateimage',
            'as'    => 'members.pages.updateimage'
            ));

        // Manage sermons
        Route::resource('sermons', 'AdminSermonsController');
        Route::get('sermons/{slug}/changeimage', array(
            'uses'  => 'AdminSermonsController@changeimage',
            'as'    => 'members.sermons.changeimage'
            ));
        Route::post('sermons/{slug}/changeimage', array(
            'uses'  => 'AdminSermonsController@updateimage',
            'as'    => 'members.sermons.updateimage'
            ));
    });

    // Manage documents
    Route::resource('document', 'DocumentController');
    Route::get('documents', array('uses' => 'DocumentController@index'));

    // Songs
    Route::get('songs/scripture-reference', 'SongController@getScriptureReference');
    Route::get('songs/scripture-reference/{reference}', 'SongController@getReferenceSongs');

    Route::get('songs/search', 'SongController@getSearch');
    Route::get('songs/search/{search}', 'SongController@getSearchSongs');
 
    Route::get('songs/service-record', 'SongController@getServiceRecord');

    Route::get('songs/upload', 'SongController@getUpload');

    Route::get('songs/{id}/{title}', 'SongController@showSong');

    Route::controller('songs', 'SongController');


    // Catch-all
    Route::get('/{slug}', array('uses' => 'PageController@showPage'));
});

// Permanent Redirects

Route::get('aboutus', function(){
    return Redirect::to('about-us', 301);
});
Route::get('abouts', function(){
    return Redirect::to('about-us', 301);
});
Route::get('contactus', function(){
    return Redirect::to('contact-us', 301);
});
Route::get('links', function(){
    return Redirect::to('about-us/links', 301);
});
Route::get('whatson', function(){
    return Redirect::to('whats-on', 301);
});
Route::get('where', function(){
    return Redirect::to('find-us', 301);
});
Route::get('aboutus/history', function(){
    return Redirect::to('about-us/history', 301);
});
Route::get('aboutus/pastor', function(){
    return Redirect::to('about-us/pastor', 301);
});
Route::get('aboutus/statementoffaith', function(){
    return Redirect::to('about-us/statement-of-faith', 301);
});
Route::get('aboutus/whatwebelieve', function(){
    return Redirect::to('about-us/what-we-believe', 301);
});
Route::get('whatson/1150', function(){
    return Redirect::to('whats-on/1150', 301);
});
Route::get('whatson/adventurers', function(){
    return Redirect::to('whats-on/adventurers', 301);
});
Route::get('whatson/babytalk', function(){
    return Redirect::to('whats-on/baby-talk', 301);
});
Route::get('whatson/biblestudy', function(){
    return Redirect::to('whats-on/bible-study', 301);
});
Route::get('whatson/buzzclub', function(){
    return Redirect::to('whats-on/buzz-club', 301);
});
Route::get('whatson/carolsatthechequers', function(){
    return Redirect::to('whats-on/carols-in-the-chequers', 301);
});
Route::get('whatson/christianityexplored', function(){
    return Redirect::to('whats-on/christianity-explored', 301);
});
Route::get('whatson/coffeecup', function(){
    return Redirect::to('whats-on/coffee-cup', 301);
});
Route::get('whatson/familyfunnight', function(){
    return Redirect::to('whats-on/family-fun-night', 301);
});
Route::get('whatson/link', function(){
    return Redirect::to('whats-on/link', 301);
});
Route::get('whatson/menzone', function(){
    return Redirect::to('whats-on/menzone', 301);
});
Route::get('whatson/sunday', function(){
    return Redirect::to('whats-on/sunday-services', 301);
});
Route::get('whatson/walkinggroup', function(){
    return Redirect::to('whats-on/walking-group', 301);
});
Route::get('publications', function(){
    return \App::abort(404);
});

// General Routes

Route::get('/{area}/{slug}', array('uses' => 'PageController@showSubPage'));

Route::get('/{slug}', array('uses' => 'PageController@showPage'));

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);