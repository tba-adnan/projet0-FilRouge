@extends('pages.principal')
@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4">Tableau des categorie</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('afficher-categorie.create')}}">Ajouter categorie</a></li>
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
                        <th>NOM</th>
                        <th>PRIX</th>
                        <th>ROM</th>
                        <th >ACTION</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($medic as $value)
                    
                

                    <tr>
                        <td >{{$value->nom_medic}}</td>
                        <td >{{$value->prix_medic}}</td>
                        <td >{{$value->rom_medic}}</td>
                        <td style="width: 6%">
                                {{-- <a href=""><i class="item-action fa fa-eye" data-toggle="modal"
                                        data-target="#labelModal"></i></a> --}}
                                <a href="{{route('afficher-categorie.edit',$value->id_medic)}}"><i class="item-action fa fa-edit" data-toggle="modal"
                                        data-target="#labelModal"></i></a>
                               
                               <form action="{{route('afficher-categorie.destroy',$value->id_medic)}}" method="POST">
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