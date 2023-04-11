<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MantapController extends Controller
{
    //
    public function index(){
        $product = [
            ['id'=>1,'nama'=>'Seraphine','status'=>'R','price'=>100],
            ['id'=>2,'nama'=>'Sett','status'=>'SR','price'=>200],
            ['id'=>3,'nama'=>'Kaisa','status'=>'SSR','price'=>150],
            ['id'=>4,'nama'=>'Ekko','status'=>'SR','price'=>75]
        ];
        return view('mantap', compact('product'));
    }

    public function show($id){
        $product = [
            ['id'=>'1','nama'=>'Seraphine','status'=>'R','price'=>100,'desc'=>'Born in Piltover Crest Piltover to Zaun Crest Zaunite parents, Seraphine can hear the souls of others—the world sings to her, and she sings back. Though these sounds overwhelmed her in her youth, she now draws on them for inspiration, turning the chaos into a symphony. She performs for the sister cities to remind their citizens that they’re not alone, that they’re stronger together, and that, in her eyes, their potential is limitless.'],
            ['id'=>'2','nama'=>'Sett','status'=>'SR','price'=>200,'desc'=>'A leader of Ionia Crest Ionia’s growing criminal underworld, Sett Sett rose to prominence in the wake of the war with Noxus Crest Noxus. Though he began as a humble challenger in the fighting pits of Navori, he quickly gained notoriety for his savage strength, and his ability to take seemingly endless amounts of punishment. After fighting his way through the ranks of local combatants, Sett muscled to the top, seizing control of the pits he once fought in.'],
            ['id'=>'3','nama'=>'Kaisa','status'=>'SSR','price'=>150,'desc'=>'Claimed by Void Crest the Void when she was only a child, KaiSa KaiSa managed to survive through sheer tenacity and strength of will. Her experiences have made her a deadly hunter and, to some, the harbinger of a future they would rather not live to see. Having entered into an uneasy symbiosis with a living Void carapace, the time will soon come when she must decide whether to forgive those mortals who would call her a monster, and defeat the coming darkness together... or simply to forget, as the Void consumes the world that left her behind.'],
            ['id'=>'4','nama'=>'Ekko','status'=>'SR','price'=>75,'desc'=>'A prodigy from the rough streets of Zaun, Ekko Ekko manipulates time time to twist any situation to his advantage. Using his own invention, the Z-Drive Z-Drive, he explores the branching possibilities of reality to craft the perfect moment. Though he revels in this freedom, when there’s a threat to his friends, he’ll do anything to defend them. To outsiders, Ekko seems to achieve the impossible the first time, every time.']
        ];
        $tmp = [];
        foreach ($product as $key) {
            if ($key['id']===$id) {
                $tmp =$key;
            }
        }
        return view('welcome', compact('tmp'));
    }
}
