<div class="my-3">
    @if (session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show rounded-xl p-3 m-2" role="alert">
        <div class=" flex items-center justify-between font-bold text-xl">
            <h2 class="alert-heading">Success!</h2>
            <button type="button" class="flex px-4 py-3" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <p>{{ session()->get('message') }}</p>
    </div>
    @endif

    @if (session()->has('error'))
    <div class="alert alert-danger alert-dismissible fade show rounded-xl p-3 m-2" role="alert">
        <div class=" flex items-center justify-between font-bold text-xl">
            <h2 class="alert-heading">Error!</h2>
            <button type="button" class="flex px-4 py-3" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <p>{{ session()->get('error') }}</p>
    </div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show rounded-xl p-3 m-2" role="alert">
        <div class=" flex items-center justify-between font-bold text-xl">
            <h2 class="alert-heading">Errors!</h2>
            <button type="button" class="flex px-4 py-3" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <p>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        </p>
    </div>
    @endif
</div>