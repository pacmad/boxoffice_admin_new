<?php
$nm=$_Get["nm"];
mysqli_connect("localhost","root","","boxoffice");
$res=mysql_query("select * from language_tbl where name like('$nm%')");
while($row=mysql_fetch_array($res))
              {
                  		echo '	<table class="table table-hover"> ';
                      echo '  <thead> ';
                           echo '  <tr> ';
                                
                 
                 echo '  <th>Language name</th>';
                 echo '  <th>Operation</th>';
                    echo '          </tr> ';
                    echo '      </thead> ';
                     echo '     <tbody> ';
            
               echo '<tr>';
               echo '<td><input type="checkbox" name="chk[]" value="'.$row["pk_Language_id"].'"></td>';
            
                  echo '<td>'. $row["Language_name"] .'</td>';
                  
                 
                         echo '<td><a href="languageDelete.php?id='. $row["pk_Language_id"].'"><span class="glyphicon glyphicon-trash"></span></a> | <a href="languageUpdate.php?id='. $row["pk_Language_id"].'"><span class="glyphicon glyphicon-pencil"></span></a></td>';
               echo '</tr>';
              }
            ?>
                             </tbody> 
                             </table>
							 <input type="submit" name="btnall" class="btn btn-primary btn-lg" value="Delete All"></center>
							 </form>
			