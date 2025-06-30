<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [

            [
                'title' => '9 Things I Love About Shaving My Head During Quarantine',
                'short_content' => 'Sit nemore imperdiet elaboraret eu, commune inciderint mei no. Ex usu ignota eripuit oportere. Vis at choro oratio, vitae quodsi ei sit. Mei ne habeo legimus qualisque.',
                'content' => 'text',
                'post_img' => 'default.jpg',
                'category_id' => 1,
                'author_id' => 1,
            ],
            [
                'title' => 'Why We Need to Stop Talking About Food and Guilt',
                'short_content' => 'Quo ex aeterno luptatum mnesarchum, an duis veri harum eam, mel ex diceret dolorum. Sed no causae dissentias, quo cu ridens gubergren voluptatibus.',
                'content' => '  <div class="excerpt mb-30">
                                    <p>Gosh jaguar ostrich quail one excited dear hello and bound and the and bland moral misheard roadrunner flapped lynx far that and jeepers giggled far and far bald that roadrunner python inside held shrewdly the manatee.</p>
                                </div>
                                <div class="entry-main-content wow fadeIn  animated" style="visibility: visible; animation-name: fadeIn;">
                                    <p>Fretful human far recklessly while caterpillar well a well blubbered added one a some far whispered rampantly whispered while irksome far clung irrespective wailed more rosily and where saluted while black dear so yikes as considering recast to some crass until.</p>
                                    <hr class="wp-block-separator is-style-dots">
                                    <p>Thanks sniffed in hello after in foolhardy and some far purposefully much one at the much conjointly leapt skimpily that quail sheep some goodness <a href="#">nightingale</a> the instead exited expedient up far ouch mellifluous altruistic and and lighted more instead much when ferret but the.</p>
                                    <figure class="wp-block-gallery columns-3 wp-block-image">
                                        <ul class="blocks-gallery-grid">
                                            <li class="blocks-gallery-item"><a href="#"><img class="border-radius-5" src="assets/imgs/news/thumb-2.jpg" alt=""></a></li>
                                            <li class="blocks-gallery-item"><a href="#"><img class="border-radius-5" src="assets/imgs/news/thumb-3.jpg" alt=""></a></li>
                                            <li class="blocks-gallery-item"><a href="#"><img class="border-radius-5" src="assets/imgs/news/thumb-4.jpg" alt=""></a></li>
                                        </ul>
                                        <figcaption> <i class="ti-credit-card mr-5"></i>Image credit: Behance </figcaption>
                                    </figure>
                                    <hr class="section-divider">
                                    <p>Yet more some certainly yet alas abandonedly whispered <a href="#">intriguingly</a><sup><a href="#">[2]</a></sup> well extensive one howled talkative admonishingly below a rethought overlaid dear gosh activated less <a href="#">however</a> hawk yet oh scratched ostrich some outside crud irrespective lightheartedly and much far amenably that the elephant since when.</p>
                                    <h2>The Guitar Legends</h2>
                                    <p>Furrowed this in the upset <a href="#">some across</a><sup><a href="#">[3]</a></sup> tiger oh loaded house gosh whispered <a href="#">faltering alas</a><sup><a href="#">[4]</a></sup> ouch cuckoo coward in scratched undid together bit fumblingly so besides salamander heron during the jeepers hello fitting jauntily much smoothly globefish darn blessedly far so along bluebird leopard and.</p>
                                    <blockquote>
                                        <p>Integer eu faucibus <a href="#">dolor</a><sup><a href="#">[5]</a></sup>. Ut venenatis tincidunt diam elementum imperdiet. Etiam accumsan semper nisl eu congue. Sed aliquam magna erat, ac eleifend lacus rhoncus in.</p>
                                    </blockquote>
                                    <p>Fretful human far recklessly while caterpillar well a well blubbered added one a some far whispered rampantly whispered while irksome far clung irrespective wailed more rosily and where saluted while black dear so yikes as considering recast to some crass until cow much less and rakishly overdrew consistent for by responsible oh one hypocritical less bastard hey oversaw zebra browbeat a well.</p>
                                    <h3>Getting Crypto Rich</h3>
                                    <hr class="wp-block-separator is-style-wide">
                                    <div class="wp-block-image">
                                        <figure class="alignleft is-resized">
                                            <img class="border-radius-5" src="assets/imgs/news/news-7.jpg">
                                            <figcaption> And far contrary smoked some contrary among stealthy </figcaption>
                                        </figure>
                                    </div>
                                    <p>And far contrary smoked some contrary among stealthy engagingly suspiciously a cockatoo far circa sank dully lewd slick cracked llama the much gecko yikes more squirrel sniffed this and the the much within uninhibited this abominable a blubbered overdid foresaw through alas the pessimistic.</p>
                                    <p>Gosh jaguar ostrich quail one excited dear hello and bound and the and bland moral misheard roadrunner flapped lynx far that and jeepers giggled far and far bald that roadrunner python inside held shrewdly the manatee.</p>
                                    <hr class="section-divider">
                                    <p>Thanks sniffed in hello after in foolhardy and some far purposefully much one at the much conjointly leapt skimpily that quail sheep some goodness nightingale the instead exited expedient up far ouch mellifluous altruistic and and lighted more instead much when ferret but the.</p>
                                    <!--Begin Subcrible-->
                                    <div class="border-radius-10 border bg-white mb-30 p-65 wow fadeIn animated text-center" style="visibility: hidden; animation-name: none;">
                                        <h4 class="mb-0 mt-0">Become a member</h4>
                                        <p class="font-md text-grey-400">Get the latest news right in your inbox. We never spam!</p>
                                        <form class="mt-30 d-flex wow fadeIn  animated" style="visibility: hidden; animation-name: none;">
                                            <input type="email" class="form-control mr-15" placeholder="Enter your email">
                                            <button type="submit" class="btn btn-lg bg-dark text-white d-inline-block">Subscribe</button>
                                        </form>
                                    </div>
                                    <!--End Subcrible-->
                                    <p>Yet more some certainly yet alas abandonedly whispered intriguingly well extensive one howled talkative admonishingly below a rethought overlaid dear gosh activated less however hawk yet oh scratched ostrich some outside crud irrespective lightheartedly and much far amenably that the elephant since when.</p>
                                </div>',
                'post_img' => 'default.jpg',
                'category_id' => 2,
                'author_id' => 1,
            ],
            [
                'title' => '30 Best Lifestyle Blogs to Follow in 2021',
                'short_content' => 'Tempus ultricies augue luctus et ut suscipit. Morbi arcu, ultrices purus dolor erat bibendum sapien metus. Sit mi, pharetra, morbi arcu id. Pellentesque dapibus nibh augue senectus.',
                'content' => 'text',
                'post_img' => 'default.jpg',
                'category_id' => 3,
                'author_id' => 2,
            ],
            [
                'title' => '31 Best Lifestyle Blogs to Follow in 2021',
                'short_content' => 'Tempus ultricies augue luctus et ut suscipit. Morbi arcu, ultrices purus dolor erat bibendum sapien metus. Sit mi, pharetra, morbi arcu id. Pellentesque dapibus nibh augue senectus.',
                'content' => 'text',
                'post_img' => 'default.jpg',
                'category_id' => 1,
                'author_id' => 2,
            ],

        ];
        
        foreach($posts as $post){
            DB::table('post')->insert([
                'title' => $post['title'],
                'short_content' => $post['short_content'],
                'content' => $post['content'],
                'post_img' => $post['post_img'],
                'category_id' => $post['category_id'],
                'author_id' => $post['author_id'],
            ]);
        }

        
    }
}
