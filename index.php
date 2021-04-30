<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get a quote</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/quote.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
</head>

<body>

<?php include('components/header.php'); ?>

    <div class="quote-section">
        <div class="fixed-more-info">
            <div class="container"> 
                <div class="row slider-nav"> 
                    <?php include('single-sticky-tarrif.php'); ?>
                    <?php include('single-sticky-tarrif.php'); ?>
                    <?php include('single-sticky-tarrif.php'); ?> 
                    <?php include('single-sticky-tarrif.php'); ?>
                    <?php include('single-sticky-tarrif.php'); ?>
                </div>
            </div>
        </div>

        <div class="filter-section">
            <div class="container">
            <div class="desktop-filter">
                <div class="row">
                    <div class="col-md-2 left">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                As shown in
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton-4">
                                <a class="dropdown-item" href="#">Olx</a>
                                <a class="dropdown-item" href="#">Quikr</a>
                                <a class="dropdown-item" href="#">Just dial</a>
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-8 center">
                        <div class="center-inner-container">
                            <div class="dropdown-wrapper">
                                <div class="dropdown left-dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Tariff Type
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton-1">
                                        <a class="dropdown-item" href="#">Fixed</a>
                                        <a class="dropdown-item" href="#">Variable</a>
                                        <a class="dropdown-item" href="#">Both</a>
                                    </div>
                                </div>
                                <div class="dropdown center-dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Tariff Duration
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton-2">
                                        <a class="dropdown-item" href="#">14</a>
                                        <a class="dropdown-item" href="#">12</a>
                                        <a class="dropdown-item" href="#">All</a>
                                    </div>
                                </div>
                                <div class="dropdown right-dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Exit Fees
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton-3">
                                        <a class="dropdown-item" href="#">Yes</a>
                                        <a class="dropdown-item" href="#">No</a>
                                        <a class="dropdown-item" href="#">Both</a>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-filter">
                                Show Result
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 right">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Sort by
                            </button> 
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton-5">
                                <a class="dropdown-item" href="#">Low</a>
                                <a class="dropdown-item" href="#">High</a> 
                                <a class="dropdown-item" href="#">None</a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="mobile-filter">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Filters</a>
                    <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">As shown in</a>
                    <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Sort by</a>
                </div> 
                </nav>
                <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane custom-three fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="single">
                    <div class="small-title">Tariff Type</div>
                    <div class="switch-field"> 
                        <input type="radio" id="radio-4" name="switch-2" value="fixed" checked />
                        <label for="radio-4">Fixed</label>
                        <input type="radio" id="radio-5" name="switch-2" value="variable" />
                        <label for="radio-5">Variable</label>
                        <input type="radio" id="radio-6" name="switch-2" value="Both" />
                        <label for="radio-6">Both</label>
                    </div>
                </div>
                <div class="single custom-four">
                    <div class="small-title">Tariff Duration</div>
                    <div class="switch-field">
                        <input type="radio" id="radio-7" name="switch-3" value="14" checked />
                        <label for="radio-7">14</label>
                        <input type="radio" id="radio-8" name="switch-3" value="13" />
                        <label for="radio-8">13</label>
                        <input type="radio" id="radio-9" name="switch-3" value="12" />
                        <label for="radio-9">12</label>
                        <input type="radio" id="radio-10" name="switch-3" value="all" />
                        <label for="radio-10">All</label>
                    </div>
                </div>
                <div class="single">
                    <div class="small-title">Exit Fees</div> 
                    <div class="switch-field">
                        <input type="radio" id="radio-11" name="switch-4" value="fixed" checked />
                        <label for="radio-11">Fixed</label> 
                        <input type="radio" id="radio-12" name="switch-4" value="variable" />
                        <label for="radio-12">Variable</label>
                        <input type="radio" id="radio-13" name="switch-4" value="both" />
                        <label for="radio-13">Both</label>
                    </div>
                </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="switch-field">
                    <input type="radio" id="radio-15" name="switch-5" value="energy_linx" checked />
                    <label for="radio-15">Energy Linx</label> 
                    <input type="radio" id="radio-16" name="switch-5" value="uswitch" />
                    <label for="radio-16">Uswitch</label>
                    <input type="radio" id="radio-17" name="switch-5" value="money_super_market_&_saving_expert" />
                    <label for="radio-17">Money Super Market & Saving Expert</label>  
                    <input type="radio" id="radio-18" name="switch-5" value="none" />
                    <label for="radio-18">None</label>   
                </div>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="switch-field">
                        <input type="radio" id="radio-19" name="switch-6" value="low_to_high" checked />
                        <label for="radio-19">Low to High</label> 
                        <input type="radio" id="radio-20" name="switch-6" value="hight_to_low" />
                        <label for="radio-20">High to Low</label>
                        <input type="radio" id="radio-21" name="switch-6" value="most_recent" /> 
                        <label for="radio-21">Most Recent</label>  
                    </div>
                </div> 
                </div>
            </div>
            </div>
        </div>

        <div class="container"> 
            <div class="sub-text">
                Sign up takes 5 or so minutes (just make sure you've got some ID handy)
            </div>
        </div>

        <div class="tarrif-section" id="tarrif-section">
            <div class="container">
                <div class="row slick-slider">
                    <?php include('single-tarrif.php'); ?>
                    <?php include('single-tarrif.php'); ?>
                    <?php include('single-tarrif.php'); ?>
                    <?php include('single-tarrif.php'); ?>
                    <?php include('single-tarrif.php'); ?>
                  
                </div>
            </div>
        </div>

    </div>
    </div> 

    <?php include('components/footer.php'); ?>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/css-vars-ponyfill/2.4.3/css-vars-ponyfill.min.js" integrity="sha512-rdU7DYsBqAv47bySYF6G3h6Mlh5FxejlF4QG+ZAS6ATvL9KIhhIJ0HM3oG2xqqSHpXKVf/zIGJ/4IwbmEORFzw==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
<script defer src="./js/app.js"></script>
<script defer src="./js/slick-js.js"></script>  

</html>