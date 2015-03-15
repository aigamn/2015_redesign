var shared = {};

	shared.init = function(){
		// prevent closing of a dropdown on form click
		$('.dropdown-menu').find(':not(a)').click(function (e) {
		    e.stopPropagation();
		});
		
		$('body').on('click', '[data-toggle-parent]', function(e){
			var $this = $(e.currentTarget),
				parentAttr = $this.data('toggleParent'),
				$parent = $this.closest(parentAttr),
				classToToggle = $this.data('toggleClass');
			
			$parent.toggleClass(classToToggle);
			
		});
	}

$('document').ready(shared.init);