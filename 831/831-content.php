<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-831">
	<div class="container">
		<div class="row item">
	        <div class="col-md-6 col-sm-6 col-xs-12">
	            <h3 class="text-center">Basic Example</h3>
	            <div class="well">
	        		<ul class="list-group checked-list-box">
	                  <li class="list-group-item">Cras justo odio</li>
	                  <li class="list-group-item" data-checked="true">Dapibus ac facilisis in</li>
	                  <li class="list-group-item">Morbi leo risus</li>
	                  <li class="list-group-item">Porta ac consectetur ac</li>
	                  <li class="list-group-item">Vestibulum at eros</li>
	                  <li class="list-group-item">Cras justo odio</li>
	                  <li class="list-group-item">Dapibus ac facilisis in</li>
	                  <li class="list-group-item">Morbi leo risus</li>
	                  <li class="list-group-item">Porta ac consectetur ac</li>
	                  <li class="list-group-item">Vestibulum at eros</li>
	                </ul>
	            </div>
	        </div>

	        <div class="col-md-6 col-sm-6 col-xs-12">
	            <h3 class="text-center">Colorful Example</h3>
	            <div class="well">
	            	<ul id="check-list-box" class="list-group checked-list-box">
	                  <li class="list-group-item">Cras justo odio</li>
	                  <li class="list-group-item" data-color="success">Dapibus ac facilisis in</li>
	                  <li class="list-group-item" data-color="info">Morbi leo risus</li>
	                  <li class="list-group-item" data-color="warning">Porta ac consectetur ac</li>
	                  <li class="list-group-item" data-color="danger">Vestibulum at eros</li>
	                </ul>
	                <br />
	                <button class="btn btn-primary col-xs-12" id="get-checked-data">Get Checked Data</button>
	            </div>
	            <pre id="display-json"></pre>
	        </div>
		</div>
				
	</div>
</div>