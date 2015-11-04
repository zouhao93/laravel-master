/**
 * Created by zouha on 2015/11/1.
 */
requirejs.config({
    baseUrl: app.baseUrl + '/',
    urlArgs: 'ver=' + app.version,
    waitSeconds: 0,
    paths: {
        'modulejs' : app.modulejs,
        'jquery' : 'lib/jquery/jquery.min',
        'domReady' : 'domReady',
        'bootstrap' : 'lib/bootstrap/js/bootstrap.min',
        'bootstrap-notify' : 'lib/bootstrap-notify/bootstrap-notify.min'
    },
    shim: {
        'bootstrap': {
            deps : 'jquery',
            exports : 'bootstrap'
        }
    }
});

require(['domReady', 'bootstrap-notify'], function (domReady) {
    domReady(function () {
        require(['bootstrap']);
        require(['jquery']);
        if (app.loadScript) {
            require(['modulejs']);
        }
    });
});

function loadCss(url)
{
    var link = document.createElement('link');
    link.type = 'text/css';
    link.rel = 'stylesheet';
    link.href = url;
    var head = document.getElementsByTagName('head')[0];
    head.appendChild(link);
}