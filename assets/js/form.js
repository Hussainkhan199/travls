<script>
    $(document).ready(function() {
      var currentStep = 1;
      var totalSteps = $("#multiStepForm").find(".form-step").length;

      $(".nextBtn").click(function() {
        var $currentStep = $("#step" + currentStep);
        var $nextStep = $("#step" + (currentStep + 1));

        if ($nextStep.length > 0) {
          $currentStep.removeClass("active");
          $nextStep.addClass("active");
          currentStep++;
        }
      });

      $(".prevBtn").click(function() {
        var $currentStep = $("#step" + currentStep);
        var $prevStep = $("#step" + (currentStep - 1));

        if ($prevStep.length > 0) {
          $currentStep.removeClass("active");
          $prevStep.addClass("active");
          currentStep--;
        }
      });

      $("#multiStepForm").submit(function(e) {
        e.preventDefault();

        var name = $("#name").val();
        var email = $("#email").val();
        var phone = $("#phone").val();
        var address = $("#address").val();
        var from = $("#from").val();
        var to = $("#to").val();
        var adults = $("#adults").val();
        var children = $("#children").val();

        $("#confirmName").text(name);
        $("#confirmEmail").text(email);
        $("#confirmPhone").text(phone);
        $("#confirmAddress").text(address);
        $("#confirmFrom").text(from);
        $("#confirmTo").text(to);
        $("#confirmAdults").text(adults);
        $("#confirmChildren").text(children);

        // You can submit the form data to the server or perform any other necessary actions here

        // For now, we'll just display the confirmation details
        $("#step2, #step3").removeClass("active");
        $("#step1").addClass("active");
        currentStep = 1;
      });
    });
  </script>