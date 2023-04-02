@extends('layout.main')
@section('content')
        <div class="container mb-4">
            <h2 class="mt-4">Detail Barang</h2>
            <div class="row">
                <div class="col">
                    <div class="card mt-4 mb-4">
                        <div class="card-body">
                          <h5 class="card-title mt-2 mb-4 fw-bold" style="color:#055E68">Nama Barang</h5>
                          <div class="row">
                            <div class="col-3">
                                <img src="https://www.99.co/id/img-pic/listing/982786201/1/138a7d99/rumah-dijual-450jt-cilaku-kolam/618/412.jpeg" style="width: 100%" class="rounded mx-auto d-block img-fluid" style="width: 100%;" alt="">
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">ID Barang</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="131513" disabled>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nama Barang</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="rumah" disabled>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
                                    <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="bacopgeming" disabled>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Harga Awal</label>
                                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="10000000" disabled>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Deskripsi Barang</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled>Rumah dijual sekitar 20 hektar dengan seharga 20 miliyar</textarea>
                                </div>
                                <div>
                                    <a class="btn text-white" style="background-color:#055E68" href="#" role="button">Edit<i class="bi bi-door-open px-1"></i></a>
                                    <a class="btn text-white" style="background-color:#055E68" href="#" role="button">Delete<i class="bi bi-door-open px-1"></i></a>
                                </div>
                            </div>

                            </div>

                          </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
@endsection
