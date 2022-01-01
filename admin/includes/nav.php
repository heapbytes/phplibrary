 <?php session_start() ?>

 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
     <a class="navbar-brand" href="#">
         <span class="ml-2">Library Management System</span>
     </a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
             <li class="nav-item active">
                 <a class="nav-link" href="index.php"> Dashboard <span class="sr-only">(current)</span></a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="addBooks.php">Add Books</a>
             </li>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="bookList.php">Library</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="bookStatus.php"> Book Timeline </a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="changePass.php">Change Password</a>
             </li>
             
             <li class="nav-item">
                 <a class="nav-link" href="balance.php">Update Balance</a>
             </li>

             <li class="nav-item">
                 <a class="nav-link" href="../../logout.php">Logout (<?php echo $_SESSION['uname']; ?>)</a>
             </li>
         </ul>
     </div>
 </nav>
