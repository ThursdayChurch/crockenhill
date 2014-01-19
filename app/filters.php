<?php

/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::before(function($request)
{
	//
});


App::after(function($request, $response)
{
	//
});

/*
|--------------------------------------------------------------------------
| Authentication Filters
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
| session is logged into this application. The "basic" filter easily
| integrates HTTP Basic authentication for quick, simple checking.
|
*/

Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::guest('/membersarea/login');
});

Route::filter('admin', function()
{
	if (Auth::guest()) return Redirect::guest('/admin/login');
});


Route::filter('auth.basic', function()
{
	return Auth::basic();
});

/*
|--------------------------------------------------------------------------
| Guest Filter
|--------------------------------------------------------------------------
|
| The "guest" filter is the counterpart of the authentication filters as
| it simply checks that the current user is not logged in. A redirect
| response will be issued if they are, which you may freely change.
|
*/

Route::filter('guest', function()
{
	if (Auth::check()) return Redirect::to('/membersarea');
});

/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
*/

Route::filter('csrf', function()
{
	if (Session::token() != Input::get('_token'))
	{
		throw new Illuminate\Session\TokenMismatchException;
	}
});

/*
|--------------------------------------------------------------------------
| View Composers
|--------------------------------------------------------------------------
|
| The view composers bind data to views, so that whenever that view is
| called, the data is available.
|
| Moving them to a seperate file is on my to-do list, as they are not
| really filters.
|
*/


// Sections

View::composer('layouts.sections.footer', function($view)
{
    //get the latest sermons
    $latest_morning_sermon = OldSermon::where('service', 'morning')->orderBy('date', 'desc')->first();
    $latest_evening_sermon = OldSermon::where('service', 'evening')->orderBy('date', 'desc')->first();

    // and create the view composer
    $view->with('latest_morning_sermon', $latest_morning_sermon);
    $view->with('latest_evening_sermon', $latest_evening_sermon);
});

View::composer('pages.Home', function($view)
{
    //get the latest OldSermons
    $latest_morning_sermon = OldSermon::where('service', 'morning')->orderBy('date', 'desc')->first();
    $latest_evening_sermon = OldSermon::where('service', 'evening')->orderBy('date', 'desc')->first();

    // and create the view composer
    $view->with('latest_morning_sermon', $latest_morning_OldSermon);
    $view->with('latest_evening_sermon', $latest_evening_OldSermon);
});

View::composer('layouts.sections.sermonsfragment', function($view)
{
    //Get the preachers and series from the database
    $preachers = OldSermon::select('preacher')->distinct()->orderBy('preacher', 'asc')->get();
    $serieses = OldSermon::where('series', '!=', 'NULL')->select('series')->distinct()->get();

    //bind them to the view
    $view->with('preachers', $preachers);
    $view->with('serieses', $serieses);
});

// Songs

View::composer('pages.members.songs.scripturesearch', function($view)
{
    //Set arrays for book, chapter, verses
    $books = array(
        "Gen" => "Genesis",
        "Exod" => "Exodus",
        "Lev" => "Leviticus",
        "Num" => "Numbers",
        "Deut" => "Deuteronomy",
        "Josh" => "Joshua",
        "Judg" => "Judges",
        "Ruth" => "Ruth",
        "1Sam" => "1 Samuel",
        "2Sam" => "2 Samuel",
        "1Kgs" => "1 Kings",
        "2Kgs" => "2 Kings",
        "1Chr" => "1 Chronicles",
        "2Chr" => "2 Chronicles",
        "Ezra" => "Ezra",
        "Neh" => "Nehemiah",
        "Esth" => "Esther",
        "Job" => "Job",
        "Ps" => "Psalms",
        "Prov" => "Proverbs",
        "Eccl" => "Ecclesiastes",
        "Song" => "Song of Solomon",
        "Isa" => "Isaiah",
        "Jer" => "Jeremiah",
        "Lam" => "Lamentations",
        "Ezek" => "Ezekiel",
        "Dan" => "Daniel",
        "Hos" => "Hosea",
        "Joel" => "Joel",
        "Amos" => "Amos",
        "Obad" => "Obadiah",
        "Jonah" => "Jonah",
        "Mic" => "Micah",
        "Nah" => "Nahum",
        "Hab" => "Habakkuk",
        "Zeph" => "Zephaniah",
        "Hag" => "Haggai",
        "Zech" => "Zechariah",
        "Mal" => "Malachi",

        "Matt" => "Matthew",
        "Mark" => "Mark",
        "Luke" => "Luke",
        "John" => "John",
        "Acts" => "Acts",
        "Rom" => "Romans",
        "1Cor" => "1 Corinthians",
        "2Cor" => "2 Corinthians",
        "Gal" => "Galatians",
        "Eph" => "Ephesians",
        "Phil" => "Philippians",
        "Col" => "Colossians",
        "1Thess" => "1 Thessalonians",
        "2Thess" => "2 Thessalonians",
        "1Tim" => "1 Timothy",
        "2Tim" => "2 Timothy",
        "Titus" => "Titus",
        "Phlm" => "Philemon",
        "Heb" => "Hebrews",
        "Jas" => "James",
        "1Pet" => "1 Peter",
        "2Pet" => "2 Peter",
        "1John" => "1 John",
        "2John" => "2 John",
        "3John" => "3 John",
        "Jude" => "Jude",
        "Rev" => "Revelation",
    );

    for ($i = 1; $i <= 10; $i++) {
        return $i;
    }

    // Bind them to view
    $view->with('books', $books);
    $view->with('chapters', $chapters);
    $view->with('verses', $verses);
});

// CMS Experiment

Route::filter('auth.admin', function()
{
        if ( ! Sentry::check())
        {
                return Redirect::route('admin.login');
        }
});
