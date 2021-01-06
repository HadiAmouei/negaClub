$('#startup_name').on('input',function () {

    let startUpName =$(this).val();
$('.sTOs').html('تبدیل امتیاز '+ startUpName +' به امتیاز نگا کلاب');
$('.sTOe').html('تبدیل امتیاز '+ startUpName +' به اعتبار نگا کلاب');
$('.eTOs').html('تبدیل اعتبار '+ startUpName +' به امتیاز نگا کلاب');

});
$('#score_to_club_score,#club_score_from_score,#score_to_club_credit,#club_score_from_credit').checkNumber();
$('#club_credit_from_score,#credit_to_club_score').checkPrice();