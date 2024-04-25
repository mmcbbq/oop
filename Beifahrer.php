<?php

class Beifahrer
{
    private string $fname;
    private string $lname;
    private int $age;
    private array $standort;
    private array $ziel;

    /**
     * @param string $fname
     * @param string $lname
     * @param int $age
     */
    public function __construct(string $fname, string $lname, int $age, array $standort, array $ziel)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->age = $age;
        $this->standort = $standort;
        $this->ziel = $ziel;
    }

    /**
     * @return string
     */
    public function getFname(): string
    {
        return $this->fname;
    }

    /**
     * @param string $fname
     */
    public function setFname(string $fname): void
    {
        $this->fname = $fname;
    }

    /**
     * @return string
     */
    public function getLname(): string
    {
        return $this->lname;
    }

    /**
     * @param string $lname
     */
    public function setLname(string $lname): void
    {
        $this->lname = $lname;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
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

    /**
     * @return array
     */
    public function getZiel(): array
    {
        return $this->ziel;
    }

    /**
     * @param array $ziel
     */
    public function setZiel(array $ziel): void
    {
        $this->ziel = $ziel;
    }

    public function rufeAuto(Auto $auto) :void
    {
        $auto->fahrezumStandort($this->getStandort());
        $auto->einsteigenBeifahrer($this);
        $auto->fahrezumStandort($this->getZiel());
        $auto->aussteigenBeifahrer();
    }
    }