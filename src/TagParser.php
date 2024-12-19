<?php
namespace MyProject;

class TagParser
{
    // getting a string and convert it into the array
    public function parse(string $tags): array
    {
        // convert it to the array from the given pattern
        // look for comma and then space but the space is optional
        // whatever we want we give inside the []
        return preg_split('/ ?[,|] ?/', $tags);
        // return array_map(function ($tag){
        //     return trim($tag);
        // }, $tags);


        // return array_map(fn($tag) => trim($tag), $tags);
    }
}
