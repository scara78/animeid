<?php include 'animecon.php';?>
<?php foreach ($animesingles as $animesingle) : ?>
<title><?php echo $animesingle->title; ?> Episode <?php echo $eps; ?> English Subbed | AnimeID</title>
<?php include 'header.php';?>
<div class="container">
<div class="row">
<div class="col-lg-8 col-12">
	<div class="homepage2">
<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://database.gdriveplayer.us//player.php?type=anime&id=<?= $id; ?>&episode=<?= $eps; ?>" allowfullscreen></iframe>
</div>
	</div>
<div class="homepage2" style="padding: 10px; border-radius: 10px;">
<div class="input-group">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Pilih Episodes</label>
  </div>
  <select  style="margin-right: 10px;" class="custom-select" id="inputGroupSelect01" name="forma" onchange="location = this.value;">
    <option selected>Episode <?= $eps ?></option>
<?php 
for ($x = 1; $x <= $animesingle->total_episode; $x++) {
    echo "<option value='https://animeidme.herokuapp.com/episode.php?id=$id&eps=$x'>Episode $x";
} 
?>
  </select>
  <button style="float: right;" type="button" class="btn btn-dark">Mode Gelap</button>
</div>

</div>
<?php endforeach ?>

<div class="homepage">
<div class="login_in_post">
<div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://anikyou.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
</div>
</div>
</div>
<?php include 'sidebar.php';?>
<?php include 'footer.php';?>
