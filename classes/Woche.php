<?php

class Woche
{
    private int $kalenderWoche;
    private string $bemerkung;
    private string $thema;
    /**
     * @var Tag[]
     */
    private array $tage;

    /**
     * @param int $kalenderWoche
     * @param Tag[] $tage
     * @param string $bemerkung
     * @param string $thema
     */
    public function __construct(int $kalenderWoche, array $tage, string $bemerkung, string $thema)
    {
        $this->kalenderWoche = $kalenderWoche;
        $this->tage = $tage;
        $this->bemerkung = $bemerkung;
        $this->thema = $thema;
    }

    public function getTage(): array
    {
        return $this->tage;
    }

    public function setTage(array $tage): void
    {
        $this->tage = $tage;
    }


    public function getBemerkung(): string
    {
        return $this->bemerkung;
    }

    public function setBemerkung(string $bemerkung): void
    {
        $this->bemerkung = $bemerkung;
    }

    public function getThema(): string
    {
        return $this->thema;
    }

    public function setThema(string $thema): void
    {
        $this->thema = $thema;
    }

    public function getKalenderWoche(): int
    {
        return $this->kalenderWoche;
    }

    public function setKalenderWoche(int $kalenderWoche): void
    {
        $this->kalenderWoche = $kalenderWoche;
    }
}