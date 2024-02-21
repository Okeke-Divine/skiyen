<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript">
		
		$(document).ready(function(){

			var flag = 0;

			$.ajax({

				type: "GET",
				url: "process/home_load.php",
				data: {
					'offset': 0,
					'limit':15
				},
				success: function(data){
					$('body').append(data);
					flag += 3;
				}
			});

			$(window).scroll(function(){

				if($(window).scrollTop() >= $(document).height() - $(window).height() ){


			$.ajax({

				type: "GET",
				url: "process/home_load.php",
				data: {
					'offset': flag,
					'limit':3
				},
				success: function(data){
					$('body').append(data);
					flag += 3;
				}
			});

				}

			})

		})


	</script>

<body>
	
</body>