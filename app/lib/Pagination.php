<?php 

/**
* Class Pagination
*/
class Pagination
{
	

	function cariPosisi($batas)
	{
		if (empty($_GET['hal'])) {
			$posisi = 0;
			$_GET['hal'] = 1;
		} else {
			$posisi = ($_GET['hal']-1) * $batas;
		}
		return $posisi;
	}

	function jumlahHalaman($jmldata,$batas)
	{
		return ceil($jmldata / $batas);
	}

	function navHalaman($halaman_aktif,$current_link,$jmlhalaman)
	{
		$folder = substr($_SERVER['SCRIPT_NAME'], 0, strrpos($_SERVER['SCRIPT_NAME'], "/")+1);  
		$base_url = "http://" . $_SERVER['SERVER_NAME'] . $folder;
		$file = $base_url;

		$link_halaman = "<ul class='pagination'>";

		if ($halaman_aktif > 1) {
			$prev = $halaman_aktif - 1;
			$link_halaman .= "<li><a href=\"$file$current_link/1\">First</a></li> <li><a href=\"$file$current_link/$prev\">Prev</a></li>"; 
		} else {
			$link_halaman .= "<li class='disabled'><a href='#'>First</a></li>  <li class='disabled'><a href='#'>Prev</a></li>"; 
		}
		
		$angka = ($halaman_aktif > 3 ? "<li class='disabled'><a href='#'>...</a></li>":"");
		for ($i=$halaman_aktif - 2; $i < $halaman_aktif; $i++) { 
			if ($i < 1) continue;
			$angka .= "<li><a href=\"$file$current_link/$i\">$i</a></li> ";
		}

		$angka .= "<li class='active'><a href='#'>$halaman_aktif</a></li>";

		for ($i=$halaman_aktif; $i < $halaman_aktif; $i++) { 
			$angka .= "<li><a href=\"$file$current_link/$i\">$i</a></li>";
		}

		$angka .= ($halaman_aktif+2<$jmlhalaman? " <li class='disabled'><a href='#'>...</a></li> <li><a href=\"$file$current_link/$jmlhalaman\">$jmlhalaman</a></li>":"");

		$link_halaman .= "$angka";

		if ($halaman_aktif < $jmlhalaman) {
			$next = $halaman_aktif + 1;
			$link_halaman .= "<li><a href=\"$file$current_link/$next\">Next</a></li> <li><a href=\"$file$current_link/$jmlhalaman\">Last</a></li>";
		} else {
			$link_halaman .= "<li class='disabled'><a href='#'>Next</a></li>  <li class='disabled'><a href='#'>Last</a></li>";
		}
		
		$link_halaman .= "</ul>";		
		return $link_halaman;
	}

	function navHalamanAjax($halaman_aktif,$func,$jmlhalaman)
	{
		$folder = substr($_SERVER['SCRIPT_NAME'], 0, strrpos($_SERVER['SCRIPT_NAME'], "/")+1);  
		$base_url = "http://" . $_SERVER['SERVER_NAME'] . $folder;
		$file = $base_url;

		$link_halaman = "<ul class='pagination'>";

		if ($halaman_aktif > 1) {
			$prev = $halaman_aktif - 1;
			$link_halaman .= "<li><a href=\"javascript:void(0)\" onclick=\"$func(1)\">First</a></li> <li><a href=\"javascript:void(0)\" onclick=\"$func($prev)\">Prev</a></li>"; 
		} else {
			$link_halaman .= "<li class='disabled'><a href='javascript:void(0)'>First</a></li>  <li class='disabled'><a href='javascript:void(0)'>Prev</a></li>"; 
		}
		
		$angka = ($halaman_aktif > 3 ? "<li class='disabled'><a href='javascript:void(0)'>...</a></li>":"");
		for ($i=$halaman_aktif - 2; $i < $halaman_aktif; $i++) { 
			if ($i < 1) continue;
			$angka .= "<li><a href=\"javascript:void(0)\" onclick=\"$func($i)\">$i</a></li> ";
		}

		$angka .= "<li class='active'><a href='javascript:void(0)'>$halaman_aktif</a></li>";

		for ($i=$halaman_aktif; $i < $halaman_aktif; $i++) { 
			$angka .= "<li><a href=\"javascript:void(0)\" onclick=\"$func($i)\">$i</a></li>";
		}

		$angka .= ($halaman_aktif+2<$jmlhalaman? " <li class='disabled'><a href='javascript:void(0)'>...</a></li> <li><a href=\"javascript:void(0)\" onclick=\"$func($jmlhalaman)\">$jmlhalaman</a></li>":"");

		$link_halaman .= "$angka";

		if ($halaman_aktif < $jmlhalaman) {
			$next = $halaman_aktif + 1;
			$link_halaman .= "<li><a href=\"javascript:void(0)\" onclick=\"$func($next)\">Next</a></li> <li><a href=\"javascript:void(0)\" onclick=\"$func($jmlhalaman)\">Last</a></li>";
		} else {
			$link_halaman .= "<li class='disabled'><a href='javascript:void(0)'>Next</a></li>  <li class='disabled'><a href='javascript:void(0)'>Last</a></li>";
		}
		
		$link_halaman .= "</ul>";		
		return $link_halaman;
	}

}
