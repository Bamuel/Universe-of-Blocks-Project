var defaultblock = 0;
var blockid = 1;
var woodm = 1;
var hola = 0;
function changeblock1(id) {
    var slot = document.getElementById(id);
    slot.className = "block" + parseInt(blockid);
}
function breakblock(id) {
    var getblockid = document.getElementById(id);
}
function panel1(id) {
    var slot = document.getElementById(id);
    slot.className = "block" + parseInt(blockid);
}
$('#oknicknameevermine').click(function(){ // primera forma
    defaultblock+=2;
    stop(a);
});