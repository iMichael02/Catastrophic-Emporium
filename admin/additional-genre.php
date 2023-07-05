<select name="genre" placeholder="Pick a genre...">
    <option value="">Select a genre...</option>
    <?php
    global $genres_list;
    foreach ($genres_list as $genre) {
        ?>
        <option value="<?= $genre->_id ?>"><?= $genre->name ?></option>
        <?php
    }
    ?>
</select>
<script>
    $('select').selectize({
        sortField: 'text'
    });
</script>