<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EnvironmentTes extends TestCase
{

    public function TestGet(){
        $youtube = env('YOUTUBE');

        self::assertEquals('Rafsan Zaini anwar', $youtube);
    }
}
