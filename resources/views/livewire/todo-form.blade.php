<div>
    {{-- In work, do what you enjoy. --}}


    <div class="card">
        <div class="card-header">
            Create Tasks
        </div>
        <div class="card-body">
            <form wire:submit ='createTodo'>

                @if (session('success'))
                    <span class=""></span>
                    <div class="shadow-sm p-3 mb-5 text-white bg-success rounded">{{ session('success') }}</div>

                @endif

           
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input wire:model='name' type="name" class="form-control">

                    <!--validation-->
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input">
                    <label class="form-check-label">Done</label>
                </div>


                <div wire:loading.delay.long>
                    <span class="text-success">Creating..</span>
                </div>

                <button wire:loading.remove type="submit" class="btn btn-success">Submit</button>
            </form>

        </div>
    </div>


</div>
