function base_url()
{
	var rootDirectori = window.location.pathname.split("/")[1];
	var host = window.location.hostname;
	var protocol = window.location.protocol;
	var URL = protocol+'//'+host+'/'+rootDirectori
	return URL; 
}


function search_all()
{
	$("#search_cat").val('all');
	$("#search_cat_button").html('<i class="fa fa-bars"></i>');
	$("#search").attr('placeholder','Cari Semua');
}

function search_forum()
{
	$("#search_cat").val('forum');
	$("#search_cat_button").html('<i class="fa fa-comments"></i>');
	$("#search").attr('placeholder','Cari Forum');
}

function search_article()
{
	$("#search_cat").val('article');
	$("#search_cat_button").html('<i class="fa fa-file-text"></i>');
	$("#search").attr('placeholder','Cari Artikel');
}

function cari()
{
	var cat,keyword;
	cat = $("#search_cat").val();
	keyword = $("#search").val();
	if (keyword != '') {
		var rootDirectori = window.location.pathname.split("/")[1];
		var host = window.location.hostname;
		var protocol = window.location.protocol;
		var searchURL = protocol+'//'+host+'/'+rootDirectori+'/search/'+cat+'/'+keyword;
		window.location = searchURL;	
	};
}


function title(title){
	$("title").text(title);
	$("meta[property='og:title']").attr('content',title);
}

function sendNotif()
{
	socket.send(JSON.stringify({"notifsts" : true}));
}

window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);
 
  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };
 
  return t;
}(document, "script", "twitter-wjs"));