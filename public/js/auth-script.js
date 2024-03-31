// $(function() {
//     if (message != ""){
//         setTimeout(
//             function() {
//                 toastr.error(message + ' Contact developer if it persists', 'Login Failed', { "closeButton": true, "progressBar": true });
//             },
//         500);
//     }

//     if (change == 1) {
//         toastr.info('You are required to change your password before you continue', 'Authentication');

//         setTimeout(
//           function() {
//             $('#changepwd').modal('show');
//           },
//         1000);
//     }

//     $('#bt-change-pwd').click(function(){
//         if ($('#TypePass').val() != $('#ConfirmPass').val()){
//             toastr.error('Your new passwords do not match. Try again', 'Authentication', { "closeButton": true });
//             return;
//         }

//         if ($('#OldPass').val() == $('#TypePass').val()){
//             toastr.error('Your new password can not be the same as the old password. Try again', 'Authentication', { "closeButton": true });
//             return;
//         }

//         var pass = $('#TypePass').val();

//         var strength = 1;
//         var arr = [/.{5,}/, /[a-z]+/, /[0-9]+/, /[A-Z]+/];
//         jQuery.map(arr, function(regexp) {
//           if(pass.match(regexp))
//              strength++;
//         });

//         if (strength < 4){
//             toastr.error('Specified password is weak and can be easily bypassed. Try another', 'Authentication');
//             return;
//         }

//         $('#Password').val($('#TypePass').val());
//         $('#user-password').val($('#old-password').val());

//         $("form").submit();
//     });
// });
