<x-chapter-layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <div class="shrink-0 flex items-center">
        <a href="{{ route('chapters') }}">Back</a>
    </div>>
    {{-- FROM HERE MAG-EEDIT --}}
    {{-- JUST COPY & PASTE THE WHOLE CODE FOR TEMPLATE. --}}
    {{-- NO NEED NA GALAWIN ANG AUDIO FIILE --}}
    <h1 class="chapter">Kabanata 1</h1>
    <br>

    {{--<span class="hoverable"
                data-word="Lubhang"
                data-audio="path/to/audio/mapanglaw.mp3"
                data-definition-tag="Labis o sobra."
                data-definition-eng="Excessive or too much."
                data-example="Lubhang mahirap ang sitwasyon."
                data-antonyms="kaunti, konti"
                data-synonyms="sobra, labis">anaki</span>
    --}}

    <div class="words">
    </p>
        264   Sagot ni Florante: "Huwag ding maparis
        ang gererong bantog sa palad kong
        <span class="hoverable"
        data-word="amis"
        data-audio="path/to/audio/mapanglaw.mp3"
        data-definition-tag="malas o masama ang palad"
        data-definition-eng="ill-fated or unfortunate"
        data-example="Lubhang mahirap ang sitwasyon."
        data-antonyms="mapalad, maswerte"
        data-synonyms="malas, masaklap">amis
        </span>;
        at sa kaaway ma'y 'di ko ninanais
        ang laki ng dusang aking napagsapit."
    </p>
</div>
<br>
<div class="words">
    <p>
        265   Matanto ni ama ang gayong sakuna —
        sa Krotonang Baya'y may balang sumira,
        ako'y isinama't humarap na bigla
        sa Haring Linceong may gayak ng digma.
    </p>
</div>
<br>
<div class="words">
    <p>
        266   Kami ay bago pang nanakyat sa hagdan
        ng palasyong batbat ng hiyas at yaman
        ay sumalubong na ang haring marangal,
        niyakap si ama't ako'y kinamayan.
    </p>
</div>
<br>
<div class="words">
    <p>
        267   Ang wika'y "O Duke, ang kiyas na ito
        ang siyang kamukha ng bunying gerero;
        aking napangarap na sabi sa iyo,
        magiging haligi ng setro ko't reyno."
    </p>
</div>
<br>
<div class="words">
    <p>
        268   "Sino ito'y saan nanggaling na siyudad?"
        Ang sagot ni ama ay "Bugtong kong anak
        na inihahandog sa mahal mong yapak,
        ibilang sa isang
        <span class="hoverable"
        data-word="kiyas"
        data-audio="path/to/audio/mapanglaw.mp3"
        data-definition-tag="anyo o tindig ng katawan"
        data-definition-eng="posture or appearance"
        data-example="Lubhang mahirap ang sitwasyon."
        data-antonyms="kawalan ng porma, kawalang-ayos"
        data-synonyms="anyo, tindig">basalyo
        </span>'t alagad."
    </p>
</div>
<br>
<div class="words">
    <p>
        269   Namangha ang hari at niyakap ako.
        Mabuting panahon itong pagdating mo;
        ikaw ang heneral ng hukbong dadalo
        sa Bayang Krotonang kinubkob ng Moro.
    </p>
</div>
<br>
<div class="words">
    <p>
        270   Patotohanan mong hindi iba't ikaw
        ang napangarap kong gererong matapang
        na maglalathala sa
        <span class="hoverable"
        data-word="basalyo"
        data-audio="path/to/audio/mapanglaw.mp3"
        data-definition-tag="alagad o lingkod sa hari"
        data-definition-eng="vassal or servant to a monarch"
        data-example="Lubhang mahirap ang sitwasyon."
        data-antonyms="pinuno, hari"
        data-synonyms="alagad, lingkod">sansinukuban
        </span>
        ng kapurihan ko at kapangyarihan.
    </p>
</div>
<br>

<div class="words">
    <p>
        272   Sapagkat matuwid ang sa haring saysay,
        umayon si ama, kahit mapait man,
        na agad masubo sa pagpapatayan
        ang kabataan ko't 'di
        <span class="hoverable"
        data-word="sansinukuban"
        data-audio="path/to/audio/mapanglaw.mp3"
        data-definition-tag="buong mundo o sansinukob"
        data-definition-eng="the entire universe or world"
        data-example="Lubhang mahirap ang sitwasyon."
        data-antonyms="bahagi, pook"
        data-synonyms="mundo, daigdig">kabihasaan
        </span>.
    </p>
</div>
<br>

<div class="words">
    <p>
        273   Ako'y walang sagot na naipahayag
        kundi haring poo't nagdapa sa yakap;
        nang aking hahagkan ang mahal na bakas,
        kusang itinindig at muling niyakap.
    </p>
</div>
<br>

<div class="words">
    <p>
        274   Nag-upuan kami't saka nagpanayam
        ng bala-balaki't may halagang bagay,
        nang sasalitin ko ang pinagdaanan
        sa bayang Atenas na pinanggalingan.
    </p>
</div>
<br>







    {{-- TASS LANG EDITABLE --}}
    {{-- NO NEED NA GALAWIN. SA TAAS LANG ANG I-EDIT --}}
    <div id="sidebar" class="sidebar hidden">
        <button id="close-sidebar" class="close-button">&times;</button>

        <div id="sidebar-content" class="overflow-auto max-h-screen p-4">

            <li class="word">
                <div class="details">
                    <p id="word-name" style="display: inline;">__</p>
                    <span id="word-pronunciation" style="display: inline;">_ _</span>
                    <i class="fas fa-volume-up" id="play-audio-word" style="cursor: pointer; margin-left: 5px;"></i> <!-- Audio icon for the word -->
                    <audio id="audio-word" src="" controls hidden></audio>
                </div>
            </li>
            <div class="content">
                <li class="meaning">
                    <div class="details">
                        <p>Meaning (Tagalog)</p>
                        <span id="meaning-text">___</span>
                    </div>
                </li>
                <li class="meaning-eng">
                    <div class="details">
                        <p>Meaning (English)</p>
                        <span id="meaning-eng-text">___</span>
                    </div>
                </li>
                <li class="example">
                    <div class="details">
                        <p>Example</p>
                        <span id="example-text">___</span>
                    </div>
                </li>
                <li class="synonyms">
                    <div class="details">
                        <p>Synonyms</p>
                        <span id="synonyms-text">___</span>
                    </div>
                </li>
                <li class="antonyms">
                    <div class="details">
                        <p>Antonyms</p>
                        <span id="antonyms-text">___</span>
                    </div>
                </li>
            </div>
        </div>
    </div>

    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
        <a href="route('games.show', ['number'])">
            {{ __('Game') }}
        </a>
    </div>

    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>

</x-chapter-layout>
