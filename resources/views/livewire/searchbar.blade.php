<div>
    {{-- Success is as dangerous as failure. --}}

    <div class=" p-5 container">
        {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}



        <form wire:model.live='search' class="d-flex" role="search">

            <input wire:model='name' class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            {{-- <button class="btn btn-outline-success" type="submit">Search</button> --}}
        </form>

        @if (sizeOf($users) > 0)
        <ul class="list-group">


            @foreach ($users as $user)
                

                <li class="list-group-item">{{ $user->name }} {{ $user->email }}</li>


                
            @endforeach


        </ul>
            
        @endif

    </div>

</div>
