@extends('app')

@section('content')
 
 <style>
.embed-container {
    position: relative;
    padding-bottom: 56.25%;
    height: 0;
   /* overflow: hidden;*/
    max-width: 100%;
}

.embed-container iframe,
.embed-container object,
.embed-container embed {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}


</style>
 <div class='embed-container'><iframe src='/cache/memcached' style='border:0'></iframe></div>

            

@endsection


@section('js')


   

    
   
@endsection