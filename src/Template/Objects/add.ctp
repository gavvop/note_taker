<h1>Add Object</h1>
<hr>
<?= $this->Html->Link('Show Objects', ['action' => 'index']) ?>
<hr>
<?= $this->Form->create(); ?>
<table>
    <tbody>
    <tr>
        <td>Name</td>
        <td>
            <input type="text" name="Name" value="<?= (isset($object) ? $object->Name : '') ?>">
        </td>
    </tr>
    <tr>
        <td>Note</td>
        <td>
            <input type="text" name="Note" value="<?= (isset($object) ? $object->Note : '') ?>">
        </td>
    </tr>
    <tr>
        <td rowspan="2">
            <input type="submit" value="Add Object">
        </td>
    </tr>
    </tbody>
</table>
<?= $this->Form->end(); ?>