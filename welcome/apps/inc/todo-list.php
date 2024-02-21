<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
 
    <?php 

  session_start();
  include("../../../css.php");
  include("../../../conn.php");
  include("../../ses.php");
  include("../../ver.php");
  include("../../headers/header.php");

  ?>
  <link rel="stylesheet" type="text/css" href="../../font/css/all.css">
  <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
  <link rel="shortcut icon" href="../../logo/s1.png">
  <meta name="robots" content="index,follow">
  <title><?php echo $ses_uname; ?> | Todo List | Skiyen</title>
</head>
<body>
<main class="container" role="main">

<br>
<br>


  <center><h4><?php echo ucfirst($ses_uname); ?> | My To Do List</h4></center>
    <input type="text" class="form-control m9i90" id="tdi" placeholder="Todo Item" name="">
    <button class="btn btn-primary oj" onclick="ai();"><i class="fa fa-plus"></i></button>
<br>
<div id="todos">
  <i class="fa fa-spinner fa-pulse" style="font-size: 20px;"></i>Loading...
</div>


<script type="text/javascript">
    todos();
    function todos(){
      my_ajax('inc/todo1.php','todos');
    }
    function ai(){
      var tdi = document.getElementById('tdi').value;
      var formdata = new FormData();
      formdata.append("tdi", tdi);
      var ajax = new XMLHttpRequest();
      ajax.open("POST","inc/todos.php");
      ajax.send(formdata);
      var tdi = document.getElementById('tdi').value = "";
      setTimeout(todos,3000);
  }
  function dt(id){
      var formdata = new FormData();
      formdata.append("id", id);
      var ajax = new XMLHttpRequest();
      ajax.open("POST","inc/todo2.php");
      ajax.send(formdata);
      setTimeout(todos,3000);
  }
</script>

</main>
</body>
</html>