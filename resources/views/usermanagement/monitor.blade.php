@extends('template')


@section('pageinfo')

 
         
  @endsection




@section('content')


 {!! Form::open() !!}     



                         {!! Form::close() !!}
<!-- <button style="float:right" id="tester" >send</button>          
              <input type="text" id="testerval">'
              <input type="text" id="testerval2"> -->
  
     <div class="box box-primary">
                <div class="box-header">

                <button style="float:right" id="print-button" >Print</button>
                  <h3 class="box-title">

                  Progress Review
                  </h3>
                </div>      
<div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a aria-expanded="true" href="#tab_1" data-toggle="tab">General</a></li>
                  <li class=""><a aria-expanded="false" href="#tab_2" data-toggle="tab">Today's Data Entry( by County )</a></li>
                  <li class=""><a aria-expanded="false" href="#tab_3" data-toggle="tab">Total Data Entry ( by County )</a></li>
                  
                  <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                    <!-- /.box-header -->

                  <span style="color:red">>> Click on the labels to open/close panels</span>
                  <br>
                   @foreach($surveys as $survey)
                    @if(($survey->surveyID=='CHV2') || ($survey->surveyID=='MNHV2') || ($survey->surveyID=='IMCIV1') )
                    <div class="panel box box-primary">
                      <div class="box-header with-border">
                        <h4 class="box-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$survey->surveyID}}">
                            @if($survey->surveyID=='CHV2')

                            Child Health 
                              <small>
                            ( <?php   
                              echo sizeof($ch);

                             ?> 

                             Records )
                             </small>





                            @endif
                            @if($survey->surveyID=='MNHV2')

                            Maternal and Neonatal Health

                                   <small>
                            ( <?php   
                              echo sizeof($mnh);

                             ?> 

                             Records )
                             </small>




                            @endif
                            @if($survey->surveyID=='IMCIV1')

                            Integrated Management of Childhood Illness

                                   <small>
                            ( <?php   
                              echo sizeof($imci);

                             ?> 

                             Records )
                             </small>




                            @endif






                           


                          </a>

                        </h4>
                      </div>
                      <div id="collapse{{$survey->surveyID}}" class="panel-collapse collapse">
                        <div class="box-body">
                <table style="float:left">
                                                    <tr>       
         <a style="float:right" href="/usermanagement/export/{{$location}}/general/{{$survey->surveyID}}/general">Download excel</a>
</tr>
                  
                  <tr>
                  <td>

                  <b>Filter by:</b>
                  </td>
                  <td>
                   <select id="filterer{{$survey->surveyID}}" class="form-control select2 " style="width: 100%;" name="filterer" > 
                      <option value ="All" id ="filter0" >All</option>
                       <option value ="County" id ="filter1" >County</option>
                      <!--   <option value ="Survey" id ="filter2" >Survey</option> -->
                         <option value ="Term" id ="filter3" >Term</option>
                       </select>

                  </td>

                  </td>
                  
                  <td>
                   <b  "padding-left:20px" >Please Select:</b>
                   </td>
                   <td>
            <select style="padding-left:20px" id="searcher{{$survey->surveyID}}" class="form-control select2 " style="width: 100%;" name="filterer" >
           

                     @foreach($counties_assessed as $ca)
                        <option value = <?php echo $ca->Name ?> class="searcher0{{$survey->surveyID}}" id ="searcherallcounty" >{{$ca->Name}}</option> 


                     @endforeach
                       
                     

                         
                      <option value ="Baseline" class="searcher1{{$survey->surveyID}}" id ="searcher2" >Baseline</option>
                      <option value ="Midterm" class="searcher1{{$survey->surveyID}}" id ="searcher2" >Midterm</option>
                      <option value ="Endterm" class="searcher1{{$survey->surveyID}}" id ="searcher2" >Endterm</option>
                     
                      
                      
                     
                      
                      
                       </select>
                       
                  </td>


                  </tr>
                </table>
                <br>
                <br>
                <table id="example1{{$survey->surveyID}}" class="table table-bordered table-striped">
  


                  
                    <thead>
                      <tr>

                     
                        
                        <th>Version</th>
                        <th>Assessment Term</th>
                        <th>Assessor</th>
                         <th>Date</th>
                         <th>Facility</th>
                         <th >County</th>
                         <th>Entered by</th>
                        

                        <th class="hideprint">Action</th>

                        
                        
                  
                      </tr>
                    </thead>
                    
                    <tbody>
                      
                      

                        @foreach($user_monitor as $user)
                         @if(substr($user->Survey,0,2)==substr($survey->surveyID,0,2))
                        <tr>
                       
                     
                        
                         <td>

                        @foreach($surveys as $survey)

                            @if($survey->surveyID==$user->Survey)

                                {{$survey->Version}} :{{$survey->Runtime}}

                            @endif




                        @endforeach



                         </td>
                        <td > {{ $user->Assessment_Term}}</td>



                        <td > {{ $user->assname}}</td>
                        
                        <?php

                          $date= date_create($user->Date);
                          $dateformated=date_format($date,'d F Y');

                         ?>
                        <td><span><?php echo $dateformated?> </span>  </td>
                        <td ><span>{{ $user->FacilityName}}</span>  </td>
                        <td  ><span>{{$user->County}}</span></td>
                        <td ><span>{{ $user->username}}</span>  </td>
                        @if($user->Status=='Submitted')
 <td class="hideprint"><form action="/assessments/show/{{$user->Assessment_ID}}">
    <input class="btn btn-primary form-control" type="submit" value="VIEW"></form></td>   
                           @else
                          <td  class="hideprint"><form action="/assessments/edit/{{$user->Assessment_ID}}">
    <input class="btn btn-primary form-control" type="submit" value="RESUME"></form></td>
                          @endif
                        
                        
                       
                       </tr>
                       @endif
                         @endforeach



   

                    

                     
                    </tbody>
                    <tfoot>
                      <tr>

                      
                       <th>Version</th>
                        <th>Assessment Term</th>
                        <th>Assessor</th>
                         <th>Date</th>
                         <th>Facility</th>
                         <th>County</th>
                         <th>Entered by</th>
                        

                        <th class="hideprint">Action</th>
                        
                        
                  
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
                      </div>
                    </div>

                @endif
              @endforeach
                  </div><!-- /.tab-pane -->





                  <div class="tab-pane" id="tab_2">
                  <span style="color:red"> >> Click on the labels to open/close panels</span>
                      @foreach($surveys as $survey)
                                         @if(($survey->surveyID=='CHV2') || ($survey->surveyID=='MNHV2') || ($survey->surveyID=='IMCIV1') )

                    <div class="panel box box-primary">
                      <div class="box-header with-border">
                        <h4 class="box-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2{{$survey->surveyID}}">
                             @if($survey->surveyID=='CHV2')

                            Child Health




                            @endif
                            @if($survey->surveyID=='MNHV2')

                            Maternal and Neonatal Health




                            @endif
                            @if($survey->surveyID=='IMCIV1')

                            Integrated Management of Childhood Illness




                            @endif
                          </a>
                        </h4>
                      </div>
                      <div id="collapse2{{$survey->surveyID}}" class="panel-collapse collapse">
                        <div class="box-body">
                         <table id="example2{{$survey->surveyID}}" class="table table-bordered table-striped">
  


                  
                    <thead>
                    <tr >
                    <?php
                      echo date('d F Y');
                     

      
     ?>

                   

              
              
                       
                     

                         
                     


                    </tr>



                      <tr>

                     
                        
                        <th>County</th>
                        
                        <th>Submitted Surveys </th>
                        <th>Incomplete Surveys </th>
                        <th>Action</th>
                        
                  
                      </tr>
                    </thead>
                    
                    <tbody>
                   <!--  -->

                        @foreach($counties as $county)
                        <tr>

                      

                        
                        <td> {{$county->Name}}</td>

                        <td> 
                        @foreach($submittedt as $subt)
                            @if($county->Name==$subt->County && substr($subt->Survey,0,2)==substr($survey->surveyID,0,2) )
                                {{$subt->submitted}}

                            @endif


                        @endforeach
                  
                      </td>




                        <td > 

                         @foreach($incompletet as $inct)
                            @if($county->Name==$inct->County && substr($inct->Survey,0,2)==substr($survey->surveyID,0,2) )
                                {{$inct->incomplete}}

                            @endif

                        @endforeach


                      
                        </td>





                        
        
                    

<td class="hideprint"><form action="/usermanagement/export/{{$location}}/todayentry/{{$county->Name}}/{{$survey->surveyID}}">
    <input class="btn btn-primary form-control" type="submit" value="DOWNLOAD"></form></td>   

                       
                       
                        
                        
                       
                       </tr>
                       
                        
                        
                       
                       </tr>
                         @endforeach



   

                    

                     
                    </tbody>
                    <tfoot>
                      <tr>

                     
                        
                         <th>County</th>
                        
                        <th>Submitted Surveys </th>
                        <th>Incomplete Surveys </th>
                        <th>Action</th>
                    
                        
                  
                      </tr>
                    </tfoot>
                  </table>
                        </div>
                      </div>
                    </div>
                                  <script type="text/javascript">
                                
   </script>
                    @endif

                    @endforeach



                    
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_3">
                  <span style="color:red">>> Click on the labels to open/close panels</span>


                  @foreach($surveys as $survey)


                                         @if(($survey->surveyID=='CHV2') || ($survey->surveyID=='MNHV2') || ($survey->surveyID=='IMCIV1') )
                  <div class="panel box box-primary">
                      <div class="box-header with-border">
                        <h4 class="box-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3{{$survey->surveyID}}">
                            @if($survey->surveyID=='CHV2')

                            Child Health




                            @endif
                            @if($survey->surveyID=='MNHV2')

                            Maternal and Neonatal Health




                            @endif
                            @if($survey->surveyID=='IMCIV1')

                            Integrated Management of Childhood Illness




                            @endif
                          </a>
                        </h4>
                      </div>

                      <div id="collapse3{{$survey->surveyID}}" class="panel-collapse collapse">
                        <div class="box-body">
 <table id="example3{{$survey->surveyID}}" class="table table-bordered table-striped">
  


                  
                    <thead>
              



                      <tr>

                     
                        
                        <th>County</th>
                        
                        <th>Submitted Surveys </th>
                        <th>Incomplete Surveys </th>
                        <th>Action</th>
                        
                  
                      </tr>
                    </thead>
                    
                    <tbody>
                   <!--  -->

                        @foreach($counties as $county)
                        <tr>

                      

                        
                        <td> {{$county->Name}}</td>

                        <td> 
                        @foreach($submitted as $sub)
                            @if($county->Name==$sub->County && substr($sub->Survey,0,2)==substr($survey->surveyID,0,2) )
                                {{$sub->submitted}}

                            @endif

                        
                        @endforeach
                  
                      </td>




                        <td > 

                         @foreach($incomplete as $inc)
                            @if($county->Name==$inc->County && substr($inc->Survey,0,2)==substr($survey->surveyID,0,2) )
                                {{$inc->incomplete}}

                            @endif

                        
                        @endforeach


                      
                        </td>



                        
        
                    

<td class="hideprint"><form action="/usermanagement/export/{{$location}}/totalentry/{{$county->Name}}/{{$survey->surveyID}}">
    <input class="btn btn-primary form-control" type="submit" value="DOWNLOAD"></form></td>   

                       
                       
                        
                        
                       
                       </tr>
                       
                        
                        
                       
                       </tr>
                         @endforeach



   

                    

                     
                    </tbody>
                    <tfoot>
                      <tr>

                     
                        
                         <th>County</th>
                        
                        <th>Submitted Surveys </th>
                        <th>Incomplete Surveys </th>
                        <th>Action</th>
                    
                        
                  
                      </tr>
                    </tfoot>
                  </table>                      
                    </div>
                      </div>
                    </div>
                    @endif
                  @endforeach
                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div>

</div>


 @foreach($surveys as $survey)
 @if($survey->surveyID=='CHV2'|| 'MNHV2'||'IMCIV1')
  <script type="text/javascript">

</script>
@endif
@endforeach





@endsection



 @section('javascript')

  



 
   <script src="/bower_components/admin-lte/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="/bower_components/admin-lte/plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>

     <script src="/bower_components/admin-lte/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
    <script src="/bower_components/admin-lte/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
    <script src="/bower_components/admin-lte/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>

 <!-- DATA TABLES -->


 @foreach($surveys as $survey)
                     @if(($survey->surveyID=='CHV2') || ($survey->surveyID=='MNHV2') || ($survey->surveyID=='IMCIV1') )


       
        <script type="text/javascript">
       
 

      
      $.fn.dataTable.ext.search.push(
    function( settings, data{{$survey->surveyID}}, dataIndex ) {
       var searchvar{{$survey->surveyID}}=$('#searcher{{$survey->surveyID}}').val();
        var searchvar2{{$survey->surveyID}}=$('#filterer2{{$survey->surveyID}}').val();


     if($('#filterer{{$survey->surveyID}}').val()=='Term')
      {
        var filter{{$survey->surveyID}} =  data{{$survey->surveyID}}[1]; 
      }
      else if($('#filterer{{$survey->surveyID}}').val()=='County')
      {
        var filter{{$survey->surveyID}} =  data{{$survey->surveyID}}[5]; 
      }
      else if($('#filterer{{$survey->surveyID}}').val()=='All')
      {
        return true;
       
       


      }

      if($('#filterer2{{$survey->surveyID}}').val()=='Clive Makamara')
      {
        var filter{{$survey->surveyID}} =  data{{$survey->surveyID}}[6]; 
      }

if ( filter{{$survey->surveyID}}==searchvar2{{$survey->surveyID}})

        {
            return true;
        }

        if ( filter{{$survey->surveyID}}==searchvar{{$survey->surveyID}})

        {
            return true;
        }

        return false;
    }
);


$(function (){
      
     });

 
$(document).ready(function() {




  
    $('#searcher{{$survey->surveyID}}').val('');
       document.getElementById("searcher{{$survey->surveyID}}").disabled = true;

    
    var table{{$survey->surveyID}} = $('#example1{{$survey->surveyID}}').DataTable();
   
document.getElementById("example1{{$survey->surveyID}}_filter").style.display = 'none';

$('#searcher{{$survey->surveyID}}').click(function()

{

if($('#filterer{{$survey->surveyID}}').val()=='All')
       {
      
        $('.searcher0{{$survey->surveyID}}').hide();
        $('.searcher1{{$survey->surveyID}}').hide();
      
          
         table{{$survey->surveyID}}.draw();
          document.getElementById("searcher{{$survey->surveyID}}").disabled = true;
      }
     
      else if($('#filterer{{$survey->surveyID}}').val()=='Term')
       {
       
       
        table{{$survey->surveyID}}.draw();
         document.getElementById("searcher{{$survey->surveyID}}").disabled = false;
         
         

      }
      else if($('#filterer{{$survey->surveyID}}').val()=='County')
       {
         
       
        table{{$survey->surveyID}}.draw();
         document.getElementById("searcher{{$survey->surveyID}}").disabled = false;
      }

}



  );
    
    

$('#filterer{{$survey->surveyID}}').click(function()
{
  $('#searcher{{$survey->surveyID}}').val('');


if($('#filterer{{$survey->surveyID}}').val()=='All')
       {
         $('#searcher{{$survey->surveyID}}').val('');
         $('.searcher0{{$survey->surveyID}}').hide();
        $('.searcher1{{$survey->surveyID}}').hide();
        
         table{{$survey->surveyID}}.draw();
          document.getElementById("searcher{{$survey->surveyID}}").disabled = true;
      }
     
      else if($('#filterer{{$survey->surveyID}}').val()=='Term')
       {
         $('.searcher0{{$survey->surveyID}}').hide();
        $('.searcher1{{$survey->surveyID}}').show();
        
        table{{$survey->surveyID}}.draw();
         document.getElementById("searcher{{$survey->surveyID}}").disabled = false;
      }
      else if($('#filterer{{$survey->surveyID}}').val()=='County')
       {
        $('.searcher0{{$survey->surveyID}}').show();
        $('.searcher1{{$survey->surveyID}}').hide();
      
        table{{$survey->surveyID}}.draw();

         document.getElementById("searcher{{$survey->surveyID}}").disabled = false;
      }

}



  );  
     
    // Event listener 
    $('#searcher{{$survey->surveyID}}').keyup( function() {
        table{{$survey->surveyID}}.draw();
    } );
} );






    </script>

    <script type="text/javascript">

 $(function () 
 {
       $('#example2{{$survey->surveyID}}').DataTable(

        {
           "aaSorting": [[ 1, "desc" ]]
         });
       




       $('#example3{{$survey->surveyID}}').DataTable(
       {
           "aaSorting": [[ 1, "desc" ]]

         });

     });
    
     






    </script>
@endif
 @endforeach



 <script type="text/javascript">


      $('#print-button').click(function()

      {
        
        $('.hideprint').hide();

          window.print();

      $('.hideprint').show();
               

      });


       $('#tester').click(function()
{
    

  ajax();
           
  });


function ajax() {
 
    var data = {
          'testval':$('#testerval').val(),
         '_token': $('input[name=_token]').val()
        
    };


 
   $.ajax({
       url: '/usermanagement/ajax',
      type: "post",
       data: data,
           success: function(data){

          var  testval = JSON.parse(data)['testval'];
          
    $('#testerval2').val(testval);
  
  

      }
 
   }); 




       

}




     

 </script>




        
  @endsection

 