<div>
<div class="card">

  <div class="card-header">
      <input wire:model="search"  class="form-control" placeholder="ingrese el nombre o correo del usuario"> 
  </div>
  
   @if($users->count())
      <div  class="card-body">
     <table  class="table table-striped">
     <thead>
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Email</th>
            <th colspan="3"></th>
        </tr>
     </thead>

     <tbody>
      @foreach ($users as $user)
         <tr>
             <td>{{$user->id}}</td>
             <td>{{$user->name}}</td>
             <td>{{$user->email}}</td>
             <td width="10px">
                <a class="btn btn-primary btn-sm" href="{{route('admin.users.edit', $user)}}">Editar</a>
                
            </td>
        </td>
            

         </tr>
       @endforeach 
     </tbody>
       </table>
    </div>
         <div class="card-footer">
      {{$users->links()}}
   </div>
   @else
    <div  class="card-body">
      <strong>No hay registros</strong>
    </div>
   @endif


</div>
