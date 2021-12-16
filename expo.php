

<?php



/* CONSTANTES SINTAXIS

Para definir una constante utilizamos la funcion ( define())
la cual puede almacenar valores escalares y array constante
tambien se puede utilizar la funcion ( const() ) para obtener un valor de forma dinamica */


//---------------Sintaxis-------------------\\
                                            #
    define   ("CONSTANTE", "Hola mundo.");  #
/*    ^           ^             ^           #
      |           |             |           #
    funcion    nombre de        valor       #
              la constante                  #
*/                                          #
    echo CONSTANTE;                         #
                                            #
                                            #
                                            #
//------------------------------------------\\

//--las constatntes no se pueden redefinir---\\
/*                                            #
    define   ("CONSTANTE", "hola Universo");  #
                                              #
    echo CONSTANTE;                           #
                                              #
                                              #
*/                                            #
//--------------------------------------------\\

echo "<br 7/>";

//----constantes con conts-----------//
const CONSTANTES = 'Hola universo';

echo CONSTANTES;

/* diferencia de definir constantes usando define(), las constantes definidas con la palabra clave const 
deben declararse en el nivel superior del entorno de la aplicación porque se definen en tiempo de ejecución. 
Esto significa que no pueden declararse dentro de funciones, bucles, sentencias if o bloques try/ catch. */




echo "<br 7/>";

/*function hola($hola){



}

echo hola(2);*/



/*definicion de una constante 
son aquellas que al igual que las variables nos permiten almacenar algún valor cual es la diferencia que se 
llaman de manera diferente y se definen de manera diferente */




// CONSTANTES MAGICAS O PREDEFINIDAS //
/*hay gran cantidad de constantes  predefinidas  vamos a ver las mas importantes y comunes

__LINE__ Nos muestra el numero de la linea del editor de texto en el que nos encontramos
__CLASS__ Muestra el nombre de la clase que se alla declarado 
__FILE__ Nos devuelve la ruta completa y el nombre del archivo
__FUNCTION__ Nos devuelve el nombre de una funci0on definida o declarada
__METHOD__ Nos devuelve el metodo que se declare en una clase o funcion 
__NAMESPACE__ Nombre del espacio de nombres actual 
*/

//namespace ConstantesPredefinidas;

class predefinidasClase { // definimos una classe //
    
    function predefinidas(){ //definimos uan funcion//
        echo "la funcion se llama : ".__FUNCTION__."<br>";//__FUNCTION__  = Constante/
        echo "la Clase se llama : ".__CLASS__."<br>";
        echo "la linea de esta instrccion esta en la linea # : ".__LINE__."<br>";
        echo "Este archivo se encuentra en : ".__FILE__."<br>";
        echo "el metoso que estamos usando es : ".__METHOD__."<br>";
        echo "el nombre es :". __NAMESPACE__."<br>";
       
      
    }
    
}


$obj = new predefinidasClase(); //creamos un objeto  y la clase que queremos instanciar//
$obj->predefinidas(); //para ejecutar la funcion o el metodo llamamos la funcion esta funcion nos va a imprimir el echo//
class predefinidasClase { // definimos una classe //
    
    function predefinidas(){ //definimos uan funcion//
        echo "la funcion se llama : ".__FUNCTION__."<br>";//__FUNCTION__  = Constante/
        echo "la Clase se llama : ".__CLASS__."<br>";
        echo "la linea de esta instrccion esta en la linea # : ".__LINE__."<br>";
        echo "Este archivo se encuentra en : ".__FILE__."<br>";
        echo "el metoso que estamos usando es : ".__METHOD__."<br>";
        echo "el nombre es :". __NAMESPACE__."<br>";
       
      
    }
    
}


$obj = new predefinidasClase(); //creamos un objeto  y la clase que queremos instanciar//
$obj->predefinidas(); //para ejecutar la funcion o el metodo llamamos la funcion esta funcion nos va a imprimir el echo//








//expresion

//es todo aquello que tenga : un nombre , un operador y un valor ejm.



 // $nombre  =     "valor";
//  ^        ^        ^
//  |        |        |
// Nombre  Operador  Valor


 //$suma     =      (2+2);
//  ^        ^        ^
//  |        |        |
// Nombre  Operador  Valor


 //   $x     +        +;
//  ^        ^        ^
//  |        |        |
// Nombre  Operador  Valor





?>