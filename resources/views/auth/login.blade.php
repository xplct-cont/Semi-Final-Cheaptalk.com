@extends('base')

@section('content')

@section('title', 'Log in')
<body>
    <div class="container col-md-4 offset-md-4">
        
        @if (session('message'))
        <div id="messagee" class="alert alert-success text-center">{{ session('message') }}</div>
        @endif
        @if (session('error'))
        <div id="messagee" class="alert alert-danger text-center">{{ session('error') }}</div>
        @endif
        <div class="card shadow mb-5 rounded border border-light mt-5">
            <div class="card-body rounded" style="background-color: #2c70b1;" id="card-bodyy">
                <h2 class="text-center mb-4" style="color:white; font-size: 25px;">LOG IN</h2>
                <form action="{{ '/' }}" method="POST">
                    {{ csrf_field() }}

                    <div class="form-group mb-3 mt-1 col-sm-10 offset-sm-1">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                        <input type="email" name="email" id="email" placeholder="Email" class="form-control" required="">
                        </div>
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-5 mt-1 col-sm-10 offset-sm-1">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
                        <input type="password" name="password" id="password" placeholder="Password" class="form-control" required="">
                        <span class="input-group-text" id="basic-addon1" type="show" style="width: 40px; cursor: pointer;" onclick="myFunction()"><i class="fa fa-eye"></i></span>
                        </div>
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <a href="{{ '/register' }}" class="text-white">Sign up for an account</a>
                        </div>
                        <button class="btn btn-light px-5" type="submit"><span class="fas fa-sign-out"></span> Login</button>
                    </div>
                    </form>
            </div>
        </div>
    </div>
</body>

<div class="content">
   
</div>

<div class="box">
    <ul>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>

@endsection

<style>
#basic-addon1 {
    width: 40px;
    text-align: center;
}

.box ul li {
	position: absolute;
	width: 35px;
	height: 35px;
	list-style: none;
	opacity: 0;
	background: radial-gradient(#2c70b1, transparent, transparent);
	bottom: 0;
	left: 10vw;
	animation: animate 15s linear infinite;
}
.box ul li:nth-child(2) {
	left: 30vw;
	animation-delay: 4s;
}
.box ul li:nth-child(3) {
	left: 22vw;
	animation-delay: 9s;
}
.box ul li:nth-child(4) {
	left: 70vw;
	animation-delay: 6s;
}
.box ul li:nth-child(5) {
	left: 79vw;
	animation-delay: 3s;
}
.box ul li:nth-child(6) {
	left: 82vw;
	animation-delay: 8s;
}
.box ul li:nth-child(7) {
	left: 80vw;
	animation-delay: 13s;
}
@keyframes animate {
	0% {
		transform: scale(0);
		opacity: 1;
		bottom: 0;
	}
	100% {
		transform: scale(10);
		opacity: 0;
		bottom: 100vh;
	}
}
</style>

<script>
    function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
