<ul class="nav">
  <li class= "<?php if($page == "home"){ echo 'active';} ?>">
    <a href="index.php">
      <i class="nc-icon nc-bank"></i>
      <STRONG><p>Home</p></STRONG>
    </a>
  </li>
  <li class= "<?php if($page == "user"){ echo 'active';} ?>">
    <a href="./icons.html">
      <i class="nc-icon nc-diamond"></i>
      <STRONG><p>Users</p></STRONG>
    </a>
  </li>
  <li class= "<?php if($page == "user Profile"){ echo 'active';} ?>">
    <a href="./user.html">
      <i class="nc-icon nc-single-02"></i>
      <STRONG><p>User Profile</p></STRONG>
    </a>
  </li>
  <li class= "<?php if($page == "products"){ echo 'active';} ?>">
    <a href="/admin/modules/products.php">
      <i class="nc-icon nc-app"></i>
      <STRONG><p>ПРОДУКТЫ</p></STRONG>
    </a>
  </li>
  <li class= "<?php if($page == "category"){ echo 'active';} ?>">
    <a href="/admin/modules/category.php">
      <i class="nc-icon nc-bullet-list-67"></i>
      <STRONG><p>КАТЕГОРИИ</p></STRONG>
    </a>
  </li>
  <li class= "<?php if($page == "orders"){ echo 'active';} ?>">
    <a href="/admin/modules/orders.php">
      <i class="nc-icon nc-bullet-list-67"></i>
      <STRONG><p>ЗАКАЗЫ</p></STRONG>
    </a>
  </li>
  <li class= "<?php if($page == "log out"){ echo 'active';} ?>">
    <a href="./notifications.html">
      <i class="nc-icon nc-key-25"></i>
      <STRONG><p>Log OUT</p></STRONG>
    </a>
  </li>
 </ul>