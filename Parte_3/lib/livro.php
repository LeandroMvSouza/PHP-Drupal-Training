<?php

class livro implements Publicacao
{
    private $titulo;

    private $autor;

    private $totPaginas;

    private $pagAtual = 0;

    private $aberto = false;

    private $leitor;

    public function __construct(string $titulo, string $autor, int $totPaginas, pessoa $leitor)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->leitor = $leitor;
    }

    public function detalhes()
    {
        echo "O livro : " . $this->getTitulo() . ", de autor(a) - " . $this->getAutor() . " - possui um total de " . $this->getTotPaginas() . " páginas.<br>";

        $open = $this->getAberto();
        if ($open) {
            echo "No momento, " . $this->leitor->getNome() . ", dono(a) do livro, esta lendo a página : " . $this->getPagAtual() . "<br>";
        } else {
            echo "No momento, " . $this->leitor->getNome() . ", dono(a) do livro, não esta lendo. Essa pessoa parou a leitura na página : " . $this->getPagAtual();
        }
    }

    // INTERFACE/CONTRACT FUNCTIONS :

    public function abrir()
    {
        $this->aberto = true;
    }

    public function fechar() 
    {
        $this->aberto = false;
    }

    public function folhear($destino)
    {
        $this->abrir();
        
        if (($destino <= $this->totPaginas) && ($destino >= 0)) {
            $this->pagAtual = $destino;
            echo "Pag atual = " . $this->getPagAtual();
        } else {
            echo "Página inválida, a página ainda é a de número " . $this->getPagAtual() . "<br>";
        }
    }

    public function avancarPag()
    {
        $this->abrir();

        $destino = $this->getPagAtual() + 1;

        if ($destino <= $this->getTotPaginas()) {
            $this->setPagAtual($destino);
            echo "Avançamos para a pagina : " . $this->getPagAtual() . "<br>";
        }
        else{
            echo "A última página - ".$this->getTotPaginas." foi alcançada!" . "<br>";
        }
    }

    public function voltarPag()
    {
        $this->abrir;

        $destino = $this->getPagAtual() - 1;

        if ($destino >= 0) {
            $this->setPagAtual($destino);
            echo "Voltamos para a pagina : " . $this->getPagAtual() . "<br>";
        }
        else{
            echo "Não podemos mais voltar páginas! Já estamos na primeira página do livro.". "<br>";
        }
    }

    // SETTER'S :

    /**
     * @param string
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * @param string
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    /**
     * @param pessoa (objeto)
     */
    public function setLeitor($leitor)
    {
        $this->leitor = $leitor;
    }

    /**
     * @param int
     */
    public function setTotPaginas($totPaginas)
    {
        $this->totPaginas = $totPaginas;
    }

    /**
     * @param int
     */
    public function setPagAtual($pagAtual)
    {
        $this->pagAtual = $pagAtual;
    }

    // GETTER'S :

    /**
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @return string
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * @return pessoa (objeto)
     */
    public function getLeitor()
    {
        return $this->leitor;
    }

    /**
     * @return int
     */
    public function getTotPaginas()
    {
        return $this->totPaginas;
    }

    /**
     * @return int
     */
    public function getPagAtual()
    {
        return $this->pagAtual;
    }

    /**
     * @return bool
     */
    public function getAberto()
    {
        return $this->aberto;
    }
}
