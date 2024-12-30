<x-chapter-layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <div class="shrink-0 flex items-center">
        <a href="{{ route('chapters') }}">Back</a>
    </div>s
    {{-- <div class="shrink-0 flex items-center">
        <a href="{{ route('chapters') }}">
            <x-back-button class="block h-9 w-auto fill-current text-gray-800" />
        </a>
    </div> --}}
    {{-- FROM HERE MAG-EEDIT --}}
    {{-- JUST COPY & PASTE THE WHOLE CODE FOR TEMPLATE. --}}
    {{-- NO NEED NA GALAWIN ANG AUDIO FIILE --}}
    <h1 class="chapter">Kabanata 3 Alaala ni Laura</h1>
    <br>

    <div class="words">
        <p>25 "Ay, 'di saan ngayon ako mangangapit!
            saan ipupukol ang tinangis-tangis,
            kung ayaw na ngayong dinigin ng Langit,
            ang sigaw ng aking malumbay na boses!"
            <span class="hoverable"
                data-word=""
                data-audio="path/to/audio/mapanglaw.mp3"
                data-definition-tag=""
                data-definition-eng=""
                data-example=""
                data-antonyms=""
                data-synonyms=""> </span> </p>
    </div>
    <br>


    <div class="words">
        <p>26 "Kung siya mong ibig na ako'y magdusa,
            Langit na mataas, aking mababata;
            isagi mo lamang sa puso ni Laura
            ako'y minsan-minsang mapag-alaala."
            <span class="hoverable"
                data-word=""
                data-audio="path/to/audio/mapanglaw.mp3"
                data-definition-tag=""
                data-definition-eng=""
                data-example=""
                data-antonyms=""
                data-synonyms=""> </span> </p>
    </div>
    <br>

    <div class="words">
        <p>27 "At dito sa laot ng dusa't hinagpis,
            malawak na lubhang aking tinatawid;
            gunita ni Laura sa naabang ibig,
            siya ko na lamang ligaya sa dibdib."
            <span class="hoverable"
                data-word=""
                data-audio="path/to/audio/mapanglaw.mp3"
                data-definition-tag=""
                data-definition-eng=""
                data-example=""
                data-antonyms=""
                data-synonyms=""> </span> </p>
    </div>
    <br>

    <div class="words">
        <p> 28 "Munting gunam-gunam ng sinta ko't mutya
            nang dahil sa aki'y dakila kong tuwa;
            higit sa malaking hirap at dalita,
            parusa ng taong lilo't walang awa."
            <span class="hoverable"
                data-word=""
                data-audio="path/to/audio/mapanglaw.mp3"
                data-definition-tag=""
                data-definition-eng=""
                data-example=""
                data-antonyms=""
                data-synonyms=""> </span> </p>
    </div>
    <br>

    <div class="words">
        <p>29 "Sa pagkagapos ko'y guni-gunihin,
            malamig nang bangkay akong nahihimbing;
            at tinatangisan ng sula ko't giliw,
            ang pagkabuhay ko'y walang hangga mandin."
            <span class="hoverable"
                data-word=""
                data-audio="path/to/audio/mapanglaw.mp3"
                data-definition-tag=""
                data-definition-eng=""
                data-example=""
                data-antonyms=""
                data-synonyms=""> </span> </p>
    </div>
    <br>

    <div class="words">
        <p>30 "Kung apuhapin ko sa sariling isip,
            ang suyuan naman ng pili kong ibig;
            ang pagluha niya kung ako'y may hapis,
            nagiging ligaya yaring madlang sakit."
            <span class="hoverable"
                data-word=""
                data-audio="path/to/audio/mapanglaw.mp3"
                data-definition-tag=""
                data-definition-eng=""
                data-example=""
                data-antonyms=""
                data-synonyms=""> </span> </p>
    </div>
    <br>

    <div class="words">
        <p>31 "Nguni, sa aba ko! sawing kapalaran!
            ano pang halaga ng gayong suyuan
            kung ang sing-ibig ko'y sa katahimikan
            ay humihilig na sa ibang kandungan?"
            <span class="hoverable"
                data-word=""
                data-audio="path/to/audio/mapanglaw.mp3"
                data-definition-tag=""
                data-definition-eng=""
                data-example=""
                data-antonyms=""
                data-synonyms=""> </span> </p>
    </div>
    <br>

    <div class="words">
        <p>32 "Sa sinapupunan ng Konde Adolfo,
            aking natatanaw si Laurang sinta ko;
            kamataya'y nahan ang dating bangis mo,
            nang 'di ko damdamin ang hirap na ito?"
            <span class="hoverable"
                data-word=""
                data-audio="path/to/audio/mapanglaw.mp3"
                data-definition-tag=""
                data-definition-eng=""
                data-example=""
                data-antonyms=""
                data-synonyms=""> </span> </p>
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

    {{-- <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
        <x-nav-link :href="route('games.show', ['number'])">
            {{ __('Game') }}
        </x-nav-link>
    </div> --}}

    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>

</x-chapter-layout>
