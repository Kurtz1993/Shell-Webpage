<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
  			<a href="index.php" class="navbar-brand" id="startPage">SHELL SYSTEMS</a>
        <?php if($_SESSION['id'] != 1): ?>
  			<a href="table.php" class="navbar-brand" id="nodesPage">Active Nodes</a>
        <a href="user.php" class="navbar-brand" id="userPage">User Profile</a>
        <?php else: ?>
        <a href="admin.php" class="navbar-brand" id="adminPage">Generate Codes</a>
        <a href="admintable.php" class="navbar-brand" id="adminTablesPage">Tables</a>
        <?php endif; ?>
      </div>
      <div class="navbar-collapse collapse navbar-right" id="loginNav">
        <?php if($_SESSION['id'] == 1): ?>
  			<a href= "admin.php" class="navbar-brand navbar-col" id="loggedUser">Welcome, Master!</a>
        <?php else: ?>
        <a href= "user.php" class="navbar-brand navbar-col" id="loggedUser">Welcome, <?php echo $_SESSION['usuario']; ?>!</a>
         <?php endif; ?>
        <a href="index.php?action=destroy" class="navbar-brand navbar-col">Sign out</a>
		  </div>
    </div>
</nav>