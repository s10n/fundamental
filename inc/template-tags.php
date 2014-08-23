<?php

// 글 목록 제목
function akaiv_archive_title() {
	if ( is_category() ) :
		single_cat_title();
	else :
		echo '보관함';
	endif;
}