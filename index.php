<!DOCTYPE html>
<html lang="en">
<head>
    <title> Admission Portal </title>
    <?php include "head.html"; ?>
</head>
<body>
    <?php include "header.html"; ?>
    <div class="background-image">
        <img src="ycp.jpg">
    </div>
    <div class="background">
        <video autoplay loop muted style="max-width: 100%; height: auto;">
            <source src="ycp.mp4" type="video/mp4"/>
        </video>
    </div>
    <!-- Slideshow container -->
    <div class="slider-container">
        <section class="auto-slider">
            <div id="slider">
                <figure>
                    <img src="slider-1.jpg" alt="Image">
                    <img src="slider-2.jpg" alt="Image">
                    <img src="slider-1.jpg" alt="Image">
                    <img src="slider-2.jpg" alt="Image">
                    <img src="slider-1.jpg" alt="Image">
                </figure>
                <div class="indicator"></div>
            </div>
        </section>
    </div>
    <?php include "footer.html"; ?>
    <script>
		$('.handle').on('click', function() {
			$('nav ul').toggleClass('showing');
		});
	</script>
</body>
</html>