
<h2>User List</h2>
 <?php 

      if(!empty($_GET['msg'])) {
        $msg = unserialize(urldecode($_GET['msg']));
        if(isset($msg)) {
        foreach ($msg as $key => $value) {
          echo "<span style='color:blue;font-weight:bold'>".$value."</span>";
        }
      }else{
        header("Location: ".BASE_URL."/Admin");
      }
}
 ?>

          
       <table class = "tblone">
       		<tr>
       			<th width="20%">Serial No</th>
       			<th width="30%">UserName</th>
       			<th width="30%">Level</th>
       			<th width="20%">Action</th>
       		</tr>
      <?php
      $i= 0;
          foreach($users as $key =>$value){
          	$i++;
          	?>
       		<tr>
       			<td><?php echo $i ?></td>
       			<td><?php echo $value['username']; ?></td>
           
       			<td>
            <?php 
            
              if ($value['level']==1) {
                echo "Admin";
              } elseif($value['level']==2)  {
                echo "Auther";
              }else{
                echo "Contributor";
              }
              
            ?>
              
            </td>
       			<td>
       				
       				<a onclick ="return confirm ('Are you sure to delete !');" href="<?php echo BASE_URL;?>/User/deleteUser/<?php echo $value['id']?>">Delete</a>
       			</td>
       		</tr>
       		<?php } ?>

       </table>
