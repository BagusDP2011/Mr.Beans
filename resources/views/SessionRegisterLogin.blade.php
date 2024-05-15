<div class="mb-3" style="opacity:1 !important;">
    <div style="margin-top: 50px;">
        @if(session('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <div role="alert">
                <div class="bg-green-500 text-white font-bold rounded-t px-4 py-2">
                    Success
                </div>
                <div class="border border-t-0 border-green-400 rounded-b bg-green-100 px-4 py-3 text-green-700">
                    <span class="alert-heading font-medium">Success!</span> {{session('message')}}
                </div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="false">&times;</span>
                </button>
            </div>
        </div>
        @endif
        @if(session('error'))
        <div class="alert alert-error alert-dismissible fade show" role="alert">
            <div role="alert">
                <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                    Error Found!
                </div>
                <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                    <span class="alert-heading font-medium">ERROR!</span> {{session('error')}}
                </div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="false">&times;</span>
                </button>
            </div>
        </div>
        @endif
    </div>
</div>