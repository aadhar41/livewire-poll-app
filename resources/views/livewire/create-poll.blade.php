<div>
    <form wire:submit.prevent="createPoll" method="post">
        <label for="">Poll Title</label>
        <input type="text" wire:model.live="title" />
        @error('title')
            <div class="text-red-500">{{ $message }}</div>
        @enderror

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
                        <input type="text" wire:model.live="options.{{ $index }}" />
                        <button class="btn" wire:click.prevent="removeOption({{ $index }})">Remove</button>
                    </div>
                    @error("options.{$index}")
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
            @endforeach
        </div>

        <button type="submit" class="btn mt-2">Create Poll</button>
    </form>
</div>
