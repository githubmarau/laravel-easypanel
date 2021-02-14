<?php

namespace EasyPanel\Commands\Actions;

class MakeSingle extends CommandBase
{
    protected $name = 'panel:single';
    protected $file = 'single';
    protected $type = 'Single Component';
    protected $description = 'Make a single component to delete action in CRUD';
    protected $path;

}
