<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Hero;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

class HeroTest extends TestCase
{
    use DatabaseTransactions;
    

    public function test_new_hero_insert() 
    {
        $new_hero = factory(Hero::class)->create();

        $last_hero_in_db = Hero::latest()->get();

        $this->assertEquals($new_hero->toArray(), $last_hero_in_db[0]->toArray() );
    }

    public function test_new_image_insert_by_hero_id() 
    {
        $new_hero_id = factory(Hero::class)->create()->id;

        $new_image = factory(Image::class)->create(['hero_id'=> $new_hero_id]);

        $last_images_in_db = Image::latest()->get();

        $this->assertEquals($new_image->toArray(), $last_images_in_db[0]->toArray() );
        $this->assertEquals($new_hero_id, $last_images_in_db[0]->hero_id );
    }



    public function test_save_method() 
    {
            $request = Request::create('save', 'POST', ['nick_name'=>'test1', 'real_name'=>'test2', 'prehistory'=>'test3', 'superpowers'=>'test4', 'catch_phrase'=>'test5']);
            Storage::fake('heroes');
            $request->files->set('images', array(UploadedFile::fake()->image('test.jpg')));
            $files_count_before_new_hero_adding = Image::count();
           
            $response = $this->call('POST', 'save', array_merge($request->all(), $request->images));
            $last_hero_in_db = Hero::all()->last();
            $last_images_in_db = Image::all()->last();
            $files_count_after_new_hero_adding = Image::count();
        
            $this->assertEquals('test1', $last_hero_in_db->nick_name );
            $this->assertEquals('test2', $last_hero_in_db->real_name );
            $this->assertEquals('test3', $last_hero_in_db->prehistory );
            $this->assertEquals('test4', $last_hero_in_db->superpowers );
            $this->assertEquals('test5', $last_hero_in_db->catch_phrase );
            $this->assertEquals($last_hero_in_db->id, $last_images_in_db->hero_id );
            $this->assertEquals(($files_count_before_new_hero_adding + 1),  $files_count_after_new_hero_adding);
    
    }


    public function test_delete_method() 
    {
        $new_hero_id = factory(Hero::class)->create()->id;
        $new_image = factory(Image::class)->create(['hero_id'=> $new_hero_id]);
        $files_count_before_delete = Image::count();

        $response = $this->call('DELETE', 'hero/'.$new_hero_id.'/delete');
        $files_count_after_delete = Image::count();
        $this->assertDatabaseMissing('heroes', ['id'=> $new_hero_id]);
        $this->assertEquals( $files_count_before_delete ,  ($files_count_after_delete+1) );
    }


    public function test_update_method ()
    {
        $hero_id = factory(Hero::class)->create()->id;
        $response = $this->call('PUT', 'hero/'.$hero_id.'/update', ['real_name' => 'Petro']);
        $updated_hero = Hero::find($hero_id);
        $this->assertEquals( $updated_hero->real_name ,  'Petro' );
    }
}
