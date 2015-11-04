{{--<script src="{{$jsPath}}/require.js" type="text/javascript" data-main="{{$jsPath}}/main.js"></script>--}}
<script src="{{$jsPath}}/require.js" data-main="{{$jsPath}}/app.js"></script>
<script>
    var app = {
        'baseUrl': '{{$jsPath}}',
        'loadScript': '{{$loadScript or false}}}',
        'version' : '{{$version}}',
        'modulejs' : '/module/js/front/'+['{{$controller}}', '{{$uri}}'].join('/')
    };
</script>
@yield('footer')
