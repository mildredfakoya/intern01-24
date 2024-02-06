<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="case-based surveillance system, OECS, Globalfund, PAHO, CARPHA" />
  <meta name="author" content="mildred ayeesha fakoya, Mildred Ojomah" />
  <link href="css/styles.css" rel="stylesheet" />
  <link href="css/mystyles.css" rel="stylesheet" />
  <link href="css/w3css.css" rel="stylesheet" />
  <title>OECS.::.eCBS</title>
     <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />

<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
     <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
     <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
     <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="row justify-content-center">
      <div class="col-xl-9 col-md-9">
 <iframe width="560" height="315" src="https://www.youtube.com/embed/kxpm0H4u8LQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
 </iframe>
 <iframe width="560" height="315" src="https://www.youtube.com/embed/BA5E9wsEbPw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
 </iframe>
 </div>
 </div> <div class="row">
      <div class="col-xl-6 col-md-6">
          <div class="card bg-success mb-4">
            <h3 class='card-header bg-success'>Case-Based Surveillance System Overview</h3>
              <div class="card-body bg-white">
                 <p>The countries of the Organisation of Eastern Caribbean States (OECS) have strategically invested in strengthening case-based surveillance
                 of HIV/STI, TB and Viral Hepatitis in an attempt to improve the availability of good quality data in order to monitor the evolution of the epidemic
               and the effect of public health and clinical interventions in a sustainable manner. In addition, establishing the framework for
             case-based surveillance for HIV will ultimately allow for the use of this approach for other health conditions, especially the non-communicable diseases (NCDs).
             The result therefore is that CBS will result in significant strengthening of the information systems in the OECS allowing for better, evidence-informed decision at both the clinical and administrative levels.
           This advance integrated HIV/STI/TB case-based surveillance system collects the following data:<br/><br/>

               <i> 1. HIV/STI, TB and Viral Hepatitis Screening Information for Pregnant, Adult, Pediatric and Exposed Infants<br/><br/>
               2. Behavioral data of registered / screened clients<br/><br/>
               3. Prevention and Control data<br/><br/>
               4. ANC & PMTCT data (HIV, Syphilis and Viral Hepatitis)<br/><br/>
               5. Clinical Management of HIV/STI, TB and Viral Hepatitis<br/><br/>
               6. Central Medical Supplies and Pharmacy Stock and MEdical Dispense<br/><br/>
               7. Auto-reporting & data story telling using defined reporting indicators on the data collected<br/><br/></i>
               </p>
               <div class="card-footer d-flex align-items-center justify-content-between">
              </div>
          </div>
      </div>
    </div>

      <div class="col-xl-6 col-md-6">
          <div class="card bg-danger mb-4">
             <h3 class ="card-header bg-danger">Report HIV / Syphilis Self Test</h3>
              <div class="card-body bg-white">
                <form method ="post" id ="selftest" novalidate autocomplete="off">
                  <div class="form-floating mb-3">
                      <input name ='testdate' class="form-control" id="date" type="date"/>
                      <label for="date">Test Date (Required)</label>
                  </div>
                  <div class="form-floating mb-3">
                      <input name ='uniqueid' class="form-control" maxlength= "35" id="uniqueid" type="text"/>
                      <label for="uniqueid">Unique ID (optional)</label>
                  </div>

                  <div class="form-floating mb-3">
                      <input name ='serialno' class="form-control"
                      maxlength= "35" id="serialno" type="text"/>
                      <label for="serialno">Kit Serial Number (Required)</label>
                  </div>

                  <div class="form-floating mb-3">
                    <select name ="testtype" id ="type" class ="form-control">
                      <option selected >[select type]</option>
                      <option value ="mail-in-self-test">Mail in self-test</option>
                      <option value ="rapid-self-test">Rapid Self Test</option>
                     <option value ="unknown">Unknown</option>
                    </select>
                      <label for="type">Type of test (optional)</label>
                  </div>

                  <div class="form-floating mb-3">
                      <input name ='testkittype' maxlength= "35" class="form-control" id="kittype" type="text"/>
                      <label for="kittype">Type of test Kit (optional)</label>
                  </div>

                  <div class="form-floating mb-3">
                    <select name ="category" id ="category" class ="form-control">
                      <option selected >[select category]</option>
                      <option value ="hiv">HIV</option>
                      <option value ="syphilis">Syphilis</option>
                     <option value ="dual">Dual HIV & Syphils</option>
                    </select>
                      <label for="category">Category of test (required)</label>
                  </div>


                  <div class="form-floating mb-3">
                    <select name ="resulthiv" id ="resulthiv" class ="form-control">
                      <option selected >[select HIV result]</option>
                     <option value ="na">Not applicable</option>
                      <option value ="invalid">Invalid</option>
                      <option value ="negative">Negative</option>
                      <option value ="positive">Positive</option>
                    </select>

                      <label for="resulthiv">HIV Test result</label>
                  </div>

                  <div class="form-floating mb-3">
                    <select name ="resultsyphilis" id ="resultsyphilis"
                    class ="form-control">
                      <option selected >[select Syphilis result]</option>
                      <option value ="na">Not applicable</option>
                      <option value ="invalid">Invalid</option>
                      <option value ="negative">Negative</option>
                      <option value ="positive">Positive</option>
                    </select>

                      <label for="resultsyphilis">Syphilis Test result</label>
                  </div>

                  <div class="form-floating mb-3">
                    <textarea name ='comment' class="form-control" id="comment"></textarea>
                      <label for="comment">Comment (optional)</label>
                  </div>

                  <input type ='submit' name ='submit' value ="Report" class ='btn btn-danger'/>
                </form>

          </div>
      </div>
    </div>

</div>
</body>
</html>
