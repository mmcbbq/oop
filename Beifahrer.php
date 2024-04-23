<?php

class Beifahrer
{
    private string $fname;
    private string $lname;
    private int $age;

    /**
     * @param string $fname
     * @param string $lname
     * @param int $age
     */
    public function __construct(string $fname, string $lname, int $age)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->age = $age;
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

    }