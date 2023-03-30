<x-app-layout>
    
    
    <link rel="stylesheet" href="taxi-master/css/linearicons.css">
    <link rel="stylesheet" href="taxi-master/css/font-awesome.min.css">
    <link rel="stylesheet" href="taxi-master/css/bootstrap.css">
    <link rel="stylesheet" href="taxi-master/css/magnific-popup.css">
    <link rel="stylesheet" href="taxi-master/css/nice-select.css">							
    <link rel="stylesheet" href="taxi-master/css/animate.min.css">
    <link rel="stylesheet" href="taxi-master/css/jquery-ui.css">			
    <link rel="stylesheet" href="taxi-master/css/main.css">
   
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>	
        <div class="container">
            <div class="row fullscreen d-flex align-items-center justify-content-between">
                <div class="banner-content col-lg-6 col-md-6 ">
                    <h6 class="text-white ">Vous avez d'un taxi? COMMANDEZ!!!!</h6>
                    <p class="pt-10 pb-10 text-white">
                    Que vous aimiez les escapades en ville ou les vacances prolongées au soleil, 
                    vous pouvez toujours améliorer vos expériences de voyage.
                    </p>
                    <a href="#" class="primary-btn ">E-Taxibokko votre plateforme numéro 1 de réservation de taxi en ligne</a>
                </div>
                <div class="col-lg-6  col-md-6 header-right" >
                    <h4 class="pb-30">Commandez Un Taxi</h4>
                    <form class="form" action="{{ url('clients') }}" method="post">
                        @csrf
                        <div>
                            <input class="form-control txt-field bg-white" type="text" name="telephone" placeholder="Numero Telephone" required>
                        </div>										    
                        <div>
                            <input type="date" name="date" id=""class="form-control txt-field bg-white" required>
                        </div>
                        <label for="region" style="margin-right: 400px; color:black;">Région </label>
                        <select id="region" class="form-control txt-field bg-white" name="region">
                            <option value="">Veuillez Choisir une Région</option>
                            @foreach($regions as $region)
                                <option value="{{ $region->id }}">{{ $region->nomRegion }}</option>
                            @endforeach
                        </select>
                        <label for="" style="margin-right: 400px; color:black;">Trajet</label>
                        <select id="trajet" class="form-control txt-field bg-white" name="trajet" disabled>
                        </select>
                        
                        <label for="" style="margin-right: 400px; color:black;">Tarifs</label>
                        <input type="number" class="form-control txt-field bg-white" id="tarif" name="tarif" disabled>
                        <br>
                        <div class="form-group">
                            <button class="btn btn-default btn-lg btn-block text-center text-uppercase" type="submit">Faire une réservation</button>
                        </div>
                    </form>
                </div>											
            </div>
        </div>					
    </section>
    <!-- <script type="text/javascript" src="https://form.jotform.com/jsform/230874572446564"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
// Fonction pour remplir le select avec les itinéraires
function remplirSelectItineraires(regionId) {
    $.ajax({
        url: '/trajet/' + regionId,
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $('#trajet').empty(); // Vider le select avant de le remplir
            $.each(data, function(index, trajet) {
                $('#trajet').append('<option value="' + trajet.id + '">' + trajet.nomTrajet + '</option>');
            });
            var trajetId = $('#trajet').val();
            // Activer le select après avoir fini de le remplir
            $.ajax({
                url: '/getTarif/' + trajetId,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    $('#tarif').val(data.tarif);
                    $('#tarif').prop('disabled', true);
                },
                error: function() {
                    console.log('Une erreur s\'est produite lors de la récupération du tarif de l\'itinéraire.');
            }
            
    });
            $('#trajet').prop('disabled', false);
        },
        error: function() {
            console.log('Une erreur s\'est produite lors de la récupération des itinéraires.');
        }
    });
}


// Appeler la fonction remplirSelecttrajets lorsque la région est sélectionnée
$('#region').change(function() {
    var regionId = $(this).val();
    remplirSelectItineraires(regionId);
});

</script>
</x-app-layout>


