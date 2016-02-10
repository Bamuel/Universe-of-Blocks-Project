function rain_off(){
    var obj3 = 1;
    if (obj3 == 1){
        void(document.getElementById('rain_panel').style.visibility = 'hidden');
        var intevalo = setInterval('miscojones',1000);
    }
}
function rain_on(){
    var obj3 = 1;
    if (obj3 == 1){
        void(document.getElementById('rain_panel').style.visibility = 'visible');
        var intevalo = setInterval('miscojones',1000);
    }
}