<label for="day">Choose a day</label>
<select id="day" name="day">
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "<option value='$day'>day</option>";
    }
    ?>
</select>
