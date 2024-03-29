<x-master title="templates" style="{{ asset('styles/templates.css') }}">


    @section("main")
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <header class = "header bg-bright" id = "header">
        <div class = "container">
            <div class = "header-content text-center">
                <h6 class = "text-uppercase text-blue-dark fs-14 fw-6 ls-1">Créateur de CV en ligne</h6>
                <h1 class="display-5">Sélectionnez votre Modèle</h1>
                <p class = "text-dark fs-18">Pour commencer, choisissez un des modèles de CV ci-dessous.</p> <br>
            </div> 
            <hr> 

        
            <table width="100%">
                <td align="right"><img class="customPrevBtn" src="{{ asset('images/img1.png') }}"></td>
                <td align="center">
                    <div class="wrapper">
                    <div class="carousel owl-carousel">
                        @foreach ($models as $model)    
                            <div id="myCard" class="card" onmouseOver="ajouterBordure(this)" onmouseOut="supprimerBordure(this)">
                                 <img src="{{ asset("images/$model->name") }}"> 
                                 <a id="selectButton" href="{{ route("template.create",$model->id) }}" class="btn btn-primary">Sélectionner</a>
                            </div>
                        @endforeach
                    </div>
                </div>
                </td>
                <td align="left"><img class="customNextBtn" src="{{ asset("images/img2.png") }}"></td>
            </table>
        
















            
    </header>

    
        <script src="{{ asset('scripts/templates.js') }}"></script>  

    @endsection

</x-master>