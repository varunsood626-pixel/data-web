<?php include('include/header.php'); ?>

<!--new-->

<!-- Banner Start -->

<section class="p-0 inner-banner">



  <div class="hidden-mobile">

      <img src="images/contact-datar-cancer-genetics-team.webp" class="img-fluid lazy" alt="contact-datar-cancer-genetics-team" width="1920" height="600" />

  </div>

  <div class="hidden-Desktop">

      <img src="images/contact-datar-team.webp" class="img-fluid lazy" alt="contact-datar-team" width="420" height="650" />

  </div>

  

  

  <div class="inner-caption caption-animation">

    <h2 class="mb-2 text-white">Contact Us</h2>

    <p class="text-white">Inquiries, Feedback and Complaint</p>

  </div>

</section>



<!-- Contact Form UI with retained values -->

<section class="contatcus">

  <form novalidate id="contactForm" method="post" action="contact-form-submit.php">

    <div class="container">

      <div class="row">

        <!-- Left Column -->

        <div class="col-sm-6 mb-5">

          <h3 class="mb-4">Please provide following information</h3>

          <h5>Are you a new or existing customer?</h5>



          <div class="form-check">

            <input class="form-check-input" type="radio" name="customer_type" id="newCustomer" value="new" <?= ($_POST['customer_type'] ?? '') == 'new' ? 'checked' : '' ?>>

            <label class="form-check-label" for="newCustomer">I am a new customer</label>

          </div>

          <div class="form-check">

            <input class="form-check-input" type="radio" name="customer_type" id="existingCustomer" value="existing" <?= ($_POST['customer_type'] ?? '') == 'existing' ? 'checked' : '' ?>>

            <label class="form-check-label" for="existingCustomer">I am an existing customer</label>

          </div>



          <h5 class="mt-4">What kind of test solution would you like to order?</h5>

          <?php $solution_selected = $_POST['solution'] ?? []; ?>

          <?php foreach (['Screening', 'Diagnostic', 'Therapy', 'Monitoring'] as $type): ?>

            <div class="form-check">

              <input class="form-check-input" type="checkbox" name="solution[]" value="<?= $type ?>" id="<?= $type ?>" <?= in_array($type, $solution_selected) ? 'checked' : '' ?>>

              <label class="form-check-label" for="<?= $type ?>"><?= ucfirst($type) ?></label>

            </div>

          <?php endforeach; ?>

        </div>



        <!-- Right Column -->

        <div class="col-sm-6">

          <h3 class="mb-4">Contact Info</h3>



          <div class="row">

            <div class="col-sm-6 mb-3">

              <input type="text" class="form-control" name="first_name" placeholder="First Name" required value="<?= htmlspecialchars($_POST['first_name'] ?? '') ?>">

            </div>

            <div class="col-sm-6 mb-3">

              <input type="text" class="form-control" name="last_name" placeholder="Last Name" required value="<?= htmlspecialchars($_POST['last_name'] ?? '') ?>">

            </div>

          </div>



          <h5 class="mt-3">Preferred Contact Method *</h5>

          <?php $method = $_POST['contact_method'] ?? 'email'; ?>

          <div class="preferred-contact">

            <div class="form-check">

              <input class="form-check-input" type="radio" name="contact_method" value="email" id="emailOption" <?= $method == 'email' ? 'checked' : '' ?>>

              <label class="form-check-label" for="emailOption">Email</label>

            </div>

            <div class="form-check">

              <input class="form-check-input" type="radio" name="contact_method" value="phone" id="phoneOption" <?= $method == 'phone' ? 'checked' : '' ?>>

              <label class="form-check-label" for="phoneOption">Phone</label>

            </div>



            <div id="emailDiv" class="desc mt-3 mb-4" style="<?= $method == 'email' ? '' : 'display:none;' ?>">

              <input type="email" class="form-control" name="email" placeholder="Email" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">

            </div>



            <div id="phoneDiv" class="desc mt-3 mb-4" style="<?= $method == 'phone' ? '' : 'display:none;' ?>">

              <input type="number" class="form-control" name="phone" placeholder="Phone" value="<?= htmlspecialchars($_POST['phone'] ?? '') ?>">

            </div>

          </div>



          <div class="mb-3">

            <textarea class="form-control" name="message" placeholder="Your Message" rows="4" required><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>

          </div>



          <button type="submit" name="submit" class="btn">Submit</button>



          <!-- Feedback -->

          

        </div>

      </div>



      <div class="row mt-5">

        <div class="col-sm-4">

          <h3 class="mb-2">Address 1</h3>

          <p class="mb-5">2, 4 Frederick Sanger Road, Surrey Research Park, Guildford, GU2 7YD, United Kingdom.</p>

          <h3 class="mb-2">Address 2</h3>

          <p class="mb-5">10 Medawar Road, Surrey Research Park, GU2 7AE.</p>

          <h3 class="mb-2">Address 3</h3>

          <p class="mb-5">F-8, D Road, MIDC Ambad, Nashik, Maharashtra 422010</p>

          

        </div>

        <div class="col-sm-8">

          <h3 class="mb-4">Find Us on Google Map</h3>

          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d319727.60762092116!2d-0.6122333697324182!3d51.23985340818918!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4875d0e035be7139%3A0x632d0439c869347!2sSurrey%20Research%20Park!5e0!3m2!1sen!2sus!4v1741060700352!5m2!1sen!2sus" title="myFrame" width="100%" height="400" style="border:0;" allowfullscreen></iframe>

        </div>

      </div>

    </div>

  </form>

</section>



<!-- JS Dependencies -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<script>

$(document).ready(function () {

  function validateRealtime() {

    $('.error-msg').remove();

    let valid = true;



    const firstName = $('input[name="first_name"]').val().trim();

    const lastName = $('input[name="last_name"]').val().trim();

    const message = $('textarea[name="message"]').val().trim();

    const email = $('input[name="email"]').val().trim();

    const phone = $('input[name="phone"]').val().trim();

    const contactMethod = $('input[name="contact_method"]:checked').val();

    const customerType = $('input[name="customer_type"]:checked').val();

    const solution = $('input[name="solution[]"]:checked');



    if (!firstName.match(/^[a-zA-Z\s]+$/)) {

      $('input[name="first_name"]').after('<div class="error-msg text-danger">Enter valid first name</div>');

      valid = false;

    }



    if (!lastName.match(/^[a-zA-Z\s]+$/)) {

      $('input[name="last_name"]').after('<div class="error-msg text-danger">Enter valid last name</div>');

      valid = false;

    }



    if (!contactMethod) {

      $('.preferred-contact').append('<div class="error-msg text-danger">Select contact method</div>');

      valid = false;

    } else {

      if (contactMethod === 'email' && !email.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/)) {

        $('input[name="email"]').after('<div class="error-msg text-danger">Enter valid email</div>');

        valid = false;

      }

      if (contactMethod === 'phone' && !phone.match(/^\d{10,15}$/)) {

        $('input[name="phone"]').after('<div class="error-msg text-danger">Enter valid phone (10–15 digits)</div>');

        valid = false;

      }

    }



    if (!customerType) {

      $('input[name="customer_type"]').last().parent().after('<div class="error-msg text-danger">Select customer type</div>');

      valid = false;

    }



    if (solution.length === 0) {

      $('input[name="solution[]"]').last().parent().after('<div class="error-msg text-danger">Select at least one solution</div>');

      valid = false;

    }



    if (message === '') {

      $('textarea[name="message"]').after('<div class="error-msg text-danger">Message cannot be empty</div>');

      valid = false;

    }



    return valid;

  }



 

$('input[name="contact_method"]').on('change', function () {

  if ($(this).val() === 'email') {

    $('#emailDiv').show();

    $('#phoneDiv').hide();

  } else {

    $('#emailDiv').hide();

    $('#phoneDiv').show();

  }

});



// Trigger only on selected one

$('input[name="contact_method"]:checked').trigger('change');



$('input, textarea, select').on('change', function () {

        validateRealtime();

    });



  $('#contactForm').on('submit', function (e) {

    e.preventDefault();

    $('.error-msg').remove();



    if (!validateRealtime()) return;



    const formData = $(this).serialize();



    Swal.fire({

      title: 'Submitting...',

      allowOutsideClick: false,

      didOpen: () => {

        Swal.showLoading();

      }

    });



    $.ajax({

      url: 'contact-form-submit.php',

      type: 'POST',

      data: formData,

      dataType: 'json',

      success: function (res) {

        if (res.success) {

          Swal.fire({

            icon: 'success',

            title: 'Success',

            text: res.message,

            timer: 3000,

            showConfirmButton: false

          });

          $('#contactForm')[0].reset();

          $('#emailDiv, #phoneDiv').hide();

        } else {

          Swal.fire({

            icon: 'error',

            title: 'Error',

            html: res.message

          });

        }

      },

      error: function () {

        Swal.fire({

          icon: 'error',

          title: 'Server Error',

          text: 'Please try again later.'

        });

      }

    });

  });

});

</script>



<?php include('include/footer.php'); ?>

