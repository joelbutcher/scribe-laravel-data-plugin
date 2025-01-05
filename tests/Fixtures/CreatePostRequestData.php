<?php

declare(strict_types=1);

namespace JoelButcher\ScribeLaravelDataPlugin\Tests\Fixtures;

use Spatie\LaravelData\Attributes\Validation\Date;
use Spatie\LaravelData\Attributes\Validation\DateFormat;
use Spatie\LaravelData\Attributes\Validation\Email;
use Spatie\LaravelData\Attributes\Validation\Max;
use Spatie\LaravelData\Attributes\Validation\Min;
use Spatie\LaravelData\Attributes\Validation\Nullable;
use Spatie\LaravelData\Attributes\Validation\Present;
use Spatie\LaravelData\Attributes\Validation\Regex;
use Spatie\LaravelData\Attributes\Validation\Required;
use Spatie\LaravelData\Attributes\Validation\StringType;
use Spatie\LaravelData\Data;

final class CreatePostRequestData extends Data
{
    public function __construct(
        #[Required, StringType, Max(255)]
        public string $title,
        #[Required, Regex('/^[a-z]+$/')]
        public string $slug,
        #[Required, StringType]
        public string $content,
        #[Required]
        public Category $category,
        #[Required, Email]
        public string $authorEmail,
        #[Present, Nullable, Date, DateFormat('Y-m-d')]
        public ?\DateTime $publishedAt,
        #[Nullable, Min(1), Max(3)]
        public ?int $priority,
    ) {}
}
