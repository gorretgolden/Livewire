<div class=" p-5 container">
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <form wire:submit="createNewUser">

        <input type="email" wire:model="email" placeholder="email">
        @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <br>
        <input type="text" wire:model="name" placeholder="name">
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <br>
        <input type="password" wire:model="password" placeholder="esoptron">
        @error('password')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        <br>
        <button class="btn btn-primary">Create</button>
    </form>
</div>
