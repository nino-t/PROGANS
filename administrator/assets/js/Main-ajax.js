<script type="text/javascript">
	$(document).ready(function(){

 	    // function auto load 
	    function loadDS_data(args) {        
	        $("#data-number-load").load("<?php echo URL::Link('../app/ajaxRequest/Cek_Dashboard_data.php')?>");	        	        
	        $("#request_kategori").load("<?php echo URL::Link('../app/ajaxRequest/Request-Kategori.php')?>");	        	        
	    }
	    loadDS_data();         

	    // function auto load


	 //    // for kategori

	 //    $("#add_kategori").click(function(event) {
	 //    	$("#Data_modal").modal("show");

		// 	url = "<?php echo URL::Link('administrator/kategori/baru'); ?>";
		// 	$.get(url,function(data){
		// 		$("#Data_modal").html(data);
		// 	});	    	
	 //    });

	 //    // edit
		// function kategori_e(id) {
		// 	$("#Data_modal").modal('show');
		// 	$.ajax({
		// 		type: "GET",
		// 		url: "<?php echo URL::Link('administrator/kategori/edit/'); ?>"+id,
		// 		success: function(data) {
		// 			$("#category_id").val(data.id);
		// 			$("#desk_kategori").val(data.desk_kategori);
		// 			$("#kategori").val(data.kategori);
		// 			$("#subkategori").val(data.subkategori);
		// 			$("#subkategori").focus();


		// 		}
		// 	});
		// 	return false;
		// }


	 //  //   $("#btn_add_aksi").click(function(event) {
	 //  //   	alert("hallllooooo");
		// 	// // var subkategori =  $("#subkategori").val();
		// 		// // var kategori =  $("#kategori").val();
		// 	// // var desk_kategori =  $("#desk_kategori").val();
		// 	// // var category_id = $("#category_id").val();
		// 	// // var query_data;

		// 	// // $.post('<?php echo URL::Link('app/Kategori_ex.php')?>',
		// 	// // 	{subkategori:subkategori,kategori:kategori,desk_kategori:desk_kategori},
		// 	// // 	function(data){
		// 	// // 		$("#Data_modal").modal("hide");
		// 	// // 	})
	 //  //   });


	 //    // function action_data(){	    	

	 //    // 	$.ajax({
	 //    // 		url: "<?php echo URL::Link('app/ajaxRequest/Ajax-percobaan.php')?>", 
	 //    // 		type: "POST",
	 //    // 		dataType: "JSON",
	 //    // 		data: 'action='+action+'&kategori='+ $("#kategori").val() + '&category_id='+ $("#category_id").val() + '&desk_kategori='+ $("#desk_kategori").val() + '&subkategori='+ $("#subkategori").val()
	 //    // 	});
	 //    // }

	 //    // for kategori


	}); 


	// more view data last article
	$(document).on('click','.show_more',function(){
		var ID = $(this).attr('id');
		$('.show_more').hide();
		$('.loding').show();
		$.ajax({
			type:'POST',
			url:'<?php echo URL::Link('../app/ajaxRequest/Loader_Last_Art.php')?>',
			data:'id='+ID,
			success:function(html){
				$('#show_more_main'+ID).remove();
				$('.message-list').append(html);
			} 
		});
		
	});
	// more view data last article


	$(function() {
	  var ctx, data, myLineChart, options;
	  Chart.defaults.global.responsive = true;
	  ctx = $('#jumbotron-line-chart').get(0).getContext('2d');
	  options = {
	    showScale: false,
	    scaleShowGridLines: false,
	    scaleGridLineColor: "rgba(0,0,0,.05)",
	    scaleGridLineWidth: 0,
	    scaleShowHorizontalLines: false,
	    scaleShowVerticalLines: false,
	    bezierCurve: false,
	    bezierCurveTension: 0.4,
	    pointDot: false,
	    pointDotRadius: 0,
	    pointDotStrokeWidth: 2,
	    pointHitDetectionRadius: 20,
	    datasetStroke: true,
	    datasetStrokeWidth: 4,
	    datasetFill: true,
	    legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].strokeColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>"
	  };
	  data = {
	    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
	    datasets: [
	      {
	        label: "My Second dataset",
	        fillColor: "rgba(34, 167, 240,0.2)",
	        strokeColor: "#22A7F0",
	        pointColor: "#22A7F0",
	        pointStrokeColor: "#fff",
	        pointHighlightFill: "#fff",
	        pointHighlightStroke: "#22A7F0",
	        data: [28, 48, 40, 45, 76, 65, 90]
	      }
	    ]
	  };
	  myLineChart = new Chart(ctx).Line(data, options);
	});

	$(function() {
	  var ctx, data, myBarChart, option_bars;
	  Chart.defaults.global.responsive = true;
	  ctx = $('#jumbotron-bar-chart').get(0).getContext('2d');
	  option_bars = {
	    showScale: false,
	    scaleShowGridLines: false,
	    scaleBeginAtZero: true,
	    scaleShowGridLines: true,
	    scaleGridLineColor: "rgba(0,0,0,.05)",
	    scaleGridLineWidth: 1,
	    scaleShowHorizontalLines: false,
	    scaleShowVerticalLines: false,
	    barShowStroke: true,
	    barStrokeWidth: 1,
	    barValueSpacing: 7,
	    barDatasetSpacing: 3,
	    legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>"
	  };
	  data = {
	    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
	    datasets: [
	      {
	        label: "My First dataset",
	        fillColor: "rgba(26, 188, 156,0.6)",
	        strokeColor: "#1ABC9C",
	        pointColor: "#1ABC9C",
	        pointStrokeColor: "#fff",
	        pointHighlightFill: "#fff",
	        pointHighlightStroke: "#1ABC9C",
	        data: [65, 59, 80, 81, 56, 55, 40]
	      }, {
	        label: "My Second dataset",
	        fillColor: "rgba(34, 167, 240,0.6)",
	        strokeColor: "#22A7F0",
	        pointColor: "#22A7F0",
	        pointStrokeColor: "#fff",
	        pointHighlightFill: "#fff",
	        pointHighlightStroke: "#22A7F0",
	        data: [28, 48, 40, 19, 86, 27, 90]
	      }
	    ]
	  };
	  myBarChart = new Chart(ctx).Bar(data, option_bars);
	});

	$(function() {
	  var ctx, data, myLineChart, options;
	  Chart.defaults.global.responsive = true;
	  ctx = $('#jumbotron-line-2-chart').get(0).getContext('2d');
	  options = {
	    showScale: false,
	    scaleShowGridLines: false,
	    scaleGridLineColor: "rgba(0,0,0,.05)",
	    scaleGridLineWidth: 0,
	    scaleShowHorizontalLines: false,
	    scaleShowVerticalLines: false,
	    bezierCurve: false, 
	    bezierCurveTension: 0.4,
	    pointDot: false,
	    pointDotRadius: 0,
	    pointDotStrokeWidth: 2,
	    pointHitDetectionRadius: 20,
	    datasetStroke: true,
	    datasetStrokeWidth: 3,
	    datasetFill: true,
	    legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].strokeColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>"
	  };
	  data = {
	    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
	    datasets: [
	      {
	        label: "My First dataset",
	        fillColor: "rgba(26, 188, 156,0.2)",
	        strokeColor: "#1ABC9C",
	        pointColor: "#1ABC9C",
	        pointStrokeColor: "#fff",
	        pointHighlightFill: "#fff",
	        pointHighlightStroke: "#1ABC9C",
	        data: [65, 59, 80, 81, 56, 55, 40]
	      }, {
	        label: "My Second dataset",
	        fillColor: "rgba(34, 167, 240,0.2)",
	        strokeColor: "#22A7F0",
	        pointColor: "#22A7F0",
	        pointStrokeColor: "#fff",
	        pointHighlightFill: "#fff",
	        pointHighlightStroke: "#22A7F0",
	        data: [28, 48, 40, 19, 86, 27, 90]
	      }
	    ]
	  };
	  myLineChart = new Chart(ctx).Line(data, options);
	});

</script>

