<h1><small>title: </small><?= h($article->title)?></h1>

<h3><?= $article->body?></h3>

<p>created: <?= $article->created?></p>
<p>created(RFC850): <?= $article->created->format(DATE_RFC850)?></p>
<p>created(Y-M-D,t):  <?= $article->created->format('Y-m-d\TH:i')?></p>

<h3>
<?=
    $this->Html->link(
        'Edit', ['action' => 'edit',$article->slug]
    );
?>
</h3>
