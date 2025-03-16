
<body>
    <?php
    include('includes/header.php');
    if(!$_SESSION['level']){
        
    }
    else{
        echo('<nav dir="rtl" class="navbar navbar-inverse">
    <div class="container-fluid">
    <ul class="nav navbar-nav navbar-right">');
        include('includes/navlinks.php');
        echo(" </ul>
    </div>
</nav>");
    }
   