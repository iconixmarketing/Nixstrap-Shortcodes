<?php

// Bootstrap Sample [nix-bootstrap]
function nix_bootstrap($atts)
{
    $id = '';
    extract(shortcode_atts(
            array(
                'id' => '',
            ), $atts)
    );

    return '
<div id="' . $id . '" class="page-header">
	<div class="row">
		<div class="col-sm-12">
			<ul class="nav nav-pills nav-justified">
				<li role="presentation" class="active"><a href="#navbar">Navbar</a></li>
				<li role="presentation"><a href="#buttons">Buttons</a></li>
				<li role="presentation"><a href="#typography">Typography</a></li>
				<li role="presentation"><a href="#tables">Tables</a></li>
				<li role="presentation"><a href="#forms">Forms</a></li>
				<li role="presentation"><a href="#navs">Navs</a></li>
				<li role="presentation"><a href="#indicators">Indicators</a></li>
				<li role="presentation"><a href="#progress-bars">Progress bars</a></li>
				<li role="presentation"><a href="#containers">Containers</a></li>
				<li role="presentation"><a href="#dialogs">Dialogs</a></li>
				</ul>
		</div>
	</div>
</div>
<div class="page-header">
<h3>Colors</h3>
</div>
<div class="row">
	<div class="col-md-2 bg-primary" style="min-height:100px;">primary</div>
	<div class="col-md-2 bg-success" style="min-height:100px;">success</div>
	<div class="col-md-2 bg-info" style="min-height:100px;">info</div>
	<div class="col-md-2 bg-warning" style="min-height:100px;">warning</div>
	<div class="col-md-2 bg-danger" style="min-height:100px;">danger</div>
	<div class="col-md-2 bg-default" style="min-height:100px;"></div>
</div>
<div class="bs-docs-section clearfix">
	<div class="row">
		<div class="col-lg-12">
			<div class="page-header">
				<h3 id="navbar">Navbar</h3>
			</div>
			<div class="bs-component pad-10">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<div class="navbar-header">
							<button data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
							<a href="#" class="navbar-brand">Brand</a> </div>
						<div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
							<ul class="nav navbar-nav">
								<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
								<li><a href="#">Link</a></li>
								<li class="dropdown"> <a aria-expanded="false" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown <span class="caret"></span></a>
									<ul role="menu" class="dropdown-menu">
										<li><a href="#">Action</a></li>
										<li><a href="#">Another action</a></li>
										<li><a href="#">Something else here</a></li>
										<li class="divider"></li>
										<li><a href="#">Separated link</a></li>
										<li class="divider"></li>
										<li><a href="#">One more separated link</a></li>
									</ul>
								</li>
							</ul>
							<form role="search" class="navbar-form navbar-left">
								<div class="form-group">
									<input type="text" placeholder="Search" class="form-control">
								</div>
								<button class="btn btn-default" type="submit">Submit</button>
							</form>
							<ul class="nav navbar-nav navbar-right">
								<li><a href="#">Link</a></li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
			<div class="bs-component pad-10">
				<nav class="navbar navbar-inverse">
					<div class="container-fluid">
						<div class="navbar-header">
							<button data-target="#bs-example-navbar-collapse-2" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
							<a href="#" class="navbar-brand">Brand</a> </div>
						<div id="bs-example-navbar-collapse-2" class="collapse navbar-collapse">
							<ul class="nav navbar-nav">
								<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
								<li><a href="#">Link</a></li>
								<li class="dropdown"> <a aria-expanded="false" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown <span class="caret"></span></a>
									<ul role="menu" class="dropdown-menu">
										<li><a href="#">Action</a></li>
										<li><a href="#">Another action</a></li>
										<li><a href="#">Something else here</a></li>
										<li class="divider"></li>
										<li><a href="#">Separated link</a></li>
										<li class="divider"></li>
										<li><a href="#">One more separated link</a></li>
									</ul>
								</li>
							</ul>
							<form role="search" class="navbar-form navbar-left">
								<div class="form-group">
									<input type="text" placeholder="Search" class="form-control">
								</div>
								<button class="btn btn-default" type="submit">Submit</button>
							</form>
							<ul class="nav navbar-nav navbar-right">
								<li><a href="#">Link</a></li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
			<!-- /example --> 
			
		</div>
	</div>
</div>
<div class="bs-docs-section">
	<div class="page-header">
		<div class="row">
			<div class="col-lg-12">
				<h3 id="buttons">Buttons</h3>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-7">
			<p class="bs-component pad-10"> <a class="btn btn-default" href="#">Default</a> <a class="btn btn-primary" href="#">Primary</a> <a class="btn btn-success" href="#">Success</a> <a class="btn btn-info" href="#">Info</a> <a class="btn btn-warning" href="#">Warning</a> <a class="btn btn-danger" href="#">Danger</a> <a class="btn btn-link" href="#">Link</a> </p>
			<p class="bs-component pad-10"> <a class="btn btn-default disabled" href="#">Default</a> <a class="btn btn-primary disabled" href="#">Primary</a> <a class="btn btn-success disabled" href="#">Success</a> <a class="btn btn-info disabled" href="#">Info</a> <a class="btn btn-warning disabled" href="#">Warning</a> <a class="btn btn-danger disabled" href="#">Danger</a> <a class="btn btn-link disabled" href="#">Link</a>
			<div class="btn btn-primary btn-xs" id="source-button" style="display: none;">&lt; &gt;</div>
			</p>
			<div style="margin-bottom: 15px;">
				<div style="margin: 0;" class="btn-toolbar bs-component">
					<div class="btn-group"> <a class="btn btn-default" href="#">Default</a> <a data-toggle="dropdown" class="btn btn-default dropdown-toggle" href="#"><span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
					</div>
					<div class="btn-group"> <a class="btn btn-primary" href="#">Primary</a> <a data-toggle="dropdown" class="btn btn-primary dropdown-toggle" href="#"><span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
					</div>
					<div class="btn-group"> <a class="btn btn-success" href="#">Success</a> <a data-toggle="dropdown" class="btn btn-success dropdown-toggle" href="#"><span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
					</div>
					<div class="btn-group"> <a class="btn btn-info" href="#">Info</a> <a data-toggle="dropdown" class="btn btn-info dropdown-toggle" href="#"><span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
					</div>
					<div class="btn-group"> <a class="btn btn-warning" href="#">Warning</a> <a data-toggle="dropdown" class="btn btn-warning dropdown-toggle" href="#"><span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
					</div>
				</div>
			</div>
			<p class="bs-component pad-10"> <a class="btn btn-primary btn-lg" href="#">Large button</a> <a class="btn btn-primary" href="#">Default button</a> <a class="btn btn-primary btn-sm" href="#">Small button</a> <a class="btn btn-primary btn-xs" href="#">Mini button</a> </p>
		</div>
		<div class="col-lg-5">
			<p class="bs-component pad-10"> <a class="btn btn-default btn-lg btn-block" href="#">Block level button</a> </p>
			<div style="margin-bottom: 15px;" class="bs-component pad-10">
				<div class="btn-group btn-group-justified"> <a class="btn btn-default" href="#">Left</a> <a class="btn btn-default" href="#">Middle</a> <a class="btn btn-default" href="#">Right</a> </div>
			</div>
			<div style="margin-bottom: 15px;" class="bs-component pad-10">
				<div class="btn-toolbar">
					<div class="btn-group"> <a class="btn btn-default" href="#">1</a> <a class="btn btn-default" href="#">2</a> <a class="btn btn-default" href="#">3</a> <a class="btn btn-default" href="#">4</a> </div>
					<div class="btn-group"> <a class="btn btn-default" href="#">5</a> <a class="btn btn-default" href="#">6</a> <a class="btn btn-default" href="#">7</a> </div>
					<div class="btn-group"> <a class="btn btn-default" href="#">8</a>
						<div class="btn-group"> <a data-toggle="dropdown" class="btn btn-default dropdown-toggle" href="#"> Dropdown <span class="caret"></span> </a>
							<ul class="dropdown-menu">
								<li><a href="#">Dropdown link</a></li>
								<li><a href="#">Dropdown link</a></li>
								<li><a href="#">Dropdown link</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="bs-component pad-10">
				<div class="btn-group-vertical"> <a class="btn btn-default" href="#">Button</a> <a class="btn btn-default" href="#">Button</a> <a class="btn btn-default" href="#">Button</a> <a class="btn btn-default" href="#">Button</a> </div>
			</div>
		</div>
	</div>
</div>
<div class="bs-docs-section">
	<div class="row">
		<div class="col-lg-12">
			<div class="page-header">
				<h3 id="typography">Typography</h3>
			</div>
		</div>
	</div>
	
	<!-- Headings -->
	
	<div class="row">
		<div class="col-lg-4">
			<div class="bs-component pad-10">
				<h3>Heading 1</h3>
				<h2>Heading 2</h2>
				<h3>Heading 3</h3>
				<h4>Heading 4</h4>
				<h5>Heading 5</h5>
				<h6>Heading 6</h6>
				<p class="lead">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="bs-component pad-10">
				<h3>Example body text</h3>
				<p>Nullam quis risus eget <a href="#">urna mollis ornare</a> vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
				<p><small>This line of text is meant to be treated as fine print.</small></p>
				<p>The following snippet of text is <strong>rendered as bold text</strong>.</p>
				<p>The following snippet of text is <em>rendered as italicized text</em>.</p>
				<p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="bs-component pad-10">
				<h3>Emphasis classes</h3>
				<p class="text-muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
				<p class="text-primary">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				<p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>
				<p class="text-danger">Donec ullamcorper nulla non metus auctor fringilla.</p>
				<p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
				<p class="text-info">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
			</div>
		</div>
	</div>
	
	<!-- Blockquotes -->
	
	<div class="row">
		<div class="col-lg-12">
			<h3 id="type-blockquotes">Blockquotes</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6">
			<div class="bs-component pad-10">
				<blockquote>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
					<small>Someone famous in <cite title="Source Title">Source Title</cite></small> </blockquote>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="bs-component pad-10">
				<blockquote class="blockquote-reverse">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
					<small>Someone famous in <cite title="Source Title">Source Title</cite></small> </blockquote>
			</div>
		</div>
	</div>
</div>

<div class="bs-docs-section">
	<div class="row">
		<div class="col-lg-12">
			<div class="page-header">
				<h3 id="tables">Tables</h3>
			</div>
			<div class="bs-component pad-10">
				<table class="table table-striped table-hover ">
					<thead>
						<tr>
							<th>#</th>
							<th>Column heading</th>
							<th>Column heading</th>
							<th>Column heading</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Column content</td>
							<td>Column content</td>
							<td>Column content</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Column content</td>
							<td>Column content</td>
							<td>Column content</td>
						</tr>
						<tr class="info">
							<td>3</td>
							<td>Column content</td>
							<td>Column content</td>
							<td>Column content</td>
						</tr>
						<tr class="success">
							<td>4</td>
							<td>Column content</td>
							<td>Column content</td>
							<td>Column content</td>
						</tr>
						<tr class="danger">
							<td>5</td>
							<td>Column content</td>
							<td>Column content</td>
							<td>Column content</td>
						</tr>
						<tr class="warning">
							<td>6</td>
							<td>Column content</td>
							<td>Column content</td>
							<td>Column content</td>
						</tr>
						<tr class="active">
							<td>7</td>
							<td>Column content</td>
							<td>Column content</td>
							<td>Column content</td>
						</tr>
					</tbody>
				</table>
			</div>
			<!-- /example --> 
		</div>
	</div>
</div>

<div class="bs-docs-section">
	<div class="row">
		<div class="col-lg-12">
			<div class="page-header">
				<h3 id="forms">Forms</h3>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6">
			<div class="well bs-component">
				<form class="form-horizontal">
					<fieldset>
						<legend>Legend</legend>
						<div class="form-group">
							<label class="col-lg-2 control-label" for="inputEmail">Email</label>
							<div class="col-lg-10">
								<input type="text" placeholder="Email" id="inputEmail" class="form-control" style="background-image: url(); background-repeat: no-repeat; background-attachment: scroll; background-position: right center;">
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-2 control-label" for="inputPassword">Password</label>
							<div class="col-lg-10">
								<input type="password" placeholder="Password" id="inputPassword" class="form-control" style="background-image: url(); background-repeat: no-repeat; background-attachment: scroll; background-position: right center;">
								<div class="checkbox">
									<label>
										<input type="checkbox">
										Checkbox </label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-2 control-label" for="textArea">Textarea</label>
							<div class="col-lg-10">
								<textarea id="textArea" rows="3" class="form-control"></textarea>
								<span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span> </div>
						</div>
						<div class="form-group">
							<label class="col-lg-2 control-label">Radios</label>
							<div class="col-lg-10">
								<div class="radio">
									<label>
										<input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios">
										Option one is this </label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" value="option2" id="optionsRadios2" name="optionsRadios">
										Option two can be something else </label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-2 control-label" for="select">Selects</label>
							<div class="col-lg-10">
								<select id="select" class="form-control">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
								<br>
								<select class="form-control" multiple="">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-10 col-lg-offset-2">
								<button class="btn btn-default" type="reset">Cancel</button>
								<button class="btn btn-primary" type="submit">Submit</button>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
		<div class="col-lg-4 col-lg-offset-1">
			<form class="bs-component pad-10">
				<div class="form-group">
					<label for="focusedInput" class="control-label">Focused input</label>
					<input type="text" value="This is focused..." id="focusedInput" class="form-control" style="background-image: url(); background-repeat: no-repeat; background-attachment: scroll; background-position: right center;">
				</div>
				<div class="form-group">
					<label for="disabledInput" class="control-label">Disabled input</label>
					<input type="text" disabled="" placeholder="Disabled input here..." id="disabledInput" class="form-control">
				</div>
				<div class="form-group has-warning">
					<label for="inputWarning" class="control-label">Input warning</label>
					<input type="text" id="inputWarning" class="form-control">
				</div>
				<div class="form-group has-error">
					<label for="inputError" class="control-label">Input error</label>
					<input type="text" id="inputError" class="form-control">
				</div>
				<div class="form-group has-success">
					<label for="inputSuccess" class="control-label">Input success</label>
					<input type="text" id="inputSuccess" class="form-control">
				</div>
				<div class="form-group">
					<label for="inputLarge" class="control-label">Large input</label>
					<input type="text" id="inputLarge" class="form-control input-lg">
				</div>
				<div class="form-group">
					<label for="inputDefault" class="control-label">Default input</label>
					<input type="text" id="inputDefault" class="form-control">
				</div>
				<div class="form-group">
					<label for="inputSmall" class="control-label">Small input</label>
					<input type="text" id="inputSmall" class="form-control input-sm">
				</div>
				<div class="form-group">
					<label class="control-label">Input addons</label>
					<div class="input-group"> <span class="input-group-addon">$</span>
						<input type="text" class="form-control">
						<span class="input-group-btn">
						<button type="button" class="btn btn-default">Button</button>
						</span> </div>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="bs-docs-section">
	<div class="row">
		<div class="col-lg-12">
			<div class="page-header">
				<h3 id="navs">Navs</h3>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-4">
			<h3 id="nav-tabs">Tabs</h3>
			<div class="bs-component pad-10">
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#home">Home</a></li>
					<li><a data-toggle="tab" href="#profile">Profile</a></li>
					<li class="disabled"><a>Disabled</a></li>
					<li class="dropdown"> <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Dropdown <span class="caret"></span> </a>
						<ul class="dropdown-menu">
							<li><a data-toggle="tab" href="#dropdown1">Action</a></li>
							<li class="divider"></li>
							<li><a data-toggle="tab" href="#dropdown2">Another action</a></li>
						</ul>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div id="home" class="tab-pane fade active in">
						<p>Raw denim you probably haven&rsquo;t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
					</div>
					<div id="profile" class="tab-pane fade">
						<p>Food truck fixie locavore, accusamus mcsweeney&rsquo;s marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
					</div>
					<div id="dropdown1" class="tab-pane fade">
						<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney&rsquo;s organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
					</div>
					<div id="dropdown2" class="tab-pane fade">
						<p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<h3 id="nav-pills">Pills</h3>
			<div class="bs-component pad-10">
				<ul class="nav nav-pills">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#">Profile</a></li>
					<li class="disabled"><a href="#">Disabled</a></li>
					<li class="dropdown"> <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Dropdown <span class="caret"></span> </a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<br>
			<div class="bs-component pad-10">
				<ul class="nav nav-pills nav-stacked">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#">Profile</a></li>
					<li class="disabled"><a href="#">Disabled</a></li>
					<li class="dropdown"> <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Dropdown <span class="caret"></span> </a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-lg-4">
			<h3 id="nav-breadcrumbs">Breadcrumbs</h3>
			<div class="bs-component pad-10">
				<ul class="breadcrumb">
					<li class="active">Home</li>
				</ul>
				<ul class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">Library</li>
				</ul>
				<ul class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#">Library</a></li>
					<li class="active">Data</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-4">
			<h3 id="pagination">Pagination</h3>
			<div class="bs-component pad-10">
				<ul class="pagination">
					<li class="disabled"><a href="#">«</a></li>
					<li class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">»</a></li>
				</ul>
				<ul class="pagination pagination-lg">
					<li class="disabled"><a href="#">«</a></li>
					<li class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">»</a></li>
				</ul>
				<ul class="pagination pagination-sm">
					<li class="disabled"><a href="#">«</a></li>
					<li class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#">»</a></li>
				</ul>
			</div>
		</div>
		<div class="col-lg-4">
			<h3 id="pager">Pager</h3>
			<div class="bs-component pad-10">
				<ul class="pager">
					<li><a href="#">Previous</a></li>
					<li><a href="#">Next</a></li>
				</ul>
				<ul class="pager">
					<li class="previous disabled"><a href="#">← Older</a></li>
					<li class="next"><a href="#">Newer →</a></li>
				</ul>
			</div>
		</div>
		<div class="col-lg-4"> </div>
	</div>
</div>

<div class="bs-docs-section">
	<div class="row">
		<div class="col-lg-12">
			<div class="page-header">
				<h3 id="indicators">Indicators</h3>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<h3>Alerts</h3>
			<div class="bs-component pad-10">
				<div class="alert alert-dismissible alert-warning">
					<button data-dismiss="alert" class="close" type="button">×</button>
					<h4>Warning!</h4>
					<p>Best check yo self, you&rsquo;re not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, <a class="alert-link" href="#">vel scelerisque nisl consectetur et</a>.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-4">
			<div class="bs-component pad-10">
				<div class="alert alert-dismissible alert-danger">
					<button data-dismiss="alert" class="close" type="button">×</button>
					<strong>Oh snap!</strong> <a class="alert-link" href="#">Change a few things up</a> and try submitting again. </div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="bs-component pad-10">
				<div class="alert alert-dismissible alert-success">
					<button data-dismiss="alert" class="close" type="button">×</button>
					<strong>Well done!</strong> You successfully read <a class="alert-link" href="#">this important alert message</a>. </div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="bs-component pad-10">
				<div class="alert alert-dismissible alert-info">
					<button data-dismiss="alert" class="close" type="button">×</button>
					<strong>Heads up!</strong> This <a class="alert-link" href="#">alert needs your attention</a>, but it&rsquo;s not super important. </div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-4">
			<h3>Labels</h3>
			<div style="margin-bottom: 40px;" class="bs-component pad-10"> <span class="label label-default">Default</span> <span class="label label-primary">Primary</span> <span class="label label-success">Success</span> <span class="label label-warning">Warning</span> <span class="label label-danger">Danger</span> <span class="label label-info">Info</span> </div>
		</div>
		<div class="col-lg-4">
			<h3>Badges</h3>
			<div class="bs-component pad-10">
				<ul class="nav nav-pills">
					<li class="active"><a href="#">Home <span class="badge">42</span></a></li>
					<li><a href="#">Profile <span class="badge"></span></a></li>
					<li><a href="#">Messages <span class="badge">3</span></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="bs-docs-section">
	<div class="row">
		<div class="col-lg-12">
			<div class="page-header">
				<h3 id="progress-bars">Progress bars</h3>
			</div>
			<h3 id="progress-basic">Basic</h3>
			<div class="bs-component pad-10">
				<div class="progress">
					<div style="width: 60%;" class="progress-bar"></div>
				</div>
			</div>
			<h3 id="progress-alternatives">Contextual alternatives</h3>
			<div class="bs-component pad-10">
				<div class="progress">
					<div style="width: 20%" class="progress-bar progress-bar-info"></div>
				</div>
				<div class="progress">
					<div style="width: 40%" class="progress-bar progress-bar-success"></div>
				</div>
				<div class="progress">
					<div style="width: 60%" class="progress-bar progress-bar-warning"></div>
				</div>
				<div class="progress">
					<div style="width: 80%" class="progress-bar progress-bar-danger"></div>
				</div>
			</div>
			<h3 id="progress-striped">Striped</h3>
			<div class="bs-component pad-10">
				<div class="progress progress-striped">
					<div style="width: 20%" class="progress-bar progress-bar-info"></div>
				</div>
				<div class="progress progress-striped">
					<div style="width: 40%" class="progress-bar progress-bar-success"></div>
				</div>
				<div class="progress progress-striped">
					<div style="width: 60%" class="progress-bar progress-bar-warning"></div>
				</div>
				<div class="progress progress-striped">
					<div style="width: 80%" class="progress-bar progress-bar-danger"></div>
				</div>
			</div>
			<h3 id="progress-animated">Animated</h3>
			<div class="bs-component pad-10">
				<div class="progress progress-striped active">
					<div style="width: 45%" class="progress-bar"></div>
				</div>
			</div>
			<h3 id="progress-stacked">Stacked</h3>
			<div class="bs-component pad-10">
				<div class="progress">
					<div style="width: 35%" class="progress-bar progress-bar-success"></div>
					<div style="width: 20%" class="progress-bar progress-bar-warning"></div>
					<div style="width: 10%" class="progress-bar progress-bar-danger"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="bs-docs-section">
	<div class="row">
		<div class="col-lg-12">
			<div class="page-header">
				<h3 id="containers">Containers</h3>
			</div>

			<div class="bs-component pad-10">
				<div class="jumbotron">
					<h3>Jumbotron</h3>
					<p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
					<p><a class="btn btn-primary btn-lg">Learn more</a></p>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<h3>List groups</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-4">
			<div class="bs-component pad-10">
				<ul class="list-group">
					<li class="list-group-item"> <span class="badge">14</span> Cras justo odio </li>
					<li class="list-group-item"> <span class="badge">2</span> Dapibus ac facilisis in </li>
					<li class="list-group-item"> <span class="badge">1</span> Morbi leo risus </li>
				</ul>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="bs-component pad-10">
				<div class="list-group"> <a class="list-group-item active" href="#"> Cras justo odio </a> <a class="list-group-item" href="#">Dapibus ac facilisis in </a> <a class="list-group-item" href="#">Morbi leo risus </a> </div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="bs-component pad-10">
				<div class="list-group"> <a class="list-group-item" href="#">
					<h4 class="list-group-item-heading">List group item heading</h4>
					<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
					</a> <a class="list-group-item" href="#">
					<h4 class="list-group-item-heading">List group item heading</h4>
					<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
					</a> </div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<h3>Panels</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-4">
			<div class="bs-component pad-10">
				<div class="panel panel-default">
					<div class="panel-body"> Basic panel </div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">Panel heading</div>
					<div class="panel-body"> Panel content </div>
				</div>
				<div class="panel panel-default">
					<div class="panel-body"> Panel content </div>
					<div class="panel-footer">Panel footer</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="bs-component pad-10">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Panel primary</h3>
					</div>
					<div class="panel-body"> Panel content </div>
				</div>
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">Panel success</h3>
					</div>
					<div class="panel-body"> Panel content </div>
				</div>
				<div class="panel panel-warning">
					<div class="panel-heading">
						<h3 class="panel-title">Panel warning</h3>
					</div>
					<div class="panel-body"> Panel content </div>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="bs-component pad-10">
				<div class="panel panel-danger">
					<div class="panel-heading">
						<h3 class="panel-title">Panel danger</h3>
					</div>
					<div class="panel-body"> Panel content </div>
				</div>
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">Panel info</h3>
					</div>
					<div class="panel-body"> Panel content </div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<h3>Wells</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-4">
			<div class="bs-component pad-10">
				<div class="well"> Look, I&rsquo;m in a well! </div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="bs-component pad-10">
				<div class="well well-sm"> Look, I&rsquo;m in a small well! </div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="bs-component pad-10">
				<div class="well well-lg"> Look, I&rsquo;m in a large well! </div>
			</div>
		</div>
	</div>
</div>
	';
}

add_shortcode('nix-bootstrap', 'nix_bootstrap');