
@props(['name', 'role','img'])

<div class="team-member">
<img class="mx-auto rounded-circle" src="{{$img}}" alt="" />
    <h4>{{$name}}</h4>
    <p class="text-muted">{{$role}}</p>
    {{-- <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a> --}}
</div>