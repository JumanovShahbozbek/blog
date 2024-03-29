<div class="container-fluid py-5">
    <div class="container p-0">
        <div class="text-center pb-2">
            <p class="section-title px-5"><span class="px-2">Minnatdorchilik</span></p>
            <h1 class="mb-4">Ota-onalar nima deyishadi!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
            @foreach ($coments as $coment)
                <div class="testimonial-item px-3">
                    <div class="bg-light shadow-sm rounded mb-4 p-4">
                        <img src="/images/{{ $coment->icon }}" style="width: 40px" alt="">
                        {{ $coment->content }}
                    </div>
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle" src="/images/{{ $coment->img }}" style="width: 70px; height: 70px;"
                            alt="Image">
                        <div class="pl-3">
                            <h5>{{ $coment->surname }} {{ $coment->name }}</h5>
                            <i>{{ $coment->subject }}</i>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- <div class="testimonial-item px-3">
                <div class="bg-light shadow-sm rounded mb-4 p-4">
                    <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                    Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum clita
                </div>
                <div class="d-flex align-items-center">
                    <img class="rounded-circle" src="/assets/img/testimonial-2.jpg" style="width: 70px; height: 70px;" alt="Image">
                    <div class="pl-3">
                        <h5>Umrzaqova Nilufar</h5>
                        <i>Programist</i>
                    </div>
                </div>
            </div>
            <div class="testimonial-item px-3">
                <div class="bg-light shadow-sm rounded mb-4 p-4">
                    <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                    Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum clita
                </div>
                <div class="d-flex align-items-center">
                    <img class="rounded-circle" src="/assets/img/testimonial-3.jpg" style="width: 70px; height: 70px;" alt="Image">
                    <div class="pl-3">
                        <h5>Sobirov Rustam</h5>
                        <i>Sartarosh</i>
                    </div>
                </div>
            </div>
            <div class="testimonial-item px-3">
                <div class="bg-light shadow-sm rounded mb-4 p-4">
                    <h3 class="fas fa-quote-left text-primary mr-3"></h3>
                    Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor tempor ipsum clita
                </div>
                <div class="d-flex align-items-center">
                    <img class="rounded-circle" src="/assets/img/testimonial-4.jpg" style="width: 70px; height: 70px;" alt="Image">
                    <div class="pl-3">
                        <h5>Baqlajanov Ulkan</h5>
                        <i>PR-Manager</i>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
