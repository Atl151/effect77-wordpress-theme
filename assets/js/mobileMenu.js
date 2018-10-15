jQuery(function($){
    var mobyMenu = new Moby({
        menu       : $('#mobile-menu'), // The menu that will be cloned
        mobyTrigger: $('#mobile-button'), // Button that will trigger the Moby menu to open
        menuClass: 'top-full'
    });
    
    console.log('works');
});