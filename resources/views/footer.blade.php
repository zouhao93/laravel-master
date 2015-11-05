<div>
    <hr>
    <ul>
        <li>1</li>
        <li>1</li>
        <li>1</li>
        <li>1</li>
    </ul>
</div>
<script src="{{$jsPath}}/require.js" data-main="{{$jsPath}}/app.js"></script>
<script>
    var app = {
        'baseUrl': '{{$jsPath}}',
        'loadScript': '{{$loadScript or false}}',
        'version' : '{{$version}}',
        'modulejs' : '/module/js/front/'+['{{$controller}}', '{{$action}}'].join('/')
    };
</script>
@yield('footer')
