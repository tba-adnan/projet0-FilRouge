<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<a href="/index"><button >ajouter</button></a>

<table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">message</th>
        <th scope="col">action</th>
    </tr>
    </thead>
    <tbody>
        @forelse ($person as $value)
      <tr>
            
  
        <td>{{$value->id}}</td>
        <td>{{$value->name}}</td>
        <td>{{$value->email}}</td>
        <td>{{$value->message}}</td>
        <td>
           <a href="/suprimer/{{$value->id}}"> <button>suprimer</button></a>
           <a href="/modifier/{{$value->id}}"> <button>modifier</button></a></td>

        @empty
        @endforelse
      </tr>
      
    </tbody>
  </table>
