@extends('layouts.layer1')

@section('title', 'Statement of Faith - Crockenhill Baptist Church')

@section('description', '<meta name="description" content="Statement of Faith - Crockenhill Baptist Church">')

@section('breadcrumbs')

<li> {{ link_to_route('AboutUs', 'About Us') }} </li><li class="active">Statement of Faith</li>

@stop

@section('header', '<h1>Statement of Faith</h1>')

@section('main-content')

<p>Here is our full statement of faith, with Bible references so you can see what our belief is based on. If you want to see a simple, non-technical summary, see <a href="../WhatWeBelieve">"What We Believe"</a>.</p>
	<ol>
		<li><h3>God</h3>
			<p>There is one God, who exists eternally in three distinct but equal persons: the Father, the Son, and the Holy Spirit.  God is unchangeable in his holiness, justice, wisdom and love.  He is the almighty Creator, Saviour and Judge who sustains and governs all things according to his sovereign will for his own glory.</p>
			<p class="references">Deuteronomy 6:4; Psalm 90:2; Matthew 28:18-20; Malachi 3:6; Isaiah 6:3; 1 John 4:8-10; Genesis 1 & 2; Titus 3:4-7; Romans 14:12</p>
		</li>
		<li><h3>The Bible</h3>
			<p>God has revealed himself in the Bible, which consists of the Old and New Testaments alone.  Every word was inspired by God through human authors, so that the Bible as originally given is in its entirety the Word of God, without error and fully reliable in fact and doctrine.  The Bible alone speaks with final authority and is always sufficient for all matters of belief and practice.</p>
			<p class="references">Hebrews 1:1; Romans 1:20; 2 Timothy 3:16; 2 Peter 1:20,21; Proverbs 30:5; 1 Thessalonians 2:13</p>
		</li>
		<li><h3>The Human Race</h3>
			<p>All men and women, being created in the image of God, have inherent and equal dignity and worth.  Their greatest purpose is to obey, worship and love God.  As a result of the fall of our first parents, every aspect of human nature has been corrupted and all men and women are without spiritual life, guilty sinners and hostile to God.  Every person is therefore under the just condemnation of God and needs to be born again, forgiven and reconciled to God in order to know and please him.</p>
			<p class="references">Genesis 1:26,27; Psalm 8:4,5; Ecclesiastes 7:29; Matthew 22:37; Ephesians 2:1-10</p>
		</li>
		<li><h3>The Lord Jesus Christ</h3>
			<p>The Lord Jesus Christ is fully God and fully man.  He was conceived by the Holy Spirit, born of a virgin, and lived a sinless life in obedience to the Father.  He taught with authority and all his words are true.  On the cross he died in the place of sinners, bearing God's punishment for their sin, redeeming them by his blood.  He rose from the dead and in his resurrection body ascended into heaven where he is exalted as Lord of all.  He intercedes for his people in the presence of the Father.</p>
			<p class="references">John 1:1-3; Hebrews 1:8; John 20:28; Hebrews 2:14,17; Isaiah 53:4-6; 1 Corinthians 15:3; 1 Peter 2:24; Luke 24:5-8,38,39,50,51; Ephesians 1:20-23; Philippians 2:9-11; Hebrews 7:25</p>
		</li>
		<li><h3>Salvation</h3>
			<p>Salvation is entirely a work of God's grace and cannot be earned or deserved.  It has been accomplished by the Lord Jesus Christ and is offered to all in the gospel.  God in his love forgives sinners whom he calls, granting them repentance and faith.  All who believe in Christ are justified by faith alone, adopted into the family of God and receive eternal life.</p>
			<p class="references">Mark 10:26,27; Acts 4:12; 2 Timothy 1:8-10; Romans 1:16; 3:28; 5:1; Galatians 3:11; 1 John 3:1,2</p>
		</li>
		<li><h3>The Holy Spirit</h3>
			<p>The Holy Spirit has been sent from heaven to glorify Christ and to apply his work of salvation.  He convicts sinners, imparts spiritual life and gives a true understanding of the Scriptures.  He indwells all believers, brings assurance of salvation and produces increasing likeness to Christ.  He builds up the Church and empowers its members for worship, service and mission.</p>
			<p class="references">John 14:26; 15:26; 16:8; Romans 8:1-17; 1 Corinthians 6:19; Ephesians 5:18; 2 Corinthians 3:17,18; Galatians 5:17,18; 1 Corinthians 12:13; Ephesians 2:22</p>
		</li>
		<li><h3>The Church</h3>
			<p>The universal Church is the body of which Christ is the head and to which all who are saved belong.  It is made visible in local churches, which are congregations of believers who are committed to each other for the worship of God, the preaching of the Word, the administering of Baptism and the Lord's Supper, for pastoral care and discipline, and for evangelism.  The unity of the body of Christ is expressed within and between churches by mutual love, care and encouragement.  True fellowship between churches exists only where they are faithful to the gospel.</p>
			<p class="references">Matthew 16:18; Ephesians 5:23-32; 1:22,23; 1 Corinthians 1:2; Acts 2:42-47; 1 Corinthians 12:7-11</p>
		</li>
		<li><h3>Baptism and the Lord's Supper</h3>
			<p>Baptism and the Lord's Supper have been given to the churches by Christ as visible signs of the gospel.  Baptism is a symbol of union with Christ in his death and resurrection but does not impart spiritual life.  The Lord's Supper is a commemoration of Christ's sacrifice offered once for all and involves no change in the bread and wine.  All its blessings are received by faith.</p>
			<p class="references">Matthew 28:18-20; Acts 2:41,42; 8:12,36-38; 10:47,48; 1 Corinthians 10:16,17; 11:17-32</p>
		</li>
		<li><h3>The Future</h3>
			<p>The Lord Jesus Christ will return in glory.  He will raise the dead and judge the world in righteousness.  The wicked will be sent to eternal punishment and the righteous will be welcomed into a life of eternal joy in fellowship with God.  God will make all things new and will be glorified forever.</p>
			<p class="references">Acts 1:10,11; 1 Thessalonians 4:16,17; 1 Thessalonians 1:5-10; Matthew 25:46; 2 Peter 3:3-13</p>
		</li>
	</ol>
	<p>If you have any questions about what this means or why we believe it, please don't hesitate to contact us.</p>

@stop

@section('aside')

<h4>More Information:</h4>

<div class="list-group">
  <a href="{{ route('whatwebelieve') }}" class="list-group-item">
    <h5 class="list-group-item-heading">What We Believe</h5>
    <small class="list-group-item-text">A short summary of our beliefs in everyday English. No technical terms here!</small>
  </a>
  <a href="{{ route('statementoffaith') }}" class="list-group-item active">
    <h5 class="list-group-item-heading">Statement of Faith</h5>
    <small class="list-group-item-text">A more complete summary of our beliefs, giving Bible references and using slightly more technical language.</small>
  </a>
  <a href="{{ route('history') }}" class="list-group-item">
    <h5 class="list-group-item-heading">History</h5>
    <small class="list-group-item-text">Information about our church started.</small>
  </a>
    <a href="{{ route('pastor') }}" class="list-group-item">
    <h5 class="list-group-item-heading">Pastor</h5>
    <small class="list-group-item-text">Our pastor, Mark Drury.</small>
  </a>
</div>

@stop
