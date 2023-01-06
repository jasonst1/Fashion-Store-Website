@extends('components/app')

@section('title')
Item Detail
@stop

@section('css')
  <link href="{{ URL::asset('css/details.css') }}" rel="stylesheet" type="text/css" >
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
@stop

@section('content')
<div class="detailBox d-flex justify-content-center text-center">
    <div class="detailImgBtn d-flex flex-column col-3 justify-content-center align-items-center">
        <div class="col-3">
            <img src="https://www.maisonmargiela.com/dw/image/v2/AAPK_PRD/on/demandware.static/-/Sites-margiela-master-catalog/default/dw297df77a/images/large/SA3UA0001_P5405_T6333_F.jpg?sw=64&q=80"/>
        </div>
        <div class="col-3">
            <img src="https://www.maisonmargiela.com/dw/image/v2/AAPK_PRD/on/demandware.static/-/Sites-margiela-master-catalog/default/dw952d863e/images/large/SA3UA0001_P5405_T6333_E.jpg?sw=64&q=80" alt="">
        </div>
        <div class="col-3">
            <img src="https://www.maisonmargiela.com/dw/image/v2/AAPK_PRD/on/demandware.static/-/Sites-margiela-master-catalog/default/dw14a78b1b/images/large/SA3UA0001_P5405_T6333_T.jpg?sw=64&q=80" alt="">
        </div>
    </div>
    <div class="col-6 detailImage">
        <img class="ml-auto mr-auto" src="https://www.maisonmargiela.com/dw/image/v2/AAPK_PRD/on/demandware.static/-/Sites-margiela-master-catalog/default/dw297df77a/images/large/SA3UA0001_P5405_T6333_F.jpg?sw=1024&q=80"/>
        <img class="ml-auto mr-auto mt-5" src="https://www.maisonmargiela.com/dw/image/v2/AAPK_PRD/on/demandware.static/-/Sites-margiela-master-catalog/default/dw952d863e/images/large/SA3UA0001_P5405_T6333_E.jpg?sw=1024&q=80"/>
        <img class="ml-auto mr-auto mt-5" src="https://www.maisonmargiela.com/dw/image/v2/AAPK_PRD/on/demandware.static/-/Sites-margiela-master-catalog/default/dw14a78b1b/images/large/SA3UA0001_P5405_T6333_T.jpg?sw=1024&q=80"/>
    </div>
    <div class="col-3">
        <div class="">
            SMALL LEATHER GOODS
        </div>
        <div class="mt-1">
            Recicla key chain wallet
        </div>
        <div class="mt-3">
        With six chains and a keyring inside, along with the numeric logo, the wallet is crafted from grainy calf leather. The Recicla logo also appears inside. Maison Margiela's signature, the four white stitches, appear on the flap; the opposite of a label. Recicla pieces carry a new Recicla label denoting its limited edition, provenance and period – an illustration of the restorative power of heritage attributes and articles imbued with the soul of history, resonating the grammar of today.
        </div>
        <div class="mt-3">
            <a class="btn btn-outline-dark btn-floating m-1" href="#" role="button"
            ><i class="bi bi-bookmark"></i></i></a>
        </div>
        <div class="mt-1">
            <a class="btn btn-outline-dark btn-floating m-1" href="#" role="button"
            >Add To Cart <i class="bi bi-cart"></i></i></a>
        </div>
        <div>
        </div>
    </div>
</div>
<div class="mt-5 mb-3 text-center">
    <div>
        <h5>You May Also Like...</h5>
    </div>
    <div>
    <div class="productMayLike mt-3 mb-2 row align-items-center justify-content-between text-center">
  <div class="col-3 mt-2">
    <div>
      <img src="https://www.maisonmargiela.com/dw/image/v2/AAPK_PRD/on/demandware.static/-/Sites-margiela-master-catalog/default/dw28c5014a/images/large/S55UA0026_P4745_T2003_F.jpg?sw=768&q=80" />
    </div>
    <div>
      Key Chain Wallet
    </div>
    <div>
        <a class="btn btn-outline-dark btn-floating m-1" href="#" role="button"
        ><i class="bi bi-bookmark"></i></i></a>
    </div>
    <div>
        IDR 6.150.000,00
    </div>
  </div>
  <div class="col-3">
    <div>
      <img src="https://www.maisonmargiela.com/dw/image/v2/AAPK_PRD/on/demandware.static/-/Sites-margiela-master-catalog/default/dwe6a15698/images/large/SA1UA0002_P5016_H7730_L.jpg?sw=768&q=80" />
    </div>
    <div>
      Broken Mirror Keyring Wallet
    </div>
    <div>
        <a class="btn btn-outline-dark btn-floating m-1" href="#" role="button"
        ><i class="bi bi-bookmark"></i></i></a>
    </div>
    <div>
        IDR 5.850.000,00
    </div>
  </div>
  <div class="col-3">
    <div>
      <img src="https://www.maisonmargiela.com/dw/image/v2/AAPK_PRD/on/demandware.static/-/Sites-margiela-master-catalog/default/dw7ed736f8/images/large/SA1UA0002_P5176_H9489_F.jpg?sw=768&q=80" />
    
    </div>
    <div>
      Check Keychain Leather Wallet
    </div>
    <div>
        <a class="btn btn-outline-dark btn-floating m-1" href="#" role="button"
        ><i class="bi bi-bookmark"></i></i></a>
    </div>
    <div>
        IDR 6.700.000,00
    </div>
  </div>
  <div class="col-3">
    <div>
      <img src="https://www.maisonmargiela.com/dw/image/v2/AAPK_PRD/on/demandware.static/-/Sites-margiela-master-catalog/default/dw741b87e0/images/large/SA1UA0002_P5162_H8860_F.jpg?sw=768&q=80" />
    </div>
    <div>
        Tweed Keychain Leather Wallet
    </div>
    <div>
        <a class="btn btn-outline-dark btn-floating m-1" href="#" role="button"
        ><i class="bi bi-bookmark"></i></i></a>
    </div>
    <div>
        IDR 6.700.000,00
    </div>
  </div>
</div>
    </div>
</div>
@stop