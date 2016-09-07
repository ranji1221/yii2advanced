<?php
	$this->title = $post->title; 
	$this->params['breadcrumbs'][] = ['label'=>'Post','url'=>['index']];
	$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?php echo $post->title; ?></h1>
<p class="text-muted">作者：<?php echo $post->author; ?></p>
<p>
	<?php echo yii\helpers\Markdown::process($post->content,'gfm');?>
</p>