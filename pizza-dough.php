<?php include_once "/home/18zl107/public_html/a5/inc/functions.php"; ?>
<?php include_once "/home/18zl107/public_html/a5/inc/header.php"; ?>
<?php include_once "/home/18zl107/public_html/a5/inc/footer.php"; ?>

<!DOCTYPE html>
<html lang="en">

<!-- Alisa Liu -->
<?php print_head('Pizza Dough', true); ?>

<body>
<div class="column-container">
  
  <?php print_header(); ?>

  <div class="column">
  <main>
  	<?php $submit = $_SERVER["REQUEST_METHOD"] ?>
  	<?php if ($submit == "POST") { ?>
  		<div class="afterpost"> Thank you for your comment! </div>
 	<?php } ?>

    <h1 class="heading">Pizza Dough</h1>
    <p>This is a slightly modified version of King Arthur Flour's <a class="links" href="https://www.kingarthurbaking.com/recipes/sourdough-pizza-crust-recipe">Sourdough Pizza Crust</a> that substitutes spelt for wheat.</p>
    <section>
      <h2 class="heading">Ingredients</h2>

      <div class="quantity-button-group">
        <button class="quantity-button" value="1">Single Batch</button>
        <button class="quantity-button" value="2">Double Batch</button>
        <button class="quantity-button" value="3">Triple Batch</button>       
      </div>

      <ul>
        <li><span class="changes" value="1">1</span> cup (give or take) of unfed/discard sourdough starter</li>
        <li><span class="changes" value="0.75">&frac34;</span> cup lukewarm water</li>
        <li>rounded <span class="changes" value="0.5">&frac12;</span> tsp. instant or active dry yeast</li>
        <li><span class="changes" value="2.5">2 &frac12;</span> cups light spelt flour</li>
        <li><span class="changes" value="1">1</span> tsp. salt</li>
        <li>A little olive oil</li>
      </ul>
    </section>

    <section>
      <h2 class="heading">Directions</h2>

      <p>Once a step is complete, click its button to hide it.</p>

      <ol class="directions">
        <li> <p>Turn your oven light on to create a warm place for the pizza dough to rise.</p></li>
        <li>Separate your starter into two parts: one to feed and one for the pizza dough.
          You'll need approximately one cup of starter for this recipe; put it in your largest mixing bowl.
          <img class="images" src="/~18zl107/a5/img/separated_starter.jpeg" alt="The second step of making a pizza dough which is separating your starter into two parts.">
        </li>
        <li>Pour the warm water over the starter and then sprinkle the yeast over it. (This will give the yeast a bit of a head start.)
          <img class="images" src="/~18zl107/a5/img/water_and_yeast_added.jpeg" alt="Sprinkling the yeast.">
        </li>
        <li>Add the flour and the salt to the bowl.
          <img class="images" src="/~18zl107/a5/img/flour_and_salt_added.jpeg" alt="Adding flour and salt.">
        </li>
        <li>Mix everything together with your hands. It will initially look messy before forming into a good dough.
          <img class="images" src="/~18zl107/a5/img/mixing_by_hand.jpeg" alt="Mixing everything by hand.">
        </li>
        <li>The dough should feel slightly sticky but not really stick to your hands or the counter. Don't be afraid to add a little more flour or water to get the right consistency.
          <img class="images" src="/~18zl107/a5/img/slightly_sticky_dough.jpeg" alt="The dough now feels slightly sticky.">
        </li>
        <li>Knead the dough for 7 minutes. This is an excellent opportunity to work out any frustration you've been feeling lately. The dough will become smooth and elastic.
          <img class="images" src="/~18zl107/a5/img/kneaded_dough.jpeg" alt="This step is to knead the dough for 7 minutes.">
        </li>
        <li>Grease your second-largest mixing bowl with olive oil using your hands. Lightly coat the dough in oil as well, put in the bowl and loosely cover it.
          <img class="images" src="/~18zl107/a5/img/oiled_dough.jpeg" alt="The eighth step is to grease the dough and then cover it.">
        </li>
        <li>Loosely cover the bowl, put it in the oven and leave it there for 3-4 hours.
          <img class="images" src="/~18zl107/a5/img/rising_in_the_oven.jpeg" alt="Leave the dough in the oven for 3-4 hours.">
        </li>
        <li>The dough will increase in size and become softer. It's now ready to use.
          <img class="images" src="/~18zl107/a5/img/risen_dough.jpeg" alt="The dough is ready to use!">
        </li>
      </ol>
    </section>

    <section>
      <h2 class="heading title">Comments</h2>
        <div class="displaying">
        <?php $comments = get_user_comments_from_db(); ?>
        <?php if ($submit == "POST") { 
			$username = $_POST["commenter-name"]; 
			$usermessage = $_POST["comment-text"];
		 	append_user_comment_from_db($comments, $username, $usermessage);
		 } ?>
        <?php foreach ($comments as $comment) : ?>
          <div class="comments">
          	<?php if ($comment[USER_COMMENT_DB_NAME] == null) { ?>
          		<p class="username"><?= USER_COMMENT_DB_NAME_ANONYMOUS ?></p> 
          	<?php } ?>
          	<?php if ($comment[USER_COMMENT_DB_NAME] != null)  { ?>
          		<p class="username"><?= $comment[USER_COMMENT_DB_NAME] ?></p>
          	<?php } ?>
            <p class="commenttime"><?= (date('M j, Y', $comment[USER_COMMENT_DB_TIMESTAMP])) ?></p>
            <p class="commenttext"><?= $comment[USER_COMMENT_DB_TEXT] ?></p>
          </div>
        <?php endforeach; ?>

        </div>
    </section>

    
    <?php 
    $displayForm = True;
    if (($submit == "POST")) {
    	$displayForm = False;
    }
    if ($displayForm) { ?>
    	<section>
    	<form id="comment-form" method="post" action="">
      		<h2 class="heading">Post a Comment</h2>
	        <div class="row joined">
	          <label for="<?= USER_COMMENT_FORM_NAME ?>">Name:</label>
	          <input type="text" name="<?= USER_COMMENT_FORM_NAME ?>" id="<?= USER_COMMENT_FORM_NAME ?>"/> 
	        </div>
	        <div class="row joined">
	          <label for="<?= USER_COMMENT_FORM_TEXT ?>">Comment(Required):</label>
	          <textarea name="<?= USER_COMMENT_FORM_TEXT ?>" id="<?= USER_COMMENT_FORM_TEXT ?>" rows="5" required></textarea>
	        </div>
	        <div>
				<input type="submit" value="Post" disabled="disabled" id="post"/>
			</div>	
        </form>
    	</section>
    <?php } ?>
    

  </main>

  <?php print_footer(); ?>

  </div>
</div>
</body>
</html>
