<x-layout>
  <section class="h-100 bg-dark">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <div class="card card-registration my-4">
            <div class="row g-0">
              <div class="col-xl-6 d-none d-xl-block">
                <img src="https://picsum.photos/700"
                alt="Sample photo" class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
              </div>
              <div class="col-xl-6">
                <div class="card-body p-md-5 text-black">
                  <h3 class="mb-5 text-uppercase colorC">Registrati </h3>
                  <form method="POST" action="/register">
                    @csrf                    
                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input name="name" type="text" id="name" class="form-control form-control-lg" />
                          <label class="form-label" for="name">Username</label>
                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <input name="email" type="email" id="email" class="form-control form-control-lg" />
                          <label class="form-label" for="email">Email</label>
                        </div>
                      </div>
                    </div>
                    
                    <div class="form-outline mb-4">
                      <input name="password" type="password" id="password" class="form-control form-control-lg" />
                      <label class="form-label" for="password">Password</label>
                    </div>
                    <div class="form-outline mb-4">
                      <input name="password_confirmation" type="password" id="password_confirmation" class="form-control form-control-lg" />
                      <label class="form-label" for="password_confirmation">Conferma Password</label>
                    </div>
                    
                    {{-- <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
                      
                      <h6 class="mb-0 me-4">Venditore o revisore</h6>
                      
                      <div class="form-check form-check-inline mb-0 me-4">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender"
                        value="option1" />
                        <label class="form-check-label" for="femaleGender">Female</label>
                      </div>
                      
                      <div class="form-check form-check-inline mb-0 me-4">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender"
                        value="option2" />
                        <label class="form-check-label" for="maleGender">Male</label>
                      </div>
                      
                      <div class="form-check form-check-inline mb-0">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender"
                        value="option3" />
                        <label class="form-check-label" for="otherGender">Other</label>
                      </div>
                      
                    </div> --}}
                    
                    {{-- <div class="row">
                      <div class="col-md-6 mb-4">
                        
                        <select class="select">
                          <option value="1">State</option>
                          <option value="2">Option 1</option>
                          <option value="3">Option 2</option>
                          <option value="4">Option 3</option>
                        </select>
                        
                      </div>
                      <div class="col-md-6 mb-4">
                        
                        <select class="select">
                          <option value="1">City</option>
                          <option value="2">Option 1</option>
                          <option value="3">Option 2</option>
                          <option value="4">Option 3</option>
                        </select>
                        
                      </div>
                    </div> --}}
                    
                    {{-- <div class="form-outline mb-4">
                      <input type="text" id="form3Example9" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example9">DOB</label>
                    </div>
                    
                    <div class="form-outline mb-4">
                      <input type="text" id="form3Example90" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example90">Pincode</label>
                    </div>
                    
                    <div class="form-outline mb-4">
                      <input type="text" id="form3Example99" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example99">Course</label>
                    </div>
                    
                    <div class="form-outline mb-4">
                      <input type="text" id="form3Example97" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example97">Email ID</label>
                    </div> --}}
                    
                    <div class="d-flex justify-content-end pt-3">
                      {{-- <button type="button" class="btn btn-light btn-lg">Reset all</button> --}}
                      <button type="submit" class="btn bgA btn-lg ms-2">Invia</button>
                    </div>

                  </form>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-layout>