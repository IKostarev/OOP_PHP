<?php

namespace App;

class Developer extends Worker
{
    public string $position = "middle developer";

    public function work()
    {
        print_r("\n I'M A DEVELOPER!!!!! \n");
    }
}