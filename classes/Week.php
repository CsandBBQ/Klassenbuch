<?php

class Week
{
    private int $id;
    private int $subjecId;
    private Datetime $monday;
    private string $remark;
    private string $teacher;

    /**
     * @var Day[]
     */
    private array $days;

    /**
     * @param int $id
     * @param Day[] $days
     * @param string $teacher
     * @param string $remark
     * @param int $subjecId
     * @param Datetime $monday
     */
    public function __construct(int $id, array $days, string $teacher, string $remark, int $subjecId, Datetime $monday)
    {
        $this->id = $id;
        $this->days = $days;
        $this->teacher = $teacher;
        $this->remark = $remark;
        $this->subjecId = $subjecId;
        $this->monday = $monday;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getSubjecId(): int
    {
        return $this->subjecId;
    }

    public function setSubjecId(int $subjecId): void
    {
        $this->subjecId = $subjecId;
    }

    public function getMonday(): Datetime
    {
        return $this->monday;
    }

    public function setMonday(Datetime $monday): void
    {
        $this->monday = $monday;
    }

    public function getRemark(): string
    {
        return $this->remark;
    }

    public function setRemark(string $remark): void
    {
        $this->remark = $remark;
    }

    public function getTeacher(): string
    {
        return $this->teacher;
    }

    public function setTeacher(string $teacher): void
    {
        $this->teacher = $teacher;
    }

    public function getDays(): array
    {
        return $this->days;
    }

    public function setDays(array $days): void
    {
        $this->days = $days;
    }

    public function getCalenderWeek()
    {
        return date("W", $this->monday->getTimestamp());
    }

}