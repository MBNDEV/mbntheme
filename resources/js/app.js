(function ($) {

    var app = {
        onReady: function () {

        },
        
        onLoad: function () {
            $(document).foundation();
            app.utils();
        },


        utils: function () {


        },


    }


    document.addEventListener('DOMContentLoaded', app.onReady);
    window.addEventListener('load', app.onLoad);

})(jQuery);
