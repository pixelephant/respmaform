$(document).ready(function(){

    $(function () {
        var ele = $('#welcome p strong');
        var clr = null;
        var rand = 0;
        loop();
        function loop() {
            clearTimeout(clr);
            inloop();
            return;
        }
        function inloop() {
            ele.html(rand += 1);
            if ((rand == 125 - 1)) {
                return;
            }
            clr = setTimeout(inloop, 10); //call 'inloop()' after 30 milliseconds
        }
    });

});