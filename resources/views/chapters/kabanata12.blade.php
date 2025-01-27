<x-chapter-layout>

    <h1 class="chapter">Kabanata 12: Batas ng Lahat ng Relihiyon</h1>
    <br>

    <div class="words">
        <p>146 Nang muling mamulat ay <span class="hoverable"
                data-word="nagitlahanan"
                data-audio="path/to/audio/mapanglaw.mp3"
                data-definition-tag="Magulat"
                data-definition-eng="to be startled"
                data-example="Nagitlahanan siya nang makita ang biglang pagdating ng bisita."
                data-antonyms="hindi nagulat, walang reaksyon"
                data-synonyms="magulat, matigilan">nagitlahanan</span>,
            Sino? Sa aba ko't nasa Morong kamay!
            ibig na iigtad ang lunong katawan,
            nang hindi mangyari'y nagngalit na lamang.
        </p>
    </div>

    <div class="words">
        <p>147 Sagot ng gerero'y Huwag kang manganib,
            <span class="hoverable"
                data-word="sumapayapa"
                data-audio="path/to/audio/mapanglaw.mp3"
                data-definition-tag="Humupa"
                data-definition-eng="to calm down"
                data-example="Sumapayapa ang kanyang loob matapos ang pag-uusap."
                data-antonyms="magalit, magtangkilik"
                data-synonyms="magpakalma, humupa">sumapayapa</span> ka't mag-aliw ng dibdib;
            ngayo'y ligtas ka na sa lahat ng sakit,
            may kalong sa iyo ang nagtatangkilik.
        </p>
    </div>

    <div class="words">
        <p>148 Kung <span class="hoverable"
                data-word="nasusuklam"
                data-audio="path/to/audio/mapanglaw.mp3"
                data-definition-tag="Manghamak"
                data-definition-eng="to despise"
                data-example="Nasusuklam siya sa mga taong hindi marunong magpahalaga."
                data-antonyms="mahalin, magustuhan"
                data-synonyms="magalit, manghamak">nasusuklam</span> ka sa aking kandungan
            lason sa puso mo ang hindi binyagan;
            nakukutya akong 'di ka saklolohan
            sa iyong nasapit na napakarawal.
        </p>
    </div>

    <div class="words">
        <p>149 <span class="hoverable"
                data-word="ipinahayag"
                data-audio="path/to/audio/mapanglaw.mp3"
                data-definition-tag="Isiulat"
                data-definition-eng="to declare"
                data-example="Ipinahayag ng presidente ang bagong batas."
                data-antonyms="itago, isikreto"
                data-synonyms="ipaalam, isiwalat">Ipinahayag</span> ng pananamit mo,
            taga-Albanya ka at ako'y Persiyano;
            ikaw ay kaaway ng baya't sekta ko,
            sa lagay mo ngayo'y magkatoto tayo.
        </p>
    </div>

    <div class="words">
        <p>150 Moro ako'y lubos na taong may dibdib
            at <span class="hoverable"
                data-word="nasasaklaw"
                data-audio="path/to/audio/mapanglaw.mp3"
                data-definition-tag="Nasasakupan"
                data-definition-eng="covered by"
                data-example="Nasasaklaw ng kanyang responsibilidad ang buong departamento."
                data-antonyms="wala sa saklaw, hindi kasama"
                data-synonyms="saklaw, nasasakupan">nasasaklaw</span> rin ng utos ng Langit;
            dini sa puso ko'y kusang natititik
            natural na ley-ing sa aba'y mahapis.
        </p>
    </div>

    <div class="words">
        <p>151 Anong gagawin ko'y aking napakinggan
            ang iyong pagtaghoy na kalumbay-lumbay,
            gapos na nakita't <span class="hoverable"
                data-word="pamumutiwanan"
                data-audio="path/to/audio/mapanglaw.mp3"
                data-definition-tag="Mamutla"
                data-definition-eng="to turn pale"
                data-example="Pamumutiwanan ang kanyang mukha sa takot."
                data-antonyms="mamula, magkulay"
                data-synonyms="magputi, magmukhang maputla">pamumutiwanan</span>
            ng dalawang ganid, ng bangis na tangan.
        </p>
    </div>

    <div class="words">
        <p>152 Nagbuntung-hininga itong abang kalong
            at sa umaaliw na Moro'y tumugon,
            Kundi mo kinalag sa puno ng kahoy,
            nalibing na ako sa tiyan ng leon.
        </p>
    </div>

    <div class="words">
        <p>153 Payapa na naman disin yaring dibdib,
            napagkikilalang kaaway kang labis;
            at 'di binayaang nagkapatid-patid
            ang aking hiningang kamataya't sakit.
        </p>
    </div>

    <div class="words">
        <p>154 Itong iyong awa'y 'di ko hinahangad,
            patayin mo ako'y siyang <span class="hoverable"
                data-word="pitang habag"
                data-audio="path/to/audio/mapanglaw.mp3"
                data-definition-tag="Awa"
                data-definition-eng="pity"
                data-example="Pitang habag ang naramdaman niya para sa bata."
                data-antonyms="walang malasakit, kalupitan"
                data-synonyms="awa, kahabagan">pitang habag</span>;
            'di mo tanto yaring binabatang hirap,
            na ang kamatayan ang buhay kong hanap.
        </p>
    </div>

    <div class="words">
        <p>155 Dito napahiyaw sa malaking hapis
            ang Morong may awa't luha'y tumagistis;
            siyang itinugon sa wikang narinig,
            at sa panlulumo'y kusang napahilig.
        </p>
    </div>

    <!-- Inline Buttons -->
    <div class="inline-buttons">
        <a href="{{ route('chapters') }}"><button class="btn-danger">Back</button></a>
        <button id="comment-logo">Comments</button>
        <a href="{{ route('games.game12') }}"><button class="btn-primary">Next</button></a>
    </div>

    <!-- Comments Section -->
    <div id="comments-section" class="comments" style="display: none;">
        <div class="comment-header">
            <h3 class="comment-title">Comments</h3>
            <button id="close-comments">×</button>
        </div>
        <div class="comment-content">
            <ul class="comment-list">
                @if ($comments->isEmpty())
                    <li class="no-comments">No comments yet. Be the first to comment!</li>
                @else
                    @foreach ($comments as $comment)
                        <li class="comment-item">
                            <div class="comment-author">{{ $comment->user->name }}</div>
                            <div class="comment-text">{{ $comment->comment }}</div>
                            <div class="comment-time">{{ $comment->created_at->diffForHumans() }}</div>
                        </li>
                    @endforeach
                @endif
            </ul>
        </div>
        <form action="{{ route('comments.store') }}" method="POST" class="comment-form">
            @csrf
            <!-- Pass dynamic values for chapter_number and chapter_id -->
            <input type="hidden" name="chapter_number" value="{{ 12}}"> <!-- Dynamic chapter number -->
            <input type="hidden" name="chapter_id" value="{{ 12 }}"> <!-- Dynamic chapter ID -->

            <div class="comment-container">
                <!-- Comment textarea -->
                <textarea name="comment" id="comment" rows="2" required placeholder="Comment as {{ Auth::user()->name }}"></textarea>

                <!-- Submit button -->
                <button type="submit" class="send-icon">Submit</button>
            </div>
        </form>
    </div>
</div>

</x-chapter-layout>
