<div class="mess__item">
    <div class="image img-cir img-40">
        <img src="//www.gravatar.com/avatar/{{ md5($thread->creator()->email) }} ?s=64" alt="{{ $thread->creator()->name }}" />
    </div>
    <div class="content">
        <h6>{{ $thread->subject }}</h6>
        <p>{{ $thread->creator()->name }}: {{ $thread->latestMessage->body }}</p>
    </div>
</div>