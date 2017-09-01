<?php 

class PessoaJuridica{
 
	private $id;
	private $nome;
	private $cnpj;

	public function __Construct($nome, $cnpj){
		$this->nome = $nome;
		$this->cnpj = $cnpj;
	}

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getNome() {
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getCnpj(){
		return $this->cnpj;
	}

	public function setCnpj($cnpj){
		$this->cnpj = $cnpj;
	}
}

 ?>
