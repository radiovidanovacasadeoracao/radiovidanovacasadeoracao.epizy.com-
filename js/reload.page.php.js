function forceReload() {
    if (document.images)
        location.replace(location.href + '?' + (new Date()).getTime());
    else
        location.href = location.href + '?' + (new Date()).getTime();
}

var lastTime = location.search.substring(1) - 0;
if ((new Date()).getTime() - lastTime > 1000)
  forceReload();