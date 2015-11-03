/**
 * Created by zouha on 2015/11/1.
 */
requirejs.config({
    baseUrl: app.baseUrl + '/',
    //urlArgs: 'v=' + app.version,
    waitSeconds: 0,
    path: {
        'modulejs' : app.modulejs,
        'jquery' : 'lib/jquery/jquery-2.1.4.min',
        'domReady' : 'domReady',
        'bootstrap' : 'lib/bootstrap/js/bootstrap.min',
        'bootstrap-notify' : 'lib/bootstrap-notify/bootstrap-notify.min'
    }
});

require(['domReady', 'bootstrap-notify'], function (domReady) {
    domReady(function () {
        if (app.loadScript) {
            //require();
            alert('123');
        }
    });
});

function loadCss(url)
{
    var link = document.createElement(link);
    link.type = 'text/css';
    link.rel = 'stylesheet';
    link.href = app.baseUrl+url;
    document.getElementsByTagName('head')[0].append(link);
}