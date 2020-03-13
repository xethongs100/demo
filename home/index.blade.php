@extends('frontend.layout')

@section('css')	

@endsection

@section('title')
	Trang chủ
@endsection

@section('content')
	@include('frontend.home.slide')
	@include('frontend.home.content')
@endsection

@section('js')
<!-- <script type="text/javascript">
		$('.pagination a').on('click', function(e) {
	        e.preventDefault();
	        var page = $(this).attr('href').split('page=')[1];
	        //alert(page);
	        console.log(page);
	        $.ajax({
	            type: "GET",
	            url: '?page='+ page,
	            datatype: "html",
            }).done(function(response){
            	$('body').html(response);
            	location.hash = 'page='+page;
            });
	    });
</script> -->
@endsection
