<!-- navigation -->
<nav class="navbar navbar-default">
 <div class="container-fluid">
   <div class="navbar-header">
     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
     </button>
     <a class="navbar-brand" href="{{ route('product.index') }}">HenryLab Shopping Cart&trade;</a>
   </div>
   <div class="collapse navbar-collapse" id="myNavbar">
     <ul class="nav navbar-nav navbar-right">

       <li >
           <a href="{{ route('product.shoppingcart') }}">
               <i class="fa fa-shopping-cart" aria-hidden="true"></i> Shopping Cart
               <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
           </a>
       </li>
       <li class="dropdown">
         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >
           <i class="fa fa-user" aria-hidden="true"></i>
           User Management
           <span class="caret"></span>
         </a>
         <ul class="dropdown-menu">
           @if(Auth::check())
             <li><a href="{{ route('user.profile') }}">User Profile</a></li>

             <li role="separator" class="divider"><a href="#"></a></li>
             <li><a href="{{ route('user.logout') }}">Logout</a></li>
           @else
             <li><a href="{{ route('user.signup') }}">Signup</a></li>
             <li><a href="{{ route('user.signin') }}">Signin</a></li>
           @endif
         </ul>
       </li>
     </ul>
   </div>
 </div>
</nav>

<!-- end navigation -->
