<div class="row">
    @foreach ($teachers as $teacher)
        <div class="col-md-6 col-lg-3 text-center team mb-5">
            <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%;">
                <img class="img-fluid w-100" src="images/{{ $teacher->icon }}" alt="">
                <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                    <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                        href="#"><i class="fab fa-telegram"></i></a>
                    <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px;"
                        href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px;"
                        href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <h4>{{ $teacher->surname }} {{ $teacher->name }}</h4>
            <i> {{ $teacher->subject }} </i>
        </div>
    @endforeach
</div>
