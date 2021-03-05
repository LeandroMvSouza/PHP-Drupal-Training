<?php

interface Publicacao
{
    /**
     * Abre o livro
     * @return void
     */
    public function abrir();

    /**
     * Fecha o livro
     * @return void
     */
    public function fechar();

    /** 
     * Vai para a página dada como parâmetro, contanto que ela seja válida
     * @param int $destination
     * @return void
     */
    public function folhear(int $destino); 

    /**
     * Vai para a próxima página do livro
     * @return void
     */
    public function avancarPag();

    /**
     * Vai para a página anterior à atual
     * @return void
     */
    public function voltarPag();
}