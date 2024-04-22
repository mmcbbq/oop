<?php

class Artikel
{
    private string $name;
    private float $preis;
    private int $mwst;

    /**
     * @param string $name
     * @param float $preis
     * @param int $mwst
     */
    public function __construct(string $name, float $preis, int $mwst)
    {
        $this->name = $name;
        $this->preis = $preis;
        $this->mwst = $mwst;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getPreis(): float
    {
        return $this->preis;
    }

    /**
     * @param float $preis
     */
    public function setPreis(float $preis): void
    {
        $this->preis = $preis;
    }

    /**
     * @return int
     */
    public function getMwst(): int
    {
        return $this->mwst;
    }

    /**
     * @param int $mwst
     */
    public function setMwst(int $mwst): void
    {
        $this->mwst = $mwst;
    }

    public function mwstBetrag(): float
    {
        return (($this->getPreis()) * ($this->getMwst()) / (100 + $this->getMwst()));
    }


    /** @return Artikel[] */
    public static function create_artikel_array(array $artikel, array $einzelpreis, array $mwst) :array
    {
        $artikel_a = [];
        foreach ($artikel as $index => $arti) {
            $artikel_a[] = new Artikel($arti, $einzelpreis[$index], $mwst[$index]);
        }
        return $artikel_a;
    }

}