<?php include 'animecon.php';?>
<?php foreach ($animesingles as $animesingle) : ?>
<title><?php echo $animesingle->title; ?> Episode <?php echo $eps; ?> Subtitle Indonesia | AnimeID</title>
<?php include 'header.php';?>
<div class="container">
<div class="row">
<div class="col-lg-8 col-12">
	<div class="homepage2">
<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://database.gdriveplayer.us//player.php?type=anime_indo&id=<?= $id; ?>&episode=<?= $eps; ?>" allowfullscreen></iframe>
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
    echo "<option value='http://animeid.me/episode.php?id=$id&eps=$x'>Episode $x";
} 
?>
  </select>
  <button style="float: right;" type="button" class="btn btn-dark">Mode Gelap</button>
</div>

</div>
<?php endforeach ?>
<div class="homepage2">
<div class="post_content">
<div class="judul_post titles_post row_index_2">
<h1 class="font-weight-bold">judul</h1>
</div>
<div class="taxonomy row_index_2">
<span class="text-muted taxonomy-title"><i class="fas fa-calendar-alt"></i> 2018-09-11</span> <span class="text-muted categoris"><i class="fas fa-folder"></i> <a href="/category/dorama">Dorama</a></span>
</div>
<div class="sinopsis_title_post titles_post row_index_2">
<h4 class="font-weight-bold">Sinopsis</h4>
</div>
<div class="sinopsis_post row_index_2">
<div class="text-justify"><p>sad
</p></div>
</div>
<div class="genres_taxonomy row_index_2">
<a href="/tag/life"><span class="genres">Life</span></a> <a href="/tag/drama"><span class="genres">Drama</span></a> <a href="/tag/medical"><span class="genres">Medical</span></a> <a href="/tag/manga"><span class="genres">Manga</span></a> </div>
<div class="row_index_2">
faf
</div>
</div>
</div>
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
