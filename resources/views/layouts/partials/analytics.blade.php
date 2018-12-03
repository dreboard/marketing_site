<script async src="https://www.googletagmanager.com/gtag/js?id=UA-129412423-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    @if('local' === getenv('APP_ENV'))
    gtag('config', 'UA-72571847-2');
    @else
    gtag('config', 'UA-72571847-1');
    @endif
</script>
