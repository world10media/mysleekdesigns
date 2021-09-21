$.ajax({
	url: 'http://api.hostip.info/get_json.php',
	type:'GET',
	dataType: 'json',
	success: function (response) {
		var city = response.city;
		window.state = city[city.length - 2] + city[city.length - 1];
		console.log(state);
	}
});

$(window).load(function(){
	$('#carousel').flexslider({
		animation: "slide",
		controlNav: false,
		animationLoop: true,
		slideshow: false,
		itemWidth: 210,
		itemMargin: 0
	});

	$('input#state').val(window.state);

	$(".validate").validate();

	$('#submit').on('click', function(e) {
		var passed = true,
			errors = [],
			errorCount = 0,
			html = '',
			errs;

		if(typeof(LincxSettings) != "undefined") {
			LincxSettings.typvr120 = "off";
		}
		//e.preventDefault();
		$('#error-list').remove();
		// check all the radio buttons
		
        if(self_emp) {
            if ( ! $('input[name=self_emp]:checked').val() ) {
    		passed = false;
			errors[errorCount] = 'Are You Self-Employed Must be Answered';
			++errorCount;
		}
        };

        if(insured) {
		if ( ! $('input[name=insured]:checked').val() ) {
			passed = false;
			errors[errorCount] = 'Are You Currently Insured Must be Answered';
			++errorCount;
		}
        };

        if(Spouse) {
		if ( ! $('input[name=Spouse]:checked').val() ) {
			passed = false;
			errors[errorCount] = 'Include Spouse Must be Answered';
			++errorCount;
		}
        };

        if(affordable) {
		if ( ! $('input[name=affordable]:checked').val() ) {
			passed = false;
			errors[errorCount] = 'Is this something you would be able to afford Must be Answered';
			++errorCount;
		}
        };

        if(hospitalized) {
		if ( ! $('input[name=hospitalized]:checked').val() ) {
			passed = false;
			errors[errorCount] = 'Anyone Hospitalized in Last 5 Years Must be Answered';
			++errorCount;
		}
        };

        if(physician) {
		if ( ! $('input[name=physician]:checked').val() ) {
			passed = false;
			errors[errorCount] = 'Anyone Treated by Physician in Last 12 Months Must be Answered';
			++errorCount;
		}
        };

        if(prescription) {
		if ( ! $('input[name=prescription]:checked').val() ) {
			passed = false;
			errors[errorCount] = 'Anyone Taking Prescription Medications Must be Answered';
			++errorCount;
		}
        };

        if(health) {
		if ( ! $('input[name=health]:checked').val() ) {
			passed = false;
			errors[errorCount] = 'Any Major Health Conditions Must be Answered';
			++errorCount;
		}
        };

        if(previously_denied) {
		if ( ! $('input[name=previously-denied]:checked').val() ) {
			passed = false;
			errors[errorCount] = 'Have You Ever Been Denied Health Insurance Must be Answered';
			++errorCount;
		}
        };

        if(ss_disabled) {
		if ( ! $('input[name=ss-disabled]:checked').val() ) {
			passed = false;
			errors[errorCount] = 'Are You Currently on Social Security or Disability Must be Answered';
			++errorCount;
		}
        };

        if(pregnant) {
            if (!$('input[name=pregnant]:checked').val()) {
                passed = false;
                errors[errorCount] = 'Is There Anyone on the Policy Who is Pregnant Must be Answered';
                ++errorCount;
            }
        };



		$('#h-conditions .checklist input').each(function(i,v) {
			if (this.checked) {
				$(this).val('Y');
			} else {
				$(this).val('N');
			}
		});

		if ($('.validate').valid() && passed) {
			return true;
		} else {
			if ( ! passed ) {
				errs = $('<div id="error-list" class="error"></div>');
				html = '<ul class="error-list">';
				for (i=0; i < errorCount; ++i) {
					html = html + '<li>' + errors[i] + '</li>';
				}
				html = html + '</ul>';
				errs.html(html);
				$('#submit').parent().before(errs[0]);
				passed = true;
			}
			return false;
		}

	});

	$('#birthday_selects select').change(function(){
		$('#applicant_dob').val($('#DateOfBirth_Month option:selected').val()+' '+$('#DateOfBirth_Day option:selected').val()+' '+$('#DateOfBirth_Year option:selected').val());
	});

	$('#phone_container input').focusout(function(){
		$('#main_phone').val('('+$('#phone').val()+')'+$('#phone2').val()+$('#phone3').val());
	});

	$('#fname').focus(function(){
		if ($('#fname').val() == 'First Name') {
			$('#fname').val("");
		}
	});

	$('#fname').focusout(function(){
		if ($('#fname').val() == '') {
			$('#fname').val("First Name");
		}
	});

	$('#lname').focus(function(){
		if ($('#lname').val() == 'Last Name') {
			$('#lname').val("");
		}
	});

	$('#lname').focusout(function(){
		if ($('#lname').val() == '') {
			$('#lname').val("Last Name");
		}
	});

	$('#actionform').load(function(){
		data = Base64.encode($('#email').val());
		if (formid==1){
			$(location).attr('href', 'thankyou.php?ver=' + ver + '&form=short' + '&var=' + data + '&zip=' + $('#zip').val() + '&sub_affiliate_id=' + $('#sub_affiliate_id').val());
		} else {
			$(location).attr('href', 'thankyou.php?ver=' + ver + '&form=long' + '&var=' + data + '&zip=' + $('#zip').val() + '&sub_affiliate_id=' + $('#sub_affiliate_id').val());
		}
	});

	$(".modal-inline").colorbox({inline:true, width:"60%",height:"70%"});

	$('#lb_conditions').on('change', function() {
		$('#h-conditions').slideToggle(200);
	});

	$('#lb_conditions2').on('click', function() {
		$('#h-conditions').slideUp(200);
	});


    
    $(function() {
        $(document).delegate("a","click",function() {
            window.onbeforeunload = null;
        });
        $(document).delegate("form","click",function() {
            window.onbeforeunload = null;
        });
    });


/* function to hide/show health condtions on long form - Simon Lacey */

    function h_conditions() {
        document.getElementById('previous_conditons').style.display = "none";
    }

    function show() {
        document.getElementById('previous_conditons').style.display = "block";
    }

  

	/* BrokersWeb Exit Script ---------------------------
	var closewindow = true;
	// leave page code for BorkersWeb
	window.onbeforeunload = function() {
		if (closewindow) {
			var ifrm = $('<iframe></iframe>');
            ifrm.attr({
                'src': 'partners-list.php?state=' + window.state,
                'width': '100%',
                'height': '1200',
                'frameborder': '0'
            });
            $('body').empty().append(ifrm[0]);
			//location = 'partners-list.php?state=' + window.state;
			return "Congratulations! You're prequalified by the following providers." + "\n\r" + "Stay on this page to view them now.";
		}
	};

	$('a').on('click', function(){
		closewindow = false;
	});
	$('input[type=submit]').on('click', function(){
		closewindow = false;
	});
	*/

});