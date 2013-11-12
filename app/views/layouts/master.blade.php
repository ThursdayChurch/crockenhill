<!doctype html>

<html lang="en">
<head>
    @include('layouts.sections.head')
</head>

<body>
    @include('layouts.sections.ie6warning')

    <header>
        @include('layouts.sections.header')
	</header>

	<main id="main">
	    @yield('content')
	</main>

	@section('footer')
	    <footer>
		    @include('layouts.sections.footer')
	    </footer>
    @show
    
    @include('layouts.sections.foot')
</body>
</html>
