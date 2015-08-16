
@extends('template')

@section('title')
 <title>MNCH | {{$title}}</title>
@endsection

@section('cdns')

  <!-- Select2 -->
    <link href="/bower_components/admin-lte/plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />
    <link href ="{{ URL::asset('bower_components/parsleyjs/src/parsley2.css') }}"  rel="stylesheet" type="text/css" />  
@endsection 

@section('content')
   

            

       





    {!! Form::open(['url' => '/'.$id.'/Progress','id'=>'demo-form','data-parsley-validate'=>'']) !!}

                <?php echo $Mel?>

           

         


                {!! Form::submit('Submit',['class' => 'submit btn btn-success form-control','id'=>'thesubmit','style'=>'display:none;']) !!}

                {!! Form::close() !!}
                 <a  href="#top">  <button  id="some_id2" class="send-btn btn btn-info form-control" >Confirm and Proceed to review</button></a>

				
			
			


			

        

@endsection

@section('javascript')

<script type="text/javascript">
    
    var timeoutId;  
$('.asave').change(function () {
    if (timeoutId) clearTimeout(timeoutId);
    timeoutId = setTimeout(function () {

        var data = {
            'type':'auto',
          

            'AssID':'{{$AssID}}',
              'user':{{ Auth::user()->id }},
         @foreach($AjaxNames as $AjaxName)
          '{{$AjaxName}}': $('[name^="{{$AjaxName}}"]').val(),
  
                @endforeach
         '_token': $('input[name=_token]').val()

    };
 
         var data2 = {
         @foreach($AjaxNames as $AjaxName)
          '{{$AjaxName}}': $('[name^="{{$AjaxName}}"]:checked').val(),

                @endforeach
         
    };

        var data3 ={
              @foreach($AjaxNames as $AjaxName)
          '{{$AjaxName}}': $('[name="{{$AjaxName}}[]"]').val(),
  
                @endforeach
     

        }
        $.extend( data, data2,data3 );


    $.ajax({
      url: '/survey/save',
      type: "post",
       data: data,
      success: function(data){
       var dt = new Date($.now())
           $('#autosavetext').text('(Autosaved '+ dt +')');    
      }
    }); 
        
    }, 750);
});


</script>

<script type="text/javascript">
$(document).ready(function(){
     $('.send-btn').click(function(){ 
    var data = {

        'type':'trigger',
        'AssID':'{{$AssID}}',
         'user':{{ Auth::user()->id }},
         @foreach($AjaxNames as $AjaxName)
          '{{$AjaxName}}': $('[name^="{{$AjaxName}}"]').val(),
  
                @endforeach
         '_token': $('input[name=_token]').val()

    };
 
         var data2 = {
         @foreach($AjaxNames as $AjaxName)
          '{{$AjaxName}}': $('[name^="{{$AjaxName}}"]:checked').val(),

                @endforeach
         
    };

        $.extend( data, data2 );

    $.ajax({
      url: '/survey/save',
      type: "post",
       data: data,
      success: function(data){
            $('#changeclass').attr('class','callout callout-success');

             $('#changeclass').text('Saved');        
      }
    });      
  
              $('#demo-form').attr('action','/survey/{{$id}}/Progress');  }); 
});
         
</script>

<script type="text/javascript">
    


    var form = document.getElementById("savebt");
document.getElementById("demo-form").setAttribute("action", "/{{$id}}/Saved");
document.getElementById("demo-form").addEventListener("click", function () {

  form.submit();
});



</script>
       <script type="text/javascript">
$('#some_id2').click(function() {

 // assessments/{id}/{date}/{term}/{county}
  // var linki = '/assessments/' + ($('#sv').val()).substring(0,2) + '/'+ $('#County').val();
  // //alert(linki);

  //  $(location).attr('thesubmit', linki);

    $('#thesubmit').show();
    $('#saved').show();
    $('#some_id2').hide();
});

           
      </script>   
	 <!-- Select2 -->



      <script src="/bower_components/admin-lte/plugins/select2/select2.full.min.js" type="text/javascript"></script>
<script type="text/javascript">
      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

       
        //Money Euro
        $("[data-mask]").inputmask();
   

        
        

      

        
      });



          
    </script>
        <script src="{{ URL::asset('bower_components/parsleyjs/dist/parsley2.min.js') }}"></script>  
        
    <!-- InputMask -->
    <script src="/bower_components/admin-lte/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
    <script src="/bower_components/admin-lte/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
    <script src="/bower_components/admin-lte/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
     <script src="/bower_components/admin-lte/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
  <script src="/bower_components/admin-lte/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>

    <script type="text/javascript">
    $(document).ready(function () {
        $('#demo-form').parsley({
            successClass: 'success',
            errorClass: 'error',
            errors: {
                classHandler: function(el) {
                    return $(el).closest('.control-group');
                },
                errorsWrapper: '<span class=\"help-inline\"></span>',
                errorElem: '<span></span>'
            }
        });
    });
</script>


  <script type="text/javascript">
    

    function executecoolness(name) {
    $("[name="+name+"]:checked").each(function() {
        
        $("[coolradio=" + this.id+"]").show();
             $("[coolradio=" + this.id+"]").attr('required','');




            });
    $("[name="+name+"]:not(:checked)").each(function() {
        
        $("[coolradio=" + this.id+"]").hide();
        $("[coolradio=" + this.id+"]").removeAttr('required');
           
          
    });
}

$(document).ready( function() {
    triggers = $("[coolradio]")
        .map(function(){ return $("#" + $(this).attr("coolradio")).get() })
    $.unique(triggers);
    triggers.each( function() {
        executecoolness(this.name);
        $(this).change( function(){ executecoolness(this.name); } );
    });
});
</script>












 <script type="text/javascript">
    

    function executeAutomaticVisibility(name) {
    $("[name="+name+"]:checked").each(function() {
        $("[automaticallyVisibleIfIdChecked=" + this.id+"]").show();
        
    $("[automaticallyVisibleIfIdChecked=" + this.id+"]").find(".themultiple").attr('data-parsley-mincheck','1');
     $("[automaticallyVisibleIfIdChecked=" + this.id+"]").find(".thenormal").attr('required','');
          
             

  
});   
   
    $("[name="+name+"]:not(:checked)").each(function() {
       $("[automaticallyVisibleIfIdChecked=" + this.id+"]").hide();
          $("[automaticallyVisibleIfIdChecked=" + this.id+"]").find(".themultiple").removeAttr('data-parsley-mincheck');
      $("[automaticallyVisibleIfIdChecked=" + this.id+"]").find(".thenormal").removeAttr('required');
         

    });
}

$(document).ready( function() {
    triggers = $("[automaticallyVisibleIfIdChecked]")
        .map(function(){ return $("#" + $(this).attr("automaticallyVisibleIfIdChecked")).get() })
    $.unique(triggers);
    triggers.each( function() {
        executeAutomaticVisibility(this.name);
        $(this).change( function(){ executeAutomaticVisibility(this.name); } );
    });
});
</script>













 <!-- Page script -->
    
<script type="text/javascript">

$( ".coolhidden" ).change(function() {

  var replaceval =  $(this).attr('coolstore');

  $('#'+replaceval).val(this.value);

 
});


 

$( ".coolmultiple" ).change(function() {
  var str = this.name;
  var str2 =  str.slice(0,-2)
  var thehidden = '#' +str2 + 'other';
//arrValues.indexOf('Sam') > -1
  
  var size = "";

  $("#"+str2+ " option:selected").each(function () {
                size += $(this).val() + " ";
            });



  if (size.indexOf('-1') > -1) {
  $(thehidden).show();
  $(thehidden).attr('required','');
}else{
   $(thehidden).hide();
   $(thehidden).removeAttr('required');
}
   
   

});
 


</script>



@endsection 