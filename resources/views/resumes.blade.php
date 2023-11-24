<x-master title="Mes Cv" style="">

    @section("main")

        <div class="pt-5 pb-5" style="background-color: #EFF2F9;">
            <div class="container">
                <div class="bg-white rounded shadow p-2 " style="min-height:80vh">
                    <div class="d-flex justify-content-between border-bottom">
                        <h5>Mes CVs</h5>
                        <div>
                            <a style="color: #563d7c" href="{{ route("templates.show") }}" class="text-decoration-none"><i class="bi bi-file-earmark-plus"></i> Ajouter un nouveaux</a>
                        </div>
                    </div>
        
        
                    @if (count($cvs) == 0)
                        <div class="text-center py-3 border rounded mt-3" style="background-color: rgba(236, 236, 236, 0.56);">
                            <i class="bi bi-file-text"></i> No Resumes Available
                        </div>
                    @endif
                    
                    <div class="d-flex flex-wrap pt-3 ps-4">
                        @foreach ($cvs as $i => $cv)
                            <div class="col-12 col-md-4 p-2">
                                <div class="card" style="width: 21rem;">
                                    <img src="{{ asset("images/$cv->name") }}" class="card-img-top" alt="..." style="object-fit: cover; object-position: top; height: 13rem;">
                                    <div class="card-body">
                                      <h5 class="card-title">Votre cv #{{$i+1}}</h5>
                                      <p class="small text-secondary m-0" style="font-size:12px"><i class="bi bi-clock-history"></i>
                                        Dernier mise à jour {{$cv->updated_at}}
                                      </p>
                                      <p class="card-text"></p>
                                    </div>
                                    <div class="d-flex mb-2 ps-2 border-top pt-2">
                                        <a style="color: #563d7c" href="" class="btn text-decoration-none small"><i class="bi bi-file-text"></i> Ouvrir</a>
                                        <a style="color: #563d7c" href="{{ route("edit.cv",['id' => $cv->id]) }}" class="btn text-decoration-none small"><i class="bi bi-pencil-square"></i> Modifier</a>
                                        <a style="color: #563d7c" data-bs-toggle="modal" data-bs-target="#deleteModal" href="" class="btn text-decoration-none small"><i class="bi bi-trash2"></i> Supprimer</a>            
                                    </div>
                                  </div>
                            </div>
                                        <!-- Delete Modal -->

                                                    <div class="modal" tabindex="-1" id="deleteModal">
                                                        <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            <h5 class="modal-title">Confirmation de suppression</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                            <p>Etes vous sur de supprimer ce CV ?</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                                            <button type="button" onclick="window.location.href='{{ route('remove.cv',['cvId' => $cv->id]) }}'"  class="btn btn-primary">Confirmer</button>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>




            <!-- Modal -->
                        @endforeach
                    </div>
        
                </div>
            </div>
        </div>








    @endsection

</x-master>