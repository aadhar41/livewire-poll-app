<div>
    <form action="" method="post">
        <label for="">Poll Title</label>
        <input type="text" wire:model.live="title" />
        <h1 class="mt-2">Title: "{{ $title }}"</h1>

        <div class="mb-4 mt-2">
            <button type="button" wire:click.prevent="addOption" class="btn btn-primarybtn-lg btn-block">
                Add Option
            </button>
        </div>

        <div class="mt-4">
            @foreach ($options as $index => $option)
                <div class="mb-4">
                    {{ $index }} - {{ $option }}
                </div>
            @endforeach
        </div>
    </form>
</div>
