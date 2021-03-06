<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"><link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Informator site</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="css/search.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <header>
            <?php include 'ssi/mainMenu.php'; ?>
        </header><!-- /header -->

        <!-- Page Content -->
        <div class="container">
            <?php include 'ssi/search.php'; ?>
            
            <div class="row">
                <div class="col-lg-12">
                    <h1>Контакти</h1>
                    
                    <article class="article">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    
                        <p><strong>Телефон:</strong> + 359 8 99 144 696; + 359 2 417 56 06</p>
                    </article>
                </div>
                <div class="col-lg-6">
                    <div class="blockMap">
                        <div id="map" class="mapContacts"></div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <form class="well form-horizontal" action=" " method="post"  id="contact_form">
                    <fieldset>

                    <legend>Свържете се с нас!</legend>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Име</label>  
                        <div class="col-md-7 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-user"></i>
                                </span>
                                <input name="first_name" placeholder="Име" class="form-control"  type="text">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Фамилия</label>  
                        <div class="col-md-7 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-user"></i>
                                </span>
                                <input name="last_name" placeholder="Фамилия" class="form-control"  type="text">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">E-Mail</label>  
                        <div class="col-md-7 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-envelope"></i>
                                </span>
                                <input name="email" placeholder="E-Mail" class="form-control"  type="text">
                            </div>
                        </div>
                    </div>
     
                    <div class="form-group">
                        <label class="col-md-3 control-label">Телефон</label>  
                        <div class="col-md-7 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-earphone"></i>
                                </span>
                                <input name="phone" placeholder="0887/555-121" class="form-control" type="text">
                            </div>
                        </div>
                    </div>
  
                    <div class="form-group">
                        <label class="col-md-3 control-label">Адрес</label>  
                        <div class="col-md-7 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-home"></i>
                                </span>
                                <input name="address" placeholder="Адрес" class="form-control" type="text">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Град</label>  
                        <div class="col-md-7 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-home"></i>
                                </span>
                                <input name="city" placeholder="Град" class="form-control"  type="text">
                            </div>
                        </div>
                    </div>
                      
                    <div class="form-group">
                        <label class="col-md-3 control-label">Съобщение</label>
                        <div class="col-md-7 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-pencil"></i>
                                </span>
                                <textarea class="form-control" name="comment" placeholder="Съобщение"></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Success message -->
                    <!-- <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div> -->

                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label"></label>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-success">
                                Изпрати <span class="glyphicon glyphicon-send"></span>
                            </button>
                        </div>
                    </div>
                    </fieldset>
                    </form>
                    </div><!-- /.form -->
                </div>

                <?php include 'ssi/publish.php'; ?>
            </div>
            <!-- /.row -->

            <hr>

            <?php include 'ssi/footer.php'; ?>
        </div>
        <!-- /.container -->
        <script src="js/bootstrapvalidator.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlvoE-NOPnju-y-33J0IWcrmgcWvMz2FI"></script>
        <script>
            $(document).ready(function(event) {
                // google map
                var $map = $('#map');
                var locations = {};

                locations = {
                    "1":{"latitude":"42.695987","longitude":" 23.316808"}
                };

                if (countObjectlocations(locations)) {
                    initMap($map[0].id, locations);
                } else {
                    $map.hide();
                }
            });

            // google map
            function countObjectlocations (locations) {
                var count = 0;
                for (i in locations) {
                    if (locations.hasOwnProperty(i)) {
                        count++;
                    }
                }
                return count > 0 ? true : false;
            }

            function initMap (mapElement, locations) {
                // get map selector
                // mapElement = mapElement.replace('#', '');

                var customStyles = [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#cfcfcf"},{"visibility":"on"}]}];
                for (first in locations) {
                    var firstIndex = first;
                    break;
                };
                var mapOptions = {
                    zoom: 17,
                    // scrollwheel: false,
                    styles: customStyles,
                    disableDefaultUI: false,
                    center: new google.maps.LatLng( locations[firstIndex].latitude, locations[firstIndex].longitude ),
                    panControl: true,
                    zoomControl: true,
                    mapTypeControl: true,
                    scaleControl: true,
                    streetViewControl: true,
                    overviewMapControl: true,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }

                var map = new google.maps.Map(document.getElementById(mapElement), mapOptions);

                var markerBounds = new google.maps.LatLngBounds();

                var infowindow = new google.maps.InfoWindow();

                var marker;
                for (i in locations) {
                    var iconUrl = "assets/images/mapPin.png",
                    iconSize = new google.maps.Size(55, 65);
                    var markerPosition = new google.maps.LatLng(locations[i].latitude, locations[i].longitude);
                    marker = new google.maps.Marker({
                        position: markerPosition,
                        map: map,
                        animation: google.maps.Animation.DROP,
                        // icon: {
                        //     url: iconUrl,
                        //     scaledSize: iconSize
                        //     // anchor: new google.maps.Point(23, 64) // pin point position
                        // }
                    });
                    markerBounds.extend(markerPosition);

                    // add infoWindow to each pin
                    // google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    //     return function() {
                    //         infowindow.setContent('<div class="tooltip">'+locations[i].description+'</div>');
                    //         infowindow.open(map, marker);
                    //     }
                    // })(marker, i));
                }
                // change zoom for multiple pins
                // map.fitBounds(markerBounds);
            }
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#contact_form').bootstrapValidator({
                    // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
                    feedbackIcons: {
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove',
                        validating: 'glyphicon glyphicon-refresh'
                    },
                    fields: {
                        first_name: {
                            validators: {
                                    stringLength: {
                                    min: 2,
                                },
                                    notEmpty: {
                                    message: 'Please supply your first name'
                                }
                            }
                        },
                         last_name: {
                            validators: {
                                 stringLength: {
                                    min: 2,
                                },
                                notEmpty: {
                                    message: 'Please supply your last name'
                                }
                            }
                        },
                        email: {
                            validators: {
                                notEmpty: {
                                    message: 'Please supply your email address'
                                },
                                emailAddress: {
                                    message: 'Please supply a valid email address'
                                }
                            }
                        },
                        phone: {
                            validators: {
                                notEmpty: {
                                    message: 'Please supply your phone number'
                                },
                                phone: {
                                    country: 'BG',
                                    message: 'Please supply a vaild phone number with area code'
                                }
                            }
                        },
                        address: {
                            validators: {
                                 stringLength: {
                                    min: 8,
                                },
                                notEmpty: {
                                    message: 'Please supply your street address'
                                }
                            }
                        },
                        city: {
                            validators: {
                                 stringLength: {
                                    min: 4,
                                },
                                notEmpty: {
                                    message: 'Please supply your city'
                                }
                            }
                        },
                        comment: {
                            validators: {
                                  stringLength: {
                                    min: 10,
                                    max: 200,
                                    message:'Please enter at least 10 characters and no more than 200'
                                },
                                notEmpty: {
                                    message: 'Please supply a description of your project'
                                }
                                }
                            }
                        }
                    })
                    .on('success.form.bv', function(e) {
                        $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                            $('#contact_form').data('bootstrapValidator').resetForm();

                        // Prevent form submission
                        e.preventDefault();

                        // Get the form instance
                        var $form = $(e.target);

                        // Get the BootstrapValidator instance
                        var bv = $form.data('bootstrapValidator');

                        // Use Ajax to submit form data
                        $.post($form.attr('action'), $form.serialize(), function(result) {
                            console.log(result);
                        }, 'json');
                    });
            });
        </script>
    </body>
</html>
