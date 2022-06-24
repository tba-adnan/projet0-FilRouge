@extends('pages.principal')
@section('content')


    <!-- PAGE CONTAINER-->

    <!-- HEADER DESKTOP-->


    <!-- MAIN CONTENT-->
    <div class="main-content">
        <h1 class="titre text-center ">
            <strong>MODIFIER ENDROIT</strong>
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
    

                                        <form method="POST" action="{{route('afficher-endroit.update',$value->id_place)}}" enctype='multipart/form-data'
                                            class="tm-edit-product-form">
                                            @method('PUT')
                                            @csrf
                                            <div class="form-group mb-3">
                                                <input type="hidden" name="id" value="">
                                                <label for="name">Name
                                                </label>
                                                <input id="name" name="nom_place" type="text"
                                                    class="form-control validate" required
                                                    value="{{$value->nom_place}}">
                                            </div>
                                            <div class="col-6">
                                                <label for="cc-exp" class="control-label mb-1">Categorie</label>
                                                <select name="id_categorie" id="select" class="form-control">                                    
                                                <option selected value="{{$value->id_categorie}}">{{$value->nom_categorie}}</option>
                                                
                                                @forelse ($place as $valuee)
                                                     
                                                    
                                                  <option value="{{$valuee->id_categorie}}">{{$valuee->nom_categorie}} </option>
              
              
                                                  @empty
                                                     
                                                  @endforelse
                                                </select>
                                                <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                            </div>
                                    
                                            <div class="form-group mb-3">
                                                <label for="description">Description</label>
                                                <input class="form-control validate" rows="3" required
                                                    name="description_place" value="{{$value->description_place}}">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="description">Video</label>
                                                <input class="form-control validate" rows="3" required
                                                  type="url"  name="video_place" value="{{$value->video_place}}">
                                            </div>
                                           

                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-12 ">
                                        <div class=" mx-auto">
                                            <img src="{{asset('places')}}/{{$value->photo_place}}"
                                                class="tm-product-img-dummy mx-auto" alt="">
                                        </div>
                                        <div class="custom-file mt-3 mb-3">

                                            <input class="btn btn-primary btn-block mx-auto col-lg-6"
                                                 type="hidden" name="img" value="{{$value->photo_place}}"/>
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