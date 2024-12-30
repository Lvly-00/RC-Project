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
            314   Naging limang buwan ako sa Krotona,
            nagpilit bumalik sa Reynong Albanya;
            'di sinong susumang sa akay ng sinta,
            kundi ang tinutungo'y lalo't isang Laura.
        </p>
    </div>
    <br>
    <div class="words">
        <p>
            315   Sa gayong katulin ng amin paglakad,
            naiinip ako't ang nasa'y lumipad;
            aba't nang matanaw ang muog ng s'yudad,
            kumutob sa aking puso'y lalong hirap!
        </p>
    </div>
    <br>
    <div class="words">
        <p>
            316   Kaya pala gayo'y ang nawawagayway
            sa kuta'y hindi na bandilang binyagan,
            kundi
            <span class="hoverable"
            data-word="Lubhang"
            data-audio="path/to/audio/mapanglaw.mp3"
            data-definition-tag="Labis o sobra."
            data-definition-eng="Excessive or too much."
            data-example="Lubhang mahirap ang sitwasyon."
            data-antonyms="kaunti, konti"
            data-synonyms="sobra, labis">Medialuna
            </span>'t reyno'y nasalakay
            ni Alading salot ng pasuking bayan.
        </p>
    </div>
    <br>
    <div class="words">
        <p>
            317   Ang akay kong hukbo'y kusang pinahimpil
            sa paa ng isang bundok na mabangin,
            'di kaginsa-ginsa'y natanawan namin,
            pulutong ng Morong lakad ay mahinhin.
        </p>
    </div>
    <br>
    <div class="words">
        <p>
            318   Isang binibini ang gapos na taglay
            na sa damdam nami'y tangkang pupugutan;
            ang puso ko'y lalong naipit ng lumbay
            sa gunitang baka si Laura kong buhay.
        </p>
    </div>
    <br>
    <div class="words">
        <p>
            319   Kaya 'di napigil ang akay ng loob
            at ang mga Moro'y bigla kong nilusob;
            palad nang tumakbo at hindi natapos
            sa aking pamuksang kalis na may poot!
        </p>
    </div>
    <br>
    <div class="words">
        <p>
            320   Nang wala na akong pagbuntuhang galit,
            sa 'di makakibong gapos ay lumapit;
            ang takip sa mukha'y nang aking ialis,
            aba ko't si Laura! May lalo pang sakit?
        </p>
    </div>
    <br>

    <div class="words">
        <p>
            321   Pupugutan dahil sa hindi pagtanggap
            sa
            <span class="hoverable"
            data-word="Lubhang"
            data-audio="path/to/audio/mapanglaw.mp3"
            data-definition-tag="Labis o sobra."
            data-definition-eng="Excessive or too much."
            data-example="Lubhang mahirap ang sitwasyon."
            data-antonyms="kaunti, konti"
            data-synonyms="sobra, labis">sintang mahalay
            </span> ng emir sa s'yudad;
            nang mag-asal-hayop ang Morong pangahas,
            tinampal sa mukha ang himalang dilag.
        </p>
    </div>
    <br>

    <div class="words">
        <p>
            322   Aking dali-daling
            <span class="hoverable"
            data-word="Lubhang"
            data-audio="path/to/audio/mapanglaw.mp3"
            data-definition-tag="Labis o sobra."
            data-definition-eng="Excessive or too much."
            data-example="Lubhang mahirap ang sitwasyon."
            data-antonyms="kaunti, konti"
            data-synonyms="sobra, labis">binalag
            </span> sa kamay
            ang lubid na walang awa at pitagan;
            ang daliri ko'y naaalang-alang
            marampi sa balat na kagalang-galang.
        </p>
    </div>
    <br>

    <div class="words">
        <p>
            323   Dito nakatanggap ng
            <span class="hoverable"
            data-word="Lubhang"
            data-audio="path/to/audio/mapanglaw.mp3"
            data-definition-tag="Labis o sobra."
            data-definition-eng="Excessive or too much."
            data-example="Lubhang mahirap ang sitwasyon."
            data-antonyms="kaunti, konti"
            data-synonyms="sobra, labis">luna
            </span> na titig
            ang nagdaralitang puso sa pag-ibig;
            araw ng ligayang una kong pagdinig
            ng sintang Florante sa kay Laurang bibig.
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
