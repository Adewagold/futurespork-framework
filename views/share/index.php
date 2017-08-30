<div class="starter-template">
        <h1>Shared Page</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>

        	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">

		<a class="btn btn-primary" href="<?php echo ROOT_URL;?>share/add" role="button">Add Shares</a>

		
		 
	</div>

      </div>
      <?php
			foreach ($viewModel as $item) : ?>
				<div class="card card-body">
					<h3><?php echo $item['title'] ?> </h3>
					<small><?php echo $item['create_date'] ?> </small>
					<hr/>
					<p><?php echo $item['body'] ?> </p>
					
					<a href="<?php echo $item['link'] ?>" class="btn btn-success" target="_blank">Go to website</a>
					<br/>
					<br/>

				</div>
		<?php endforeach ?>