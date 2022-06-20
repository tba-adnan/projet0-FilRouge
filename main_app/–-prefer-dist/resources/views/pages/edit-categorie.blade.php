@extends('pages.principal')
@section('content')


    <!-- PAGE CONTAINER-->

    <!-- HEADER DESKTOP-->


    <!-- MAIN CONTENT-->
    <div class="main-content">
        <h1 class="titre text-center ">
            <strong>MODIFIER LE CATEGORIE</strong>
        </h1>
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">

                            <!-- form -->
                            <div class="card-header">Modifier</div>
                            <div class="card-body ">
                                <div class="row tm-edit-product-row  ">
                                    <div class="col-xl-6 col-lg-12 col-md-12">

                                        <!-- start modifier -->
                                        @forelse ($medic as $value)
                                        <form method="POST" action="{{route('afficher-categorie.update',$value->id_medic)}}" enctype='multipart/form-data'                               
                                            class="tm-edit-product-form">
                                            @method("put")
                                             @csrf
                                          
                                                
                                           
                                            <div class="form-group mb-3">
                                                <input type="hidden"name="id" value="{{$value->id_medic}}">
                                                <label for="">Nom</label>
                                                <input id="name" name="nom_medic" type="text"
                                                    class="form-control validate" required
                                                    value="{{$value->nom_medic}}">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">Prix</label>
                                                <input id="name" name="prix_medic" type="text"
                                                    class="form-control validate" required
                                                    value="{{$value->prix_medic}}">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">Rom</label>
                                                <input id="name" name="rom_medic" type="text"
                                                    class="form-control validate" required
                                                    value="{{$value->rom_medic}}">
                                            </div>
                                           
            
                                            
                                            

                                    </div>
                                    
                                    <div class="col-12">
                                        <button type="submit"
                                            class="btn btn-primary btn-block text-uppercase">Ajouter</button>
                                    </div>
                                    @empty
                                                
                                    @endforelse
                                    </form>
                                </div>
                            </div>





                        </div>

                    </div>
                </div>
                <!-- fin -->
                <div class="col-md-12">

                </div>
            </div>
        </div>
    </div>


@endsection