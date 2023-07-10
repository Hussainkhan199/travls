(function(h,o,t,j,a,r){
    h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments);};
    h._hjSettings={hjid:1072020,hjsv:6};
    a=o.getElementsByTagName('head')[0];
    r=o.createElement('script');r.async=1;
    r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
    a.appendChild(r);
})(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
$(document).ready(function(){
$("#searchButton").click(function() {
    var errMsg = '';
    if($('#destination_airport').val() === ''){
        errMsg += '&bull;&nbsp;&nbsp;Please Enter Destination Airport.<br/>';
    }
    if($('#departure_date').val() === ''){
        errMsg += '&bull;&nbsp;&nbsp;Please Enter Departure Date.<br/>';
    }
    if($('#departure_airport').val() === ''){
        errMsg += '&bull;&nbsp;&nbsp;Please Enter Departure Airport.<br/>';
    }
    if($('#return_date').val() === '' &&  $('input[name=flight_type]:checked', '#frmsearch').val() == 'Return'){
        errMsg += '&bull;&nbsp;&nbsp;Please Enter Return Date.<br/>';
    }
    if(errMsg !== ''){
        $('#dialog').html(errMsg);
        $("#dialog").dialog({
        bgiframe: true,
        modal: true,
        title: 'Reliance Travel LTD: Flight Search',
        buttons: {
            Ok: function() {
                $(this).dialog('destroy');
            }
        }
    });
    }else{
        document.getElementById("frmsearch").submit();
    }
});
$("#fetching-data").fadeOut("slow");
});
function bookingRequest(data){
var formElements = new Array(
    "o_deptdate", 
    "o_depttime", 
    "o_deptairport", 
    "o_arvldate", 
    "o_arvltime", 
    "o_arvlairport", 
    "o_duration", 
    "o_stops", 
    "i_deptdate", 
    "i_depttime", 
    "i_deptairport", 
    "i_arvldate", 
    "i_arvltime", 
    "i_arvlairport", 
    "i_duration", 
    "i_stops" ,
    "m_dept", 
    "m_dest", 
    "m_airlinecode", 
    "m_airline", 
    "m_adults", 
    "m_children", 
    "m_infants", 
    "m_priceperp", 
    "m_totalprice"
    );
var fbr = document.forms.frmrequest;
for(var i = 0; i < 25; i++){
    fbr.elements[i].value = data[i];
}
document.getElementById("frmrequest").action = "/online-flight-enquiry.php";
document.getElementById("frmrequest").submit();
}
function bookingReq(data){
var formElements = new Array(
    "book_departure_date", 
    "book_return_date", 
    "book_departure_airport", 
    "book_departure_airport_code", 
    "book_destination_airport", 
    "book_destination_airport_code", 
    "book_airline", 
    "book_airline_code", 
    "book_fare_type", 
    "book_ticket_class", 
    "book_book_between", 
    "book_total"
    );

for(var i = 0; i < 12; i++){
    document.getElementById(formElements[i]).value = data[i];
}
document.getElementById("book_form").submit();
}	
function callbackRequest(data){
var formElements = new Array(
    "o_deptdate", 
    "o_depttime", 
    "o_deptairport", 
    "o_arvldate", 
    "o_arvltime", 
    "o_arvlairport", 
    "o_duration", 
    "o_stops", 
    "i_deptdate", 
    "i_depttime", 
    "i_deptairport", 
    "i_arvldate", 
    "i_arvltime", 
    "i_arvlairport", 
    "i_duration", 
    "i_stops" ,
    "m_dept", 
    "m_dest", 
    "m_airlinecode", 
    "m_airline", 
    "m_adults", 
    "m_children", 
    "m_infants", 
    "m_priceperp", 
    "m_totalprice"
    );
var fbr = document.forms.frmrequest;
for(var i = 0; i < 25; i++){
    fbr.elements[i].value = data[i];	
}
document.getElementById("frmrequest").action = "/online-callback-request.php";
document.getElementById("frmrequest").submit();
}
function viewItinerary(f_id,departure_date,return_date,flight_type){
$('#itinerary-container').html('<img align="center" style="max-width: 160px;margin: 0 auto;display: block;" src="assets/images/loader.gif">');
$.post('onlinesearchresults/flight_itinerary',
    {
        f_id:f_id,
        departure_date:departure_date,
        return_date:return_date,
        flight_type:flight_type
    },function(data){
    $('#itinerary-container').html(data);
});
}
$(function(){
$(document).on('click',"a.arlin",function(){
    $(".cmbairline").val($(this).attr( "title"));
    //newValue = $(this).attr( "title");
    //alert(newValue);
    $("#searchButton").click();
 });     
});
$(function() {
"use strict";
$( "#price-range" ).slider({
  range: true,
  min: 0,
  max: 100,
  values: [ 3, 50 ],
  slide: function( event, ui ) {
    $( "#amount" ).val( "$ " + ui.values[ 0 ] + " - $ " + ui.values[ 1 ] );
  }
});
$( "#amount" ).val( "$ " + $( "#price-range" ).slider( "values", 0 ) +
    " - $ " + $( "#price-range" ).slider( "values", 1 ) );
});

$(document).on("click",".ms-button",function (){
$('.modify-search').show(1000);
$('html, body').scrollTop($('.modify-search').offset().top);
});