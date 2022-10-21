
<nav class="navbar navbar-expand-sm navbar-light bg-light shadow-sm">
    <div class="container-fluid align-items-center">

        <div class="d-flex flex-row flex-nowrap justify-content-around">
            <button class="navbar-toggler p-2 text-primary rounded-circle" width=47 data-bs-toggle="collapse" data-bs-target="#navbar__collapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            {{-- brand and search group --}}
            <img class="img mx-2 ms-lg-0" src="{{ asset('images/icon-2.png') }}" alt="icon-2" width=45/>

            <button class="d-inline-block d-lg-none btn p-2 border rounded-circle"
                style="width: 45px;height: 45px;"
                data-bs-toggle="collapse"
                data-bs-target="#navbar__show-search">
                <i class="fa-solid fa-search text-muted"></i>
            </button>

            <div id="navbar__show-search" class="collapse show">
                <div id="navbar__show-search-wrapper" class="d-block px-2 py-3 p-lg-0 /*w-auto*/ h-100 bg-white">
                    <div class="input-group /*w-auto*/ h-100">
                        {{-- back button --}}
                        <button class="d-inline-block d-lg-none btn p-2 border rounded-circle me-2"
                            style="width: 45px;height: 45px;"
                            data-bs-toggle="collapse"
                            data-bs-target="#navbar__show-search">
                            <i class="fa-solid fa-arrow-left text-muted"></i>
                        </button>
                        {{-- search bar --}}
                        <input class="form-control rounded-pill" type="text" placeholder="Search Larabook"/>
                    </div>
                </div>
            </div>
        </div>

        <div class="order-auto order-sm-last">Hello1</div>

        {{-- nav button group --}}
        <div id="navbar__collapse" class="navbar-collapse collapse">
            <span>asdasd</span>
        </div>

    </div>
</nav>

