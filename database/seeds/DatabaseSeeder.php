<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('heroes')->insert([
            [
                'nick_name'=>"Hulk", 
                'real_name'=>"Bruce Banner", 
                'prehistory'=>"Hulk was born out of the concept of the Doctor Jekyll and Mr. Hyde complex. One side took the form of a brilliant scientist, Bruce Banner, while the other side took the form of a giant mean green fighting machine known as the Hulk. Banner was turned into Hulk after a laboratory experiment dabbling in gamma radiation. However, he can switch this persona off and on depending on how calm or angry he gets. The angrier he becomes, the stronger the Hulk gets and when his heart rate drops down to a calmer beat, he swiftly changes back into Bruce Banner. He managed to find peace in joining the Avengers to protect the world from any dangerous threats.",
                'superpowers'=>"superhumanly strong muscles, an incredible level of superhuman physical ability, regenerative abilities, brilliant intellect, adaptation to various environments",
                'catch_phrase'=>"Hulk smash!"
            ],
            [
                'nick_name'=>"Thor", 
                'real_name'=>"Thor Odinson", 
                'prehistory'=>"Based on the Norse god of thunder, Thor is a Marvel superhero and a founding member of the superhero team, the Avengers. Thor is from the planet Asgard where he lives with his family and his father, Odin. He and his enchanted hammer manipulate weather and defend Earth against the bad guys.",
                'superpowers'=>"inhuman strength, ability to fly, weather and electricity manipulation, can teleport across the nine realms(with the help of his new weapon Stormbreaker), extremely long-lived, immune to conventional disease , highly resistant to injury",
                'catch_phrase'=>"For Asgard!"
            ],
            [
                'nick_name'=>"Doctor Strange", 
                'real_name'=>"Doctor Stephen Vincent Strange", 
                'prehistory'=>"He was once a brilliant but egotistical surgeon. After a car accident severely damages his hands and hinders his ability to perform surgery, he searches the globe for a way to repair them and encounters the Ancient One. After becoming one of the old Sorcerer Supreme's students, he becomes a practitioner of both the mystical arts as well as martial arts. Along with knowing many powerful spells, he has a costume with two mystical objects—the Cloak of Levitation and Eye of Agamotto—which give him added powers. Strange is aided along the way by his friend and valet, Wong, and a large assortment of mystical objects. He takes up residence in a mansion called the Sanctum Sanctorum, located in New York City. Later, Strange takes the title of Sorcerer Supreme.",
                'superpowers'=>" energy projection and manipulation, matter transformation, animation of inanimate objects, teleportation, illusion-casting, mesmerism, thought projection, astral projection, dimensional travel, time travel and mental possession",
                'catch_phrase'=>"By the Hoary Hosts of Hoggoth!"
            ],
            [
                'nick_name'=>"Ant-man", 
                'real_name'=>"Scott Edward Harris Lang", 
                'prehistory'=>"A budding engineer and electronics specialist, Scott Lang was convicted of theft and spent some time in jail. Having freed himself, he decided to engage with the criminal past for the sake of his daughter Cassie, but because of the criminal record he could not find work and was forced to return to the theft. By the tip of friends, he invaded the house of the genius engineer Hank Pym, but found there only a scientist-designed Ant-Man suit that allows its owner to shrink in size.",
                'superpowers'=>"size manipulation, electronics specialist, hand-to-hand combat master, ants controlling",
                'catch_phrase'=>"Sorry I'm late, I was saving the world. You know how it is."
            ],
            [
                'nick_name'=>"Spider-man", 
                'real_name'=>"Peter Benjamin Parker", 
                'prehistory'=>"Bitten by a radioactive spider, high school student Peter Parker gained the speed, strength and powers of a spider. Adopting the name Spider-Man, Peter hoped to start a career using his new abilities. Taught that with great power comes great responsibility, Spidey has vowed to use his powers to help people.",
                'superpowers'=>"can cling to most surfaces, has superhuman strength (able to lift 10 tons optimally), super agility",
                'catch_phrase'=>"My spidey senses are tingling!"
            ],
            [
                'nick_name'=>"Captain America", 
                'real_name'=>"Steven \"Steve\" Rogers", 
                'prehistory'=>"Vowing to serve his country any way he could, young Steve Rogers took the super soldier serum to become America's one-man army. Fighting for the red, white and blue for over 60 years, Captain America is the living, breathing symbol of freedom and liberty. ",
                'superpowers'=>"agility, strength, speed, endurance, expert in military affairs, strategic thinking",
                'catch_phrase'=>"Avengers assemble!"
            ],
            [
                'nick_name'=>"Iron man", 
                'real_name'=>"Anthony Edward \"Tony\" Stark", 
                'prehistory'=>"Wounded, captured and forced to build a weapon by his enemies, billionaire industrialist Tony Stark instead created an advanced suit of armor to save his life and escape captivity. Now with a new outlook on life, Tony uses his money and intelligence to make the world a safer, better place as Iron Man.",
                'superpowers'=>"has a genius level intellect, keen business mind, cybernetic connection with an armored suit, ability to fly, great financial opportunities",
                'catch_phrase'=>"Put it on my tab!"
            ],
            [
                'nick_name'=>"Groot", 
                'real_name'=>"Groot", 
                'prehistory'=>"The tree-like creature known as Groot was captured by the Kree and put on a team with Star-Lord, Bug, Mantis, and Rocket Raccoon. A tree of few words, Groot formed a bond with the creature known as Rocket Raccoon. Forming the Guardians of the Galaxy, Groot and his best friend Rocket travel through space getting into trouble wherever they go.",
                'superpowers'=>"extremely powerful and resilient, ability to regeneration",
                'catch_phrase'=>"I am Groot!"
            ],
            
        ]);

        DB::table('images')->insert([
            [
                'hero_id'=> 1,
                'path' => 'heroes/hulk1.jpg'
            ],
            [
                'hero_id'=> 1,
                'path' => 'heroes/hulk2.jpg'
            ],
            [
                'hero_id'=> 1,
                'path' => 'heroes/hulk3.jpg'
            ],
            [
                'hero_id'=> 1,
                'path' => 'heroes/hulk4.jpg'
            ],
            [
                'hero_id'=> 1,
                'path' => 'heroes/hulk5.jpg'
            ],
            [
                'hero_id'=> 2,
                'path' => 'heroes/thor1.jpg'
            ],
            [
                'hero_id'=> 2,
                'path' => 'heroes/thor2.jpg'
            ],
            [
                'hero_id'=> 2,
                'path' => 'heroes/thor3.jpg'
            ],
            [
                'hero_id'=> 2,
                'path' => 'heroes/thor4.jpg'
            ],
            [
                'hero_id'=> 3,
                'path' => 'heroes/strange1.jpg'
            ],
            [
                'hero_id'=> 3,
                'path' => 'heroes/strange2.jpg'
            ],
            [
                'hero_id'=> 3,
                'path' => 'heroes/strange3.jpg'
            ],
            [
                'hero_id'=> 4,
                'path' => 'heroes/antman1.jpg'
            ],
            [
                'hero_id'=> 4,
                'path' => 'heroes/antman2.jpg'
            ],
            [
                'hero_id'=> 4,
                'path' => 'heroes/antman3.jpg'
            ],
            [
                'hero_id'=> 4,
                'path' => 'heroes/antman4.jpg'
            ],
            [
                'hero_id'=> 6,
                'path' => 'heroes/cap1.jpg'
            ],
            [
                'hero_id'=> 6,
                'path' => 'heroes/cap2.jpg'
            ],
            [
                'hero_id'=> 6,
                'path' => 'heroes/cap3.jpg'
            ],
            [
                'hero_id'=> 6,
                'path' => 'heroes/cap4.jpg'
            ],
            [
                'hero_id'=> 6,
                'path' => 'heroes/cap5.jpg'
            ],
            [
                'hero_id'=> 7,
                'path' => 'heroes/ironman1.jpg'
            ],
            [
                'hero_id'=> 7,
                'path' => 'heroes/ironman2.jpg'
            ],
            [
                'hero_id'=> 7,
                'path' => 'heroes/ironman3.jpg'
            ],
            [
                'hero_id'=> 8,
                'path' => 'heroes/groot1.jpg'
            ],
            [
                'hero_id'=> 8,
                'path' => 'heroes/groot2.jpg'
            ],
            [
                'hero_id'=> 8,
                'path' => 'heroes/groot3.jpg'
            ],
        ]);
    }
}
