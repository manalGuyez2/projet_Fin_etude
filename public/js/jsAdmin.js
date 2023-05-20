$(function(){
    var dtToday = new Date();

    var month = 12;
    var day = 30;
    var year = dtToday.getFullYear() - 17;
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();

    var maxDate= year + '-' + month + '-' + day;

    $('#txtDate').attr('max', maxDate);
});