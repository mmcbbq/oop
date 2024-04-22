<?php

class Kassenzettel
{
    /** @var Artikel[] $artikel */
    private array $artikel;
    private array $anzahl;



    public function __construct(  array $anzahl,array $artikel )
    {
        $this->artikel = $artikel;
        $this->anzahl = $anzahl;

    }

    public function printName():void
    {
        foreach ($this->artikel as $item) {
            echo $item->getName();
        }
    }


    public function berechnePreise(): array
    {
        $preise = [];
        foreach ($this->artikel as $index => $art) {
            $preise[] = $art->getPreis() * $this->anzahl[$index];
        }
        return $preise;

    }

    public function berechneSumme(): float
    {
        $summe = 0;
        foreach ($this->berechnePreise() as $preis) {
            $summe += $preis;
        }
        return $summe;
    }

    public function mwstSumme7(): float
    {
        $summe = 0;
        $preise = $this->berechnePreise();
        foreach ($this->artikel as $index => $item) {
            if ($item->getMwst == 7) {
                $summe += $item->getMwstBetrag() * $this->anzahl[$index];
            }
        }
        return $summe;
    }

    public function mwstSumme19(): float
    {
        $summe = 0;
        ;
        foreach ($this->artikel as $index => $item) {
            if ($item->getMwst == 19) {
                $summe += $item->getMwstBetrag() * $this->anzahl[$index];
            }
        }
        return $summe;
    }

    /**
     * @return Artikel[]
     */
    public function getArtikel(): array
    {
        return $this->artikel;
    }

    /**
     * @param array $artikel
     */
    public function setArtikel(array $artikel): void
    {
        $this->artikel = $artikel;
    }

    /**
     * @return array
     */
    public function getAnzahl(): array
    {
        return $this->anzahl;
    }

    /**
     * @param array $anzahl
     */
    public function setAnzahl(array $anzahl): void
    {
        $this->anzahl = $anzahl;
    }


}


