// $(document).ready(function() {
//
//     $(document).on('click', '.lng', function(e) {
//         var lang = $(this).attr('id');
//
//         e.preventDefault();
//
//         // alert(lang);
//         // $.post('/frontend/web/' + lang +'/site/language', {
//         $.post('/e-region/frontend/web/site/language', {
//             '_csrf': yii.getCsrfToken(),
//             'lang': lang
//         }, function(data) {
//             // alert(data);
//             location.reload();
//         })
//     });
//     $(".drop-down .selected div").click(function () {
//         $(".drop-down .options ul").toggle();
//     });
//
// //SELECT OPTIONS AND HIDE OPTION AFTER SELECTION
//     $(".drop-down .options ul li i").click(function () {
//         var text = $(this).html();
//         $(".drop-down .selected div span").html(text);
//         $(".drop-down .options ul").hide();
//     });
//
// });
