@extends('pages.principal')
@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4">Gestions des galeries</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('afficher-galerie.create')}}">Ajouter galeries</a></li>
        <li class="breadcrumb-item active">Tables</li>
    </ol>
    
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Example
        </div>
        <div class="card-body col-lg-10">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>PHOTO</th>
                        <th>NAME ENDROIT</th>
                        <th >ACTION</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($galerie as $value)
                    
                

                    <tr>
                        <td style="width: 20%"><div class="uImg"><img src="{{asset('assets/galerie')}}/{{$value->photos}}" alt="" style="width: 100px"></div></td>
                        <td >{{$value->nom_place}}</td>
                        <td >{{$value->photos}}</td>
                        <td style="width: 6%">
                                {{-- <a href=""><i class="item-action fa fa-eye" data-toggle="modal"
                                        data-target="#labelModal"></i></a> --}}
                                <a href="{{route('afficher-galerie.edit',$value->id_galerie)}}"><i class="item-action fa fa-edit" data-toggle="modal"
                                        data-target="#labelModal"></i></a>
                               
                               <form action="{{route('afficher-galerie.destroy',$value->id_galerie)}}" method="POST">
                                      @csrf
                                @method("DELETE")
                                <button> <i class="item-action fa fa-trash" data-toggle="modal"
                                        data-target="#deleteItemModal"></i></button>
                            
                                    </form>
                            
                        </td>
                    </tr>
                    @empty
                    
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection