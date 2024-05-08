<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <form wire:submit="createNewUser">
        <input type="email" wire:model="email" placeholder="email">
        <br>
        <input type="text"  wire:model="name" placeholder="name">
        <br>
        <input type="password"  wire:model="password" placeholder="esoptron">
        <button >Create</button>
    </form>
</div>
