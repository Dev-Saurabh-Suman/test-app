<!DOCTYPE html>
<html lang="en">
@include('layout.head')
<body>
    <div class="container-scroller">
    	@include('layout.navbar')
    	<div class="container-fluid page-body-wrapper">
    		@include('layout.sidebar')
    		<div class="main-panel">
    			@yield('content')
    			@include('layout.footer')
    		</div>
    	</div>
    </div>
    @include('layout.script')
</html>