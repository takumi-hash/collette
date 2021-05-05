<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'user_id' => 1,
            'title' => '吾輩は猫である',
            'body' => '吾輩わがはいは猫である。名前はまだ無い。どこで生れたかとんと見当けんとうがつかぬ。何でも薄暗いじめじめした所でニャーニャー泣いていた事だけは記憶している。吾輩はここで始めて人間というものを見た。しかもあとで聞くとそれは書生という人間中で一番獰悪どうあくな種族であったそうだ。この書生というのは時々我々を捕つかまえて煮にて食うという話である。しかしその当時は何という考もなかったから別段恐しいとも思わなかった。ただ彼の掌てのひらに載せられてスーと持ち上げられた時何だかフワフワした感じがあったばかりである。掌の上で少し落ちついて書生の顔を見たのがいわゆる人間というものの見始みはじめであろう。この時妙なものだと思った感じが今でも残っている。第一毛をもって装飾されべきはずの顔がつるつるしてまるで薬缶やかんだ。その後ご猫にもだいぶ逢あったがこんな片輪かたわには一度も出会でくわした事がない。のみならず顔の真中があまりに突起している。そうしてその穴の中から時々ぷうぷうと煙けむりを吹く。どうも咽むせぽくて実に弱った。これが人間の飲む煙草たばこというものである事はようやくこの頃知った。この書生の掌の裏うちでしばらくはよい心持に坐っておったが、しばらくすると非常な速力で運転し始めた。書生が動くのか自分だけが動くのか分らないが無暗むやみに眼が廻る。胸が悪くなる。到底とうてい助からないと思っていると、どさりと音がして眼から火が出た。それまでは記憶しているがあとは何の事やらいくら考え出そうとしても分らない。ふと気が付いて見ると書生はいない。たくさんおった兄弟が一疋ぴきも見えぬ。肝心かんじんの母親さえ姿を隠してしまった。その上今いままでの所とは違って無暗むやみに明るい。眼を明いていられぬくらいだ。はてな何でも容子ようすがおかしいと、のそのそ這はい出して見ると非常に痛い。吾輩は藁わらの上から急に笹原の中へ棄てられたのである。ようやくの思いで笹原を這い出すと向うに大きな池がある。吾輩は池の前に坐ってどうしたらよかろうと考えて見た。別にこれという分別ふんべつも出ない。しばらくして泣いたら書生がまた迎に来てくれるかと考え付いた。ニャー、ニャーと試みにやって見たが誰も来ない。そのうち池の上をさらさらと風が渡って日が暮れかかる。腹が非常に減って来た。泣きたくても声が出ない。仕方がない、何でもよいから食物くいもののある所まであるこうと決心をしてそろりそろりと池を左ひだりに廻り始めた。どうも非常に苦しい。そこを我慢して無理やりに這はって行くとようやくの事で何となく人間臭い所へ出た。ここへ這入はいったら、どうにかなると思って竹垣の崩くずれた穴から、とある邸内にもぐり込んだ。縁は不思議なもので、もしこの竹垣が破れていなかったなら、吾輩はついに路傍ろぼうに餓死がししたかも知れんのである。一樹の蔭とはよく云いったものだ。この垣根の穴は今日こんにちに至るまで吾輩が隣家となりの三毛を訪問する時の通路になっている。さて邸やしきへは忍び込んだもののこれから先どうして善いいか分らない。そのうちに暗くなる、腹は減る、寒さは寒し、雨が降って来るという始末でもう一刻の猶予ゆうよが出来なくなった。仕方がないからとにかく明るくて暖かそうな方へ方へとあるいて行く。今から考えるとその時はすでに家の内に這入っておったのだ。ここで吾輩は彼かの書生以外の人間を再び見るべき機会に遭遇そうぐうしたのである。第一に逢ったのがおさんである。これは前の書生より一層乱暴な方で吾輩を見るや否やいきなり頸筋くびすじをつかんで表へ抛ほうり出した。いやこれは駄目だと思ったから眼をねぶって運を天に任せていた。しかしひもじいのと寒いのにはどうしても我慢が出来ん。吾輩は再びおさんの隙すきを見て台所へ這はい上あがった。すると間もなくまた投げ出された。吾輩は投げ出されては這い上り、這い上っては投げ出され、何でも同じ事を四五遍繰り返したのを記憶している。その時におさんと云う者はつくづくいやになった。この間おさんの三馬さんまを偸ぬすんでこの返報をしてやってから、やっと胸の痞つかえが下りた。吾輩が最後につまみ出されようとしたときに、この家うちの主人が騒々しい何だといいながら出て来た。下女は吾輩をぶら下げて主人の方へ向けてこの宿やどなしの小猫がいくら出しても出しても御台所おだいどころへ上あがって来て困りますという。主人は鼻の下の黒い毛を撚ひねりながら吾輩の顔をしばらく眺ながめておったが、やがてそんなら内へ置いてやれといったまま奥へ這入はいってしまった。主人はあまり口を聞かぬ人と見えた。下女は口惜くやしそうに吾輩を台所へ抛ほうり出した。かくして吾輩はついにこの家うちを自分の住家すみかと極きめる事にしたのである。',
        ]);

        DB::table('posts')->insert([
            'user_id' => 1,
            'title' => '虞美人草',
            'body' => '「随分遠いね。元来がんらいどこから登るのだ」と一人ひとりが手巾ハンケチで額ひたいを拭きながら立ち留どまった。「どこか己おれにも判然せんがね。どこから登ったって、同じ事だ。山はあすこに見えているんだから」と顔も体躯からだも四角に出来上った男が無雑作むぞうさに答えた。反そりを打った中折れの茶の廂ひさしの下から、深き眉まゆを動かしながら、見上げる頭の上には、微茫かすかなる春の空の、底までも藍あいを漂わして、吹けば揺うごくかと怪しまるるほど柔らかき中に屹然きつぜんとして、どうする気かと云いわぬばかりに叡山えいざんが聳そびえている。「恐ろしい頑固がんこな山だなあ」と四角な胸を突き出して、ちょっと桜の杖つえに身を倚もたせていたが、「あんなに見えるんだから、訳わけはない」と今度は叡山えいざんを軽蔑けいべつしたような事を云う。「あんなに見えるって、見えるのは今朝けさ宿を立つ時から見えている。京都へ来て叡山が見えなくなっちゃ大変だ」「だから見えてるから、好いじゃないか。余計な事を云わずに歩行あるいていれば自然と山の上へ出るさ」　細長い男は返事もせずに、帽子を脱いで、胸のあたりを煽あおいでいる。日頃ひごろからなる廂ひさしに遮さえぎられて、菜の花を染め出す春の強き日を受けぬ広き額ひたいだけは目立って蒼白あおしろい。「おい、今から休息しちゃ大変だ、さあ早く行こう」　相手は汗ばんだ額を、思うまま春風に曝さらして、粘ねばり着いた黒髪の、逆さかに飛ばぬを恨うらむごとくに、手巾ハンケチを片手に握って、額とも云わず、顔とも云わず、頸窩ぼんのくぼの尽くるあたりまで、くちゃくちゃに掻かき廻した。促うながされた事には頓着とんじゃくする気色けしきもなく、「君はあの山を頑固がんこだと云ったね」と聞く。「うむ、動かばこそと云ったような按排あんばいじゃないか。こう云う風に」と四角な肩をいとど四角にして、空あいた方の手に栄螺さざえの親類をつくりながら、いささか我も動かばこその姿勢を見せる。「動かばこそと云うのは、動けるのに動かない時の事を云うのだろう」と細長い眼の角かどから斜ななめに相手を見下みおろした。',
        ]);

        DB::table('posts')->insert([
            'user_id' => 2,
            'title' => 'Steve Jobsのスピーチ',
            'body' => '今日、皆が世界最高の大学の1つを卒業する場に同席できて光栄に思う。私は大学を卒業したことがない。本当のところ、これは私にとって最も大学卒業に近い体験だ。今日は皆に私の人生から3つの話をしたい。それだけだ。大したことじゃない。3つだけだ。最初の話は点をつなぐことについて。私はリード大学を6ヶ月で中退したが、更に1年半ほど後に完全に辞めるまで、もぐりの学生として大学に顔を出していた。ではなぜ中退したのか。話は私が生まれる前に遡る。私の産みの母は若い未婚の大学院生で私を養子に出すと決めていた。生みの母は養父母は大学卒でなければととても強く思っていたので、私は生まれると同時に弁護士夫妻の養子になるよう万事整っていた。ところが、私が生まれるとその夫妻は女の子が欲しかったと言い出した。そこで待機者リストに載っていた私の両親は夜中に電話を受け、「望んでいなかった男の子が生まれました。この子を養子に欲しいですか？」と聞かれた。両親は「もちろんです」と答えた。産みの母はその後、私の母は大学を卒業していないし、私の父は高校を卒業していないことを知り、最終的な養子縁組の書類に署名することを拒んだ。何ヶ月かして私の両親が私を大学にやると約束した時点で産みの母はやっと態度を緩めた。そして17年後私は実際に大学に通った。しかし、私は無邪気にもスタンフォードとほとんど同じくらいお金のかかる大学を選び、労働者階級の両親の蓄えはすべて大学の授業料に使われていた。6ヵ月後私はそれに価値が見出せなかった。私は人生で何をしたいか見当も付かなかったし、大学がそれを見つけるのにどう役に立つかも分からなかった。そして、その時点で私は両親がそれまでに貯めたすべてのお金を食いつくしつつあった。そこで中退を決意し、万事問題ないと信じることにした。その時はとても不安だったが、振り返って見ればそれはこれまでにした最良の決断の1つだった。中退した瞬間から興味を持てない必須科目の授業に出るのを止め、面白そうなものに出席し始めることができた。夢のようなことばかりではなかった。寮に自分の部屋はないので友達の部屋の床で寝て、コークの瓶を何本も店に返して1本当たり5セントを受け取って食べ物を買い、クリシュナ教の寺院で1週間に1回のまともな食事をとるために毎週日曜日の夜、街を横断して7マイル歩くことも厭わなかった。そんな日々がたまらなく好きだった。そして、自分の興味と直感に従った結果出くわしたものの多くは、その後、お金に換えがたいものとなった。たとえばこうだ。当時のリード大学はたぶん、この国で最高の文字芸術(calligraphy)の授業を行っていた。キャンパス中のすべてのポスター、すべての引き出しのラベルが美しく手書きされていた。私は中退していて普通の授業を受ける必要はなかったので、文字芸術の授業を取ってその手法を学んだ。セリフとサンセリフの書体について、文字の組み合わせによって文字間のスペースを変えることについて、素晴らしい印刷物は何が素晴らしいのか、を学んだ。それは美しく、歴史的で、科学では捉えられない芸術的繊細さで、私には魅力的だった。',
        ]);
    }
}
