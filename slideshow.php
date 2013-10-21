 <div id="myCarousel" class="carousel slide">
     <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
     <div class="carousel-inner" >
        <div class="item active">
          <img src="img/img2.jpg" alt="" style="height: 340px;width: 800px" class="img-rounded">
          
        </div>
        <div class="item">
          <img src="img/img1.jpg" alt="" style="height: 340px;width: 800px" class="img-rounded">
          
        </div>
        <div class="item">
          <img src="img/img3.jpg" alt="" style="height: 340px;width: 800px" class="img-rounded">
          
          </div>
        </div>
<!--      <a class="pull-left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>-->
<script>
$(document).ready(function(){
    $('.carousel').carousel()
});
</script>
    </div><!-- /.carousel -->