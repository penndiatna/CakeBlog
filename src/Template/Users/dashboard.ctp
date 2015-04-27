<h1>Administration</h1>
</br>
<?php if(!empty($articles)) { ?>
<h2>Articles</h2>
<a class="floatright" href="<?php echo Configure::read('BASE_URL');?>/admin/articles/add">Add Article</a>
	<table width="100%" cellpadding="0" cellspacing="0" class="sortable">
	<tr>
			<th width="20%">ID</th>
			<th width="60%">Title</th>
			<th width="20%" class="actions">Actions</th>
	</tr>
	<?php
	$i = 0;
	foreach ($articles as $article):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td align="center"><?php echo $article->id; ?></td>
		<td align="center"><?php echo $article->title; ?>&nbsp;</td>
		<td align="center" class="actions">
		<?php echo $this->Html->link('Edit', array('controller' => 'articles', 'action' => 'article_edit', $article->id)); ?>
		<?php echo $this->Form->postLink('Delete', array('controller' => 'articles', 'action' => 'article_delete', $article->id), array('confirm'=>'Are you sure you want to delete that article?')); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
</br>
<?php } ?>
<?php if(!empty($categories)) { ?>
<h2>Categories</h2>
<a class="floatright" href="<?php echo Configure::read('BASE_URL');?>/admin/categories/add">Add Category</a>
	<table width="100%" cellpadding="0" cellspacing="0" class="sortable">
	<tr>
			<th width="20%">ID</th>
			<th width="60%">Title</th>
			<th width="20%" class="actions">Actions</th>
	</tr>
	<?php
	$i = 0;
	foreach ($categories as $category):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td align="center"><?php echo $category->id; ?></td>
		<td align="center"><?php echo $category->title; ?>&nbsp;</td>
		<td align="center" class="actions">
		<?php echo $this->Html->link('Edit', array('controller' => 'categories', 'action' => 'category_edit', $category->id)); ?>
		<?php echo $this->Form->postLink('Delete', array('controller' => 'categories', 'action' => 'category_delete', $category->id), array('confirm'=>'Are you sure you want to delete that category?')); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
</br>
<?php } ?>
<?php if(!empty($pages)) { ?>
<h2>Pages</h2>
<a class="floatright" href="<?php echo Configure::read('BASE_URL');?>/admin/pages/add">Add Page</a>
	<table width="100%" cellpadding="0" cellspacing="0" class="sortable">
	<tr>
			<th width="20%">ID</th>
			<th width="60%">Title</th>
			<th width="20%" class="actions">Actions</th>
	</tr>
	<?php
	$i = 0;
	foreach ($pages as $page):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td align="center"><?php echo $page->id; ?></td>
		<td align="center"><?php echo $page->title; ?>&nbsp;</td>
		<td align="center" class="actions">
		<?php echo $this->Html->link('Edit', array('controller' => 'pages', 'action' => 'page_edit', $page->id)); ?>
		<?php echo $this->Form->postLink('Delete', array('controller' => 'pages', 'action' => 'page_delete', $page->id), array('confirm'=>'Are you sure you want to delete that page?')); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
</br>
<?php } ?>
<?php if(!empty($sidebars)) { ?>
<h2>Sidebars</h2>
<a class="floatright" href="<?php echo Configure::read('BASE_URL');?>/admin/sidebars/add">Add Page</a>
	<table width="100%" cellpadding="0" cellspacing="0" class="sortable">
	<tr>
			<th width="20%">ID</th>
			<th width="60%">Title</th>
			<th width="20%" class="actions">Actions</th>
	</tr>
	<?php
	$i = 0;
	foreach ($sidebars as $sidebar):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td align="center"><?php echo $sidebar->id; ?></td>
		<td align="center"><?php echo $sidebar->title; ?>&nbsp;</td>
		<td align="center" class="actions">
		<?php echo $this->Html->link('Edit', array('controller' => 'sidebar', 'action' => 'sidebar_edit', $sidebar->id)); ?>
		<?php echo $this->Form->postLink('Delete', array('controller' => 'sidebar', 'action' => 'sidebar_delete', $sidebar->id), array('confirm'=>'Are you sure you want to delete that sidebar?')); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
</br>
<?php } ?>
<?php if(!empty($navigation)) { ?>
<h2>Navigation</h2>
<a class="floatright" href="<?php echo Configure::read('BASE_URL');?>/admin/navigation/add">Add Navigation</a>
	<table width="100%" cellpadding="0" cellspacing="0" class="sortable">
	<tr>
			<th width="20%">ID</th>
			<th width="60%">Title</th>
			<th width="20%" class="actions">Actions</th>
	</tr>
	<?php
	$i = 0;
	foreach ($navigation as $navigation_item):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td align="center"><?php echo $navigation_item->id; ?></td>
		<td align="center"><?php echo $navigation_item->title; ?>&nbsp;</td>
		<td align="center" class="actions">
		<?php echo $this->Html->link('Edit', array('controller' => 'navigation', 'action' => 'navigation_edit', $navigation_item->id)); ?>
		<?php echo $this->Form->postLink('Delete', array('controller' => 'navigation', 'action' => 'navigation_delete', $navigation_item->id), array('confirm'=>'Are you sure you want to delete that navigation item?')); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
</br>
<?php } ?>
<?php if(!empty($users)) { ?>
<h2>Users</h2>
<a class="floatright" href="<?php echo Configure::read('BASE_URL');?>/admin/users/add">Add User</a>
	<table width="100%" cellpadding="0" cellspacing="0" class="sortable">
	<tr>
			<th width="20%">ID</th>
			<th width="60%">Title</th>
			<th width="20%" class="actions">Actions</th>
	</tr>
	<?php
	$i = 0;
	foreach ($users as $user):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td align="center"><?php echo $user->id; ?></td>
		<td align="center"><?php echo $user->usesrname; ?>&nbsp;</td>
		<td align="center" class="actions">
		<?php echo $this->Html->link('Edit', array('controller' => 'users', 'action' => 'user_edit', $user->id)); ?>
		<?php echo $this->Form->postLink('Delete', array('controller' => 'users', 'action' => 'user_delete', $user->id), array('confirm'=>'Are you sure you want to delete that article?')); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
<?php } ?>