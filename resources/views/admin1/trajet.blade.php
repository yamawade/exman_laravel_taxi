@extends('layoutsAdmin.admin1')

@section('content')
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <div class="card col-md-8 offset-2 mt-3">
        <form action="/storeTrajet" method="post">
            @csrf
            <div class="card-header text-center bg-dark text-white">Ajout Trajet</div>
            <div class="form-group">
                <label for="" >REGION</label>
                <select name="region_id" id="" class="form-control" required>
                    <option value="">----Faites Votre Choix----</option>
                    @foreach ($regions as $region)
                        <option value="{{$region->id}}">{{ $region->nomRegion }}</option>
                    @endforeach
                </select>
                <label for="">Itinéraire</label>
                <input type="text" class="form-control" name="nomTrajet">
                <label for="">Tarifs</label>
                <input type="number" min="1000" class="form-control" name="tarif">
            </div>
            <button type="submit" class="btn btn-dark offset-5 mt-2">Enregistrer</button>
        </form>
    <div>
@endsection

