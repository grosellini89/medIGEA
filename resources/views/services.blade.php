
<x-layout>


                <!-- Services-->
                <section class="page-section" id="services">
                    <div class="container">
                        <div class="text-left">
                            <h2 class="section-heading text-uppercase pb-3"><img class="img-lampadina"src="../img/logos/lampadina.jpg" alt="">SPECIALISTICHE</h2>
                        </div>
                        <div class="row">
                        
                            @foreach ($specialistiche as $specialistic)
                                <div class="col-12 col-md-6 ">
                                     <div class="content-box team-specialist ">  
                                    <a style="text-decoration: none;" class="text-left h4 my-3" href="{{route('detail', ['name'=>$specialistic['name']])}}" >{{$specialistic['name']}}</a>
                                        </div>
                                </div>
                            @endforeach            
                        </div>                   
                    </div>
                </section>
</x-layout>