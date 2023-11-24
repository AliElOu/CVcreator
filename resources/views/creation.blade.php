<x-master style="" title="Creation">

    

@section("main")
<style>
    .btn-primary{
        background-color:#563d7c;
        border-color:#563d7c;
    }
</style>

    <div class="pt-5 pb-5" style="background-color: #EFF2F9;">
        <div class="container">
            <div class="bg-white rounded shadow p-2 mt-4" style="min-height:80vh">
                <div class="d-flex justify-content-between border-bottom">
                    <h5>Créer un CV</h5>      
                    <div>
                        <a href="{{ route("templates.show") }}" style="color:#563d7c;"  class="text-decoration-none"><i class="bi bi-arrow-left-circle"></i> Back</a>
                    </div>
                </div>
    
                <div>
    
                    <form class="row g-3 p-3" action="{{ route("save") }}" method="post">
                        @csrf
                        <h5 class="mt-3 text-secondary"><i class="bi bi-person-badge"></i> Informations personnelles</h5>
                        <div class="col-md-6">
                            <label class="form-label">Nom complet</label>
                            <input type="text" name="fullname" value="{{$cv->fullname}}" placeholder="Ali El Ouankrimi" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Email</label>
                            <input type="email" name="Email" value="{{$cv->Email}}" placeholder="test@test.com" class="form-control">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Ojectif</label>
                            <textarea class="form-control" value="{{$cv->objectif}}" name="objectif" rows="3"></textarea>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Numéro de téléphone</label>
                            <input type="number" min="1111111111" name="mob_num" value="{{$cv->mob_num}}" placeholder="+212613794357" max="9999999999"
                                class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Date Of Birth</label>
                            <input type="date" name="birth_date" value="{{$cv->birth_date}}" class="form-control">
                        </div>
    
                        <div class="col-12">
                            <label for="inputAddress" class="form-label"> Address</label>
                            <input type="text" name="address" class="form-control" value="{{$cv->address}}" id="inputAddress" placeholder="1234 Main St">
                        </div>
                        
                        <div class="col-md-6">
                            <label class="form-label">Gender</label>
                            <select class="form-select" name="gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
    
    
                        <div class="col-md-6">
                            <label class="form-label">Hobbies</label>
                            <input type="text" name="hobbies" value="{{$cv->hobbies}}" placeholder="Lire des livres, jouer des jeux video ..." class="form-control">
                        </div>
    
                        <div class="col-12">
                            <label class="form-label">Languages Known</label>
                            <input type="text" name="languages" value="{{$cv->languages}}" placeholder="Hindi,English" class="form-control">
                        </div>
    
                        
                        <hr>
                        <div class="d-flex justify-content-between">
                            <h5 class=" text-secondary"><i class="bi bi-briefcase"></i> Experience</h5>
                            <div>
                                <a class="text-decoration-none" style="color:#563d7c;" data-bs-toggle="modal" data-bs-target="#exp"><i class="bi bi-file-earmark-plus"></i> Ajouter</a>
                            </div>
                        </div>
                                     

                        <div class="d-flex flex-wrap">
                            @if (count($experiences) == 0)
                                <div class="col-12 col-md-6 p-2">
                                    <div class="p-2 border rounded">
                                            <h6>Tu n'as pas aucune expérience</h6>                                  
                                        <p class="small text-secondary m-0" style="">
                                            Si vous avez des expériences, ajoutez les.
                                        </p>
                                      
        
                                    </div>
                                </div>                               
                            @endif

                            @foreach ($experiences as $experience)

                                <div class="col-12 col-md-6 p-2">
                                    <div class="p-2 border rounded">
                                        <div class="d-flex justify-content-between">
                                            <h6>{{$experience->position}} |      {{$experience->started}} - {{$experience->ended}}</h6>
                                            <a href="{{ route("remove.exp",["exp" => $experience->id, "cv" => $experience->cv_id]) }}"><i class="bi bi-x-lg"></i></a>
                                        </div>
        
                                        <p class="small text-secondary m-0" style="">
                                            <i class="bi bi-buildings"></i> {{$experience->company}}
                                        </p>
                                        <p class="small text-secondary m-0" style="">
                                            {{$experience->desc}}
                                        </p>
        
                                    </div>
                                </div>
                            
                            @endforeach
       
                              
                        </div>
                        
                        <hr>
                        <div class="d-flex justify-content-between">
                            <h5 class=" text-secondary"><i class="bi bi-journal-bookmark"></i> Education</h5>
                            <div>
                                <a class="text-decoration-none" style="color:#563d7c;" data-bs-toggle="modal" data-bs-target="#educ">
                                    <i class="bi bi-file-earmark-plus"></i>
                                     Ajouter</a>
                            </div>
                        </div>
                                                    
                        <div class="d-flex flex-wrap">

                            @if (count($educations) == 0)
                                <div class="col-12 col-md-6 p-2">
                                    <div class="p-2 border rounded">
                                            <h6>Tu n'as pas aucune éducation</h6>                                  
                                        <p class="small text-secondary m-0" style="">
                                            Si vous avez des éducations, ajoutez les.
                                        </p>
                                      
        
                                    </div>
                                </div>                               
                            @endif
                            
                            @foreach ($educations as $education)
                            <div class="col-12 col-md-6 p-2">
                                <div class="p-2 border rounded">
                                    <div class="d-flex justify-content-between">
                                        <h6>{{ $education->degree }}</h6>
                                        <a href="{{ route("remove.edu",["edu" => $education->id, "cv" => $education->cv_id]) }}"><i class="bi bi-x-lg"></i></a>
                                    </div>
    
                                    <p class="small text-secondary m-0" style="">
                                        <i class="bi bi-book"></i> {{ $education->institut }}
                                    </p>
                                    <p class="small text-secondary m-0" style="">
                                        {{$education->started}} - {{$education->ended}}
                                    </p>
    
                                </div>
                            </div>
                            @endforeach
    
                        </div>
    
                        <hr>
                        <div class="d-flex justify-content-between">
                            <h5 class=" text-secondary"><i class="bi bi-boxes"></i> Compétences</h5>
                            <div> 
                                <a class="text-decoration-none" style="color:#563d7c;" data-bs-toggle="modal" data-bs-target="#skls"><i class="bi bi-file-earmark-plus"></i> Ajouter</a>
                            </div>
                        </div>
    
                        <div class="d-flex flex-wrap">

                            @if (count($competences) == 0)
                            <div class="col-12 p-2">
                                <div class="p-2 border rounded">
                                        <h6>Vous n'avez pas aucune compétence</h6>                             
                                </div>
                            </div>
                            @endif
 
                            @foreach ($competences as $competence)
                                <div class="col-12 p-2">
                                    <div class="p-2 border rounded">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h6><i class="bi bi-caret-right"></i> {{ $competence->name }}</h6>
                                            <a href="{{ route("remove.com",["com" => $competence->id, "cv" => $competence->cv_id]) }}"><i class="bi bi-x-lg"></i></a>
                                        </div>
                                    </div>
                                </div> 
                            @endforeach
                            


                        </div>
                        <div class="col-12 text-end">
                            <button type="submit" class="btn btn-primary"><i class="bi bi-floppy"></i> Sauvegarder </button>
                        </div>
                        <input type="hidden" value="{{$cv_id}}" name="id">
                    </form>
                </div>
             
            </div>
    
        </div>
    </div>
         


<!-- // EXPerience Modal -->

<div class="modal fade" id="exp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Ajouter une expérience</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
                                 
                <form class="row g-3" method="post" action="{{ route("add.exp",["cv" => $cv_id]) }}"> 
                    @csrf
                    <div class="col-md-12">
                        <label for="inputSociete" class="form-label">Société</label>
                        <input type="text" name="company" placeholder="Oracle..." class="form-control" id="inputSociete">
                    </div>
                    <div class="col-md-12">
                        <label for="inputPoste" class="form-label">Poste</label>
                        <input type="text" name="position" placeholder="Software Engineer..." class="form-control" id="inputPoste">
                    </div>
                    <div class="col-md-6">
                        <label for="inputDebut" class="form-label">Début</label>
                        <input type="text" name="started" placeholder="01/06/2022" class="form-control" id="inputDebut">
                    </div>
                    <div class="col-md-6">
                        <label for="inputFin" class="form-label">Fin</label>
                        <input type="text" name="ended" placeholder="01/08/2022" class="form-control" id="inputFin">
                    </div>
                    <div class="col-md-12">
                        <label for="inputDescription" class="form-label">Description</label>
                        <textarea class="form-control" name="desc" id="inputDescription" rows="3"></textarea><br>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </div>
                </form>
                                                                                                                          
        </div>                               
      </div>
    </div>
  </div>
<!-- //Modal -->  


<!-- Education Modal -->
<div class="modal fade" id="educ" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Ajouter une éducation</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            
                <form class="row g-3" action="{{ route("add.edu",["cv" => $cv_id]) }}" method="post">
                    @csrf
                    <div class="col-md-12">
                    <label for="inputInstitut" class="form-label">Institut</label>
                    <input type="text" name="institut" class="form-control" id="inputInstitut">
                    </div>
                    <div class="col-md-12">
                    <label for="inputDiplome" class="form-label">Diplome</label>
                    <input type="text" name="degree" class="form-control" id="inputDiplome">
                    </div>
                    <div class="col-md-6">
                    <label for="inputDebut2" class="form-label">Début</label>
                    <input type="text" name="started" class="form-control" id="inputDebut2">
                    </div>
                    <div class="col-md-6">
                    <label for="inputFin2" class="form-label">Fin</label>
                    <input type="text" name="ended" class="form-control" id="inputFin2">
                    </div>                                                      
                    <div class="col-12">
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                    </div>
                </form>
        </div>
    </div>
    </div>
</div>
<!-- Modal --> 




<!-- // Skills Modal -->

<div class="modal fade" id="skls" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Ajouter une compétence</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">                            
                <form method="post" action="{{ route("add.com",["cv" => $cv_id]) }}">  
                    @csrf                  
                    <div>
                        <label for="inputCompetences" class="form-label">Compétence</label>
                        <input type="text" name="name" class="form-control" id="inputCompetences"><br>
                    </div>                  
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </div>
                </form>                                                                                                                       
        </div>                               
      </div>
    </div>
  </div>
<!-- //Modal -->  




@endsection




</x-master>