<?php



namespace Tests;



use MyProject\TagParser;
use PHPUnit\Framework\TestCase;




class TagParserTest extends TestCase
{



    // Test case 1: check if the one given value converts
    public function test_it_parses_a_single_tag()
    {
        $parser = new TagParser();


        $result = $parser->parse('personal');
        $expected = ['personal'];


        $this->assertSame($expected, $result);
    }

    

    // Test case 2: check if multiple given values converts with a space inside a string
    public function test_it_parses_a_comma_separated_list_of_tags_with_one_space()
    {
        $parser = new TagParser();


        $result = $parser->parse('personal, money, family');
        $expected = ['personal', 'money', 'family'];


        $this->assertSame($expected, $result);
    }



    // Test case 3: check if multiple given values converts with no space inside the string
    public function test_it_parses_a_comma_separated_list_of_tags_with_no_space()
    {
        $parser = new TagParser();


        $result = $parser->parse('personal,money,family');
        $expected = ['personal', 'money', 'family'];


        $this->assertSame($expected, $result);
    }


    // Test case 3: check if multiple given values converts with no space inside the string
    public function test_it_parses_a_pipe_separated_list_of_tags_with_no_space()
    {
        $parser = new TagParser();


        $result = $parser->parse('personal | money | family');
        $expected = ['personal', 'money', 'family'];


        $this->assertSame($expected, $result);
    }

}