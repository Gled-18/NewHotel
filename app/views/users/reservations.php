<?php require APPROOT . '/views/inc/header.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Receptionist</title>

  <!-- bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

  <!-- skript qe ngarkon te dhenat ne layout -->
  <script>
    // kur ngarkohet htmlja
    $(document).ready(function() {

      // kur behet submit forma me id formTest
      $("#formTest").submit(function(event) {
        console.log("clicked submit");
        event.preventDefault();

        // merr vlerat per datat
        var startDate = $("#datepicker").val();
        var endDate = $("#datepicker2").val();

        // coji me post te roomList.php
        $.post("roomList.php", {
          start: startDate,
          end: endDate
        }, function(data, status) {
          console.log("Response: " + data);

          // responsi kthen liste me dhoma 
          // loop tgjithave e shfaqen me layoutin qe duhet

          let responseData = JSON.parse(data);

          $.each(responseData, function(i, item) {

            $("#mainContent").append(

              "<div class= \"col\">" +
              "<div class=\"card rounded border border-primary text-center\" style=\"width: 15rem;\">" +
              "<div class=\"card-body\">" +
              "<h5 class=\"card-title\">" + item.id + "</h5>" +
              "<p class=\"card-text\">" + item.price + "</p>" +
              "<button id=\"btn" + i + "\" onClick=\"" + setModalData(responseData, i) + "\" type=\"button\" class=\"btn btn-info btn-lg\" data-toggle=\"modal\"data-target=\"#myModal\">Prenoto!</button>" +

              "</div>" +
              "</div>" +
              "</div>"

            )

          });

        }).fail(function(xhr, status, error) {
          alert(xhr.responseText);
        });;

      });

    });
  </script>

  <script>
    function setModalData(data, index) {

      // var start = document.getElementById('datepicker').value;
      // var end = document.getElementById('datepicker2').value;

      var start = $("#datepicker").val();
      var end = $("#datepicker2").val();

      // set vlerat tek modali
      $("#datepickerModal").val(start);
      $("#datepickerModal2").val(end);

      startDate = new Date(start);
      endDate = new Date(end);

      // diferenca ne data
      const diffTime = Math.abs(endDate - startDate);
      const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));

      var priceRoom = data[index].price;


      // ERROR KREJT MODALET MARRIN VLEREN E SETUR NE DHOMEN E FUNDIT
      $("#shumaTot").text(diffDays * priceRoom + " ALL");

      // $('#shumaTot').on('show.bs.modal', function (e) {
      //     $(this).find('.modal-body').text(diffDays * priceRoom + " ALL");
      // });


    }
  </script>


</head>

<body style="background: #E7E7E7;">
  <!-- ket ngjyren ma sugjeroj bjorni :P -->

  <?php require APPROOT . '/views/inc/navbar.php'; ?>

  <!-- kjo forma do ktheje liste me dhoma n php -->
  <form id="formTest" method="post">
    <div class="d-flex flex-row flex-sm-column flex-md-row justify-content-center my-">
      <label for="datepicker" class="mx-5">From: </label>
      <input id="datepicker" width="270" type="date" />
      <label for="datepicker" class="mx-5">To: </label>
      <input id="datepicker2" width="270" type="date" />
      <button id="searchBtn" class="btn btn-primary " type="submit" name="submit">Search</button>
    </div>
  </form>

  <main>

    <div id="mainContent" class="row row-cols-2 row-cols-sm-2 m-5">

      <!-- Modal ; popup-->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Book Room</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body container-fluid">

              <form action="" method="POST">
                <div class="container">
                  <div class="row ">
                    <label for="datepickerModal" class="col">From: </label>
                    <input id="datepickerModal" class="mx-2 col" onchange="" width="270" type="date" />
                  </div>
                  <div class="row ">
                    <label for="datepickerModal2" class="col">To: </label>
                    <input id="datepickerModal2" class="mx-2 col" onchange="" width="270" type="date" />
                  </div>

                  <div class="row">
                    <label for="clientName" class="col">Name: </label>
                    <input id="clientName" class="col mx-2" width="270" type="text" />
                  </div>
                  <div class="row">

                    <label for="clientSurname" class="col">Last Name: </label>
                    <input id="clientSurname" class="col mx-2" width="270" type="text" />
                  </div>
                  <div class="row">
                    <label for="clientEmail" class="col">Email: </label>
                    <input id="clientEmail" class="col mx-2" width="270" type="text" />
                  </div>
                  <br>
                  <div class="row">
                    <label class="col" for="nrAdults">Adults:</label>
                    <input class="col" type="number" id="nrAdults" onchange="" name="nrAdults" min="1" max="5">
                  </div>

                  <div class="row">
                    <label class="col" for="nrKids">Kids:</label>
                    <input class="col" type="number" id="nrKids" onchange="" name="nrKids" min="1" max="5">
                  </div>
                  <br>
                  <div class="row">
                    <label class="col" for="mealchb">Meal Included?:</label>
                    <input class="col" type="checkbox" onchange="addMeal();" id="mealchb" name="meal">
                  </div>
                  <hr>
                  <div class="row">
                    <label class="col" for="Total">Total:</label>
                    <h3 id="shumaTot">xxxxxxxxx $</h3>
                  </div>

                </div>

              </form>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </main>

  <!-- rrit cmimin nqs meal checked -->
  <script>
    function addMeal() {

      var shuma = parseFloat(document.getElementById('shumaTot').textContent.replace('ALL ', ''));


      if (document.getElementById('mealchb').checked) {

        shuma += 20;
      } else {
        shuma -= 20;

      }

      $("shumaTot").val(shuma + "ALL")
      document.getElementById("shumaTot").innerHTML = shuma + "ALL";
    }
  </script>


  <!-- te bootstrapit -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



  <?php require APPROOT . '/views/inc/footer.php'; ?>
</body>



</html>