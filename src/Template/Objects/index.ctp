<h1>Objects</h1>
<hr>
<?= $this->Html->Link('Add Object', ['action' => 'add']) ?>
<hr>
<table>
    <thead>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Note</td>
    </tr>
    </thead>
    <?php foreach ($objects as $object): ?>
        <tbody>
        <tr>
            <td>
                <?= $object->ID ?>
            </td>
            <td>
                <?= $object->Name ?>
            </td>
            <td>
                <?= $object->Note ?>
            </td>
        </tr>
        </tbody>
    <?php endforeach; ?>
</table>