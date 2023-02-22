<?php

namespace App;

class Developer extends Worker
{
    use HasRest;

    public string $position = "middle developer";

    public function work()
    {
        print_r("\n I'M A DEVELOPER!!!!! \n");
    }

    public function chiller()
    {
        // TODO;
    }
}