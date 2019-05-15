
@php
$data = json_decode($landingPage->data, true);
$controlBotton = '';
$images = '';
$controlLeftAndRight = '';
if(is_array($data) && !empty($data['name'])) {
    $countData = count($data['name']);
    if($countData > 1) {
        for($i=0; $i<$countData; $i++) {
            $active = $i==0 ? 'active':'';
            $controlBotton .= '<li data-target="#myCarousel" data-slide-to="'.$i.'" class="' .$active. '"></li>'; 
            $images .= '<div class="item ' .$active. '">
                        <img src="'.$data['image'][$i].'" alt="'.$data['name'][$i].'" style="width:100%;">
                        <div class="carousel-caption">
                            <h3>'.$data['name'][$i].'</h3>
                            <p>'.$data['description'][$i].'</p>
                        </div>
                    </div>';
                    
        }
        $controlLeftAndRight = '<a class="left carousel-control" 
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
                                </a>';
    } else {
        $images .= '<div class="item active">
                        <img src="'.$data['image'][0].'" alt="'.$data['name'][0].'" style="width:100%;">
                        <div class="carousel-caption">
                            <h3>'.$data['name'][0].'</h3>
                            <p>'.$data['description'][0].'</p>
                        </div>
                    </div>';
    }
}
@endphp
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        {!! $controlBotton !!}
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        {!! $images !!}
    </div>

    <!-- Left and right controls -->
    {!! $controlLeftAndRight !!}
    <!--end slide-->

</div>