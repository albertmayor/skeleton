

<div id="skeleton_body_footer">

<style type="text/css">	  
    .footer {		 
		color: #FFF;
		background: #438EB9;
		padding: 10px;
     }
     
    .footer a {
		color: #999;
    }
    
    .footer a:hover {
         	color: #000;
    }	
</style>
<div style="clear:both;"></div>
<div class="navbar navbar-fixed-bottom">
	<div class="navbar-inner footer">
		<div class="container" align="center">    

		<a href="<?php echo $body_footer_entity_url;?>" style="color:#000;" rel="author"><?php echo $body_footer_entity_name;?></a> <?php echo $body_footer_copyright_date;?> – <a href="<?php echo $body_footer_entity_url;?>" style="color:#000;"> Sergi Tur Badenas</a>,
		<a href="<?php echo $body_footer_entity_url;?>" style="color:#000;" rel="author"> <?php echo $body_footer_entity_url_name;?></a> | <a href="<?php echo $body_footer_wiki_url;?>" style="color:#000;"> Wiki</a> | <a href="<?php echo $body_footer_github_url;?>" style="color:#000;"> Github</a>
		
		</div>	
	</div>
</div>
	
</div>

<script type="text/javascript">
		jQuery(function($) {
		window.prettyPrint && prettyPrint();
		$('#id-check-horizontal').removeAttr('checked').on('click', function(){
		$('#dt-list-1').toggleClass('dl-horizontal').prev().html(this.checked ? '&lt;dl class="dl-horizontal"&gt;' : '&lt;dl&gt;');
		});
	})
</script>

