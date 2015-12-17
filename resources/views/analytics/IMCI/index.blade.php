@extends('app')
@section('header')
  <h1  align="middle">
                 Integrated Management of Childhood Illness
              <small>(Analysis Results)</small>
            </h1>
            <hr style="width: 100%; color: #3C8DBC; height: 1px; background-color:#3C8DBC;" />
@endsection

@section('content')



  <div class="row">
 
             
              {!! Form::open() !!}
       



                         {!! Form::close() !!}


   </div>
   @include('analytics/IMCI/county')

 <div class="col-md-8">

  <!-- small box -->
               <div class="small-box bg-blue">
                <div class="inner">
                  <h3> <p id="X">Data from {{$SubmittedCount->X}} healthworkers in {{count($SubmittedCounties)}} counties</p><sup style="font-size: 20px"></sup></h3>
                 
                </div>
              
              </div>
                        
                        <div class="box-info">                     
                     <div class="box-body">
                         <br>                     
                        <center><h2><b>FIRST TITLE</b></h2></center>
                        <br>
                        </div>
                        </div>
</div>

     <!-- two/one graphs here -->
           


     
            <div class="col-md-12">
                  
            <!-- the rest  in section 1-->
            </div>

<!-- the rest -->

    
   <div class="col-md-12">
                        
                        <div class="box-info">                     
                     <div class="box-body">
                         <br>                     
                        <center><h2><b>CERTIFICATION</b></h2></center>
                        <br>
                        </div>
                        </div>
</div>
  
 @include('analytics/IMCI/html/Certification')




     


            

@endsection


@section('js')


  

 
  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  
 <script type="text/javascript">


    window.inside = $('#thesvg').contents();
  
 

      $(function () {
        getmapdata();

       window.inside = $('#thesvg').contents();
        $(".select2").select2();

          @foreach($SubmittedCounties as $SubmittedCounty)
        window.inside.find("#{{str_replace('\'','',str_replace(' ','-',strtolower($SubmittedCounty->County)))}}").css('fill','#E5E5FF');   
        @endforeach
         
      });

 
 

google.load('visualization', '1', {packages: ['corechart', 'bar']});
google.setOnLoadCallback(drawChart);

  $('#County').change(drawChart);
   $('#Term').change(drawChart);
	
function mapRequest (county) {
   document.getElementById("countyname").innerHTML = '<strong>'+county+'</strong>';
     x = window.mapdata;

  @include('analytics/IMCI/mapdata')

   document.getElementById("svFa").innerHTML = '<b>'+TotalSubmitt+'</b>/'+TotalTotal;
   x2 = 100*(TotalSubmitt/TotalTotal);
  $('#svFaBar').attr('style','width: '+x2+'%');
  
}
function getmapdata() {



 
    var data = {
         
         '_token': $('input[name=_token]').val(),
         'survey':'imci'
       
    };
 
   $.ajax({
      url: '/analytics/maprequest',
      type: "post",
       data: data,
           success: function(data){
     mapdata = JSON.parse(data);
   
     var x = window.mapdata;
   var county = $('#County').val();
    if(county == 'All') { var allcheck= 1; county = 'Samburu';}
  
    @include('analytics/IMCI/mapdata')
    
  //  alert(data);
      

      }
 
   });   





}

function drawChart() {

	  $( ".wait" ).children().addClass("fa fa-refresh fa-spin");
      $( ".wait" ).addClass("overlay");
	  var data = {
          'county':$('#County').val(),
         '_token': $('input[name=_token]').val()
        
        

    };
 
   $.ajax({
      url: '/analytics/imciajax',
      type: "post",
       data: data,
           success: function(data){

            // alert('x');
          
     
		var jsonData = JSON.parse(data);
    
  var county = $('#County').val();
    if(county == 'All') { var allcheck= 1; county = 'Samburu';}
   x = window.mapdata;

  @include('analytics/IMCI/mapdata')


	//include js
     @include('analytics/IMCI/js/Certification')
	    
  $('#X').html('Data from '+TotalSubmitt+ ' healthworkers in '+$('#County').val());
        if (allcheck==1) $('#X').html('Data from {{$SubmittedCount->X}} facilities in {{count($SubmittedCounties)}} counties');


      $( ".wait" ).children().removeClass("fa fa-refresh fa-spin");
      $( ".wait" ).removeClass("overlay");

      }
 
   });   


       

}





var inside = $('#thesvg').contents();

inside.find('.county').click(function() {
  var cts = this.getAttribute("cname");
   $(document).ready(function() {

$('#County').val(cts);
 document.getElementById("select2-County-container").innerHTML = cts;

});

drawChart();

var x = 'Selected ' + cts + ' county';

});



  $(function() {
  var moveLeft = 0;
  var moveDown = 0;

  window.inside.find('.county').hover(function(e) {
      var cts = this.getAttribute("title");
      mapRequest(cts);

    $('div#pop-up').show();

      
  }, function() {
    $('div#pop-up').hide();
  });

  window.inside.find('.county').mousemove(function(e) {
    $("div#pop-up").css('top', e.pageY + moveDown).css('left', e.pageX + moveLeft);
  });

});




    </script>
  
    
   
@endsection