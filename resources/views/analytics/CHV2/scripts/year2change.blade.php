function year2() {
    $( "#anT" ).children().addClass("fa fa-refresh fa-spin");
      $(  "#anT"  ).addClass("overlay");
    var data = {
          'county':$('#County').val(),
         '_token': $('input[name=_token]').val(),
         'Year1': $('#Year1').val(),
         'Year2': $('#Year2').val(),
         'Year3': $('#Year3').val(),
         'Year4': $('#Year4').val(),
           'Term':$('#Term').val()
             }; 
   $.ajax({
      url: '{{config("app.prefix")}}/analytics/chajax',
      type: "post",
       data: data,
           success: function(data){
    
    var jsonData = JSON.parse(data);

       @include('analytics/CHV2/scripts/annualTrends')
      $(  "#anT"  ).children().removeClass("fa fa-refresh fa-spin");
      $( "#anT"  ).removeClass("overlay");
       var yr = $('#Year2').val();
   $("#Year2Change").prop('href','{{config("app.prefix")}}/comparison/CHV2/CHV2_annualtrends/colfullstack/'+yr);
      } 
   });  
}