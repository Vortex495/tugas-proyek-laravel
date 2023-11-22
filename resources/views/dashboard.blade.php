<x-app-layout>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-app.navbar />
        <div class="container-fluid py-4 px-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-md-flex align-items-center mb-3 mx-2">
                        <div class="mb-md-0 mb-3">
                            <h3 class="font-weight-bold mb-0">Selamat Datang Di Project Mechanic</h3>
                            <p class="mb-0">Project ini bertemakan Administrasi sebuah bengkel mobil yang dimana administrator mengelola segala data diperlukan bengkel disini </p>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-0">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-md-flex align-items-center mb-3 mx-2">
                        <div class="mb-md-0 mb-3">
                            <h6 class="font-weight-bold mb-0">5 Hal yang diperlukan untuk menjadi administrator :</h6>
                        </div>
                    </div>
                </div>
                <div class="position-relative overflow-hidden">
                    <div class="swiper mySwiper mt-4 mb-2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div>
                                    <div
                                        class="card card-background shadow-none border-radius-xl card-background-after-none align-items-start mb-0">
                                        <div class="full-background bg-cover"
                                            style="background-image: url('../assets/img/img-2.jpg')"></div>
                                        <div class="card-body text-start px-3 py-0 w-100">
                                            <div class="row mt-12">
                                                <div class="col-sm-3 mt-auto">
                                                    <h4 class="text-dark font-weight-bolder">#1</h4>
                                                    <p class="text-dark opacity-6 text-xs font-weight-bolder mb-0">Name
                                                    </p>
                                                    <h5 class="text-dark font-weight-bolder">Displin</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div
                                    class="card card-background shadow-none border-radius-xl card-background-after-none align-items-start mb-0">
                                    <div class="full-background bg-cover"
                                        style="background-image: url('../assets/img/img-1.jpg')"></div>
                                    <div class="card-body text-start px-3 py-0 w-100">
                                        <div class="row mt-12">
                                            <div class="col-sm-3 mt-auto">
                                                <h4 class="text-dark font-weight-bolder">#2</h4>
                                                <p class="text-dark opacity-6 text-xs font-weight-bolder mb-0">Name</p>
                                                <h5 class="text-dark font-weight-bolder">Fokus</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div
                                    class="card card-background shadow-none border-radius-xl card-background-after-none align-items-start mb-0">
                                    <div class="full-background bg-cover"
                                        style="background-image: url('../assets/img/img-3.jpg')"></div>
                                    <div class="card-body text-start px-3 py-0 w-100">
                                        <div class="row mt-12">
                                            <div class="col-sm-3 mt-auto">
                                                <h4 class="text-dark font-weight-bolder">#3</h4>
                                                <p class="text-dark opacity-6 text-xs font-weight-bolder mb-0">Name</p>
                                                <h6 class="text-dark font-weight-bolder">Tidak Tertekan</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div
                                    class="card card-background shadow-none border-radius-xl card-background-after-none align-items-start mb-0">
                                    <div class="full-background bg-cover"
                                        style="background-image: url('../assets/img/img-4.jpg')"></div>
                                    <div class="card-body text-start px-3 py-0 w-100">
                                        <div class="row mt-12">
                                            <div class="col-sm-3 mt-auto">
                                                <h4 class="text-dark font-weight-bolder">#4</h4>
                                                <p class="text-dark opacity-6 text-xs font-weight-bolder mb-0">Name</p>
                                                <h5 class="text-dark font-weight-bolder">To The Point</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div
                                    class="card card-background shadow-none border-radius-xl card-background-after-none align-items-start mb-0">
                                    <div class="full-background bg-cover"
                                        style="background-image: url('../assets/img/img-5.jpg')"></div>
                                    <div class="card-body text-start px-3 py-0 w-100">
                                        <div class="row mt-12">
                                            <div class="col-sm-3 mt-auto">
                                                <h4 class="text-dark font-weight-bolder">#5</h4>
                                                <p class="text-dark opacity-6 text-xs font-weight-bolder mb-0">Name</p>
                                                <h5 class="text-dark font-weight-bolder">Bijaksana</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
            <x-app.footer />
        </div>
    </main>

</x-app-layout>
