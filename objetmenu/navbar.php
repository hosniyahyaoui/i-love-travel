
<div class='container-fluid'>
      <div class="row">
      <div class="col-ms-1"></div>
  <nav>
    <div class="nav-wrapper">
      <a href="home.php" class="brand-logo"style="text-color:succes; padding-left:30px;">I love travel</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
           <li><a href="home.php">HOME</a></li>
        <li><a href="menu.php">menu</a></li>
        <li><a href="contact.php">contact As</a></li>
        <li><a href="aboutas.php">about as</a></li>
        <li><a href="aboutcreature.php">about creater</a></li><!--cv -->    
                <?php
                    
                    if("http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] == "http://localhost/testproject/projet1/insert.php") {
                        echo "<li><a href='logout.php'>log out</a></li>";
                    }else{
                        echo "<li><a href='login.php'>login</a></li>";
                    }
                    
                    
                    ?>
        </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
       <li><a href="sass.html">Menu</a></li>
    <li><a href="sass.html">HOME</a></li>
    <li><a href="badges.html">contact As</a></li>
    <li><a href="collapsible.html">about as</a></li>
    <li><a href="mobile.html">about creater</a></li>
          </ul></div></div>