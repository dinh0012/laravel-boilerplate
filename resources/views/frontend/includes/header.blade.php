<div id="header" class="bg-black">
	<nav id="header-top" class="navbar navbar-expand-lg hidden-mobile  no-gutters">
		<div class="container">
		    <div class="col-sm-4 lang-switcher none-padding">
			    <div class="nav-item dropdown">
				    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownLanguageLink" data-toggle="dropdown"
				       aria-haspopup="true" aria-expanded="false">
				       <!-- {{ __('menus.language-picker.language') }} ({{ strtoupper(app()->getLocale()) }}) -->
				       <span class="country">VIETNAM</span> -  <span class="language">English</span>
				       </a>

				    @include('frontend.includes.lang-switcher')
				</div>
		    	
		    </div>
		    <div class="col-sm-8 account-menu none-padding">
		    	@include('frontend.includes.account-menu')
		    </div>
	    </div>
    </nav>
	    <div id="navbar">
	    	<div class="container">
	    		@include('frontend.includes.navbar')
	    	</div>
		</div>
   
</div>