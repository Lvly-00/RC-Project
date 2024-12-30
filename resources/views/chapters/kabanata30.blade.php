<x-chapter-layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <div class="shrink-0 flex items-center">
        <a href="{{ route('chapters') }}">Back</a>
    </div>
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
            393   Di pa napapatid itong pangungusap,
            si Menandro'y siyang pagdating sa gubat;
            dala'y
            <span class="hoverable"
            data-word="Lubhang"
            data-audio="path/to/audio/mapanglaw.mp3"
            data-definition-tag="Labis o sobra."
            data-definition-eng="Excessive or too much."
            data-example="Lubhang mahirap ang sitwasyon."
            data-antonyms="kaunti, konti"
            data-synonyms="sobra, labis">ehersito
            </span>'t si Adolfo'y hanap,
            nakita'y katoto ... laking tuwa't galak!
        </p>
    </div>
    <br>
    <div class="words">
        <p>
            394   Yaong ehersitong mula sa Etolya,
            ang unang nawika sa gayong ligaya:
            "Biba si Floranteng Hari sa Albanya!
            Mabuhay, mabuhay ang Prinsesa Laura!"
        </p>
    </div>
    <br>
    <div class="words">
        <p>
            395   Dinala sa reynong ipinagdiriwang
            sampu ni Aladi't ni Fleridang hirang,
            kapuwa tumanggap na mangabinyagan;
            magkakasing sinta'y naraos na kasal.
        </p>
    </div>
    <br>
    <div class="words">
        <p>
            396   Namatay ang
            <span class="hoverable"
            data-word="Lubhang"
            data-audio="path/to/audio/mapanglaw.mp3"
            data-definition-tag="Labis o sobra."
            data-definition-eng="Excessive or too much."
            data-example="Lubhang mahirap ang sitwasyon."
            data-antonyms="kaunti, konti"
            data-synonyms="sobra, labis">bunying
            </span> Sultan Ali-Adab,
            nuwi si Aladin sa Persiyang Siyudad;
            ang Duke Florante sa trono'y naakyat,
            sa piling ni Laurang minumutyang liyag.
        </p>
    </div>
    <br>
    <div class="words">
        <p>
            397   Sa pamamahala nitong bagong hari,
            sa kapayapaan ang reyno'y nauwi;
            rito nakabangon ang
            <span class="hoverable"
            data-word="Lubhang"
            data-audio="path/to/audio/mapanglaw.mp3"
            data-definition-tag="Labis o sobra."
            data-definition-eng="Excessive or too much."
            data-example="Lubhang mahirap ang sitwasyon."
            data-antonyms="kaunti, konti"
            data-synonyms="sobra, labis">nalulugami
            </span>
            at napasatuwa ang nagpipighati.
        </p>
    </div>
    <div class="words">
        <p>
            398   Kaya nga't nagtaas ang kamay sa langit,
            sa pasasalamat ng bayang tangkilik;
            ang hari't ang reyna'y walang iniisip
            kundi ang magsabog ng awa sa kabig.
        </p>
    </div>
    <br>
    <div class="words">
        <p>
            399   Nagsasama silang lubhang mahinusay
            hanggang sa nasapit ang payapang bayan;
            tigil aking Musa't kusa kung lumagay
            sa yapak ni Selya't dalhin yaring ay, ay!

            (Wakas ng Awit)
        </p>
    </div>





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
