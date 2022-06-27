<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
//        User::truncate();
//        Post::truncate();
//        Category::truncate();

        Post::factory(3)->create();

//        // \App\Models\User::factory(10)->create();
//
//        // \App\Models\User::factory()->create([
//        //     'name' => 'Test User',
//        //     'email' => 'test@example.com',
//        // ]);
//
//        $user = User::factory()->create();
//
//        $work = Category::create([
//            'name'=>'Work',
//            'slug'=>'work'
//        ]);
//        $personal = Category::create([
//            'name'=>'Personal',
//            'slug'=>'personal'
//        ]);
//        $hobbies = Category::create([
//            'name'=>'Hobbies',
//            'slug'=>'hobbies'
//        ]);
//
//        Post::create([
//            'user_id'=>$user->id,
//            'category_id'=>$work->id,
//            'title'=>'Work Post',
//            'excerpt'=>'work-post',
//            'body'=>'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Solum praeterea formosum, solum liberum, solum civem, stultost; Quamquam in hac divisione rem ipsam prorsus probo, elegantiam desidero. <i>Tum mihi Piso: Quid ergo?</i> <b>Profectus in exilium Tubulus statim nec respondere ausus;</b> Aliud igitur esse censet gaudere, aliud non dolere. <a href="http://loripsum.net/" target="_blank">Si quicquam extra virtutem habeatur in bonis.</a> Duo Reges: constructio interrete. </p> <p>Quis est tam dissimile homini. <i>Sit sane ista voluptas.</i> Egone non intellego, quid sit don Graece, Latine voluptas? Nam quibus rebus efficiuntur voluptates, eae non sunt in potestate sapientis. </p> <p>Quis Pullum Numitorium Fregellanum, proditorem, quamquam rei publicae nostrae profuit, non odit? Quid, si reviviscant Platonis illi et deinceps qui eorum auditores fuerunt, et tecum ita loquantur? Istam voluptatem, inquit, Epicurus ignorat? Honesta oratio, Socratica, Platonis etiam. Et si in ipsa gubernatione neglegentia est navis eversa, maius est peccatum in auro quam in palea. Videmusne ut pueri ne verberibus quidem a contemplandis rebus perquirendisque deterreantur? Si alia sentit, inquam, alia loquitur, numquam intellegam quid sentiat; Erit enim instructus ad mortem contemnendam, ad exilium, ad ipsum etiam dolorem. </p>',
//        ]);
//        Post::create([
//            'user_id'=>$user->id,
//            'category_id'=>$personal->id,
//            'title'=>'Personal Post',
//            'excerpt'=>'personal-post',
//            'body'=>'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Solum praeterea formosum, solum liberum, solum civem, stultost; Quamquam in hac divisione rem ipsam prorsus probo, elegantiam desidero. <i>Tum mihi Piso: Quid ergo?</i> <b>Profectus in exilium Tubulus statim nec respondere ausus;</b> Aliud igitur esse censet gaudere, aliud non dolere. <a href="http://loripsum.net/" target="_blank">Si quicquam extra virtutem habeatur in bonis.</a> Duo Reges: constructio interrete. </p> <p>Quis est tam dissimile homini. <i>Sit sane ista voluptas.</i> Egone non intellego, quid sit don Graece, Latine voluptas? Nam quibus rebus efficiuntur voluptates, eae non sunt in potestate sapientis. </p> <p>Quis Pullum Numitorium Fregellanum, proditorem, quamquam rei publicae nostrae profuit, non odit? Quid, si reviviscant Platonis illi et deinceps qui eorum auditores fuerunt, et tecum ita loquantur? Istam voluptatem, inquit, Epicurus ignorat? Honesta oratio, Socratica, Platonis etiam. Et si in ipsa gubernatione neglegentia est navis eversa, maius est peccatum in auro quam in palea. Videmusne ut pueri ne verberibus quidem a contemplandis rebus perquirendisque deterreantur? Si alia sentit, inquam, alia loquitur, numquam intellegam quid sentiat; Erit enim instructus ad mortem contemnendam, ad exilium, ad ipsum etiam dolorem. </p>',
//        ]);
//        Post::create([
//            'user_id'=>$user->id,
//            'category_id'=>$hobbies->id,
//            'title'=>'Hobbies Post',
//            'excerpt'=>'hobbies-post',
//            'body'=>'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Solum praeterea formosum, solum liberum, solum civem, stultost; Quamquam in hac divisione rem ipsam prorsus probo, elegantiam desidero. <i>Tum mihi Piso: Quid ergo?</i> <b>Profectus in exilium Tubulus statim nec respondere ausus;</b> Aliud igitur esse censet gaudere, aliud non dolere. <a href="http://loripsum.net/" target="_blank">Si quicquam extra virtutem habeatur in bonis.</a> Duo Reges: constructio interrete. </p> <p>Quis est tam dissimile homini. <i>Sit sane ista voluptas.</i> Egone non intellego, quid sit don Graece, Latine voluptas? Nam quibus rebus efficiuntur voluptates, eae non sunt in potestate sapientis. </p> <p>Quis Pullum Numitorium Fregellanum, proditorem, quamquam rei publicae nostrae profuit, non odit? Quid, si reviviscant Platonis illi et deinceps qui eorum auditores fuerunt, et tecum ita loquantur? Istam voluptatem, inquit, Epicurus ignorat? Honesta oratio, Socratica, Platonis etiam. Et si in ipsa gubernatione neglegentia est navis eversa, maius est peccatum in auro quam in palea. Videmusne ut pueri ne verberibus quidem a contemplandis rebus perquirendisque deterreantur? Si alia sentit, inquam, alia loquitur, numquam intellegam quid sentiat; Erit enim instructus ad mortem contemnendam, ad exilium, ad ipsum etiam dolorem. </p>',
//        ]);
    }
}
