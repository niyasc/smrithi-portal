<table class='table table-striped table-bordered' style="width:1200px;margin-left:auto;margin-right:auto">
	<tr>
		<td style="width:200px">
			<?php require("../templates/member_menu.php") ?>
		</td>
		<td>
			<?php 
				if(count($values["info"])==0)
				{
					echo "no record found";
				}
				else
				{
			?>
			
			<table class='table table-bordered table-striped'>
				<tr style="font-size:20px">
					<td>
						S.N
					</td>
					<td style="width:200px">
						Name
					</td>
					<td style="width:150px">
						Course
					</td>
					<td style="width:200px">
						Department
					</td>
					<td style="width:50px">
						Passout-Year
					</td>
					<td>
						View Detail
					</td>
				</tr>
			<?php
				$i=1;
				foreach($values["info"] as $member)
				{
					?>
					
					<tr>
						<td>
							<?=$i?>
						</td>
						<td>
							<?=$member["fname"]." ".$member["lname"]?>
						</td>
						<td>
							<?=$member["course"]?>
						</td>
						<td>
							<?=$member["department"]?>
						</td>
						<td>
							<?=$member["passout_year"]?>
						</td>
						<td>
							<?php
								print "<a class='btn' href=members.php?view=show_member&id=".$member["id"]." />View Detail</a>";
							?>
						</td>
					</tr>
				<?php
				$i++;
				} ?>
				
			</table>
			<?php 
			} ?>					
					
		</td>
	</tr>
</table>
