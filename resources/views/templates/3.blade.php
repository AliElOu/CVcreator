<x-resume style="">
  @section("main")
  <div class="header">
    <div class="full-name">
      <span class="first-name">{{$cv->fullname}}</span> 
    </div>
    <div class="contact-info">
      <span class="email">Email: </span>
      <span class="email-val">{{$cv->Email}}</span>
      <span class="separator"></span>
      <span class="phone">Phone: </span>
      <span class="phone-val">{{$cv->mob_num}}</span>
    </div>
    
    <div class="about">
      <span class="desc">
        {{$cv->objectif}}
      </span>
    </div>
  </div>
   <div class="details">
    <div class="section">
      <div class="section__title">Experience</div>
      <div class="section__list">
        @foreach ($experiences as $experience)      
        <div class="section__list-item">
          <div class="left">
            <div class="name">{{$experience->position}}</div>
            <div class="addr">{{$experience->company}}</div>
            <div class="duration">{{$experience->started}} - {{$experience->ended}}</div>
          </div>
          <div class="right">
            <div class="name">Description :</div>
            <div class="desc">{{$experience->desc}}</div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <div class="section">
      <div class="section__title">Education</div>
      <div class="section__list">
        @foreach ($educations as $education)
          <div class="section__list-item">
            <div class="left">
              <div class="name">{{$education->institut}}</div>
              <div class="addr">{{$education->degree}}</div>
              <div class="duration">{{$education->started}} - {{$education->ended}}</div>
            </div>
          </div>
        @endforeach
  
      </div>
      
  </div>
     
     <div class="section">
       <div class="section__title">Skills</div>
       <div class="skills">
        @foreach ($competences as $competence)
            <div class="skills__item">
              <div class="left">
                <div class="name">
                {{$competence->name}}
                </div>
              </div>
            </div> 
        @endforeach   
       </div>
       <div class="section">
        <div class="section__title">
         Languages
          </div>
          <div class="section__list">
            <div class="section__list-item">
             {{$cv->languages}}
             </div>
          </div>
        </div>
       <div class="section">
        <div class="section__title">
          Interests
          </div>
          <div class="section__list">
            <div class="section__list-item">
             {{$cv->hobbies}}
             </div>
          </div>
        </div>
            
     </div>
  </div>
  @endsection
</x-resume>