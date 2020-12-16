<?php 

include "../lib/php/functions.php";

$filename = "users.json";
$users = file_get_json($filename);



//CRUD create read update delete

// $_POST file_put_contents ison_encode explode

// print_p([$_GET,$_POST]);


$empty_user = (object)[
   "name"=>"",
   "type"=>"",
   "email"=>"",
   "classes"=>[]
];



switch(@$_GET['crud']) {
   case 'update':
      $users[$_GET['id']]->name = $_POST['user-name'];
      $users[$_GET['id']]->type = $_POST['user-type'];
      $users[$_GET['id']]->email = $_POST['user-email'];
      $users[$_GET['id']]->classes = explode(", ",$_POST['user-classes']);

      file_put_contents($filename,json_encode($users));

      header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
      break;


   case 'create':
      $empty_user->name = $_POST['user-name'];
      $empty_user->type = $_POST['user-type'];
      $empty_user->email = $_POST['user-email'];
      $empty_user->classes = explode(", ",$_POST['user-classes']);

      $id = count($users);

      $users[] = $empty_user;

      file_put_contents($filename,json_encode($users));

      header("location:{$_SERVER['PHP_SELF']}?id=$id");
      break;


   case 'delete':
      array_splice($users,$_GET['id'],1);

      file_put_contents($filename,json_encode($users));

      header("location:{$_SERVER['PHP_SELF']}");
      break;
}

function showUserPage($user) {

$id = $_GET['id'];
$classes = implode(", ", $user->classes);
$addoredit = $id=='new' ? 'Add' : 'Edit';
$createorupdate = $id=='new' ? 'create' : 'update';


$userdata = $id=='new' ? '' : <<<HTML
<div class="card soft">
   <div class="display-flex">
      <h2 class="flex-stretch">$user->name</h2>
      <div>
         <a href="{$_SERVER['PHP_SELF']}?id=$id&crud=delete">
            <img src='data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pjxzdmcgdmlld0JveD0iMCAwIDMyIDMyIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxkZWZzPjxzdHlsZT4uY2xzLTF7ZmlsbDojMTAxODIwO308L3N0eWxlPjwvZGVmcz48dGl0bGUvPjxnIGRhdGEtbmFtZT0iTGF5ZXIgMTciIGlkPSJMYXllcl8xNyI+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNMjQsMzFIOGEzLDMsMCwwLDEtMy0zVjlBMSwxLDAsMCwxLDcsOVYyOGExLDEsMCwwLDAsMSwxSDI0YTEsMSwwLDAsMCwxLTFWOWExLDEsMCwwLDEsMiwwVjI4QTMsMywwLDAsMSwyNCwzMVoiLz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik0yOCw3SDRBMSwxLDAsMCwxLDQsNUgyOGExLDEsMCwwLDEsMCwyWiIvPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTIwLDdhMSwxLDAsMCwxLTEtMVYzSDEzVjZhMSwxLDAsMCwxLTIsMFYyYTEsMSwwLDAsMSwxLTFoOGExLDEsMCwwLDEsMSwxVjZBMSwxLDAsMCwxLDIwLDdaIi8+PHBhdGggY2xhc3M9ImNscy0xIiBkPSJNMTYsMjZhMSwxLDAsMCwxLTEtMVYxMWExLDEsMCwwLDEsMiwwVjI1QTEsMSwwLDAsMSwxNiwyNloiLz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik0yMSwyNGExLDEsMCwwLDEtMS0xVjEzYTEsMSwwLDAsMSwyLDBWMjNBMSwxLDAsMCwxLDIxLDI0WiIvPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTExLDI0YTEsMSwwLDAsMS0xLTFWMTNhMSwxLDAsMCwxLDIsMFYyM0ExLDEsMCwwLDEsMTEsMjRaIi8+PC9nPjwvc3ZnPg==' class="icon">
         </a>
      </div>
   </div>
   <div>
      <strong>Type</strong>
      <span>$user->type</span>
   </div>
   <div>
      <strong>Email</strong>
      <span>$user->email</span>
   </div>
   <div>
      <strong>Classes</strong>
      <span>$classes</span>
   </div>
</div>
HTML;

echo <<<HTML

<div class="card medium">
	<nav class="nav crumbs">
		<ul>
			<li><a href="{$_SERVER['PHP_SELF']}">Back</a></li>
		</ul>
	</nav>
</div>



<div class="grid gap">
   <div class="col-xs-12 col-md-4">$userdata</div>

	<div class="col-xs-12 col-md-8">
		<div class="well">
			<form method="post" actions="{$_SERVER['PHP_SELF']}?id=$id&crud=$createorupdate">
				<h2>$addoredit User</h2>
			
				<div class="form-control">
			      <label for="user-name" class="form-label">Name</label>
			      <input id="user-name" name="user-name" type="text" placeholder="Type user name" class="form-input" value="$user->name">
			    </div>
			    <div class="form-control">
			      <label for="user-type" class="form-label">Type</label>
			      <input id="user-type" name="user-type" type="text" placeholder="Type user type" class="form-input" value="$user->type">
			    </div>
			    <div class="form-control">
			      <label for="user-email" class="form-label">Email</label>
			      <input id="user-email" name="user-email" type="text" placeholder="Type user email" class="form-input" value="$user->email">
			    </div>
			    <div class="form-control">
			      <label for="user-classes" class="form-label">Classes</label>
			      <input id="user-classes" name="user-classes" type="text" placeholder="Type user classes" class="form-input" value="$classes">
			    </div>
			
			    <div class="form-control">
			    	<input class="form-button" type="submit" value="Save">
			    	</div>
				
			</form>
		</div>
	</div>
</div>

HTML;
  
}



 ?><!DOCTYPE html>
 <html lang="en">
 <head>
 	
 	<title>User Administrator</title>

 	<?php include "../parts/meta.php"; ?>
 </head>
 <body>

 	<header class="navbar">
 		<div class="container display-flex">
 			<div class="flex-none">
 				<h1>Users  Admin</h1>
 			</div>

 			<div class="flex-stretch"></div>
 			<!-- nav.nav.flex-none>ul>li>a[href=#]>{List} -->
 			<nav class="nav flex-none">
 				<ul class="display-flex">
 					<li><a href="<?= $_SERVER['PHP_SELF'] ?>">List</a></li>
 					<li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New User</a></li>

 				</ul>
 			</nav>
 		</div>
 	</header>

 	<div class="container">

 			<?php


         if(isset($_GET['id'])) {

            // ternary or conditional
            showUserPage(
               $_GET['id']=='new' ?
                  $empty_user :
                  $users[$_GET['id']]
            );

 			} else {



 			?>

 	 		
 	 		<div class="card soft">
 	 		<h2>User List</h2>
 	 		<ul>
 	 			<?php 
 	 			
 	 			for($i=0; $i<count($users); $i++) {
 	 				echo "<li>
	 				<a href='{$_SERVER['PHP_SELF']}?id=$i'>{$users[$i]->name}</a>
	 		</li>\n";
 	 			
 	 			}
 	 			
 	 			 ?>
 	 		</ul>
 	 	</div>

 	 		<?php }
 			
 			 ?>
 	 	</div>
 	
 </body>
 </html>