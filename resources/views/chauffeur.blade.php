<x-app-layout>
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <section class="h-100 bg-warning">
    <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img src="taxi-master/img/taxi-img.png"
                alt="Sample photo" class="img-fluid"
                style="margin-top: 200px;" />
            </div>
            <div class="col-xl-6 bg-dark">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase offset-3 text-white">Devenez Chauffeur</h3>
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <label class="form-label text-white" for="form3Example1m">Nom</label>
                      <input type="text" id="form3Example1m" class="form-control form-control-lg" required/>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <label class="form-label text-white" for="form3Example1n">Prenom</label>
                      <input type="text" id="form3Example1n" class="form-control form-control-lg" required/>
                    </div>
                  </div>
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label text-white" for="form3Example8">Age</label>
                  <input type="number" min="24" max="55" id="form3Example8" class="form-control form-control-lg" required/>
                </div>

                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                  <h6 class="mb-0 me-4 text-white">Sexe </h6>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                      value="Femme" />
                    <label class="form-check-label text-white" for="femaleGender">Femme</label>
                  </div>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                      value="Homme" />
                    <label class="form-check-label text-white" for="maleGender">Homme</label>
                  </div>

                </div>

                <div class="form-outline mb-4">
                <label class="form-label text-white" for="form3Example97">Email</label>
                  <input type="email" id="form3Example97" class="form-control form-control-lg" required/>
                  
                </div>

               
                <button type="button" class="btn btn-warning btn-lg ms-2">Submit form</button>
               

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</x-app-layout>
