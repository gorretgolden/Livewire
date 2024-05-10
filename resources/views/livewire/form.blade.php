<div class=" p-5 container">
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}


    <form wire:submit="createNewUser">
        @if (session('success'))
        <span class=""></span>
        <div class="shadow-sm p-3 mb-5 text-white bg-success rounded">{{ session('success') }}</div>
            
        @endif

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" wire:model='name' class="form-control" placeholder="Enter your name">
        
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" wire:model='email' class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>

            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" wire:model='password' class="form-control" id="exampleInputPassword1">
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror

        </div>

        <div wire:loading.delay.long>
            <span class="text-success">Sending..</span>
        </div>

        <button wire:loading.remove type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
