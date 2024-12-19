<?php



namespace Tests;



use MyProject\TagParser;
use PHPUnit\Framework\TestCase;




class TagParserTest extends TestCase
{



    // create the instance over here because we need to do every time in each methods
    protected TagParser $parser;
    protected function setUp(): void
    {
        $this->parser = new TagParser();
    }



    public function test_it_parses_a_single_tag()
    {
        $result = $this->parser->parse('personal');
        $expected = ['personal'];


        $this->assertSame($expected, $result);
    }

    

    public function test_it_parses_a_comma_separated_list_of_tags_with_one_space()
    {
        $result = $this->parser->parse('personal, money, family');
        $expected = ['personal', 'money', 'family'];


        $this->assertSame($expected, $result);
    }



    public function test_it_parses_a_comma_separated_list_of_tags_with_no_space()
    {
        $result = $this->parser->parse('personal,money,family');
        $expected = ['personal', 'money', 'family'];


        $this->assertSame($expected, $result);
    }


    public function test_it_parses_a_pipe_separated_list_of_tags_with_no_space()
    {
        $result = $this->parser->parse('personal | money | family');
        $expected = ['personal', 'money', 'family'];


        $this->assertSame($expected, $result);
    }

}