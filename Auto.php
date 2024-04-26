<?php

class Auto
{

    private string $marke;
    private int $geschwindigkeit = 0;
    private string $fahrer;
    private Beifahrer|null $beifahrer;
    private float $kmstand;
    private array $standort;

    private array $reifen;

    /**
     * @param string $fahrer
     * @param int $kmstand
     * @param string $marke
     * @param Beifahrer|null $beifahrer
     * @param array $standort
     * @param Reifen[] $reifen
     */
    public function __construct(string $fahrer, int $kmstand, string $marke,array $reifen, Beifahrer $beifahrer = null, array $standort = ["x" => 0, "y" => 0])
    {
        $this->standort = $standort;
        $this->fahrer = $fahrer;
        $this->marke = $marke;
        $this->beifahrer = $beifahrer;
        $this->kmstand = $kmstand;

        $this->reifen = ["vorne links"=> Null ,"vorne rechts"=>Null, 'hinten links'=>Null,'hinten rechts'=>Null];
        foreach ($reifen as $key=>$reife) {
            $this->wechselReifen($key ,$reife);
        }
    }

    /**
     * @return string
     */
    public function getFahrer(): string
    {
        return $this->fahrer;
    }

    /**
     * @return int
     */
    public function getGeschwindigkeit(): int
    {
        return $this->geschwindigkeit;
    }

    public function beschleunigen(int $kmh): void
    {
        $this->geschwindigkeit += $kmh;
        if ($this->geschwindigkeit > 250) {
            $this->geschwindigkeit = 250;
        }
    }


    public function bremsen(int $kmh): void
    {
        $this->geschwindigkeit -= $kmh;
        if ($this->geschwindigkeit < 0) {
            $this->geschwindigkeit = 0;
        }
    }

    public function einsteigenBeifahrer(Beifahrer $beifahrer): bool
    {
        if ($this->geschwindigkeit == 0 and $this->beifahrer == null) {
            $this->beifahrer = $beifahrer;
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return Beifahrer|null
     */
    public function getBeifahrer(): Beifahrer|null
    {
        return $this->beifahrer;
    }

    public function aussteigenBeifahrer(): bool
    {
        if ($this->geschwindigkeit == 0) {
            $this->beifahrer = null;
            return true;
        } else {
            return false;
        }

    }

    /**
     * @return string
     */
    public function getMarke(): string
    {
        return $this->marke;
    }

    public function vollbremsung(): void
    {
        $this->geschwindigkeit = 0;
    }

    public function fahren(array $ziel): void
    {
        var_dump($this->getBeifahrer());
        $this->kmstand += $this->geschwindigkeit * $this->berechneFahrzeit($this->berechneStrecke($ziel));
        $this->setStandort($ziel);
    }

    /**
     * @return int
     */
    public function getKmstand(): float
    {
        return $this->kmstand;
    }

    /**
     * @return array
     */
    public function getStandort(): array
    {
        return $this->standort;
    }

    /**
     * @param array $standort
     */
    public function setStandort(array $standort): void
    {
        $this->standort = $standort;
    }


    public function berechneStrecke(array $ziel): float
    {
        if ($this->getStandort()['x'] >= $ziel['x']) {
            $a = $this->getStandort()['x'] - $ziel['x'];
        } elseif ($this->getStandort()['x'] < $ziel['x']) {
            $a = $ziel['x'] - $this->getStandort()['x'];
        }
        if ($this->getStandort()['y'] >= $ziel['y']) {
            $b = $this->getStandort()['y'] - $ziel['y'];
        } elseif ($this->getStandort()['y'] < $ziel['y']) {
            $b = $ziel['y'] - $this->getStandort()['y'];
        }

        return sqrt(($a ** 2 + $b ** 2));
    }

    public function berechneFahrzeit(float $strecke): float
    {
        return $strecke / $this->geschwindigkeit;
    }

    public function fahrezumStandort(array $ziel): void
    {
        $akge = $this->geschwindigkeit;
        if ($akge > 50){
            $this->bremsen($akge - 50);
        } else{
            $this->beschleunigen(50 - $akge);
        }
        $this->fahren($ziel);
        $this->vollbremsung();
    }

    /**
     * @return array
     */
    public function getReifen(): array
    {
        return $this->reifen;
    }

    /**
     * @param array $reifen
     */
    public function setReifen(array $reifen): void
    {
        $this->reifen = $reifen;
    }



    /**
     * @param string $pos
     * @param Reifen $reifen
     * @return void
     */
    public function wechselReifen(string $pos, Reifen $reifen): void
    {
        $reifenSatz = $this->getReifen();
        $reifen->setLetztePos($pos);
        $reifenSatz[$pos] = $reifen;
        $this->setReifen($reifenSatz);
    }
}

