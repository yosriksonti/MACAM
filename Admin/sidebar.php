
<div class="sidebar">
        <nav class="sidebar-nav">
          <ul class="nav">
          </br>
            
    
            <li class="nav-item">
              <a class="nav-link" href="Expositions.php">
                <i class="nav-icon icon-drop"></i> Expositions</a>
    </li>
       <li class="nav-item">
       <a class="nav-link" href="Salons.php">
       <i class="nav-icon icon-drop"></i> Salons</a>
       </li>

<li class="nav-item">
<a class="nav-link" href="Oeuvres.php">
<i class="nav-icon icon-drop"></i> Oeuvres</a>
</li>
<li class="nav-item">
<a class="nav-link" href="Artists.php">
<i class="nav-icon icon-drop"></i> Artists</a>
        </li>
<?php if($_SESSION['Role']=="SAd")
    echo'
    </li>
    <li class="nav-item">
    <a class="nav-link" href="register_admin.php">
    <i class="nav-icon icon-drop"></i> Add Admin</a>
    </li>';
    ?>



           

          </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"><a href="logout.php">Logout</a></button>
      </div>
