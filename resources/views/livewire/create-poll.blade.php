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
                <div class="mb-2">
                    <label for="">Option - {{ $index + 1 }}</label>
                    <div class="flex gap-2">
                        <input type="text" wire:model.live="options.{{ $index }}" name="" />
                        <button class="btn" wire:click.prevent="removeOption({{ $index }})">Remove</button>
                    </div>
                </div>
            @endforeach
        </div>
    </form>
</div>
