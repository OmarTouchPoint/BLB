<?php $current_url = $_SERVER['REQUEST_URI'];?> 	
    <!-- Preloader -->
    <div class="preloader"></div>
    
    <!-- Main Header -->
    <header class="main-header fixed">
    	<!--Header Top-->
      
        
        
        <!--Header Lower-->
        <div class="header-lower">
        	<div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo"><a href="./"><img src="images/logo-137x90.png" alt="Volunteer" title="Volunteer"></a></div>
                
                <!--Right Container-->
                <div class="right-cont clearfix">
                    
                    <!-- Main Menu -->
                    <nav class="main-menu ">
                        <div class="navbar-header">
                            <!-- Toggle Button -->      
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">                                                                                              
                            <ul class="navigation">
                                <li class="<?php echo ($current_url === '/' || $current_url === '') ? 'current' : ''; ?> dropdown"><a href="./"> <br> Home</a>
                                
                                </li>
                                <li class="<?php echo (strpos($current_url, 'become-a-big-bow') !== false) ? 'current' : ''; ?> dropdown">
                                    <a href="./become-a-big-bow"><br>BIG BOW</a>
                                    
                                </li>
                                <li class="<?php echo (strpos($current_url, 'donate') !== false) ? 'current' : ''; ?> dropdown">
                                    <a href="./donate"> <br> DONATE</a>
                                </li>
                                <li class=" <?php echo (strpos($current_url, 'founders') !== false) ? 'current' : ''; ?> dropdown">
                                    <a href="./founders"> <br> Founder</a>
                                </li>
                                <li class="<?php echo (strpos($current_url, 'mission') !== false) ? 'current' : ''; ?> dropdown">
                                    <a href="./mission"> <br> MISSION</a>
                                    
                                </li>
                                <li class="<?php echo (strpos($current_url, 'become-a-little-bow') !== false) ? 'current' : ''; ?> dropdown">
                                    <a href="./become-a-little-bow"><br> Little BOW</a>
                                   
                                </li>                            
                                <li class="<?php echo ($current_url === '/#contact' || $current_url === '') ? 'current' : ''; ?> dropdown">
                                    <a href="./#contact"> <br> Contact</a>
                                   
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                </div>
                
            </div>
            
        </div>
        <!--Header Lower End-->
        
    </header>
    <!--End Main Header -->
    
    
    <!--Sidebar Navigation-->
    <aside id="side-navigation">
    	<button type="button" class="toggle-nav"><span class="fa fa-bars"></span></button>
            
        <div class="sidebar-inner">
            <!--Logo-->
            <div class="logo"><a href="./#"><img src="images/logo-202x133.png" alt="rainbow-logo" style="opacity: 1;"></a></div>
            
            <!--Main Navigation-->
            <nav class="navigation">
                <ul>
                    <li class="<?php echo ($current_url === '' || $current_url === '') ? 'current' : ''; ?> "><a href="./">Home</a>
                        <!-- <ul class="submenu">
                            <li><a href="./">Home</a></li>
                        </ul> -->
                    </li>
                    <li class="<?php echo (strpos($current_url, 'become-a-big-bow') !== false) ? 'current' : ''; ?>">
                        <a href="./become-a-big-bow">BIG BOW</a>
                        <!-- <ul class="submenu">
                            <li><a href="./become-a-big-bow">BIG BOW</a></li>
                        </ul> -->
                    </li>
                    <li class="<?php echo (strpos($current_url, 'donate') !== false) ? 'current' : ''; ?>">
                        <a href="./donate">DONATE</a>
                        <!-- <ul class="submenu">
                            <li><a href="./donate">DONATE</a></li>
                        </ul> -->
                    </li>
                    <li class="<?php echo (strpos($current_url, 'founders') !== false) ? 'current' : ''; ?>">
                        <a href="./founders">FOUNDER</a>
                        <!-- <ul class="submenu">
                            <li><a href="./donate">FOUNDER</a></li>
                        </ul> -->
                    </li>
                    <li class="<?php echo (strpos($current_url, 'mission') !== false) ? 'current' : ''; ?>"><a href="./mission">MISSION</a>
                        <!-- <ul class="submenu">
                            <li><a href="./mission">MISSION</a></li>
                            
                        </ul> -->
                    </li>
                    <li class="<?php echo (strpos($current_url, 'become-a-little-bow') !== false) ? 'current' : ''; ?>"><a href="./become-a-little-bow">LITTLE BOW</a>
                        <!-- <ul class="submenu">
                            <li><a href="./become-a-little-bow">LITTLE BOW</a></li>
                            
                        </ul> -->
                    </li>
                    
                    

                    
                    <li class="dropdown"><a href="./#contact">CONTACT</a>
                        <ul class="submenu from-left">
                            <li><a href="./#contact">CONTACT</a></li>
                            <li><a href="./mailto:contact@biglittlebows.org">EMAIL</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!--Sidebar Nav End-->