<x-chapter-layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    {{-- FROM HERE MAG-EEDIT --}}
    {{-- JUST COPY & PASTE THE WHOLE CODE FOR TEMPLATE. --}}
    {{-- NO NEED NA GALAWIN ANG AUDIO FIILE --}}
    <h1 class="chapter">Kabanata 15: Pangaral sa Magulang</h1>
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
        <p>197 Pag-ibig <span class="hoverable"
            data-word="anaki"
            data-audio="path/to/audio/mapanglaw.mp3"
            data-definition-tag="tila o parang."
            data-definition-eng="seemingly"
            data-example="Anaki'y wala siyang nagawa sa sitwasyon."
            data-antonyms="tiyak, tunay"
            data-synonyms="tila, parang">anaki</span>'y aking nakilala,
            'di dapat palakihin ang bata sa saya;
            at sa katuwaa'y kapag namihasa,
            kung lumaki'y walang hihinting ginhawa.
        </p>
    </div>
    <br>

    <div class="words">
        <p>198 Sapagkat ang mundo'y bayan ng hinagpis,
            namamaya'y <span class="hoverable"
            data-word="sukat"
            data-audio="path/to/audio/mapanglaw.mp3"
            data-definition-tag="sukat o dami."
            data-definition-eng="measure"
            data-example="Sukat ng kanyang kasuotan ay tamang-tama."
            data-antonyms="kulang, labis"
            data-synonyms="haba, lapad">sukat</span> tibayan ang dibdib;
            lumaki sa tuwa'y walang pagtitiis ...
            anong ilalaban sa dahas ng sakit?</p>
    </div>
    <br>

    <div class="words">
        <p>199 Ang taong <span class="hoverable"
            data-word="magawi"
            data-audio="path/to/audio/mapanglaw.mp3"
            data-definition-tag="kumilos o magpakita."
            data-definition-eng="to behave"
            data-example="Dapat tayong magawi nang maayos sa harap ng ibang tao."
            data-antonyms="magulo, mag-imbento"
            data-synonyms="kumilos, magpakita">magawi</span> sa ligaya't aliw,
            mahina ang puso't lubhang maramdamin;
            inaakala pa lamang ang hilahil
            na daratni'y 'di na matutuhang bathin.
        </p>
    </div>
    <br>

    <div class="words">
        <p>200 Para ng halamang lumaki sa tubig,
            daho'y nalalanta munting 'di madilig;
            ikinaluluoy ang sandaling init;
            gayundin ang pusong sa tuwa'y <span class="hoverable"
            data-word="maniig"
            data-audio="path/to/audio/mapanglaw.mp3"
            data-definition-tag="magyelo o mag-angat."
            data-definition-eng="to freeze"
            data-example="Ang katawan ko'y maniig sa lamig."
            data-antonyms="magpainit, magbigay-init"
            data-synonyms="magyelo, mag-angat">maniig</span>.</p>
    </div>
    <br>

    <div class="words">
        <p>201 Munting kahirapa'y <span class="hoverable"
            data-word="mamalakhing"
            data-audio="path/to/audio/mapanglaw.mp3"
            data-definition-tag="magtiis o magtagal."
            data-definition-eng="to endure"
            data-example="Kayang mamalakhing ng bata ang hirap."
            data-antonyms="sumuko, tumakas"
            data-synonyms="magtiis, magtagal">mamalakhing</span> dala,
            dibdib palibhasa'y 'di gawing magbata,
            ay bago sa mundo'y walang kisapmata,
            ang tao'y mayroong sukat ipagdusa.</p>
    </div>
    <br>

    <div class="words">
        <p>202 Ang laki sa layaw karaniwa'y hubad
            sa bait at muni't sa hatol ay salat;
            masaklap na bunga ng maling paglingap,
            habag ng magulang sa irog na anak.</p>
    </div>
    <br>

    <div class="words">
        <p>203 Sa taguring bunso't likong pagmamahal,
            ang isinasama ng bata'y nunukal;
            ang iba'y marahil sa kapabayaan
            ng dapat magturong tamad na magulang.</p>
    </div>
    <br>

    <div class="words">
        <p>204 Ang lahat ng ito'y kay amang <span class="hoverable"
            data-word="talastas"
            data-audio="path/to/audio/mapanglaw.mp3"
            data-definition-tag="alam o napag-alaman."
            data-definition-eng="known"
            data-example="Ang buong bayan ay talastas ang kanyang kabutihan."
            data-antonyms="hindi alam, hindi batid"
            data-synonyms="alam, napag-alaman">talastas</span>,
            kaya nga ang luha ni ina'y hinamak;
            at ipinadala ako sa Atenas —
            bulag na isip ko'y nang doon mamulat.</p>
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
