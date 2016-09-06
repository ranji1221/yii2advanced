<?php
	$this->title = $post->title;
	$this->params['breadcrumbs'][] = ['label'=>'Posts','url'=>['index']];
	$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?php echo $post->title; ?></h1>
<p class="text-muted">×÷Õß£º<?php echo $post->author; ?></p>
<p>
	<?php echo yii\helpers\Markdown::process($post->content,'gfm');?>
</p>