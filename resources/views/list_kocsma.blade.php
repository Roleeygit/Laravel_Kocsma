<a href="/uj-ital"><button>Új</button></a>

<table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Név</th>
        <th>Ár</th>
        <th>Tipus</th>
      </tr>
    </thead>
    <tbody>
      @foreach( $kocsmas as $kocsma )
         <tr>
           <td>{{ $kocsma->id }}</td>
           <td>{{ $kocsma->nev }}</td>
           <td>{{ $kocsma->ar }}</td>
           <td>{{ $kocsma->type->type }}</td>
         </tr>
      @endforeach
    </tbody>
  </table>
