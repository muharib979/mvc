<script src="https://cdn.ckeditor.com/4.7.2/standard/ckeditor.js"></script>

<h2>Update Article</h2>
<?php 
	foreach ($Postbyid as $key => $value) {
		
	

?>





       <form action="<?php echo BASE_URL;?>/Admin/updatePost/<?php echo $value['id']; ?>" method="post">
       		<table>
       		<tr>
       			<td>Title</td>
       			<td><input id="postinput" type="text" name="title" value ="<?php echo $value['title']; ?>"/></td>


       		</tr>
	        <tr>
	            <td>Content</td>
	            <td>
	            	
	            	<textarea name="content">
	            		<?php echo $value['content'];?>
	            	</textarea>
			        <script>
			            CKEDITOR.replace( 'content' );
			        </script>
	            </td>


	        </tr>
	        <tr>
	            <td>Category</td>
	            <td>
	            	<select name="cat" class="cat">
		            	<option>Category One</option>
		            	<?php foreach($catlist as $key =>$cat){ ?>

		            	<option 
		            		<?php 
		            			if ($value['cat'] == $cat['id']) { ?>
		            				selected= "selected"
		            			<?php } ?>

		            		

		            		value="<?php echo $cat['id'];?>"><?php echo $cat['name'];?></option>
		            	<?php } ?>

	            	</select>
	            </td>


	        </tr>
       		<tr>
       			<td></td>
       			<td><input type="submit" name="submit" value= "Update Article"/></td>


       		</tr>

       		</table>
       </form>
       <?php } ?>




</div>
