// CONSTANTES
DIR_IMG = "img/";
LARGO = "600";
ALTO = "400";
POSX_INICIAL = Math.round(LARGO/2) - 15;
POSY_INICIAL = ALTO - 15;
JUEGO_FPS = 50;
var micanvas;
var contexto;

window.onload = function() {
    micanvas = document.getElementById("espacio");
    contexto = micanvas.getContext("2d");   
    
    var juego = new Juego();
};

var ManejadorDeEventos = function(nave) {
    this.nave = nave;
    
    this.tecla = function(e) {

        // se obtiene el evento
        var evento = e || window.event;             
        
        switch (evento.keyCode) {
            case 97:
                nave.moverIzquierda();              
            break;
            
            case 100:
                nave.moverDerecha();                
            break;  
            
            case 115:
                nave.moverAbajo();              
            break;  
            
            case 119:
                nave.moverArriba();             
            break;  
        }               
        
        return 0;
    };
    
    document.body.onkeypress = this.tecla;  
};

var Nave = function () {
    // atributos
    this.posx = new Number(POSX_INICIAL);
    this.posy = new Number(POSY_INICIAL);
    this.figura = new Image();
    this.figura.src = DIR_IMG + "wood.png";
    
    this.dibujar = function() {
        var figura = this.getFigura();
        var x = this.getX();
        var y = this.getY();
        
        if (isNaN(x) || isNaN(y)) {         
            x = Math.rint(LARGO/2);
            y = ALTO + 15;
        }
                
        contexto.drawImage(figura,x,y,60,60);
        
    };
    
    this.getX = function() {
        return this.posx;
    };
    
    this.getY = function() {
        return this.posy;
    };    
    
    this.getFigura = function() {
        return this.figura;
    };
        
    
    this.moverArriba = function() {
        this.posy-=5;
    };
    
    this.moverAbajo = function() {
        this.posy+=5;
    };
    
    this.moverIzquierda = function()  {
        this.posx-=5;      
    };
    
    this.moverDerecha = function() {
        this.posx+=5;
    };    
};

function limpiar () {
    micanvas.width = micanvas.width;

}

var Juego = function() {
    var viper = new Nave();
    var manejadornave = new ManejadorDeEventos(viper);  
    
    this.correr = function() {
        limpiar();
        viper.dibujar();
    };
    
    var intervalId = setInterval(this.correr, 1000 / JUEGO_FPS);
    
};