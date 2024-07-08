<?php

/*oque são MÉTODOS e PROPRIEDADES(ATRIBUTOS) POO:

PROPRIEDADES/ATRIBUTOS - são as caracteristicas que uma classe vai ter

PUBLIC $LIKES = 0;  - uma propriedade/atributo Publico
 temos tambem as 
   PROTECTED $LIKES = 0; e
   PRIVATE $LIKES = 0;
*/

class Post{
    //Atributos:
    public $likes = 0;
    public $comments = [];
    public $author;

    //função / Metodos dentro da classe:
    public function aumentarLike(){
        $this->likes++;
    }
}

//Objetos:
$post1 = new Post();
$post1->aumentarLike();  //executando o Metodo

$post2 = new Post();
$post2->aumentarLike();

echo "POST 1: ".$post1->likes."<br/>";
echo "POST 2: ".$post2->likes."<br/>";













?>