<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Word;


class WordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

public function run()
{
    $words = [
        ['word' => 'aklat', 'meaning' => 'isang bagay na naglalaman ng mga salita, kwento, at kaalaman'],
        ['word' => 'alipin', 'meaning' => 'isang tao na naglilingkod nang walang kalayaan'],
        ['word' => 'bagwis', 'meaning' => 'mga pakpak na ginagamit sa paglipad'],
        ['word' => 'dalita', 'meaning' => 'matinding paghihirap o kahirapan'],
        ['word' => 'dalisay', 'meaning' => 'malinis at walang halo'],
        ['word' => 'dukha', 'meaning' => 'mahirap na tao'],
        ['word' => 'giliw', 'meaning' => 'taos-pusong pagmamahal'],
        ['word' => 'gunita', 'meaning' => 'alaala ng nakaraan'],
        ['word' => 'hiraya', 'meaning' => 'mga pangarap o imahinasyon'],
        ['word' => 'hilahil', 'meaning' => 'matinding kalungkutan o hinagpis'],
        ['word' => 'kalinga', 'meaning' => 'pag-aalaga o pangangalaga'],
        ['word' => 'kalinangan', 'meaning' => 'kaalaman at kaugalian ng isang lipunan'],
        ['word' => 'kaluwalhatian', 'meaning' => 'kadakilaan at kapurihan'],
        ['word' => 'katipunan', 'meaning' => 'isang samahan o grupo'],
        ['word' => 'lalim', 'meaning' => 'sukat ng distansiya mula sa ibabaw pababa'],
        ['word' => 'liwayway', 'meaning' => 'pagsikat ng araw sa umaga'],
        ['word' => 'malaya', 'meaning' => 'may kalayaan at hindi kontrolado ng iba'],
        ['word' => 'marilag', 'meaning' => 'maganda at kaakit-akit'],
        ['word' => 'mutya', 'meaning' => 'isang mahalagang bato o bagay'],
        ['word' => 'pahimakas', 'meaning' => 'huling paalam o pamamaalam'],
        ['word' => 'palasintahan', 'meaning' => 'kasintahan o iniibig'],
        ['word' => 'pamanhikan', 'meaning' => 'tradisyonal na pagsuyo o panliligaw'],
        ['word' => 'paninindigan', 'meaning' => 'mga prinsipyo o paniniwala'],
        ['word' => 'pantalan', 'meaning' => 'lugar kung saan dumadaong ang mga barko'],
        ['word' => 'paraiso', 'meaning' => 'isang lugar na napakaganda at kaaya-aya'],
        ['word' => 'pasintabi', 'meaning' => 'paghingi ng paumanhin bago magsalita'],
        ['word' => 'salamisim', 'meaning' => 'paggunita ng nakaraan'],
        ['word' => 'sambit', 'meaning' => 'mga salitang binibigkas o sinasabi'],
        ['word' => 'sanlibutan', 'meaning' => 'buong mundo o daigdig'],
        ['word' => 'santungan', 'meaning' => 'lugar na kanlungan o takbuhan'],
        ['word' => 'sigwa', 'meaning' => 'matinding bagyo o unos'],
        ['word' => 'silakbo', 'meaning' => 'biglang pagbugso ng damdamin'],
        ['word' => 'silong', 'meaning' => 'pook na pinagtataguan o pinagsisilungan'],
        ['word' => 'simoy', 'meaning' => 'banayad na hangin'],
        ['word' => 'sinta', 'meaning' => 'pag-ibig o pagmamahal'],
        ['word' => 'sulyap', 'meaning' => 'panandaliang tingin'],
        ['word' => 'taghoy', 'meaning' => 'daing o pag-iyak ng kalungkutan'],
        ['word' => 'tahimik', 'meaning' => 'walang ingay o katahimikan'],
        ['word' => 'talampas', 'meaning' => 'mataas at patag na lupa'],
        ['word' => 'talinhaga', 'meaning' => 'matalinghagang salita o pahayag'],
        ['word' => 'tangkilik', 'meaning' => 'suporta o pagtangkilik'],
        ['word' => 'tanyag', 'meaning' => 'kilala at sikat'],
        ['word' => 'tapat', 'meaning' => 'matapat at walang daya'],
        ['word' => 'tayog', 'meaning' => 'taas o taas na pag-abot'],
        ['word' => 'timpi', 'meaning' => 'pagpigil sa sarili'],
        ['word' => 'tuwa', 'meaning' => 'kasiyahan o galak'],
        ['word' => 'ulayaw', 'meaning' => 'malapit na kaibigan'],
        ['word' => 'walang-hanggan', 'meaning' => 'walang katapusan o hangganan'],
        ['word' => 'yapak', 'meaning' => 'mga bakas ng paa'],
        ['word' => 'yugto', 'meaning' => 'isang bahagi ng isang kwento o buhay'],
        ['word' => 'tagpo', 'meaning' => 'isang eksena o pangyayari'],
        ['word' => 'bighani', 'meaning' => 'pang-akit o karisma'],
        ['word' => 'balintataw', 'meaning' => 'pinakailalim ng mata'],
        ['word' => 'buklod', 'meaning' => 'ugnayan o pagkakaisa'],
        ['word' => 'damdamin', 'meaning' => 'emosyon o pakiramdam'],
        ['word' => 'dukha', 'meaning' => 'walang-wala sa buhay'],
        ['word' => 'ganda', 'meaning' => 'kagandahan'],
        ['word' => 'ginhawa', 'meaning' => 'kaginhawaan at kagaanan ng loob'],
        ['word' => 'hampas', 'meaning' => 'pagsuntok o pagbugbog'],
        ['word' => 'hikbi', 'meaning' => 'pag-iyak na may hikbi'],
        ['word' => 'huwad', 'meaning' => 'palsipikado o hindi tunay'],
        ['word' => 'kagalakan', 'meaning' => 'lubos na kasiyahan'],
        ['word' => 'kaharian', 'meaning' => 'isang bansa o teritoryo na pinamumunuan ng hari'],
        ['word' => 'kasaysayan', 'meaning' => 'pag-aaral ng mga pangyayari sa nakaraan'],
        ['word' => 'kasiguruhan', 'meaning' => 'pagkakaroon ng katiyakan'],
        ['word' => 'katiwasayan', 'meaning' => 'kapayapaan at kaayusan'],
        ['word' => 'kawanggawa', 'meaning' => 'paggawa ng mabuti sa kapwa'],
        ['word' => 'kislap', 'meaning' => 'ningning o kinang'],
        ['word' => 'ligaya', 'meaning' => 'kasayahan'],
        ['word' => 'lugod', 'meaning' => 'kaligayahan at kasiyahan'],
        ['word' => 'luwalhati', 'meaning' => 'dakilang kapurihan'],
        ['word' => 'magiting', 'meaning' => 'matapang at walang takot'],
        ['word' => 'malikha', 'meaning' => 'makapangyarihan at may kakayahan'],
        ['word' => 'manlilikha', 'meaning' => 'tagapaglikha o makata'],
        ['word' => 'martir', 'meaning' => 'taong nagdurusa para sa kanyang paniniwala'],
        ['word' => 'matikas', 'meaning' => 'makisig at matipuno'],
        ['word' => 'mayumi', 'meaning' => 'mahinhin at magalang'],
        ['word' => 'mutya', 'meaning' => 'mahahalagang bagay o alaala'],
        ['word' => 'pagkakataon', 'meaning' => 'oportunidad o pagkakataon'],
        ['word' => 'pagsikat', 'meaning' => 'paglabas ng araw'],
        ['word' => 'pangarap', 'meaning' => 'mga hangarin sa buhay'],
        ['word' => 'pighati', 'meaning' => 'matinding kalungkutan'],
        ['word' => 'pinagpala', 'meaning' => 'pinagpala at pinagkalooban ng biyaya'],
        ['word' => 'putok', 'meaning' => 'pagsabog ng isang bagay'],
        ['word' => 'saklolo', 'meaning' => 'pagtulong sa oras ng pangangailangan'],
        ['word' => 'samu’t-sari', 'meaning' => 'iba’t ibang klase'],

    ];

    foreach ($words as $word) {
        Word::create($word);
    }
}

}
