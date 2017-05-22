
<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Footer -->
<footer>
    <div class="row">
        <div class="col-lg-12">
            <p>Copyright &copy; Бизнес навигатор 2017</p>
        </div>
    </div>
</footer>
<div id="toTop" class="btn btn-info"><span class="glyphicon glyphicon-chevron-up"></span> най-горе</div>
<script type="text/javascript">
	$(document).ready(function(){
    	$(window).scroll(function () {
			if ($(this).scrollTop() != 0) {
				$('#toTop').fadeIn();
			} else {
				$('#toTop').fadeOut();
			}
		});

	    $('#toTop').click(function(){
	        $("html, body").animate({ scrollTop: 0 }, 600);
	        return false;
	    });
	});
</script>