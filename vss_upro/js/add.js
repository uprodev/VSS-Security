jQuery(document).ready(function($) { 

	$(document).on('click', '.load_vacancies', function(e){
		e.preventDefault();
		let _this = $(this);

		let data = {
			'action': 'load_vacancies',
			'query': _this.attr('data-param-posts'),
			'page': this_page,
		}

		$.ajax({
			url: '/wp-admin/admin-ajax.php',
			data: data,
			type: 'POST',
			success:function(data){
				if (data) {
					$('#response_vacancies').append(data); 
					this_page++;                      
					if (this_page == _this.attr('data-max-pages')) {
						_this.remove();               
					}
				} else {                              
					_this.remove();                   
				}
			}
		});
	});
	

	$(document).on('click', '.load_news', function(e){
		e.preventDefault();
		let _this = $(this);

		let data = {
			'action': 'load_news',
			'query': _this.attr('data-param-posts'),
			'page': this_page,
		}

		$.ajax({
			url: '/wp-admin/admin-ajax.php',
			data: data,
			type: 'POST',
			success:function(data){
				if (data) {
					$('#response_news').append(data); 
					this_page++;                      
					if (this_page == _this.attr('data-max-pages')) {
						_this.remove();               
					}
				} else {                              
					_this.remove();                   
				}
			}
		});
	});


	$(document).on('submit', '#search-form', function(e){
        e.preventDefault();

        let search = $('#search').val();
        let soort = $('#select1').val();
        let categ = $('#select2').val();

        $.ajax({
            url: '/wp-admin/admin-ajax.php',
            data:{
                action:'search_nieuws',
                search:search,
                soort:soort,
                categ:categ,
            },
            success:function(data){

                $('#ajax_news').html(data);

            }
        });
    });

});