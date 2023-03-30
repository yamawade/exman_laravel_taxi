@extends('layoutsAdmin.admin1')

@section('content')
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <div class="card col-md-8 offset-2 mt-3">
        <form action="/store" method="post">
            @csrf
            <div class="card-header text-center bg-dark text-white">Ajout Region</div>
            <div class="form-group">
                <label for="" >REGION</label>
                <select name="nomRegion" id="" class="form-control" required>
                    <option value="">----Faites Votre Choix----</option>
                    <option value="Dakar">Dakar</option>
                    <option value="Thies">Thies</option>
                    <option value="StLouis">StLouis</option>
                    <option value="Tamba">Tamba</option>
                    <option value="Kaolack">Kaolack</option>
                    <option value="Fatick">Fatick</option>
                    <option value="Kédougou">Kédougou</option>
                </select>
            </div>
            <button type="submit" class="btn btn-dark offset-5 mt-2">Enregistrer</button>
        </form>
    <div>
    <br>
    <br>
    <br>
    <br>
    <table class="table table-bordered pt-2">
        <div class="card-header text-center bg-info text-white">LISTES DES REGIONS</div>
        <tr>
            <th>#</th>
            <th>NOM REGION</th>
        </tr>
        @foreach($region as $r)
            <tr>
                <td>{{$r->id}}</td>
                <td>{{$r->nomRegion}}</td>
                
            </tr>
        @endforeach
    </table>
@endsection

