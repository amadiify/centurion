<?php

use Moorexa\Structure as Schema;

class Navigation
{
    // connection identifier
    public $connectionIdentifier = '';


    // create table structure
    public function up(Schema $schema)
    {
        $schema->increment('navigationid');
        $schema->string('page_name');
        $schema->string('page_link');
        $schema->int('navigationtypeid');
        $schema->tinyint('visible')->default(true);
        $schema->int('position')->default(1);
        $schema->bigint('parentid')->default(0);
        $schema->string('keyword');
        $schema->text('description');
        $schema->string('page_title');
        $schema->string('breadcum_title');
        $schema->string('siteid');
    }

    // drop table
    public function down($drop, $record)
    {
        // $record carries table rows if exists.
        // execute drop table command
        $drop();
    }

    // options
    public function option($option)
    {
        $option->rename('navigation'); // rename table
        $option->engine('innoDB'); // set table engine
        $option->collation('utf8_general_ci'); // set collation
    }

    // promise during migration
    public function promise($status, $db)
    {
        if ($status == 'complete')
        {
            // do some cool stuffs.
            
        }
    }
}