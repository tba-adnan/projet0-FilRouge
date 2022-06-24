@extends('pages.principal')
@section('content')


    <!-- PAGE CONTAINER-->

    <!-- HEADER DESKTOP-->


    <!-- MAIN CONTENT-->
    <div class="main-content">
        <h1 class="titre text-center ">
            <strong>MODIFIER GALERIE</strong>
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
                                        @forelse ($edit as $value)
    

                                        <form method="POST" action="{{route('afficher-galerie.update',$value->id_galerie)}}" enctype='multipart/form-data'
                                            class="tm-edit-product-form">
                                            @method('PUT')
                                            @csrf
                                           
                                            <div class="col-6">
                                                <label for="cc-exp" class="control-label mb-1">Nom place</label>
                                                <select name="id_place" id="select" class="form-control">                                    
                                                <option selected value="{{$value->id_place}}">{{$value->nom_place}}</option>
                                                
                                                @forelse ($place as $valuee)
                                                     
                                                    
                                                  <option value="{{$valuee->id_place}}">{{$valuee->nom_place}} </option>
              
              
                                                  @empty
                                                     
                                                  @endforelse
                                                </select>
                                                <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                            </div>
                                    
                                            
                                            
                                           

                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 ">
                                        <div class=" mx-auto">
                                            <img src="{{asset('assets/galerie')}}/{{$value->photos}}"
                                                class="tm-product-img-dummy mx-auto" alt="">
                                        </div>
                                        <div class="custom-file mt-3 mb-3">

                                            <input class="btn btn-primary btn-block mx-auto col-lg-6"
                                                 type="hidden" name="img" value="{{$value->photos}}"/>
                                            <input class="btn btn-primary btn-block mx-auto col-lg-6"
                                                 type="file" name="photo_place" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit"
                                            class="btn btn-primary btn-block text-uppercase">Ajouter</button>
                                    </div>
                                    </form>
                                    @empty
    
                                    @endforelse
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