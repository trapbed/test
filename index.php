<?php
  include "header.php"

?>

  <div class="container">
    <h2>Фильтр по классу</h2>
    <!-- <form action="/" method="get"> -->
    <form action='' method='get' id='sort-form'>
      <?php
      while ($classes_num = mysqli_fetch_array($classes_number)) { ?>
        <div class="input-group">
          <label for="cl-<?= $classes_num[0] ?>"><?= $classes_num[0] ?></label>
          <input type="radio" value="<?= $classes_num[0] ?>" id="cl-<?= $classes_num[0] ?>" name="class">
        </div>
      <?php }
      ?>
      <input type="submit" value="Применить">
      <a href="/">Сбросить фильтр</a>
    <!-- </form> -->
    <hr>
    <h2>Сортировка</h2>
    
    <select class="form-select" aria-label="Default select example" name='sort' id='sort-select'>
      <option value="" <?= ($sort and $sort == "") ? "selected" : ""; ?>>Без сортировки</option>
      <option value="surname ASC" <?= ($sort and $sort == "surname ASC") ? "selected" : ""; ?>>Фамилия (А-Я)</option>
      <option value="surname DESC" <?= ($sort and $sort == "surname DESC") ? "selected" : ""; ?>>Фамилия (Я-А)</option>
      <option value="number ASC" <?= ($sort and $sort == "number ASC") ? "selected" : ""; ?>>Класс (А-Я)</option>
      <option value="number DESC" <?= ($sort and $sort == "number DESC") ? "selected" : ""; ?>>Класс (Я-А)</option>
    </select>
  </form>
    <br>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Имя</th>
          <th scope="col">Фамилия</th>
          <th scope="col">Отчество</th>
          <th scope="col">Дата рождения</th>
          <th scope="col">Класс</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($stud = mysqli_fetch_assoc($students)) { ?>
          <tr>
            <td scope="row"> <?= $stud["id_student"]; ?> </td>
            <td scope="row"> <?= $stud["name"]; ?> </td>
            <td scope="row"> <?= $stud["surname"]; ?> </td>
            <td scope="row"> <?= $stud["patronymic"]; ?> </td>
            <td scope="row"> <?= $stud["birthday"]; ?> </td>
            <td scope="row"> <?= $stud["number"] . $stud["letter"]; ?> </td>
          </tr>
        <?php }
        ?>
      </tbody>
    </table>
  </div>

  <script>
    $("#sort-select select").change(function() {
      $("#sort-form").submit();
    });
  </script>
</body>

</html>