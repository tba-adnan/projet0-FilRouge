@extends('pages.principal')
@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css"
        integrity="sha512-YzwGgFdO1NQw1CZkPoGyRkEnUTxPSbGWXvGiXrWk8IeSqdyci0dEDYdLLjMxq1zCoU0QBa4kHAFiRhUL3z2bow=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" href="{{URL::asset('eir-assets/images/costum-images/Logo/favicon.png'); }} " />
</head>

</body>

</html>
<div class="container-fluid px-4">
    <h1 class="mt-4 bi bi-server"> Données actuelles : </h1>
    <ol class="breadcrumb mb-4">
        <!-- <li class="breadcrumb-item"><a href="{{route('afficher-categorie.create')}}">Ajouter categorie</a></li> -->
        <li class="breadcrumb-item active">Tables</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <div class="spinner-grow" role="status">
                <span class="sr-only">Loading...</span>
            </div>
            <!--  -->
        </div>
        <div class="card-body col-lg-10">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Nom : </th>
                        <th>Prix : </th>
                        <th>Remboursement : </th>
                        <th>Action : </th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($medic as $value)



                    <tr>
                        <td>{{$value->nom_medic}}</td>
                        <td>{{$value->prix_medic}} dh.</td>
                        <td>{{$value->rom_medic}} dh.</td>
                        <td style="width: 6%">
                            {{-- <a href=""><i class="item-action fa fa-eye" data-toggle="modal"
                                        data-target="#labelModal"></i></a> --}}
                            <br>
                            <a href="{{route('afficher-categorie.edit',$value->id_medic)}}"><i
                                    class="item-action btn btn-warning" data-toggle="modal"
                                    data-target="#labelModal">Modifier</i></a>

                            <form action="{{route('afficher-categorie.destroy',$value->id_medic)}}" method="POST">
                                @csrf
                                @method("DELETE")
                                <i class="item-action btn btn-danger " data-toggle="modal"
                                    data-target="#deleteItemModal">Supprimer</i>

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
