<li class="panel panel--slim panel--grey | holiday holiday--{{ $i->status }}">
    <div class="holiday__details">
        <h2 class="gamma">
            <time class="holiday__date" datetime="{{ $i->date_start }}">{{ $i->date_start }}</time>
            <!-- - <time class="holiday__date" datetime="{{ $i->date_end }}">{{ $i->date_end }}</time> -->
        </h2>

        <dl class="list--unset | holiday__misc">
            <dt>Days:</dt>
            <dd>2</dd>
            <dt>Type:</dt>
            <dd>{{ getFormattedType($i->type) }}</dd>
            <dt>Status:</dt>
            <dd>{{ getFormattedState($i->status) }}</dd>
        </dl>
    </div>

    <nav role="menu" class="list--unset | holiday__controls | u-align-right">
        <li><a href="#" class="link">More info</a></li>
        <li><a href="#" class="link link--error">Delete request</a></li>
    </nav>
</li>
