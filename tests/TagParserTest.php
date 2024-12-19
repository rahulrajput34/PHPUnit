<?php


namespace Tests;


use App\TagParser;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;



class TagParserTest extends TestCase
{


    //This how we can give the data provider over here to test all methods in easy-way or short-way
    #[DataProvider('tagsProvider')]
    public function test_it_parses_tags($input, $expected)
    {

        // Make instance again and remove the setup method because we want this instance only once
        $parser = new TagParser();
        $result = $parser->parse($input);
        $this->assertSame($expected, $result);
    }




    // This where we pass the input, expected output
    public static function tagsProvider(): array
    {
        return [
            ['personal', ['personal']],
            ['personal, money, family', ['personal', 'money', 'family']],
            ['personal,money,family', ['personal', 'money', 'family']],
            ['personal | money | family', ['personal', 'money', 'family']],
            ['personal ! money ! family', ['personal', 'money', 'family']],
        ];
    }
}
