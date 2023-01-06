@extends('components/app')

@section('title')
    Home
@stop

@section('css')
  <link href="{{ URL::asset('css/home.css') }}" rel="stylesheet" type="text/css" >
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
@stop

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<div class="heading d-flex flex-column justify-content-center align-items-center mb-3">
  <div class="col-3 text-center"><b>Avant-Première</b></div>
  <div class="col-3 text-center"><b>Autumn-Winter 2022</b></div>
</div>

<div id="homeCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="https://image-cdn.hypb.st/https%3A%2F%2Fhypebeast.com%2Fwp-content%2Fblogs.dir%2F6%2Ffiles%2F2022%2F10%2Fmaison-margiela-new-website-featured-image.jpg?w=960&cbr=1&q=90&fit=max" alt="First slide">
          </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="http://cdn.media.amplience.net/i/bta/Maison-Margiela-Banner" alt="Second slide">
          </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://www.thedropdate.com/wp-content/uploads/2019/06/S57WS0236-P2803-H4108_launches_hero_landscape_3_1.jpg" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#homeCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#homeCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="d-flex flex-column align-items-center justify-content-center text-center">
  <div class="productCard mt-3 mb-3 col-6 d-flex align-items-center justify-content-between">
    <div class="col-5">
      <img src="https://www.maisonmargiela.com/dw/image/v2/AAPK_PRD/on/demandware.static/-/Sites-margiela-master-catalog/default/dwa4db64de/images/large/S51CU0314_S38827_900_L.jpg?sw=256&q=80" />
    </div>
    <div class="col-7 d-flex flex-column">
      <div>
        <div style="font-size: 0.5em; font-weight: bold;">Featured</div>
        <div><b>Herringbone Woven Dress</b></div>
      </div>
      <div>
        Crafted from the finest satin sourced from Italy, this dress is the epitome of beauty.
      </div>
      <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Discover More</button>
    </div>
  </div>
  <div class="productCard mt-3 mb-3 col-6 d-flex align-items-center justify-content-between">
    <div class="col-5">
      <img src="https://www.maisonmargiela.com/dw/image/v2/AAPK_PRD/on/demandware.static/-/Library-Sites-margiela-shared/default/dw6a6fc21e/MMSLG_SA3UA0001_P5407_T6047-1%20(1).jpg?sw=1500" />
    </div>
    <div class="col-7 d-flex flex-column">
      <div>
        <div style="font-size: 0.5em; font-weight: bold;">Featured</div>
        <div><b>Recicla</b></div>
      </div>
      <div>
      Recicla pieces carry a new Recicla label denoting its limited edition, provenance and period.
      </div>
      <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Discover More</button>
    </div>
  </div>
  <div class="productCard mt-3 mb-3 col-6 d-flex align-items-center justify-content-between">
    <div class="col-5">
      <img src="https://www.maisonmargiela.com/dw/image/v2/AAPK_PRD/on/demandware.static/-/Library-Sites-margiela-shared/default/dw60be0d86/MMSHOES_S58WU0260_P5016_T9002-1.jpg?sw=1500" />
    </div>
    <div class="col-7 d-flex flex-column">
      <div>
        <div style="font-size: 0.5em; font-weight: bold;">Featured</div>
        <div><b>Tabi</b></div>
      </div>
      <div>
        It captures the avant-garde and insubordinate spirit of the Maison and exists as a heritage classic, continually explored through each collection.
      </div>
      <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Discover More</button>
    </div>
  </div>
</div>
<div class="productCardCat mt-3 mb-2 row align-items-center justify-content-between text-center">
  <div class="col-3">
    <div>
      <img src="https://www.maisonmargiela.com/dw/image/v2/AAPK_PRD/on/demandware.static/-/Library-Sites-margiela-shared/default/dwca46ebab/MMRTW_SI0AA0004_S54753_511-1.jpg?sw=1500" />
    </div>
    <div>
      ICONS
    </div>
  </div>
  <div class="col-3">
    <div>
      <img src="https://www.maisonmargiela.com/dw/image/v2/AAPK_PRD/on/demandware.static/-/Library-Sites-margiela-shared/default/dw6809d354/MMSHOES_S58WS0109_P4306_T8013-1.jpg?sw=1500" />
    </div>
    <div>
      SHOES
    </div>
  </div>
  <div class="col-3">
    <div>
      <img src="https://www.maisonmargiela.com/dw/image/v2/AAPK_PRD/on/demandware.static/-/Library-Sites-margiela-shared/default/dw71d3ea19/MMRTW_S50AM0564_S60621_900-11.jpg?sw=1500" />
    </div>
    <div>
      COATS & JACKETS
    </div>
  </div>
  <div class="col-3">
    <div>
      <img src="https://www.maisonmargiela.com/dw/image/v2/AAPK_PRD/on/demandware.static/-/Library-Sites-margiela-shared/default/dwcd10c364/SB3WG0024_P4300_T8013_F.jpg?sw=1500" />
    </div>
    <div>
      BAGS
    </div>
  </div>
</div>
<hr width="10%" style="background-color:black"/>
<div class="mt-4 mb-2 d-flex col-12 text-center justify-content-center">
  <div class="col-7">Maison Margiela is a Parisian haute couture house founded on ideas of nonconformity and the subversion of norms. Appointed Creative Director in 2014, the British couturier John Galliano exercises his visual language to expand on the grammar of Maison Margiela, creating a new technical vocabulary that cements the house’s position as a singular and autonomous entity in the realm of luxury.</div>
</div>
@stop