if(window.location.hash){
    $('a[role=tab]').each(function(){
        var hash = '#' + $(this).attr('href').split('#')[1];
        if(hash == window.location.hash){
            $(this).click();
        }
    });
}