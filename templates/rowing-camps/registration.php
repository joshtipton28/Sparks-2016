<?php
/**
 * Template part for Rowing Camps Custom Post Type
 **/
?>
<div class="tabs-panel" id="campRegistration">
	<h2><?php echo $campTitle . '<em> ' . $campLocation . ' ';?>Registration</em></h2>
<?php the_field('camp_dates'); ?>

<table>
	<?php /*Registration headings*/
		
	if( have_rows('registration_headings') ): ?>
	 	<thead>
		 	<tr>
		 		<th>
			    <?php while( have_rows('registration_headings') ): the_row(); ?>
			        
			        <?php		        
				        $registrationGroup = get_sub_field('registration_group'); 
			        ?>
			 		<th><?php echo $registrationGroup;?></th>
			    <?php endwhile; ?>
		    </tr>
		</thead>
	<?php endif; ?>

	<tbody>

	<?php /*Week One Registration Links*/
	
	if( have_rows('week_one_registration_links') ): ?>
		<tr>
			<th>Week 1</th>
		    <?php while( have_rows('week_one_registration_links') ): the_row(); ?>
		        
		        <?php 
			        $registrationID = get_sub_field('regatta_registration_id');
			        $registrationStatus = get_sub_field('registration_status'); 
		        ?>

		        <td>
		        	<a onclick="_gaq.push(['_trackEvent', 'Outbound Links', 'Click', 'NYC Reg']);" class="button 
		        		<?php 
		        			if ($registrationStatus == 'Open') echo 'success'; 
		        			else echo 'alert';?>" 
		        		href="https://www.regattacentral.com/cart/index.jsp?job_id=1621&amp;sid_<?php echo $registrationID;?>=1"><?php echo $registrationStatus;
		        		?>
	        		</a>
				</td> 

		    <?php endwhile; ?>
	    </tr>
	<?php endif; ?>

	<?php /*Week Two Registration Links*/
		
	if( have_rows('week_two_registration_links') ): ?>	
		<tr>
			<th>Week 2</th>
	    <?php while( have_rows('week_two_registration_links') ): the_row(); ?>
	        
	        <?php 
	        
		        $registrationID = get_sub_field('regatta_registration_id');
		        $registrationStatus = get_sub_field('registration_status'); 
		       
	        ?>
	 		
			<td>
	        	<a onclick="_gaq.push(['_trackEvent', 'Outbound Links', 'Click', 'NYC Reg']);" class="button 
		        		<?php 
		        			if ($registrationStatus == 'Open') echo 'success'; 
		        			else echo 'alert';?>" 
		        		href="https://www.regattacentral.com/cart/index.jsp?job_id=1621&amp;sid_<?php echo $registrationID;?>=1"><?php echo $registrationStatus;
		        		?>
	        	</a>
			</td>

	    <?php endwhile; ?>
	    </tr>
	<?php endif; ?>

	<?php /*Week Three Registration Links*/
		
	if( have_rows('week_three_registration_links') ): ?>
	 	<tr>
	 		<th>Week 3</th>
	    <?php while( have_rows('week_three_registration_links') ): the_row(); ?>
	        
	        <?php 
		        $registrationID = get_sub_field('regatta_registration_id');
		        $registrationStatus = get_sub_field('registration_status'); 
	        ?>

	        <td>
	        	<a onclick="_gaq.push(['_trackEvent', 'Outbound Links', 'Click', 'NYC Reg']);" class="button 
		        		<?php 
		        			if ($registrationStatus == 'Open') echo 'success'; 
		        			else echo 'alert';?>" 
		        		href="https://www.regattacentral.com/cart/index.jsp?job_id=1621&amp;sid_<?php echo $registrationID;?>=1"><?php echo $registrationStatus;
		        		?>
	        	</a>
			</td>
	 
	    <?php endwhile; ?>
	    </tr>
	<?php endif; ?>

	<?php /*Week Four Registration Links*/
		
	if( have_rows('week_four_registration_links') ): ?>
		<tr>
			<th>Week 4</th>
	    <?php while( have_rows('week_four_registration_links') ): the_row(); ?>
	        
	        <?php 
	        
		        $registrationID = get_sub_field('regatta_registration_id');
		        $registrationStatus = 'Open'; 
		       
	        ?>
	 		
	        <td>
	        	<a onclick="_gaq.push(['_trackEvent', 'Outbound Links', 'Click', 'NYC Reg']);" class="button 
		        		<?php 
		        			if ($registrationStatus == 'Open') echo 'success'; 
		        			else echo 'alert';?>" 
		        		href="https://www.regattacentral.com/cart/index.jsp?job_id=1621&amp;sid_<?php echo $registrationID;?>=1"><?php echo $registrationStatus;
		        		?>
	        	</a>
			</td>

	    <?php endwhile; ?>
	    </tr>
	<?php endif; ?>
	</tbody>
</table>

<?php the_field('registration_promo');?>
</div><!--end panel-->