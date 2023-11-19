<x-master title="Home Page" style="{{ asset('styles/home.css') }}">
    
    @section('main')
        <header class = "header bg-bright" id = "header">
            <div class = "container">
                <div class = "header-content text-center">
                    <h6 class = "text-uppercase text-blue-dark fs-14 fw-6 ls-1">online resume builder</h6>
                    <h1 class = "lg-title">Only 2% of resumes make it pas the first round. Be in the top 2%</h1>
                    <p class = "text-dark fs-18">Use professional field-tested resume templates that follow that exact 'resume rules' employers look for. Easy to use and done within minutes - try now for free!</p>
                    <a href = "#" class = "btn btn-outline-primary text-uppercase">create my resume</a>
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
                        <h2 class = "lg-title">Use the best resume maker as your guide!</h2>
                        <p class = "text">Getting that dream job can seem like an impossible task. We're here to change that. Give yourself a real advantage with the best online resume maker: created by experts, imporved by data, trusted by millions of professionals.</p>
                        <div class = "btn-group">
                            <a href = "#" class = "btn btn-primary text-uppercase">create my resume</a>
                            <a href = "#" class = "btn btn-secondary text-uppercase">watch video</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    @endsection
</x-master>
