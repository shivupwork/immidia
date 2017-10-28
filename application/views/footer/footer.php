	<footer class="footer">
		<div class="container-fluid footer-bottom">
			<div class="row">
				<div class="col-md-4 col-one">
					<div class="col-inner">
						<div class="left">
							<img class="img-responsive" src="<?=base_url()?>/assets/images/logo1.png" />
							<p>Protector of the seas</p>
						</div>
						<div class="right">
							<img class="img-responsive" src="<?=base_url()?>/assets/images/logo2.png" />
							<p>International Luxury hotel association</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-two">
					<div class="col-inner">
						<h3 class="title">Quick Links</h3>
						<div class="left">
							<ul>
								<li><a href="#">Privacy</a></li>
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Assistance</a></li>
							</ul>
						</div>
						<div class="right">
							<ul>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Sitemap</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-three">
					<div class="col-inner">
						<h3 class="title">Subscribe to our newsletter</h3>
						<form>
							<input type="email" class="newsletter-email" id="email" placeholder="Email">
							<button type="submit" class="newsletter-subscribe">Subscribe</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid footer-copyright">
			<div class="row">
				<div class="col-md-6 social-icon">
					<ul>
						<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="col-md-6 copyright">
					<p>&copy; Copyright 2017 - <a href="#">Immidialuxury.com</a></p>
				</div>
			</div>
		</div>
	</footer>
	<script src="<?php echo base_url(); ?>/assets/js/custom.js"></script>
         <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="http://momentjs.com/downloads/moment.js"></script>
          <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
          <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js">
		</script>
         <script type="text/javascript" src="<?php echo base_url(); ?>/assets/country/bootstrap-formhelpers-selectbox.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>/assets/country/bootstrap-formhelpers-countries.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>/assets/country/bootstrap-formhelpers-countries.en_US.js"></script>
                <script src="<?php echo base_url(); ?>/assets/js/thumbnail-slider.js" type="text/javascript"></script>
             
		
		
        <script>
            $(function () {
                $(".date-picker").datepicker({format: "MM d DD", todayHighlight: true, autoclose: true, });
                $(".date-picker").datepicker("hide");
            });
            $(function () {
                $('input#dparrival').change(function () {
                    adate = $("#dparrival").val();
                    var strArray = adate.split(" ");
                    $("#arrival").html("<span>" + strArray[0] + "</span><span>" + strArray[1] + "</span><span>" + strArray[2] + "</span>");
                })
            });
              $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'
                });
            });

            $(function () {
                $('input#dpd').change(function () {
                    adate1 = $("#dpd").val();
                    var strArray1 = adate1.split(" ");
                    $("#departure").html("<span>" + strArray1[0] + "</span><span>" + strArray1[1] + "</span><span>" + strArray1[2] + "</span>");
                })
            });
            $(function () {
                $('select.duration').change(function () {
                    adate2 = $(".duration").val();
                    var strArray2 = adate2.split("(");
                    $("#duration").html("<span>" + strArray2[0] + "</span><span>(" + strArray2[1] + "</span>");
                })
            });

            $(function () {
                $('input#dparrivalj').change(function () {
                    adatej = $("#dparrivalj").val();
                    var strArrayj = adatej.split(" ");
                    $("#arrivalj").html("<span>" + strArrayj[0] + "</span><span>" + strArrayj[1] + "</span><span>" + strArrayj[2] + "</span>");
                })
            });

            $(function () {
                $('input#dpdj').change(function () {
                    adate1j = $("#dpdj").val();
                    var strArray1j = adate1j.split(" ");
                    $("#departurej").html("<span>" + strArray1j[0] + "</span><span>" + strArray1j[1] + "</span><span>" + strArray1j[2] + "</span>");
                })
            });
            $(function () {
                $('select.durationj').change(function () {
                    adate2j = $(".durationj").val();
                    var strArray2j = adate2j.split("(");
                    $("#durationj").html("<span>" + strArray2j[0] + "</span><span>(" + strArray2j[1] + "</span>");
                })
            });

            $(function () {
                $('input#dparrivalc').change(function () {
                    adatec = $("#dparrivalc").val();
                    var strArrayc = adatec.split(" ");
                    $("#arrivalc").html("<span>" + strArrayc[0] + "</span><span>" + strArrayc[1] + "</span><span>" + strArrayc[2] + "</span>");
                })
            });

            $(function () {
                $('input#dpdc').change(function () {
                    adate1c = $("#dpdc").val();
                    var strArray1c = adate1c.split(" ");
                    $("#departurec").html("<span>" + strArray1c[0] + "</span><span>" + strArray1c[1] + "</span><span>" + strArray1c[2] + "</span>");
                })
            });
            $(function () {
                $('select.durationc').change(function () {
                    adate2c = $(".durationc").val();
                    var strArray2c = adate2c.split("(");
                    $("#durationc").html("<span>" + strArray2c[0] + "</span><span>(" + strArray2c[1] + "</span>");
                })
            });

            $(function () {
                $('input#dparrivalv').change(function () {
                    adatev = $("#dparrivalv").val();
                    var strArrayv = adatev.split(" ");
                    $("#arrivalv").html("<span>" + strArrayv[0] + "</span><span>" + strArrayv[1] + "</span><span>" + strArrayv[2] + "</span>");
                })
            });

            $(function () {
                $('input#dpdv').change(function () {
                    adate1v = $("#dpdv").val();
                    var strArray1v = adate1v.split(" ");
                    $("#departurev").html("<span>" + strArray1v[0] + "</span><span>" + strArray1v[1] + "</span><span>" + strArray1v[2] + "</span>");
                })
            });
            $(function () {
                $('select.durationv').change(function () {
                    adate2v = $(".durationv").val();
                    var strArray2v = adate2v.split("(");
                    $("#durationv").html("<span>" + strArray2v[0] + "</span><span>(" + strArray2v[1] + "</span>");
                })
            });
            $(function () {
                $('.add').on('click', function () {
                    var $qty = $(this).closest('p').find('.qty');
                    var currentVal = parseInt($qty.val());
                    if (!isNaN(currentVal)) {
                        $qty.val(currentVal + 1);
                    }
                });
                $('.minus').on('click', function () {
                    var $qty = $(this).closest('p').find('.qty');
                    var currentVal = parseInt($qty.val());
                    if (!isNaN(currentVal) && currentVal > 0) {
                        $qty.val(currentVal - 1);
                    }
                });
            });
            $('.option-tab').click(function () {
                $('.book-tab .tab-content').css('display', 'block').css('color', '');
            });

            $(function () {
                var vid = document.getElementById("bgvid");
                var pauseButton = document.querySelector("#polina button");

                if (window.matchMedia('(prefers-reduced-motion)').matches) {
                    vid.removeAttribute("autoplay");
                    vid.pause();
                    pauseButton.innerHTML = "Paused";
                }

                function vidFade() {
                    vid.classList.add("stopfade");
                }

                vid.addEventListener('ended', function ()
                {
                    // only functional if "loop" is removed 
                    vid.pause();
                    // to capture IE10
                    vidFade();
                });


                pauseButton.addEventListener("click", function () {
                    vid.classList.toggle("stopfade");
                    if (vid.paused) {
                        vid.play();
                        pauseButton.innerHTML = "<img src=\"<?php echo base_url(); ?>assets/images/pause.png\">";
                    } else {
                        vid.pause();
                        pauseButton.innerHTML = "<img src=\"<?php echo base_url(); ?>assets/images/play.png\">";
                    }
                });
            });

        </script>
        
        