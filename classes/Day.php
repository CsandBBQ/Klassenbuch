<?php

class Day
{
    private int $id;
    private int $weekId;
    private string $amContent;
    private string $pmContent;
    private string $dayOfWeek;
    private array $lectureMethod;

    /**
     * @param int $id
     * @param string $dayOfWeek
     * @param array $lectureMethod
     * @param string $amContent
     * @param string $pmContent
     * @param int $weekId
     */
    public function __construct(int $id, string $dayOfWeek, array $lectureMethod, string $amContent, string $pmContent, int $weekId)
    {
        $this->id = $id;
        $this->dayOfWeek = $dayOfWeek;
        $this->lectureMethod = $lectureMethod;
        $this->amContent = $amContent;
        $this->pmContent = $pmContent;
        $this->weekId = $weekId;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getWeekId(): int
    {
        return $this->weekId;
    }

    public function setWeekId(int $weekId): void
    {
        $this->weekId = $weekId;
    }

    public function getAmContent(): string
    {
        return $this->amContent;
    }

    public function setAmContent(string $amContent): void
    {
        $this->amContent = $amContent;
    }

    public function getPmContent(): string
    {
        return $this->pmContent;
    }

    public function setPmContent(string $pmContent): void
    {
        $this->pmContent = $pmContent;
    }

    public function getDayOfWeek(): string
    {
        return $this->dayOfWeek;
    }

    public function setDayOfWeek(string $dayOfWeek): void
    {
        $this->dayOfWeek = $dayOfWeek;
    }

    public function getLectureMethod(): array
    {
        return $this->lectureMethod;
    }

    public function setLectureMethod(array $lectureMethod): void
    {
        $this->lectureMethod = $lectureMethod;
    }

    public function getDate(DateTime $monday): string
    {
        $count = match ($this->dayOfWeek) {
            "Montag" => 0,
            "Dienstag" => 1,
            "Mittwoch" => 2,
            "Donnerstag" => 3,
            "Freitag" => 4,
        };
        $date = date_modify((clone $monday), '+' . $count . ' days');
        return date_format($date, 'd.m.Y');

    }


}