<?php $view->extend('layout.html.php') ?>
<?php $view['slots']->set('title', 'List of Posts') ?>
<h1>List of Pos</h1>
<ul>
<?php foreach ($posts as $post): ?>
<li>
<a href="<?php echo $view['router']->path(
'blog_show',
array('id' => $post->getId())
) ?>">
<?php echo $post->getTitle() ?>
</a>
</li>
<?php endforeach ?>
</ul>
