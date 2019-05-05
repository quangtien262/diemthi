<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="/frontend/image/1.jpg" alt="Los Angeles" style="width:100%;">
            <div class="carousel-caption">
                <h3> Đây là phiên bản 365 của bạn </h3>
                <p>Khám phá những gì bạn có thể làm hàng </p>
            </div>
        </div>

        <div class="item">
            <img src="/frontend/image/2.jpg" alt="Chicago">
        </div>

        <div class="item">
            <img src="/frontend/image/3.jpg" alt="New york" style="width:100%;">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" 
        href="#myCarousel" 
        data-slide="prev" 
        style="background-image: none;width:20px"> 
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" 
        href="#myCarousel" 
        data-slide="next"
        style="background-image: none;width:20px"> 
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--end slide-->

</div>