@extends('layouts.site')

@section('content')

<div class="site-blocks-cover" style="background-image: url(images/jesus-kiteque-wn-KYaHwcis-unsplash.jpg);" data-aos="fade">
      <div class="container">
        <div class="row align-items-start align-items-md-center justify-content-end">
          <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
            <h1 class="mb-2">A Primeira Corretora Regulada de Criptomoedas em Portugal</h1>
            <div class="intro-text text-center text-md-left">
              <p>
                <a href="{{route('site.products')}}" class="btn btn-sm btn-primary">Comprar</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section site-section-sm site-blocks-1">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
            <div class="icon mr-4 align-self-start">
              <span class="icon-exchange"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Corretora</h2>
              <p>Compre, venda, receba e envie Bitcoin e outras Criptomoedas.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
            <div class="icon mr-4 align-self-start">
              <span class="icon-university"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Transferências</h2>
              <p>Depósitos e levantamentos em Euros directamente para a sua conta bancária.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
            <div class="icon mr-4 align-self-start">
              <span class="icon-help"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Suporte</h2>
              <p>Suporte 100% em Português, via chat online, telefone e email.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection