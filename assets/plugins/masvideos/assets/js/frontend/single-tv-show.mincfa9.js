jQuery(function(e){if("undefined"==typeof masvideos_single_tv_show_params)return!1;e("body").on("init","#rating",function(){e("#rating").hide().before('<p class="stars"><span><a class="star-1" href="#">1</a><a class="star-2" href="#">2</a><a class="star-3" href="#">3</a><a class="star-4" href="#">4</a><a class="star-5" href="#">5</a><a class="star-6" href="#">6</a><a class="star-7" href="#">7</a><a class="star-8" href="#">8</a><a class="star-9" href="#">9</a><a class="star-10" href="#">10</a></span></p>')}).on("click","#respond p.stars a",function(){var s=e(this),a=e(this).closest("#respond").find("#rating"),r=e(this).closest(".stars");return a.val(s.text()),s.siblings("a").removeClass("active"),s.addClass("active"),r.addClass("selected"),!1}).on("click","#respond #submit",function(){var s=e(this).closest("#respond").find("#rating"),a=s.val();if(0<s.length&&!a&&"yes"===masvideos_single_tv_show_params.review_rating_required)return window.alert(masvideos_single_tv_show_params.i18n_required_rating_text),!1}),e("#rating").trigger("init")});