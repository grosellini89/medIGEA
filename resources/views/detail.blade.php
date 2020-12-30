<x-layout>
    <section class="page-section" id="detail">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 team-member">
                <img class="mx-auto rounded-circle" src="{{ $specialistic['sex']  == 'M' ? '/img/medici/uomo.jpg' : '/img/medici/donna.jpg'}}" alt="">              
                <h2 class="section-subheading pt-5"> {{ $specialistic['doc'] }}</h2>
            </div>
            <div class="col-12 col-md-8">
                <h2 class="section-heading text-uppercase pb-3"><img class="img-lampadina"src="../img/logos/lampadina.jpg" alt="">{{ $specialistic['name'] }}</h2>
                <p>{{ $specialistic['descr'] }}</p>
                <a href="{{route('services')}}">...Torna alle Specialistiche</a>
            </div>
        </div>
    </div>
</section>


</x-layout>