<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CreatePosCategoryTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreatePosCategorySuccessfully()
    {
        $pos_category = factory(App\PosCategory::class)->make();
        $this->pos_category('/api/pos_category',[
        	'name'=>$pos_category->name
        ])
        ->seeApiSucess()
        ->seeJsonObject('pos_category')
        ->seeJsonKeyValueString('name',$pos_category->name);

        $this->seeInDatabase('pos_category',[
        		'name'=>$pos_category->name
        	]);
    }
}
