<?php $page = "Gallery"; include('header.php'); ?>

<div class="container">
<section>
<div class="row">
<div class="col-md-12">
<h1>Gallery</h1>
<div id="ph"></div>
<p>For more photos, visit our <a href="https://www.flickr.com/groups/57n/">Flickr group</a>.</p>
<script type="text/javascript">
$( document ).ready(function(){
    $.getJSON("https://api.flickr.com/services/feeds/groups_pool.gne?id=2632068@N23&lang=en-us&format=json&jsoncallback=?", function(data){
      $.each(data.items, function(i,item){
        $("#ph").append("<a href=\"" + item.link + "\"><img class=\"imageborder\" style=\"margin: 2px;\" src=\"" + item.media.m + "\"></a>");
      });
    });
});
</script>
</div>
</div>
</section>
</div>
<?php include('footer.php'); ?>
