
<x-resume style="{{ asset('styles/2.css') }}">
  @section("main")  
  <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>

            <div class="row border-bottom pb-3">
              <div class="col border-end">  
                <h2><strong><span class="pb-3 border-bottom">{{strtoupper($cv->fullname) }}</span></strong></h2>
                <div class="row mt-3 pt-1">
                    <p>
                    <div class="col-6">
                        <i class="bi bi-telephone me-1"></i>{{$cv->mob_num }}
                    </div>
                    <div class="col-6">
                        <i class="bi bi-calendar-date me-1"></i>{{$cv->birth_date }}
                    </div>
                    </p>
                    <div class="col-12">
                        <p><i class="bi bi-envelope me-1"></i>{{$cv->Email }}</p>
                    </div>
                    <div class="col-12">
                        <p><i class="bi bi-pin-map me-1"></i>{{$cv->address }}</p>
                    </div>
                </div>  
              </div>  
              <div class="col ps-4">
                <h3>PROFILE</h3>
                <p>{{$cv->objectif}}</p>  
              </div>
            </div>
            <div class="row pt-4">
                <div class="col-3 border-end">
                    <div class="column  pe-3">
                        <div class="col border-bottom">
                            <h5>SKILLS</h5>
                            <p>
                            @foreach ($competences as $competence)
                            {{$competence->name}} <br> 
                            @endforeach
                            </p>
                        </div>
                        <div class="col border-bottom mt-3 pb-3">
                            <h5>LANGUAGES</h5>
                            @foreach ($languages as $language)
                            {{$language}} <br>
                        @endforeach
                        </div>
                        <div class="col mt-3">
                            <h5>HOBBIES</h5>
                            @foreach ($hobbies as $hobbie)
                                {{$hobbie}} <br>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
                <div class="col-9">
                    <div class="column ps-3">
                        <div class="col border-bottom">
                            <h5>PROFESSIONAL EXPERIENCES</h5>
                            <div class="column">
                                <ul>
                                    @foreach ($experiences as $experience)
                                        <!--Experience-->
                                        <div class="col">
                                                <div class="row">
                                                    <div class="col-5">
                                                    <li> <h6><strong>{{$experience->position}}</strong></h6></li>
                                                    </div>
                                                    <div class="col-7 align-items-start small-font">
                                                        <i>{{$experience->company}} </i> | {{$experience->started}} - {{$experience->ended}}
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="col">
                                            <p>{{$experience->desc}}</p>
                                        </div>
                                        <!--Experience-->  
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col pt-4">
                            <h5>EDUCATION</h5>
                            <div class="column">
                                <ul type="square">
                                    @foreach ($educations as $education)
                                        <!--Education-->
                                        <div class="col">
                                                       <li> <h6><strong>{{$education->degree}}</strong></h6></li>
                                                        <i>{{$education->institut}} </i> <br>
                                                        {{$education->started}} - {{$education->ended}}
                                        </div>
                                        <!--Education-->  
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
  @endsection
</x-resume>


