<x-layout>
     <!-- Team-->
     <section class="page-section bg-light" id="team">
        <div class="container">

             <h2 class="section-heading text-justify text-uppercase pb-3"><img class="img-lampadina"src="../img/logos/lampadina.jpg" alt="">CHI SIAMO</h2>

                <p> Il
                    <i> Centro Medico Polispecialistico </i>
                <b class="font-weight-bold" style="font-family: 'Dancing Script'; font-size: 17px; color: var(--medblue); ">med</b><b  style="color: var(--medorange);">IGEA</b>
                 nasce dall’osservazione di un profondo cambiamento demografico dovuto ad un sostanziale incremento delle aspettative di vita che ha fatto emergere nuove problematiche sanitarie, sociali ed economiche.</p>
                <p>La missione di  
                    <b class="font-weight-bold" style="font-family: 'Dancing Script'; font-size: 17px; color: var(--medblue); ">med</b><b  style="color: var(--medorange);">IGEA</b>
                     è di offrire servizi innovativi per promuovere prevenzione, salute e benessere in spazi dedicati anche all’informazione ed alla cultura della salute.</p>
                <p>L’idea di  
                <b class="font-weight-bold" style="font-family: 'Dancing Script'; font-size: 17px; color: var(--medblue); ">med</b><b class="" style="color: var(--medorange);">IGEA</b>
                     è di mettere a disposizione della persona una rete all’interno della quale dialogano ed interagiscono diverse professionalità mediche con l’intento di offrire un’assistenza integrata ed efficace.</p>
                <p>Chi si rivolge/affida a  
                    <b class="font-weight-bold" style="font-family: 'Dancing Script'; font-size: 17px; color: var(--medblue); ">med</b><b  style="color: var(--medorange);">IGEA</b>
                 può contare su un personale sanitario altamente competente e specializzato affiancato da tecnologie all’avanguardia, in costante aggiornamento.</p>
                <p>Il tutto garantendo flessibilità oraria, tempi di prenotazione brevi, abbattimento dei tempi di attesa, a tariffe accessibili.</p>
                <p>Il <i> Centro Medico Polispecialistico </i> 
                    <b class="font-weight-bold" style="font-family: 'Dancing Script'; font-size: 17px; color: var(--medblue); ">med</b><b  style="color: var(--medorange);">IGEA</b>
                 si sviluppa su una superficie di oltre 300 mq, con ambienti accoglienti e piacevoli con spazi ben armonizzati, studiati con l’intento di rendere la permanenza al suo interno un’esperienza confortevole, nel pieno rispetto delle normative igienico - sanitarie vigenti e l’abbattimento delle barriere architettoniche.</p>
                

                <h2 class="section-heading text-uppercase pt-5 pb-3"> <img class="img-lampadina"src="../img/logos/lampadina.jpg" alt=""> Il nostro Team</h2>              
                
            </div>
            <div class="container">
            <div class="row pt-5">
                @foreach ($members as $member)
                <div class="col-lg-3 ">
                    <x-team-member
                    name="{{$member['name']}}"
                    role="{{$member['role']}}"
                    img="{{$member['img']}}"
                    />
                        
                </div>    
                @endforeach
                
               
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center"><p class="large text-muted"></p></div>
            </div>
        </div>
        </div>
    </section>
   
</x-layout>