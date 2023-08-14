<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="icon" href="<?=base_url('assets/images/favicon.png');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jasper Documents</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-4">
				<h2>Test jasper reports</h2>
				<p>
					PDF: <a href="<?=base_url($pdf);?>" target="_blank"><?=base_url($pdf);?></a>
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<embed src="<?=base_url($pdf);?>" type="application/pdf" width="100%" height="600px"/>
			</div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
