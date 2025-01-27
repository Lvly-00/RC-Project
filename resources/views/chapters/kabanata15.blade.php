<x-chapter-layout>

    {{-- FROM HERE MAG-EEDIT --}}
    {{-- JUST COPY & PASTE THE WHOLE CODE FOR TEMPLATE. --}}
    {{-- NO NEED NA GALAWIN ANG AUDIO FIILE --}}
    <h1 class="chapter">Kabanata 15: Pangaral sa Magulang</h1>
    <br>

    <div class="words">
        <p>197 Pag-ibig <span class="hoverable" data-word="anaki" data-audio="path/to/audio/mapanglaw.mp3"
                data-definition-tag="tila o parang." data-definition-eng="seemingly"
                data-example="Anaki'y wala siyang nagawa sa sitwasyon." data-antonyms="tiyak, tunay"
                data-synonyms="tila, parang">anaki</span>'y aking nakilala,
            'di dapat palakihin ang bata sa saya;
            at sa katuwaa'y kapag namihasa,
            kung lumaki'y walang hihinting ginhawa.
        </p>
    </div>

    <div class="words">
        <p>198 Sapagkat ang mundo'y bayan ng hinagpis,
            namamaya'y <span class="hoverable" data-word="sukat" data-audio="path/to/audio/mapanglaw.mp3"
                data-definition-tag="sukat o dami." data-definition-eng="measure"
                data-example="Sukat ng kanyang kasuotan ay tamang-tama." data-antonyms="kulang, labis"
                data-synonyms="haba, lapad">sukat</span> tibayan ang dibdib;
            lumaki sa tuwa'y walang pagtitiis ...
            anong ilalaban sa dahas ng sakit?</p>
    </div>

    <div class="words">
        <p>199 Ang taong <span class="hoverable" data-word="magawi" data-audio="path/to/audio/mapanglaw.mp3"
                data-definition-tag="kumilos o magpakita." data-definition-eng="to behave"
                data-example="Dapat tayong magawi nang maayos sa harap ng ibang tao."
                data-antonyms="magulo, mag-imbento" data-synonyms="kumilos, magpakita">magawi</span> sa ligaya't aliw,
            mahina ang puso't lubhang maramdamin;
            inaakala pa lamang ang hilahil
            na daratni'y 'di na matutuhang bathin.
        </p>
    </div>

    <div class="words">
        <p>200 Para ng halamang lumaki sa tubig,
            daho'y nalalanta munting 'di madilig;
            ikinaluluoy ang sandaling init;
            gayundin ang pusong sa tuwa'y <span class="hoverable" data-word="maniig"
                data-audio="path/to/audio/mapanglaw.mp3" data-definition-tag="magyelo o mag-angat."
                data-definition-eng="to freeze" data-example="Ang katawan ko'y maniig sa lamig."
                data-antonyms="magpainit, magbigay-init" data-synonyms="magyelo, mag-angat">maniig</span>.</p>
    </div>

    <div class="words">
        <p>201 Munting kahirapa'y <span class="hoverable" data-word="mamalakhing"
                data-audio="path/to/audio/mapanglaw.mp3" data-definition-tag="magtiis o magtagal."
                data-definition-eng="to endure" data-example="Kayang mamalakhing ng bata ang hirap."
                data-antonyms="sumuko, tumakas" data-synonyms="magtiis, magtagal">mamalakhing</span> dala,
            dibdib palibhasa'y 'di gawing magbata,
            ay bago sa mundo'y walang kisapmata,
            ang tao'y mayroong sukat ipagdusa.</p>
    </div>

    <div class="words">
        <p>202 Ang laki sa layaw karaniwa'y hubad
            sa bait at muni't sa hatol ay salat;
            masaklap na bunga ng maling paglingap,
            habag ng magulang sa irog na anak.</p>
    </div>

    <div class="words">
        <p>203 Sa taguring bunso't likong pagmamahal,
            ang isinasama ng bata'y nunukal;
            ang iba'y marahil sa kapabayaan
            ng dapat magturong tamad na magulang.</p>
    </div>

    <div class="words">
        <p>204 Ang lahat ng ito'y kay amang <span class="hoverable" data-word="talastas"
                data-audio="path/to/audio/mapanglaw.mp3" data-definition-tag="alam o napag-alaman."
                data-definition-eng="known" data-example="Ang buong bayan ay talastas ang kanyang kabutihan."
                data-antonyms="hindi alam, hindi batid" data-synonyms="alam, napag-alaman">talastas</span>,
            kaya nga ang luha ni ina'y hinamak;
            at ipinadala ako sa Atenas —
            bulag na isip ko'y nang doon mamulat.</p>
    </div>
    <!-- Inline Buttons -->
    <div class="inline-buttons">
        <a href="{{ route('chapters') }}"><button class="btn-danger">Back</button></a>
        <button id="comment-logo">Comments</button>
        <a href="{{ route('games.game15') }}"><button class="btn-primary">Next</button></a>
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
            <input type="hidden" name="chapter_number" value="{{ $number }}">
            <div class="comment-container">
                <textarea name="comment" id="comment" rows="2" required placeholder="Comment as {{ Auth::user()->name }}"></textarea>
                <button type="submit" class="send-icon">Submit</button>
            </div>
        </form>
    </div>
    </div>

</x-chapter-layout>
