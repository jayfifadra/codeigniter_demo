<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>CI CRUD</title>
 <script type="text/javascript">
 function show_confirm(act,gotoid)
 {
	 if(act=="edit")
	 var r=confirm("Do you really want to edit?");
     else
	 var r=confirm("Do you really want to delete?");
     if (r==true)  
	 { 
      window.location="users/"+act+"/"+gotoid;
     
	 }
 }  
 
 </script>
 </head>
 <body>
 <h2> Simple CI CRUD Application </h2>
 <table width="600" border="1" cellpadding="5">
 <tr>  <th scope="col">Id</th>
       <th scope="col">User Name</th>  
	   <th scope="col">Description</th>
	   <th scope="col">Entered Date</th> 
	   
	   <th scope="col" colspan="2">Action</th>
 </tr>

 
 <?php foreach ($user_list as $u_key){ ?>
 <tr>  
 <td><?php echo $u_key->id; ?></td>
 <td><?php echo $u_key->name; ?></td>
 <td><?php echo $u_key->description; ?></td>
 <td><?php echo $u_key->entered_date; ?></td>
 
 <td width="40" align="left" ><a href="#" onClick="show_confirm('edit',<?php echo $u_key->id;?>)">Edit</a></td>
 <td width="40" align="left" ><a href="#" onClick="show_confirm('delete',<?php echo $u_key->id;?>)">Delete </a></td>
 </tr>
 <?php }?> 
 <tr>
 <td colspan="7" align="right"> <a href="users/add_form">Insert New User</a></td>
 </tr>
 
 
 </table>  
 </body>
 </html> 