@extends('layoutsAdmin.admin1')

@section('content')

<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<h2 class="page-title offset-6">UTILISATEUR</h2>	

<br>
<br>
 <div class="container bg-warning">
    <table border="1" class="table table-striped">
        <tr>
            <th> ID # </th>
            <th> NAME </th>
            <th> Email </th>
            <th> TYPE UTILISATEUR </th>
            <th> created_at </th>
            <th> updated_at </th>
        </tr>
        @forelse ($User as $key=>$data)
        <tr>
            <td> {{$key+1}} </td>
            <td> {{$data->name}} </td>
            <td> {{$data->email}} </td>
            <td> {{$data->role}}  </td>
            <td> {{$data->created_at}}</td>
            <td> {{$data->updated_at}}</td>

        </tr>
        @empty
            aucune donnée trouvée
        @endforelse
    </table>
    </div>

    </div>

    
</div>

@endsection

