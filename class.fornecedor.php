<?php

// Classe Produto
class Produto {
    // Propriedades
    private $nome;
    private $preco;
    private $quantidade;
    private $fornecedor;

    // Construtor
    public function __construct($nome, $preco, $quantidade, $fornecedor) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
        $this->fornecedor = $fornecedor;
    }

    // Métodos Get
    public function getNome() {
        return $this->nome;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function getFornecedor() {
        return $this->fornecedor;
    }
}

// Classe Fornecedor
class Fornecedor {
    // Propriedades
    private $nome;
    private $endereco;
    private $telefone;

    // Construtor
    public function __construct($nome, $endereco, $telefone) {
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
    }

    // Métodos Get
    public function getNome() {
        return $this->nome;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getTelefone() {
        return $this->telefone;
    }
}

// Criando fornecedores
$fornecedorFaberCastell = new Fornecedor("Faber Castell", "Rua das Canetas, 123", "(11) 1234-5678");
$fornecedorPilot = new Fornecedor("Pilot", "Avenida dos Lápis, 456", "(11) 9876-5432");
$fornecedorLeoleo = new Fornecedor("Leoleo", "Rua dos Lápis, 789", "(11) 1111-2222");

// Criando produtos
$lapisFaberCastell = new Produto("Lápis Preto Faber Castell", 1.50, 100, $fornecedorFaberCastell);
$lapisPilot = new Produto("Lápis Preto Pilot", 1.20, 80, $fornecedorPilot);
$lapisLeoleo = new Produto("Lápis Preto Leoleo", 1.00, 120, $fornecedorLeoleo);

// Exibindo informações dos produtos e fornecedores
echo "Produto: " . $lapisFaberCastell->getNome() . ", Preço: R$ " . $lapisFaberCastell->getPreco() . ", Quantidade: " . $lapisFaberCastell->getQuantidade() . "<br>";
echo "Fornecedor: " . $lapisFaberCastell->getFornecedor()->getNome() . ", Endereço: " . $lapisFaberCastell->getFornecedor()->getEndereco() . ", Telefone: " . $lapisFaberCastell->getFornecedor()->getTelefone() . "<br><br>";

echo "Produto: " . $lapisPilot->getNome() . ", Preço: R$ " . $lapisPilot->getPreco() . ", Quantidade: " . $lapisPilot->getQuantidade() . "<br>";
echo "Fornecedor: " . $lapisPilot->getFornecedor()->getNome() . ", Endereço: " . $lapisPilot->getFornecedor()->getEndereco() . ", Telefone: " . $lapisPilot->getFornecedor()->getTelefone() . "<br><br>";

echo "Produto: " . $lapisLeoleo->getNome() . ", Preço: R$ " . $lapisLeoleo->getPreco() . ", Quantidade: " . $lapisLeoleo->getQuantidade() . "<br>";
echo "Fornecedor: " . $lapisLeoleo->getFornecedor()->getNome() . ", Endereço: " . $lapisLeoleo->getFornecedor()->getEndereco() . ", Telefone: " . $lapisLeoleo->getFornecedor()->getTelefone();

?>



