<x-master title="Home Page" style="{{ asset('styles/home.css') }}">
    
    @section('main')
        <header class = "header bg-bright" id = "header">
            <div class = "container">
                <div class = "header-content text-center">
                    <h6 class = "text-uppercase text-blue-dark fs-14 fw-6 ls-1">Créateur de CV en ligne</h6>
                    <h1 class = "lg-title">Seulement 2% des candidatures ont un acceptable CV. Soyez dans le top 2%</h1>
                    <p class = "text-dark fs-18">Utilisez des modèles de CV professionnels qui suivent exactement les « règles de CV » recherchées par les employeurs. Facile à utiliser et réalisé en quelques minutes - utilisez le 100% gratuitement !</p>
                    <a href = "{{ route("templates.show") }}" class = "btn btn-outline-primary text-uppercase">Créer mon CV</a>
                    <img src = "{{asset("images/dublin-resume-templates.avif")}}">
                </div>  
            </div>
        </header>

        <div class="section-one">
            <div class="container">
                <div class = "section-one-content">
                    <div class="section-one-l">
                        <img src = "{{ asset("images/visual-0c7080adf17f1f207276f613447c924f667dab34b7ac415cd7ef653172defd0b.svg") }}">
                    </div>
                    <div class = "section-one-r text-center">
                        <h2 class = "lg-title">Utilisez le meilleur créateur de CV en ligne!</h2>
                        <p class = "text">Obtenir l’emploi de vos rêves peut sembler une tâche impossible. Nous sommes ici pour changer cela. Donnez-vous un réel avantage avec le meilleur créateur de CV en ligne : créé par des experts, enrichi de données, approuvé par plusieurs professionnels.</p>
                        <div class = "btn-group">
                            <a href = "#" class = "btn btn-primary text-uppercase">Créer mon cv</a>
                            <a href = "#" class = "btn btn-secondary text-uppercase">voir une video</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    @endsection
</x-master>
