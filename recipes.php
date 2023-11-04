<?php include_once "/home/18zl107/public_html/a5/inc/functions.php"; ?>
<?php include_once "/home/18zl107/public_html/a5/inc/header.php"; ?>
<?php include_once "/home/18zl107/public_html/a5/inc/footer.php"; ?>

<!DOCTYPE html>
<html lang="en">

<!-- Alisa Liu -->
<?php print_head('Recipes'); ?>

<body>
<div class="column-container">

  <?php print_header(); ?>

  <div class="column">
  <main>
    <h1 class="heading">Recipes</h1>

    <table>
      <thead>
        <tr>
          <th>Recipe</th>
          <th>Dairy-Free</th>
          <th>Egg-Free</th>
          <th>Vegetarian</th>
          <th class="Vegan">Vegan
          <div class="popup">Vegan recipes don't contain ingredients derived from animals</div></th>
          <th>Starter</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td><a href="/~18zl107/a5/recipe/pizza-dough.php" class="links">Pizza Dough</a></td>
          <td colspan="5">Yes</td>
        </tr>

        <tr>
          <td>Pie Crust</td>
          <td colspan="2">Yes</td>
          <td colspan="3">No</td>
        </tr>

        <tr>
          <td>Jelly Roll</td>
          <td>Yes</td>
          <td colspan="4">No</td>
        </tr>

        <tr>
          <td>Chocolate Pudding Cake</td>
          <td>No</td>
          <td colspan="2">Yes</td>
          <td colspan="2">No</td>
        </tr>
      </tbody>
    </table>

    <section>
      <h2 class="heading">Starter</h2>

      <p>I used King Arthur Flour's recipe for <a href="https://www.kingarthurbaking.com/recipes/" class="links">Sourdough Starter</a>
        using whole spelt flour with excellent results. I now feed it with a mix of &frac13; whole spelt flour and &frac23; light spelt flour.
        It's a 100% hydration starter; if yours is different then you'll need to adjust the liquid and/or flour levels in the recipes accordingly.</p>
    </section>
  </main>

  <?php print_footer(); ?>

  </div>
</div>
</body>
</html>
