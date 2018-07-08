<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hero;
use App\Image;
use Illuminate\Support\Facades\Storage;

class HeroController extends Controller
{
   function showAll() {
       $heroes = Hero::with('images')->select('id','nick_name')->paginate(5);
       setcookie('current_page_number', $heroes->currentPage());
       return view ('pages/show_all', ['heroes'=> $heroes]);
   }

   function showOne($id) {
        $hero = Hero::find($id);
        return view('pages/show_one', ['hero'=>$hero]);
   }

   function addNew() {
       return view('pages/add_new');
   }

   function save(Request $request) {
   
    $new_hero = new Hero();
    $new_hero->nick_name = htmlentities($request->nick_name, ENT_NOQUOTES, "UTF-8");
    $new_hero->real_name = htmlentities($request->real_name, ENT_NOQUOTES, "UTF-8");

    $new_hero->prehistory = isset($request->prehistory) ? htmlentities($request->prehistory, ENT_NOQUOTES, "UTF-8") : null;
    $new_hero->superpowers = isset($request->superpowers) ? htmlentities($request->superpowers, ENT_NOQUOTES, "UTF-8") : null;
    $new_hero->catch_phrase =isset($request->catch_phrase) ? htmlentities($request->catch_phrase, ENT_NOQUOTES, "UTF-8") : null;
    $new_hero->save();

    $id = Hero::all()->last()->id;
   
    $images = $request->images;
    if($images !== null) {
        foreach($images as $img) {
            $path = $img->store('heroes');
          
            $new_image = new Image();
            $new_image->hero_id = $id;
            $new_image->path = $path;
            $new_image->save();
        }
    }

    $heroes_count = Hero::count();
    
    if($heroes_count <5) {
        setcookie('current_page_number', 1);
    }
    else if($heroes_count % 5 !==0 ) {
        setcookie('current_page_number', intval($heroes_count/5 + 1));
    }
    else {
        setcookie('current_page_number', $heroes_count/5);
    }

    return redirect()->action('HeroController@heroAdded');
   }


   function heroAdded () {
       return view('pages/new_hero_added');
   }

   function heroChanged () {
        return view('pages/hero_changed');
    }

   function edit($id) {
      $hero = Hero::find($id);
      return view('pages/edit', ['hero'=>$hero]);
   }

   function update(Request $request, $id) {
       
        $hero = Hero::find($id);
        $hero->nick_name = htmlentities($request->nick_name, ENT_NOQUOTES, "UTF-8");
        $hero->real_name = htmlentities($request->real_name, ENT_NOQUOTES, "UTF-8");

        $hero->prehistory = isset($request->prehistory) ? htmlentities($request->prehistory, ENT_NOQUOTES, "UTF-8") : null;
        $hero->superpowers = isset($request->superpowers) ? htmlentities($request->superpowers, ENT_NOQUOTES, "UTF-8") : null;
        $hero->catch_phrase =isset($request->catch_phrase) ? htmlentities($request->catch_phrase, ENT_NOQUOTES, "UTF-8") : null;
        $hero->save();

        $images = $request->images;
        if($images !== null) {
            foreach($images as $img) {
                $path = $img->store('heroes');
            
                $new_image = new Image();
                $new_image->hero_id = $id;
                $new_image->path = $path;
                $new_image->save();
            }
        }

        $images_to_delete = explode(',' , $request->images_to_delete);
        
            foreach($images_to_delete as $img_id) {
                $to_delete = Image::find($img_id);
               if($to_delete !== null) {
                    Storage::delete($to_delete->path);
                    $to_delete->delete();
               }
            }
        
        return redirect()->action('HeroController@heroChanged');
   }

    


    function delete($id) {
        $hero_to_delete = Hero::find($id);
        foreach($hero_to_delete->images as $img) {
            Storage::delete($img->path);
        }
        $hero_to_delete->delete();
        if(isset($_COOKIE['current_page_number'])) {
            if( (Hero::all()->count() )/5 >= ($_COOKIE['current_page_number']-1) && (Hero::all()->count()) % 5 !==0) {
                return redirect(url('/?page='.$_COOKIE['current_page_number']));
            }
            else {
                return redirect(url('/?page='.($_COOKIE['current_page_number']-1)));
            }
        }
        return redirect()->action('HeroController@showAll');
    }
}
