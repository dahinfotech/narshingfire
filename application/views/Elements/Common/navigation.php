<header class="header" >   
    <div  id='header-top-info' class="row" style="background-color: #bf0707;height: 50px;padding-top: 1%;color: white;">
        <div class="col-lg-6 col-md-6 text-center">narshingfire@gmail.com</div>
        <div class="col-lg-6 col-md-6 text-center">8076887986, 9718040323</div>
    </div>     
        <div class="container">
            <div class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <div id="header-logo-sec">
                            <a href="<?php echo base_url(); ?>" class="navbar-brand">
                                <img src="<?php echo base_url(); ?>assets/img/logo_round_180.png" style="width: 67%;" />
                                <br> <span class="slogo"> </span>
                            </a>
                        </div>
                    </div><!-- end navbar-header -->
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                        <li class="<?php echo (isset($pageName)&&($pageName=='Home')) ? 'active' : ''; ?>">
                            <a data-scroll href="<?php echo base_url(); ?>" class="int-collapse-menu">Home</a></li>

                        <li class="<?php echo (isset($pageName)&&($pageName=='Whyus')) ? 'active' : ''; ?>">
                            <a data-scroll href="#features" class="int-collapse-menu">Why Us ?</a></li>

                        <li class="<?php echo (isset($pageName)&&($pageName=='About')) ? 'active' : ''; ?>">
                            <a data-scroll href="#about" class="int-collapse-menu">About</a></li>

                        <li class="<?php echo (isset($pageName)&&($pageName=='Services')) ? 'active' : ''; ?>">
                            <a data-scroll href="#services" class="int-collapse-menu">Services</a></li>

                        <li class="<?php echo (isset($pageName)&&($pageName=='Pricing')) ? 'active' : ''; ?>">
                            <a data-scroll href="#pricing" class="int-collapse-menu">Pricing</a></li>

                        <li class="<?php echo (isset($pageName)&&($pageName=='Products')) ? 'active' : ''; ?>">
                            <a data-scroll href="#team" class="int-collapse-menu">Products</a></li>

                        <li class="<?php echo (isset($pageName)&&($pageName=='Industries')) ? 'active' : ''; ?>">
                            <a data-scroll href="#works" class="int-collapse-menu">Industries</a></li>

						<li class="<?php echo (isset($pageName)&&($pageName=='Contact')) ? 'active' : ''; ?>">
                            <a data-scroll href="<?php echo base_url(); ?>Contact" class="int-collapse-menu">Contact</a></li>

                        </ul>
                    </div><!--/.nav-collapse -->
                </div><!--/.container-fluid -->
            </div>
        </div><!-- end container -->
    </header>