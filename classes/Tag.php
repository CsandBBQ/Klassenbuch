<?php


class Tag
{
    private string $tag;
    private string $datum;
    private string $inhalt;

    private string $unterrichtsArt;
    private string $dozent;

    /**
     * @param string $tag
     * @param string $datum
     * @param string $unterrichtsArt
     * @param string $inhalt
     * @param string $dozent
     */
    public function __construct(string $tag, string $datum, string $unterrichtsArt, string $inhalt, string $dozent)
    {
        $this->tag = $tag;
        $this->datum = $datum;
        $this->unterrichtsArt = $unterrichtsArt;
        $this->inhalt = $inhalt;
        $this->dozent = $dozent;
    }

    public function getTag(): string
    {
        return $this->tag;
    }

    public function setTag(string $tag): void
    {
        $this->tag = $tag;
    }

    public function getDozent(): string
    {
        return $this->dozent;
    }

    public function setDozent(string $dozent): void
    {
        $this->dozent = $dozent;
    }

    public function getUnterrichtsArt(): string
    {
        return $this->unterrichtsArt;
    }

    public function setUnterrichtsArt(string $unterrichtsArt): void
    {
        $this->unterrichtsArt = $unterrichtsArt;
    }

    public function getDatum()
    {
        return $this->datum;
    }

    public function setDatum(string $date): void
    {
        $this->datum = $date;
    }

    public function getInhalt(): string
    {
        return $this->inhalt;
    }

    public function setInhalt(string $inhalt): void
    {
        $this->inhalt = $inhalt;
    }

}