<x-chapter-layout>

    {{-- FROM HERE MAG-EEDIT --}}
    {{-- JUST COPY & PASTE THE WHOLE CODE FOR TEMPLATE. --}}
    {{-- NO NEED NA GALAWIN ANG AUDIO FIILE --}}
    <h1 class="chapter">Kabanata 1: Ang Gubat</h1>
    <br>

    <div class="words">
        {{-- <p>
            <img src="https://www.tagaloglang.com/ux/wp-content/uploads/2024/01/florante-laura-english-translation-gubat-mapanglaw-poem.jpeg"
                class="float-left" height="20%" width="20%" alt="Florante at Laura" />
        </p> --}}
        <p>1 Sa isang madilim, gubat na
            <span class="hoverable" data-word="Mapanglaw" data-audio="path/to/audio/mapanglaw.mp3"
                data-definition-tag="Malungkot o nakakapagbigay ng lungkot."
                data-definition-eng="Sad or causing sadness." data-example="Ang kanyang mukha ay mapanglaw."
                data-synonyms="Malumbay, madamdamin." data-antonyms="Masaya, masigla.">mapanglaw</span>,
            dawag na matinik ay walang pagitan,
            halos naghihirap ang kay Pebong silang
            dumalaw sa loob na
            <span class="hoverable" data-word="Lubhang" data-audio="path/to/audio/mapanglaw.mp3"
                data-definition-tag="Labis o sobra." data-definition-eng="Excessive or too much."
                data-example="Lubhang mahirap ang sitwasyon." data-antonyms="kaunti, konti"
                data-synonyms="sobra, labis">lubhang</span> masukal.
        </p>
    </div>
    <br>

    <div class="words">
        <p>2 Malalaking kahoy ang inihahandog,
            pawang
            <span class="hoverable" data-word="Dalamhati" data-audio="path/to/audio/mapanglaw.mp3"
                data-definition-tag="Malungkot na pakiramdam o kalungkutan." data-definition-eng=" Grief, sorrow."
                data-example="" data-antonyms=" Kagalakan, kasiyahan"
                data-synonyms=" Kalungkutan, pagdadalamhati.">dalamhati</span>,
            <span class="hoverable" data-word="Kahapis" data-audio="path/to/audio/mapanglaw.mp3"
                data-definition-tag="Malungkot at masakit na karanasan." data-definition-eng="Despair, sadness."
                data-example="Ang kanyang kahapis ay dulot ng pagkawala ng mahal sa buhay."
                data-antonyms="Kaligayahan, kasiglahan." data-synonyms="Pagluha, lungkot.">kahapis</span>a't lungkot;
            huni pa ng ibon ay
            <span class="hoverable" data-word="Nakalulunos" data-audio="path/to/audio/mapanglaw.mp3"
                data-definition-tag="Nakakalungkot o nakapagpapasakit ng puso."
                data-definition-eng="Heart-rending, distressing."
                data-example="Nakalulunos ang kalagayan ng mga batang apektado ng bagyo."
                data-antonyms="Nakakatawa, nakakaaliw." data-synonyms="Nakakalungkot, nakakaawa.">nakalulunos</span> sa
            lalong matimpi't nagsasayang loob.
        </p>
    </div>
    <br>

    <div class="words">
        <p>3 Tanang mga
            <span class="hoverable" data-word="Baging" data-audio="path/to/audio/mapanglaw.mp3"
                data-definition-tag="Uri ng halamang dumadagan at tumataas." data-definition-eng="Vine, creeping plant."
                data-example="" data-antonyms="Punong matikas, tangkay na tuwid."
                data-synonyms="Halaman, puno.">baging</span> na namimilipit
            sa sanga ng kahoy ay balot ng tinik;
            may bulo ang bunga't nagbibigay-sakit
            sa kanino pa mang sumagi't malapit.
        </p>
    </div>
    <br>

    <div class="words">
        <p> 4 Ang mga bulaklak ng nagtayong kahoy,
            pinakapamuting nag-ungos sa dahon;
            pawang kulay-luksa at nakikiayon
            sa nakaliliyong masangsang na amoy.</p>
    </div>
    </br>

    <div class="words">
        <p> 5 Karamiha'y Sipres at Higerang
            <span class="hoverable" data-word="Kutad" data-audio="path/to/audio/mapanglaw.mp3"
                data-definition-tag="Matigas at matalim." data-definition-eng="Hard, sharp." data-example=""
                data-antonyms="Malambot, mapurol." data-synonyms="Matigas, matalim.">kutad</span> na ang lihim niyon ay
            nakakasindak;
            ito'y walang bunga't daho'y malalapad
            na nakadidilim sa loob ng gubat.
        </p>
    </div>
    <br>

    <div class="words">
        <p> 6 Ang mga hayop pang dito'y gumagala,
            karamiha'y S'yerpe't Basilisko'y madla
            Hayena't Tigreng
            <span class="hoverable" data-word="Ganid" data-audio="path/to/audio/mapanglaw.mp3"
                data-definition-tag="Matakaw at walang kabusugan." data-definition-eng="Greedy, gluttonous."
                data-example="" data-antonyms="Mapagbigay, bukas-palad." data-synonyms="Matakaw, sakim.">ganid</span> na
            nagsisila
            ng buhay ng tao't daiging kapuwa.
        </p>
    </div>
    <br>

    <div class="words">
        <p>7 Ito'y gubat manding sa pinto'y malapit
            ng
            <span class="hoverable" data-word="Reyno" data-audio="path/to/audio/mapanglaw.mp3"
                data-definition-tag=" Kaharian o teritoryo ng isang hari." data-definition-eng="Kingdom."
                data-example="s" data-antonyms=" Republika, estado." data-synonyms="Kaharian, pamahalaan.">reyno</span>
            ni Plutong masungit;
            ang nasasakupang lupa'y dinidilig
            ng Ilog Kositong kamandag ang tubig.
        </p>
    </div>
    <br>
    <hr>
    <h3>Comments</h3>
    <ul>
        @if ($comments->isEmpty())
            <p>No comments yet. Be the first to comment!</p>
        @else
            @foreach ($comments as $comment)
                <li>
                    <strong>{{ $comment->user->name }}</strong>: {{ $comment->comment }}
                    <em>({{ $comment->created_at->diffForHumans() }})</em>
                </li>
            @endforeach
        @endif
    </ul>
    <form action="{{ route('comments.store') }}" method="POST">
        @csrf
        <input type="hidden" name="chapter_number" value="{{ $number }}">
        <div class="comment-container">
            <textarea name="comment" id="comment" rows="2" required placeholder="comment as {{ Auth::user()->name }}"></textarea>
            <button type="submit" class="send-icon">
                submit
            </button>
        </div>
    </form>




</x-chapter-layout>
