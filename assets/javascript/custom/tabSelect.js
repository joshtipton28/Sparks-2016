/* Enable deep linking from external pages */

if(window.location.hash) {
  var hash = window.location.hash;
  $('.accordion a[href="' + hash + '"]').trigger('click');
  $('.tabs a[href="' + hash + '"]').trigger('click');
}

function open_tab(tab_id,panel) {
  $("#"+tab_id).foundation("selectTab",$("#"+panel));
}


/*Enableing On-page deep-linking
*
* Add internal link class to each on page internal link that you create.
*
* $(".college-counseling-link").on('click',function() { $("#working-with-us").foundation("selectTab",$("#college-counseling"))});
*		^ class to give internal link on page				^ tab menu tab_id   							^target tab ID
*/

$(".college-counseling").on('click',function() { $("#working-with-us").foundation("selectTab",$("#college-counseling"))});
$(".coxswain-program").on('click',function() { $("#working-with-us").foundation("selectTab",$("#coxswain-program"))});
$(".internal-applicants").on('click',function() { $("#working-with-us").foundation("selectTab",$("#internal-applicants"))});
$(".gap-year-advising").on('click',function() { $("#working-with-us").foundation("selectTab",$("#gap-year-advising"))});
$(".reports-from-the-front").on('click',function() { $("#working-with-us").foundation("selectTab",$("#reports-from-the-front"))});
$(".our-approach").on('click',function() { $("#working-with-us").foundation("selectTab",$("#our-approach"))});
$(".counseling-testimonials").on('click',function() { $("#working-with-us").foundation("selectTab",$("#counseling-testimonials"))});
$(".rowing-camp-testimonials").on('click',function() { $("#working-with-us").foundation("selectTab",$("#rowing-camp-testimonials"))});
$(".coxswain-testimonials").on('click',function() { $("#working-with-us").foundation("selectTab",$("#coxswain-testimonials"))});

//Rowing Camp Internal Deep Linking
$(".camp-overview").on('click',function() { $("#rowing-camp-tabs").foundation("selectTab",$("#camp-overview"))});
$(".camp-staff").on('click',function() { $("#rowing-camp-tabs").foundation("selectTab",$("#camp-staff"))});
$(".camp-details").on('click',function() { $("#rowing-camp-tabs").foundation("selectTab",$("#camp-details"))});
$(".camp-registration").on('click',function() { $("#rowing-camp-tabs").foundation("selectTab",$("#camp-registration"))});
$(".camp-schedule").on('click',function() { $("#rowing-camp-tabs").foundation("selectTab",$("#camp-schedule"))});

//About Us Internal Deep Linking
$(".overview").on('click',function() { $("#about-us").foundation("selectTab",$("#overview"))});
$(".leadership").on('click',function() { $("#about-us").foundation("selectTab",$("#leadership"))});
$(".counseling-associates").on('click',function() { $("#about-us").foundation("selectTab",$("#counseling-associates"))});
$(".coxing-associates").on('click',function() { $("#about-us").foundation("selectTab",$("#coxing-associates"))});
$(".international-associates").on('click',function() { $("#about-us").foundation("selectTab",$("#international-associates"))});
$(".administrative-associates").on('click',function() { $("#about-us").foundation("selectTab",$("#administrative-associates"))});