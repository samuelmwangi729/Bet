@extends('layouts.baseLayout')
<!-- contact-us section begin -->
@section('content')
<div id="sr-widget"></div>
@endsection
    <!-- contact-us section end -->
@section('scripts')
<script>
    (function(a,b,c,d,e,f,g,h,i){a[e]||(i=a[e]=function(){(a[e].q=a[e].q||[]).push(arguments)},i.l=1*new Date,i.o=f,
    g=b.createElement(c),h=b.getElementsByTagName(c)[0],g.async=1,g.src=d,g.setAttribute("n",e),h.parentNode.insertBefore(g,h)
    )})(window,document,"script","https://widgets.sir.sportradar.com/9c971d1f85d2408d2a72a91a1a4d0a19/widgetloader","SIR", {
        language: "en",
	theme: "custom",
    });
    SIR("addWidget", "#sr-widget", "season.fixtures", {tournamentId: "ut846"});
</script>


