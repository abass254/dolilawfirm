function getValidation(t, e, i) {
    "use strict";
    i.r(e),
        function(t) {
            i(191);
            t(document).ready((function() {
                setTimeout((function() {
                    t("#smartwizar").smartWizard({
                        selected: 0,
                        transitionEffect: "fade",
                        toolbarSettings: {
                            toolbarPosition: "none"
                        }
                    }), t("#reset-btn").on("click", (function() {
                        return t("#smartwizar").smartWizard("reset"), !0
                    })), t("#prev-btn").on("click", (function() {
                        return t("#smartwizar").smartWizard("prev"), !0
                    })), t("#next-btn").on("click", (function() {
                        return t("#smartwizar").smartWizard("next"), !0
                    })), t("#smartwizard2").smartWizard({
                        selected: 0,
                        transitionEffect: "slide",
                        toolbarSettings: {
                            toolbarPosition: "none"
                        }
                    }), t("#reset-btn2").on("click", (function() {
                        return t("#smartwizard2").smartWizard("reset"), !0
                    })), t("#prev-btn2").on("click", (function() {
                        return t("#smartwizard2").smartWizard("prev"), !0
                    })), t("#next-btn2").on("click", (function() {
                        return t("#smartwizard2").smartWizard("next"), !0
                    })), t("#smartwizard3").smartWizard({
                        selected: 0,
                        transitionEffect: "fade",
                        toolbarSettings: {
                            toolbarPosition: "none"
                        }
                    }), t("#reset-btn22").on("click", (function() {
                        return t("#smartwizard3").smartWizard("reset"), !0
                    })), t("#prev-btn22").on("click", (function() {
                        return t("#smartwizard3").smartWizard("prev"), !0
                    })), t("#next-btn22").on("click", (function() {
                        return t("#smartwizard3").smartWizard("next"), !0
                    }))
                }), 2e3)
            }))
        }.call(this, i(1))
}


$(document).ready(function(){
    //alert('11111');
    //getValidation();
    // toastr.error('error.text()');

    $('[data-toggle="datetime"]').datepicker({
        format: "dd/mm/yyyy"
    }).on('change', function () {
        $('div.app-main__inner').click();
    });

    var form = $("#caseDetails");
    var cl_fname = $("#cl_fname").val();


    form.validate({
        errorPlacement: function errorPlacement(error, element) { 
          toastr.error(error.text());
        },
        rules: {
            cl_fname: "required",
            cl_lname: "required",
            cl_dob: "required",
            cl_gender: "required",
            cl_dl: "required",
            cl_phone: "required",
            cl_address: "required",
            cl_city: "required",
            cl_state: "required",
            cl_postal: "required",
          },
        messages: {
            cl_fname: "Please provide the first name",
            cl_lname: "Please provide the last name",
            cl_dob: "Please provide the date of birth",
            cl_gender: "Please provide the gender",
            cl_dl: "Please provide the drivers license no",
            cl_phone: "Please provide the primary phone no",
            cl_address: "Please provide the physical address",
            cl_city: "Please provide the city",
            cl_state: "Please provide the state",
            cl_postal: "Please provide the postal code",
        }
    });
    
    $("#nextBtn").click(function () {
        if (form.valid()) {
          var nextTab = $('.nav-tabs .active').parent().next('li').find('a');
          nextTab.trigger('click');
        }
    });
    
    $("#prevBtn").click(function () {
        var prevTab = $('.nav-tabs .active').parent().prev('li').find('a');
        prevTab.trigger('click');
    });
    
    $("#submitBtn").click(function () {
        if (form.valid()) {
          toastr.success("Form submitted successfully!");
        }
      });
});





