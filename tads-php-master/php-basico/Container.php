<?php


class Container
{
    private int $predio;
    private int $rua;
    private int $andar;
    public function __construct(int $predio, int $rua, int $andar)
    {
        $this->predio = $predio;
        $this->rua = $rua;
        $this->andar = $andar;
    }

    public function __get($name)
    {
        // TODO: Implement __get() method.

    }

    /**
     * @param int $predio
     * @return Container
     */
    public function setPredio(int $predio): Container
    {
        $this->predio = $predio;
        return $this;
    }

    /**
     * @return int
     */
    public function getRua(): int
    {
        return $this->rua;
    }

    /**
     * @param int $rua
     * @return Container
     */
    public function setRua(int $rua): Container
    {
        $this->rua = $rua;
        return $this;
    }

    /**
     * @return int
     */
    public function getAndar(): int
    {
        return $this->andar;
    }

    /**
     * @param int $andar
     * @return Container
     */
    public function setAndar(int $andar): Container
    {
        $this->andar = $andar;
        return $this;
    }

}