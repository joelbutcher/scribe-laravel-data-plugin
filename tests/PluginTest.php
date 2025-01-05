<?php

declare(strict_types=1);

namespace JoelButcher\ScribeLaravelDataPlugin\Tests;

use Illuminate\Routing\Route;
use Illuminate\Support\Arr;
use JoelButcher\ScribeLaravelDataPlugin\Plugin;
use JoelButcher\ScribeLaravelDataPlugin\Tests\Fixtures\Category;
use JoelButcher\ScribeLaravelDataPlugin\Tests\Fixtures\CreatePostRequestData;
use Knuckles\Camel\Extraction\ExtractedEndpointData;
use Knuckles\Scribe\Tools\DocumentationConfig;

uses(TestCase::class);

describe('Plugin test', function () {
    it('extracts all expected body parameters', function () {
        $route = new Route('post', '/api/posts', fn (CreatePostRequestData $dataStub) => response()->noContent());

        $plugin = new Plugin(new DocumentationConfig());

        $bodyParameters = collect($plugin(ExtractedEndpointData::fromRoute($route)) ?? [])->mapWithKeys(
            fn (array $parameter, string $key) => [$key => Arr::except($parameter, 'example')]
        )->all();

        expect($bodyParameters)->toHaveCount(7)
            ->toEqual([
                'title' => [
                    'name' => 'title',
                    'required' => true,
                    'type' => 'string',
                    'description' => 'Must not be greater than 255 characters.',
                    'nullable' => false,
                ],
                'slug' => [
                    'name' => 'slug',
                    'required' => true,
                    'type' => 'string',
                    'description' => 'Must match the regex /^[a-z]+$/.',
                    'nullable' => false,
                ],
                'content' => [
                    'name' => 'content',
                    'required' => true,
                    'type' => 'string',
                    'description' => '',
                    'nullable' => false,
                ],
                'category' => [
                    'name' => 'category',
                    'required' => true,
                    'type' => 'string',
                    'description' => '',
                    'nullable' => false,
                    'enumValues' => array_map(fn (Category $c) => $c->value, Category::cases())
                ],
                'authorEmail' => [
                    'name' => 'authorEmail',
                    'required' => true,
                    'type' => 'string',
                    'description' => 'Must be a valid email address.',
                    'nullable' => false,
                ],
                'publishedAt' => [
                    'name' => 'publishedAt',
                    'required' => false,
                    'type' => 'string',
                    'description' => 'Must be a valid date. Must be a valid date in the format <code>Y-m-d</code>.',
                    'nullable' => true,
                ],
                'priority' => [
                    'name' => 'priority',
                    'required' => false,
                    'type' => 'number',
                    'description' => 'Must be at least 1. Must not be greater than 3.',
                    'nullable' => true,
                ],
            ]);
    });
});
