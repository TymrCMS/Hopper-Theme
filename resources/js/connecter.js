/**
* Pyro object
*
* The Pyro object is the foundation of all OxygenUI enhancements
*/

// It may already be defined in metadata partial
if (typeof(oxy) == 'undefined') {
	var oxy = {};
}

jQuery(function($) 
{

	// This initializes all JS goodness
	oxy.init = function() {


		$(document).on('click','a.confirm', function(e){
			
			var	message	= "Are you sure?"; 

			if( confirm(message))
			{

			}
			else
			{
				e.preventDefault();
			}

		});

		$(document).on('click','input.confirm', function(e){
			

			var	message	= "Are you sure?"; 

			//true|false
			if( confirm(message))
			{

			}
			else
			{
				e.preventDefault();
			}

		});

		//
		// Show Modal actions
		//
		$(document).on('click','.show-modal',function(event) {
			//we need to communicate to server
			var link_href = $(this).attr('href');

			event.preventDefault();

			//hide if one exists
			$('#tymr-modal').modal('hide');
			
			// Load the details box in
			$('#tymr-modal .modal-content').load(link_href, function(){
				//$('div#link-details.group-'+ id +'').fadeIn();
				$('#tymr-modal').modal('show');
			});

		});



		// Enable/Disable table action buttons
		// Add class "btn-action-all" to all group action buttons
		$(document).on('click','input[name="action_to[]"], .check-all' ,function () {
			if( $('input[name="action_to[]"]:checked, .check-all:checked').length >= 1 ){
				$(".btn-action-all").prop('disabled', false);
			} else {
				$(".btn-action-all").prop('disabled', true);
			}
		});


	};


});


function slugify(str,special_char) 
{

	special_character = special_char || '-';
	str = str.replace(/^\s+|\s+$/g, ''); // trim
	str = str.toLowerCase();

	// remove accents, swap ñ for n, etc
	var from = "ĺěščřžýťňďàáäâèéëêìíïîòóöôùůúüûñç·/_,:;";
	var to   = "lescrzytndaaaaeeeeiiiioooouuuuunc------";
	for (var i=0, l=from.length ; i<l ; i++) {
		str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
	}

	str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
	.replace(/\s+/g, special_character) // collapse whitespace and replace by _
	.replace(/-+/g, special_character); // collapse dashes

	return str;
}

/**
 * Run the oxy object/app
 * 
 * @param  {[type]} ) {	oxy.init();	} [description]
 * @return {[type]}   [description]
 */
$(document).ready(function() {
	oxy.init();
	//oxy.init_autocomplete_search();
});