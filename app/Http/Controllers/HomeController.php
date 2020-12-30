<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function homepage() {
        return view('homepage');
    }

    public function contact() {
        return view('contact');
    }
    public function team() {
        $members =[
            ['name'=> 'Claudia Stragapede','role'=> 'Fondatore e Amministratore', 'img'=> '/img/team/claudia.jpg'],
            ['name'=> 'Davide Stragapede','role'=> 'Segretario', 'img'=> '/img/team/davide.jpg'],
            ['name'=> 'Antonio Caputo','role'=> 'Segretario', 'img'=> '/img/team/tonio.jpeg'],
            ['name'=> 'Vito Stragapede','role'=> 'Direttore Sanitario', 'img'=> '/img/team/vito.jpeg']
        
        ];
        return view('team', compact('members'));
    }
    public function services() {
        $specialistiche =[
            ['name'=> 'CARDIOLOGIA','img'=> '/img/team/claudia.jpg'],
            ['name'=> 'CHIRURGIA ESTETICA','img'=> '/img/team/claudia.jpg'],
            ['name'=> 'DERMATOLOGIA E VENEREOLOGIA','img'=> '/img/team/claudia.jpg'],
            ['name'=> 'DIAGNOSTICA ECOGRAFICA','img'=> '/img/team/claudia.jpg'],
            ['name'=> 'DIAGNOSTICA VASCOLARE','img'=> '/img/team/claudia.jpg'],        
            ['name'=> 'ENDOCRINOLOGIA E DIABETOLOGIA','img'=> '/img/team/claudia.jpg'],
            ['name'=> 'FISIATRA','img'=> '/img/team/claudia.jpg'],
            ['name'=> 'FISIOTERAPIA INFANTILE','img'=> '/img/team/claudia.jpg'],
            ['name'=> 'GINECOLOGIA','img'=> '/img/team/claudia.jpg'],
            ['name'=> 'IGIENE E PREVENZIONE ORALE','img'=> '/img/team/claudia.jpg'],
            ['name'=> 'LOGOPEDIA','img'=> '/img/team/claudia.jpg'],
            ['name'=> 'MEDICINA DELLO SPORT','img'=> '/img/team/claudia.jpg'],
            ['name'=> 'NUTRIZIONE','img'=> '/img/team/claudia.jpg'],
            ['name'=> 'ONCOLOGIA','img'=> '/img/team/claudia.jpg'],
            ['name'=> 'ORTODONZIA','img'=> '/img/team/claudia.jpg'],
            ['name'=> 'ORTOPEDIA','img'=> '/img/team/claudia.jpg'],
            ['name'=> 'ORTOPEDIA PEDIATRICA','img'=> '/img/team/claudia.jpg'],
            ['name'=> 'PNEUMOLOGIA','img'=> '/img/team/claudia.jpg'],
            ['name'=> 'UROLOGIA E ANDROLOGIA','img'=> '/img/team/claudia.jpg']
        ];
         return view('services', compact ('specialistiche'));
    }

    public function detail($name) {
        $specialistiche =[
            ['name'=> 'CARDIOLOGIA','sex'=>'M', 'descr'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae ipsa quod tempore, nisi modi aperiam voluptas nobis consectetur animi perspiciatis quisquam commodi corrupti accusantium doloribus illo aliquid blanditiis totam quia?', 'doc'=>'Dr. Ettore Antoncecchi'],

            ['name'=> 'CHIRURGIA ESTETICA','sex'=>'M','descr'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae ipsa quod tempore, nisi modi aperiam voluptas nobis consectetur animi perspiciatis quisquam commodi corrupti accusantium doloribus illo aliquid blanditiis totam quia?', 'doc'=>'Dr. Vincenzo Perchinunno' ],
            
            ['name'=> 'DERMATOLOGIA E VENEREOLOGIA','sex'=>'M','descr'=>"Si effettuano visite specialistiche di diagnosi, cura e prevenzione dei problemi che possono insorgere a livello cutaneo, tricologico e delle unghie.Periodicamente vengono organizzate campagne di prevenzione riguardanti la mappatura dei nevi.", 'doc'=>'Dr. Luigi Davide Ranieri'],
            
            ['name'=> 'DIAGNOSTICA ECOGRAFICA','sex'=>'M','descr'=>"L'ecografia è un esame di routine fondamentale durante il quale viene utilizzata una strumentazione ad ultrasuoni. Rappresenta infatti una metodica estremamente affidabile e dalle potenzialità diagnostiche estremamente elevate.             Si effettuano:
            - Ecografia addome superiore
            - Ecografia addome completo
            - Ecografia epatobiliare
            - Ecografia renale vescicale
            - Ecografia pancreatica
            - Ecografia anche
            - Ecografia anche pediatrica
            - Ecografia muscolo tendinea", 'doc'=>'Dr. Pasquale Lorusso'],
           
            ['name'=> 'DIAGNOSTICA VASCOLARE','sex'=>'M','descr'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae ipsa quod tempore, nisi modi aperiam voluptas nobis consectetur animi perspiciatis quisquam commodi corrupti accusantium doloribus illo aliquid blanditiis totam quia?', 'doc'=>'Dr. Ettore Antoncecchi'],        

            ['name'=> 'ENDOCRINOLOGIA E DIABETOLOGIA','sex'=>'M','descr'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae ipsa quod tempore, nisi modi aperiam voluptas nobis consectetur animi perspiciatis quisquam commodi corrupti accusantium doloribus illo aliquid blanditiis totam quia?', 'doc'=>'Dr. Ettore Antoncecchi'],
          
            ['name'=> 'FISIATRA','sex'=>'M','descr'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae ipsa quod tempore, nisi modi aperiam voluptas nobis consectetur animi perspiciatis quisquam commodi corrupti accusantium doloribus illo aliquid blanditiis totam quia?', 'doc'=>'Dr. Ettore Antoncecchi'],
           
            ['name'=> 'FISIOTERAPIA INFANTILE','sex'=>'M','descr'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae ipsa quod tempore, nisi modi aperiam voluptas nobis consectetur animi perspiciatis quisquam commodi corrupti accusantium doloribus illo aliquid blanditiis totam quia?', 'doc'=>'Dr. Ettore Antoncecchi'],
           
            ['name'=> 'GINECOLOGIA','sex'=>'M','descr'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae ipsa quod tempore, nisi modi aperiam voluptas nobis consectetur animi perspiciatis quisquam commodi corrupti accusantium doloribus illo aliquid blanditiis totam quia?', 'doc'=>'Dr. Ettore Antoncecchi'],
          
            ['name'=> 'IGIENE E PREVENZIONE ORALE','sex'=>'M','descr'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae ipsa quod tempore, nisi modi aperiam voluptas nobis consectetur animi perspiciatis quisquam commodi corrupti accusantium doloribus illo aliquid blanditiis totam quia?', 'doc'=>'Dr. Ettore Antoncecchi'],
           
            ['name'=> 'LOGOPEDIA','sex'=>'M','descr'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae ipsa quod tempore, nisi modi aperiam voluptas nobis consectetur animi perspiciatis quisquam commodi corrupti accusantium doloribus illo aliquid blanditiis totam quia?', 'doc'=>'Dr. Ettore Antoncecchi'],
           
            ['name'=> 'MEDICINA DELLO SPORT','sex'=>'M','descr'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae ipsa quod tempore, nisi modi aperiam voluptas nobis consectetur animi perspiciatis quisquam commodi corrupti accusantium doloribus illo aliquid blanditiis totam quia?', 'doc'=>'Dr. Ettore Antoncecchi'],
           
            ['name'=> 'NUTRIZIONE','sex'=>'F','descr'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae ipsa quod tempore, nisi modi aperiam voluptas nobis consectetur animi perspiciatis quisquam commodi corrupti accusantium doloribus illo aliquid blanditiis totam quia?', 'doc'=>'Dr. Ettore Antoncecchi'],
           
            ['name'=> 'ONCOLOGIA','sex'=>'M','descr'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae ipsa quod tempore, nisi modi aperiam voluptas nobis consectetur animi perspiciatis quisquam commodi corrupti accusantium doloribus illo aliquid blanditiis totam quia?', 'doc'=>'Dr. Ettore Antoncecchi'],
           
            ['name'=> 'ORTODONZIA','sex'=>'M','descr'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae ipsa quod tempore, nisi modi aperiam voluptas nobis consectetur animi perspiciatis quisquam commodi corrupti accusantium doloribus illo aliquid blanditiis totam quia?', 'doc'=>'Dr. Ettore Antoncecchi'],
            
            ['name'=> 'ORTOPEDIA','sex'=>'F','descr'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae ipsa quod tempore, nisi modi aperiam voluptas nobis consectetur animi perspiciatis quisquam commodi corrupti accusantium doloribus illo aliquid blanditiis totam quia?', 'doc'=>'Dr. Ettore Antoncecchi'],
            
            ['name'=> 'ORTOPEDIA PEDIATRICA','sex'=>'M','descr'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae ipsa quod tempore, nisi modi aperiam voluptas nobis consectetur animi perspiciatis quisquam commodi corrupti accusantium doloribus illo aliquid blanditiis totam quia?', 'doc'=>'Dr. Ettore Antoncecchi'],
           
            ['name'=> 'PNEUMOLOGIA','sex'=>'F','descr'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae ipsa quod tempore, nisi modi aperiam voluptas nobis consectetur animi perspiciatis quisquam commodi corrupti accusantium doloribus illo aliquid blanditiis totam quia?', 'doc'=>'Dr. Ettore Antoncecchi'],
           
            ['name'=> 'UROLOGIA E ANDROLOGIA','sex'=>'M','descr'=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae ipsa quod tempore, nisi modi aperiam voluptas nobis consectetur animi perspiciatis quisquam commodi corrupti accusantium doloribus illo aliquid blanditiis totam quia?", 'doc'=>'Dr. Ettore Antoncecchi']
        ];

        foreach ($specialistiche as $specialistic){
            if ($specialistic['name'] == $name) {
               
                return view('detail', compact('specialistic'));
            }
        }
        
    }
    
    public function submit(request $request){ //dependence injection
        $name= $request->input('name');
        $surname= $request->input('surname');
        $email= $request->input('email');
        $titleMessage= $request->input('titleMessage');
        $message= $request->input('message');

        $contact= compact('name', 'message');
        Mail::to($email)->send(new ContactMail($contact));//invio una email tramite la classe contact mail passandogli il contact cche conterrà nome e email
        
        return redirect(route('tank-you'), compact('name','email','message'));
    }

    public function  thankyou($name, $email, $message){
        
        return view('thank-you', compact ('name', 'email', 'message'));
    }


}
