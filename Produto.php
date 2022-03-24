<?php 
    class Produto{

        public $descricao ;
        public $estoque ;
        public $preco ;

        function aumentarEstoque($num1){
            return $estoque++;
        }
        function diminuirEstoque($num2){
            return $estoque--;
        }
        function reajustarPreco($percentual){
            return $preco;
        }
    }

    $produto = new Produto;
    $produto->descricao = "Item 1";
    $produto->estoque = 15;
    $produto->preco = 200;

    echo "O ".$descricao. " tem " .$estoque. "em estoque com o preçoooo unitário de R$" .$preco;

