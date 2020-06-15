<!DOCTYPE html>

<html>
<head>
<style>

.image{
left: 10%;
position:relative;
align: center;
width: 100%;
}
</style>
</head>
<body>
<h1 style="text-align:center"> Terraform On AWS</h1>
<?php
$image_url=file_get_contents("url.txt");

?>
<div class="image">
        <img   src="<?php echo $image_url;?>" width=1000 height=650 />
</div>
</body>
</html>