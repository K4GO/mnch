  <select style="width:100%" multiple name="graphs" id="graphs" hidden>
  <option selected value="MNHV1_MainBlood">CHV2_ownership</option>
  <option selected value="MNHV1_ReasonBlood">CHV2_types</option>  
</select>

<select style="width:100%"  name="theyears" id="theyears" hidden>
  <option selected value="not">year1</option>
</select>

<select style="width:100%" multiple name="thetypes" id="thetypes" hidden>
  <option selected value="pie">year1</option>
  <option selected value="pie">year2</option>  
</select>

  <div id="dialog" title="Dialog Title"></div>
    

                        <div  id="info-title">                     
                     <div class=" " >
                         <br>                     
                        <center ><h2 id="info-title"><b>BLOOD AND TRANSFUSIONS</b></h2></center>
                        <br>
                        </div>
                        </div>
</div>


        <div class="row">
           <div class="col-xs-6">
               <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Main Source of Blood
                   <small class="cmpr" id="box-toolspull-right">
                    <a href="/comparison/MNHV1/MNHV1_MainBlood/pie/" class="btn-primary btn-xs">Launch Comparison</a>
                    </small>
                    
                    </h3>
                    <button class="btn btn-box-tool pull-right" data-widget="collapse"><i class="fa fa-minus"></i></button>
                </div>
                <div class="box-body">

              <div id="MNHV1_MainBlood"></div>     
                </div>
                  <div class="wait overlay">
                  <i class="fa fa-refresh fa-spin"></i>
                </div>
              </div>
</div>

   <div class="col-xs-6">

               <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Reason for no transfusion
                  <small class="cmpr" id="box-toolspull-right">
                     <a href="/comparison/MNHV1/MNHV1_ReasonBlood/pie/" class="btn-primary btn-xs">Launch Comparison</a>
                    </small>
                    
                  </h3>
                  <button class="btn btn-box-tool pull-right" data-widget="collapse"><i class="fa fa-minus"></i></button>  
                </div>
                <div class="box-body">

                <div id="MNHV1_ReasonBlood"></div>  

                </div><!-- /.box-body -->
                  <div class="wait overlay">
                  <i class="fa fa-refresh fa-spin"></i>
                </div>
              </div><!-- /.box -->
            </div><!-- /.col (LEFT) -->        


  
</div>

</div>

