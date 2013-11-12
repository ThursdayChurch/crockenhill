@extends('layouts.layer1')

@section('title', 'Contact Us - Crockenhill Baptist Church')

@section('description', '<meta name="description" content="Our contact details">')

@section('breadcrumbs', '<li class="active">Contact Us</li>')

@section('header', '<h1>Contact Us</h1>')

@section('main-content')

<p>This website contains contact information for all the groups at the church. If you would like to know more about any of the groups, please phone the person listed. You can email any questions you may have to {{HTML::mailto('about@crockenhill.org', 'about@crockenhill.org')}}.</p>

<p>Our Pastor, Mark Drury, can be reached by telephone on 01322 663995, or by email at {{HTML::mailto('pastor@crockenhill.org', 'pastor@crockenhill.org')}}. Alternatively, you can phone our church secretary, Laurie Everest, on 01322 664165.</p>

<p>If you have any comments, queries, or suggestions for this website, please email {{HTML::mailto('website@crockenhill.org', 'website@crockenhill.org')}}.</p>

@stop
