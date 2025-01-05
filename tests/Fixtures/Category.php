<?php

declare(strict_types=1);

namespace JoelButcher\ScribeLaravelDataPlugin\Tests\Fixtures;

enum Category: string
{
    case Technology = 'Technology';
    case Business = 'Business';
    case Sports = 'Sports';
    case Culture = 'Culture';
    case Health = 'Health';
    case Science = 'Science';
    case Education = 'Education';
    case Entertainment = 'Entertainment';
    case Politics = 'Politics';
    case Travel = 'Travel';
    case Food = 'Food';
    case Nature = 'Nature';
    case Fashion = 'Fashion';
    case Other = 'Other';
}
