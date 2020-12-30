<x-layout>
     <!-- Contact-->
     <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-justify text-uppercase pb-3"><img class="img-lampadina"src="../img/logos/lampadina.jpg" alt="">contattaci</h2>
                <h3 class="section-subheading text-muted">Compila il form qui sotto per richiedere informazioni.</h3>
            </div>
            <form id="contactForm" action="{{ route('contacts.submit') }}" method="post" name="sentMessage" novalidate="novalidate">
                @if ($errors->any())
                 <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                         @endforeach
                    </ul>
                </div>
                @endif
                @csrf
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <p class="help-block "></p>
                        
                        <input class="form-control" id="name" type="text" placeholder="Nome e Cognome" required="required" value="{{ old('name')}}" />
                        </div>
                        {{-- <div class="form-group">
                            <input class="form-control" id="surname" type="text" placeholder="Cognome" required="required"  value="{{ old('surname')}}"  />
                            <p class="help-block "></p>
                        </div> --}}
                        <div class="form-group ">
                            <input class="form-control" name="phone"  id="phone" type="tel" placeholder="Telefono" required="required"  value="{{ old('phone')}}" />
                            <p class="help-block t"></p>
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="email"  id="email" type="email" placeholder="E-mail" required="required"  value="{{ old('email')}}" />
                            <p class="help-block "></p>
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="city" id="city" type="text" placeholder="Città" required="required"  value="{{ old('city')}}"  />
                            <p class="help-block "></p>
                        </div>
                      
                    </div>
                    <div class="col-md-6">
                        
                        <div class="form-group form-group-textarea mb-md-0">
                            <textarea class="form-control" name="message" id="message" placeholder="Il tuo messaggio per noi" required="required" >{{ old('name')}}</textarea>
                            <p class="help-block "></p>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div id="success"></div>
                    <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">INVIA</button>
                </div>
            </form>
        </div>
    </section>
</x-layout>