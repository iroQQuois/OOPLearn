<?php

namespace OOPLearn\PrinciplesOfPatterns\CompositionAndExtend;

include 'Seminar.php';
include 'Lecture.php';
include 'TimedCostStrategy.php';
include 'FixedCostStrategy.php';

abstract class Lesson
{
    protected int $duration;
    private CostStrategy $costStrategy;

    public function __construct(int $duration, CostStrategy $strategy)
    {
        $this->duration = $duration;
        $this->costStrategy = $strategy;
    }

    public function cost(): int
    {
        return $this->costStrategy->cost($this);
    }

    public function chargeType(): string
    {
        return $this->costStrategy->chargeType();
    }

    public function getDuration(): int
    {
        return $this->duration;
    }
}

$lessons[] = new Seminar(4, new TimedCostStrategy());
$lessons[] = new Lecture(4, new FixedCostStrategy());

foreach ($lessons as $lesson)
{
    echo "Оплата за занятие {$lesson->cost()}. ";
    echo " Тип оплаты: {$lesson->chargeType()}\n";
}
