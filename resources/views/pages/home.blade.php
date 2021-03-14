@extends('layouts.app')
@section('title','halaman home')
@section('content')
<x-modal warna="success" link="/about" modal="Home">
    SELANJUTNYA
</x-modal>
<div class="container mt-5 pt-4">
          <div class="row">
            <div class="col-sm-8">
              <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="{{ asset('assets/gambar/1.png')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="{{ asset('assets/gambar/2.png') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="{{ asset('assets/gambar/3.png') }}" class="d-block w-100" alt="...">
                        </div>
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                  </div>
                  </div>
            </div>
            <div class="col-sm-4">
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset ('assets/gambar/4.png')}}" class="d-block w-100" alt="...">
                  </div>
                </div>
                <div class="carousel-inner mt-2">
                  <div class="carousel-item active">
                    <img src="{{ asset ('assets/gambar/5.png') }}" class="d-block w-100" alt="...">
                  </div>
                </div>
              </div>
            </div>       
        </div>
      </div>
@stop