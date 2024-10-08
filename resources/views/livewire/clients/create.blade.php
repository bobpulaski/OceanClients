<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">

            <div class="p-6 text-gray-900">

                <form wire:submit="save">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" wire:model="name" class="form-control" id="name"
                            placeholder="Enter a name" />
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="inn">Inn</label>
                        <input type="text" wire:model="inn" class="form-control" id="inn"
                            placeholder="Enter a inn" />
                        @error('inn')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('clients.index') }}" class="btn btn-danger" wire:navigate>Back</a>
                </form>

            </div>
            
        </div>
    </div>
</div>
